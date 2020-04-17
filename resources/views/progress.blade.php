<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
          /* Remove the navbar's default rounded borders and increase the bottom margin */ 
          .navbar {
            margin-bottom: 0px;
            border-radius: 0;
          }
         
          /* Add a gray background color and some padding to the footer */
          footer {
            background-color: #f2f2f2;
            padding: 25px;
          } 
        </style>
      </head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <img class="navbar-brand" src="brandname.png">
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><form method="POST" action="home">@csrf
                <input type="hidden" name="email" value=@foreach($ts as $u)
                {{$u->user_email}}
                @endforeach>
                <button style="margin-top:28%;background-color:black;border:none;color:white;" type="submit">Home</button>
              </form></li>
              <li style="margin-left:12px"><form method="POST" action="progress">@csrf
                <input type="hidden" name="email" value=@foreach($ts as $u)
                {{$u->user_email}}
                @endforeach>
                <button  style="margin-top:14%;background-color:black;border:none;color:white;" type="submit">View Progress</button>
              </form></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> @foreach($ts as $u)
                {{$u->name}}
                @endforeach</a></li>
              <li><a href="{{route('login')}}"> Logout</a></li>
            </ul>
          </div>
        </div>
    </nav>

<div style="background-color: rgb(50,50,50,0.1);
background-repeat: no-repeat;
background-size: 100% 100%;
background-position: 50% 50%;
width: 100%;
font-weight:1;
height: fit-content;
border: 1px solid grey; border-radius: 5px">
<div class="container-fluid">
    <div class="row">
      <?php 
      $q=0;
      $t=0;
        foreach($ts as $temp)
        {
          $t=explode(",",$temp->test_scores);
        }
      ?>
      
      @foreach($t as $p)
        <div class="col-lg-4">
        <h1 style="text-align:center;">Test {{++$q}} marks:</h1>
        <h3 style="text-align:center;">{{$p}}</h3>
        </div>
      @endforeach
        </div>
    </div>
</div>
<footer class="container-fluid" style="background-color: rgb(195, 195, 195);">
  <div class="row">
      <div class="col-md-2">
          <a href="#" style="text-decoration-line: none">AptiTrack Copyright</a>
      </div>
      <div class="col-md-10"></div>
  </div>
</footer>
</body>
</html>
