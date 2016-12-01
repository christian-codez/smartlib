<?php

    function cssPath($s){
        
        $path = base_url()."resources/css/".$s;
        return $path;
    }
    
    function jsPath($s){
        
        $path = base_url()."resources/js/".$s;
        return $path;
    }
    
    function imagePath($s){
        
        $path = base_url()."resources/images/".$s;
        return $path;
    }
    
    function fontPath($s){
        
        $path = base_url()."resources/font-awesome/".$s;
        return $path;
    }
    
    function layersliderPath($s){
        
        $path = base_url()."resources/layerslider/".$s;
        return $path;
    }
    
    
    //ADMINISTRATORS NAVIGATION LINKS GOES HERE...
    
     function adminCssPath($s){
        
        $path = base_url()."resources/back/bootstrap/css/".$s;
        return $path;
    }
    
     function adminDistCssPath($s){
        
        $path = base_url()."resources/back/dist/css/".$s;
        return $path;
    }
     function adminDistPath($s){
        
        $path = base_url()."resources/back/dist/".$s;
        return $path;
    }
    function adminPluginsPath($s){
        
        $path = base_url()."resources/back/plugins/".$s;
        return $path;
    }
    
    function adminJsPath($s){
        
        $path = base_url()."resources/back/bootstrap/js/".$s;
        return $path;
    }
    
    function adminImgPath($s){
        
        $path = base_url()."resources/back/dist/img/".$s;
        return $path;
    }
    
    function adminFontPath($s){
        
        $path = base_url()."resources/back/bootstrap/fonts/".$s;
        return $path;
        
    }
    
  