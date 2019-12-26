<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $table = 'store';

    public static $rules = [
        'name' => 'required',
        'telephone' => 'required|region|min:11',
    ];

    protected $fillable = [
        'name',
        'telephone',
        'email',
        'street',
        'number',
        'complement',
        'neighborhood',
        'cep',
        'city',
        'state',
        'country',
        'logo',
        'logo_footer',
        'facebook',
        'twitter',
        'google',
        'youtube'
    ];

}
