<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab IF</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include "koneksi/koneksi.php";
        session_start();
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['kategori'])) { //kategori kosong = guest
                            include './components/sidebar1.php';
                        } else if ($_SESSION['kategori'] == "admin") { //jika admin yang masuk
                            include './components/sidebar4.php';
                        } else if ($_SESSION['kategori'] == "dosen") { //jika dosen yang masuk
                            include './components/sidebar2.php';
                        } else if ($_SESSION['kategori'] == "mahasiswa") { //jika mahasiswa yang masuk
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">

                                <?php
                                include "koneksi/koneksi.php";
                                $edit = mysql_query("SELECT * FROM barang WHERE serial_num ='$_GET[serial_num]'");
                                $r = mysql_fetch_array($edit);
                                echo "
                                                <form class=form-vertical  action=query/updateBarang.php method=POST name=form enctype=multipart/form-data>
                                                    <div class=module-head>
                                                        <h3>Perbaharui Data Inventaris</h3>
                                                    </div>
                                                    <div class=module-body>
                                                        <input type=hidden name=serial value='$r[serial_num]'>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=serial_num placeholder='Serial Number' value='$r[serial_num]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=nama placeholder='Nama' value='$r[nama]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid> ";
                                if ("$r[status]" == 'OK') {
                                    echo"	
                                                                        <select class=span8 name=status >
                                                                        <option value=OK>$r[status]</option>								 						   	   
                                                                        <option value=RUSAK>RUSAK</option>
                                                                        </select> ";
                                }

                                if ("$r[status]" == 'RUSAK') {
                                    echo"
                                                                        <select class=span8 name=status >
                                                                        <option value=RUSAK>$r[status]</option>								 						   	   
                                                                        <option value=OK>OK</option>
                                                                        </select> ";
                                }
                                echo"
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=developer placeholder='Developer' value='$r[developer]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=lokasi placeholder='Lokasi' value='$r[lokasi]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=type placeholder='Type' value='$r[type]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=model placeholder='Model' value='$r[model]'>
                                                            </div>
                                                        </div>
                                                        <div class=control-group>
                                                            <div class=controls row-fluid>
                                                                <input class=span8 type=text name=no_pelabelan placeholder='No. Pelabelan' value='$r[no_pelabelan]'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=module-foot>
                                                        <div class=control-group>
                                                            <div class=controls clearfix>
                                                                <button type=submit class=btn-warning pull-right>Perbaharui</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>";
                                ?>
                            </div><!--/.module-->

                            <br />

                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script src="scripts/jquery.min.js"></script>
    </body>
</html>