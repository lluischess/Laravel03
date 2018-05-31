<?php

namespace task\Http\Controllers;

use Illuminate\Http\Request;

class tareaslista extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Original -> return tasca::all();
        $tasca = tasca::all();
        return view('todo.index')->with('todos',$tasca);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$users = Auth::user();
        if(Auth::user()){
        return view('todo.add');
        } else {
        return redirect('tasques/') ;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tasca = tasca::create(Request::all());
        return redirect('tasques/'.$tasca->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tasca = tasca::find($id);
        if($tasca == null){
            return redirect('tasques/');
        }
        $user = Auth::user();
        if($user == null){
            return view('todo.show')->with('todo',$tasca);
        }
        return view('todo.show')->with('todo',$tasca)->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //tasca
        if(Auth::user()){
            $tasca = tasca::find($id);
            $user = Auth::user();
            if($tasca == null){
                return redirect('tasques/');
            } else if($user->name == $tasca->propietari){
                return view('todo.edit')->with('todo',$tasca);
            } else {
                return redirect('tasques/');
            }
        } else {
        return redirect('tasques/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        //$llibre = llibres\Llibre::find($id)->update(Request::all());
        //$tasca->update(Request::all());
        $tasca = tasca::find($id)->update(Request::all());
        return redirect('tasques/'.$id);

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tasca = tasca::find($id)->delete();
        return redirect('tasques/');
    }
}
