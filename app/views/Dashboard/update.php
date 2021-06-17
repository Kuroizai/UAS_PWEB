<?php 
$datas = $data['get'];
// print_r($data['get']);
// print_r($datas[0]['Nama Daerah']);

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
    <div class="upform frm container my-5">
          <h1>Update #<?=$data['id'];?></h1>
          <form action="<?=BASEURL;?>/Dashboard/up_action/<?=$data['id'];?>" method="post">
              <div class="row">
                  <div class="form-floating form-group col">
                      <input type="text" class="form-control" name='kodePos' placeholder="BOOK ID" value="<?=$datas[0]['Kode Pos']?>" id="kodePos">
                      <label for="title">Kode Pos</label>
                  </div>
              </div>
              <div class="row">
                  <div class="form-floating form-group col-md-6 ">
                      <input type="text" class="form-control" name='Daerah' placeholder="TITLE" value="<?=$datas[0]['Nama Daerah']?>" id="Daerah">
                      <label for="title">Nama Daerah</label>
                  </div>
                  <div class="form-floating form-group col-md-6">

                      <input type="text" class="form-control" name='n_penduduk' placeholder="AUTHOR" value="<?=$datas[0]['Jumlah Penduduk']?>" id="n_penduduk">
                      <label for="author">Jumlah Penduduk</label>
                  </div>
              </div>
              <div class="row">
                  <div class="form-floating form-group col-md-6">
                      <input type="text" class="form-control" name='n_vaksin' placeholder="Page Number" value="<?=$datas[0]['Jumlah Tervaksin']?>" id="n_vaksin">
                      <label for="page_num">Jumlah Tervaksin</label>
                  </div>
                  <div class="form-floating form-group col-md-6">
                      <input type="text" class="form-control" name='n_keluhan' placeholder="Publisher" value="<?=$datas[0]['Jumlah Keluhan']?>" id="n_keluhan">
                      <label for="publisher">Jumlah Keluhan</label>
                  </div>
              </div>
              
              <div class="row">
                  <div class=" form-group col" >
                      <button type='submit' class='btn btn-outline-primary' name ='btn'>Update</button>
                  </div>
              </div>
              </form>

    </div>
</section>