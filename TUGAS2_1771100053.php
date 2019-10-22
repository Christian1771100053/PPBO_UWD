<?php
/*pewarisan.php*/
class Bapak{
var $nama="Bapak";
var $name="Bapak2";
function Bapak($n){
$this->nama=$n;
$this->name=$n;
}
function Hallo(){
echo "Hallo, saya Anita Putri "," $this->nama<br>";
echo "Hallo, saya Afrendo Anak ke-2 "," $this->name<br>";
}
}
class Anak extends Bapak{
}
$test = new Anak ("dari bapak joko");
$test->Hallo();
?>