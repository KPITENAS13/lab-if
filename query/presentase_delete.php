 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $id = $_POST['id'];
 $sql = "DELETE FROM presentase_nilai WHERE id = ".$_POST["id"]."";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Presentase Nilai Berhasil Dihapus';  
 }  
 ?>