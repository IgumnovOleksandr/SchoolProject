<?php 
require_once 'core/Application.php';
require_once 'core/Controller.php';
require_once 'controllers/PostController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/ArticleController.php';
require_once 'models/Post.php';
require_once 'classes/db.php';
require_once 'config/config.php';
$app = new Application();
$app->run();
