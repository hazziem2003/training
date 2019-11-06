<?php
session_start();
$conn = mysqli_connect('localhost', 'root','' ,'training') or die('Unable to connect');
?>

<?php
$kod_kursus = $_GET['kod_kursus'];
    $data = mysqli_query($conn, "select * from course where kod_kursus= '$kod_kursus'");
    while($d = mysqli_fetch_array($data)){

 ?>
 <!DOCTYPE html>
 <html>
   <body>
    <center>
    	<form method="post" action="pros_kemaskini.php">
   	  	<input type="hidden" name="kod_kursus" value="<?php echo $d['kod_kursus']; ?>">
   		
   	  	Nama Kursus<br>
   		  <input type="text" name="nama_kursus" value="<?php echo $d['nama_kursus']; ?>">
   		  <br><br>
   		
   		  Trainer<br>
   		  <input type="text" name="trainer" value="<?php echo $d['trainer']; ?>">
   		  <br><br>
   		
   		  Tarikh Kursus<br>
   		  <input type="text" name="tarikh_kursus" value="<?php echo $d['tarikh_kursus']; ?>">
   		  <br><br>
   		
   		  Status<br>
   		  <input type="text" name="status" value="<?php echo $d['status']; ?>">
   		  <br><br>
   		
   		 <input type="submit" name="save" value="submit">
      </form> 
    </center>
  </body>
 </html>
 <?php
}
 ?>
