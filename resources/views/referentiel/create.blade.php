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
                <h1 style="font-size:50px; color:white" class="text-center"> <marquee>Formulaire Ajout Referentiel </marquee> </h1>
            </div>
            <br>
            <fieldset>
            <form method="POST" action="{{route('referentiel.store')}}" class="text-center">
            <div style="background:#6A5ACD;">
            <div style="display:flex">
                <div style="width:75%">
                    @csrf
                    <label for="">LIBELLE</label>
                    <br>
                    <input type="text" required name="libelle" placeholder="libelle">
                    <br>
                    <br>
                    <label for="">VALIDETED</label>
                    <br>
                    <input type="number" required name="valideted" placeholder="valideted">
                    <br>
                    <br>
                    <label for="">HORAIRE</label>
                    <br>
                    <input type="number" required name="horaire" placeholder="horaire">
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