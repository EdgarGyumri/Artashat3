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
    <link rel="stylesheet" type="text/css" href="css/contact-us.css">
    <script src="main.js"></script>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="contact-us">
      <div class="container">
        <ul class="breadcrumb-menu">
          <li>
            <a href="#">Գլխավոր</a>
            <i></i>
          </li>
        <li>
          <span>Կապ</span>
        </li>
        </ul>

        <h1 class="heading mb-50">Կապնվեք մեզ հետ</h1>

        <div class="flex-row">
          <div class="contacts-left">
            <form class="mb-30">
              <div>
                <label class="mb-15" for="name">Անուն, Ազգանուն</label>
                <input type="tetx" id="name" class="input-width">
              </div>
              <div class="mt-45">
                <label class="mb-15" for="email">Էլ․ փոստի հասցե</label>
                <input type="email" id="email" class="input-width">
              </div>
              <div class="mt-45">
                <label class="mb-15" for="message">Հաղորդագրությունը</label>
                <textarea id="message"></textarea>
              </div>
              <div class="text-right mt-25">
                <button type="submit" class="btn">Ուղարկել</button>
              </div>
            </form>
          </div>

          <div class="contacts-right">
            <div class="flex-row">
            <div>
              <i class="icon-map"></i>
              <div>
                <span>Հայաստան, Արարատի մարզ Արարատյան 37փ․</span>
              </div>
            </div>
            <div>
              <i class="icon-phone"></i>
              <div>
                <a href="callto:+37455-21-22-21">+37455-21-22-21</a>
                <a href="callto:+37455-39-93-39">+37455-39-93-39</a>
              </div>
            </div>
            <div>
              <i class="icon-email"></i>
              <div>
                <a href="mailto:info@artashat.ru">info@artashat.ru</a>
                <a href="mailto:it@artashat.ru">it@artashat.ru</a>
              </div>
            </div>
            </div>
            <div class="map">
            <!-- <img src="images/map-contact.svg" alt="Map" width="830" height="457"> -->
            here must be map
            </div>
          </div>
        </div>

      </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
<html>