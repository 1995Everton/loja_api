<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotion';

    public static $rules = [
        'name' => 'required',
        'miniature' => 'required',
        'dt_start' => 'required',
        'dt_end' => 'required',
    ];

    protected $fillable = [
        'name',
        'miniature',
        'dt_start',
        'dt_end',
    ];

    public function product()
    {
        return $this->belongsToMany(
            Product::class,
            Product_Promotion::class,
            'promotion_id',
            'product_id');
    }
}
