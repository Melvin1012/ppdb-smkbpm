<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portofolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {background: linear-gradient(135deg,#fbd3e9,#bbd2c5);font-family:'Comic Sans MS',cursive;}
    .polaroid{transform:rotate(-2deg);transition:.3s;}
    .polaroid:hover{transform:rotate(0) scale(1.05);}
    .social a{font-size:1.5rem;margin:0 8px;color:#444;text-decoration:none;}
    .social a:hover{color:#e1306c;}
    header, footer {background:#FADADD;}
  </style>
</head>
<body>
  <!-- Header -->
  <header class="text-dark text-center p-3 rounded-bottom">
    <h2>About Myself</h2>
  </header>

  <div class="container py-4">  
    <!-- Profil -->
    <div class="card text-center shadow mb-4 bg-white bg-opacity-75">
      <div class="card-body">
        <img src="/asset/li.jpg" alt="poto kudanil" class="rounded-circle mb-3 shadow border border-4 border-white" width="140">
        <h3>Melvin Olivia</h3>
        <p>Hai, aku Melvin Olivia saat ini aku sedang menempuh pendidikandi SMK Bina Putra Mandiri
           jurusan Rekayasa Perangkat Lunak. Walaupun background pendidika aku IT, saya tertarik
           dengan dunia otomotif dan aku akan terus belajar hal baru yang saya sukai.</p>
        <blockquote class="blockquote">“Do not compare yourself to others, compare yourself to who you were yesterday.”</blockquote>
        <div class="social">
          <a href="https://www.instagram.com/veynlyvia?igsh=MXVoaWg4M2tld2Ewcg==" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com/@_olin11?_t=ZS-8zZns4DcIi2&_r=1"><i class="bi bi-tiktok"></i></a>
          <a href="https://wa.me/qr/H2UF3EINU64ZB1"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <!-- Biodata -->
    <div class="card shadow bg-white bg-opacity-75 mb-4">
      <div class="card-header text-center fw-bold">Biodata Diri</div>
      <ul class="list-group list-group-flush text-start">
        <li class="list-group-item"><b>Nama:</b> Melvin Olivia</li>
        <li class="list-group-item"><b>TTL:</b> Bogor, 10 Desember 2025</li>
        <li class="list-group-item"><b>Alamat:</b> Parung Panjang</li>
        <li class="list-group-item"><b>Hobi:</b> Mendengarkan Musik</li>
      </ul>
    </div>

    <!-- Galeri -->
    <div class="row g-3">
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/mpls.jpg" class="card-img-top rounded" alt="Foto 1">
          <div class="card-body text-center"><p class="card-text">Kegiatan Dokumentasi MPLS di SMK Bina Putra Mandiri 2025</p></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/fotopra.jpg" class="card-img-top rounded" alt="Foto 2">
          <div class="card-body text-center"><p class="card-text">Tadarusan Bersama di SMPN 03 Parungpanjang</p></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/jurnal.jpg" class="card-img-top rounded" alt="Foto 3">
          <div class="card-body text-center"><p class="card-text">Kegiatan Eskul Jurnalistik di SMK Bina Putra Mandiri</p></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/" class="card-img-top rounded" alt="Foto 4">
          <div class="card-body text-center"><p class="card-text">Hiking bersama anggota jurnalistik ke gunung Kepuh</p></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/" class="card-img-top rounded" alt="Foto 5">
          <div class="card-body text-center"><p class="card-text">Kegiatan Pra-Prakerin di SMPN 03 Parungpanjang</p></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow polaroid">
          <img src="/asset/" class="card-img-top rounded" alt="Foto 6">
          <div class="card-body text-center"><p class="card-text">Menampilkan drama bersama teman sekelas</p></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-dark text-center p-3 rounded-top mt-4">
    <p class="mb-0">© 2025 Melvin Olivia</p>
  </footer>
</body>
</html>