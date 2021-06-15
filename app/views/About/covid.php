<?php
// echo "<pre>";
// print_r($data['cov']);
// echo "</pre>";

$get = $data['cov']['features'];
// foreach ($get as $key => $value){
//     // print_r($value['attributes']);
//     foreach($value as $name => $attr){
//         if($name =='attributes'){
//             print_r($attr);

//         }
//     }
//     }

?>

<header class="navi">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
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

    <section class="hero set-bg" data-setbg="<?=BASEURL?>/vendors/images/covid.gif" 
    style='
    padding-top:50px;
    background-image: url("<?=BASEURL?>/vendors/images/covid.gif");
    background-repeat : no-repeat;
    background-size : cover;
    ' >
        <div class="jumbotron jumbotron-fluid bg-transparent" style="height: 85vh;padding:300px 0px;">
            <div class="container">
                <h1 class="display-4 text-white font-weight-bold">COVID-19</h1>
                <p class="lead text-white"> <span class="text-danger font-weight-bold">COVID-19</span>  or Corona Virus Disease 2019</p>
                <hr class="my-4 bg-white">
                <p class='text-white'>
                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  
                Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, 
                and cancer are more likely to develop serious illness.
                </p>
            </div>
        </div>
    </section>
    <div class="home-content px-5 bg-light py-3 rounded">
        <h1 class="text-center">Data Covid </h1>
        <table class="table table-paginate" id="dtBasicExample">
            <thead class="thead-dark">
                <tr class="table-light">
                    <th scope="col">FID</th>
                    <th scope="col">Kode Provinsi</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kasus Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($get as $key => $value): ?>
                    <?php  foreach($value as $name => $attr): ?>
                        <?php if($name =='attributes'): ?>
                            <tr class="table-light">
                                <th scope="row"><?= $attr['FID'] ;?></th>
                                <td><?= $attr['Kode_Provi'] ;?></td>
                                <td><?= $attr['Provinsi'] ;?></td>
                                <td><?= $attr['Kasus_Posi'] ;?></td>
                                <td><?= $attr['Kasus_Semb'] ;?></td>
                                <td><?= $attr['Kasus_Meni'] ;?></td>                            
                            </tr>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endforeach;?>
                
            </tbody>
        </table>
    </div>

    <footer class="footer bg-danger py-2">
        <div class="container">
            <p class="text-white mt-2 text-center">
                COVACINE@2021
            </p>
        </div>
    </footer>