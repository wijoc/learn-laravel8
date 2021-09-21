<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Article_m //extends Model
{
    private static $blogData = [
        [
            'post_title'    => 'First post',
            'slug'          => 'first-post-title',
            'post_author'   => 'First author',
            'post_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur labore quisquam iusto pariatur vitae quam aliquam molestias vel, provident dolorem voluptatum veniam tempore sapiente alias porro! Minus consequatur iure rem. A deleniti minima voluptate qui repellendus ipsam sit illum laboriosam ipsa maxime eaque exercitationem dolorum quia libero cupiditate aliquid, animi nisi possimus totam similique. Vitae, minus mollitia quas quibusdam cupiditate expedita hic autem, unde velit omnis voluptatum repellat recusandae aperiam, explicabo id. Maiores eos voluptatum ullam natus accusamus aspernatur!'
        ],
        [
            'post_title'    => 'Second post',
            'slug'          => 'second-post-title',
            'post_author'   => 'Second author',
            'post_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur labore quisquam iusto pariatur vitae quam aliquam molestias vel, provident dolorem voluptatum veniam tempore sapiente alias porro! Minus consequatur iure rem. A deleniti minima voluptate qui repellendus ipsam sit illum laboriosam ipsa maxime eaque exercitationem dolorum quia libero cupiditate aliquid, animi nisi possimus totam similique. Vitae, minus mollitia quas quibusdam cupiditate expedita hic autem, unde velit omnis voluptatum repellat recusandae aperiam, explicabo id. Maiores eos voluptatum ullam natus accusamus aspernatur!'
        ],
        [
            'post_title'    => 'Third post',
            'slug'          => 'third-post-title',
            'post_author'   => 'Third author',
            'post_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur labore quisquam iusto pariatur vitae quam aliquam molestias vel, provident dolorem voluptatum veniam tempore sapiente alias porro! Minus consequatur iure rem. A deleniti minima voluptate qui repellendus ipsam sit illum laboriosam ipsa maxime eaque exercitationem dolorum quia libero cupiditate aliquid, animi nisi possimus totam similique. Vitae, minus mollitia quas quibusdam cupiditate expedita hic autem, unde velit omnis voluptatum repellat recusandae aperiam, explicabo id. Maiores eos voluptatum ullam natus accusamus aspernatur!'
        ],
        [
            'post_title'    => 'Fourth post',
            'slug'          => 'fourth-post-title',
            'post_author'   => 'Fourth author',
            'post_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur labore quisquam iusto pariatur vitae quam aliquam molestias vel, provident dolorem voluptatum veniam tempore sapiente alias porro! Minus consequatur iure rem. A deleniti minima voluptate qui repellendus ipsam sit illum laboriosam ipsa maxime eaque exercitationem dolorum quia libero cupiditate aliquid, animi nisi possimus totam similique. Vitae, minus mollitia quas quibusdam cupiditate expedita hic autem, unde velit omnis voluptatum repellat recusandae aperiam, explicabo id. Maiores eos voluptatum ullam natus accusamus aspernatur!'
        ],
        [
            'post_title'    => 'Fifth post',
            'slug'          => 'fifth-post-title',
            'post_author'   => 'Fifth author',
            'post_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur labore quisquam iusto pariatur vitae quam aliquam molestias vel, provident dolorem voluptatum veniam tempore sapiente alias porro! Minus consequatur iure rem. A deleniti minima voluptate qui repellendus ipsam sit illum laboriosam ipsa maxime eaque exercitationem dolorum quia libero cupiditate aliquid, animi nisi possimus totam similique. Vitae, minus mollitia quas quibusdam cupiditate expedita hic autem, unde velit omnis voluptatum repellat recusandae aperiam, explicabo id. Maiores eos voluptatum ullam natus accusamus aspernatur!'
        ],
    ];

    public static function allArticle(){
        return collect(self::$blogData);
    }

    public static function getArticle($slug){
        $articels = static::allArticle();

        return $articels->firstWhere('slug', $slug);
    }
}
