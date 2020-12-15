<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ?>">

     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- link Other -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="icon" href="img/bukalapak-logo-icon.svg" type="image/icon type">
    <title>Home Pasar</title>

    <style>
        body{
            background-color: #fafafa;
        }
    </style>
  </head>
  <body>
    <section id="navbar" class="searchbar">
      <header class="header">
        <div class="menuatas">
          <div class="logo__kasdio">
            <a id="logo" title="tokopedia" class="logo" href="#">
              <img src="<?=base_url('assets/img/tokopedia.png')?>" alt="" class="img-fluid">
            </a>
          </div>
            <div id="search" class="search">
              <input type="text" placeholder="Cari Sepatu Basket" class="search cari">
              <a href="<?=base_url('search')?>">
              <svg  class="ex" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
              </a>
            </div>
            <div class="pasar-clock">
              <img src="./assets/img/clock.png" class="clock" alt="">
            </div>
            <div class="cart">
             <img src="./assets/img/cart.png" alt="">
            </div>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#"><img src="<?=base_url('assets/img/chat.png')?>" class="img-chat" alt=""><span class="textside">Chat Admin</span> </a>
              <a href="#"><img src="<?=base_url('assets/img/Akun.png')?>" class="img-akun" style="width: 28px;" alt=""><span class="textside">Akun</span></a>
              <a href="#"><img src="<?=base_url('assets/img/Setting.png')?>" class="img-setting" alt=""><span class="textside">Pengaturan</span></a>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">
              <img src="<?=base_url('assets/img/menu.png')?>" alt="" style="padding: 20px; margin-bottom: 5px;" >
            </span>
          </div>
      </header>
    </section>
  