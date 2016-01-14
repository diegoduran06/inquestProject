<?php
namespace Inquestpro\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Illuminate\Support\Facades\View;
use Inquestpro\User;
class InicioController extends Controller
{
    public function inicio(){
        return View::make('home');
    }
    
    public function guardarUsuario(){
        $user = User::find(2);
        //dd($user);
        
        //$user->first_name = 'Juan';
        $user->email = 'didu90@ejemplo.com';
        $user->save();
        return $user;
    }
}