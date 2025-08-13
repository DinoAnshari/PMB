<section id="faqs" class="faqs-section wave-faqs-section gray-bg">
    <div class="wave-bg-section-tb-two"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h2>Pertanyaan yang sering diajukan</h2>
                    <p>Berikut pertanyaan yang sering ditanyakan terkait PPDB SMPN Maju Jaya.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('images/logo/undraw_faq_h01d-2.svg') }}" alt="Faq Image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="faq-content">
                    @foreach($faqs as $index => $faq)
                    <div class="faq-panel wow animate__animated animate__fadeInUp" data-wow-delay=".{{ 4 + $index }}s">
                        <h5 class="faq-title">
                            <span>{{ $index + 1 }}.</span> {{ $faq->pertanyaan }}
                            <i class="icofont-plus"></i>
                        </h5>
                        <div class="faq-textarea">
                            <p>{{ $faq->jawaban }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>