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
          title: 'La graphe des formations en cours et en attente',
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
                <a class="nav-link active" href="{{route('welcome')}}">Dashbord</a>
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
    
    
        <div class="container" style="background:#191970;">
            <h2 style="font-size:20px; color:#AED6F1; text-align:center">Graphe Representant des Formations(en cours et en attente) </h2>
        </div>
        <br><br>
        <center>
        <div style="background:#6A5ACD; border-radius:10px;padding:5px; padding:5%">
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
        </center>
</body>
</html>