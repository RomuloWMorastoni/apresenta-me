<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function listarPessoas(){
        $pessoas = [
            'Rômulo',
            'Teste',
            'Silva',
        ];

        $html = "<ul>";

        foreach($pessoas as $user){
            $html .= "<li>$user</li>";
        }

        $html .= "</ul>";

        echo $html;
    }
}
