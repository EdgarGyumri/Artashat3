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
    <link href="css/events.css" rel="stylesheet" type="text/css">
    <script src="js/main.js">
    </script>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="events-container">
        <div class="container">
          <ul class="breadcrumb-menu">
            <li>
              <a href="#">Գլխավոր</a>
              <i></i>
            </li>
            <li>
              <span>Միջոցառումներ</span>
            </li>
          </ul>

          <strong class="heading">Միջոցառումներ</strong>

          <div class="evenets-top mb-55">
            <div class="image-container">
              <img alt="Event image" src="images/event-image.jpg">
            </div>
            <h1 class="title">
              Բաստա<br>
              Մեծ համերգ Երևանում<br>
              MVF BAND music, live in Kami Music Club
            </h1>
          </div>

           <!-- top slider -->
          <!-- <div class="container">
           <div class="slider-container">
            <div class="slider-images slider-big">
              <i class="prev"></i>
              <i class="next"></i>

              <div class="image-container">
                <img src="images/event-image.jpg" alt="Event top image">
              </div>
              
              <h1 class="title">
                Բաստա<br>
                Մեծ համերգ Երևանում<br>
                MVF BAND music, live in Kami Music Club
              </h1>
              
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

          <div class="flex-row single-event">
            <div>
              <h2>Նկարագրություն</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a 
                type specimen book. It has survived not only five centuries, but also 
                the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets 
                containing Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem 
                Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an 
                unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>

              <h2 class="mt-150">Ժամեր</h2>

              <p>Սեպտեմբեր 27</p>
              <p>09։30 pm</p>
              <h2>Կիսվել սոց․ ցանցերում</h2>

              <div>
                <a class="social facebook" href="#"></a> 
                <a class="social instagram" href="#"></a> 
                <a class="social twitter" href="#"></a>
              </div>

            </div>

            <div>
              <h2>Միջոցառման վայր</h2>
              <div class="image-container">
                <img alt="Map" src="images/map.jpg">
              </div>
              <h2 class="mt-45">MVF BAND music, live in Kami Music Club</h2>
              <p>KAMI Music Club</p>
              <p>18 Abovyan Street, Yerevan, Armenia 0001</p>
            </div>
          </div>
        </div>
      </section>

      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>