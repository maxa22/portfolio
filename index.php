<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative and ambitious web developer. Problem solver, patient, ready to cooperate.Main stack Php, Javascript, Mysql, CSS and HTML.">
  <meta name="keyword" content="portfolio, javascript, php, developer">
  <meta name="twitter:title" content="Mladen Đoković | Front End Developer | Backend Developer" />
  <meta name="twitter:description" content="Web developer" />
  <script src="https://kit.fontawesome.com/3bb373b9eb.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <title>Mladen portfolio</title>
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
  <header id="hero">
    <div class="hero">
      <!-- <div class="hero__image"><img src="images/developer.svg" class="hero__image-svg" alt="Web developer"></div> -->
      <div class="hero__text">
        <h1 class="heading-primary"> <span class="weight-400">Hello, I'm Mladen </span><br> <span class="hero__text-description"> WEB DEVELOPER </span></h1>
        <p class="heading-primary-sub">Pasionate about tehnology and building things for the web. Interested in working on ambitious projects with positive people.</p>
        <div class="button-container">  
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
            <h3 class="mb-s"> Hi there, </h3> 
            <p class="text-justify mb-s"> I'm Mladen Đoković, creative and ambitious web developer. Problem solver, patient, ready to cooperate, ready to learn,
              and always ready to face new challenges. Passionate about writing clean and organized code, 
              and keen on personal and professional development.</p>
            <div class="mb-s">
              <a href="mailto:mldndjkvc@gmail.com" class="about__contact">Email:</a><span>mldndjkvc@gmail.com</span>
            </div>
            <div class="mb-l">
              <a href="tel:0028765176853" class="about__contact">Phone:</a><span>+387 65 176 853</span>
            </div>
            <div class="button-container justify-start">
              <a href="#contact" class="btn btn-outline-secondary mr-s-s mb-xs mb-s-0">Contact me</a>
              <a href="images/mladen.pdf" class="btn btn-primary" download>Download CV</a>
            </div>
          </div>
          <div class="about__image">
            <img src="images/monitor.png" class="w-100" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="skills">
      <div class="skills__container">
        <div class="mb-xl relative">
          <h2 class="heading-secondary">Skills</h2>
        </div>
        <div class="skills">
          <div class="d-flex flex-column align-center">
            <i class="fab fa-html5 fa-7x skills__icon-html"></i>
            <span class="skills__text">HTML 5</span>
          </div>
          <div class="d-flex flex-column align-center">
            <i class="fab fa-css3-alt fa-7x skills__icon-css"></i>
            <span class="skills__text">CSS 3</span>
          </div>
          <div class="d-flex flex-column align-center">
            <i class="fab fa-js fa-7x skills__icon-js"></i>
            <span class="skills__text">JavaScript</span>
          </div>
          <div class="d-flex flex-column align-center">
            <i class="fab fa-php fa-7x skills__icon-php"></i>
            <span class="skills__text">PHP</span>
          </div>
          <div class="d-flex flex-column align-center">
            <i class="fas fa-database fa-7x skills__icon-sql"></i>
            <span class="skills__text">MySQL</span>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="portfolio__container">
        <div class="mb-xl relative">
          <h2 class="heading-secondary">Portfolio</h2>
        </div>
        <div class="projects">
          <div class="projects__card">
            <img class="projects__image" src="images/calculy_project.svg" alt="Calculy project">
            <div class="projects__text mb-s">
              <h3 class="mb-s text-center">Calculy</h3>
              <p class="mb-xl text-justify">Marketing calculator project. This app is build for logo designers. You can
                create your own calculator with
                multiple questions and options in order to
                present to users the cost of making a logo. Made using HTML5, CCS3, JavaScript, PHP.
              </p>
              <div class="projects__links">
                <a href="https://calculy.lab387.com" class="btn btn-outline-primary" target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="projects__card">
            <img class="projects__image" src="images/shorty_project.svg" alt="Shorty project">
            <div class="projects__text mb-s">
              <h3 class="mb-s text-center">Shorty</h3>
              <p class="mb-xl text-justify">Url shortener app. Make custom links with your username and custom text.
                You can choose between multiple domains. Made using HTML5, CCS3, JavaScript, PHP.
              </p>
              <div class="projects__links">
                <a href="https://shorty.lab387.com" class="btn btn-outline-primary" target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="projects__card">
            <img class="projects__image" src="images/social_project.svg" alt="Social media project">
            <div class="projects__text">
              <h3 class="mb-s text-center">Twitter clone</h3>
              <p class="mb-xl text-justify">Twitter clone with functionalities such as posting tweets, sharing and liking.
                You can also comment on tweets, share comments and like them. You can chat with your friends, and
                look at their profile page. Build with Php and Mysql on the backend, and Javascript, CSS and HTML for
                frontend.
              </p>
              <div class="projects__links">
                <a href="https://mladen.dev.lab387.net/mreza/" class="btn btn-outline-primary" target="_blank"
                  rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="projects__card projects__card-modify">
            <img class="projects__image" src="images/room.svg" alt="Room project">
            <div class="projects__text">
              <h3 class="mb-s text-center">E-commerce home page</h3>
              <p class="mb-xl text-justify">Completed Frontend Mentor challenge. Made using HTML5, CCS3, JavaScript.
              </p>
              <div class="projects__links">
                <a href="https://rooms-homepage-maxa22.netlify.app/" class="btn btn-outline-primary projects__links-first"
                  target="_blank" rel="noopener">
                  <span class="mr-xs"> Preview </span> <i class="fas fa-eye"></i>
                </a>
                <a href="https://github.com/maxa22/rooms-homepage" class="btn btn-outline-secondary" target="_blank"
                  rel="noopener">
                  <span class="mr-xs">Code </span> <i class="fas fa-code"></i>
                </a>
              </div>
            </div>
          </div>
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
            <button class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
      <div class="line"></div>
      <div class="contact__info">
        <div class="contact__info-container">
          <div class="contact__info-data">
            <div class="mb-s">  
              <span class="about__contact">Name:</span><span>Mladen Đoković</span>
            </div>
            <div class="mb-s">  
              <a href="mailto:mldndjkvc@gmail.com" class="about__contact">Email:</a><span>mldndjkvc@gmail.com</span>
            </div>
            <div class="mb-s">  
              <a href="tel:0028765176853" class="about__contact">Phone:</a><span>+387 65 176 853</span>
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
</body>
</html>