<?php


require("smarty/libs/Smarty.class.php");

class MySmarty extends Smarty 
{
function __construct() {

parent::__construct();
        $this->template_dir ="tpl/";
        $this->compile_dir = "smarty/templates_c/";
        $this->config_dir = "smarty/conf/";
        $this->cache_dir = "smarty/cache/";

        // Podrazumevane vrednosti za delimitere u Smarty šablonima
        // su { i }. Ove zagrade imaju svoja značenja u CSS-u i JQuery-ju
        // pa ih menjamo sa [[ i ]].
        $this->left_delimiter="[[";
        $this->right_delimiter="]]";

}    
}
?>