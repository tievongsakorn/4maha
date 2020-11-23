<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="img/brand.png" alt="" height="60px"></a>
  <a class="navbar-brand" href="#"><h3> เส้นทางการท้องเที่ยว <br>      4 มหาราชจังหวัดตาก </h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>ข้อมูลจังหวัดตาก</h1> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>ปฏิทินกิจกรรม</h3></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          สมาชิก
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">เข้าสู่ระบบ</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">สมัครสมาชิก</a>

        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=homepage">
          <img src="img/brand.png" alt="" height="63px">
        </a>
      <a class="navbar-brand" href="?page=homepage">
        <h3>เส้นทางการท่องเที่ยว 4 มหาราชจังหวัดตาก </h3>
      </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">เส้นทาง
              </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=takdetail">ข้อมูลจังหวัดตาก</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">ปฏิทินกิจกรรม</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=member">สมาชิก</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php 
if(@$_GET['fd'])
	$file=$_GET['fd']."/".$_GET['page'].".php";
else
	$file=@$_GET['page'].".php";
if(is_file($file)){
	require_once("$file");
}
else{
	require_once("homepage.php");
}
?>

<footer>
  <div class="copy">
    <div class="h5">
      Copyright Vongsakorn Ketsuriyong Since 2020
    </div>
  </div>
</footer>
</body>
</html>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>