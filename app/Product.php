<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';

    protected $perPage = 10;

    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
        'unitary_value' => 'required',
        'net_weight' => 'required',
        'stock' => 'required',
        'category_id' => 'required|exists:category,id'
    ];

    protected $fillable = [
        'name',
        'description',
        'details',
        'brand',
        'image',
        'miniature',
        'fragile',
        'unitary_value',
        'net_weight',
        'stock',
        'tax_classification',
        'icms',
        'ipi',
        'last_sale',
        'cost_price',
        'active',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
