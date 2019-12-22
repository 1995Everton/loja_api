<?php


namespace App\Http\Controllers;


use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

abstract class BaseController extends Controller
{
    /** @var Model $class */
    protected $class;

    public function index(Request $request): JsonResponse
    {
        $data = $this->class::paginate($request->per_page);
        if($data->count() > 0){
            return response()->json(
                [
                    'total' => $data->total(),
                    'data' => $data->getCollection(),
                ],
                200
            );
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }


    public function store(Request $request)
    {
        /** @var TYPE_NAME $rules */
        $this->validate($request,$this->class::$rules);
        $data = $this->class::create($request->all());
        if($data){
            return response()->json($data,201);
        }else{
            return response()->json(['error' => 'error inserting into database'],502);
        }
    }

    public function show($id)
    {
        $data = $this->class::find($id);
        if(!is_null($data)){
            return response()->json($data,200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }

    public function update(int $id, Request $request)
    {
        $data = $this->class::find($id);
        if(is_null($data)){
            return response()->json(['error' => 'no data found'],404);
        }
        /** @var TYPE_NAME $rules */
        $this->validate($request,$this->class::$rules);
        $data->fill($request->all());
        $data->save();
        return response()->json($data,200);
    }

    public function destroy(int $id)
    {
        $data = $this->class::destroy($id);
        if($data === 0){
            return response()->json(['error' => 'no data found'],404);
        }
        return response()->json(['success' => 'successfully deleted content'],200);
    }

}
