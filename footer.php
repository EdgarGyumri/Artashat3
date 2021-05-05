<footer>
  <div class="container">
    <div class="flex-row">
      <div>
        <a class="footer-logo" href="#" aria-label="project logo on footer"></a>
      </div>
      <div>
        <a class="menu" href="#" aria-label="">Միջոցառումներ</a> 
        <a class="menu" href="#" aria-label="">Կանոնադրություն</a> 
        <a class="menu" href="#" aria-label="">Հայաստանի մասին</a> 
        <a class="menu" href="#" aria-label="">Օգտվելու պայմաններ</a> 
        <a class="menu" href="#" aria-label="">Հայտարարություններ</a>
      </div>
      <div>
        <a class="menu" href="#" aria-label="">Մեր թիմը</a> 
        <a class="menu" href="#" aria-label="">Ձեռքբերումներ</a> 
        <a class="menu" href="#" aria-label="">Տնօրենի խոսքը</a> 
        <a class="menu" href="#" aria-label="">Կայքի քարտեզ</a> 
        <a class="menu" href="#" aria-label="">Աշխատանք</a>
      </div>
      <div>
        <h2>Հետադարձ կապ</h2>
        <a href="mailto:info@artashat.ru" aria-label="">Էլ․հասցե՝ info@artashat.ru</a> 
        <span>Հասցե՝ Արարատյան փ․, 37</span> 
        <a href="callto:+374%2055-51-21-22" aria-label="">Հեռ․՝ (+374)55-51-21-22</a>
      </div>
      <div id="social-links" class="social-links">
        <h2>Գտեք մեզ սոց․ցանցերում</h2>
        <p>
          <a class="social facebook" href="#" aria-label=""></a>
          <a class="social instagram" href="#" aria-label=""></a>
          <a class="social twitter" href="#" aria-label=""></a>
        </p>
        <small>&copy; 2020 Artashat llc. ALL RIGHTS RESERVED.</small>
      </div>
    </div>
    <div id="fixed-icons" class="fixed-icons">
      <a class="jump-top" href="#body" aria-label="jump to the top of this page"></a>
      <a class="contact" href="#" aria-label="contact us"></a>
      <a class="call" href="#popUpOverlay" aria-label="link for call"></a>
    </div>

    <div id="popUpOverlay">
        <div class="popUpBox">
          <h2>
            Հետզանգի պատվեր
            <a class="close" href="#">&times;</a>
          </h2>

          <form action="#" method="get">
            <div class="mb-15">
              <label class="mb-15" for="name">Անուն, Ազգանուն</label>
              <input type="tetx" id="name">
            </div>

            <div class="mt-45 mb-15">
              <label class="mb-15" for="email">Էլ․ փոստի հասցե</label>
              <input type="email" id="email">
            </div>

            <div class="mt-45 mb-15">
              <label class="mb-15" for="phone">Հեռախոսահամար</label>
              
              <div class="form-bottom">
                <div class="dropdown-languages">
                  <button type="button" class="dropbtn">
                    <i class="flag"></i>
                    <i class="arrow-down"></i>
                  </button>

                  <div class="dropdown-content">
                    <a href="#">
                      <i class="flag"></i>
                    </a>
                    <a href="#">
                      <i class="flag"></i>
                    </a>
                    <a href="#">
                      <i class="flag"></i>
                    </a>
                  </div>
                </div>
                <input type="number" id="phone" placeholder="(55) xx-xx-xx">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn">Պատվիրել</a>
            </div>
          </form> 
        </div>
      </div>
  </div>
</footer>
<script>
  const jumpTop = document.querySelector('.jump-top');
  const flexRowBtn = document.querySelector('.flex-row-btn');
  const subscribeMessage = document.querySelector('.subscribe-message')

  jumpTop.addEventListener('click', event => {
    event.preventDefault();
    const blockClass = jumpTop.getAttribute('href');
    document.querySelector('' + blockClass).scrollIntoView({
      behavior: "smooth",
      block: "start"
    })
  })

  flexRowBtn.addEventListener('click', event => {
    event.preventDefault()
    subscribeMessage.classList.add('active')
  })


</script>