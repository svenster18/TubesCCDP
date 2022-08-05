<?php

interface ValidasiInterface {
    public function tampil($isi_in);
}

class ValidasiEmail implements ValidasiInterface {
    public function tampil($isi_in) {
        $input = $isi_in->ambilInput();
        return str_replace("|","@",$input);
    }
}

class Validasi {
    private $validasi = NULL;
    public function __construct($validasi_in) {
        switch ($validasi_in) {
            case "email":
                $this->validasi = new ValidasiEmail();
            break;
        }
    }
    public function tampilkanValidasi($isi) {
      return $this->validasi->tampil($isi);
    }
}

class InputForm {
    private $input;
    function __construct($input_in) {
        $this->input = $input_in;
    }
    function ambilInput() {
        return $this->input;
    }
}

  $input = new InputForm('Riza|gmail.com');
  $inputAngka = new InputForm('Riza|KAI.com');
  $val_email = new Validasi('email');

  cetak('Data Awal :');
  cetak($input->ambilInput());
  cetak('');

  cetak('Validasi Email :');
  cetak($val_email->tampilkanValidasi($input));
  cetak('');  

  function cetak($isi) {
      echo $isi."<br/>";
  }

?>