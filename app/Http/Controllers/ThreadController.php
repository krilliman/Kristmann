<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
use App\config;
use Request;
use Auth;

class PagesController extends Controller {


  public function vefsidur()
  {
    $vefsida = Vefspurn::latest('published_at')->get();
    return view('thread.vefsida', compact('vefsida'));
  }
  public function show ($id)
  {
    $vefsida = vefsida::findOrFail($id);

    return view('thread.show', compact('vefsida'));
  }
}
public function create()
{
  return view('thread.create');

}
