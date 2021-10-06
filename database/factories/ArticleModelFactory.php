<?php

namespace Database\Factories;

//use App\Models\Model;
use App\Models\ArticleModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'a_title'   => $this->faker->sentence(mt_rand(2,6)),
            'a_slug'    => $this->faker->slug(),
            'a_excerpt' => $this->faker->paragraph(),
            'a_body'    => $this->faker->paragraph(mt_rand(5,10)),
            'author_id' => mt_rand(1, 3),
            'category_id'   => mt_rand(1, 2)
        ];
    }
}
