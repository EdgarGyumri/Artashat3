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
            <span>Աշխատանք</span>
          </li>
          </ul>

          <h1 class="heading">Աշխատանք</h1>
        </div>

        <div class="container">
          <div class="job-container">
          <div id="job-left" class="job-left">
            <h2>Թափուր հաստիքներ</h2>

            <div class="job-card">
              <div>
                <h3>ReactJS Engineer</h3>
                <span>Yerevan, Armenia</span>
              </div>
              <div>
                <h3>IT Team</h3>
                <span>Full time</span>
              </div>
            </div>

            <div class="job-card">
              <div>
                <h3>Communication and Marketing Specialist</h3>
                <span>Yerevan, Armenia</span>
              </div>
              <div>
                <h3>IT Team</h3>
                <span>Full time</span>
              </div>
            </div>

            <div class="job-card">
              <div>
                <h3>Digital Marketing Specialist</h3>
                <span>Yerevan, Armenia</span>
              </div>
              <div>
                <h3>IT Team</h3>
                <span>Full time</span>
              </div>
            </div>

            <div class="job-card">
              <div>
                <h3>SMM Specialist</h3>
                <span>Yerevan, Armenia</span>
              </div>
              <div>
                <h3>IT Team</h3>
                <span>Full time</span>
              </div>
            </div>

            <div class="job-card">
              <div>
                <h3>Senior/Middle Paid SMM Specialist</h3>
                <span>Yerevan, Armenia</span>
              </div>
              <div>
                <h3>IT Team</h3>
                <span>Full time</span>
              </div>
            </div>

          </div>

          <div id="job-right" class="job-right">
            <h2>Դիմել թափուր հաստիքի համար</h2>

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