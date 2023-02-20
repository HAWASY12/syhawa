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
                <h1 style="font-size:50px; color:white" class="text-center"> <marquee>Formulaire Ajout Type</marquee> </h1>
            </div>
            <br>
            <fieldset>
            <form method="POST" action="{{route('type.store')}}" class="text-center">
            <div style="background:#6A5ACD;">
                    @csrf
                    <label for="">LIBELLE</label>
                    <br>
                    <input type="text" required name="libelle" >
                    <br>
                    
            
                <button type="submit" name="">Ajouter</button>
                <!-- <input type="submit" name="" value="Ajouter"> -->
                <!-- <a style="border:1px solid; background:#191970; border-radius:10px; 
             font-size:20px;marging-bottom:10px; color:white" href="{{route('candidat.create')}}">
             Ajouter</a> -->
            </form>
        </fieldset>
    </body>
</html>