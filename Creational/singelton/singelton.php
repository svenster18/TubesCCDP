<?php

class Koneksi {

    private $_dbase;

    //menyimpan objek Koneksi

    private static $_instance;
    private function  __construct()

    {

        $this->_dbase = "mysql";

    }

    public static function cekInstance()

    {

        //jika objek $_instance kosong

        if(is_null(self::$_instance))

        {

            //buat objek baru

            self::$_instance = new self();

            }

        return self::$_instance;

    }

    public function prosesQuery($query)

    {

        //menampilkan data, melalui objek Koneksi

        echo "

".$query . "

";

    }

}

 

class AmbilQuery{

    private $_isi_query;

    private $_koneksi;

    public function  __construct($query)

    {

            $this->_isi_query = $query;

        //mengecek instance dari class Koneksi

        $this->_koneksi = Koneksi::cekInstance();

    }

    public function inQuery()

    {

        $this->_koneksi->prosesQuery($this->_isi_query);

    }

}

 
//mencoba menampilkan data,

$q1 = new AmbilQuery("select * tbl_kereta where kode_kereta='1'");

$q1->inQuery();

$q2 = new AmbilQuery("insert into tbl_kereta values ('2','Yogyakarta','83000')");

$q2->inQuery();


?>
