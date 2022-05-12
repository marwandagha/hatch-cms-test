@include('partials.app.hero')

<section class="custom-section ">
    <div class="container">
        <h2 class="text-center">Welcome to Fusion</h2>
        <p class="text-center mt-5">Nam consectetur elementum neque vitae condimentum. Aenean digni Nam consectetur
            elementum neque vitae condimentum.
            Nam consectetur elementum neque vitae condimentum. Aenean digni Aenean digni</p>

    </div>
</section>
<section class="custom-section ">
    <div class="container">
        <div class="row">
            <div class="col-12 cards-padding col-lg-4 mt-5 mt-lg-0 col-sm-6">

                <img class="icon-size" src="/i/icons/plane.png" alt="">
                <p class="mt-3"><b>Best Price Guarantee</b></p>
                <p class="mt-3">SpaceTeam bootstrapping user centered design sticky note convergence fund</p>


            </div>
            <div class="col-12 cards-padding col-lg-4 mt-5 mt-lg-0 col-sm-6">

                <img class="icon-size" src="/i/icons/heart.png" alt="">
                <p class="mt-3"><b>Best Travel Agency</b></p>
                <p class="mt-3">SpaceTeam bootstrapping user centered design sticky note convergence fund</p>

            </div>
            <div class="col-12 cards-padding col-lg-4 mt-5 mt-lg-0 col-sm-6">

                <img class="icon-size" src="/i/icons/star.png" alt="">
                <p class="mt-3"><b>Trust & Safety</b></p>
                <p class="mt-3">SpaceTeam bootstrapping user centered design sticky note convergence fund</p>

            </div>
        </div>

    </div>
</section>

<section class="custom-section">
    <div class="container">
        <div class="row">
            <div class="container">
                <h2 class="text-center">Latest News From Blog</h2>
                <p class="text-center mt-5">See Whats People Are Sharing Their Thoughts</p>
            </div>
        </div>
    </div>
</section>
<section class="custom-section">
    <div class="container">
        @if(isset($articles))
            <div class="row mt-5">
                @foreach ($articles as $article)
                    @if($article)
                        <div class="col-12 col-lg-3 col-md-6 ">
                            <div class="text-center">
                                <a href="{{ $article->link }}"><img src="https://placeimg.com/300/200/any" alt=""></a>
                            </div>
                            <div class="p-5 text-center">
                                <a href="{{ $article->link }}"><p class="mt-3 article-title">
                                        <b>{{ $article->title }}</b></p></a>
                                <p class="mt-3">{{ getNWords($article->content, 15) }}</p>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
            <div class="  text-center">
                <button class="  btn articles-button">Keep Reading</button>
            </div>
        @else
            <div class="row mt-5">
                <div class="col-12 text-center ">
                    <p class="text-muted">No news to show</p>
                </div>
            </div>
        @endIf
    </div>

</section>

<div class="custom-section">
    <div class="container">
        <div class="row">
            <div class="container">
                <h2 class="text-center">What Our Client Says</h2>
                <p class="text-center mt-5">People’s sharing their thought about our works </p>
            </div>
        </div>
    </div>
</div>

<section class="custom-section">
    <div class="slider">
        <div class="">
            <div class="row custom-slide ">
                <div class="col-12 col-lg-3">
                    <img class="img-radius" src="https://placeimg.com/150/150/any" alt="">
                </div>
                <div class="col-12 col-lg-9 mt-responsive ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. </p>
                    <p class="colored-title mt-5"><b>Demitri Vegas</b></p>
                    <p>London, England</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row custom-slide ">
                <div class="col-12 col-lg-3">
                    <img class="img-radius" src="https://placeimg.com/150/150/any" alt="">
                </div>
                <div class="col-12 col-lg-9 mt-responsive ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. </p>
                    <p class="colored-title mt-5"><b>Demitri Vegas</b></p>
                    <p>London, England</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row custom-slide ">
                <div class="col-12 col-lg-3">
                    <img class="img-radius" src="https://placeimg.com/150/150/any" alt="">
                </div>
                <div class="col-12 col-lg-9 mt-responsive ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. </p>
                    <p class="colored-title mt-5"><b>Demitri Vegas</b></p>
                    <p>London, England</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="discount custom-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <p class="discount-p">Get special discount on your first journey</p>
            </div>
            <div class="col-12 col-md-4 resposive-book-button">
                <button class="btn book-button">Book Now</button>
            </div>
        </div>
    </div>
</section>


