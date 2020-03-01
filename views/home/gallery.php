<main class="main_block">
	<section class="our_full_gallery">
		<a href="index" class="return_to_prev_page">&larr; Повернутись на попередню сторінку</a>
		<div class="container">
		<p class="title">Галерея</p>
		<div class="row">
		<?php
      if(count($gallery) > 0):
        foreach($gallery as $galleryItem):
    ?>
			<div class="col-12 col-md-6 col-xl-4">
				<a class="fancybox" rel="group" href="/uploads_images/<?= $galleryItem["src"]; ?>" data-fancybox="images" data-caption="<?= $galleryItem["description"]; ?>">
					<img src="/uploads_images/<?= $galleryItem["src"]; ?>">
				</a>
			</div>
		<?php
        endforeach;
      else:
    ?>
      <div class="col-12 gallery_none_images">
				<p class="gallery_none_images">На жаль немає фотографій</p>
      </div>
    <?php
      endif;
    ?>
		</div>
	</div>
	</section>
</main>
