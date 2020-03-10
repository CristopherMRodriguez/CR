<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, minimum-scale=1.0" name="viewport">
        <title>Cristopher Rodriguez Web Development</title>
        <link rel="icon" href="img/parrot.svg">
        <link rel="stylesheet" href="style.css">

        <!-- normalize (line evening out on different browsers // recommened from portfolio tutorial-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        <script src="https://kit.fontawesome.com/c4e9bbec73.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed&display=swap" rel="stylesheet">

    </head>

    <body>
        <header>
            <nav>
                <button class="nav-toggle" aria-label="Dropdown Menu">
                    <span class="hamburger"></span>
                </button>
        
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About Me</a></li>
                        <li class="nav__item"><a href="#mywork" class="nav__link">My Work</a></li>
                        <!--<li class="nav__item"><a href="#passions" class="nav__link">Passions</a></li>
                        <li class="nav__item"><a href="#future" class="nav__link">Future</a></li>
                        <li class="nav__item"><a href="#random" class="nav__link">Random</a></li> -->
                    </ul>
                </nav>
            </nav>
        </header>

        <!-- Intro-->
        <section class="intro" id="home">

            <h1 class="section__title section__title--intro">
                Cristopher
                    <strong>Rodriguez</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">Front End Development</p>
            <img src="img/index.png" alt="Pic of Cris" class="intro__img" />

        </section>

        <!-- My Work-->
        <section class="my-services" id="services">
            <h2 class="section__title section__title--services">My Services</h2>
            
            <div class="services">
                <div class="service">
                    <h3>Communication</h3>
                    <p>My career has been devoted to working with people to achieve their needs.  Let me know what your needs are so we can develop your ideas on the internet.</p>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <h3>Technical</h3>
                    <p>Building a website is a specialty.  Let me take care of that so you can focus on getting your message onto the internet.  I'll customize it too, just the way you want it.</p>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <h3>Simple</h3>
                    <p>Your website doesn't have to be complicated.  I'll make it as easy as possible to get you a website you love.</p>
                </div>
            </div>

            <a href="#mywork" class="btn">My Work</a>

        </section>

        <!--About Me-->
        <section class="about-me" id="about">
            <h2 class="section__title section__title--about">About Me</h2>
            <p class="section__subtitle section__subtitle--about">Front End Developer from NYC</p>
            <p>Greetings!  I'm a native New Yorker from Queens.  After several years of working in the North Brooklyn real estate industry, I have felt the immense impact of the tech industry; I am fully embracing that change!  The opportunity is a vast outlet for creative endeavorment and entrepreneurship. Although I had flirted with web design when the internet was new, I've decided to fully commit myself to web development.  After picking up Javascript in early 2019, I have moved onto exploring the exciting world of React JS.  I have also used Bootstrap to create easy and flexible web apps.  I am looking forward to hearing about your next project! And be sure to check out my github and projects below!</p>
            <p>Aside from my professional career, I am very passionate about bagpiping and chess.  In fact, I think they are very related to computer engineering!  Recently, my chess team, the Brooklyn Kingsmen, which I'm captain of, won first place in the 2019 season.  I also earned 3rd place in the Eastern United States Pipe Band Association.  I believe passion and committment are key to success.</p>

            <img src="img/crisPhone.jpg" alt="Scott" class="about-me__img">

        </section>

        <!--My Work-->
       <section class="my-work" id="mywork">
           <h2 class="section__title section__title--work">My Work</h2>
           <p class="section__subtitle section__subtitle--work">Here are a few projects:</p>

            <div class="portfolio">

                <a href="https://srkdesign.herokuapp.com/" class="portfolio__item" target="blank">
                    <img src="img/fishhead.jpg" alt="SRK Design" class="portfolio__img" />
                </a>

               <a href="https://gunsnroses.herokuapp.com/" class="portfolio__item" target="blank">
                   <img src="img/slash.jpg" alt="Guns N Roses Tribute" class="portfolio__img" />
               </a>

                <a href="https://pipegenerator.herokuapp.com/"" class="portfolio__item portfolio--item" target="blank">
                    <img src="img/bagpipe.jpg" alt="Pipe Project" class="portfolio__img" />
                </a>

                <!--<a href="img/Cristopher Rodriguez Resume.pdf" class="portfolio__item" target="blank">
                    <img src="img/resume.png" alt="Resume" class="portfolio__img" />
                </a>-->

            </div>

       </section>

       <footer class="footer">
            <a href="mailto:crod1234@gmail.com" class="footer__link">crod1234@gmail.com</a>
           
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com/CristopherMRodriguez/" target="blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.linkedin.com/in/cristopher-rodriguez/" target="blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.instagram.com/tonyalmostgotintoafight/" target="blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
       </footer>

       <script src="index.js"></script>


    </body>
</html>
