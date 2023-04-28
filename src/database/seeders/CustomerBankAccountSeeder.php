<?php

namespace Database\Seeders;
use App\Models\CustomerBankAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerBankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerBankAccount::factory(100)->create();
    }
}
