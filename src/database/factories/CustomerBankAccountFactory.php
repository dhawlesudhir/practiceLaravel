<?php

namespace Database\Factories;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerBankAccount>
 */
class CustomerBankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'accountNumber' => fake()->creditCardNumber(),
            'accountHolderName' => fake()->name(),
            'bankName' => fake()->company(),
            'IFSC_code' => fake()->swiftBicNumber(),
            'accountType' => fake()->creditCardType(),
            'customer_id' => Customer::all()->unique()->random()->id,
            
        ];
    }
}
