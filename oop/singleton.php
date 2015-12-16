<?php
echo "<b>Implementasi Class Biasa</b></br><br/>";
class Koneksi {

    private static $_dbName;
    private static $_dbPass;
    private static $_dbHost;
    private static $_dbUser;
    static $_number_of_instances = 0;
 
 protected static $_konek;
    public function  __construct() {
       
        self::$_dbName = "tes";
        self::$_dbUser = "root";
        self::$_dbPass = "";
        self::$_dbHost = "localhost";
        self::$_number_of_instances ++;
        echo 'Koneksi Di Akses :' . self::$_number_of_instances .' kali<br/>';
    }
 
 public static function Konek(){
  
  if(!self::$_konek instanceof self){
  
   self::$_konek = @mysql_connect(self::$_dbHost,self::$_dbUser,self::$_dbPass);
  }
  
  if(FALSE===self::$_konek){
   
   exit('Koneksi Databse Error');
  }
  else{
   
   if(TRUE===@mysql_select_db(self::$_dbName,self::$_konek))
    return self::$_konek;
   else
    exit('No databse selected');
  }
    
 }
 
    public function getQuery($query) {
        
  self::Konek();
  
  $data = mysql_query($query);
  
  
  $se = mysql_fetch_object($data);
  
  if($se)
   echo '</br>'.$se->namamhs.' '.$se->alamat." <br/>";
  

    }
}


class Query{

    private $_sql;
    private $_koneksi; 
    public function  __construct($sql) {
       
        $this->_sql = $sql;
        $this->_koneksi = new Koneksi();
    }
    public function sendQuery(){
 
        $this->_koneksi->getQuery($this->_sql);
    }
}
 $query_1 = new Query("SELECT namamhs,alamat FROM mhs WHERE nim ='1' ");
 $query_2 = new Query("SELECT namamhs,alamat FROM mhs WHERE nim ='2'");
 $query_3 = new Query("SELECT namamhs,alamat FROM mhs WHERE nim ='3'");
 $query_4 = new Query("SELECT namamhs,alamat FROM mhs WHERE nim ='4'");
 
 
 $query_1->sendQuery();
 $query_2->sendQuery();
 $query_3->sendQuery();
 $query_4->sendQuery();
 
 

 
echo "<br/>---------------------------------------<br/>";

echo " <b> pake Singleton patern</b><br/><br/>";

class Koneksi2 {

    private static $_dbName2;
    private static $_dbPass2;
    private static $_dbHost2;
    private static $_dbUser2;
    static $_number_of_instances2 = 0;
 
 protected static $_konek2;
 protected static $_instance;
 
 
    public function  __construct() {
       
        self::$_dbName2 = "tes";
        self::$_dbUser2 = "root";
        self::$_dbPass2 = "";
        self::$_dbHost2 = "localhost";
        self::$_number_of_instances2 ++;
        echo 'Di Akses :' . self::$_number_of_instances2 .' kali<br/>';
    }
 public static function Instance(){
  
  
  if(!self::$_instance  instanceof self){
  
   self::$_instance  = new self();
  }
  
  return self::$_instance;
 
 }
 public static function Konek2(){
  
  if(!self::$_konek2 instanceof self){
  
   self::$_konek2 = @mysql_connect(self::$_dbHost2,self::$_dbUser2,self::$_dbPass2);
  }
  
  if(FALSE===self::$_konek2){
   
   exit('Koneksi Databse Error');
  }
  else{
   
   if(TRUE===@mysql_select_db(self::$_dbName2,self::$_konek2))
    return self::$_konek2;
   else
    exit('No databse selected');
  }
 
 }
 
 
    public function getQuery2($query2) {
        
       self::Konek2();
  
        $data2 = mysql_query($query2);
  
       $se2 = mysql_fetch_object($data2);
  
      if($se2)
            echo '</br>'.$se2->namamhs.' '.$se2->alamat." <br/>";
  
    }
}


class Query2{

    private $_sql2;
    private $_koneksi2; 
    public function  __construct($sql2) {
       
        $this->_sql2 = $sql2;
        $this->_koneksi2 = Koneksi2::Instance();
    }
    public function sendQuery2(){
 
        $this->_koneksi2->getQuery2($this->_sql2);
    }
}
 $query_1 = new Query2("SELECT namamhs,alamat FROM mhs WHERE nim ='1' ");
 $query_2 = new Query2("SELECT namamhs,alamat FROM mhs WHERE nim ='2'");
 $query_3 = new Query2("SELECT namamhs,alamat FROM mhs WHERE nim ='3'");
 $query_4 = new Query2("SELECT namamhs,alamat FROM mhs WHERE nim ='4'");
 
 
 $query_1->sendQuery2();
 $query_2->sendQuery2();
 $query_3->sendQuery2();
 $query_4->sendQuery2();
 ?>