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
    <link rel="stylesheet" type="text/css" href="css/events.css">
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="js/main.js"></script>
    <style>
      .splide__arrow svg {
        width: 50px;
        height: 50px;
      }
      #splide .splide__arrow:first-child{
        left: -55px;
      }
      #splide .splide__arrow:last-child{
        right: -55px;
      }
      #splide .splide__arrow{
        width: 45px;
        height: 45px;
        background: transparent;
      }
    </style>
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

          <div class="slider-container">
            <div class="slider-iteam slider-big">
              <div class="splide" id="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <img src="images/event-image.jpg" alt="Event image">
                      <div class="events-info">
                        <h1>
                          Բաստա <br/>
                          Մեծ համերգ Երևանում 
                        </h1>
                        <p>
                          <span class="icon-map"></span>
                          <span class="text">Հոկտեմբերի 22, 2020, 06։00-11։55</span>
                        </p>
                        <p>
                          <span class="icon-clock"></span>
                          <span class="text">Կարեն Դեմիրճյանի անվան մարզահամերգային համալիր</span>
                        </p>
                        <button type="button" class="btn">Ավելին</button>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <img src="images/event-image.jpg" alt="Event image">
                      <div class="events-info">
                        <h1>
                          Բաստա <br/>
                          Մեծ համերգ Երևանում 
                        </h1>
                        <p>
                          <span class="icon-map"></span>
                          <span class="text">Հոկտեմբերի 22, 2020, 06։00-11։55</span>
                        </p>
                        <p>
                          <span class="icon-clock"></span>
                          <span class="text">Կարեն Դեմիրճյանի անվան մարզահամերգային համալիր</span>
                        </p>
                        <button type="button" class="btn">Ավելին</button>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <img src="images/event-image.jpg" alt="Event image">
                      <div class="events-info">
                        <h1>
                          Բաստա <br/>
                          Մեծ համերգ Երևանում 
                        </h1>
                        <p>
                          <span class="icon-map"></span>
                          <span class="text">Հոկտեմբերի 22, 2020, 06։00-11։55</span>
                        </p>
                        <p>
                          <span class="icon-clock"></span>
                          <span class="text">Կարեն Դեմիրճյանի անվան մարզահամերգային համալիր</span>
                        </p>
                        <button type="button" class="btn">Ավելին</button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="events-information">
            <div>
              <h2>Upcoming events</h2>
            </div>
            <div id="events-date" class="events-date">
              <a href="#">Այսօր</a>
              <a href="#">Այս շաբաթ</a>
              <a href="#" class="category">
                Կատեգորիա
                <i class="caret"></i>
              </a>
              <div class="hidden-category">
                <a href="#">Ներկայացումներ</a>
                <a href="#">Ներկայացումներ</a>
                <a href="#">Ներկայացումներ</a>
                <a href="#">Ներկայացումներ</a>
                <a href="#">Ներկայացումներ</a>
                <a href="#">Ներկայացումներ</a>
              </div>
            </div>
          </div>

          <div class="flex-row events-list">
            <figure>
              <div>
                <img src="images/events-img.jpg" alt="Events image 1">
              </div>
              <figcaption>
                <div class="flex-row">
                  <div>
                    <h3 class="text-green">Նոյ</h3>
                    <span>18</span>
                  </div>
                  <div>
                    <h3>Թանգարանների միջազգային օր</h3>
                    <p>Սարդարապատի հուշահամալիր,Հայոց ազգագրության թանգարան</p>
                  </div>
                </div>
                <div class="read-more">
                  <a href="#" aria-label="Read more" class="more">
                    Կարդալ ավելին
                    <i class="more-icon"></i> 
                  </a>
                </div>
              </figcaption>
            </figure>

            <figure>
              <div>
                <img src="images/events-img.jpg" alt="Events image 1">
              </div>
              <figcaption>
                <div class="flex-row">
                  <div>
                    <h3 class="text-green">Նոյ</h3>
                    <span>18</span>
                  </div>
                  <div>
                    <h3>Թանգարանների միջազգային օր</h3>
                    <p>Սարդարապատի հուշահամալիր,Հայոց ազգագրության թանգարան</p>
                  </div>
                </div>
                <div class="read-more">
                  <a href="#" aria-label="Read more" class="more">
                    Կարդալ ավելին
                    <i class="more-icon"></i> 
                  </a>
                </div>
              </figcaption>
            </figure>

            <figure>
              <div>
                <img src="images/events-img.jpg" alt="Events image 1">
              </div>
              <figcaption>
                <div class="flex-row">
                  <div>
                    <h3 class="text-green">Նոյ</h3>
                    <span>18</span>
                  </div>
                  <div>
                    <h3>Թանգարանների միջազգային օր</h3>
                    <p>Սարդարապատի հուշահամալիր,Հայոց ազգագրության թանգարան</p>
                  </div>
                </div>
                <div class="read-more">
                  <a href="#" aria-label="Read more" class="more">
                    Կարդալ ավելին
                    <i class="more-icon"></i> 
                  </a>
                </div>
              </figcaption>
            </figure>

            <figure>
              <div>
                <img src="images/events-img.jpg" alt="Events image 1">
              </div>
              <figcaption>
                <div class="flex-row">
                  <div>
                    <h3 class="text-green">Նոյ</h3>
                    <span>18</span>
                  </div>
                  <div>
                    <h3>Թանգարանների միջազգային օր</h3>
                    <p>Սարդարապատի հուշահամալիր,Հայոց ազգագրության թանգարան</p>
                  </div>
                </div>
                <div class="read-more">
                  <a href="#" aria-label="Read more" class="more">
                    Կարդալ ավելին
                    <i class="more-icon"></i> 
                  </a>
                </div>
              </figcaption>
            </figure>

          </div>
        </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      var splide = new Splide('#splide', {
        autoplay: true,
        rewind: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        drag: true,
      });

      splide.mount();
    </script>
  </body>
<html>