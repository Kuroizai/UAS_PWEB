<?php
$records = $data['records'];
$pages = $data['pages'];
// echo $data['params'];
if (isset($data['tst'])){
    print_r($data['tst']);
}

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
            <a href="<?=BASEURL?>/Dashboard/create" class="nav-link text-dark bg-white">
                <i class="fa fa-plus mr-3 text-primary fa-fw"></i>
                Add Data
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
    <div class="dash-content my-3">
        <h3 class="text-center">Tabel</h3>
        <div class="px-5 my-5">
            <table class="table ">
                <thead class="thead-dark">
                    <tr class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Jumlah Penduduk</th>
                        <th scope="col">Telah Divaksin</th>
                        <th scope="col">Jumlah Keluhan</th>
                        <th scope="col">Kode Pos</th>
                        <th scope="col">Action</th>
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
                        <td><?= $datas['Kode Pos'] ;?></td>
                        <td class="actions">
                            <a href="<?=BASEURL;?>/Dashboard/update/<?=$datas['Nomor']?>" class="edit"><i class="fas fa-pen"></i></a>
                            <a href="<?=BASEURL;?>/Dashboard/delete/<?=$datas['Nomor']?>" class="trash"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="pagin justify-content-center">
    <ul class="pagination container">
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
</section>
