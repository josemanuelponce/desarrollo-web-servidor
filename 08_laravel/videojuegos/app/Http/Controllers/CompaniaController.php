<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compania;
use Illuminate\Support\Facades\DB;

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companias = Compania::all();
        return view('companias/index', [
            "companias" => $companias
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compania = new Compania;
        $compania -> nombre = $request ->input('nombre');
        $compania -> sede = $request ->input('sede');
        $compania -> fecha_fundacion = $request ->input('fecha_fundacion');
        $compania -> save();

        return redirect('companias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compania = Compania::find($id);
        return view('companias/show', 
        [
            'compania' => $compania
        ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compania = Compania::find($id);

        return view('companias/edit', 
        [
            'compania' => $compania
        ]
    );
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
        $compania = Compania::find($id);
        $compania -> nombre = $request ->input('nombre');
        $compania -> sede = $request ->input('sede');
        $compania -> fecha_fundacion = $request ->input('fecha_fundacion');

        $compania -> save();

        return redirect('companias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companias') -> where('id', '=', $id) -> delete();

        return redirect('companias');
    }
    /**
     * Busca todas las  compañias que contengan la palabra
     * introducida en el buscador
     * 
     * @param string $titulo
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {

        $nombre = $request ->input('nombre');


        $companias = DB::table('companias') 
        -> where('nombre', 'like', '%' . $nombre . '%') ->get();

        return view('companias/search', 
        [
            'companias' => $companias
        ]
        );
    }
}
