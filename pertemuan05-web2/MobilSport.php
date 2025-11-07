<?php
class mobilSport extends mobil{
    public $turbo = false;

    function aktifkanTurbo(){
        $this->turbo=true;
        return"turbo diaktifkan";
    }
}


?>
