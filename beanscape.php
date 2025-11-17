<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeanScape's Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="projectcss.css">
</head>
<body>
  
   <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
     <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
              <img src="https://github.com/Advert-Alt/BeanScape/blob/main/BeanScapeLogo.png?raw=true" alt="BeanScape Logo" height="80" class="me-2">
            </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavLabel">BeanScape’s MenuBar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
       <a href="menu.php" class="btn btn-coffee">Order Now</a>
  </div>
</div>

  </nav>


<section id="home">
  <div class="container d-flex align-items-center justify-content-between text-white">
    
    <div class="home-text">
      <h1 class="display-4 fw-bold">Welcome to BeanScape's Coffee</h1>
      <p class="lead">Your daily dose of freshly brewed happiness.</p>
      <a href="#menu" class="btn btn-coffee btn-lg mt-3">Explore Our Menu</a> 
      <a href="#contact" class="btn btn-coffee btn-contact mt-3">Contact Us!</a>
    </div>

    <div class="home-image">
      <img src="https://github.com/Advert-Alt/BeanScape/blob/main/BeanScapeLogo.png?raw=true" alt="BeanScape Logo" class="hero-img">
    </div>

  </div>
</section>


<section id="about" class="about-section py-5">
  <div class="container text-center text-light">
    <div class="row align-items-center">
      
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="https://github.com/Advert-Alt/BeanScape/blob/main/BeanScapeLogo.png?raw=true" alt="About BeanScape" class="img-fluid rounded-4 shadow-lg">
      </div>

      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">About BeanScape’s Coffee</h2>
        <p class="lead">
          BeanScape’s Coffee lahir dari cinta kami terhadap aroma kopi yang menenangkan dan kehangatan momen bersama. 
          Kami menghadirkan kopi berkualitas dari biji pilihan petani lokal, diseduh dengan sepenuh hati untuk menciptakan pengalaman yang tak terlupakan.
        </p>
        <p>
          Di setiap cangkir, kami ingin berbagi cerita—tentang cita rasa, keaslian, dan kehangatan. 
          Karena bagi kami, kopi bukan sekadar minuman, tapi perjalanan rasa yang menyatukan orang-orang.
        </p>
        <a href="#menu" class="btn btn-coffee mt-3">Discover Our Coffee</a>
      </div>

      <div class="link-socialmedia">
        <a href="" class="me-3 text-light">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new--v1.png" alt="Instagram" width="30" height="30">
        </a>
        <a href="" class="me-3 text-light">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook" width="30" height="30">
        </a>
        <a href="" class="text-light">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" alt="Twitter" width="30" height="30">
        </a>
      </div>

    </div>
  </div>
</section>



