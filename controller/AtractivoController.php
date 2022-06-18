<?php

class AtractivoController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showAtractivoView(){
        $this->view->show("atractivoView.php", null);  
    }//showGalleryView
      
}//GalleryController
