<?php

class BmiPasien {
    public $nama,
           $umur,
           $jenisKelamin,
           $berat,
           $tinggi;

    public function hasilBMI() {
        $tinggiMeter = $this->tinggi / 100;

        $bmi = $this->berat / ($tinggiMeter ** 2);

        return number_format($bmi, 2,',',',');
    }

    public function statusBMI() {
        $bmi = $this->hasilBMI();
        
        if($bmi < 18.5) {
            return 'Kekurangan berat badan';
        }
        elseif ($bmi >= 18.5 && $bmi < 25) {
            return 'Berat Normal (Ideal)';
        }
        elseif ($bmi >= 25 && $bmi < 30) {
            return 'Kelebihan berat badan';
        }
        else {
            return 'Obesitas';
        }
    }
}

?>