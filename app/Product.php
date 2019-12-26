<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';

    protected $perPage = 10;

    public static $rules = [
        'name' => 'required',
        'image' => 'required',
        'unitary_value' => 'required',
        'net_weight' => 'required',
        'stock' => 'required',
        'category_id' => 'required|exists:category,id',
        'brand_id' => 'required|exists:brand,id'
    ];

    protected $fillable = [
        'name',
        'details',
        'image',
        'unitary_value',
        'net_weight',
        'stock',
        'tax_classification',
        'icms',
        'ipi',
        'last_sale',
        'cost_price',
        'active',
        'category_id',
        'brand_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function promotion()
    {
        return $this->belongsToMany(
            Promotion::class,
            Product_Promotion::class,
            'product_id',
            'promotion_id');
    }
}
