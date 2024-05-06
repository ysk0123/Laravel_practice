<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create(['company_name' => '株式会社AAA']);
        Company::create(['company_name' => '株式会社BBB']);
        Company::create(['company_name' => '株式会社CCC']);
    }
}
