<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_m extends Model
{
    use HasFactory;

    /** If table not same as model name */
    protected $table = 'categories_ms';

    protected $fillable = [
        'c_name',
        'c_slug',
    ];

    /** E-Function : create relation to model : Article_m 
     * syntax : $this->[relationship type]([model]::class, [foreign_key])
     * foreign_key is optional
    */
    public function article_m(){
        return $this->hasMany(Article_m::class, 'category_id');
    }
}
