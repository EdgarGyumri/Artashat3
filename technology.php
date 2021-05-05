<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Website</title>
    <meta charset="utf-8">
    <meta content="#ffffff" name="theme-color">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="images/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="images/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="/safari-pinned-tab.svg" rel="mask-icon">
    <link href="css/technology.css" rel="stylesheet" type="text/css">
    <script src="js/main.js"></script>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="technology">
        <div class="container">
          <ul class="breadcrumb-menu">
            <li>
              <a href="#">Գլխավոր</a> 
              <i></i>
            </li>
            <li>
              <span>Տեխնալոգիաներ</span>
            </li>
          </ul>
          <h1 class="heading">Տեխնալոգիաներ</h1>
        </div>

        <div class="technology-top">
          <img alt="technology image" src="images/technology.jpg">
        </div>

        <!-- top slider -->
        <!-- <div class="container">
           <div class="slider-container">
            <div class="slider-images slider-big">
              <i class="prev"></i>
              <i class="next"></i>

              <div class="image-container">
                <img src="images/technology.jpg" alt="technology top image">
              </div>

             </div>
           </div>
          </div> -->
          <!-- end top slider -->

         <!-- video home start -->
         <!-- <div class="video-response video-top">
            <iframe class="iframe-responsive"
              src="https://www.youtube.com/embed/ZbZSe6N_BXs" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div> -->
          <!-- video home end -->  

           <!-- video slider start -->
          <!-- <div class="container">
           <div id="video-container" class="slider-container video-container">
            <div id="video-slider" class="video-slider">
              <i class="prev"></i>
              <i class="next"></i>
              <div class="video-response video-top">
                <iframe class="iframe-responsive"
                  src="https://www.youtube.com/embed/ZbZSe6N_BXs" 
                  frameborder="0" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen>
                </iframe>
              </div>
             </div>
           </div>
          </div> -->
          <!-- video slider end  -->

        <div class="container">
          <h2>Տեխնալոգիաներ</h2>
          <p>
            Ընդամենը հինգ տարվա ընթացքում կարողացել ենք կառուցել և վարակառուցել գործարանը, 
            որը ունի բազմաճյուղ հնարավորություն իմչպես պահածոների արտադրության այնպես էլ չրի,
            ջրի և խաղողի վերամշակման: 2020 թվականին ստացել ենք ISO սերտիկֆիկատ․ Տեխնալոգիաներ:
            </p>
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
          <button aria-label="See more" class="btn" type="button">Տեսնել ավելին</button>
        </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>