<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scroll Website</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">COLOR</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Services</a>
                </li>
                <li class="navbar__btn">
                    <a href="#sign-up" class="button" id="sign-up">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Choose your <span>colors</span></h1>
            <p class="hero__description">Unlimited Possibilities</p>
            <button class="main__btn">
                <a href="#">Explore</a>
            </button>
        </div>
    </section>

    <main class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card">
                    <i class="fa fa-layer-group"></i>
                </div>
            </div>
            <div class="main__content">
                <h1>What do we do?</h1>
                <h2>We help businesses scale</h2>
                <p>Schedule a call to learn more about our services</p>
                <button class="main__btn">
                    <a href="#">Schedule Call</a>
                </button>
            </div>
        </div>
    </main>

    <section class="services" id="services">
        <h1>Our Services</h1>
        <div class="services__wrapper">
            @foreach($services as $service)
                <div class="services__card">
                    <h2>{{$service['title']}}</h2>
                    <p>{{$service['description']}}</p>
                    <div class="services__btn">
                        <button>Get Started</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="main" id="about">
        <div class="main__container">
            <div class="main__content">
                <h1>Join our team</h1>
                <h2>Sign Up Today</h2>
                <p>See what makes us different</p>
                <button class="main__btn">
                    <a href="#">Sign Up</a>
                </button>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Service</a>
                </div>
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Service</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Service</a>
                </div>
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Service</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo">COLOR</a>
                </div>
                <p class="websites__rights">&copy; COLOR 2020. All rights reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>
    </footer>

    <!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>