<section id="menu" class="py-5 text-light" style="background-color:#1f1a17;">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Recommended Menu</h2>

    <div class="row g-4">

      
      <div class="col-md-3">
        <div class="card h-100 text-light" style="background-color:#3a302b; border:none;">
          <img src="https://tse1.mm.bing.net/th/id/OIP._JOVPYZnLO-7csgCWqhqbQHaHa?pid=Api&P=0&h=180"
               class="card-img-top" alt="Americano">
          <div class="card-body">
            <h5 class="card-title fw-bold">Americano</h5>
            <p class="fw-bold">Rp 20.000</p>
            <button class="btn btn-coffee w-100" onclick="location.href='menu.php'">Order</button>
          </div>
        </div>
      </div>

      
      <div class="col-md-3">
        <div class="card h-100 text-light" style="background-color:#3a302b; border:none;">
          <img src="https://tse2.mm.bing.net/th/id/OIP.wxkOdnRK4S3oYD6ahGOTAwHaHa?pid=Api&P=0&h=180"
               class="card-img-top" alt="Latte">
          <div class="card-body">
            <h5 class="card-title fw-bold">Caramel Latte</h5>
            <p class="fw-bold">Rp 28.000</p>
            <button class="btn btn-coffee w-100" onclick="location.href='menu.php'">Order</button>
          </div>
        </div>
      </div>

      
      <div class="col-md-3">
        <div class="card h-100 text-light" style="background-color:#3a302b; border:none;">
          <img src="https://tse3.mm.bing.net/th/id/OIP.SE7CsYKTXX7VSm3RvZeZoQHaHa?pid=Api&P=0&h=180"
               class="card-img-top" alt="Mocha">
          <div class="card-body">
            <h5 class="card-title fw-bold">Mocha</h5>
            <p class="fw-bold">Rp 30.000</p>
            <button class="btn btn-coffee w-100" onclick="location.href='menu.php'">Order</button>
          </div>
        </div>
      </div>

      
      <div class="col-md-3">
        <div class="card h-100 text-light" style="background-color:#3a302b; border:none;">
          <img src="https://tse3.mm.bing.net/th/id/OIP.JmkxzaVJsfQH1Wf2I6wukwHaHa?pid=Api&P=0&h=180"
               class="card-img-top" alt="Matcha Latte">
          <div class="card-body">
            <h5 class="card-title fw-bold">Matcha Latte</h5>
            <p class="fw-bold">Rp 32.000</p>
           <button class="btn btn-coffee w-100" onclick="location.href='menu.php'">Order</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<section id="blog" class="py-5 text-light" style="background-color: #2b1e16;">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">BeanScape’s Coffee Blog</h2>

    <div class="row g-4">

      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-lg bg-dark text-light border-0 rounded-4">
          <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=600" 
               class="card-img-top rounded-top-4" alt="History of Coffee">

          <div class="card-body">
            <h5 class="card-title fw-bold">Sejarah & Filosofi BeanScape</h5>
            <p class="card-text">
              Perjalanan kopi dari biji hingga cangkir, dan bagaimana BeanScape hadir untuk 
              menghadirkan kehangatan di setiap seduhan.
            </p>
            <a href="#" class="btn btn-coffee w-100">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-lg bg-dark text-light border-0 rounded-4">
          <img src="https://images.unsplash.com/photo-1510626176961-4b57d4fbad03?q=80&w=600" 
               class="card-img-top rounded-top-4" alt="Make Coffee">

          <div class="card-body">
            <h5 class="card-title fw-bold">Cara Membuat Kopi Enak di Rumah</h5>
            <p class="card-text">
              Tips barista untuk membuat kopi aromatik hanya dengan alat sederhana. 
              Mulai dari grind size hingga teknik seduh. Nikmati kopi ala kafe di rumah!
            </p>
            <a href="#" class="btn btn-coffee w-100">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card h-100 shadow-lg bg-dark text-light border-0 rounded-4">
          <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=600" 
               class="card-img-top rounded-top-4" alt="Popular Menu">

          <div class="card-body">
            <h5 class="card-title fw-bold">Menu Favorit Pelanggan</h5>
            <p class="card-text">
              Dari Latte hingga Cold Brew, inilah menu yang paling sering dipesan 
              dan menjadi kebanggaan BeanScape. Adakah favoritmu di sini?
            </p>
            <a href="#" class="btn btn-coffee w-100">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<section id="contact" class="py-5" style="background-color: #1e140e;">
  <div class="container text-light">

    <h2 class="text-center fw-bold mb-4">Contact BeanScape’s Coffee</h2>
    <p class="text-center mb-5">Hubungi kami untuk pemesanan, informasi, atau kerja sama.</p>

    <div class="row g-4">

      
      <div class="col-lg-5">
        <div class="p-4 rounded-4 shadow-lg" style="background-color: #2b1e16;">
          <h4 class="fw-bold mb-3">Informasi Kontak</h4>

          <p class="mb-2"><strong>Alamat:</strong><br>
          Jl. BeanScape No. 15, Pontianak, Kalimantan Barat</p>

          <p class="mb-2"><strong>No. Telepon:</strong><br>
          +62 8xx xxxx xxxx</p>

          <p class="mb-3"><strong>Email:</strong><br>
          beanscape.coffee@gmail.com</p>

          <h5 class="fw-bold mt-4">Jam Operasional</h5>
          <p class="mb-1">Senin - Jumat : 08.00 - 23.00</p>
          <p>Sabtu - Minggu : 09.00 - 04.00</p>

          
          <div class="d-flex mt-3">
            <a href="" class="me-3"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new--v1.png" width="30"></a>
            <a href="" class="me-3"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" width="30"></a>
            <a href=""><img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" width="30"></a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-7">
        <div class="p-4 rounded-4 shadow-lg" style="background-color: #2b1e16;">
          <h4 class="fw-bold mb-3">Kirim Pesan</h4>

          <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-success text-center">Pesan berhasil dikirim!</div>
          <?php endif; ?>


          <form action="kirim.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Pesan</label>
              <textarea name="pesan" rows="4" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-coffee w-100">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="projectjs.js"></script>

</body>
</html>

