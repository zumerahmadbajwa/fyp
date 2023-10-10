<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admin = [
      'name' => 'Admin',
      'email' => 'admin123@gmail.com',
      'password' => Hash::make('123456'),
      "email_verified_at" => \Carbon\Carbon::now(),
      "type" => "admin"
    ];
    User::create($admin);
  }
}
