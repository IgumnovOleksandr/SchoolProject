<main class="main_block">
	<section class="news_block">
		<a href="index.php" class="return_to_prev_page">&larr; Повернутись на попередню сторінку</a>
		<div class="container">
			<p class="title">Новини</p>
			<div class="row">
        <?php foreach($news as $newsItem): ?>
  			  <div class="col-12">
  				  <div class="news_image_block">
  			 		  <img src="/uploads_images/<?= $newsItem["main_image_src"]; ?>">
  			 	  </div>
    			  <div class="news_content_block">
    				  <p><?= $newsItem["title"]; ?></p>
    				 	<p><?= $newsItem["mini_description"]; ?></p>
    				 	<a href="news/<?= $newsItem["id"]; ?>">Читати новину</a>
    				 	<p><?= $newsItem['datetime']; ?></p>
    				</div>
  			  </div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
