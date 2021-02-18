<?php

    class Date {
        private $day,$month,$year;

        function __construct($day,$month,$year)
        {
            $this->day=$day;
            $this->month=$month;
            $this->year=$year;
        }
        function __destruct()
        {
            echo $this->day;
        }

    }
    $date1=new Date(1,2,19970);
    $date1 = null;//affichage 1 

?>