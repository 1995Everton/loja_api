<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'request';

    public static $rules = [
        'amount' => 'required|numeric',
        'price_total' => 'required|numeric',
        'status' => 'required|boolean',
        'address_id' => 'required|exists:address,id',
        "products"    => 'required|array|min:1',
        "products.*.id"  => "required|exists:product,id",
    ];

    protected $fillable = [
        'amount',
        'price_total',
        'status',
        'address_id',
        'user_id'
    ];

    protected $appends = ['products','address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function productRequest()
    {
        return $this->belongsToMany(Product::class, 'product_request', 'request_id', 'product_id');
    }

    public function getProductsAttribute()
    {
        return $this->productRequest()->getResults();
    }

    public function getPriceTotalAttribute($price_total): float
    {
        return $price_total;
    }

    public function getAddressAttribute()
    {
        return Address::query()->where('id',$this->address_id)->get();
    }
}
