@extends('layout')

@section('header')
	About
@endsection

@section('content')
	<h1>Hello About!</h1>
	<h2>お名前は{{ $last_name. '&nbsp;'. $first_name }}</h2>
@endsection