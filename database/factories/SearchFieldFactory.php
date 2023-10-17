<?php

namespace Database\Factories;

use App\Models\SearchProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SearchField>
 */
class SearchFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $count=SearchProfile::query()->count();

        if ($count===0) {
        $search_profile_id=SearchProfile::factory()->create()->id;
        }else{
            $search_profile_id=rand(1,$count);
        }
        $names = array(
            'Price',
            'Area',
            'Rooms'
        );

        return [
            'name' =>$names[array_rand($names)],
            'min_value' =>  rand(100,6000),
            'max_value' =>  rand(2000,9000),
            'search_profile_id' => $search_profile_id,
        ];
    }
}
