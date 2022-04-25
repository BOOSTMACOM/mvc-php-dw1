<?php

class View{
    private $layout;
    private $template;
    private $data = array();
    
    public function __construct($template , $data = [], $layout = 'base.html.php'){
        $this->template = $template;
        $this->layout = $layout;
        $this->data = $data;
    }
    
    public function render($data = []){

        extract($this->data);
        ob_start();
        require '../template/' . $this->template;
       
        $content = ob_get_clean();


        require '../template/' . $this->layout;
    }
}