<?php

$helper = new Helper();

class Helper extends Controller
{

    public function protect($string)
    {
        $protection = htmlspecialchars(trim($string), ENT_QUOTES);
        return $protection;
    }

    public function xssFix($string){

        $string = $this->protect($string);

        $string = str_replace('<','', $string);
        $string = str_replace('>','', $string);
        $string = str_replace('´','', $string);
        $string = str_replace('[','(', $string);
        $string = str_replace(']',')', $string);
        //$string = str_replace('_','', $string);
        $string = str_replace("'",'', $string);

        return $string;
    }

    public function nl2br2($string)
    {
        $string = $this->xssFix($string);
        $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
        return $string;
    }

    public function formatDate($date)
    {
        $date = new DateTime($date, new DateTimeZone('Europe/Berlin'));
        return $date->format('d.m.Y H:i:s');
    }

    public function formatDateWithoutTime($date)
    {
        $date = new DateTime($date, new DateTimeZone('Europe/Berlin'));
        return $date->format('d.m.Y');
    }

}
?>