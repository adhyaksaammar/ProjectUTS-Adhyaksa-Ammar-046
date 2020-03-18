@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="title" m-b-md>
   		SISTEM INFORMASI PERPUSTAKAAN
   		@component('cekLogin')

   		@endcomponent
   </div>
@stop