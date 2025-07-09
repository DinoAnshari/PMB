<div id="home" class="hompage-slides-wrapper video-bg">
    <div class="homepage-slides owl-carousel owl-theme">
        @foreach ($sliders as $slider)
        <div class="single-slider-item wave-bg-two">
            <div class="slide-item-table">
                <div class="slide-item-tablecell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="slider-text">
                                    <h1>{{ $slider->title }}</h1>
                                    <p>{{ $slider->description }}</p>

                                    <div class="slide-button">
                                        <a href="#daftar" class="slide-btn-white mr-10">
                                            <i class="icofont-cloud-download"></i> Daftar
                                        </a>
                                        <a href="#tutorial" class="slide-btn-bordered">Tutorial</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-5">
                                <div class="welcome-phone">
                                    <img src="{{ asset('storage/sliders/' . $slider->image) }}" alt="App Mockup image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>