<?php namespace App\Http\Controllers;


use App\User;
use App\Vefspurn;
use App\Verktakar;
use App\Vefcomments;
use App\Verkcomments;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
use App\config;
use Request;
use Input;
use Auth;

class PagesController extends Controller {

  public function indextest()
  {
    return view('auth.login');
  }

  public function index()
    {
      if (Auth::guest())
      return view('auth.login');

    else
      $user = Auth::user();
      return view('indextest2', compact('user'));
    }

  public function signUp()
	{
			return view('auth.register');
	}
  public function profile($id)
	{
    $curruser = Auth::user();
    $user = User::findOrFail($id);

    if($user->id == $curruser->id)
    {
		return view('profile', compact('user'));
    }
    else {
      return view('profileguest', compact('user'));
    }
	}

  public function store()
	{

			$input = Request::all();
			$user = new User;
			$input['password'] = bcrypt($input['password']);
      $input['profilephoto'] = '/images/alfa.png';
		User::create($input);
		return redirect('/');
	}

  public function vefsidur()
  {
    if (Auth::guest())
          return view('auth.login');

    else
    {
          $user = Auth::user();
          $vefsida = Vefspurn::latest('published_at')->get();
          return view('vefsida', compact('vefsida', 'user'));
        }
  }

  public function verktak()
  {
    if (Auth::guest())
          return view('auth.login');

    else
    {
          $user = Auth::user();
          $verk = Verktakar::latest('published_at')->get();
          return view('verktakar', compact('verk', 'user'));

    }
  }

  public function show ($id)
  {
      if (Auth::guest())
        return view('auth.login');

        else
        {
        $user = Auth::user();
        $vefcomments = Vefcomments::latest('created_at')->get();
        $vefsida = Vefspurn::findOrFail($id);

        return view('show', compact('vefsida','user','vefcomments'));
      }
  }

  public function showverk ($id)
  {
      if (Auth::guest())
        return view('auth.login');

        else
        {
        $user = Auth::user();
        $verktakar = Verktakar::findOrFail($id);
        $verkcomments = Verkcomments::latest('created_at')->get();

        return view('showverk', compact('verktakar','user','verkcomments'));
      }
  }

public function create()
{
  if (Auth::guest())
        return view('auth.login');

  else
        {
        $user = Auth::user();
        return view('create',  compact('user'));
      }
}

public function createverk()
{
  if (Auth::guest())
        return view('auth.login');

  else
        {
        $user = Auth::user();
        return view('createVerk',  compact('user'));
      }
}

  public function VefStore()
	{
		$input = Request::all();
		Vefspurn::create($input);
		return redirect('/vefsida');
	}

  public function vefedit($id)
  {
    if (Auth::guest())
      return view('auth.login');

      else
      {
      $user = Auth::user();
      $vefsida = Vefspurn::findOrFail($id);
      //dd($vefsida);

      return view('VefEdit', compact('vefsida','user'));
    }
  }
  public function verkedit($id)
    {
      if (Auth::guest())
        return view('auth.login');

        else
        {
        $user = Auth::user();
        $verktakar = Verktakar::findOrFail($id);
        //dd($vefsida);

        return view('VerkEdit', compact('verktakar','user'));
      }
    }
public function vefedited($id){
  if (Auth::guest())
      return view('auth.login');
  else{
      $user = Auth::user();
      $input = Request::all();
      $vefsida = Vefspurn::find($input['id']);
      //dd($vefsida);
      $vefsida->title = $input['title'];
      $vefsida->body = $input['body'];

      $vefsida->save();
      return view('show', compact('user','vefsida'));
  }
}


public function VerkStore(){
    $input = Request::all();
    Verktakar::Create($input);
    return redirect('/verktakar');
  }
  public function verkedited($id)
  {
    if (Auth::guest())
        return view('auth.login');
    else
    {
      $user = Auth::user();
      $input = Request::all();
      $verktakar = Verktakar::find($input['id']);
      //dd($vefsida);
      $verktakar->title = $input['title'];
      $verktakar->body = $input['body'];

      $verktakar->save();
      return view('showverk', compact('user','verktakar'));
    }
  }
public function PhotoId(){
  $user = Auth::user();
  $image_name = Request::file('photo')->getClientOriginalName();
  $unitname = $user->id . $image_name;
  $input = Request::file('photo')->move(base_path().'/public/images', $unitname);
  $post = (Request::except(['photo']));
  $post['photo'] = $unitname;
  $pathToFile = '/images/' . $post['photo'];
  $user->profilephoto = $pathToFile;
  $user->save();
  return redirect()->back();
}

  public function editDescription()
  {
    $user = Auth::user();
    $input = Request::all();

    $user->description = $input['descritionEdited'];
    $user->save();
    return redirect()->back();
  }
  public function vefComments()
  {

      $user = Auth::user();
      $input = Request::all();
      Vefcomments::Create($input);
      return redirect()->back();
  }
  public function verkComments()
  {

      $user = Auth::user();
      $input = Request::all();
      Verkcomments::Create($input);
      return redirect()->back();
  }

}
