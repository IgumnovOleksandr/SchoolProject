<?php

class View {
    protected $file;
    protected $params;
    public function __construct($file, $params = []) {
        $this->file = ROOT."/views/$file.php";
        $this->params = $params;
    }

    public function setParam($name, $value){
        $this->params[$name] = $value;
    }

    public function getHTML(){
        extract($this->params);
        ob_start();
        include($this->file);
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }

    public function render(){
        echo $this->getHTML();
    }
}
