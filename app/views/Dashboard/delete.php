<?php
$msg = $data['msg'];

// print_r($data['get']);
?>


<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
    
        
            <!-- <img src="<?=BASEURL;?>/vendors/images/d.jpg" alt="Ini gambar" 
            class="mr-3 rounded-circle shadow-md" width="180" height ="180"> -->
            <div class="media-body">
                <div class="container">
                    <h4 class="m-0 text-center"><?= $data['user'];?></h4>
                    <p class="font-weight-bold text-center">Admin</p>
                </div>
                
            </div>

    </div>

    <!-- <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu Title</p> -->

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="<?=BASEURL?>/" class="nav-link text-dark bg-white">
                <i class="fa fa-home mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="<?=BASEURL?>/Login/burnt" class="nav-link text-dark bg-white">
                <i class="fa fa-times mr-3 text-primary fa-fw"></i>
                Sign Out
            </a>
        </li>
    </ul>
</div>

<section class="hero dash-contents" id="content-page">
    <button id="sidebarCollapse" type="button" 
    class="btn btn-outline-dark" >
    <i class="fa fa-bars mx-1"></i>
    </button>
    <div class="delete container my-5">
        <h2 class="text-center">Delete #<?=$data['id'];?></h2>
        <?php if ($msg): ?>
        <p><?=$msg?></p>
        <?php else: ?>
        <p>Are you sure you want to delete #<?=$data['id'];?>?</p>
        <div class="px-5 my-5">
            <table class="table ">
                <thead class="thead-dark">
                    <tr class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Jumlah Penduduk</th>
                        <th scope="col">Telah Divaksin</th>
                        <th scope="col">Jumlah Keluhan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['get'] as $datas): ?>
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
        <div class="yesno">
            <a class="btn btn-outline-primary" href="<?=BASEURL;?>/Dashboard/exec_delete/yes/<?=$data['id'];?>">Yes</a>
            <a class="btn btn-outline-primary" href="<?=BASEURL;?>/Dashboard/exec_delete/no/<?=$data['id'];?>">No</a>
        </div>
        <?php endif; ?>
    </div>


</section>