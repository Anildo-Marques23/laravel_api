<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inscritos = DB::select('select * FROM candidatos');

        return response()->json([
            'incritos' => $inscritos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        // return  $inscritos = DB :: delete('delete from candidatos where BI'.'='."\"".$request->BI."\"");
         try {
        //    candidato::destroy("\"".$request->BI."\"");
        //     // $consulta_destroy = 'DELETE FROM `candidatos` WHERE BI ='."\"".$request->BI."\"";
              
        //     // $inscritos = DB::delete('DELETE FROM `candidatos` WHERE BI ='."\"".$request->BI."\"");
            
            $inscritos = DB :: delete('delete from candidatos where BI'.'='."\"".$id."\"");
            return response()->json([
                'message' => ' Inscrição anulada com sucesso!',
            ], 201);


         } catch(\Exception $e) {
           DB::rollback();
             throw $e;
         }
    }
}
