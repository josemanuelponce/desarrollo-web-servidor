<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Compania;
use Illuminate\Support\Facades\DB;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $videojuegos = [
            ["Assassins", 60, 18, "Esto es un juego"],
            ["Call of duty", 40, 7, "Este es un juego de guerra"]

    ];*/

    $videojuegos = Videojuego::all();

    $mensaje = "Aqui tenemos un listado de videojuegos";

        return view('videojuegos/index', [
                    "videojuegos" => $videojuegos,
                    "mensaje" => $mensaje

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

        $companias = Compania::all();
        return view('videojuegos/create', 
        [
            'companias' => $companias
        ]
    );


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videojuego = new Videojuego;
        $videojuego -> titulo = $request ->input('titulo');
        $videojuego -> precio = $request ->input('precio');
        $videojuego -> pegi = $request ->input('pegi');
        $videojuego -> descripcion = $request ->input('descripcion');
        $videojuego -> compania_id = $request ->input('compania_id');
        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego = Videojuego::find($id);
        return view('videojuegos/show', 
        [
            'videojuego' => $videojuego
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
        $videojuego = Videojuego::find($id);

        return view('videojuegos/edit', 
        [
            'videojuego' => $videojuego
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
        $videojuego = Videojuego::find($id);
        $videojuego -> titulo = $request -> input('titulo');
        $videojuego -> precio = $request -> input('precio');
        $videojuego -> pegi = $request -> input('pegi');
        $videojuego -> descripcion = $request -> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('videojuegos') -> where('id', '=', $id) -> delete();

        return redirect('videojuegos');
    }
    /**
     * Busca todos los videojuegos que contengan la palabra
     * introducida en el buscador
     * 
     * @param string $titulo
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {

        $titulo = $request ->input('titulo');


        $videojuegos = DB::table('videojuegos') 
        -> where('titulo', 'like', '%' . $titulo . '%') ->get();

        return view('videojuegos/search', 
        [
            'videojuegos' => $videojuegos
        ]
        );
    }
}
