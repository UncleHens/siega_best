<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIEGA - Unika Soegijapranata</title>
    <link rel="stylesheet" href="../asset/css/home.css" />
  </head>
  <body>
    <?php include 'navbar.php'; ?>

    <section class="hero">
      <div class="hero-text">
        <p class="welcome">SELAMAT DATANG DI SIEGA</p>
        <h1>Future Tech <span>Leaders</span></h1>
        <p class="desc">
          Sistem Informasi, Game Tech, E-Commerce, Akuntansi SI
        </p>
        <div class="hero-buttons">
          <button class="btn-yellow">Lihat Program</button>
          <button class="btn-outline">Pelajari Lebih Lanjut</button>
        </div>
      </div>
      <div class="hero-img"></div>
    </section>

    <section class="programs">
      <h2>Program Studi Unggulan</h2>
      <p class="subtitle">
        Pilih jalur masa depanmu dengan kurikulum yang dirancang sesuai
        kebutuhan industri global.
      </p>

      <div class="grid">
        <div class="card">
          <h3>Sistem Informasi</h3>
          <p>Enterprise Systems & Big Data</p>
          <a href="detail_program.php?program=sistem-informasi" class="link">Selengkapnya →</a>
        </div>

        <div class="card">
          <h3>Game Technology</h3>
          <p>Virtual Reality, Augmented Reality & Game Dev</p>
          <a href="detail_program.php?program=game-technology" class="link">Selengkapnya →</a>
        </div>

        <div class="card">
          <h3>E-Commerce</h3>
          <p>Digital Business Strategy & Startup</p>
          <a href="detail_program.php?program=e-commerce" class="link">Selengkapnya →</a>
        </div>

        <div class="card">
          <h3>Akuntansi + SI</h3>
          <p>Fintech & Information Systems Audit</p>
          <a href="detail_program.php?program=akuntansi-si" class="link">Selengkapnya →</a>
        </div>
      </div>
    </section>

    <section class="footer-section">
      <div class="footer-img"></div>
      <div class="footer-text">
        <h2>Talenta Pro Patria et Humanitate</h2>
        <p>
          Di SIEGA Unika Soegijapranata, kami percaya pada pengembangan talenta
          tidak hanya untuk kesuksesan pribadi, tetapi juga untuk kemajuan
          bangsa dan kemanusiaan.
        </p>
        <button class="btn-outline">Gabung Komunitas Kami</button>
      </div>
    </section>

    <?php include 'footer.php'; ?>
  </body>
</html>
