<section class="service-two-area secondary-bg pt-120 pb-120">
    <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img class="sway_Y__animation" src="{{ asset('assets/images/hompage/img2.png') }}"
            style="width: 50%; height: auto; float: right;" alt="shape">
    </div>
    <div class="container">
        <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
            <div class="section-header">
                <h5 class="wow fadeInLeft " data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #686868;">
                    / PROJECTS
                </h5>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    Featured Works
                </h2>
            </div>
            <div class="arry-btn d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <button class="arry-prev service__arry-prev">
                    <i class="fa-light fa-chevron-left"></i>
                </button>
                <button class="arry-next service__arry-next active">
                    <i class="fa-light fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="swiper service-two__slider">
            <div class="swiper-wrapper" id="portfolio-slider">
                <div class="swiper-slide text-center text-white">
                    <p>Sedang memuat data portofolio...</p>
                </div>
            </div>
        </div>
    </div>
</section>

 
<script>
document.addEventListener("DOMContentLoaded", function () {
    const sliderWrapper = document.getElementById("portfolio-slider");

    fetch("{{ url('/api/portofolio') }}")
        .then(res => res.json())
        .then(res => {
            sliderWrapper.innerHTML = "";

            if (!res.data || res.data.length === 0) {
                sliderWrapper.innerHTML = `
                    <div class="swiper-slide text-center text-white">
                        <p>Tidak ada portofolio tersedia.</p>
                    </div>`;
                return;
            }

            res.data.forEach(item => {
                let imageUrl = item.image 
                    ? `${item.image}` 
                    : "https://via.placeholder.com/400x250";

                sliderWrapper.innerHTML += `
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="${imageUrl}" alt="${item.title}" />
                            </div>
                            <div class="service-two__content">
                                <h4>
                                    <a href="${item.link ?? '#'}" class="primary-hover" target="_blank">
                                        ${item.title}
                                    </a>
                                </h4>
                                <p>${item.description ?? ''}</p>
                                <a class="read-more-btn" href="${item.link ?? '#'}"></a>
                            </div>
                        </div>
                    </div>
                `;
            });

            // Init ulang Swiper setelah inject data
            new Swiper(".service-two__slider", {
                slidesPerView: 3,
                spaceBetween: 30,
                navigation: {
                    nextEl: ".service__arry-next",
                    prevEl: ".service__arry-prev",
                },
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    320: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1200: { slidesPerView: 3 },
                },
            });
        })
        .catch(err => {
            console.error(err);
            sliderWrapper.innerHTML = `
                <div class="swiper-slide text-center text-danger">
                    <p>Gagal memuat data portofolio.</p>
                </div>`;
        });
});
</script> 
