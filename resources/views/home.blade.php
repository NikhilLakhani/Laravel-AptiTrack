<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      /* Remove the navbar's default rounded borders and increase the bottom margin */ 
      .navbar {
        margin-bottom: 1px;
        border-radius: 0;
      }
     
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
      .div1 {
      background-image: url('caprojbg.jpg');
      background-repeat: no-repeat;
      background-size: 100% 500px;
      background-position: 50% 50%;
      height:500px;
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
              <input type="hidden" name="email" value=@foreach($user as $u)
              {{$u->user_email}}
              @endforeach>
              <button style="margin-top:28%;background-color:black;border:none;color:white;" type="submit">Home</button>
            </form></li>
            <li style="margin-left:12px"><form method="POST" action="progress">@csrf
              <input type="hidden" name="email" value=@foreach($user as $u)
              {{$u->user_email}}
              @endforeach>
              <button  style="margin-top:14%;background-color:black;border:none;color:white;" type="submit">View Progress</button>
            </form></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="login"><span class="glyphicon glyphicon-user"></span> @foreach ($user as $use1)
            {{ $use1->name }}
        @endforeach</a></li>
        <li><a href="{{route('login')}}"> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="div1">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3" style="text-align:center;margin-top:9%">
            <li><form method="POST" action="test">@csrf
                <input type="hidden" name="email" value=@foreach($user as $u)
                {{$u->user_email}}
                @endforeach>
                <button style="opacity:0.9" type="submit"><img src="tat.png"></button>
              </form></li>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3" style="text-align:center;margin-top:12%">
              <li><form method="POST" action="progress">@csrf
                <input type="hidden" name="email" value=@foreach($user as $u)
                {{$u->user_email}}
                @endforeach>
                <button style="opacity:0.9" type="submit"><img src="vp.png"></button>
              </form></li>
            </div>
            <div class="col-lg-2">
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