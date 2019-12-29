<?php


namespace App\Http\Controllers;


use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class PostOffices extends Controller
{
    private $correios;

    public function __construct()
    {
        $this->correios = new Client;
    }

    public function calculatePrice(Request $request)
    {

        $this->validate($request,[
            "origin" =>  "required",
            "destination" => "required",
            "width" => "required|numeric",
            "height" => "required|numeric",
            "length" => "required|numeric",
            "weight" => "required|numeric",
            "quantity" => "required|integer"
        ]);

        $data =  $this->correios->freight()
            ->origin($request->origin)
            ->destination($request->destination)
            ->services(Service::SEDEX, Service::PAC,Service::SEDEX_10,Service::SEDEX_CONTRATO_04316)
            // largura, altura, comprimento, peso e quantidade
            ->item($request->width, $request->height,$request->length, $request->weight, $request->quantity)
            ->calculate();
        return response()->json($data,201);
    }

    public function zipCode(Request $request)
    {
        $this->validate($request,[
            "zipcode" =>  "required",
        ]);
        $data = $this->correios->zipcode()
            ->find($request->zipcode);
        return response()->json($data,201);
    }
}
