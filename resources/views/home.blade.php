@extends('layouts.app')

@section('content')
    <a href="mailto:{{$mail ??'e'}}">
    <span>Julia</span>
    <span><a href="mailto:{{$mail ?? 'e'}}">{{$contact ?? 'text'}}</a></span>
    </a>
@endsection
