<?php

    class Date1{
        const MAX_MONTH=12;
        private static $monthStrings = array("Janvier","fevrier","Mars","Avrill");
        private $month =1;
        public function seMonth($month){
            if($month > self::MAX_MONTH){
                die("error");
            }
            $this->month=$month;
        }
        public static function getMonthString(){
            return self::$monthStrings[(new Date1())->month];
        }
    }
    echo Date1::getMonthString();
    $date1 = new Date1();
    echo $date1::MAX_MONTH;  


?>