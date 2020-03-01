<?php
class Reviews{
  public static function getAllReviews(){
    $reviews = [];
    $sql = "SELECT * FROM `reviews` ORDER BY `datetime` DESC";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll();
    return $reviews;
  }
  public static function addNewReview($userId, $reviewAuthor, $positiveReview, $negativeReview, $ip){
    $sql = "INSERT INTO `reviews` (user_id, author, positive, negative, `datetime`, ip)
            VALUES(?, ?, ?, ?, NOW(), ?)";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute([$userId, $reviewAuthor, $positiveReview, $negativeReview, $ip]);
    header("Refresh: 0");
  }
}
