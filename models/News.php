<?php

class News{
  public static function getAllNews() {
    $news = [];
    $sql = "SELECT * FROM news ORDER BY `datetime` DESC";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute();
    $news = $stmt->fetchAll();
    return $news;
  }
  public static function getNewsItemById($newsId){
    $newsItem = [];
    $sql = "SELECT * FROM news WHERE id=?";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute([$newsId]);
    $newsItem = $stmt->fetchObject();
    return $newsItem;
  }
  public static function getNewsGalleryById($newsId){
    $newsGallery = [];
    $sql = "SELECT * FROM `uploads_images` WHERE category=? AND category_item_id=? ORDER BY `datetime` DESC";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute(['news', $newsId]);
    $newsGallery = $stmt->fetchAll();
    return $newsGallery;
  }
}
