<?
         $probel = explode(" ", $shortMe);
        foreach ($a as &$b) {
            if (strlen($b) > 6){ 
            $b = substr($b,0,6)."*";
            }
        }
        return(implode(" ", $probel));