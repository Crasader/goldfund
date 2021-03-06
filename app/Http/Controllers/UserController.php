<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\InvalidPasswordException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\CompanyProfile;
use App\Mail\CustomerQuestionMail;

class UserController extends Controller
{
    //
    public function index()
    {
        $userSession = auth()->user();
        return view('layouts.user-dashboard', compact('userSession'));
    }

    public function authorizeTransaction(Request $request)
    {
    	if(is_null($request->trans_password))
    		throw new InvalidPasswordException('This field is required.');

        if(! \Hash::check($request->trans_password, auth()->user()->trans_password))
        {
            throw new InvalidPasswordException('Invalid transaction password');
        }

        return 1;
    }

    public function sendMessage()
    {
        $validator = \Validator::make(request()->all(),[
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'message'   => 'required',
        ]);

        if($validator->fails())
        {
            if(request()->ajax())
            {
                return response()->json([
                    'errors' => $validator->getMessageBag()
                ], 403);
            }
            else
            {
                return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
            }                
        }

        $data = collect(request()->all());
        $attachment = request()->file('attachment');
        if( !is_null($attachment)) 
        {
            if(!$attachment->isValid()) throw new HttpException(403, 'uploaded file is corrupted.');

            $data = $data->merge([
                'attachment' => [
                    'file_name' => 'colo.jpg',
                    'path' => $attachment->store('images/mail'),
                ]
            ]);
        }
        
        // Send mail to admin
        \Mail::to(CompanyProfile::where('field', 'email')->first()->value)
            ->send(new CustomerQuestionMail($data));

        
        return request()->ajax() ? 
                    response()->json('Your message has been sent.', 200) : 
                    redirect()->back()->with(['success' => 'Your message has been sent.']);
    }
}
