<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\Marca;
use Illuminate\Http\Request;


class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Marca = Marca::all();
        return response()->json($Marca);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Marca $Marca,Request $request)
    {
        try {
            
            $Marca = $Marca->fill($request->only('Marca'));
            $Marca->save();
            
            return response()->json('Marca Adicionado com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Marca = Marca::find($id);
        return response()->json($Marca);
    }

    /**
     * Update the specified resource in storage.
     
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        try{       
            $Marca = Marca::findOrFail($id);
            $Marca = $Marca->fill($request->all()); 
            $Marca->update();
            return response()->json('Marca Atualizada com sucesso!',200);
             }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Marca::destroy($id);
            return response()->json('Marca removida com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }   
    }
    
           
}
