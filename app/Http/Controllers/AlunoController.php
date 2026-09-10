<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show($id)
    {
        return 'Exibindo aluno: ' . $id;
    }

    public function create()
    {
        return 'Formulário para criar aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado com sucesso';
    }

    public function edit($id)
    {
        return 'Editando aluno: ' . $id;
    }

    public function update(Request $request, $id)
    {
        return 'Aluno atualizado: ' . $id;
    }

    public function destroy($id)
    {
        return 'Aluno excluído: ' . $id;
    }
}