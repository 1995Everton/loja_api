<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = true;

    protected $table = 'brand';

    protected $perPage = 10;

    public static $rules = [
        'name' => 'required',
    ];

    protected $fillable = [
        'name',
        'logo',
        'banner'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
