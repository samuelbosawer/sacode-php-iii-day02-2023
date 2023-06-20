<?php

// Tipe Data String 
$namaDepan = 'Samuel';
$namaBelakang = 'Bosawer';
$apk_name = "Tipe Data PHP";


// Tipe Data Integer
$a = 20;
$b = 10;

// Penjumlahan 
$c = $a + $b;

// -
$d = $a - $b;


//  /
$pembagian = $a / $b;

//  *
$perkalian = $a * $b;


//  Tipe Float
$float = 11.23;


// Tipe Data Boolen
// 1
$true = true; 

// 0
$false = false;

// *
$and = $true && $false;

// +
$or = $true ||  $false;

// $nama = array('Sam', 'Billy', 'Anjas','Alpais');
$nama = ['Sam', 'Billy'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER START -->
    <header class="bg-dark">
        <div class="row p-3 text-center">

            <div class="col-12">
                <h3 class="text-white"> <?php echo $apk_name?> </h3>
            </div>


        </div>
    </header>
    <!-- HEADER END -->


    <!-- CONTENT START -->
    <div class="container">


        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Data String</h5>
                <p>Welcome <?= $namaDepan.' '. $namaBelakang?></p>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h5>Tipe Integer</h5>
                <p class="mb-0">Variabel a = <?= $a?></p>
                <p>Variabel b = <?= $b ?></p>

                <p class="mb-0">
                    <?= $a .'+'. $b . '=' .$c?>    
                </p>

                <p class="mb-0">
                    <?= $a .'-'. $b . '=' .$d?>    
                </p>

                <p class="mb-0">
                    <?= $a .'*'. $b . '=' .$perkalian?>    
                </p>

                <p class="mb-0">
                    <?= $a .'/'. $b . '=' .$pembagian?>    
                </p>

                <p> <?php var_dump($a) ?></p>
                <p> <?php var_dump($b) ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5>Tipe data float</h5>
                <p><?php var_dump($float) ?></p>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <h5>Tipe data boolen</h5>
                <p><?php var_dump($and) ?></p>
                <p><?php var_dump($or) ?></p>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <h5>Tipe Data Array</h5>
                <?php 
                foreach($nama as $n)
                {
                    echo  '<p>'. $n .'</p>';
                }
                ?>

                <table class="table table-bordered">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                    </tr>
                    <?php $i =0; foreach($nama as $n):?>
                    <tr>
                        <td><?= ++$i?></td>
                        <td><?= $n?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <p><?php var_dump($nama) ?></p>
            </div>
        </div>

    </div>
    <!-- CONTENT END -->


    <!-- FOOTER START -->

    <!-- FOOTER END -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
