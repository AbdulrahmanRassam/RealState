<?php

namespace Database\Factories;

use App\Models\PropertyType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count=PropertyType::query()->count();

        if ($count===0) {
        $typeID=PropertyType::factory()->create()->id;
        }else{
            $typeID=rand(1,$count);
        }
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address.'@gmail.com',
            'propertyType' => $typeID,
        ];
    }
}
