<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
	private $currentUserEmail;
	private $currentUserName;

	public function __construct()
	{
		$this->middleware(function ($request, $next) {
	        $this->currentUserName = Auth::user()->name;
	        $this->currentUserEmail = Auth::user()->email;
	        return $next($request);
	    });
	}

    public function index()
    {
        return view('admin.home-index', ['currentUserEmail' => $this->currentUserEmail]);
    }

    public function edit()
    {
    	return view('admin.home-edit', ['currentUserEmail' => $this->currentUserEmail, 'currentUserName' => $this->currentUserName]);
    }

    public function store(StoreUserRequest $request)
    {
    	$currentUser =  Auth::user();
    	$currentUser->name = $request->name;
    	$currentUser->email = $request->email;
    	if($request->password) {
    		$currentUser->password = Hash::make($request->password);
    	}
    	$currentUser->save();

    	return redirect()->route('admin/home.index')->with(['message' => 'Admin\'s credentials changed successfully']);
    }
}
