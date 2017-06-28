<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
  public function __construct() {
  }

  public function index(){
      return view('panel.pagos.index');
  }

  public function create(){
      return view('panel.pagos.create');
  }
}
