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
        $status=array("Đã Bán", "Chưa có giao dịch",
            "Đang có giao dịch")

        ;

        return [
            //
            "name"=>$this->faker->name(),
            "location"=>$this->faker->text,
            "cost"=>$this->faker->numberBetween(120,9900)*100000,
            "detail"=>$this->faker->text,
            "description"=>$this->faker->text(20),
            "image"=>"abce.jpg",
            "status"=>$status[random_int(0,2)]
        ];
    }
}
