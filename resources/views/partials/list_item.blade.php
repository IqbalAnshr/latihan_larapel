<section id="items-listing" class="padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="featured border rounded-3 p-4">
                    <div class="section-title overflow-hidden mb-5 mt-2">
                        <h3 class="d-flex flex-column mb-0">Featured</h3>
                    </div>
                    <div class="items-lists">
                        @foreach ($featuredBooks as $book)
                            <div class="item d-flex">
                                <img src="{{ $book->image_path }}" class="img-fluid shadow-sm"
                                    alt="{{ $book->title }}">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">{{ $book->title }}</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">{{ $book->writer }}</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="star {{ $i < $book->rating ? 'star-fill' : '' }}">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">${{ $book->price }}</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="latest-items border rounded-3 p-4">
                    <div class="section-title overflow-hidden mb-5 mt-2">
                        <h3 class="d-flex flex-column mb-0">Latest items</h3>
                    </div>
                    <div class="items-lists">
                        @foreach ($latestBooks as $book)
                            <div class="item d-flex">
                                <img src="{{ $book->image_path }}" class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">{{ $book->title }}</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">{{ $book->writer }}</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">${{ $book->price }}</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="best-reviewed border rounded-3 p-4">
                    <div class="section-title overflow-hidden mb-5 mt-2">
                        <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
                    </div>
                    <div class="items-lists">
                        @foreach ($bestReviews as $book)
                            <div class="item d-flex">
                                <img src="{{ $book->image_path }}" class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">{{ $book->title }}</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">{{ $book->writer }}</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">${{ $book->price }}</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="on-sale border rounded-3 p-4">
                    <div class="section-title overflow-hidden mb-5 mt-2">
                        <h3 class="d-flex flex-column mb-0">On sale</h3>
                    </div>
                    <div class="items-lists">
                        @foreach ($onsaleBooks as $book)
                            <div class="item d-flex">
                                <img src="{{ $book->image_path }}" class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">{{ $book->title }}</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">{{ $book->writer }}</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5"><s
                                            class="text-black-50">${{ $book->price }}</s>
                                        $999</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>
