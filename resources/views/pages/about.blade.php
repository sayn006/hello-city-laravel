@extends('app')

@section('title', 'About us | '.config('app.name'))



@section('content')
<img src="/images/flag_france.png" alt="France Flag">
        <p>Built with &hearts; by Sayn.</p>
<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>  
@endsection