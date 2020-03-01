<?php
class Gallery {
  public static function getSmallGallery(){
    $gallery = [];
    $sql = "SELECT * FROM gallery ORDER BY `datetime` DESC LIMIT 6";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute();
    $gallery = $stmt->fetchAll();
    return $gallery;
  }
  public static function getAllGallery(){
    $gallery = [];
    $sql = "SELECT * FROM gallery ORDER BY `datetime` DESC";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute();
    $gallery = $stmt->fetchAll();
    return $gallery;
  }
}
