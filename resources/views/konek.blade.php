<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="This is a login page template based on Bootstrap 5">
  <title>MQTT</title>
  <script src="https://cdn.tiny.cloud/1/5rjztrmw4gfutjk5amgeb8x4wcrt3sm6x3s7oq08buly9cv1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style type="text/css">
    .form-section {
      float: right; /* mengatur float ke kanan */
      width: 70%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
    }

    .form-left {
      float: left; /* mengatur float ke kanan */
      width: 30%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
    }  
    html{
      height: 100%;
    }

    body {
    background: linear-gradient(to right, #76BDF0, #E496BC);
    min-height: 100%;
    }

    button{
      border-radius: 7px;
      border: #5396E5 1px;
      background-color: #5396E5;
      color: white;
    }

    .blok {
        position: relative; left: 50px;
        background-color: #fff;
        overflow: hidden;
        /* display: flex; */
        width: 1400px;
        height: 70px;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-radius: 8px;
    }
</style>
<!-- css sayuti -->
  <style>
    body {
        font-family: "Lato", sans-serif;
        background: linear-gradient(to right, #76BDF0,#E496BC);      
        }

    .sidenav {
      margin-left: 30px;
      margin-top:90px;
      border-radius: 10px;
      height: 60%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: rgba(255, 255, 255, 0.863);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidenav a:hover {
        color: #f1f1f1;
    }
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
    .program {
        margin-left: 30px;
        margin-top:90px;
        border-radius: 10px;
        height: 60%;
        width: 0;
        position: fixed;
        background-color: white;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
    .program a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .program a:hover {
        color: #f1f1f1;
    }
    .program .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
    @media screen and (max-height: 450px) {
        .program {padding-top: 15px;}
        .program a {font-size: 18px;}
    }
    .burger{
        margin-left:20px;
    }
    .add{
        margin-top: 200px;
        float: left;
    }
    .kurang{
        background-color: black;
        border-radius:25px ;
        margin-left:50px;
    }
    .tambah{
        background-color: black;
        border-radius:25px ;
        margin-left:100px;
    }

    /** button tambah device */

    body {
      font-family: "Lato", sans-serif;
      background: linear-gradient(to right, #76BDF0,#E496BC);      
    }

    h1 {
      text-align: center;
    }

    .form-plus_device {
      max-width: 400px;
      margin: 0 auto;
      width: 0;
      top: 0;
      left: 0;
    }

    .form-group {
      margin-bottom: 20px;
      
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      float: left;
    }

    .form-group input {
      margin-block: 30px;
      margin-inline: 30px;
      width: 35%;
      padding: 10px;
      font-size: 16px;
      border-bottom: 5px solid black;
      border-left: transparent;
      border-top: transparent;
      border-right: transparent;
      border-radius: 4px;
      background-color: transparent;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    .form-group1 label {
      display: block;
      margin-bottom: 5px;
      float: left;
      
    }

    .form-group1 input {
      margin-inline: 30px;
      width: 35%;
      padding: 10px;
      font-size: 16px;
      border-bottom: 5px solid black;
      border-left: transparent;
      border-top: transparent;
      border-right: transparent;
      border-radius: 4px;
      background-color: transparent;
    }

    .form-group1 input[type="submit"] {
      background-color: #281be3;
      color: white;
      cursor: pointer;
    }
    .siDevice {
      margin-left: 300px;
      margin-top:90px;
      border-radius: 10px;
      height: 60%;
      width: 0;
      position: fixed;
      top: 0;
      left: 0;
      background-color: rgba(255, 255, 255, 0.863);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 70px;

    }
    .siDevice a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
      }
    .siDevice a:hover {
      color: #f1f1f1;
    }
    .siDevice .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    @media screen and (max-height: 450px) {
      .siDevice {padding-top: 15px;}
      .siDevice a {font-size: 18px;}
    }

    .btn{
      background-color: rgba(255, 255, 255, 0.646);
      border-radius: 5px;
      width: 300px;
      height: 25px;
      font-weight: bold;
      font-size: 18px;
      margin-top: 10px;
      cursor: pointer;
    }

    .burger{
      margin-left:20px;
    }
    .device{
      margin-left: 100px;
      float: left;
    }
  </style>

</head>
<>
<nav class="navbar navbar-expand">
        <div class="container">
          <a class="navbar-brand" href="#"><h1 style="color: black;">MQTT</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">        
                <nav class="right navbar-nav ms-auto">
              <li class="nav-item-right">
              <button type="button" >
                <img style="margin-right: 5px; margin-bottom: 5px;" src="/image/Turn off.png" width="20px" height="20px">CONNECT</button>
              </li>
            </nav>
          </div>
        </div>
      </nav>
      <ul class="nav justify-content-center blok">
  <li class="nav-item">
    <a class="nav-link active" href="#"><img src="/image/program.png">Program</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/text.png">Text</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/hypertext.png">Hypertext</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/time.png">time</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><img src="/image/temp.png">Temperature</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/ac.png">Animated Character</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/send.png">Send</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/adjusttime.png">Adjust Time</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/udisk.png">Disk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/preview.png">Preview</a>
  </li>
</ul>
<style>
  :left {
    width: 100px;
    background-color: #eee;
  }

  ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  li {
    text-align: left;
  }

  a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
  }

  a:hover {
    background-color: #ddd;
  }
</style>
<div class="form-left" style="position: relative; left: 50px;">
<div style="border-radius:8px; position: relative; top: 20px; width: 250px; height: 400px; background-color: #eee;">
<nav class="left">
  <ul>
    <li><a href="/home">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
    <li><a href="#">Menu 4</a></li>
  </ul>
  <img type=button href="#" style="position: relative; top: 150px;" src="/image/min.png">
  <img type=button href="index.php" style="position: relative; top: 150px; left: 190px;" src="/image/plus.png">
  <!-- <button type="button" style="position: relative; top: 140px;" href="#"><img  src="/image/min.png"></button>
  <button type="button" style="position: relative; top: 100px; left: 210px;" href="#"><img src="/image/plus.png"></button> -->
</nav>
</div>
<!-- code sayuti -->
<div class="bar" id="bar">
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <span style="font-size:30px;cursor:pointer;" onclick="openPro()" class="burger"><i class="fa fa-desktop"></i></span>
                    
        <div id="myprogram" class="program"> 
          <a href="javascript:void(0)" class="closebtn" onclick="closePro()">&times;</a>
          <i style="font-size:20px;cursor:pointer;margin-left:20px;" class="fa fa-desktop"></i>
        </div>
        <div class="add">
          <button style="font-size:20px;cursor:pointer;" class="kurang"><i class="fa fa-minus"></i></button>
          <button style="font-size:20px;cursor:pointer;" class="tambah" onclick="openConnect()"><i class="fa fa-plus"></i></button>   
        </div>
      </div>
      <div id="myDevice" class="siDevice">
            <div  class="form-group">
              <a href="javascript:void(0)" class="closebtn" onclick="closeConnect()">&times;</a>
              <h1>MQTT CONNECTION</h1>
              <label for="ip-address"></label>
              <input type="ip-address" id="ip-address" name="ip-address" placeholder="Ip-Address" required>
              <label for="port"></label>
              <input type="port" id="port" name="port" placeholder="Port" required>
            </div>         
            <div class="form-group1">
              <label for="email"></label>
              <input type="email" id="email" name="email" placeholder="Email" required>
              <label for="password"></label>
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="device">
              <button class="btn" class="tambah" onclick="openNav()"> Connect </button>
            </div>
          </div>
    </div>

    <script>
      function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      }

      function openPro() {
      document.getElementById("myprogram").style.width = "250px";
      }

      function closePro() {
      document.getElementById("myprogram").style.width = "0";
      }
      function openConnect() {
      document.getElementById("myDevice").style.width = "500px";
      }
      function closeConnect() {
      document.getElementById("myDevice").style.width = "0";
      }
    </script>
</div>
<form>
  <input type="text" name="" placeholder="Judul" style="width: 100%;padding: 10px;"><br><br>
  <textarea class="ckeditor" id="ckedtor"></textarea><br>
  <input type="submit" name="" value="Kirim">
 </form>

<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<!-- <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> -->

</body>
</html>