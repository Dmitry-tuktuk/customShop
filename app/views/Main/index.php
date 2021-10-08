
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Offer 2021</span>
                                <h2 class="title-1">Sale Up To </h2>
                                <h2 class="title-2"><span>50%</span> Off</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                        class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="public/assets/images/slider-image/slider-1.png" alt="" />
                                </div>
                                <div class="display-wrapper">
                                    <div class="content-side">
                                        <h4 class="title">Full Dress</h4>
                                        <span class="price">$21.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                    </div>
                                    <div class="image-side">
                                        <img src="public/assets/images/slider-image/display-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex bg-color2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Offer 2021</span>
                                <h2 class="title-1">Sale Up To </h2>
                                <h2 class="title-2"><span>50%</span> Off</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                        class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="public/assets/images/slider-image/slider-2.png" alt="" />
                                </div>
                                <div class="display-wrapper">
                                    <div class="content-side">
                                        <h4 class="title">Full Dress</h4>
                                        <span class="price">$21.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                    </div>
                                    <div class="image-side">
                                        <img src="public/assets/images/slider-image/display-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Banner Area Start -->

<?php if($categories) : ?>
<div class="banner-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="single-col ">
                <a href="shop-left-sidebar.html" class="single-banner">
                    <img src="public/assets/images/banner/<?=$categories[1]->img ?>" alt="">
                    <div class="item-disc">
                        <span class="item-title"><?=$categories[1]->title ?></span>
                        <span class="item-amount"><?=$categories[1]->description ?></span>
                    </div>
                </a>
            </div>
            <div class="single-col center-col">
                <div class="single-banner">
                    <img src="public/assets/images/banner/bestsellers.webp" alt="">
                    <div class="item-disc">
                        <h2 class="title">#bestsellers</h2>
                        <a href="/products" class="shop-link">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="single-col ">
                <a href="shop-left-sidebar.html" class="single-banner">
                    <img src="public/assets/images/banner/<?=$categories[2]->img ?>" alt="">
                    <div class="item-disc">
                        <span class="item-title"><?=$categories[2]->title ?></span>
                        <span class="item-amount"><?=$categories[2]->description ?></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<!-- Banner Area End -->

<!-- Feature Area Srart -->
<div class="feature-area pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6  ">
                <!-- single item -->
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="public/assets/images/icons/1.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free Shipping</h4>
                        <span class="sub-title">Capped at $39 per order</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="public/assets/images/icons/2.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Card Payments</h4>
                        <span class="sub-title">12 Months Installments</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="public/assets/images/icons/3.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Returns</h4>
                        <span class="sub-title">Shop With Confidence</span>
                    </div>
                </div>
                <!-- single item -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End -->

