<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';

    protected $perPage = 10;

    public static $rules = [
        'name' => 'required',
    ];

    protected $fillable = [
        'name',
        'active',
        'category_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getActiveAttribute($active):bool
    {
        return $active;
    }
}
