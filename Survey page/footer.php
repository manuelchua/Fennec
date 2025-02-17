<!-- Footer Start -->
<section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-info">
            <div class="section-heading">
              <h6>Fennec: A Website For Mental Health</h6>
              <h4>The Team Behind <em>Fennec</em></h4>
            </div>
            <p>This web application was concieved and created for Software Engineering 2 SY'21-22 by these individuals:</p>
            <ul>
              <li>Carlos, Cassandra Lee</li>
              <li>Chua, Manuel Victorio</li>
              <li>Leuterio, Mira Alexandra</li>
              <li>Lim, Lance</li>
              <li>Sidhu, Ranjit Kent</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="image">
            <div class="thumb">
              <img src="assets/images/tempArticleImg.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <img class="logo" src="../assets\images\fennecLogo.png"><h4 class="app-name">Fennec</h4>
        </div>
        <div class="col-lg-12">
          <p class="disclaimer">The information contained in this website is not to be used in replacement of a medical professional. We endeavour to keep the information up to date 
            and correct, we make no claims of  providing professional phsycological treatment . We highly encourage the use of this product along side professional aid.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer End -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>