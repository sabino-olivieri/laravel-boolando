<main>
    <div class="container mt-3">
        <div class="row justify-content-between">
            @foreach ($data as $prod)
                
            <div class="col-12 col-md-6 col-lg-4">
                <div class="ms_card p-3">
                    <div class="front-img">
                        <img src="{{ Vite::asset("resources/img/")}}{{$prod['frontImage']}}" alt="">
                    </div>

                    <div class="back-img">

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>