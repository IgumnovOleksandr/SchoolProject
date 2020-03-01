<?php
  if($_POST["send_review_button"]){
    $reviewAuthor = $_POST["review_author"];
    $positiveReview = $_POST["review_form_positive"];
    $negativeReview = $_POST["review_form_negative"];
		if($reviewAuthor == "") $error[] = 'Вкажіть Ваше ім’я!';
		if($positiveReview == "" || $negativeReview == "") $error[] = 'Вкажіть переваги або недоліки!';
		if(count($error)){
      $_SESSION['msg'] = "<p align='left' id='form-error'>".implode('<br />', $error)."</p>";
    }else{
      $_SESSION['msg'] = "<p align='left' id='form-success'>Відгук успішно надіслано!</p>";
      if($_SESSION['auth'] == true)
	      $resId = $_SESSION['auth_user_id'];
	    else
	      $resId = 0;
	    $ip = $_SERVER['REMOTE_ADDR'];
      Reviews::addNewReview($resId, $reviewAuthor, $positiveReview, $negativeReview, $ip);
    }
	}
?>
<main class="main_block">
	<section class="reviews_block">
		<?php
      if($_SESSION['msg']):
         echo $_SESSION['msg'];
         unset($_SESSION['msg']);
      endif;
    ?>
		<p class="title">Відгуки</p>
		<a href="#review_form" class="write_review">Залишити відгук</a>
		<form class="review_form" id="review_form" method="post">
			<p class="review_form_title">Залишити відгук</p>
			<label>Ім’я:</label><input type="text" name="review_author" class="review_form_author" value="<?php
				if($_SESSION["auth"] == true)
      				echo $_SESSION["auth_first_name"];
      		?>">
			<label>Переваги:</label>
			<textarea class="review_form_positive" name="review_form_positive"></textarea>
			<label>Недоліки:</label>
			<textarea class="review_form_negative" name="review_form_negative"></textarea>
			<input type="submit" name="send_review_button" class="send_review_button" value="Надіслати">
		</form>
	  <ul class="reviews_list">
		  <?php foreach($reviews as $reviewsItem): ?>
				<li>
					<p class="review_author">Автор: <span><?= $reviewsItem["author"]; ?><span></p>
 					<img src="images/plus.png">
 					<p class="positive_review"><?= $reviewsItem["positive"]; ?></p>
					<img src="images/minus.png">
					<p class="negative_review"><?= $reviewsItem["negative"]; ?></p>
					<p class="review_datetime">Дата: <?= $reviewsItem["datetime"]; ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
</main>
