<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->sentence($nbWords = 3, $variableNbWords = false);
        return [
            'name' => $name,
            'slug' => Str::slug($name,'-'),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(["Desenvolvimento web", "Desenho web", "Programação", "Sistemas operacionais", "Banco de dados"])
        ];
    }
}
