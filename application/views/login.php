<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
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
    <section id="tampilan" class="__tampilan">
        <main class="tampilan__login">
            <div class="tampilan__menu-atas" style="transition: all 300ms ease-in-out 0s; top: 10px; opacity: 0;">
                <div class="tampilan menu__atas-dua"> 
                    <div class="tampilan menu__icon">
                        <img src="https://assets.kitabisa.xyz/images/icon__alert--warning.svg" alt="warning" class="warning">
                    </div>
                    <span class="style__space"></span>
                </div>
            </div>
            <div class="tampilan masuk">
                <div class="logo__toped justify-content-center">
                    <img src="<?= base_url('assets/img/tOped.png')?>" alt="" class="tOped">
                </div>
                <form class="style style__form">
                    <h3 class="title--login">Udah pengen belanja kan? Daftar Sekarang yuk</h3>
                    <fieldset class="style style__fieldset">
                        <h3 class=" style Style__Titile-lm">Username atau Email</h3>
                        <div class="style style__textfield">
                            <input type="text" autocomplete="username" id="login" name="username" value placeholder="Contoh email@toko.com" class="style style__textfieldinput">
                        </div>
                    </fieldset>
                    <fieldset class="style style__fieldset">
                         <h3 class=" style Style__Titile-lm">Nama Lengkap</h3>
                            <div class="style style__textfield">
                                <input type="text" autocomplete="username" id="login" name="username" value placeholder="Nama Lengkap Pengguna" class="style style__textfieldinput">
                            </div>
                    </fieldset>
                    <fieldset class="style style__fieldset">
                        <h3 class=" style Style__Titile-lm">No. Handphone</h3>
                        <div class="style style__textfield">
                            <input type="number" autocomplete="cc-number" id="login" name="number" value placeholder="No. Handphone Aktif Pengguna" class="style style__textfieldinput">
                        </div>
                    </fieldset>
                    <h3 class=" style Style__Titile-lm">Kata Sandi</h3>
                    <fieldset class="style style__fieldset">
                        <div class="style style__textfield">
                            <input type="password" autocomplete="current-password" id="login" name="Password" value placeholder="Masukkan Kata Sandi" class="style style__textfieldpassword">
                            <div class="style style__paswordtoggle">
                                <input type="checkbox" class="style style__passwordtoggle-sc">
                                <label class="style style__passwordtoggle-sc-kl">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                        <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z"/>
                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                      </svg>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                        <fieldset class="style style_fieldset">
                            <button id="login_button_masuk" class="style__buttonwrapper" type="submit" style="color:white; text-decoration: none;"><a href="./Beranda/beranda.html" style="color: #ffff;">Daftar</a></button>
                        </fieldset>
                </form>
                <p class="style style__info-belumpunya">
                    Sudah Punya Akun?
                    <!--  -->
                    <a id="login login_link-daftar" href="./Beranda/beranda.html" style="color:  yellow; cursor: pointer;">Masuk Disini</a>
                </p>
            </div>
            <div class="style style__Content">
                <h3 class=" style Style__masuk">atau Masuk dengan</h3>
                <div class="style style_buttonContainer">
                    <button id="button-masuk-facebook" color="facebook" class="style style__buttonwrapper-fc">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/assets-kitabisa-cc/images/icons/icon_small_facebook.svg" alt="facebook" class="facebook">Masuk Dengan Facebook
                    </button>
                </div>
                <div class="style style_buttoncontainer">
                    <button id="button-masuk-goggle" color="goggle" class="style style__button-goggle">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/assets-kitabisa-cc/images/icons/icon_small_google.svg" alt="goggle" class="goggle">Masuk Dengan Goggle
                    </button>
                </div>
            </div>
        </main>
    </section>
  </body>
</html>