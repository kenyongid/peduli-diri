<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
<link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>App Peduli Diri - Masuk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Aplikasi Peduli Diri!</h1>
                                        <img width=280 height=260 src='images/images.PNG' />
                                        <p></p>
                                        <center><marquee><h5> <span style="color :#808080;"> Silakan Masukan NIK Dan Nama Lengkap Anda^-^ </span> </h5></marquee>
                                    </div>
                                    <form class="user" method="post" action="proses_login.php">
                                        <div class="form-group">
                                            <input name="nik" required type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan NIK.....">
                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap" required type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Nama Lengkap.....">
                                        </div>
                                        <div class="form-group">
                                      
                                        </div>
                                        <form action="upload.php" method="session" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-user">
                                        </div>
                                        
                                        
                                        <button type="index.html" class="btn btn-primary btn-user btn-block">
                                            <i class ="fa fa-spinner"></i> Masuk
                                        </button>
                                        <hr>
                                        <a href="register.php" class="btn btn-facebook btn-user btn-block">
                                            Belum Punya Akun..? Klik Di sini <i class="fas fa-arrow-circle-right"></i> 
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>