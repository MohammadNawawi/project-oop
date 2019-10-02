<?php 

// Load
require 'about.php';
require 'message.php';

interface iPlayer {

	public function getiPlayer();
}


class Card {


	public 	$nama, 
			$role, 
			$team;	 
			


	public function __construct ($nama ="nama", $role ="role", $team ="team") {
		
		$this->nama = $nama;
		$this->role = $role;
		$this->team = $team;
		
	}


	public function getLabel() {
		return "$this->role, $this->team";
	}



	public function getInfo() {
		$str = "{$this->nama} | {$this->getLabel()}";

		return $str;
	}

}


class Player extends Card implements iPlayer{

	public $jmlPlayer;
	
	//override
	public function __construct($nama ="nama", $role ="role", $team ="team", $harga =0, $jmlPlayer=0) {


		parent::__construct( $nama, $role, $team, $harga);

		$this->jmlPlayer = $jmlPlayer;

	}

	public function  getiPlayer() {

		$str ="Player : " . $this->getInfo() . " -  Active.";

		return $str;
	}
}

class Feeder extends Card implements iPlayer {

	public $waktuMain;

	public function __construct($nama ="nama", $role ="role", $team ="team") {

		//menjalankan kelas parent construct
		parent::__construct( $nama, $role, $team);

		$this->waktuMain = $waktuMain;

	}
	


	public function  getiPlayer() {

		$str ="Player : " .$this->getInfo() . " - {$this->waktuMain} Jam.";

		return $str;
	}
}


//instansiasi
$hello = new Message();
$player1 = new Player("Moh 'Rage' Nariz","Carry/Middle","Madura Reject");
$player2 = new Player("Ach 'Sans' Hadori ","Middle","Madura Reject");
$player3 = new Player("Dimas 'Forsaken' Ardi N","Offlane","Madura Reject");
$player4 = new Player("Reyza 'Reyza'","Support","Madura Reject");
$player5 = new Player("Moh 'Naw' Nawawi","Support","Madura Reject");



//cetak dari file hello
$hello = new Message();
echo $hello->helloplayer();
echo $hello->call();
echo $hello->quote();

//cetak dari file alamat
echo "<br>";
echo Name;
echo "<br>";
echo Role;
echo "<br>";
echo "<hr>";

//file internal
echo $player1->getiPlayer();
echo "<br>";
echo $player2->getiPlayer();
echo "<br>";
echo $player3->getiPlayer();
echo "<br>";
echo $player4->getiPlayer();
echo "<br>";
echo $player5->getiPlayer();



