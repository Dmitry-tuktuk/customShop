<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title"><?=$category['title']?></h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <?= $breadcrumbs ?>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- Shop Page Start  -->
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <p><span>12</span> Product Found of <span>30</span></p>
                    <!-- Left Side End -->
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-grid" data-bs-toggle="tab">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </a>
                        <a href="#shop-list" data-bs-toggle="tab">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <div class="shop-select">
                            <select class="shop-sort">
                                <option data-display="Relevance">Relevance</option>
                                <option value="1"> Name, A to Z</option>
                                <option value="2"> Name, Z to A</option>
                                <option value="3"> Price, low to high</option>
                                <option value="4"> Price, high to low</option>
                            </select>

                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">

                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="shop-grid">
                                    <div class="row mb-n-30px">
                                        <?php if (!empty($products)): ?>
                                            <?php $curr = \shop\App::$app->getProperty('currency'); ?>
                                            <?php foreach ($products as $product): ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px"
                                                     data-aos="fade-up" data-aos-delay="200">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="product/<?= $product->alias ?>" class="image">
                                                                <img src="public/assets/images/product-image/<?= $product->img ?>"
                                                                     alt="<?= $product->img ?>"/>
                                                                <img class="hover-image"
                                                                     src="public/assets/images/product-image/<?= $product->img ?>"
                                                                     alt="<?= $product->img ?>"/>
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
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                   title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                   data-link-action="quickview" title="Quick view"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                   title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <a title="Add To Cart" data-id="<?=$product->id?>" class=" add-to-cart add-to-cart-link" href="/cart/add?id=<?=$product->id?>">Add
                                                                To Cart</a>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="product/<?= $product->alias?>"><?= $product->title?></a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">
                                                                <?= $curr['symbol_left'] ?><?= round($product->price * $curr['value']) ?><?= $curr['symbol_right'] ?>
                                                            </span>
                                                            <?php if ($product->old_price): ?>
                                                                <span class="old"><?= $curr['symbol_left'] ?><?= round($product->old_price * $curr['value']) ?><?= $curr['symbol_right'] ?></span>
                                                            <?php endif ?>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else:?>
                                            <h3>Products not founds</h3>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="shop-list">
                                    <?php if (!empty($products)): ?>
                                        <?php foreach ($products as $product): ?>
                                            <div class="shop-list-wrapper">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="product/<?= $product->alias ?>" class="image">
                                                                    <img src="public/assets/images/product-image/<?= $product->img ?>"
                                                                         alt="<?= $product->img ?>"/>
                                                                    <img class="hover-image"
                                                                         src="public/assets/images/product-image/<?= $product->img ?>"
                                                                         alt="<?= $product->img ?>"/>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <h5 class="title">
                                                                    <a href="product/<?= $product->alias?>"><?= $product->title?></a>
                                                                </h5>
                                                                <p><?= $product->description ?></p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                            <span class="new">
                                                                <?= $curr['symbol_left'] ?><?= round($product->price * $curr['value']) ?><?= $curr['symbol_right'] ?>
                                                            </span>
                                                            <?php if ($product->old_price): ?>
                                                                <span class="old"><?= $curr['symbol_left'] ?><?= round($product->old_price * $curr['value']) ?><?= $curr['symbol_right'] ?></span>
                                                            <?php endif ?>
                                                        </span>
                                                                <div class="actions">
                                                                    <a href="wishlist.html" class="action wishlist"
                                                                       title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                    <a href="#" class="action quickview"
                                                                       data-link-action="quickview" title="Quick view"
                                                                       data-bs-toggle="modal"
                                                                       data-bs-target="#exampleModal"><i
                                                                            class="pe-7s-search"></i></a>
                                                                    <a href="compare.html" class="action compare"
                                                                       title="Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                                <a title="Add To Cart" data-id="<?=$product->id?>" class=" add-to-cart add-to-cart-link" href="/cart/add?id=<?=$product->id?>">Add
                                                                    To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content Area End -->

                    <!--  Pagination Area Start -->
                    <p style="padding-top: 30px; text-align: right;">(<?=count($products);?> товар(ов) из <?= $total ?>)</p>
                    <div class="text-center">
                        <?php if ($pagination->countPages > 1): ?>
                            <?= $pagination; ?>
                        <?php endif; ?>
                    </div>
<!--                    <div class="load-more-items text-center mb-md-60px mb-lm-60px mt-30px0px" data-aos="fade-up">-->
<!--                        <a href="#" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i-->
<!--                                class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>-->
<!--                    </div>-->
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-search">
                        <form id="widgets-searchbox" role="search" action="search" method="get" autocomplete="off">
                            <input class="input-field typeahead" id="typeahead" name="s" type="text" placeholder="Search...">
                            <button class="widgets-searchbox-btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-8">
                        <h4 class="sidebar-title">Price Filter</h4>
                        <div class="price-filter">
                            <div class="price-slider-amount">
                                <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                       placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Category</h4>

                        <div class="sidebar-widget-category">
                            <ul>
                                <?php if($categories) : ?>
                                    <?php foreach ($categories as $category): ?>
                                        <li><a href="category/<?= $category->alias ?>"> <?= $category->title ?></a></li>
                                    <?php endforeach ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Color</h4>
                        <div class="sidebar-widget-list color">
                            <ul>
                                <li><a class="active yellow" href="#"></a></li>
                                <li><a class="black" href="#"></a></li>
                                <li><a class="red" href="#"></a></li>
                                <li><a class="pink" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Size</h4>
                        <div class="sidebar-widget-list size">
                            <ul>
                                <li><a class="active-2 gray" href="#">S</a></li>
                                <li><a class="gray" href="#">M</a></li>
                                <li><a class="gray" href="#">L</a></li>
                                <li><a class="gray" href="#">XL</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget tag">
                        <h4 class="sidebar-title">Tags</h4>
                        <div class="sidebar-widget-tag">
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Organic</a></li>
                                <li><a href="#">Old Fashion</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Dress</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-image">
                        <div class="single-banner">
                            <img src="public/assets/images/banner/2.jpg" alt="">
                            <div class="item-disc">
                                <h2 class="title">#bestsellers</h2>
                                <a href="single-product-variable.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Page End  -->