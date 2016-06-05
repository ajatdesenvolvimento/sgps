<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    //
    public function showLogin(){
      return \View::make('Home/login');
    }
    public function doLogin(){
      $rules = array(
        'email'=>'required|email',
        'password'=>'required|alphaNum|min:3'
      );

      $validator = \Validator::make(Input::all(),$rules);

      if ($validator->fails()) {
        return \Redirect::to('login')
        ->withErros($validator)
        ->withInput(Input::except('password'));
      }else{
        $userdata = array(
          'email'=>Input::get('email'),
          'password'=>Input::get('password')
        );
        if(\Auth::attempt($userdata)){
          echo "Sucesso";
          echo " <a href='logout'>Sair</a>";
        }else{
          return \Redirect::to('login');
        }
      }
    }
    public function doLogout(){
      \Auth::logout();
      return \Redirect::to('login');
    }
}
