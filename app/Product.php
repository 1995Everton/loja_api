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
        'category_id'
    ];

    protected $hidden = [ 'brand_id','category_id'];

    protected $appends = ['brand','category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

//    public function promotion()
//    {
//        return $this->belongsToMany(
//            Promotion::class,
//            Product_Promotion::class,
//            'product_id',
//            'promotion_id');
//    }

    public function sizes()
    {
        return $this->belongsToMany(Sizes::class);
    }

    public function getBrandAttribute()
    {
        return Brand::query()->select('id','name')->where('id' ,$this->brand_id)->first() ;
    }
    public function getCategoryAttribute()
    {
        return Category::query()->select('id','name')->where('id' ,$this->category_id)->first() ;
    }
}
