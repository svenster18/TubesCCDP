<?php
class Registry {

    
    private static $_instance;

    private  static $_akses_koneksi = 0;

 

    private function __construct($arr_properti)

    {
        $this->_arr = $arr_properti;
    }

 

    public static function cekInstance($arr_properti)

    {

        //singleton untuk membatasi pembuatan objek

        if(is_null(self::$_instance))

        {

            self::$_instance = new Registry($arr_properti);

        }

        return self::$_instance;

    }

 

    public function get($nama_index)

    {

        //untuk mendapatkan value dari properti

        //diakses berdasarkan key-nya/index-nya

        $isi = "";

        if ($this->_arr[$nama_index]!=null )

        {

            $isi = $this->_arr[$nama_index];

        }

        return $isi;

    }

 

    public function set($nama_index,$isi)

    {

        //menambahkan properti baru

        $this->_arr[$nama_index] = $isi;

        return TRUE;

    }

}

 

//penggunaannya pada class lain

class Konfigurasi{

    private $_register;

    public function  __construct($conf)

    {

        $this->_register = Registry::cekInstance($conf);

    }

    public function getKonf($nama_index)

    {

        //memanfaatkan function get() yang dimiliki class Registry

        //untuk menampilkan isi properti

        $hasil = $this->_register->get($nama_index);

        return $hasil;

    }

    public function setKonf($nama_index,$isi)

    {

        //memanfaatkan function set() yang dimiliki class Registry

        //untuk menambah isi properti baru

        $this->_register->set($nama_index,$isi);

        return true;

    }

}
 

//config default, dalam format array
echo "<p>BOOKING TIKET </p>";

$template_config = array(
   

  'nama_pemesan' => 'Riza Irsyad',

  'nama_ka' => 'KA Parahiyangan',

  'tujuan' => 'Yogyakarta',

  'kelas' => 'Ekonomi',

  'Harga' => 'Rp.83000',

);

$config = new Konfigurasi($template_config);

echo "Nama Pemesan : "; echo $config->getKonf ('nama_pemesan') . "<br>";

echo "Nama KA : ";    echo $config->getKonf ('nama_ka') . "<br>";

echo "Tujuan : " ;   echo $config->getKonf('tujuan') . "<br>";

echo "Kelas : "  ; echo $config->getKonf('kelas') . "<br>";

echo "Harga : " ;   echo $config->getKonf('Harga') . "<br>";

?>
