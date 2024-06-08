<main>
    <div class="container my-3">
        <div class="row justify-content-between">
            @foreach ($data as $prod)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ms_card m-3">
                        <div class="favorite p-2 bg-white {{ $prod['isInFavorites'] ? 'color-red' : '' }}">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="product-img">

                            <div class="front-img">
                                <img src="{{ Vite::asset('resources/img/' . $prod['frontImage']) }}" alt="">
                            </div>

                            <div class="back-img hidden">
                                <img src="{{ Vite::asset('resources/img/' . $prod['backImage']) }}" alt="">

                            </div>

                            <div class="badges d-flex gap-1">
                                @php
                                    $discount = 0;
                                @endphp

                                @for ($i = count($prod['badges']) - 1; $i >= 0; $i--)
                                    @if ($prod['badges'][$i]['type'] === 'discount')
                                        @php
                                            $discount = -(int) $prod['badges'][$i]['value'];
                                        @endphp
                                        <span class="discount py-1 px-3">
                                            {{ $prod['badges'][$i]['value'] }}
                                        </span>
                                    @endif

                                    @if ($prod['badges'][$i]['type'] === 'tag')
                                        <span class="tag py-1 px-3">
                                            {{ $prod['badges'][$i]['value'] }}
                                        </span>
                                    @endif
                                @endfor

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
                                    {{ $prod['price'] - round($prod['price'] * ($discount / 100), 2) }} €
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
