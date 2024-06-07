    <!-- HEADER -->
    <header>

        <div class="container h-100">
            <div class="row h-100 justify-content-between">

                <div class="col-3 d-flex align-items-center">
                    <nav>
                        <ul class="d-flex gap-3 m-0">
                            <li><a href="">Donna</a></li>
                            <li><a href="">Uomo</a></li>
                            <li><a href="">Bambini</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 d-flex align-items-center justify-content-center">
                    <a href=" {{route("home")}} ">
                        <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
                    </a>
                </div>

                <div class="col-3 d-flex align-items-center justify-content-end">
                    <nav>
                        <ul class="d-flex gap-3 m-0">
                            <li><i class="fa-regular fa-user"></i></li>
                            <li><i class="fa-regular fa-heart"></i></li>
                            <li><i class="fa-solid fa-bag-shopping"></i></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- /HEADER -->
