<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_is_redirected_to_admin_dashboard_on_login()
    {
        $admin = User::factory()->create([
            'usertype' => 'admin',
        ]);

        $response = $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/admin/dashboard');
    }

    public function test_user_is_redirected_to_user_dashboard_on_login()
    {
        $user = User::factory()->create([
            'usertype' => 'user',
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
    }

    public function test_admin_can_access_admin_dashboard()
    {
        $admin = User::factory()->create([
            'usertype' => 'admin',
        ]);

        $response = $this->actingAs($admin)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee("You're logged in as Admin!");
    }

    public function test_user_cannot_access_admin_dashboard()
    {
        $user = User::factory()->create([
            'usertype' => 'user',
        ]);

        $response = $this->actingAs($user)->get('/admin/dashboard');

        // AdminMiddleware aborts with 403
        $response->assertStatus(403);
    }
}
