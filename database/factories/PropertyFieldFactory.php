<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyField>
 */
class PropertyFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $count=Property::query()->count();

        if ($count===0) {
        $property_id=Property::factory()->create()->id;
        }else{
            $property_id=rand(1,$count);
        }

        $names = array(
            'Price',
            'Area',
            'Rooms'
        );
        return [
            'name' =>$names[array_rand($names)],

            'value' => rand(100,9000),
            'property_id' => $property_id,
        ];
    }
}
