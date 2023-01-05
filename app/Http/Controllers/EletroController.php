<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\Eletro;
use Illuminate\Http\Request;


class EletroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Eletro = Eletro::all();
        return response()->json($Eletro);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Eletro $Eletro,Request $request)
    {
        try {
            
            $Eletro = $Eletro->fill($request->only('Nome','Descricao','Tensao','Marca'));
            $Eletro->save();
            
            return response()->json('Eletro Adicionado com sucesso!',200);
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
        $Eletro = Eletro::find($id);
        return response()->json($Eletro);
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
            $Eletro = Eletro::findOrFail($id);
            $Eletro = $Eletro->fill($request->all()); 
            $Eletro->update();
            return response()->json('Eletro Atualizado com sucesso!',200);
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
            Eletro::destroy($id);
            return response()->json('Eletro removido com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }   
    }
    
           
}
