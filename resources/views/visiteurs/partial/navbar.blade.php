<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                        <p class="mb-0 text-white fs-6 fw-normal">FLASH INFO</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="{{asset('/templates/visiteurs/img/features-fashion.jpg')}}" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                            <a href="#"><p class="text-white mb-0 link-hover">L'application mobile IFIND est bientôt disponible sur toutes les plateformes.</p></a>
                        </div>
                    </div>
                </div>
                <div class="top-link flex-lg-wrap">
                    <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span class="text-body">Tuesday, Sep 12, 2024</span></i>
                    <div class="d-flex icon">
                        <p class="mb-0 text-white me-2">Follow Us:</p>
                        <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                        <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="{{route('accueil')}}" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">I-find.</p>
                    <small class="text-body fw-normal" style="letter-spacing: 1px; font-size: 14px">Un clic, un job.</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{route('accueil')}}" class="nav-item nav-link active">Accueil</a>
                        <a href="#" class="nav-item nav-link">Offres d'emplois</a>
                        <a href="{{route('actualites')}}" class="nav-item nav-link">Actualités</a>
                        <a href="404.html" class="nav-item nav-link">Conseils</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A propos</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="#" class="dropdown-item">Qui sommes-nous?</a>
                                <a href="#" class="dropdown-item">Pourquoi nous?</a>
                                <a href="#" class="dropdown-item">Nos services</a>
                                <a href="#" class="dropdown-item">Notre histoire</a>
                            </div>
                        </div>
                        <a href="{{route('contacts')}}" class="nav-item nav-link">Contact</a>
                        <a href="{{ route('login_user') }}">
                            <button style="background-color: white; border: 2px solid #1B7DFF; border-radius: 25px; padding: 10px 20px; display: inline-block; color: #000000;" onmouseover="this.style.backgroundColor='#1B7DFF'; this.style.color='white'" onmouseout="this.style.backgroundColor='white'; this.style.color='#1B7DFF'">
                              Se connecter
                            </button>
                        </a>
                    </div>
                    <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                        {{-- <div class="d-flex">
                            <img src="{{asset('/templates/visiteurs/img/weather-icon.png')}}" class="img-fluid w-100 me-2" alt="">
                            <div class="d-flex align-items-center">
                                <strong class="fs-4 text-secondary">31°C</strong>
                                <div class="d-flex flex-column ms-2" style="width: 150px;">
                                    <span class="text-body">NEW YORK,</span>
                                    <small>Mon. 10 jun 2024</small>
                                </div>
                            </div>
                        </div> --}}
                        <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
