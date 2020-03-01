<main class="main_block">
  <section class="our_teachers">
  	<a href="index" class="return_to_prev_page">&larr; Повернутись на попередню сторінку</a>
  	<div class="container">
  	<p class="title">Педагогічний колектив</p>
  	<div class="row">
        <?php
          foreach($teachers as $teachersItem):
            if($teachersItem['image'] == ''):
              $image = "/images/not_found_image.jpg";
            else:
              $image = "/"."uploads_images/".$teachersItem['image'];
            endif;
            $subject = Teachers::getTeacherSubject($teachersItem["user_id"]);
            $description = Teachers::getTeacherDescription($teachersItem["user_id"]);
        ?>
        <div class="col-12 col-sm-6 col-xl-3">
          <div class="flip_container">
            <div class="teachers_flipper">
              <div class="teachers_front">
                <img src="<?= $image; ?>" class="our_teachers_images">
                <p class="teachers_name"><?= $teachersItem["last_name"]; ?> <?= $teachersItem["first_name"]; ?> <?= $teachersItem["middle_name"]; ?></p>
                <p class="teachers_activity"><?= $subject; ?></p>
              </div>
              <div class="teachers_back">
                <p>Інформація про вчителя</p>
                <p class="teachers_description"><?= $description; ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
  		</div>
  	</div>
  </section>
</main>
