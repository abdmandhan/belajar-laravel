<?php

namespace Database\Factories;

use App\Models\Umkm;
use Illuminate\Database\Eloquent\Factories\Factory;

class UmkmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Umkm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'  => $this->faker->name(),
            'owner_name'  => $this->faker->name(),
            'establish_date'  => $this->faker->date(),
        ];
    }
}
