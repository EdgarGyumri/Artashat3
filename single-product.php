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
    <script src="js/main.js">
    </script>
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
                    <img alt="Product image" src="images/product-single.png">
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
          <div class="slider-container">
            <div class="slide-iteams">
              <i class="prev"></i> 
              <i class="next"></i>
              <div class="products-list prduct-slider">

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

              </div>
            </div>
          </div>
        </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>