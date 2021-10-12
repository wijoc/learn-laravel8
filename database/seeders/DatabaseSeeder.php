<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CategoryModel;
use App\Models\ArticleModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /** Using factory */
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();

        CategoryModel::create([
            'c_name' => 'Programming',
            'c_slug' => 'programming'
        ]);

        CategoryModel::create([
            'c_name' => 'Web Design',
            'c_slug' => 'web-design'
        ]);

        CategoryModel::create([
            'c_name' => 'Personal',
            'c_slug' => 'personal'
        ]);

        ArticleModel::factory(10)->create();

      /** Manual method */
        // User::create([
        //     'name'  => 'user 1',
        //     'email' => 'user1@email.com',
        //     'password' => bcrypt('user1') // User bcrypt as encyption method
        // ]);

        // CategoryModel::create([
        //     'c_name' => 'Category 1',
        //     'c_slug' => 'category-1'
        // ]);

        // CategoryModel::create([
        //     'c_name' => 'Category 2',
        //     'c_slug' => 'category-2'
        // ]);

        // ArticleModel::create([
        //     'a_title'   => 'First title',
        //     'a_slug'    => 'first-title',
        //     'a_excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse.</p>',
        //     'a_body'    => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse. Enim perferendis itaque ex reiciendis! Quam aperiam minus, quasi dolorem, sequi dignissimos voluptas aliquam fugiat quos voluptatum ratione. Assumenda beatae iusto nobis eveniet repellendus suscipit, ipsam omnis dignissimos doloremque ipsum similique dicta aliquam numquam nemo atque doloribus, exercitationem tempore id repudiandae ipsa! Accusantium reiciendis, doloremque id earum assumenda doloribus ex neque minima et maiores, voluptatibus quaerat praesentium nulla molestiae deleniti magnam autem iste, mollitia architecto distinctio possimus. Tempora blanditiis accusantium amet alias molestias minima!</p>',
        //     'category_id' => 1,
        //     'author_id'   => 1
        // ]);

        // ArticleModel::create([
        //     'a_title'   => 'Second title',
        //     'a_slug'    => 'second-title',
        //     'a_excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse.</p>',
        //     'a_body'    => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse. Enim perferendis itaque ex reiciendis! Quam aperiam minus, quasi dolorem, sequi dignissimos voluptas aliquam fugiat quos voluptatum ratione. Assumenda beatae iusto nobis eveniet repellendus suscipit, ipsam omnis dignissimos doloremque ipsum similique dicta aliquam numquam nemo atque doloribus, exercitationem tempore id repudiandae ipsa! Accusantium reiciendis, doloremque id earum assumenda doloribus ex neque minima et maiores, voluptatibus quaerat praesentium nulla molestiae deleniti magnam autem iste, mollitia architecto distinctio possimus. Tempora blanditiis accusantium amet alias molestias minima!</p>',
        //     'category_id' => 2,
        //     'author_id'   => 1
        // ]);

        // ArticleModel::create([
        //     'a_title'   => 'Third title',
        //     'a_slug'    => 'third-title',
        //     'a_excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse.</p>',
        //     'a_body'    => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum quis velit ex. Asperiores voluptatem distinctio voluptatibus, assumenda delectus, minus corrupti, deleniti vel rerum saepe esse. Enim perferendis itaque ex reiciendis! Quam aperiam minus, quasi dolorem, sequi dignissimos voluptas aliquam fugiat quos voluptatum ratione. Assumenda beatae iusto nobis eveniet repellendus suscipit, ipsam omnis dignissimos doloremque ipsum similique dicta aliquam numquam nemo atque doloribus, exercitationem tempore id repudiandae ipsa! Accusantium reiciendis, doloremque id earum assumenda doloribus ex neque minima et maiores, voluptatibus quaerat praesentium nulla molestiae deleniti magnam autem iste, mollitia architecto distinctio possimus. Tempora blanditiis accusantium amet alias molestias minima!</p>',
        //     'category_id' => 1,
        //     'author_id'   => 1
        // ]);
    }
}
