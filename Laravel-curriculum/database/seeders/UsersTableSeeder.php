<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::all();

        foreach ($companies as $company){
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'company_id' => $company->id,
        ]);
        }

    }
}
