<!DOCTYPE html>
<html lang="en">
<head>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidats', 'Age'],
            <?php echo $datas; ?>
        ]);

        var options = {
          title: 'La tranche d\'age',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body style="background-color:whitesmoke" >
    <!-- <div style="background:#AED6F1; border-radius:10px;padding:5px">
        <h1 style="font-size:50px; color:white; text-align:center">Tableau de Bord </h1>
        <a 
          href="{{route('candidat.create')}}" class="text-center">Postuler</a>
        
    </div> -->
    <div class="container-fluid" style="background-color:#191970" >
    <h1 style="font-size:30px; color:white; text-align:center">Tableau de Bord </h1>
    <ul class="nav nav-pills">
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
            <li class="nav-item">
                <a class="nav-link bg-success" href="{{route('login')}}">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning float-right" href="{{route('register')}}">S'inscrire</a>
            </li>
    </ul>
   
    </div>
    <br><br><br>
    
    <!-- <section style="background:grey; border-radius:10px;padding:5px; width:50%">
        <h2 style="font-size:50px; color:#AED6F1; text-align:center">Nombre de candidats par formation </h2>      
    </section> -->
    <div class="container" style="background:#191970;">
    <h2 style="font-size:20px; color:#AED6F1; text-align:center">Nombre de candidats par formation </h2>      
   </div>
    <br><br>
    <center>
    @foreach ($formations as $formation)
        <span hidden>{{$cpt = 0}}</span>
        <span hidden>{{$c = "Candidats"}}</span>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; width:30%">
        <h4>{{$formation->nom}}</h4>
        <div style="background:whitesmoke; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($formation->candidats as $f)
                <span hidden>{{$cpt = $cpt + 1}}</span>
            @endforeach 
            {{$cpt." ".$c}}       
        </div>
        </div><br><br>
    @endforeach
    </center>
    <br><br>
    <div class="container" style="background:#191970;">
    <h2 style="font-size:20px; color:#AED6F1; text-align:center">Nombre de formations par referentiel </h2>      
    </div>
    <center>
    <br><br>
    @foreach ($referentiels as $referentiel)
        <span hidden>{{$c = "Formations"}}</span>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; width:30%">
        <h4>{{$referentiel->libelle}}</h4>
        <div style="background:whitesmoke; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($referentiel->formations as $f)
                <span hidden>{{$cpt = $cpt + 1}}</span>
            @endforeach 
            {{$cpt." ".$c}}       
        </div>
        </div><br><br>
    @endforeach
    </center>
    <br><br>
    
    <div class="container" style="background:#191970;">
    <h2 style="font-size:20px; color:#AED6F1; text-align:center">Repartition des formations par type </h2>      
    </div>
    <center>
    <br><br>
    @foreach ($types as $type)
        <span hidden>{{$c = "Formations"}}</span>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; width:30%">
        <h4>{{$type->libelle}}</h4>
        <div style="background:whitesmoke; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($type->referentiels as $f)
                @foreach ($f->formations as $t)
                    <ul>
                        <li>{{$t->nom}}</li>
                    </ul>
                @endforeach
            @endforeach 
        </div>
        </div>
        
        <br><br>
    @endforeach
    </center>
    <br><br>
    
    <div class="container" style="background:#191970;">
    <h2 style="font-size:20px; color:#AED6F1; text-align:center">Repartition des candidats par sexe </h2>      
     </div>
     <center>
    <br><br>
        <span hidden>{{$cpt = 0}}</span>
        <span hidden>{{$for = "Hommes"}}</span>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; width:30%">
        <h4>Homme</h4>
        <div style="background:whitesmoke; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($candidats as $candidat)
                @if ($candidat->sexe == "Homme")
                <span hidden>{{$cpt = $cpt + 1}}</span>
                @endif
            @endforeach
            {{$cpt." ".$for}}
            
        </div>
        </div>
        </center>
        <br>
        <br>
        <center>
        <span hidden>{{$cpt1 = 0}}</span>
        <span hidden>{{$fore = "Femmes"}}</span>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; width:30%">
        <h4>Femmes</h4>
        <div style="background:whitesmoke; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($candidats as $candidat)
                @if ($candidat->sexe == "Femme")
                <span hidden>{{$cpt1 = $cpt1 + 1}}</span>
                @endif
            @endforeach
            {{$cpt1." ".$fore}}
            </center> 
        </div>
        </div><br><br>
        <div class="container" style="background:#191970;">
            <h2 style="font-size:20px; color:#AED6F1; text-align:center">Graphe representant la tranche d'age </h2>
        </div>
        <br><br>
        <center>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; padding:5%">
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
        </center>
</body>
</html>