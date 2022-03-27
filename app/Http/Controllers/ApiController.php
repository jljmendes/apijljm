<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;
class ApiController extends Controller
{
    public function createTodo(Request $request) {
        $array = ['error' => ''];

        //Validando
        $rules = [
            'title' => 'required|min:3'
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->errors();
            return $array;
        }

        $title = $request->input('title');

        //Criando o registro
        $todo = new Todo(); //Criando uma nova instancio do model
        $todo->title = $title; //Preenchendo com o titolo
        $todo->save();  //Salvando o registro

        return $array;
    }

    public function readAllTodos() {
        $array = ['error' => ''];

        $array ['list'] = Todo::all();

        return $array;
    }

    public function readTodo($id) {
        $array = ['error' => ''];

        $todo = Todo::find($id);

        if($todo){
            $array['todo'] = $todo;
        }else{
            $array['error'] = 'Atarefa '.$id.' não existe';
        }
        return $array;
    }

    public function updateTodo() {

    }

    public function deleteTodo() {

    }
}
