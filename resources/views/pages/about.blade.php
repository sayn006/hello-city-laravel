@extends('app')

@section('title', 'About us | '.config('app.name'))



@section('content')
        <p>Built with &hearts; by Sayn.</p>
<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>  
@endsection