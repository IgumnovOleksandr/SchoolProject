<?php

class PostController extends Controller{
    public function actionView($parameters = []){
        echo "ControllerId: post; actionId: view";
    }
    public function actionList($parameters = []){
        $posts = Post::getAllPosts();
        print_r($posts);
    }
}

