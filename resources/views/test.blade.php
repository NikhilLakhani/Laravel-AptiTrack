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

    {{-- <nav class="navbar navbar-inverse">
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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="progress">View Progress</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login"><span class="glyphicon glyphicon-user"></span> Nikhil</a></li>
            </ul>
          </div>
        </div>
    </nav> --}}

<div style="background-image: url('caprojbg.jpg');
background-repeat: no-repeat;
background-size: 100% 100%;
background-position: 50% 50%;
width: 100%;
font-weight:1;
height: fit-content;
border: 1px solid grey; border-radius: 5px">
<form action="sub" method="POST">@csrf
  <?php
  $i=1;
  $p="n";
  $ans="a";
  ?>
  @foreach ($ques as $q)
    <p>{{$i++}}. {{ $q->ques }}</p>
      <input type="radio" name={{$p}} value=1>
      <label for="A">{{ $q->opt1 }}</label><br>
      <input type="radio" name={{$p}} value=2>
      <label for="B">{{ $q->opt2 }}</label><br>
      <input type="radio" name={{$p}} value=3>
      <label for="C">{{ $q->opt3 }}</label><br>
      <input type="radio" name={{$p}} value=4>
      <label for="D">{{ $q->opt4 }}</label><br>
      <input type="hidden" name={{$ans}} value={{$q->correct}}>
      <input type="hidden" name="email" value=@foreach($user as $u){{$u->user_email}}@endforeach>
      <br>
      <?php
      $p=$p."n";
      $ans=$ans."a";
      ?>
    @endforeach
      <div  style="width:fit-content;
      position: relative;
      margin:0 auto;">
      <input style="border: 1px solid grey; border-radius: 5px" type="submit" value="Submit">
    </form>
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
