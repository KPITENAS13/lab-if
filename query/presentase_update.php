 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE presentase_nilai SET ".$column_name."=".$text." WHERE id=".$id."";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Berhasil Diperbarui';  
 }  
 ?>  