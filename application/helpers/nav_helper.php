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