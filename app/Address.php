<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $table = 'address';

    protected $perPage = 10;

    public static $rules = [
        'street' => 'required',
        'number' => 'required',
        'complement' => 'required',
        'neighborhood' => 'required',
        'cep' => 'required',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
        'user_id' => 'required|exists:user,id'
    ];

    protected $fillable = [
        'street',
        'number',
        'complement',
        'cep',
        'city',
        'state',
        'country',
        'neighborhood',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
