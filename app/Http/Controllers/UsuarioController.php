<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsuarioController extends Controller
{
	public $page = '';

	public function __construct(){
		if(!empty($_REQUEST['page'])){
			$this->page = $_REQUEST['page'];
		}
		
	}


    public function index(){

    	switch ($this->page) {
    		case 'profile':
    				return view('auth.profile');
    			break;
    		
    		default:
    			break;
    	}
    }

    public function update(Request $request, $id_user){
    	switch ($this->page) {
    		case '':
    			# code...
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function update_profile (){

    }


    public function update_access(){

    }


    public function update_avatar(){

    }
}
