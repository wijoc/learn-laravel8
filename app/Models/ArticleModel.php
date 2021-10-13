<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;

    /** If table not same as model name */
    protected $table = 'articles_ms';

    /**
     * The attributes that are mass assignable.
     * or use guarded using un-fillable field as value
     * @var string[]
     */
    //protected $fillable = [ // list of field that allowed to mass assignable
    //    'a_title',
    //    'a_slug',
    //    'a_author',
    //    'a_excerpt',
    //    'a_body',
    //];
    protected $guarded = ['id']; // all field except id, are writable using mass assigment
    protected $with = ['category', 'author']; // list of relation for with() in eager loading

    /** LocalScope, function name : scope[Function Name], "scope" is a must */
    public function scopeFilter($query, array $filter){
        // Using isset to check if $filter['getSearch'] is exist and have value
        // if(isset($filter['getSearch']) ? $filter['getSearch'] : false){ 
        //     return $query->where('a_title', 'like', '%' . request('getSearch') . '%')
        //                 ->orWhere('a_body', 'like', '%' . request('getSearch') . '%');
        // }

        /** Using when, when = when method will given callback when first argument is true */
        // Use null coalescing (php > 7.0), same thing with using isset
        $query->when($filter['getSearch'] ?? false, function($query, $search){ 
            return $query->where(function($query) use ($search){ 
                return $query->where('a_title', 'like', '%' . $search . '%')
                        ->orWhere('a_body', 'like', '%' . $search . '%');
            });
        });

        /** Using when for getCategory, and usiing whereHas() */
        $query->when($filter['getCategory'] ?? false, function($query, $category){
            // Using whereHas, to call relationship "category". "use" is for tell system that "$category" is using same variable
            return $query->whereHas('category', function($query) use ($category){ 
                $query->where('c_slug', $category);
            });
        });

        /** Using when for getAuthor, usiing whereHas(), but using arrow function */
        $query->when($filter['getAuthor'] ?? false, fn($query, $author) =>
            // Using whereHas, to call relationship "author", since we use arrow function dont need to use "use" and "return"
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

    /** Relation : create relation to model : CategoryModel */
    public function category(){
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    /** Relation : to model : Users */
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
