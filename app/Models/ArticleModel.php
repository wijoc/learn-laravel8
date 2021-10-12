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

    /** Relation : create relation to model : CategoryModel */
    public function category(){
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    /** Relation : to model : Users */
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
