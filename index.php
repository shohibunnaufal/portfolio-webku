<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Shohibun Naufal</title>
</head>
<body>
    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
           <ul>
                <li><a href ="#about">about</a></li>
                <li><a href ="#skills">Skills</a></li>
                <li><a href ="#portfolio">Portfolio</a></li>
                <li><a href ="#contact">Contact</a></li>
                <li><a href ="motivasi.php">Motivasi diri</a></li>
           </ul>
    </div>
    <header>
        <div class="container">
            <h1><a href="">Shohibun Naufal</a></h1>
                <ul>
                    <li><a href ="#about">about</a></li>
                    <li><a href ="#skills">Skills</a></li>
                    <li><a href ="#portfolio">Portfolio</a></li>
                    <li><a href ="#contact">Contact</a></li>
                    <li><a href ="motivasi.php">Motivasi diri</a></li>
                </ul>
                <!-- menu mobile -->
                <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label> 
        </div>
    </header>
    <!-- bagian banner -->
    <section class=banner>
        <div class="container">
            <div class="banner-left">
                <img src="img/fotoku2.png">
                <h2>hai...<br>
                saya adalah seorang <span class="efek-ngetik"></span></h2>
                <p>selamat datang di website portfolio saya!</p>
            </div>
        </div>
    </section>
    <!-- bagian About -->
    <section  id="about">
        <div class="container">
            <h3>about</h3>
            <p> halo,perkenalkan nama saya Shohibun Naufal,berasal dari Madura.
                saya adalah seorang mahasiswa semester 4 di Universitas Trunojoyo Madura,
                dengan jurusan Teknik,prodi Teknik Informatika.Saya harap,saya bisa lulus dengan cepat 
                dan memperoleh skill web developer dan data engineer selama berkuliah.Aamiin...
            </p>
        </div>
    </section>
    <!-- bagian skils -->
    <section  id="skills">
        <div class="container">
            <h3>skills</h3>
            <h4>HTML</h4>
            <div class="bar">
                <span class="nilai html">70%</span>
            </div>
            <h4>CSS</h4>
            <div class="bar">
                <span class="nilai css">70%</span>
            </div>
            <h4>JAVASCRIPTS</h4>
            <div class="bar">
                <span class="nilai js">60%</span>
            </div>
            <h4>PHP</h4>
            <div class="bar">
                <span class="nilai php">60%</span>
            </div>
            <h4>PHYTON</h4>
            <div class="bar">
                <span class="nilai phyton">50%</span>
            </div>
        </div>
    </section>
    <!-- bagian portfolio -->
    <section id="portfolio">
        <div class="container">
            <h3>portfolio</h3>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 1</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 2</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 3</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 4</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 5</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 6</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 7</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/portfolio.jpg" alt="">
                    <span>portfolio 8</span>
                </a>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="col-3">
                <h4>Alamat</h4>
                <p>jl.Trunojoyo,Gg.Mawar II,RT 001 RW 010,ds.Banyuajuh,kec.Kamal,Bangkalan.</p>
            </div>

            <div class="col-3">
                <h4>Email</h4>
                <p>shohibunnaufal02@gmail.com</p>
            </div>

            <div class="col-3">
                <h4>Telp/Hp</h4>
                <p>+62 8785 9487 572.</p>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
    <footer>
        <div class="container">
            <small>Copyright &copy;2023 - shohibun naufal</small>
        </div>
    </footer>
</body>
</html>