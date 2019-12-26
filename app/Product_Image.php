<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    protected $table = 'product_image';

    protected $perPage = 10;

    public static $rules = [
        'name' => 'required',
        'url' => 'required',
        'product_id' => 'required|exists:product,id'
    ];

    protected $fillable = [
        'name',
        'url',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);

    }
}
