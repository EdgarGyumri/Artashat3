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
    <link href="css/products.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="js/main.js"></script>
    <style>
      .splide__arrow svg {
        width: 50px;
        height: 50px;
      }
      .splide__arrow:first-child{
        left: -55px;
      }
      .splide__arrow:last-child{
        right: -55px;
      }
      .splide__arrow{
        background: transparent;
        width: 32px;
        height: 32px;
      }
      .product-single-image {
        background: url('images/single-product2.png') 100% 100% no-repeat;
        background-size: cover;
        width: 600px;
        height: 400px;
        border: 1px solid black;
      }

      .product-single-image:hover {
        background-size: auto;
        background-position-x: calc(var(--x, 0) * 1px);
        background-position-y: calc(var(--y, 0) * 1px);
      }
    </style>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="products">
        <div class="container">
          <ul class="breadcrumb-menu">
            <li>
              <a href="#">Գլխավոր</a> 
              <i></i>
            </li>
            <li>
              <a href="#">Արտադրանք</a> 
              <i></i>
            </li>
            <li>
              <span>Վարունգի մարինադ</span>
            </li>
          </ul>
          <div class="single-product">
            <div class="product-top">
              <div class="product-left">
                <div class="producst-small">
                  <div>
                    <img alt="Products like this product 1" src="images/product-small-1.jpg">
                  </div>
                  <div>
                    <img alt="Products like this product 1" src="images/product-small-2.jpg">
                  </div>
                </div>
                <div class="product">
                  <div>
                    <div class="product-single-image"></div>
                  </div>
                  <a href="#">
                    <i class="back-icon"></i>  
                    Վերադառնալ ապրանքատեսակներին
                  </a>
                </div>
              </div>
              <div>
                <h1 class="heading mb-40">Վարունգի մարինադ</h1>
                <h2>Բաղադրություն</h2>
                <p>վարունգ, ջուր, աղ, մաղադանոս,սամիթ, նեխուր, դափնու տերև, սև պղպեղ, թթվայնության կարգավորիչ-սառցային խացախաթթու:</p>
                <h2>Քաշը</h2>
                <p>
                  <span>1000գ․</span> | 
                  <span>730գ․</span> | 
                  <span>430գ․</span>
                </p>
                <div class="about-product">
                  <p>Պահպանման ժամկետը՝ 2 տարի</p>
                  <p>Պահպանման պայմանները՝ 0-20</p>
                  <p>Բաց տարան պահել սառնարանում։</p>
                </div>
                <p>
                  <strong>Կատեգորիաներ</strong> 
                  <span>կատեգորիա1</span> 
                  <span>կատեգորիա1</span>
                  <span>կատեգորիա1</span>
                </p>
              </div>
            </div>
          </div>
          <h3 class="line-after">Նման ապրանքատեսակներ</h3>
          <div class="splide" id="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                      <figure class="product-info">
                        <div>
                          <img alt="Product image" src="images/products/apricot.svg">
                        </div>
                        <figcaption>
                          <h2>Ծիրանի ջեմ</h2>
                          <p>
                            <span>1000գ․</span> | 
                            <span>730գ․</span> | 
                            <span>430գ․</span>
                          </p>
                        </figcaption>
                      </figure>
                    </li>
                    <li class="splide__slide">
                      <figure class="product-info">
                        <div>
                          <img alt="Product image" src="images/products/apricot.svg">
                        </div>
                        <figcaption>
                          <h2>Ծիրանի ջեմ</h2>
                          <p>
                            <span>1000գ․</span> | 
                            <span>730գ․</span> | 
                            <span>430գ․</span>
                          </p>
                        </figcaption>
                      </figure>
                    </li>
                    <li class="splide__slide">
                      <figure class="product-info">
                        <div>
                          <img alt="Product image" src="images/products/apricot.svg">
                        </div>
                        <figcaption>
                          <h2>Ծիրանի ջեմ</h2>
                          <p>
                            <span>1000գ․</span> | 
                            <span>730գ․</span> | 
                            <span>430գ․</span>
                          </p>
                        </figcaption>
                      </figure>
                    </li>
                </ul>
            </div>
        </div>
          <!-- <div class="splide" id="splide">
            <div class="splide__track">
              
              <ul class="splide__list">
                <li class="splide__slide">
                </li>
                <li class="splide__slide">
                  <figure class="product-info">
                    <div>
                      <img alt="Product image" src="images/products/apricot.svg">
                    </div>
                    <figcaption>
                      <h2>Ծիրանի ջեմ</h2>
                      <p>
                        <span>1000գ․</span> | 
                        <span>730գ․</span> | 
                        <span>430գ․</span>
                      </p>
                    </figcaption>
                  </figure>
                </li>
                <li class="splide__slide">
                  <figure class="product-info">
                    <div>
                      <img alt="Product image" src="images/products/apricot.svg">
                    </div>
                    <figcaption>
                      <h2>Ծիրանի ջեմ</h2>
                      <p>
                        <span>1000գ․</span> | 
                        <span>730գ․</span> | 
                        <span>430գ․</span>
                      </p>
                    </figcaption>
                  </figure>
                </li>
                <li class="splide__slide">
                  <figure class="product-info">
                    <div>
                      <img alt="Product image" src="images/products/apricot.svg">
                    </div>
                    <figcaption>
                      <h2>Ծիրանի ջեմ</h2>
                      <p>
                        <span>1000գ․</span> | 
                        <span>730գ․</span> | 
                        <span>430գ․</span>
                      </p>
                    </figcaption>
                  </figure>
                </li>

              </ul>
            </div>
          </div> -->
        </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      const imageSize = { width: 1920, height: 1080 };
      const image = document.querySelector('.product-single-image');

      image.addEventListener('mousemove', (event) => {
        const rect = event.target.getBoundingClientRect();
        image.style.setProperty('--x', (rect.left - event.clientX) * (imageSize.width - rect.width) / rect.width);
        image.style.setProperty('--y', (rect.top - event.clientY) * (imageSize.height - rect.height) / rect.height);
      });

      new Splide( '#splide', {
          type: 'loop',
          perPage: 4,
          perMove: 1,
          rewind: true,
          pagination: false,
          autoplay: true,
          pauseOnFocus: false,
          pauseOnHover: false,
        } ).mount();
    </script>
  </body>
</html>