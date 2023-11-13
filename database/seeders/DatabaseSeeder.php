<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        // User::create([
        //     'name' => 'candidate',
        //     'role' => 'candidate',
        //     'email' => 'candidate@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'company',
        //     'role' => 'employer',
        //     'email' => 'company@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // Company::create([
        //     'user_id' => 2,
        //     'name' => 'company',
        //     'email' => 'company@gmail.com',
        //     'phone' => '082143022175',
        //     'website' => 'www.game3rb.com',
        //     'about' => 'Ini Company',
        //     'country' => 'INDONESIA',
        //     'province_id' => 12,
        //     'regency_id' => 1203,
        //     'address' => 'Jl.Ketintang 12A',
        //     'status' => 'unverified'
        // ]);
        // Candidate::create([
        //     'user_id' => 1,
        //     'name' => 'candidate',
        //     'email' => 'candidate@gmail.com'
        // ]);
        // Job::create([
        //     'title' => 'UI Designer',
        //     'description' => '<p>kokok</p>',
        //     'type' => 'Fulltime',
        //     'salary' => 3000000,
        //     'country' => 'INDONESIA',
        //     'province_id' => 12,
        //     'regency_id' => 1203,
        //     'company_id' => 1,
        //     'address' => 'Jl.Ketintang 12A',
        //     'status' => 'Active'
        // ]);

        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
    }
}
