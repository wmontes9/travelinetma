<?php 
namespace App\Http\ViewComposer;
use Illuminate\View\View;
use App\Tipo;


Class TipoComposer{



	public function compose(View $view){
		$tipos =  Tipo::with("lineas")->get();
		

		$view->with(['tipos'=>$tipos]);
	}

}



?>