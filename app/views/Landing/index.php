<?php
$records = $data['records'];
$pages = $data['pages'];
// echo $data['params'];

?>
<header class="navi ">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a href="<?= BASEURL ;?>" class="navbar-brand mr-lg-5 text-white">COVACINE</a>
            <button class="navbar-toggler" type="button" 
            data-toggle="collapse" data-target="#navigate" a
            ria-controls="navigate" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigate">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= BASEURL ;?>" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?= BASEURL ;?>/About/covid">Covid-19</a>
                        <a class="dropdown-item" href="<?= BASEURL ;?>/About/vaccine">Vaccine</a>
                        <!-- <a class="dropdown-item" href="#">Page 3</a> -->
                    </div>
                    </li>

                    </ul>
                <!-- <a href="#" class="text-white">SIGN IN </a> -->
            </div>
        </div>
    </nav>
    
</header>
    <!-- <img src="<?=BASEURL;?>/vendors/images/satgas.jpg" alt="" height="auto" class="image-fluids images"> -->
    <div class="images carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?=BASEURL;?>/vendors/images/satgas.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?=BASEURL;?>/vendors/images/w3.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?=BASEURL;?>/vendors/images/w4.jpg" alt="Third slide">
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>


    <div class="home-content mt-5">
        <div class="jumbotron jumbotron-fluid bg-transparent" style="height: 45vh;">
            <div class="container">
                <h1 class="display-4 text-white font-weight-bold">COVACINE</h1>
                <p class="lead text-white">All About <span class="text-danger font-weight-bold">Covid-19 Vaccines</span></p>
                <hr class="my-4 bg-white">
                <p class='text-white'>
                We provide some information about Covid-19 Vaccines, especially on Indonesia
                </p>
            </div>
        </div>
    </div>

    <div class="home-content py-2 px-5 bg-white container rounded">
        <h5 class="text-center"><hr class="bg-danger my-3"> Anjuran saat Pandemi Covid-19</h5>
        <hr class="bg-danger my-3">
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/SocialDistancing-1.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Jaga Jarak</h5>
                <p class="card-text">
                    Jaga Jarak minimal 5 meter
                </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/wearing-mask.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Pakai Masker</h5>
                <p class="card-text">
                    Selalu ingat Pakai Masker Saat Pergi Keluar
                </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/hand-washing.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Cuci Tangan</h5>
                <p class="card-text">
                    Jangan Lupa tuk Cuci Tangan Setiap Memegang Sesuatu, Sebelum Menyentuh Wajah
                </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/eat.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Makan Makanan Bergizi</h5>
                <p class="card-text">
                    Makan Makanan yang Bergizi, Membuat Tubuhmu Sehat!
                </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/rest.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Istirahat Yang Cukup</h5>
                <p class="card-text">
                    Istirahat yang Cukup Dapat Membuat Tubuhmu Menjadi Berenergi dan Sehat!
                </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="home-content px-5 bg-light py-3 rounded">
        <h1 class="text-center">Data Vaksin </h1>
        <table class="table ">
            <thead class="thead-dark">
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col">Nama Daerah</th>
                    <th scope="col">Jumlah Penduduk</th>
                    <th scope="col">Jumlah Tervaksin</th>
                    <th scope="col">Jumlah Keluhan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['table'] as $datas): ?>
                <tr class="table-light">
                    <th scope="row"><?= $datas['Nomor'] ;?></th>
                    <td><?= $datas['Nama Daerah'] ;?></td>
                    <td><?= $datas['Jumlah Penduduk'] ;?></td>
                    <td><?= $datas['Jumlah Tervaksin'] ;?></td>
                    <td><?= $datas['Jumlah Keluhan'] ;?></td>
                    
                </tr>
                
                <?php endforeach;?>
                
            </tbody>
        </table>
    </div>

    <div class="pagin">
    <ul class="pagination justify-content-center">
        <?php
            if ($pages == 1){
                echo <<<EOT
                <li class="page-item disabled">
                    <a class='page-link'>First</a>
                </li>
                <li class="page-item disabled">
                    <a class='page-link'>&laquo;</a>
                </li>
                EOT;
            }else{
                $prev = ($pages > 1)? $pages - 1 : 1;; 
                echo <<<EOT
                <li class="page-item">
                    <a href="index.php?page=1" class='page-link'>First</a>
                </li>
                <li class="page-item">
                    <a href="index.php?page=$prev" class='page-link'>&laquo;</a>
                </li>
                EOT;
            }
            // print_r($data);
            $n_page = $data['n_page'];
            $n_differences = 1;
            $start = ($pages > $n_differences)? $pages - $n_differences: 1;
            $last = ($pages <($n_page - $n_differences))? $pages + $n_differences : $n_page;
            for($i = $start; $i <= $last; $i++){
                $active = ($pages == $i)? 'class="page-item active"':'';
                echo <<<EOT
                <li $active>
                    <a href="index.php?page=$i" class='page-link'>$i</a>
                </li>
                EOT;
            }

            if($pages == $n_page){
                echo <<<EOT
                <li class="page-item disabled">
                    <a class='page-link'>&raquo</a>
                </li>
                <li class="page-item disabled">
                    <a class='page-link'>Last</a>
                </li>
                EOT;
            }else{
                $next = ($pages < $n_page)? $pages+1:$n_page;
                echo <<<EOT
                <li class="page-item">
                    <a href="index.php?page=$next" class='page-link'>&raquo</a>
                </li>
                <li class="page-item">
                    <a href="index.php?page=$n_page" class='page-link'>Last</a>
                </li>
                EOT;
            }
        ?>
        
    </ul>
</div>

    <div class="about mt-5 py-3">
        
        <h2 class="text-center">About Developers</h2>
        <div class="container" style="width:35rem;">
            <div class="card-deck">
                <div class="card" >
                    <img class="card-img-top"  src="<?=BASEURL;?>/vendors/images/s.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Adwitya Sadhu</h5>
                    <p class="card-text">
                        Someone that Very Special
                    </p>

                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="<?=BASEURL;?>/vendors/images/d.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Dinda Putri Ani</h5>
                    <p class="card-text">
                        Someone that Very Special
                    </p>
                    </div>
                </div>
        </div>
        </div>
    </div>

    <footer class="footer bg-danger py-2">
        <div class="container">
            <p class="text-white mt-2 text-center">
                COVACINE@2021
            </p>
        </div>
    </footer>