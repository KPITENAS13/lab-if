<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript">
            function validasi(formlogin) {
                var user = document.formlogin.username.value;
                var pass = document.formlogin.password.value;

                if ((user === "") || (pass === "")) {
                    $(document).ready(function () {
                        $("#pesan").html("<b>Warning!</b> Username atau Kata sandi masih kosong!");
                        $("#pesan").show();
                    });
                    return(false);
                }
                return(true);
            }
        </script>
    </head><!--/head-->

    <body class="homepage">
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else {
                include './comp/navbar2.php';
            }
            ?>
        </header><!--header-->

        <section id="services" class="service-item">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Praktikum</h2>
                    <p class="lead">
                        Halaman informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS
                    </p>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <a href="Lab_Praktikum.php?kategori=Pemrograman Dasar">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PEMDAS</h3>
                                    <p>Pemrograman <br> Dasar</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">ORKOM</h3>
                                    <p>Organisasi & Arsitektur Komputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services3.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PRC</h3>
                                    <p>Pemrograman <br> Robot Cerdas</p>
                                </div>
                            </div>
                        </a>
                    </div>  

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services4.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JARKOM</h3>
                                    <p>Jaringan <br> Komuputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services5.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">REKWEB</h3>
                                    <p>Rekayasa <br> Web</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services6.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JST</h3>
                                    <p>Jaringan Syaraf <br> Tiruan</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services3.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">BASDAT</h3>
                                    <p>Basis <br> Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBD</h3>
                                    <p>Pemrograman <br> Basis Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="#">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBO</h3>
                                    <p>Pemrograman <br> Berorientasi Objek</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#services-->      

        <section id="bottom">
            <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Meet the team</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Refund policy</a></li>
                                <li><a href="#">Ticket system</a></li>
                                <li><a href="#">Billing system</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Developers</h3>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">SEO Marketing</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#">Plugin Development</a></li>
                                <li><a href="#">Article Writing</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Our Partners</h3>
                            <ul>
                                <li><a href="#">Adipisicing Elit</a></li>
                                <li><a href="#">Eiusmod</a></li>
                                <li><a href="#">Tempor</a></li>
                                <li><a href="#">Veniam</a></li>
                                <li><a href="#">Exercitation</a></li>
                                <li><a href="#">Ullamco</a></li>
                                <li><a href="#">Laboris</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="formlogin" method="post" action="process/login_proses.php" onsubmit="return validasi(this)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div hidden="true" id="pesan" class="alert alert-warning alert-dismissible" role="alert" position: fixed">

            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon">Username</span>
                    <input type="text" class="form-control" placeholder="Masukkan NRP / NID" name="username">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon">Kata Sandi</span>
                    <input type="password" class="form-control" placeholder="" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->