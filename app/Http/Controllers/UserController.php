<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function __construct() {
  }

  public function index(){
      return view('panel.usuarios.index');
  }

  public function create(){
      return view('panel.usuarios.create');
  }
}
