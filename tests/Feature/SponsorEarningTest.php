<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Customer;
use App\Plan;
use App\User;
use App\Deposit;
use App\Earning;

class SponsorEarningTest extends TestCase
{
	use DatabaseMigrations;
  	use DatabaseTransactions;

  	/**
     * @test
     */
    public function receive_commission_unless_sponsor_deposit_is_active()
    {
        // Upline parent.
        $parent = factory(Customer::class)->create([
            'username' => 'parent',
            'sponsor_id' => $this->cust_admin->id,
            'placement_id' => $this->cust_admin->id,
            'direction' => 'R',
        ]);
        // Register a new child, and start to deposit.
        $child = factory(Customer::class)->create([
            'sponsor_id' => $parent->id,
            'placement_id' => $parent->id,
            'direction' => 'R',
        ]);
        $child_deposit = factory(Deposit::class)->create([ 
            'cust_id' => $child->id, 
            'plan_id' => $this->plan->id, 
            'amount' => 100,
        ]);
        // Approve deposit by administrator.
        $response = $this->actingAs($this->backend_admin, 'api_admin')
                                ->post('api/admin/deposit/' . $child_deposit->id . '/approve');
        // Assert that parent doesn't receive commission.                        
        $this->assertDatabaseMissing('sponsor_earning_commissions', [
            'sponsor_id' => $parent->id,
            'deposit_id' => $child_deposit->id,
        ]);                      
    }


    /**
     * @test
     */
    public function receive_commission_base_on_sponsor_hierachy_level()
    {
        $parent_top = factory(Customer::class)->create([
            'username' => 'parent_top',
            'sponsor_id' => $this->cust_admin->id,
            'placement_id' => $this->cust_admin->id,
            'direction' => 'R',
        ]);
        $parent_top_deposit = factory(Deposit::class)->create([ 
            'cust_id' => $parent_top->id, 
            'plan_id' => $this->plan->id, 
            'amount' => 100,
            'status' => 1,
        ]);



        $child_1_parent_top = factory(Customer::class)->create([
            'username' => 'child_1_parent_top',
            'sponsor_id' => $parent_top->id,
            'placement_id' => $parent_top->id,
            'direction' => 'R',
        ]);


        $child_2_parent_top = factory(Customer::class)->create([
            'username' => 'child_2_parent_top',
            'sponsor_id' => $parent_top->id,
            'placement_id' => $child_1_parent_top->id,
            'direction' => 'R',
        ]);        
        $child_2_parent_top_deposit = factory(Deposit::class)->create([ 
            'cust_id' => $child_2_parent_top->id, 
            'plan_id' => $this->plan->id, 
            'amount' => 100,
            'status' => 1,
        ]);


        $direct_1_of_child_2_parent_top = factory(Customer::class)->create([
            'sponsor_id' => $child_2_parent_top->id,
            'placement_id' => $child_2_parent_top->id,
            'direction' => 'R',
        ]);


        $direct_2_of_child_2_parent_top = factory(Customer::class)->create([
            'sponsor_id' => $child_2_parent_top->id,
            'placement_id' => $direct_1_of_child_2_parent_top->id,
            'direction' => 'R',
        ]);
        $direct_2_of_child_2_parent_top_deposit = factory(Deposit::class)->create([ 
            'cust_id' => $direct_2_of_child_2_parent_top->id, 
            'plan_id' => $this->plan->id, 
            'amount' => 100,
        ]);



        $response = $this->actingAs($this->backend_admin, 'api_admin')
                                ->post('api/admin/deposit/' . $direct_2_of_child_2_parent_top_deposit->id . '/approve');


                                
        $this->assertDatabaseHas('sponsor_earning_commissions', [
            'sponsor_id' => $child_2_parent_top->id,
            'deposit_id' => $direct_2_of_child_2_parent_top_deposit->id,
            'amount' => $direct_2_of_child_2_parent_top_deposit->amount * 
                      $this->plan->sponsor_levels()
                          ->where('level', 1)
                          ->first()
                          ->commission,
        ]);
        $this->assertDatabaseHas('sponsor_earning_commissions', [
            'sponsor_id' => $parent_top->id,
            'deposit_id' => $direct_2_of_child_2_parent_top_deposit->id,
            'amount' => $direct_2_of_child_2_parent_top_deposit->amount * 
                      $this->plan->sponsor_levels()
                          ->where('level', 2)
                          ->first()
                          ->commission,
        ]);
    }
}
