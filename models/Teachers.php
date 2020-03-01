<?php
class Teachers{
  public static function getAllTeachers(){
    $teachers = [];
    $sql = "SELECT * FROM `users` WHERE role_id=? ORDER BY user_id ASC";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute([4]);
    $teachers = $stmt->fetchAll();
    return $teachers;
  }
  public static function getTeacherSubject($teacherId){
    $subjects = [];
    $sql = "SELECT * FROM `classes`, `subjects`, `users`, `teachers` WHERE `users`.user_id=? AND `teachers`.user_id=`users`.user_id AND `classes`.teacher_id=`teachers`.teacher_id AND `subjects`.subject_id=`classes`.subject_id";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute([$teacherId]);
    $subjects = $stmt->fetchAll();
    $resultString = "";
    foreach($subjects as $subjectItem):
      if($resultString == "")
        $resultString = $subjectItem['subject_name'];
      else
        $resultString = $resultString.', '.$subjectItem['subject_name'];
    endforeach;
    return $resultString;
  }
  public static function getTeacherDescription($teacherId){
    $sql = "SELECT * FROM `teachers` WHERE user_id=?";
    $stmt = DB::$connection->prepare($sql);
    $stmt->execute([$teacherId]);
    $description = $stmt->fetchObject();
    return $description->teacher_description;
  }
}
