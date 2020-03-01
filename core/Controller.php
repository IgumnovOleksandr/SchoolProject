<?php

class Controller {
    protected $view;
    protected $title;
    protected $description;
    protected $controllerId;

    public function __construct($controllerId) {
        $this->controllerId = $controllerId;
    }

    public function render($template, $params = []){
        $this->view = new View('index');
        $this->view->setParam('title', $this->title);
        $this->view->setParam('description', $this->description);

        $contentView = new View("$this->controllerId/$template", $params);
        $content = $contentView->getHTML();
        $this->view->setParam('content', $content);
        $this->view->render();
    }
}
