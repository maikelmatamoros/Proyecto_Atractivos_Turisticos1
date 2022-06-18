<?php

class TipsDeViajeController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    /**
     * It shows the view tipsDeViajeView.php
     */
    public function showTipsDeViajeView(){
        $this->view->show("tipsDeViajeView.php", null);  
    }//showAboutUsView
      
}//AboutUsController
