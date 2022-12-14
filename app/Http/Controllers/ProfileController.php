<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
    	return view('user.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}

    	$user->update();

    	alert()->success('Profil berhasil diperbarui', 'Success');
    	return redirect('profile');
    }
}
