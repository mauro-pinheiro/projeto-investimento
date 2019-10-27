@extends('templates.master')

@section('conteudo-view')
    {!! Form::open(['method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formularios.input',     ['input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
        @include('templates.formularios.input',     ['input' => 'nome', 'attributes' => ['placeholder' => 'NOME']])
        @include('templates.formularios.input',     ['input' => 'phone', 'attributes' => ['placeholder' => 'PHONE']])
        @include('templates.formularios.input',     ['input' => 'email', 'attributes' => ['placeholder' => 'EMAIL']])
        @include('templates.formularios.password',  ['input' => 'password', 'attributes' => ['placeholder' => 'PASSWORD']])
        @include('templates.formularios.submit',    ['input' => 'Cadastrar'])
    {!! Form::close() !!}
@endsection

@section('css-view')

@endsection

@section('js-view')

@endsection
