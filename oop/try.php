<?php  
//buat fungsi yang berisi exception didalamnya  
function cekAngka($angka) {  
$angka =3;
 if($angka>5) {  
  throw new Exception("Angka harus dibawah 5");  
 }  
 return true;  
}  

//Memicu exception dengan perintah Try, contoh: mengecek angka 7  
try {  
 cekAngka(7);  
 //Jika error terjadi maka exception akan dilemparkan dan perintah dibawah ini tidak akan dieksekusi  
 echo 'Jika meliha pesan ini berarti angka yang anda masukkan dibawah 5';  
}  

//menangkap exception yang dilempar oleh Try dengan catch  
catch(Exception $e) {  
 echo 'Pesan Error: ' .$e->getMessage();  
}  
?>  