<style>
  .languages-menu {
    height: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .languages-menu__hidden{
    display: none;
  }

  .languages-menu__hidden a {
    padding-bottom: 15px;
  }

  .languages-menu:hover .languages-menu__hidden{
    display: block;
    position: absolute;
    max-width: 1045px;
    background-color: #fffefe;
    box-shadow: 3px 8px 25px rgba(0, 0, 0, 0.16);
    -moz-box-shadow: 3px 8px 25px rgba(0, 0, 0, 0.16);
    -webkit-box-shadow: 3px 8px 25px rgba(0, 0, 0, 0.16);
    border-radius: 10px;
    color: #0f1f2b;
    padding: 20px;
    top: 80px;
    right: 3px;
  }
</style>
<header>
  <a class="logo" href="index.php"></a>
  <div id="mobile-menu">
    <span class="line"></span>
    <div class="languages-mobile">
      <i></i> <a href="#">ՀԱՅ</a> <a href="#">ENG</a> <a href="#">РУС</a>
    </div>
    <div>
      <form class="navbar-search">
        <div>
          <input placeholder="Որոնել..." type="text"> <button type="submit"></button>
        </div>
      </form>
    </div>
    <div class="main-menu">
      <ul>
        <li><a href="#">Գլխավոր</a> <span class="line"></span></li>
        <li>
          <a href="#"><span>Մեր մասին</span> <i class="caret"></i></a> <span class="line"></span>
          <ul>
            <li>
              <a href="#"><span>Կատեգորիա</span> <i class="caret"></i></a> <span class="line"></span>
              <ul>
                <li>
                  <a href="#"><span>Կատեգորիա 1</span> <i class="caret"></i></a> <span class="line"></span>
                  <ul>
                    <li>
                      <a href="#"><span>Կատեգորիա 2</span> <i class="caret"></i></a> <span class="line"></span>
                      <ul>
                        <li><a href="#"><span>Կատեգորիա</span> <i class="caret"></i></a> <span class="line"></span></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><span>Կատեգորիա</span> <i class="caret"></i></a> <span class="line"></span></li>
          </ul>
        </li>
        <li><a href="#"><span>Արտադրանք</span> <i class="caret"></i></a> <span class="line"></span></li>
        <li><a href="#"><span>Տեսադարան</span> <i class="caret"></i></a> <span class="line"></span></li>
        <li><a href="#"><span>Նկարադարան</span> <i class="caret"></i></a> <span class="line"></span></li>
        <li><a href="#"><span>Նորություններ</span> <i class="caret"></i></a> <span class="line"></span></li>
        <li><a href="#"><span>Տեխնալոգիաներ</span></a> <span class="line"></span></li>
        <li><a href="#"><span>Կապ</span></a> <span class="line"></span></li>
      </ul>
    </div>
  </div>
  <nav class="navbar">
    <a class="menu" href="index.php">Գլխավոր</a> <a class="menu show-menu" href="about-team.php">Մեր մասին <i class="caret"></i></a> <a class="menu show-menu" href="products.php">Արտադրանք <i class="caret"></i></a> <a class="menu show-menu" href="gallery-video.php">Տեսադարան <i class="caret"></i></a> <a class="menu show-menu" href="gallery.php">Նկարադարան <i class="caret"></i></a> <a class="menu show-menu" href="news.php">Նորություններ <i class="caret"></i></a> <a class="menu" href="technology.php">Տեխնալոգիաներ</a> <a class="menu" href="contact-us.php">Կապ</a>
    <div class="hidden-menu">
      <div class="flex-row">
        <div class="menu-items">
          <div>
            <strong>Կատեգորիա</strong> <span></span>
            <ul>
              <li>
                <a>Տեսակ</a>
                <ul class="menu-level-1">
                  <li>
                    <a href="#">Menu-level-1</a>
                    <ul class="menu-level-2">
                      <li>
                        <a href="#">Menu-level-2</a>
                        <ul class="menu-level-3">
                          <li>
                            <a href="#">Menu-level-3</a>
                            <ul class="menu-level-4">
                              <li>
                                <a href="#">Menu-level-4</a>
                                <ul class="menu-level-5">
                                  <li><a href="#">Menu-level-5</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul><a href="#">Տեսակ</a>
            <ul class="menu-level-1">
              <li><a href="#">Menu-level-1</a></li>
            </ul><a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a>
          </div>
          <div>
            <strong>Կատեգորիա</strong> <span></span> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a>
          </div>
          <div>
            <strong>Կատեգորիա</strong> <span></span> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a>
          </div>
          <div>
            <strong>Կատեգորիա</strong> <span></span> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a>
          </div>
          <div>
            <strong>Կատեգորիա</strong> <span></span> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a> <a href="#">Տեսակ</a>
          </div>
        </div>
        <div><img alt="menu image" height="366" src="images/menu-image.jpg" width="382"></div>
      </div>
    </div>
    <form class="navbar-search">
      <div>
        <input placeholder="Որոնել..." type="text"> <button type="submit"></button>
      </div>
    </form>
    <div class="languages-menu">
      <a class="menu show-menu" href="#">ՀԱՅ <i class="caret"></i></a>
      <div class="languages-menu__hidden">
        <a href="#">ENG</a> <a href="#">РУС</a>
      </div>
    </div>
  </nav><button class="menu-icon" onclick="myFunction()" type="button"></button>
</header>
