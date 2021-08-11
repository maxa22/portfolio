<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mladen portfolio</title>
  <meta name="description" content="Creative and ambitious web developer. Problem solver, patient, ready to cooperate.Main stack Php, Javascript, Mysql, CSS and HTML.">
  <meta name="keyword" content="portfolio, javascript, php, developer">
  <meta name="twitter:title" content="Mladen Đoković | Front End Developer | Backend Developer" />
  <meta name="twitter:description" content="Web developer" />
  <script rel="preload" src="https://kit.fontawesome.com/3bb373b9eb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin />

  <link rel="preload"
      as="style"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" />

  <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"
      media="print" onload="this.media='all'" />
  
  <link rel="stylesheet" href="style/style.css">
  <noscript>
      <link rel="stylesheet" href="style.css">
  </noscript>
</head>
<body class="relative">
  <nav class="navigation">
    <div class="navigation__hamburger">
      <div class="navigation__hamburger-container">
        <span class="navigation__hamburger-line navigation__hamburger-one"></span>
        <span class="navigation__hamburger-line navigation__hamburger-two"></span>
        <span class="navigation__hamburger-line navigation__hamburger-three"></span>
      </div>
    </div>
    <div class="navigation__container">
      <div class="navigation__logo">
        <h2>Mladen</h2>
      </div>
      <ul class="navigation__menu">
        <li class="navigation__menu-item"><a href="#hero" class="navigation__menu-link"> <i class="fas fa-home navigation__menu-icon"></i> <span class="navigation__menu-link-text"> Home </span></a></li>
        <li class="navigation__menu-item"><a href="#about" class="navigation__menu-link"> <i class="fas fa-user navigation__menu-icon special-font"></i> <span class="navigation__menu-link-text"> About </a></li>
        <li class="navigation__menu-item"><a href="#portfolio" class="navigation__menu-link"> <i class="fas fa-briefcase navigation__menu-icon"></i> <span class="navigation__menu-link-text"> Portfolio  </span></a></li>
        <li class="navigation__menu-item"><a href="#contact" class="navigation__menu-link"> <i class="fas fa-envelope navigation__menu-icon"></i> <span class="navigation__menu-link-text"> Contact </span></a></li>
      </ul>
    </div>
    <div class="navigation__overlay"></div>
  </nav>
  <header id="hero" >
    <div class="hero">
      <!-- <div class="hero__image"><img src="images/developer.svg" class="hero__image-svg" alt="Web developer"></div> -->
      <div class="hero__text">
        <h1 class="heading-primary" data-aos="fade-down" data-aos-duration="1000"> 
          <span class="weight-400">Hello, I'm Mladen </span><br> <span class="hero__text-description"> WEB DEVELOPER </span>
        </h1>
        <p class="heading-primary-sub" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Pasionate about tehnology and building things for the web. Interested in working on ambitious projects with positive people.</p>
        <div class="button-container" data-aos="fade-in" data-aos-delay="1000" data-aos-duration="1000">  
          <a href="#about" class="btn btn-outline-secondary mr-s-s mb-xs mb-s-0">About me</a>
          <a href="#portfolio" class="btn btn-primary">Projects</a>
        </div>
      </div>
    </div>
  </header>
  <main>
    
    <section id="about">
      <div class="about__container">
        <div class="mb-xl relative">
          <h2 class="heading-secondary">About Me</h2>
        </div>
        <div class="about__text">
          <div class="about__info">
            <h3 class="mb-s" data-aos="fade-up" data-aos-duration="500"> Hi there, </h3> 
            <p class="text-justify" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500"> I'm Mladen Đoković, creative and ambitious web developer. Problem solver, patient, ready to cooperate, ready to learn,
              and always ready to face new challenges. Passionate about writing clean and organized code, 
              and keen on personal and professional development. Current skills:</p>
            <div class="mb-s skills-section" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
              <div><i class="fab fa-php php"></i> <span>PHP</span></div>
              <div><i class="fab fa-js js"></i> <span>Javascript</span></div>
              <div><i class="fas fa-database sql"></i> <span>MySql</span></div>
              <div><i class="fab fa-css3-alt css"></i> <span>CSS</span></div>
              <div><i class="fab fa-html5 html"></i> <span>HTML5</span></div>
            </div>
            <div class="mb-s" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
              <a href="mailto:mldndjkvc@gmail.com" class="about__contact">Email:<span class="about__contact-span">mldndjkvc@gmail.com</span></a>
            </div>
            <div class="mb-l" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
              <a href="tel:0028765176853" class="about__contact">Phone:<span class="about__contact-span">+387 65 176 853</span></a>
            </div>
            <div class="button-container justify-start" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
              <a href="#contact" class="btn btn-outline-secondary mr-s-s mb-xs mb-s-0">Contact me</a>
              <a href="images/mladen.pdf" class="btn btn-primary" download>Download CV</a>
            </div>
          </div>
          <div class="about__image" data-aos="flip-right"  data-aos-duration="1000">
            <img src="images/monitor_2.png" class="w-100" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="portfolio__container">
        <div class="mb-xl relative">
          <h2 class="heading-secondary">Portfolio</h2>
        </div>
        <div class="projects__card-new" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="projects__text">
              <h3 class="mb-s">Calculy</h3>
              <p class="mb-s text-justify">Marketing calculator project. This app is build for logo designers. You can
                create your own calculator with
                multiple questions and options in order to
                present to users the cost of making a logo. </p>
              <div class="made-with mb-m" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="0"> HTML5</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="100"> CCS3</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="200"> JavaScript</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="300"> PHP</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="400"> MYSQL</div>
              </div>
              <div class="projects__links-new" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="https://calculy.lab387.com" class="btn btn-primary" target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
            <img class="projects__image order-2" src="images/calculy_project.png" loading="lazy" alt="Calculy project">
          </div>
          <div class="projects__card-new">
            <img class="projects__image" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" src="images/shorty_project.png" loading="lazy" alt="Shorty project">
            <div class="projects__text mb-s">
              <h3 class="mb-s" data-aos="fade-up" data-aos-delay="200" class="made-with mb-m" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Shorty</h3>
              <p class="mb-s text-justify" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Url shortener app. Make custom links with your username and custom text.
                You can choose between multiple domains.</p>
                <div class="made-with mb-m" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="0"> HTML5</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="100"> CCS3</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="200"> JavaScript</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="300"> PHP</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="400"> MYSQL</div>
                </div>
              <div class="projects__links-new" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="https://shorty.lab387.com" class="btn btn-primary" target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
          </div> 
          <div class="projects__card-new">
            <div class="projects__text">
              <h3 class="mb-s" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Twitter clone</h3>
              <p class="mb-s text-justify" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Twitter clone with functionalities such as posting tweets, sharing and liking.
                You can also comment on tweets, share comments and like them. You can chat with your friends, and
                look at their profile page.</p>
                <div class="made-with mb-m" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="0"> HTML5</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="100"> CCS3</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="200"> JavaScript</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="300"> PHP</div>
                  <div class="made-with-icon " data-aos="fade-up" data-aos-delay="400"> MYSQL</div>
                </div>
              <div class="projects__links-new " data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="https://mladen.dev.lab387.net/mreza/" class="btn btn-primary" target="_blank"
                  rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
            <img class="projects__image order-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" src="images/social_project.png" loading="lazy" alt="Social media project">
          </div>
          <div class="projects__card-new projects__card-modify">
            <img class="projects__image" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="1000" src="images/quizy_project.png" loading="lazy" alt="Room project">
            <div class="projects__text">
              <h3 class="mb-s" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Quizy</h3>
              <p class="mb-s text-justify" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                Create quiz with custom colors, fonts and images. 
                Add questions and multiple options. 
                Also, you can easily connect your marketing applications like Mailchimp, SendinBlue, MailerLite, Google Analytics and Facebook Pixel.</p>
              <div class="made-with mb-m" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000"> HTML5</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"> CCS3</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"> JavaScript</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000"> PHP</div>
                <div class="made-with-icon " data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000"> MYSQL</div>
              </div>
              <div class="projects__links-new" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="https://quizy.lab387.com" class="btn btn-primary"
                  target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
        <div class="projects">
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="contact__container">
        <div class=" mb-xl relative">
          <h2 class="heading-secondary">Let's get in touch</h2>
        </div>
          <h3 class="mb-l">Feel free to reach out to me for booking, hiring or freelance.</h3>
          <form class="contact__form" autocomplete="off">
            <div class="form__name mb-m-m">
              <div class="form__input-container mb-m mb-m-0 mr-m-l">
                <input type="text" id="first-name" name="fullname" class="form__input">
                <label for="first-name" class="form__label">Full name</label>
                <span class="registration-form__error"></span>
              </div>
              <div class="form__input-container mb-m mb-m-0">
                <input type="email" id="email" name="email" class="form__input">
                <label for="email" class="form__label">Email</label>
                <span class="registration-form__error"></span>
              </div>
            </div>
            <div class="form__input-container form__textarea-container mb-l">
              <textarea name="text" id="message" class="form__input form__input-textarea"></textarea>
              <label for="message" class="form__label">Message</label>
              <span class="registration-form__error"></span>
            </div>
            <button class="btn btn-large btn-primary">Send message  <i class="fa fa-send ml-xs"></i></button>
          </form>
        </div>
      </div>
      <div class="line"></div>
      <div class="contact__info">
        <div class="contact__info-container">
          <div class="contact__info-data">
            <div class="mb-s">  
              <span class="about__contact">Name:</span><span class="about__contact-span">Mladen Đoković</span>
            </div>
            <div class="mb-s">  
              <a href="mailto:mldndjkvc@gmail.com" class="about__contact">Email:<span class="about__contact-span">mldndjkvc@gmail.com</span></a>
            </div>
            <div class="mb-s">  
              <a href="tel:0028765176853" class="about__contact">Phone:<span class="about__contact-span">+387 65 176 853</span></a>
            </div>
          </div>
          <div class="contact__info-icons">
            <a href="https://github.com/maxa22" target="_blank" rel="noopener" title="Github account">
              <i class="fab fa-github fa-3x mr-m"></i>
            </a>
            <a href="https://www.linkedin.com/in/mladen-%C4%91okovi%C4%87-957013209/" target="_blank" rel="noopener" title="LinkedIn account">
              <i class="fab fa-linkedin fa-3x"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="modal-overlay">
    <div class="modal">
      <div class="LoaderBalls">
        <div class="LoaderBalls__item"></div>
        <div class="LoaderBalls__item"></div>
        <div class="LoaderBalls__item"></div>
      </div>
    </div>
  </div>
  <div class="message"></div>
  <footer>
    <div class="footer__container">
      Copyright &copy;Mladen Đoković
    </div>
  </footer>
<script src="scripts/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>