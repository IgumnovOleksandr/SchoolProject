<main class="main_page_block">
  <section class="about_us white" style="background-image: url('images/work.jpg')">
    <div class="container">
      <p class="title">Про нас</p>
      <div class="row">
        <pre>	Ліцей №25 м.Житомира – заклад нового типу, відомий у місті та області, визнання нашого ліцею базується на глибоких освітянських традиціях, високому рівні викладання, свободі творчості учнів та вчителів. Вчителями ліцею розроблено програми випереджувального вивчення математики, дидактичні матеріали, методичні рекомендації, програми для індивідуальної роботи з різними категоріями учнів. Дані розробки використовуються педагогами міста та області. В ліцеї створена та ефективно діє власна модель методичної роботи, яка одночасно працює на вчителя, учня, батьків, яка забезпечує становлення нового вчителя: конструктора, дослідника, моделювальника, науковця, здатного створити успіх, психологічний комфорт, розвиток. Педагоги ліцею діляться своїм досвідом на сторінках ЗМІ, проводять апробацію навчально-методичних посібників та підручників, дидактичних матеріалів. Науково-методична робота в ліцеї здійснюється на базі творчої співпраці з вищими навчальними закладами.</pre>
      </div>
    </div>
  </section>
  <section class="our_propositions black">
    <div class="container">
      <p class="title">Ми пропонуємо вашій дитині:</p>
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-12">
          <img src="images/classroom.jpg">
          <p>Комфортні умови навчання</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-12">
          <img src="images/teachers.jpg">
          <p>Висококваліфіковані викладачі</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-12">
          <img src="images/pupils.jpg">
          <p>Додаткові заняття</p>
        </div>
      </div>
    </div>
  </section>
  <section class="our_progress white" style="background-image: url('images/doska.jpg')">
    <div class="container">
      <p class="title">Наші досягнення:</p>
      <div class="row">
        <div class="col-12 col-md-6">
          <p>17 переможців всеукраїнських олімпіад</p>
          <p>49 переможців обласних олімпіад</p>
        </div>
        <div class="col-12 col-md-6">
          <p>137 переможців міських олімпіад</p>
          <p>42 переможця MAH</p>
        </div>
      </div>
    </div>
    <a href="our_progress.php" class="more_progress_button">Більше досягненнь</a>
  </section>
  <section class="our_gallery black">
    <div class="container">
      <p class="title">Галерея</p>
      <div class="row">
        <?php foreach($gallery as $galleryItem): ?>
          <div class="col-12 col-md-6 col-xl-4">
            <a class="fancybox" rel="group" href="/uploads_images/<?= $galleryItem['src']; ?>" data-fancybox="images" data-caption="<?= $galleryItem['description']; ?>">
              <img src="/uploads_images/<?= $galleryItem['src']; ?>" class="our_gallery_last_images">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <a href="gallery.php" class="more_gallery_button">Більше фотографій</a>
  </section>
</main>
