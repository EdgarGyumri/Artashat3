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
    <link href="css/site-map.css" rel="stylesheet" type="text/css">
    <script src="js/main.js">
    </script>
  </head>
  <body id="body">
      <?php require_once 'header.php'; ?>
      <main>
        <section id="site-map">
          <div class="container">
            <ul class="breadcrumb-menu">
              <li>
                <a href="#">Գլխավոր</a>
                <i></i>
              </li>
              <li>
                <span>Կայքի քարտեզ</span>
              </li>
            </ul>
          
            <?php require_once 'site-map-content.php'; ?>
          </div>
        </section>
        <?php require_once 'subscribe.php'; ?>
      </main>
      <?php require_once 'footer.php'; ?>
  </body>
</html>
