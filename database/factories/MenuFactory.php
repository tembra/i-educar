<?php

namespace Database\Factories;

use App\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{

    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'title' => $this->faker->domainName,
            'description' => $this->faker->name,
            'link' => $this->faker->filePath(),
            'icon' => $this->faker->imageUrl,
            'order'=> $this->faker->randomDigitNotZero(),
            'type' => $this->faker->randomDigitNotZero(),
            'parent_old' => null,
            'old' => null,
            'process' => 759,
            'active' => true,
        ];
    }
}
