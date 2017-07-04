<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Welcome;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $tweets = Welcome::all();
        
        return view('welcome.index', [
            'tweets' => $tweets,
        ]);
    }

    
    public function create()
    {
        $tweet = new Welcome;
        
        return view('welcome.create', [
            'tweet' => $tweet,
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:welcomes,title',
            'body' => 'required',
        ]);
        
       $post = Welcome::create($request->all());
       
       return redirect('/');
    }

    
    public function show($id)
    {
        $tweet = Welcome::find($id);
        
        return view('welcome.show', [
            'tweet' => $tweet,
        ]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
