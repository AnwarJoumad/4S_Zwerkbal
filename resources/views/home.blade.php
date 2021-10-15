@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/upcommingTournaments">Aankomende Toernooien</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van Joanne Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball</p>
    <div class="body-home">
        <div class="Aantal">
            <p>Aantal aankomende toernooien: <br> 5 </br></p>
        </div>
        <div class="totaal">
            <p>Totaal aantal teams: <br>26</br></p>
        

        </div>
        <div class="snitch">
            <img src="/img/snitch.png" alt="">

        </div>
    </div>

@endsection