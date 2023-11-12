<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('accueil')}}"><img src="{{asset('/templates/visiteurs/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a style="padding-left: 0px;" href="{{route('accueil')}}">Accueil</a></li>
                                        <li><a style="padding-left: 0px;" href="{{route('jobs')}}">Jobs disponibles</a></li>
                                        <li><a style="padding-left: 0px;" href="{{route('apropos')}}">A propos</a></li>
                                        <li><a style="padding-left: 0px;" href="{{route('actualites')}}">Actualités</a></li>
                                        {{-- <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="job_details.html">job Details</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{route('contacts')}}">Contact</a></li>
                                        {{-- <li>
                                            <a style="background-color: #fb246a; color: #212529" href="#" class="btna head-btn1">Inscription</a>
                                        </li>
                                        <li>
                                            <a href="{{route('login')}}" class="btne head-btn2">Connexion</a>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block" style="padding-right: 0px;">
                                <a href="{{route('register_user')}}" class="btn head-btn1">Inscription</a>
                                <a href="{{route('login_user')}}" class="btn head-btn2">Connexion</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>
