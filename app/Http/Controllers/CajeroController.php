<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajeroController extends Controller
{
  public function __construct() {
  }

  public function index(){
      return view('panel.cajeros.index');
  }

  public function create(){
      return view('panel.cajeros.create');
  }
}
