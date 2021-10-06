<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    /** If table not same as model name */
    protected $table = 'categories_ms';

    protected $fillable = [
        'c_name',
        'c_slug',
    ];

    /** E-Function : Create relation to model : ArticleModel 
     * syntax : $this->[relationship type]([model]::class, [foreign_key])
     * foreign_key is optional
    */
    public function articles(){
        return $this->hasMany(ArticleModel::class, 'category_id');
    }
}
