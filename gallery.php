<!DOCTYPE HTML>
<html lang="en">
  <head>
	  <title>Website</title>
    <meta charset="utf-8">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="css/gallery.css">
    <script src="main.js"></script>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="gallery">
      <div class="container">
        <ul class="breadcrumb-menu">
          <li>
            <a href="#">Գլխավոր</a>
            <i></i>
          </li>
          <li>
            <span>Նկարադարան</span>
          </li>
        </ul>

        <h1 class="heading">Նկարադարան</h1>
      
        <div class="slider-container">
          <div id="primary-slider" class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide slider-big">
                  <img src="images/slider-iteam.jpg" style="display: block !important">
                </li>
                <li class="splide__slide slider-big">
                  <img src="images/slider-iteam-2.jpg" style="display: block !important">
                </li>
                <li class="splide__slide slider-big">
                  <img src="images/slider-iteam.jpg" style="display: block !important">
                </li>
              </ul>
            </div>
          </div>
          <div id="secondary-slider" class="splide slider-items">
            <div class="splide__track" style="margin: 10px 0px 0px 70px">
              <ul class="splide__list">
                <li class="splide__slide splide__slide__item">
                  <img class="slider-image" src="images/slider-iteam.jpg">
                </li>
                <li class="splide__slide splide__slide__item">
                  <img class="slider-image" src="images/slider-iteam-2.jpg">
                </li>
                <li class="splide__slide splide__slide__item">
                  <img class="slider-image" src="images/slider-iteam.jpg">
                </li>
              </ul>
            </div>
          </div>
          <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
        </div>

        </div>

        <div class="gallery-container">
        <div class="flex-row">
          <div class="large-image">
            <div>
              <img src="images/gallery-3.jpg" alt="Gallerey image 1">
            </div>
          </div>
          <div class="images-place">
            <div>
              <img src="images/gallery-1.jpg" alt="Gallerey image 2">
            </div>
            <div>
              <img src="images/gallery-2.jpg" alt="Gallerey image 3">
            </div>
          </div>
        </div>

        <div class="flex-row reverse-column">
          <div class="images-place">
            <div>
              <img src="images/gallery-1.jpg" alt="Gallerey image 2">
            </div>
            <div>
              <img src="images/gallery-2.jpg" alt="Gallerey image 3">
            </div>
          </div>
          <div class="large-image">
            <div>
              <img src="images/gallery-3.jpg" alt="Gallerey image 1">
            </div>
          </div>
        </div>

          <div class="flex-row">
            <div class="large-image">
              <div>
                <img src="images/gallery-3.jpg" alt="Gallerey image 1">
              </div>
            </div>
            <div class="images-place">
              <div>
                <img src="images/gallery-1.jpg" alt="Gallerey image 2">
              </div>
              <div>
                <img src="images/gallery-2.jpg" alt="Gallerey image 3">
              </div>
            </div>
          </div>

      </div>

      <div class="container text-center">
        <button type="button" class="btn" aria-label="See more">Տեսնել ավելին</button>
      </div>  
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      document.addEventListener( 'DOMContentLoaded', function () {
        var secondarySlider = new Splide( '#secondary-slider', {
          fixedWidth  : 100,
          height      : 60,
          gap         : 10,
          cover       : true,
          isNavigation: true,
          focus       : 'center',
          autoplay: true,
          rewind: true,
          pauseOnFocus: false,
          pauseOnHover: false,
          arrows: false,
        } ).mount();
        
        var primarySlider = new Splide( '#primary-slider', {
          type       : 'fade',
          heightRatio: 0.5,
          pagination : false,
          arrows     : true,
          cover      : true,
          autoplay: true,
          rewind: true,
          pauseOnFocus: false,
          pauseOnHover: false,
        } ); // do not call mount() here.
        
        primarySlider.sync( secondarySlider ).mount();
      } );
    </script>
  </body>
<html>