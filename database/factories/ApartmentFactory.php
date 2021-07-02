<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status=[
          "Đã Bán", "Chưa có giao dịch",
            "Đang có giao dịch"
        ];
        return [
            //
            "name"=>$this->faker->name(),
            "location"=>$this->faker->randomLetter,
            "cost"=>$this->faker->numberBetween(120,9900)*100000,
            "detail"=>$this->faker->randomLetter,
            "description"=>$this->faker->randomLetter,
            "image"=>"abce.jpg",
            "status"=>array_rand($status,1)
        ];
    }
}
