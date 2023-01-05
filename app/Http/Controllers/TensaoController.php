<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\Tensao;
use Illuminate\Http\Request;


class TensaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Tensao = Tensao::all();
        return response()->json($Tensao);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tensao $Tensao,Request $request)
    {
        try {
            
            $Tensao = $Tensao->fill($request->only('Tensao'));
            $Tensao->save();
            
            return response()->json('Tensao Adicionado com sucesso!',200);
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
        $Tensao = Tensao::find($id);
        return response()->json($Tensao);
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
            $Tensao = Tensao::findOrFail($id);
            $Tensao = $Tensao->fill($request->all()); 
            $Tensao->update();
            return response()->json('Tensao Atualizado com sucesso!',200);
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
            Tensao::destroy($id);
            return response()->json('Tensao removido com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }   
    }
    
           
}
