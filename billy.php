<?php
  $nama = "Billy Mohammad";
  $alamat = "Bondowoso";
  $nim = "E41220437";
  $nohp = "082233236128";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Sederhana</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
</head>
<body>
  <!-- <nav>
    <div class="namakiri">
      <span>Billyy</span>
    </div>
      <ul class="nav-kanan">
        <li><a href="#home">Home</a></li>
        <li><a href="#Info">Info</a></li>
        </ul>
  </nav> -->
  <section class="home" id="home">
  <nav>
    <div class="namakiri">
      <span>Billyy</span>
    </div>
      <ul class="nav-kanan">
        <li><a href="#home">Home</a></li>
        <li><a href="#Info">Info</a></li>
        </ul>
  </nav>
  <div class="profil">
    <img src="asset/iconHome.jpg" alt="">
    <div class="intro">
      <p>Hello World!</p>
      <ul class="social-icons">
              <li>
                <a href="https://t.me/bllyyy"><i class="lni lni-telegram-original"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/bllyy___"><i class="lni lni-instagram-original"></i></a>
              </li>
                <li>
                <a href="https://open.spotify.com/user/31zuutg3qv54o7nnqvbetngva4eu?si=__HjODhNQKWDMoNAwesSwA&utm_source=copy-link"><i class="lni lni-spotify-original"></i></a>
              </li>
              <li>
                <a href="https://github.com/bllyjulian?tab=repositories" target="blank"><i class="lni lni-github-original"></i></a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=6282233236128&text= halo bil :)"><i class="lni lni-whatsapp"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/bllyy___"><i class="lni lni-tiktok"></i></a>
              </li>
            </ul>
            <button><a href="#Info">Table</a></button>
    </div>
  </div>
  </section>
  <section class="info" id="Info">
  <div class="tabel">
  <table border="1px solid">
  <tr class="tb">
    <td>Nama Lengkap</td>
    <td>alamat</td>
    <td>Nim</td>
    <td>nohp</td>
  </tr>
  <tr>
    <td><?php echo "<p>$nama</p> "; ?></td>
    <td><?php echo "<p>$alamat</p> "; ?></td>
    <td><?php echo "<p>$nim</p> "; ?></td>
    <td><?php echo "<p>$nohp</p> "; ?></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  </table>
  </div>
  </section>
</body>
</html>