<?php

class NewsController extends Controller{
  public function actionView($parameters = []){
    $newsId = $parameters[0];
    $this->title = "Перегляд списку публікацій";
    $this->description = "Сторінка перегляду списку публікацій";
    $params['newsItem'] = News::getNewsItemById($newsId);
    $params['newsGallery'] = News::getNewsGalleryById($newsId);
    $this->render("view", $params);
  }
  public function actionList($parameters = []){
    $this->title = "Новини";
    $this->description = "Опис сторінки новин";
    $params['news'] = News::getAllNews();
    $this->render("list", $params);
  }
}
