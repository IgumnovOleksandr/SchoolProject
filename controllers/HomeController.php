<?php
class HomeController extends Controller{
  public function actionIndex($parameters = []){
    $this->title = "Головна сторінка";
    $this->description = "Опис головної сторінки";
    $params['gallery'] = Gallery::getSmallGallery();
    $this->render("index", $params);
  }
  public function actionPage404($parameters = []){
    $this->title = "Помилка 404";
    $this->description = "Сторінку не знайдено";
    $this->render("page404");
  }
  public function actionGallery($parameters = []){
    $this->title = "Галерея";
    $this->description = "Опис галереї";
    $params['gallery'] = Gallery::getAllGallery();
    $this->render("gallery", $params);
  }
  public function actionProgress($parameters = []){
    $this->title = "Наші досягнення";
    $this->description = "Опис наших досягнень";
    $this->render("progress");
  }
  public function actionTeachers($parameters = []){
    $this->title = "Педагогічний колектив";
    $this->description = "Опис педагогічного колективу";
    $params['teachers'] = Teachers::getAllTeachers();
    $this->render("teachers", $params);
  }
  public function actionManagement($parameters = []){
    $this->title = "Адміністрація школи";
    $this->description = "Опис адміністрації школи";
    $this->render("management");
  }
  public function actionReviews($parameters = []){
    $this->title = "";
    $this->description = "";
    $params['reviews'] = Reviews::getAllReviews();
    $this->render("reviews", $params);
  }
}
