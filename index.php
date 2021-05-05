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
    </style>
    <!-- <script src="js/main.js"></script> -->
  </head>
  <body id="body">
    <?php require_once 'header.php' ?>
    <main>
      <section  id="homepage-top">
          <div class="image-container" style=>
            <div class="splide">
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
              Համեղ և սննդարար 
              պահածոներ
              Էկոլոգիապես մաքուր հումք
            </h1>
            <a href="#" class="btn btn-white">Ավելին</a>
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
                  Համեղ և սննդարար 
                  պահածոներ
                  Էկոլոգիապես մաքուր հումք
                </h1>
                <a href="#" class="btn btn-white">Ավելին</a>
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
              <h2>Մեր մասին</h2>
              <p>
                Մեր ընկերությունը ստեղծվել է  16.12.2015թ, ընկերության հիմնադիր՝ Արտակ Հասրաթյանի
                մտահաղացմամբ։ Ստեղծվեց մի արտադրամաս, որը հնարավորություն կտար իրեն պատկանող
                դաշտերի բերքը վերամշակելու և Մոսկվայում իրեն իսկ պատկանող արտադրամասին հայկական
                խաղողի տերև մատակարարելու համար:
              </p>

              <button type="submit" class="btn" aria-label="Read more">Ավելին</button>
            </div>
          </div>
        </section>

        <section class="homepage-map">
          <section id="product">
            <div class="container">
              <h2 class="mb-55">Արտադրանք</h2>
              <div class="product-section">
                <figure>
                  <div>
                    <img src="images/products/product-home-1.svg" alt="Background-iteam 1"/>
                    <img src="images/products/jam.svg" alt="Product iteam 1"/>
                  </div>
                  <figcaption>
                    <a href="#">Ջեմեր</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/mountain.svg" alt="Background-iteam 2"/>
                    <img src="images/products/tomatoes.svg" alt="Product iteam 2"/>
                  </div>
                  <figcaption>
                    <a href="#">Տոմատի սոուսներ</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/church.svg" alt="Background-iteam 3"/>
                    <img src="images/products/apricot.svg" alt="Product iteam 3"/>
                  </div>
                  <figcaption>
                    <a href="#">Թարմ քամած հյութեր</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/product-home-3.svg" alt="Background-iteam 4"/>
                    <img src="images/products/cucumber.svg" alt="Product iteam 4" />
                  </div>
                  <figcaption>
                    <a href="#" class="read-more">Մարինադներ</a>
                  </figcaption>
                </figure>

                <figure>
                  <div>
                    <img src="images/products/product-home-2.svg" alt="Background-iteam 5"/>
                    <img src="images/products/jam-2.svg" alt="Product iteam 5"/>
                  </div>
                  <figcaption>
                    <a href="#">Կոմպոտներ</a>
                  </figcaption>
                </figure>

                <figure>
                  <a href="#" aria-label="see all products" class="more">
                    Դիտել բոլորը
                    <i class="more-icon"></i>
                  </a>
                </figure>
            </div>
            </div>

          </section>

          <section id="gallery-videos">
            <div class="container">
              <h2 class="mb-55">Տեսադարան</h2>

              <div class="slider-container">
                <div class="slide-iteams">
                  <i class="prev"></i>
                  <i class="next"></i>
                  <div class="slide-row">
                      <div>
                        <iframe
                          src="https://www.youtube.com/embed/gu9_m0vm7fM" 
                          frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen>
                        </iframe>
                      </div>
                      <div>
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </div>
                      <div>
                        <video controls>
                          <source src="video/arcnet.io_7-sec_.webm" type="video/webm">
                          <source src="video/arcnet.io(7-sec).mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                </div>
              </div>

            </div>
          </section>

          <section id="gallery">
            <div class="container">
              <h2 class="mb-55">Նկարադարան</h2>

              <div class="slider-container">
                <div class="slide-iteams">
                  <i class="prev"></i>
                  <i class="next"></i>

                  <div class="slide-row">
                    <div>
                      <img src="images/gallery-photo-1.jpg" alt="">
                    </div>
                    <div>
                      <img src="images/gallery-photo-2.jpg" alt="">
                    </div>
                    <div>
                      <img src="images/gallery-photo-3.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>
        </section>

        <section id="news">
          <div class="container">
            <h2 class="mb-55">Նորություններ</h2>
            <div class="slider-container">
              <div class="slide-iteams">
                <i class="prev"></i>
                <i class="next"></i>

                <div class="news-container">
                  <div class="news-card slider-card">
                    <div class="news-image">
                      <img src="images/news-iteam.jpg" alt="News Iteam">
                    </div>
                    <div>
                      <div class="date">
                        <span>07 Օգոստոս, 2020</span>
                        <a href="#" arial-label="share this news" class="share">
                          <span class="share-icon">
                            <span></span>
                          </span>    
                          <span class="text">Կիսվել</span>
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
                        Կարդալ ավելին
                        <span class="more-icon"></span>
                      </a>
                      </div>
                    </div>
                  </div>

                  <div class="news-card slider-card">
                    <div class="news-image">
                      <img src="images/news-iteam.jpg" alt="News Iteam">
                    </div>
                    <div>
                      <div class="date">
                        <span>07 Օգոստոս, 2020</span>
                        <a href="#" arial-label="share this news" class="share">
                          <span class="share-icon">
                            <span></span>
                          </span>   
                          <span class="text">Կիսվել</span>
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
                        Կարդալ ավելին
                        <span class="more-icon"></span>
                      </a>
                      </div>
                    </div>
                  </div>

                  <div class="news-card slider-card">
                    <div class="news-image">
                      <img src="images/news-iteam.jpg" alt="News Iteam">
                    </div>
                    <div>
                      <div class="date">
                        <span>07 Օգոստոս, 2020</span>
                        <a href="#" arial-label="share this news" class="share">
                          <span class="share-icon">
                            <span></span>
                          </span>  
                          <span class="text">Կիսվել</span>
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
                          Կարդալ ավելին
                          <span class="more-icon"></span>
                        </a>
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
          <h2 class="mb-55">Մեր գործընկերները</h2>
          <div class="flex-row">
              <div>
                <a href="#">
                  <img src="images/partners/amc.svg" alt="Amc logo"/>
                </a>
              </div>

              <div>
                <a href="#">
                <img src="images/partners/boin.svg" alt="boin logo"/>
                </a>
              </div>

              <div>
                <a href="#">
                  <img src="images/partners/blue-sky.svg" alt="Amc logo"/>
                </a>
              </div>

              <div>
                <a href="#">
                  <img src="images/partners/connies.svg" alt="Connies logo"/>
                </a>
              </div>

              <div>
                <a href="#">
                  <img src="images/partners/maxima.svg" alt="Maxima logo"/>
                </a>
              </div>

              <div>
                <a href="#">
                  <img src="images/partners/kaufland.svg" alt="Kaufland logo"/>
                </a>
              </div>
            </div>
          </div>
        </section>

        <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      var splide = new Splide('.splide', {
        autoplay: true,
        rewind: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        arrowPath: 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
      });

      splide.mount();
    </script>
  </body>
<html>
