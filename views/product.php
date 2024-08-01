<body>
    <div class="product container-fluid p-0">
        <div class="product_title col-12  text-center">
            <span>Our products</span>
            <p>Endless Possibilities for Every Room - Explore IKEA's Product Categories</p>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card col-12 m-0">
                <nav class="m-0">
                    <div class="nav nav-tabs mb-3 border-0 " id="nav-tab" role="tablist">
                        <div class="product_category d-flex justify-content-around">
                            <button class="nav-link item active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">New in</button>
                            <button class="nav-link item" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Chairs</button>
                            <button class="nav-link item" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Tables</button>
                            <button class="nav-link item" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Lighting</button>
                            <button class="nav-link item" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Bathroom</button>
                            <button class="nav-link item" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="false">Outdoor</button>
                        </div>
                    </div>
                </nav>
                <div class="tab-content col-12" id="nav-tabContent">
                    <div class="tab-pane fade active show swiper mySwiper" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="products swiper-wrapper d-flex justify-content-around">
                            <div class="product_detail swiper-slide col-8 col-sm-6 col-lg-3 h-100 d-flex flex-column ">
                                <div class="img w-100">
                                    <img class="w-100 h-100" src="assets/images/product1.png" alt="">
                                </div>
                                <div class="product_name m-0">
                                    <span>VINDKAST</span>
                                </div>
                                <div class="product_description m-0">
                                    <span>Floor lamp, white</span>
                                </div>
                            </div>
                            <div class="product_detail swiper-slide col-8 col-sm-6 col-lg-3 h-100 d-flex flex-column ">
                                <div class="img w-100">
                                    <img class="w-100 h-100" src="assets/images/product2.png" alt="">
                                </div>
                                <div class="product_name m-0">
                                    <span>VINDKAST</span>
                                </div>
                                <div class="product_description m-0">
                                    <span>Floor lamp, white</span>
                                </div>
                            </div>
                            <div class="product_detail swiper-slide col-8 col-sm-6 col-lg-3 h-100 d-flex flex-column ">
                                <div class="img w-100">
                                    <img class="w-100 h-100" src="assets/images/product3.png" alt="">
                                </div>
                                <div class="product_name m-0">
                                    <span>VINDKAST</span>
                                </div>
                                <div class="product_description m-0">
                                    <span>Floor lamp, white</span>
                                </div>
                            </div>
                            <div class="product_detail swiper-slide col-8 col-sm-6 col-lg-3 h-100 d-flex flex-column ">
                                <div class="img w-100">
                                    <img class="w-100 h-100" src="assets/images/product4.png" alt="">
                                </div>
                                <div class="product_name m-0">
                                    <span>VINDKAST</span>
                                </div>
                                <div class="product_description m-0">
                                    <span>Floor lamp, white</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</body>

<script>
function enableDragScroll(element) {
    let pressed = false;
    let startX = 0;

    element.addEventListener('mousedown', function(e) {
        pressed = true;
        startX = e.clientX;
    });

    element.addEventListener('mouseup', function() {
        pressed = false;
    });

    element.addEventListener('mouseleave', function() {
        pressed = false;
    });

    element.addEventListener('mousemove', function(e) {
        if (!pressed) {
            return;
        }
        this.scrollLeft += startX - e.clientX;
    });
}

const wrapper = document.querySelector('.product_category');
const products = document.querySelector('.products');

enableDragScroll(wrapper);
enableDragScroll(products);
</script>

<script>
var swiper = new Swiper(".mySwiper", {
    grid: {
        rows: 3,
    },
    direction: "vertical",
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
</script>