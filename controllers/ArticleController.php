<?php

class ArticlesController extends Controller{
    public function actionView($parameters = []){
        echo "ControllerId: article; actionId: view";
    }
    public function actionList($parameters = []){
        echo "ControllerId: article; actionId: list";
    }
}


