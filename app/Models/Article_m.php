<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_m extends Model
{
    use HasFactory;

    /** If table not same as model name */
    protected $table = 'articles_ms';

    /**
     * The attributes that are mass assignable.
     * or use guarded using un-fillable field as value
     * @var string[]
     */
    //protected $fillable = [
    //    'a_title',
    //    'a_slug',
    //    'a_author',
    //    'a_excerpt',
    //    'a_body',
    //];
    protected $guarded = ['id'];

    /** Relation : create relation to model : Category_m */
    public function categories(){
        return $this->belongsTo(Category_m::class, 'category_id');
    }

    /** Relation : to model : Users */
    public function users(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
