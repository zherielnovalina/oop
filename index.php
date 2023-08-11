 <?php
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->get_name() . "<br>"; // "shaun"
echo "Legs : " . $sheep->get_legs() . "<br>"; // 4
echo "Cold blooded : " . $sheep->get_cold_blooded() . "<br>"; // "no"
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name(). "<br>";
echo "Legs : " . $kodok->get_legs(). "<br>";
echo "Jump : " ;
$kodok->jump() ; // "hop hop"
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->get_name(). "<br>";
echo "Legs : " . $sungokong->get_legs(). "<br>";
echo "Cold blooded : " . $sungokong->get_cold_blooded(). "<br>";
echo "Yell : " ;
$sungokong->yell(); // "Auooo"

?> 