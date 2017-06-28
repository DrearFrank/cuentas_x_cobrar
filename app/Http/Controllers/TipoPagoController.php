<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
  public function __construct() {
  }

  public function index(){
      return view('panel.tipospago.index');
  }

  public function create(){
      return view('panel.tipospago.create');
  }
}
