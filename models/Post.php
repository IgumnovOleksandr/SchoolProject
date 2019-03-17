<?php

class Post{
    public function getAllPosts() {
        $sql = "SELECT * FROM posts";
        $stmt = DB::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
