<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body  style="background:#F0F8FF";> 
    <div class="container mt-6" >
        <div class="card-header">
        <div style="background:#191970; border-radius:5px;padding:5px">
                <h1 style="font-size:50px; color:white" class="text-center mt-0"><marquee> Liste des Candidats</marquee></h1>
                <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('welcome')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('candidat.create')}}">Postuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('candidat.index')}}">Candidats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('formation.create')}}">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('type.create')}}">Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('referentiel.create')}}">Referentiel</a>
                </li>
                
                </ul>
            </div>
            <br>
            <br>
            <br>
            <br>
            
            <br>
            <br>
            <div class="card-body">
            <div width="50%">
            <table class="table table-bordered bg-white" style="background-color:#6A5ACD; color:white">
            <tr class="bg-secondary text-white text-center text-ittalic" > 
                   
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td>EMAIL</td>
                    <td>AGE</td>
                    <td>NIVEAU D'ETUDE</td>
                    <td>SEXE</td>
                    
                   
                </tr>

                
            @if ($candidats->count() > 0)
                        @foreach ($candidats as $candidat) 
                            <tr>
                                <td>{{ $candidat->nom }}</td>
                                <td> {{ $candidat->prenom }} </td>
                                <td> {{ $candidat->email }} </td>
                                <td> {{ $candidat->age}} </td>
                                <td> {{ $candidat->niveauEtude }} </td>
                                <td> {{ $candidat->sexe}} </td>
                               
                                
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun candidat  dans la base</span>
            @endif 
                
            </table>
          
</div>
        
    </body>