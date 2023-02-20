<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="">
    </head>
    <body >
     
    <div class="container">
        <div class="card-header">
            <div style="background:#191970; border-radius:10px;padding:10px">
                <h1 style="font-size:50px; color:white" class="text-center"> <marquee>Formulaire Ajout Formation</marquee> </h1>
                <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active bg-warning" href="{{route('graphe')}}">Formations Graph</a>
            </li>
          
         
    </ul>
   
            </div>
            <br>
            <fieldset>
            <form method="POST" action="{{route('formation.store')}}" class="text-center">
            <div style="background:#6A5ACD;">
                    @csrf
                    <label for="">NOM</label>
                    <br>
                    <input type="text" required name="nom" placeholder="Nom">
                    <br>
                    <br>
                    <label for="">DUREE</label>
                    <br>
                    <input type="number" required name="duree" >
                    <br>
                    <br>
                    <label for="">DESCRIPTION</label>
                    <br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                    <br>
                    <br>
                    <label for="">IS STARTED</label>
                    <br>
                    <input type="number" required name="isStarted" >
                    <br>
                    <br>
                    <br>
                    <label for="">DATE DE DEBUT</label>
                    <br>
                    <input type="date" required name="date_debut" >
                    <br>
                    <br>
                    <br>
            
                <button type="submit" name="">Ajouter</button>
               
            </form>
        </fieldset>
    </body>
</html>