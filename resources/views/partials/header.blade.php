    <!-- HEADER -->
    <header>

        <div class="container h-100">
            <div class="row h-100 justify-content-between">

                <div class="col-3 d-flex align-items-center">
                    <nav>
                        <ul class="d-flex gap-1 m-0">
                            <li><a href="{{route("woman")}} " class="p-3">Donna</a></li>
                            <li><a href="{{route("man")}} " class="p-3">Uomo</a></li>
                            <li><a href="{{route("children")}} " class="p-3">Bambini</a></li>
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
                        <ul class="d-flex gap-1 m-0">
                            <li><i class="fa-regular fa-user p-3"></i></li>
                            <li><i class="fa-regular fa-heart p-3"></i></li>
                            <li><i class="fa-solid fa-bag-shopping p-3"></i></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- /HEADER -->
