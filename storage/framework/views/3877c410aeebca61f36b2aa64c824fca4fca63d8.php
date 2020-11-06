<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPL</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('styleassets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/scss/style.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
<body>
    
    <script src="<?php echo e(asset('style/assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/main.js')); ?>"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Taniku</a>
                <a class="navbar-brand hidden" href="/"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/dinaspertanian"> <i class="menu "></i>Home </a>
                    </li>
                    <li>
                        <a href="dinaspertanian.pelatihan"> <i class="menu "></i>Pelatihan </a>
                    </li>
                    <li>
                        <a href=""> <i class="menu"></i>Kelompok Tani</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu "></i>Hasil Panen</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu "></i>Bantuan</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo e(asset('style/images/admin.jpg')); ?>">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-id"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-jp"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pelatihan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <div class="animated fadeIn">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">JUDUL</th>
                        <th scope="col">TEMPAT</th>
                        <th scope="col">WAKTU</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $pelatihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><?php echo e($plth->Judul); ?></td>
                    <td><?php echo e($plth->Tempat); ?></td>
                    <td><?php echo e($plth->Waktu); ?></td>
                    <td>
                        <a href="" class="badge badge-success">ubah</a>
                        <a href="" class="badge badge-danger">hapus</a>
                    </td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </table>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambahkan Pelatihan
            </button>
         <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pelatihan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form method="post" action="dinaspertanian.pelatihan">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                       <label for="exampleJudul1">Judul</label>
                       <textarea name="judul" class="form-control" id="exampleJudul1" rows="3" placeholder="Judul Pelatihan"></textarea>
                     </div>
                    <div class="form-group">
                       <label for="exampleInputTempat1">Tempat</label>
                       <input name="tempat" type="tempat" class="form-control" id="exampleInputtempat1" aria-describedby="tempatHelp" placeholder="Tempat Pelatihan">
                       </div>
                    <div class="form-group">
                       <label for="exampleInputWaktu1">Waktu</label>
                       <input name="waktu" type="waktu" class="form-control" id="exampleInputwaktu1" aria-describedby="waktuHelp" placeholder="Tanggal/Bulan/Tahun">
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
              </div>
            </div>
        </div>
        
</body>
</html>
<?php /**PATH D:\PplProjek\resources\views/dinaspertanian/pelatihan.blade.php ENDPATH**/ ?>