<?php

namespace App\Http\Controllers\tes;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App;
use App\Article;


class ArticleSingleController extends Controller
{
    
    public function single($id)
	{
	
		$article=Article::findOrFail($id);
		
		return view('frontend.appsingle',compact('article'));
	}

	public function store(Request $request)
	{
		$requestData = $request->all();
		Article::create($requestData);
		Session::flash('flash_message','Article added!');
		return redirect('admin/article');
	}

	 
}

