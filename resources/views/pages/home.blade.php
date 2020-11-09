@extends('app')

@section('title')

@section('content')
<img src="/images/flag_france.png" alt="France Flag">
    <h1>Hello From France !</h1>
    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
