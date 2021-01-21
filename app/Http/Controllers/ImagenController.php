<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Destino;
use App\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = new ImagenController();
        $imagenes = $imagenes->get_imagenes();
        return view('app.imagen_destino.index',compact('imagenes'));
    }
    public function get_imagenes(){
        $lis_imagenes = Imagen::all()->toArray();
        return $lis_imagenes;
    }
    public function get_destinos(){
        $lis_destinos = Destino::all()->toArray();
        return $lis_destinos;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinos = new ImagenController();
        $destinos = $destinos->get_destinos();
        return view('app.imagen_destino.create',compact('destinos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = new Imagen;  
        $imagen->id_destino = $request->input('id_destino');      
        $file = $request->url_imagen->store('public/imgDestino');     
        $nombre = explode('/',$file);
        $imagen->url_imagen=$nombre[2];
        $imagen->save();
        return redirect()->route('imagen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(imagen $imagen)
    {
        $destinos = new DestinoController();
        $destinos = $destinos->get_destinos();
        return view('app.imagen_destino.edit',compact('destinos','imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $imagen)
    {
        //dd($request->url_imagen);
        $image = Imagen::findOrFail($imagen);  
        $image->id_destino = $request->input('id_destino');
       if($request->hasFile('url_imagen_e')){
            Storage::delete('public/imgDestino/'.$image->url_imagen);
            $file = $request->url_imagen_e->store('public/imgDestino');
            $nombre = explode('/',$file);
            if($file){
                $image->url_imagen = $nombre[2];
            }
       }  
       $image->save(); 
       return redirect()->route('imagen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_imagen)
    {
        $imagen = Imagen::find($id_imagen);
        Storage::delete('public/imgDestino/'.$imagen->url_imagen);
        $imagen->delete();
        return redirect()->route('imagen.index');
    }
}
