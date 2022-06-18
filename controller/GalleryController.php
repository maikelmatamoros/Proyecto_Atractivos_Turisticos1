<?php

class GalleryController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showGalleryView(){
        $this->view->show("galleryView.php", null);  
    }//showGalleryView
      
}//GalleryController
