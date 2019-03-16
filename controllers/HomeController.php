<?php

class HomeController extends Controller{
    public function actionIndex($parameters = []){
        echo "ControllerId: home; actionId: index";
    }
    public function actionPage404($parameters = []){
        echo "ControllerId: home; actionId: page404";
    }
}

