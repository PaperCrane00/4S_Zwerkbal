@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam.Het idee van Zwerkbal lijkt te zijn gebaseeerd op het non-fictieve horseball.</p>
    <div class="totaal">
        <div class="info">
            <div class="toernooien">
                <p>Aantal aankomende toernooien:</p>
                <p><b>5</b></p>
            </div>
            <div class="teams">
                <p>Totaal aantal teams:</p>
                <p><b>26</b></p>
            </div>
        </div>
        <div class="image">
            <img src="/img/snitch.png">
        </div>
    </div>


@endsection
