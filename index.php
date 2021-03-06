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
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="stylesheet" href="css/subscribe.css">
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <style>
      .top-info{
        width: 90%;
      }
      #homepage-top .image-container::before{
        z-index: 10;
      }
      .splide__arrow, .top-info, .splide__pagination{
        z-index: 10 !important;
      }
      .splide__arrow{
        background: transparent;
        width: 32px;
        height: 32px;
      }
      #big-splide .splide__arrow--prev{
        left: 1em !important;
      }
      #big-splide .splide__arrow--next{
        right: 1em !important;
      }
      .splide__arrow svg {
        width: 50px;
        height: 50px;
      }
      #video-splide .splide__slide {
        margin: 0 10px;
      }
      #video-splide .splide__list {
        width: 100%;
      }
      #video-splide .splide__slide iframe,
      #video-splide .splide__slide video {
        width: 100%;
        height: 100%;
      }
      #video-splide .splide__arrow{
        width: 45px;
        height: 45px;
      }
      .splide__arrow:first-child{
        left: -55px;
      }
      .splide__arrow:last-child{
        right: -55px;
      }
      #video-splide .splide__list {
        display: flex;
        justify-content: space-between;
      }
      #news-splide .splide__slide {
        box-shadow: 3px 3px 16px rgba(0, 0, 0, 0.16);
        -moz-box-shadow: 3px 3px 16px rgba(0, 0, 0, 0.16);
        -webkit-box-shadow: 3px 3px 16px rgba(0, 0, 0, 0.16);
        margin: 0 20px;
      }
      @media screen and (max-width: 1300px) {
        .splide__arrow{
          width: 35px !important;
          height: 35px !important;
        }
        .splide__arrow:first-child{
          left: -45px;
        }
        .splide__arrow:last-child{
          right: -45px;
        }
        #video-splide .splide__slide {
          height: 150px;
        }
      }
      @media screen and (max-width: 768px) {
        .splide__arrow{
          width: 25px !important;
          height: 25px !important;
        }
        .splide__arrow:first-child{
          left: -35px;
        }
        .splide__arrow:last-child{
          right: -35px;
        }
      }
    </style>
    <!-- <script src="js/main.js"></script> -->
  </head>
  <body id="body">
    <?php require_once 'header.php' ?>
    <main>
      <section  id="homepage-top">
          <div class="image-container">
            <div class="splide" id="big-splide">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img src="images/homepage.jpg" alt="">
                  </li>
                  <li class="splide__slide">
                    <img src="images/homepage.jpg" alt="">
                  </li>
                  <li class="splide__slide">
                    <img src="images/homepage.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="top-info">
            <h1>
              ?????????? ?? ???????????????? 
              ??????????????????
              ?????????????????????? ???????????? ??????????
            </h1>
            <a href="#" class="btn btn-white">????????????</a>
          </div>

          <!-- top slider -->
          <!-- <div class="container">
           <div class="slider-container">
            <div class="slider-images slider-big">
              <i class="prev"></i>
              <i class="next"></i>

              <div class="image-container">
                <img src="images/homepage.jpg" alt="homepage top image">
              </div>

              <div class="top-info">
                <h1>
                  ?????????? ?? ???????????????? 
                  ??????????????????
                  ?????????????????????? ???????????? ??????????
                </h1>
                <a href="#" class="btn btn-white">????????????</a>
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
           <div class="slider-container">
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
          
        </section>

        <section id="about-us">
          <div class="flex-row container">
            <div class="image-container">
              <img src="images/about-us.jpg" alt="About us image" />
            </div>
            <div>
              <h2>?????? ??????????</h2>
              <p>
                ?????? ?????????????????????????? ???????????????? ??  16.12.2015??, ?????????????????????? ?????????????????? ?????????? ????????????????????
                ?????????????????????????? ???????????????? ???? ????????????????????, ?????? ?????????????????????????????? ???????? ???????? ????????????????
                ?????????????? ?????????? ???????????????????????? ?? ???????????????????? ???????? ?????? ???????????????? ???????????????????????? ????????????????
                ???????????? ???????? ?????????????????????????? ??????????:
              </p>

              <button type="submit" class="btn" aria-label="Read more">????????????</button>
            </div>
          </div>
        </section>

        <section class="homepage-map">
          <section id="product">
            <div class="container">
              <h2 class="mb-55">??????????????????</h2>
              <div class="product-section">
                <figure>
                  <div>
                    <img src="images/products/product-home-1.svg" alt="Background-iteam 1"/>
                    <img src="images/products/jam.svg" alt="Product iteam 1"/>
                  </div>
                  <figcaption>
                    <a href="#">??????????</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/mountain.svg" alt="Background-iteam 2"/>
                    <img src="images/products/tomatoes.svg" alt="Product iteam 2"/>
                  </div>
                  <figcaption>
                    <a href="#">???????????? ????????????????</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/church.svg" alt="Background-iteam 3"/>
                    <img src="images/products/apricot.svg" alt="Product iteam 3"/>
                  </div>
                  <figcaption>
                    <a href="#">???????? ?????????? ??????????????</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/product-home-3.svg" alt="Background-iteam 4"/>
                    <img src="images/products/cucumber.svg" alt="Product iteam 4" />
                  </div>
                  <figcaption>
                    <a href="#" class="read-more">????????????????????</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/product-home-2.svg" alt="Background-iteam 5"/>
                    <img src="images/products/jam-2.svg" alt="Product iteam 5"/>
                  </div>
                  <figcaption>
                    <a href="#">??????????????????</a>
                  </figcaption>
                </figure>

                <figure>
                  <a href="products.php" aria-label="see all products" class="more">
                    ?????????? ????????????
                    <i class="more-icon"></i>
                  </a>
                </figure>
            </div>
            </div>

          </section>

          <section id="gallery-videos">
            <div class="container">
              <h2 class="mb-55">??????????????????</h2>
              <div class="slider-container">
                <div class="splide" id="video-splide">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <iframe
                          src="https://www.youtube.com/embed/gu9_m0vm7fM" 
                          frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen>
                        </iframe>
                      </li>
                      <li class="splide__slide">
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </li>
                      <li class="splide__slide">
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </li>
                      <li class="splide__slide">
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </li>
                      <li class="splide__slide">
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <section id="gallery">
            <div class="container">
              <h2 class="mb-55">????????????????????</h2>

              <div class="slider-container">
                <div class="splide" id="photo-splide">
                  <div class="splide__track">
                      <div class="splide__list slide-row">
                          <div class="splide__slide">
                            <img src="images/gallery-photo-1.jpg" alt="">
                          </div>
                          <div class="splide__slide">
                            <img src="images/gallery-photo-1.jpg" alt="">
                          </div>
                          <div class="splide__slide">
                            <img src="images/gallery-photo-1.jpg" alt="">
                          </div>
                          <div class="splide__slide">
                            <img src="images/gallery-photo-1.jpg" alt="">
                          </div>
                          <div class="splide__slide">
                            <img src="images/gallery-photo-1.jpg" alt="">
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section>

        <section id="news">
          <div class="container">
            <h2 class="mb-55">??????????????????????????</h2>
            <div class="slider-container">
              <div class="splide slide-iteams" id="news-splide">
                  <div class="splide__track">
                    <div class="splide__list slide-row">
                      <div class="splide__slide">
                        <div class="news-image">
                          <img src="images/news-iteam.jpg" alt="News Iteam">
                        </div>
                        <div>
                          <div class="date">
                            <span>07 ??????????????, 2020</span>
                            <a href="#" arial-label="share this news" class="share">
                              <span class="share-icon">
                                <span></span>
                              </span>    
                              <span class="text">????????????</span>
                            </a>
                          </div>

                          <h2>
                            <a href="#">
                            The quick brown fox jumps
                            </a>
                          </h2>

                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Loremtext ever since the 1500s, when an
                          </p>

                          <div class="read-more">
                            <a href="#" aria-label="Read more about this news" class="more">
                            ???????????? ????????????
                            <span class="more-icon"></span>
                          </a>
                          </div>
                        </div>
                          </div>
                          <div class="splide__slide">
                          <div class="news-image">
                        <img src="images/news-iteam.jpg" alt="News Iteam">
                      </div>
                        <div>
                          <div class="date">
                            <span>07 ??????????????, 2020</span>
                            <a href="#" arial-label="share this news" class="share">
                              <span class="share-icon">
                                <span></span>
                              </span>    
                              <span class="text">????????????</span>
                            </a>
                          </div>

                          <h2>
                            <a href="#">
                            The quick brown fox jumps
                            </a>
                          </h2>

                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Loremtext ever since the 1500s, when an
                          </p>

                          <div class="read-more">
                            <a href="#" aria-label="Read more about this news" class="more">
                            ???????????? ????????????
                            <span class="more-icon"></span>
                          </a>
                          </div>
                        </div>
                        <div class="splide__slide">
                          <div class="news-image">
                        <img src="images/news-iteam.jpg" alt="News Iteam">
                          </div>
                        <div>
                          <div class="date">
                            <span>07 ??????????????, 2020</span>
                            <a href="#" arial-label="share this news" class="share">
                              <span class="share-icon">
                                <span></span>
                              </span>    
                              <span class="text">????????????</span>
                            </a>
                          </div>

                          <h2>
                            <a href="#">
                            The quick brown fox jumps
                            </a>
                          </h2>

                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Loremtext ever since the 1500s, when an
                          </p>

                          <div class="read-more">
                            <a href="#" aria-label="Read more about this news" class="more">
                            ???????????? ????????????
                            <span class="more-icon"></span>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="partners">
          <div class="container">
          <h2 class="mb-55">?????? ??????????????????????????</h2>
          <div class="splide" id="partners-splide">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                      <a href="#">
                        <img src="images/partners/amc.svg" alt="Amc logo"/>
                      </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/boin.svg" alt="boin logo"/>
                    </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/blue-sky.svg" alt="Amc logo"/>
                    </a>
                    </div>
                    <div class="splide__slide">
                      <a href="#">
                        <img src="images/partners/connies.svg" alt="Connies logo"/>
                      </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/maxima.svg" alt="Maxima logo"/>
                    </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/kaufland.svg" alt="Kaufland logo"/>
                    </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/kaufland.svg" alt="Kaufland logo"/>
                    </a>
                    </div>
                    <div class="splide__slide">
                    <a href="#">
                      <img src="images/partners/kaufland.svg" alt="Kaufland logo"/>
                    </a>
                    </div>
                </div>
            </div>
          </div>
        </section>

        <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      var splide = new Splide('#big-splide', {
        autoplay: true,
        rewind: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        drag: true,
        arrows: true,
      });

      splide.mount();

      new Splide( '#video-splide', {
            type   : 'slide',
            rewind: true,
            perPage: 3,
            perMove: 1,
            pagination: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
        } ).mount();
        new Splide( '#photo-splide', {
            type   : 'slide',
            rewind: true,
            perPage: 3,
            perMove: 1,
            pagination: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
        } ).mount();
        new Splide( '#news-splide', {
          rewind: true,
          perPage: 3,
          perMove: 1,
          pagination: false,
          autoplay: true,
          pauseOnFocus: false,
          pauseOnHover: false,
        } ).mount();
        new Splide( '#partners-splide', {
            type   : 'slide',
            rewind: true,
            perPage: 6,
            perMove: 1,
            pagination: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
        } ).mount();
    </script>
  </body>
<html>
