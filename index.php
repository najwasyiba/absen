<?php
session_start();
include('conn.php');

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $whatsapp = $_POST['whatsapp'];
  $kesan = $_POST['kesan'];
 

  $sql = "INSERT INTO mahasiswa VALUES ('$nama', '$nim','$whatsapp','$kesan')";
  mysqli_query($conn, $sql);
  $_SESSION['sukses'] = "Berita baru berhasil ditambahkan";
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Neo Telemetri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="icon" type="image/x-icon" href="img/icon.jpg" />
  <link rel="stylesheet" href="style.css" />
  <link href="toastr.css" rel="stylesheet" />
</head>

<body>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-7 left p-5 d-flex align-items-center">
          <div class="intro">
            <p class="satu">Hi, I'm a <span class="multiText"></span></p>
            <p class="dua">and we are Neoters!</p>
            <p class="tiga">
              UKM Neo Telemetri is the one and only IT-based community in Andalas University. We have 3 divisions; MMD (UI/UX, Video Editing, and 3D), Programming (Web, Mobile, and Machine Learning), and SKJ (System and Network
              Engineering).
            </p>
            <img src="img/divs.png" alt="" width="150px" class="mt-3" />
          </div>
        </div>
        <div class="col-md-5 right d-flex align-items-center justify-content-center">
          <div class="kard">
            <img src="logo.png" class="mx-auto d-block" alt="Neo Telemetri" />
            <h1 class="text-center welcome pt-4">Selamat datang!</h1>
            <p class="detail text-center">Silahkan masukkan data anda</p>
            <form action="" method="post" class="formulir mt-5">
              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" name="nama" class="input-field" autocomplete="off" required />
                  <label>Nama</label>
                </div>
                <div class="input-wrap">
                  <input type="number" name="nim" class="input-field" autocomplete="off" required />
                  <label>NIM</label>
                </div>
                <!-- <div class="input-wrap">
                    <input type="email" name="email" class="input-field" autocomplete="off" />
                    <label>Email</label>
                  </div> -->
                <div class="input-wrap">
                  <input type="number" name="whatsapp" class="input-field" autocomplete="off" />
                  <label>Whatsapp</label>
                </div>
                <div class="input-wrap">
                  <input type="text" name="kesan" class="input-field" autocomplete="off" />
                  <label>Kesan</label>
                </div>
                <input type="submit" id="tombol" name="submit" value="Submit" class="submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/sweetalert2.all.min.js"></script>
  <script src="app.js"></script>
</body>
</html>