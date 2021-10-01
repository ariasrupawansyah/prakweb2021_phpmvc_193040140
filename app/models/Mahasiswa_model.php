<?php 

// Aria Rupawansyah - 193040140

class Mahasiswa_model{
	// private $mhs = [

	// 	[
	// 		"nama" => "Aria Rupawansyah",
	// 		"nrp" => "193040140",
	// 		"email" => "Aria@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Agares Fin",
	// 		"nrp" => "193040190",
	// 		"email" => "Agares@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Pangan"
	// 	],
	// 	[
	// 		"nama" => "Miguell Nien",
	// 		"nrp" => "193040188",
	// 		"email" => "Varagon@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Industri"
	// 	]

	// ];

	private $dbh; // database handler
	private $stmt;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try 
		{
			$this->dbh = new PDO($dsn, 'root', '');	
		} 
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}