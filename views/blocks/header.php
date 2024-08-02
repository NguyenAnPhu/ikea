<body>
    <header class="position-relative">
        <div class="navbar d-flex justify-content-space-between flex-nowrap ps-2 ">
            <div class="logo d-flex justify-content-start">
                <img class="m-0" src="./assets/icons/logo.svg" width="112" height="45">
            </div>

            <div class="d-md-none col-md-6 d-flex gap-4 justify-content-center d-block text-white me-3 my-0">
                <img src="./assets/icons/cart.svg" alt="">

            </div>
            <input type="checkbox" hidden class="nav__input" name="" id="nav__input">
            <div class="d-md-flex justify-content-center d-none">
                <div class="menu h-auto d-flex align-items-center">
                    <a class="px-2 px-lg-3 px-xxl-5 text-secondary-normal" href="">Home</a>
                    <a class=" px-2 px-lg-3 px-xxl-5" href="">Product</a>
                    <a class="px-2 px-lg-3 px-xxl-5" href="">Sale</a>
                    <a class="px-2 px-lg-3 px-xxl-5" href="">Blog</a>
                    <a class="px-2 px-lg-3 px-xxl-5" href="">About us</a>
                </div>
            </div>
            <div class="search d-md-flex justify-content-space-between d-none gap-md-3 m-0">
                <div class="search-content d-flex align-items-center">
                    <img src="./assets/icons/iconamoon_search.svg" alt="">
                    <input type="text" name="search" id="search" placeholder="Search">
                </div>
                <img src="./assets/icons/cart.svg" alt="">
            </div>
            <!-- <div class="nav-mobile col-8 col-sm-6 position-fixed top-0 end-0 h-100">
                <div class="col-12 d-flex justify-content-end">
                    <div class="m-0 pt-1 pe-1">
                        <label class="" for="nav__input" class="nav__close">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" width="32px"
                                height="32px" class="svg-inline--fa fa-times fa-w-11" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                <path fill="#fbda0c"
                                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                </path>
                            </svg>
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column justify-content-center gap-3">
                    <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Home</a>
                    <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Product</a>
                    <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Sale</a>
                    <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Blog</a>
                    <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">About us</a>
                </div>
                <div class="search search-mobile col-12 d-flex justify-content-center gap-md-3 m-0 pt-4">
                    <div class="search-content col-8 ">
                        <img src="./assets/icons/iconamoon_search.svg" alt="">
                        <input type="text" name="search" id="search" placeholder="Search">
                    </div>
                </div>
            </div> -->
            <button class="btn btn-primary bg-transparent border-0 d-flex d-md-none" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <label for="" class="nav__bars">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" width="32px"
                        height="32px" class="svg-inline--fa fa-bars fa-w-14" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#fbda0c"
                            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
                    </svg>
                </label>
            </button>

            <div class="offcanvas menu-canvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header justify-content-end m-0">
                    <button type="button" class=" bg-transparent border-0" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" width="32px"
                                height="32px" class="svg-inline--fa fa-times fa-w-11" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                <path fill="#fbda0c"
                                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                </path>
                            </svg>

                    </button>
                </div>
                <div class="offcanvas-body container d-flex flex-column justify-content-start align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center gap-3">
                        <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Home</a>
                        <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Product</a>
                        <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Sale</a>
                        <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">Blog</a>
                        <a class="px-2 px-lg-3 px-xxl-5 text-decoration-none text-secondary-normal" href="">About us</a>
                    </div>
                    <div class="search col-12 d-flex justify-content-center gap-md-3 m-0 pt-4">
                        <div class="search-content col-8 ">
                            <img src="./assets/icons/iconamoon_search.svg" alt="">
                            <input type="text" name="search" id="search" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>