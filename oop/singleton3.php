<?php
 
// class utama
class User {
  public function __construct($id) {}
  public function getName() {
    return 'Haqqi';
  }
}
 
// class factory
class UserFactory {
  public static function create($id) {
    return new User($id);
  }
}
 
// contoh penggunaan
$u = UserFactory::create(1);
echo $u->getName();
?>