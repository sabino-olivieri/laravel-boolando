<main>
    <div class="container mt-3">
        <div class="row justify-content-between">
            @foreach ($data as $prod)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ms_card m-3">
                        <div class="favorite p-2 bg-white {{$prod['isInFavorites'] ? 'color-red' : ''}}">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="product-img">

                            <div class="front-img">
                                <img src="{{ Vite::asset('resources/img/' . $prod['frontImage']) }}" alt="">
                            </div>

                            <div class="back-img">
                                
                            </div>

                            <div class="badges d-flex gap-1">
                                @php
                                    $discount = 0;
                                @endphp
                            @foreach ($prod['badges'] as $badge)
                                    @if ($badge['type'] === 'discount')
                                        @php
                                            $discount = -(int)$badge['value'];
                                        @endphp
                                        <span class="discount py-1 px-3">
                                            {{ $badge['value'] }} 
                                        </span>
                                    @endif

                                    @if ($badge['type'] === 'tag')
                                        <span class="tag py-1 px-3">
                                            {{ $badge['value'] }}
                                        </span>
                                    @endif
                                @endforeach
                                </div>

                        </div>

                        <div class="info-product">
                            <span>
                                {{ $prod['brand'] }}
                            </span>
                            <h5 class="m-0">
                                {{ strtoupper($prod['name']) }}
                            </h5>

                            <span class="price">
                                @if ($discount > 0)
                                {{ $prod['price'] - round(($prod['price'] * ($discount / 100)),2) }} €
                                @else
                                {{ $prod['price'] }} €
                                @endif

                            </span>

                            @if ($discount > 0)
                                <span class="original-price">
                                    {{ $prod['price'] }} €
                                </span>
                            @endif
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
