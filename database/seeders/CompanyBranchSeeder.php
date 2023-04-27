<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CompanyBranch::factory(5)->create();
    }
}
