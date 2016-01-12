<?php
namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Illuminate\Support\Facades\View;
class InicioController extends Controller
{
    public function inicio()
    {
        return View::make('home');
    }
}