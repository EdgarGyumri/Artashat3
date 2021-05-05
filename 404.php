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
    <link href="css/error-page.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/subscribe.css">
    <script src="js/main.js">
    </script>
  </head>
  <body id="body">
      <?php require_once 'header.php'; ?>
      <main>
        <section id="error-page">
          <span></span>
          <strong>Տվյալ էջը գոյություն չունի</strong>
        </section>

        <section id="site-map">
          <div class="container">
            <?php require_once 'site-map-content.php'; ?>
          </div>
        </section>
        <?php require_once 'subscribe.php'; ?>
      </main>
      <?php require_once 'footer.php'; ?>
  </body>
</html>
