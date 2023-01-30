<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function create()
    {
        return view('User.create');
    }
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required',
            'email' =>'required',
            'App' =>'required',
            'fn'=> 'required',
            'Genero' =>'required',
            'Datos' =>'required',
            'Pasatiempo'=> 'required',
            'password' =>'required'
        ];
      
        $message = [
            'name.required' => 'El campo  esta vacio',
            'email.required' => 'El campo  esta vacio',
            'App.required' => 'El campo  esta vacio',
            'fn.required' => 'El campo  esta vacio',
            'Genero.required' => 'El campo  esta vacio',
            'Datos.required' => 'El campo  esta vacio',
            'Pasatiempo.required' => 'El campo  esta vacio',
            'password.required' => 'El campo  esta vacio',
        ];
      
      
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        //redirect to user's profile
        return redirect()->route('users.show', $user->id);
      
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
   
    }

    public function update(Request $request, $id)
    {
        

    }
    public function destroy($id)
    {
        
    }
}
