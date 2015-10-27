<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
use App\config;
use Request;
use Auth;

class PagesController extends Controller {

	//
		/*return view ('pages.about')->with([
	public function about ()
	{

		//$name ='Jeffrey <span style="color: red;">Way</span>';

			'first' => 'Jeffrey',
			'last' => 'Way'
			]);
		*/
		/*$data = [];
		$data['first'] = 'Helgi';
		$data['last'] = 'sigur';
		$first = 'Fox';
		$last = 'Mulder';
		$people = [
			'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
		];
		$people = [];
 		return view ('pages.about', compact('people'));
	}
	public function contact ()
	{
		return view('pages.contact');
	}
	public function login()
	{
		return view('auth/login');
	}


	public function signUp()
	{
			return view('auth.register');
	}

	public function store()
	{

			$input = Request::all();
			$user = new User;
			$input['password'] = bcrypt($input['password']);
		User::create($input);
		return redirect('/');


	}
		*/

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
    $user = User::findOrFail($id);

		return view('profile', compact('user'));
	}

  public function store()
	{

			$input = Request::all();
			$user = new User;
			$input['password'] = bcrypt($input['password']);
		User::create($input);
		return redirect('/');
	}

}
