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
            'a_title'   => $this->faker->sentence(mt_rand(2,5)),
            'a_slug'    => $this->faker->slug(),
            'a_excerpt' => $this->faker->paragraph(),
            
            /** Using faker->paragraphs(), paragraphs() is return array value. since we want multiple paragraph inside a <p> tag 
             * we can use implode to add <p> tag each paragraphs() array, or
             * we can use collection ad using map() to add a <p> tag
            */
            // 'a_body'    => '<p>'.implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))).'</p>', // Using implode
            'a_body'    => collect($this->faker->paragraphs(mt_rand(5,10))) // Turn array to collection using collect()
                            // ->map(fn($p) => "<p>$p</p>"), // For php > 8.x
                            ->map(function($p) { // For php < 8.x
                                return "<p class=\"text-justify\">$p</p>";
                            })
                            ->implode(''), // convert array to string using implode

            'author_id' => mt_rand(1, 3),
            'category_id'   => mt_rand(1, 2)
        ];
    }
}
