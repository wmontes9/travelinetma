<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Establecimiento;
use App\Tipo_Establecimiento;
use DB;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultarestablecimientos(){
        $lis_tipos = Tipo_Establecimiento::all()->toArray();
        $establecimientos = DB::table('establecimientos')
            ->join('tipo__establecimientos', 'establecimientos.id_tipo', '=', 'tipo__establecimientos.id')
            ->select('establecimientos.*', 'tipo__establecimientos.nombre as nombre_categoria')
            ->get()->toArray();
        $tipos = Tipo_Establecimiento::with("establecimientos")->get()->toArray();
            return view('establecimientos.index',compact('lis_tipos','establecimientos','tipos'));
    }
    public function index()
    {
        $lis_tipos = Tipo_Establecimiento::all()->toArray();
        $establecimientos = DB::table('establecimientos')
            ->join('tipo__establecimientos', 'establecimientos.id_tipo', '=', 'tipo__establecimientos.id')
            ->select('establecimientos.*', 'tipo__establecimientos.nombre as nombre_categoria')
            ->get()->toArray();
        $categorias = Tipo_Establecimiento::with("establecimientos")->get()->toArray();
        //dd($establecimientos);
        //dd($categorias);
        return view('app.establecimientos.index',compact('lis_tipos','establecimientos','categorias'));

        //$establecimiento = new EstablecimientoController();
        //$establecimientos = $establecimiento->get_establecimientos();
        //$categorias = $establecimiento->get_categorias();
        //dd($establecimientos);
        //dd($categorias);
        //return view('app.establecimientos.index',compact('establecimientos','categorias'));
    }
    public function get_establecimientos(){
        $lis_establecimientos = Establecimiento::all()->toArray();
        return $lis_establecimientos;
    }
    public function get_categorias(){
        $lis_categorias = Tipo_Establecimiento::all()->toArray();
        return $lis_categorias;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = new EstablecimientoController();
        $categorias = $categorias->get_categorias();
        return view('app.establecimientos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establecimiento = new Establecimiento;  
        $establecimiento->id_tipo = $request->input('id_categoria');  
        $establecimiento->nombre = $request->input('nombre');
        $establecimiento->direccion = $request->input('direccion');
        $establecimiento->telefono = $request->input('telefono');
        $establecimiento->descripcion = $request->input('descripcion');
        $establecimiento->url = $request->input('url');
        $file = $request->url_imagen->store('public/imgEstablecimiento');     
        $nombre = explode('/',$file);
        $establecimiento->url_imagen=$nombre[2];
        $establecimiento->save();
        return redirect()->route('establecimiento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Establecimiento $establecimiento)
    {
        $categorias = new EstablecimientoController();
        $categorias = $categorias->get_categorias();
        return view('app.establecimientos.edit',compact('categorias','establecimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $establecimiento)
    {
        //dd($establecimiento);
        $establecimient = Establecimiento::findOrFail($establecimiento);
        $establecimient->id_tipo = $request->input('id_categoria');
        $establecimient->nombre = $request->input('nombre');
        $establecimient->direccion = $request->input('direccion');
        $establecimient->telefono = $request->input('telefono');
        $establecimient->descripcion = $request->input('descripcion');
        $establecimient->url = $request->input('url');
        if($request->hasFile('url_imagen_e')){
                Storage::delete('public/imgEstablecimiento/'.$establecimient->url_imagen);
                $file = $request->url_imagen_e->store('public/imgEstablecimiento');
                $nombre = explode('/',$file);
                if($file){
                    $establecimient->url_imagen = $nombre[2];
                }
        }  
       $establecimient->save(); 
       return redirect()->route('establecimiento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establecimiento $establecimiento)
    {
        //
    }
}
