@extends('layout.admin');
	@section('content')
	{!!Form::open()!!}
		@include('persona.form.persona')
	{!!Form::close()!!}
	@endsection