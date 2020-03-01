<?php
	if(empty($newsItem)):
		header("Location: /page404");
	endif;
?>
<main class="main_block">
	<section class="news_more_information_block">
		<a href="news.php" class="return_to_prev_page">&larr; Повернутись на попередню сторінку</a>
		<div class="container">
  		<?php ?>
  				<div class="row main_post_image">
  					<div class="col-12">
  						<a class="fancybox" rel="group" href="/uploads_images/<?= $newsItem->main_image_src; ?>" data-fancybox="images">
  							<img src="/uploads_images/<?= $newsItem->main_image_src; ?>" class="news_item_image">
  						</a>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-12">
  						<p class="title"><?= $newsItem->title; ?></p>
  						<p class="dt_post"><?= $newsItem->datetime; ?>, <?= $newsItem->author; ?></p>
  						<pre class="text_post"><?= $newsItem->text; ?></p>
  					</div>
  				</div>
  		<p class="title">Фотографії</p>
  		<div class="row">
  			<?php
          if(count($newsGallery)):
            foreach($newsGallery as $newsGalleryItem):
        ?>
				<div class="col-12 col-md-6 col-xl-4">
					<a class="fancybox" rel="group" href="/uploads_images/<?= $newsGalleryItem['src']; ?>" data-fancybox="images">
						<img src="/uploads_images/<?= $newsGalleryItem['src']; ?>" class="post_gallery_item">
					</a>
				</div>
  			<?php
            endforeach;
          else:
        ?>
  			   <p class="empty_gallery">На жаль немає фотографій до цієї новини</p>
        <?php
          endif;
        ?>
  		</div>
    </div>
	</section>
</main>
