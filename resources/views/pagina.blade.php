@extends('layouts.master')

@section('titulo',"Faculin")

@section('header')
    @parent
    <h3>Al header le agrego este texto</h3>
@stop

@section('content')
    <hr>
    <h2>Esto es el contenido modificado</h2>
    <hr>
@stop

@section('footer')
    @parent
    <p>al footer le agrego este texto &copy;</p>
@stop