<!-- Product Area Start -->
<div class="product-area">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg col-md col-12">
                <div class="section-title mb-0">
                    <h2 class="title">#products</h2>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Tab Start -->
            <div class="col-lg-auto col-md-auto col-12">
                <ul class="product-tab-nav nav">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab-product-all">All</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-new">New</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#tab-product-bestsellers">Bestsellers</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#tab-product-itemssale">Items
                            Sale</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <div class="row">
            <div class="col">
                <div class="tab-content top-borber">
                    <!-- 1st tab start -->
                    <?php if($products): ?>
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="row">
                            <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/product/<?= $product->alias?>" class="image">
                                            <img src="public/assets/images/product-image/<?= $product->img?>" alt="Product" />
                                            <img class="hover-image" src="public/assets/images/product-image/<?= $product->img?>"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <?php if($product->label_id == 3): ?>
                                                    <span class="new">New</span>
                                                <?php endif ?>
                                            <?php if($product->label_id == 2): ?>
                                                <span class="new">Best</span>
                                            <?php endif ?>
                                                <?php if ($product->old_price) : ?>
                                                    <span class="sale">
                                                    <?= round(($product->price / ($product->old_price / 100)) - 100) . '%'?>
                                                </span>
                                                <?php endif ?>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <a title="Add To Cart" class=" add-to-cart add-to-cart-link" href="/cart/add/<?=$product->id?>">Add
                                            To Cart</a>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="/product/<?= $product->alias?>"><?=$product->title ?></a></h5>
                                        <span class="price">
                                    <span class="new">$ <?=$product->price ?></span>
                                    <?php if($product->old_price):?>
                                        <span class="old">$ <?=$product->old_price ?></span>
                                    <?php endif ?>
                            </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <?php endif ?>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <?php if ($productsNew) :?>
                    <div class="tab-pane fade" id="tab-product-new">
                        <div class="row">
                            <?php foreach ($productsNew as $productNew) : ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/product/<?= $productNew->alias?>" class="image">
                                            <img src="public/assets/images/product-image/<?= $productNew->img ?>" alt="Product" />
                                            <img class="hover-image" src="public/assets/images/product-image/<?= $productNew->img ?>"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <?php if($productNew->label_id == 3): ?>
                                                    <span class="new">New</span>
                                                <?php endif ?>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart add-to-cart-link" href="/cart/add/<?=$productNew->id?>">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="/product/<?= $productNew->alias?>"><?=$productNew->title ?></a></h5>
                                        <span class="price">
                                                <span class="new">$<?= $productNew->price ?></span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <?php endif ?>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <?php if ($productsBestseller) :?>
                    <div class="tab-pane fade" id="tab-product-bestsellers">
                        <div class="row">
                            <?php foreach ($productsBestseller as $productBestseller): ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/product/<?= $productBestseller->alias?>" class="image">
                                            <img src="public/assets/images/product-image/<?= $productBestseller->img?>" alt="Product" />
                                            <img class="hover-image" src="public/assets/images/product-image/<?= $productBestseller->img?>"
                                                 alt="Product" />
                                        </a>
                                            <span class="badges">
                                                <?php if($productBestseller->label_id == 1): ?>
                                                    <span class="new">Best</span>
                                                <?php endif ?>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <a title="Add To Cart" class=" add-to-cart add-to-cart-link" href="/cart/add/<?=$productBestseller->id?>">Add
                                            To Cart</a>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="/product/<?= $productBestseller->alias?>"><?=$productBestseller->title ?></a></h5>
                                        <span class="price">
                                            <span class="new">$ <?=$productBestseller->price ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <?php endif ?>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <?php if($productsSale) : ?>
                    <div class="tab-pane fade" id="tab-product-itemssale">
                        <div class="row">
                            <?php foreach ($productsSale as $productSale) : ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/product/<?= $productSale->alias?>" class="image">
                                            <img src="public/assets/images/product-image/<?= $productSale->img?>" alt="Product" />
                                            <img class="hover-image" src="public/assets/images/product-image/<?= $productSale->img?>"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <?php if ($productSale->old_price) : ?>
                                                <span class="sale">
                                                    <?= round(($productSale->price / ($productSale->old_price / 100)) - 100) . '%'?>
                                                </span>
                                            <?php endif ?>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <a title="Add To Cart" class=" add-to-cart add-to-cart-link" href="/cart/add/<?=$productSale->id?>">Add
                                            To Cart</a>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="/product/<?= $productSale->alias?>"><?=$productSale->title ?></a></h5>
                                        <span class="price">
                                                <span class="new">$ <?=$productSale->price ?></span>
                                                <?php if($productSale->old_price):?>
                                                <span class="old">$ <?=$productSale->old_price ?></span>
                                                <?php endif ?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- 4th tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Deal Area Start -->
<div class="deal-area pb-100px pt-100px">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="deal-inner deal-bg position-relative pt-100px pb-100px"
                     data-bg-image="public/assets/images/deal-img/deal-bg.jpg">
                    <div class="deal-wrapper">
                        <span class="category">#FASHION SHOP</span>
                        <h3 class="title">Deal Of The Day</h3>
                        <div class="deal-timing">
                            <div data-countdown="2021/05/15"></div>
                        </div>
                        <a href="single-product-variable.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Shop
                            Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                    </div>
                    <div class="deal-image">
                        <img class="img-fluid" src="public/assets/images/deal-img/woman.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Area End -->

<!-- Testimonial Area Start -->
<div class="testimonial-area pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-0">
                    <h2 class="title line-height-1">#testimonials</h2>
                </div>
            </div>
        </div>
        <!-- Slider Start -->
        <div class="testimonial-wrapper swiper-container">
            <div class="swiper-wrapper">
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="public/assets/images/testimonial-image/1.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Daisy Morgan</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="public/assets/images/testimonial-image/2.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Leah Chatman</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="public/assets/images/testimonial-image/3.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Reyna Chung</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="public/assets/images/testimonial-image/1.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Daisy Morgan</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="public/assets/images/testimonial-image/2.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Reyna Chung</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
            </div>
        </div>
        <!-- Slider Start -->
    </div>
</div>
<!-- Testimonial Area End -->

<!-- Brand area start -->
<div class="brand-area pb-100px">
    <div class="container">
        <div class="brand-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#"><img class=" img-fluid" src="public/assets/images/brand-logo/1.png" alt="" /></a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#"><img class=" img-fluid" src="public/assets/images/brand-logo/2.png" alt="" /></a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#"><img class=" img-fluid" src="public/assets/images/brand-logo/3.png" alt="" /></a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#"><img class=" img-fluid" src="public/assets/images/brand-logo/4.png" alt="" /></a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#"><img class=" img-fluid" src="public/assets/images/brand-logo/5.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->