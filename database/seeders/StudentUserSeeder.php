<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class StudentUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $student = [
      'name' => 'zumer',
      'email' => 'zumer@superior.com',
      'password' => Hash::make('123456'),
      "email_verified_at" => \Carbon\Carbon::now(),
      "type" => "student"
    ];
    User::create($student);

    $student = [
      'name' => 'hafsa',
      'email' => 'hafsa@superior.com',
      'password' => Hash::make('123456'),
      "email_verified_at" => \Carbon\Carbon::now(),
      "type" => "student"
    ];
    User::create($student);
  }
}
