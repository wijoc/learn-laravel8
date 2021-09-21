<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_m extends Model
{
    use HasFactory;

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
}
