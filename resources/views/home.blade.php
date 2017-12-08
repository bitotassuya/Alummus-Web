<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Alumnus Web</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }
  .navbar {
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  html, body {
      background-image:url('images/back2.png');
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/home') }}">Alumnus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('/home')}}">Home</a></li>
         <li><a href="{{url('/profileme')}}">Profile me</a></li>
        <li><a href="{{url('/blog')}}">blog</a></li>
        <li><a href="{{url('/post')}}">Add Post</a></li>
        <li><a href="{{url('/blog')}}"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="{{url('/profileme')}}">Profile</a></li>
                      <li><a href="{{url('/profile')}}">Edit Profile</a></li>
                        <li><a href="{{url('/category')}}">Category</a></li>

                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

            @endguest
        </ul>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/wel4.png" alt="New York" width="1200" height="700">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="images/wel3.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="images/wel2.png" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="images/wel1.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">

        </div>
      </div>

    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <!-- navbar 2 -->
  <nav class="navbar navbar-inverse navbar-fixed-down">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

      </div>
      <div>
        <div class="collapse navbar-collapse" id="myNavbar2">
          <ul class="nav navbar-nav">
            <li><a href="#section1">ประกาศรับสมัครโควตา </a></li>
            <li><a href="#section2">ทุนการเรียนดี</a></li>
            <li><a href="#section3">ศิษย์เก่าดีเด่น</a></li>

            <li><a href="https://www.facebook.com/groups/coe.psu.phuket/">Facebook CoE</a></li>

          </ul>
        </div>
      </div>
    </div>
  </nav>

  <h1><span class="label label-default">ข่าวสารและประชาสัมพันธ์</span></h1>

<center>

  <!-- Colum 1-->
<div class="container">
  <div id="section1" class="container-fluid">
  <img src="images/wel4.png" class="img-responsive" alt="Cinque Terre" width="700" height="700">
  <div class="row">

    <div class="col-sm-12">
      <h3>ประกาศรับสมัครโควตา 14 จังหวัดภาคใต้ </h3>
      <p>โครงการรับนักศึกษาโดยวิธีพิเศษ นักเรียนในโรงเรียน 14 จังหวัดภาคใต้ หลักสูตรวิศวกรรมศาสตรบัณฑิต </p>
      <p>สาขาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ วิทยาเขตภูเก็ต ประจำปีการศึกษา 2561</p>


    </div>
  </div>
</div>

  <!-- Colum 2-->
  <div id="section2" class="container-fluid">
  <img src="images/wel3.png" class="img-responsive" alt="Cinque Terre" width="700" height="700">
  <div class="row">

    <div class="col-sm-12">
      <h3>ทุนการเรียนดีปี 2559</h3>
      <p>ทางภาควิชา ได้มอบทึนให้นักศึกษา ที่มีผลการเรียนได้ประจำปี 2559</p>

    </div>
</div>
</div>
</div>
</center>
<!-- present Alumin-->
<div class="container text-center" id="section3">
<h3><span class="label label-default">ศิษย์เก่าดีเด่นประจำปี2560</span></h3>
   <p><em>ศิษย์เก่า ที่ประสบความสำเร็จในหน้าที่การงาน</em></p>

  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>นางสาวชฎาธาร บัวอิน</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/thebest.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p></p>
        <p>ตำแหน่งโปรแกรมเมอร์ ธนาคารกรุงเทพ</p>
        <p>เกรียตินิยมอันดับ 2</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>นางสาวกิ่งกาญจน์ สร้อยสกุลณี</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/best2.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>ตำแหน่งโปรแกรมเมอร์ </p>
        <p>ธนาคารกรุงเทพ จำกัดมหาชน</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/thebest2.png" class="img-circle person" alt="Random Name"width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>ตำแหน่ง Full Stack Developer</p>
        <p>บริษัท Pi R Square จำกัด</p>

      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="{{ url('/home') }}" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Alumnus Web by Jirapong <a href="{{ url('/home') }}" data-toggle="tooltip" title="Visit w3schools">www.alumnuscoepk.com</a></p>
</footer>


</body>
</html>
