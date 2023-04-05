<?php

namespace Database\Factories;

use App\Models\LegacyGeneralConfiguration;
use Illuminate\Database\Eloquent\Factories\Factory;

class LegacyGeneralConfigurationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LegacyGeneralConfiguration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'ref_cod_instituicao' => LegacyInstitutionFactory::new()->create(), // create()
        ];
    }
}
