<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function addPasien($nik, $nama, $tempat, $ttl, $gender, $email, $tel)
	{
		// Query mysql select data pasien
		$query = "INSERT INTO PASIEN VALUES ('', '$nik', '$nama', '$tempat', '$ttl', '$gender', '$email', '$tel')";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function deletePasien($id)
	{
		$query = "DELETE FROM pasien WHERE `id` = '$id'";
		// Mengeksekusi query
		return $this->execute($query);
	}
}
