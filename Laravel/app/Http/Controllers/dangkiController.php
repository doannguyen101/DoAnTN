<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\dangkirequest;
use App\User;

class dangkiController extends Controller {

	public  function dangki (dangkirequest $request) {
		$user = new  user;
		$user->name = $request->username;
		$user->password = $request->passwordtxt;
		$user->email = $request->emailtxt;
		$user->save();
		return redirect('thongtincanhan');

	}

}
