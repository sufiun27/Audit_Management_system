<?php
// database/factories/InvoiceFactory.php

// database/factories/InvoiceFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_no' => $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'balance' => $this->faker->numberBetween(-5000, 5000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
