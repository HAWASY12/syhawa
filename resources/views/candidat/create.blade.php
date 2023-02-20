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
                <h1 style="font-size:50px; color:white" class="text-center"> <marquee>Formulaire Ajout Candidat</marquee> </h1>
            </div>
            <br>
            <fieldset>
            <form method="POST" action="{{route('candidat.store')}}" class="text-center">
            <div style="background:#6A5ACD;">
            <div style="display:flex">
                <div style="width:75%">
                    @csrf
                    <label for="">NOM</label>
                    <br>
                    <input type="text" required name="nom" placeholder="Nom">
                    <br>
                    <br>
                    <label for="">PRENOM</label>
                    <br>
                    <input type="text" required name="prenom" placeholder="prenom">
                    <br>
                    <br>
                    <label for="">EMAIL</label>
                    <br>
                    <input type="email" required name="email" placeholder="email">
                    <br>
                    <br>
                    <label for="">AGE</label>
                    <br>
                    <input type="number" required name="age" placeholder="age">
                    <br>
                    <br>
                    <br>
                    <label for="">NIVEAU D'ETUDE</label>
                    <br>
                    <input type="text" required name="niveauEtude" placeholder="niveauEtude">
                    <br>
                    <br>
                    <br>
                </div>
            
                <div style="width:50%">
                    <label for="">SEXE</label>
                    <br>
                    <select name="sexe" id="">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                    <br>
                    <br>
                    <label for="">FORMATION</label>
                    <br>
                    <select name="formations" id="">
                        @foreach($formations as $formation)
                        <option value="{{$formation->id}}">{{$formation->nom}}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <label for="">REFERENTIEL</label>
                    <br>
                    <select name="referentiels" id="">
                        @foreach($referentiels as $referentiel)
                        <option value="{{$referentiel->id}}">{{$referentiel->libelle}}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <label for="">TYPE</label>
                    <br>
                    <select name="types" id="">
                        @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->libelle}}</option>
                        @endforeach
                    </select>
                    
                    </div>
                </div>
                <button type="submit" name="">Ajouter</button>
                
                </div>
            </form>
        </fieldset>
    </body>
</html>