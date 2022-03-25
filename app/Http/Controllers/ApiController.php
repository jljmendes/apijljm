<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;
class ApiController extends Controller
{
    public function createTodo(Request $request) {
        $array = ['error' => ''];

        $rules = [
            'title' => 'required|min:3'
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->messages();
            return $array;
        }

        $title = $request->input('title');

        $todo = new Todo(); //Criando uma nova instancio do model
        $todo->title = $title; //Preenchendo com o titolo
        $todo->save();  //Salvando o registro

        return $array;
    }

    public function readAllTodo() {

    }

    public function readTodo() {

    }

    public function updateTodo() {

    }

    public function deleteTodo() {

    }
}
