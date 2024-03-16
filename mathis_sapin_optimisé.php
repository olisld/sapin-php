<?php

class Main {
    private $nbEtage = 5 ;
    private $nbMaxEtoile;
    private $isGarland = TRUE;
    private $nbEtoile1 = 1;        
    private $nbEtoile2 = 3;
    private $nbEtoile3 = 7;
    private $isBalls = TRUE;
    private $garland;
    // private $balls;
    
    public function __construct(){
        $this->nbMaxEtoile = $this->getMaxStarnumber();
        $this->garland = $this->etat_guirlande();
        $this->affichage_corps();
        $this->affichage_boules();
        $this->affichage_tronc();
    }

    private function getMaxStarnumber(){
        return (3 + 2*($this->nbEtage - 1))*2 + 1;
    }

    private function line($nb_stars= NULL){
        $a = "<pre style = 'margin: 0;'>";
        if($nb_stars){
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);
            $a .=  str_repeat("*", $nb_stars);
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);                    
        }
        else{
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 1) / 2);
            $a .= str_repeat("*", 3);
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 3) / 2);            
        }
        $a .= "</pre>";
        echo $a;
    }

    private function etat_guirlande(){
        if($this->isGarland == TRUE){
            return ("S");
        } elseif($this->isGarland == FALSE){
           return(" ") ;
        }
    }

    private function line_boules($char){
        $b= "<pre style = 'margin: 0;'>";
        $b.= str_repeat(" ".$char, ($this->nbMaxEtoile - 3)/4) . " ";
        $b.= str_repeat("*", 3) . " ";
        $b.= str_repeat($char." ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
        $b.= "</pre>";
        return($b);
    }
    private function affichage_tronc(){
        if ($this->isBalls==TRUE){
            $this->nbEtage-=2;
        }   
        for($i=0;$i<= $this->nbEtage;$i++){
            $this->line();
        }        
    }
    private function affichage_corps(){
        for($i = 0; $i <= $this->nbEtage - 1; $i++){
            $this->line($this->nbEtoile1);
            $this->line($this->nbEtoile2);
            $this->line3();
            $this->nbEtoile1 = $this->nbEtoile2;
            $this->nbEtoile2 = $this->nbEtoile3;
            $this->nbEtoile3 += 4;
        }
    }
    private function affichage_boules(){
        $l1_boules = $this->line_boules("|");
        $l2_boules = $this->line_boules("0");

        if($this->isBalls == TRUE){
            echo($l1_boules);
            echo($l2_boules);
            }
    }
    private function line3(){
        $c="<pre style = 'margin: 0;'>";
        $c.= str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2);
        $c.= $this->garland . str_repeat("*", $this->nbEtoile3);
        $c.=  $this->garland . str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2) . "</pre>";
        echo $c;
    }
}

class corps_sapin{
    private $nbEtage = 5;
    private $nbEtoile1 = 1;        
    private $nbEtoile2 = 3;
    private $nbEtoile3 = 7;
    private $nbMaxEtoile;
    private $isGarland = TRUE;
    private $garland;
    public function __construct(){
        $this->nbMaxEtoile = $this->getMaxStarnumber();
        $this->garland = $this->etat_guirlande();
        $this->affichage_corps();
    }
    private function line($nb_stars= NULL){
        $a = "<pre style = 'margin: 0;'>";
        if($nb_stars){
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);
            $a .=  str_repeat("*", $nb_stars);
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);                    
        }
        else{
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 1) / 2);
            $a .= str_repeat("*", 3);
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 3) / 2);            
        }
        $a .= "</pre>";
        echo $a;
    }
    private function affichage_corps(){
        for($i = 0; $i <= $this->nbEtage - 1; $i++){
            $this->line($this->nbEtoile1);
            $this->line($this->nbEtoile2);
            $this->line3();

            $this->nbEtoile1 = $this->nbEtoile2;
            $this->nbEtoile2 = $this->nbEtoile3;
            $this->nbEtoile3 += 4;
        }
    }
    private function line3(){
        $c="<pre style = 'margin: 0;'>";
        $c.= str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2);
        $c.= $this->garland . str_repeat("*", $this->nbEtoile3);
        $c.=  $this->garland . str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2) . "</pre>";
        echo $c;
    }
    private function getMaxStarnumber(){
        return (3 + 2*($this->nbEtage - 1))*2 + 1;
    }
    private function etat_guirlande(){
        if($this->isGarland == TRUE){
            return ("S");
        } elseif($this->isGarland == FALSE){
           return(" ") ;
        }
    }
    
}
class line_balls{
    private $nbEtage = 5 ;
    private $isBalls = TRUE;
    private $nbMaxEtoile;

    public function __construct(){
        $this->nbMaxEtoile = $this->getMaxStarnumber();
        $this->affichage_boules();
    }
    private function line_boules($char){
        $b= "<pre style = 'margin: 0;'>";
        $b.= str_repeat(" ".$char, ($this->nbMaxEtoile - 3)/4) . " ";
        $b.= str_repeat("*", 3) . " ";
        $b.= str_repeat($char." ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
        $b.= "</pre>";
        return($b);
    }
    private function affichage_boules(){
        $l1_boules = $this->line_boules("|");
        $l2_boules = $this->line_boules("0");

        if($this->isBalls == TRUE){
            echo($l1_boules);
            echo($l2_boules);
            }
    }
    private function getMaxStarnumber(){
        return (3 + 2*($this->nbEtage - 1))*2 + 1;
    }
}    
class tronc{
    private $nbEtage = 5 ;
    private $nbMaxEtoile;
    private $isBalls = TRUE;
    public function __construct(){
        $this->nbMaxEtoile = $this->getMaxStarnumber();
        $this->affichage_tronc();
    }
    private function affichage_tronc(){
        if ($this->isBalls==TRUE){
            $this->nbEtage-=2;
        }   
        for($i=0;$i<= $this->nbEtage;$i++){
            $this->line();
        }        
    }
    private function line($nb_stars= NULL){
        $a = "<pre style = 'margin: 0;'>";
        if($nb_stars){
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);
            $a .=  str_repeat("*", $nb_stars);
            $a .=  str_repeat(" ", ($this->nbMaxEtoile - $nb_stars) / 2 + 1);                    
        }
        else{
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 1) / 2);
            $a .= str_repeat("*", 3);
            $a .= str_repeat(" ", ($this->nbMaxEtoile - 3) / 2);            
        }
        $a .= "</pre>";
        echo $a;
    }
    private function getMaxStarnumber(){
        return (3 + 2*($this->nbEtage - 1))*2 + 1;
    }
}
class tree{
    public function __construct(){
        new corps_sapin();
        new line_balls();
        new tronc();
    } 
}
new tree();

?>