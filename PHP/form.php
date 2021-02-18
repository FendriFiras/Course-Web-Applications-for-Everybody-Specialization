<?php


    class form{

        public $codeHTML="";

        function __construct($codeHTML)
        {
            $this->codeHTML=$codeHTML;
        }

        public function getform(){
            echo $this->codeHTML."</form></fieldset>";
        }

        public function setext($label,$name){
            $this->codeHTML = $this->codeHTML.$label.'<input type="text" name="'.$name.'"><br>';
        }

        public function setoption($label,$optionName){
            $this->codeHTML = $this->codeHTML.$label.'
            <select name="'.$optionName.'" id="">
            <option >Cisen</option>
            <option >option2</option>
            </select><br>
            ';
        }

        public function setselect($label,$select){
            $this->codeHTML = $this->codeHTML.$label.'
            <input type="checkbox" name="'.$select.'" value="chihiya" >chihiya
            <input type="checkbox" name="'.$select.'" value="center ville">center ville
            <input type="checkbox" name="'.$select.'" value="taniour">taniour<br>
            ';
        }

        public function setsubmit($button){
            $this->codeHTML = $this->codeHTML .'<button type="submit">'.$button.'</button>';
        }



        

    }

?>