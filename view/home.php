<!-- SECTION -->
<section class="sectionAllFeatures">
    <section class="section--banner1">
        <img src="./src/image/img_header_hoan/slide.jpg" alt="">
    </section>
    <section class="grid wide section--product-1">

    </section>
    <section class="grid wide section__product--hot">
        <h2 class="title__menu--jj">SẢN PHẨM BÁN CHẠY</h2>
        <div class="section__product--hot__banner review__product--hot row">
            <?php
            foreach ($pronew as $pro) {
                extract($pro);
                $linkpro = "index.php?act=detail_product&id=" . $id;
                $hinh = $image_path . $avatar;
                $giagiam = $price * ($discount / 100);
                echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">  <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">   <p>' . $name . '</p></a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
                                <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </section>
    <section class="grid wide section__wrap--review--1">
        <div class="warp--review--1--row-1 ">
            <div class="review--1-row--1__img l-5 m-12 c-12">
                <img src="./src/image/img_header_hoan/image_one.png" alt="">
            </div>
        </div>
        <div class="section__product--hot__banner warp--review--1--row-2 row">
            <?php
            foreach ($pronew2 as $pro) {
                extract($pro);
                $linkpro = "index.php?act=detail_product&id=" . $id;
                $hinh = $image_path . $avatar;
                $giagiam = $price * ($discount / 100);
                echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">   <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">    <p>' . $name . '</p>  </a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                            <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
                            <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>
            <!--Hiện thị sản phẩm -->

        </div>
    </section>
    <section class="grid wide section__wrap--review--2">
        <div class="warp--review--2--row-1 ">
        </div>
        <div class="section__product--hot__banner warp--review--1--row-2 row">
            <?php
            foreach ($pronew3 as $pro) {
                extract($pro);
                $hinh = $image_path . $avatar;
                $linkpro = "index.php?act=detail_product&id=" . $id;
                $giagiam = $price * ($discount / 100);
                echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">  <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">    <p>' . $name . '</p>  </a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                            <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
                            <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </section>
    <section class="grid wide section__wrap--category--review">
        <div class="img--banner--category">
            <img src="./src/image/img_header_hoan/slide2.jpg" alt="">
        </div>

        <div class="category--review--flex row">
            <div class="grid wide category--col-1--name l-2-4">
                <h2>Danh mục sản phẩm</h2>
                <p class="p--category--product--menu">Trang chủ</p>
                <p class="p--category--product--menu">Sản phẩm</p>
                <div class="ul--sup--product--menu">
                    <ul>
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=showProducts&id=" . $id;
                            echo '<li><a href="' . $linkdm . '" >' . $name . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <p class="p--category--product--menu">Liên hệ</p>
                <p class="p--category--product--menu">Giới thiệu</p>
                <p class="p--category--product--menu">Tin tức</p>
            </div>

            <div class="category--grid--review  l-9">
                <div class="row">
                    <?php
                    foreach ($protop8 as $pr) {
                        extract($pr);
                        $linkpro = "index.php?act=detail_product&id=" . $id;
                        $hinh = $image_path . $avatar;
                        $giagiam = ($price * $discount) / 100;
                        echo ' <div class="col l-3 m-4 c-6 prodcut_mg_bottom">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">   <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">  <p>' . $name . '</p></a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>


                                <p class="product__banner__price--cost">' . number_format($price - $giagiam) . '<u>đ</u></p>




                                <p class="product__banner__price--sale product_one_price_old">
                                ' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
                <div class="grid wide review--category__p--more">
                    <a href="index.php?act=showProducts">
                        <p>Xem tất cả<i class="fa-solid fa-angle-right" style="margin-left: 5px; font-size: 17px;"></i>
                        </p>
                    </a>
                </div>
            </div>


        </div>

    </section>
</section>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.review__product--hot').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: '<span class="prevArrow" id="prevArrowLimited"><i class="fa-solid fa-chevron-left"></i></span>',
            nextArrow: '<span class="nextArrow" id="nextArrowLimited"><i class="fa-solid fa-chevron-right"></i></span',
            slidesToScroll: 1
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.warp--review--1--row-2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            // autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: '<span class="prevArrow" id="prevArrowLimited"><i class="fa-solid fa-chevron-left"></i></span>',
            nextArrow: '<span class="nextArrow" id="nextArrowLimited"><i class="fa-solid fa-chevron-right"></i></span',
            slidesToScroll: 1
        });
    });
</script>