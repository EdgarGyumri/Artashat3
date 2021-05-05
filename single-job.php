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
    <link rel="stylesheet" type="text/css" href="css/jobs.css">
    <script src="js/main.js"></script>
  </head>
  <body id="body">
    <?php require_once 'header.php'; ?>
    <main>
      <section id="jobs">
        <div class="container">
          <ul class="breadcrumb-menu">
            <li>
              <a href="#">Գլխավոր</a>
              <i></i>
            </li>
          <li>
            <a href="#">Աշխատանք</a>
            <i></i>
          </li>
          <li>
            <span>ReactJS Engineer</span>
          </li>
          </ul>
        </div>

        <div class="jobs-top">
          <img src="images/jobs.jpg" alt="jobs image">
          <div class="top-title">
            <h1>ReactJS Developer</h1>
            <p>Full-Time, Yerevan, Armenia</p>
          </div>
        </div>

         <!-- top slider -->
          <!-- <div class="container">
           <div class="slider-container">
            <div class="slider-images slider-big">
              <i class="prev"></i>
              <i class="next"></i>

              <div class="image-container">
                <img src="images/jobs.jpg" alt="Job top image">
              </div>

              <div class="top-title">
                <h1>ReactJS Developer</h1>
                <p>Full-Time, Yerevan, Armenia</p>
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
          <div class="job-container job-single">
            <div>
              <h2>ReactJS Developer</h2>
              <span></span>
              <p>Full-Time, Yerevan, Armenia</p>

              <h3>Job responsibilities</h3>

              <ul>
                <li>Develop projects on ReactJS from scratch;</li>
                <li>Build scalable and efficient UI;</li>
                <li>Communicate with other teams to understand and prioritize features and bugs.</li>
                <li>Develop projects on ReactJS from scratch;</li>
              </ul>

              <h3>Minimum qualifications</h3>

              <ul>
                <li>Minimum of 2 years of experience as a developer;</li>
                <li>1+ years of ReactJs/NodeJs/AngularJs/jQuery or whateverJs experience;</li>
                <li>Deep understanding of JavaScript language and current trends;</li>
                <li>Knowledge of Redux, reselect, Websockets and modern browser APIs;</li>
              </ul>

            </div>

            <div>
              <h2>Դիմել այս հաստիքի համար</h2>

              <form class="mb-30 jobs-form">
                <div>
                  <label class="mb-15" for="name">Անուն, Ազգանուն</label>
                  <input type="tetx" id="name">
                </div>

                <div class="mt-45">
                  <label class="mb-15" for="email">Էլ․ փոստի հասցե</label>
                  <input type="email" id="email">
                </div>

                <div class="mt-45">
                  <label class="mb-15" for="phone">Հեռախոսահամար</label>
                  <input type="number" id="phone">
                  </div>

                  <div class="mt-45 overflow">
                  <label class="mb-15" for="cv">Ինքնակենսագրական</label>
                  <span>Կցել</span>
                  <input type="file" id="cv">
                  </div>

                  <div class="mt-45 vacancy" onclick="toggle()">
                  <label class="mb-15" for="vacancy-drowdown">Հաստիք, որի համար դիմում եք</label>
                  <input type="text" id="vacancy-drowdown">
                  <i class="caret"></i>
                  <div id="select-vacancy">
                      <span>vacancy 1</span>
                      <span>vacancy 2</span>
                      <span>vacancy 3</span>
                  </div>
                  </div>


                <div class="text-center apply mt-25">
                  <button type="submit" class="btn">Դիմել</button>
                  <p>կամ</p>
                  <p>
                    Ուղարկել ինքնակենսագրականը
                    <a href="mailto:jobs@yahoo.com">jobs@yahoo.com </a>
                    էլ․հասցեին
                  </p>
                </div>
              </form>
            </div>

          </div>
        </div>
      </section>
      <?php require_once 'subscribe.php'; ?>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
<html>
