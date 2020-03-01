<?php

class ArticleController extends Controller{
  public function actionView($parameters = []) {
    $this->title = "Перегляд статті";
    $this->description = "Сторінка перегляду статті";
    $this->render("view");
  }
  public function actionList($parameters = []) {
    $this->title = "Список статті";
    $this->description = "Сторінка списку статтей";
    $this->render("list");
  }
}
