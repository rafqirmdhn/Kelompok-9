<?php

class testcase extends PHPUnit_Framework_TestCase
{
        public function testFile()
        {
                ob_start();
                include 'tiketController.php';
                $content = ob_get_contents();
                ob_end_clean();
                $this->assertEquals('
				$asal = $_POST["asal"];
				$tujuan = $_POST["tujuan"];
				$kelas = $_POST["kelas"];
				$tanggal = $_POST["tanggal"];', $content);
        }
}