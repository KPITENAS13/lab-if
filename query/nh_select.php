<?php
$praktikum = $_POST['praktikum'];
$periode = $_POST['periode'];
$nrp = $_POST['nrp'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM nilai_harian WHERE nrp=".$nrp." AND periode='".$periode."' AND praktikum='".$praktikum."'";
$result = mysqli_query($connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:70%;" id="tabel3">'
        . '         <tr>'
        . '             <th>Pertemuan</th>'
        . '             <th>Tugas Pendahuluan</th>'
        . '             <th>Tugas Harian</th>'
        . '             <th>Tugas Akhir</th>'
        . '             <th>Aksi</th>'
        . '         </tr>';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $output .= '<tr>'
                . ' <td class="pertemuan" data-id1="'.$row["id"].'" contenteditable>'.$row["pertemuan"].'</td>'
                . ' <td class="tp" data-id2="'.$row["id"].'" contenteditable>'.$row["tp"].'</td>'
                . ' <td class="th" data-id3="'.$row["id"].'" contenteditable>'.$row["th"].'</td>'
                . ' <td class="ta" data-id4="'.$row["id"].'" contenteditable>'.$row["ta"].'</td>'
                . ' <td><button class="btn btn-danger btn-xs" name="btn_delete" id="btn_delete" data-id5="'.$row["id"].'"><span class="glyphicon glyphicon-remove"></span> Hapus</button></td>'
                . '</tr>';
    }
    $output .= '<tr>'
            . '     <td id="pertemuan" contenteditable></td>'
            . '     <td id="tp" contenteditable></td>'
            . '     <td id="th" contenteditable></td>'
            . '     <td id="ta" contenteditable></td>'
            . '     <td><button name="btn_add" id="btn_add" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Tambah</button></td>'
            . ' </tr>';
}else{
    $output .= '<tr>'
            . '     <td colspan="5"> Data Tidak Ditemukan</td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>