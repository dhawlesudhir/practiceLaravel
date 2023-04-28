<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'homeNumber' => fake()->buildingNumber(),
            'apartmentName' => fake()->secondaryAddress(),
            'landMark' => fake()->streetName(),
            'areaName'=> fake()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'pincode' => fake()->postcode(),
            'county' => fake()->country(),
            'customer_id' => Customer::all()->unique()->random()->id,
        ];
    }
}