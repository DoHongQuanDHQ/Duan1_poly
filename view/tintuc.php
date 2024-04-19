<section class="ctn__size--width login__acc">
  <div class="login__top--title">
    <div class="login__top--title-menu">
      <ul class="menu__children_header--bottom">
        <li>
          <a href="">Trang chủ</a> <i class="fa-solid fa-angle-right"></i>
        </li>
        <li>
          <a href="">Tin tức</a>
        </li>
      </ul>
    </div>
    <div class="login__top--title-2">
      <p class="title_login--children">Tin tức</p>
    </div>
  </div>
  <div class="login__bottom-form tintuc__ctn">
    <div class="tintuc__left--menu">
      <div class="tintuc__left--menu-top">
        <div>
          <h4 class="title__menu--jj">DANH MỤC TIN TỨC</h4>
        </div>
        <div>
          <ul class="menu__left--children">
            <li class="nav_li">
              <a href="index.php">Trang chủ</a>
            </li>
            <li class="nav_li">
              <a href="index.php?act=showProducts">Sản phẩm</a>
              <i class="fa-solid fa-angle-down show__nav" onclick="chan(this)"></i>
              <ul class="sub__menu--children">
                <li>
                  <a href="">Giày nam</a>
                </li>
                <li>
                  <a href="">Giày nữ</a>
                </li>
                <li>
                  <a href="">Giày bé trai</a>
                </li>
                <li>
                  <a href="">Giày bé gái</a>
                </li>
              </ul>
            </li>
            <li class="nav_li">
              <a href="index.php?act=lienhe">Liên hệ</a>
            </li>
            <li class="nav_li">
              <a href="index.php?act=gioithieu">Giới thiệu</a>
            </li>
            <li class="nav_li">
              <a href="index.php?act=tintuc">Tin tức</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tintuc__left--menu-bottom">
        <div>
          <h4 class="title__menu--jj">
            <a class="cls__f_t_a" href="">SIÊU BÃO VỀ GIÁ</a>
          </h4>
        </div>
        <div class="content__sbvg--ctn">
          <?php
          foreach ($listLowPrice as $value) {
            $priceFM = number_format($value['price'] - ($value['price'] / 100) * $value['discount'], 0, '', ',');
            echo '
                  <div class="rows_sbvg">
                    <div class="sbvg__image">
                      <img
                        src="imageProduct/' . $value['avatar'] . '"
                        alt="" srcset="" />
                    </div>
                    <div class="sbvg__content">
                      <p>
                        <a href="index.php?act=detail_product&id=' . $value['id'] . '" class="cls__f_t_a">' . $value['name'] . '</a>
                      </p>
                      <p class="price__sbvg">' . $priceFM . ' đ</p>
                      <p class="price__sbvg-old">' . number_format($value['price'], 0, '', ',') . ' đ</p>
                    </div>
                  </div>
              ';
          }

          ?>
        </div>
      </div>
    </div>
    <div class="tintuc__right--content">
      <div class="tintuc__noibat">
        <div class="anh__ttnb">
          <a href=""><img src="./src/image/img_header_hoan/Tintuc.webp" alt="" class="daupage" /></a>
        </div>
        <div class="noidung__ttnb">
          <h4>
            <a href="" class="cls__f_t_a">Top 10 mẫu giày sneaker Nike sẽ trở thành hot trend trong 2024</a>
          </h4>
          <p>
            Top 10 mẫu giày sneaker Nike sẽ trở thành hot trend trong 2024
            Bước vào năm 2024, việc lựa chọn một đôi giày sneaker Nike phản ánh phong cách cá nhân trở nên khá phong phú
            và đa dạng.
            Từ những đường nét cổ điển đến những kiểu dáng đậm chất biểu tượng,
            Nike không ngừng định hình lại bức tranh thời trang đương đại. Trong bài viết này, Authentic Shoes sẽ khám
            phá các mẫu giày Nike dự đoán sẽ làm nên trào lưu nổi bật trong năm 2024. Tận hưởng sự kết hợp giữa sự kinh
            điển và xu hướng mới, các mẫu giày sneaker này hứa hẹn sẽ làm đổ bộ vào tủ giày của bạn với sức hút không
            thể chối từ.
          </p>
        </div>
      </div>
      <h3 class="bvk__op0">BÀI VIẾT KHÁC</h3>
      <div>
        <div class="list__tintuc-card">
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-16.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">7 đôi giày thể thao địa hình tốt nhất</a>
              </h4>
              <p class="contentt__child33">
                Nêu bạn là người đam mê thể thao mạo hiểm,
                yêu thích bộ môn leo núi hay đi bộ đường dài thì bài viết này là dành cho bạn.
                Sau đây, Authentic shoes sẽ tổng hợp 7 đôi giày thể thao ” đỉnh của chóp”
                rất có thể sẽ lọt vào mắt xanh của bạn.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-34.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">8 đôi giày chạy adidas tốt nhất 2023 cho nữ</a>
              </h4>
              <p class="contentt__child33">
                Adidas khởi nguồn từ năm 1924, khi nhà sáng lập Adi Dassler bắt đầu thành lập một công ty giày ở Đức.
                Giày chạy bộ, đặc biệt là giày chạy dành cho nữ, là lĩnh vực đầu tiên mà thương hiệu non trẻ này gặt hái
                được thành công: Lina Radke đã giành huy chương vàng tại Thế vận hội 1928 khi mang một đôi giày của
                Dassler.
                Kể từ khi sử dụng tên Adidas từ năm 1949, thương hiệu này đã mở rộng sản xuất giày và quần áo cho tất cả
                các môn thể thao, nhưng chạy bộ vẫn là một trọng tâm thiết yếu.
                Theo chân Authetic shoes khám phá kết cấu của những đôi giày chạy dành cho nữ từ nhà Adidas.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-37.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">Tất tần tật về Nike Sportwear – Biểu tượng thời trang và thể thao</a>
              </h4>
              <p class="contentt__child33">
                Trong thế giới ngày nay, thể thao không chỉ là về việc rèn luyện sức khỏe và vận động mà còn là một phần
                của văn hóa,
                một biểu tượng của phong cách cá nhân. Và giữa sự gặp gỡ giữa thể thao và phong cách,
                Nike Sportwear đã nổi lên như một biểu tượng độc đáo, mang đến sự kết hợp tuyệt vời giữa hiệu suất và cá
                nhân hóa trong thời trang thể thao. Nhắc đến Nike Sportwear, chúng ta không chỉ nghĩ đến các sản phẩm
                chất lượng với công nghệ tiên tiến mà còn là một cảm nhận về sự sáng tạo và phát triển về mặt văn hóa.
                Hãy cùng Authentic Shoes khám phá sâu hơn về Nike Sportwear và cái nhìn độc đáo mà nó mang lại trong bài
                viết này.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-30.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">Tại sao adidas Handball Spezial là đôi giày hot nhất hiện nay?</a>
              </h4>
              <p class="contentt__child33">
                Mặc dù năm 2023 có thể là năm của Samba, nhưng một hình bóng khác của adidas đã thu hút sự chú ý của
                chúng ta vào năm 2024.
                Tính đến thời điểm hiện tại trong năm nay, Handball Spezial đã là hình bóng đột phá của thương hiệu
                Three Stripes.
                Có thể dễ dàng nhận thấy nhu cầu về hình bóng tăng hơn 90% so với năm ngoái và thật dễ hiểu tại sao.
                Với mức giá phải chăng là £85 và với nhiều màu sắc đáng kinh ngạc để lựa chọn, Handball Spezial đang trở
                thành đôi giày phải có cho mùa Xuân/Hè.
                Vậy lí do cho sự bùng nổ của nó là gì?
                Hãy cùng Authentic Shoes khám phá nhé!
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-20.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">Adidas Campus 00s: Những phối màu bắt mắt bạn nên sở hữu</a>
              </h4>
              <p class="contentt__child33">
                Adidas Campus 00s: Những phối màu bắt mắt bạn nên sở hữu
                Nếu bạn đam mê những mẫu giày thể thao lấy cảm hứng từ văn hóa trượt băng,
                thì adidas Campus 00s với phần đế ấn tượng, là đôi giày thể thao tối thượng không thể thiếu trong
                năm2024.
                Trong bài viết này, Authentic Shoes sẽ cung cấp cho bạn những màu sắc phù hợp nhất để bạn thêm vào bộ
                sưu tập của mình.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-12.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">9 đôi Travis Scott x Nike được đồn đoán sẽ ra mắt trong năm nay</a>
              </h4>
              <p class="contentt__child33">
                Có vẻ như mỗi tuần đều có một phiên bản Nike x Travis Scott mới được giới thiệu.
                Từ những bức ảnh lén lút trêu chọc một chiếc giày trên Instagram cho đến việc rapper
                hoàn toàn mặc một đôi Jordan vô hình cho đến lễ trao giải Grammy trước hàng trăm nghìn người, bạn không
                thể thoát khỏi sự cường điệu mà Travis đang gây ra.
                Chúng ta đều gặp khó khăn trong việc theo dõi tất cả những đôi giày thể thao mới này và ngày phát hành
                được đồn đại,
                vì vậy Authentic Shoes đã tổng hợp từng đôi giày thể thao Nike x Travis Scott có thể sẽ được phát hành.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-17.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">Nike cần mang những phối màu Air Zoom Spiridon này quay trở lại!</a>
              </h4>
              <p class="contentt__child33">
                Ra đời vào năm 1997, đôi giày Air Zoom Spiridon lâu năm của Nike được đặt theo tên của Spyridon Louis,
                người đã giành huy chương vàng nội dung chạy marathon ở Thế vận hội 1896.
                Và trong khi các tín đồ sneaker yêu thích hình dáng này thì Spiridon chưa bao giờ đạt được thành công về
                mặt thương mại. Sau khi ra mắt vào cuối những năm 90,
                eam Swoosh đã ban phước cho Zoom Spiridon bằng một chuỗi các bản phát hành cổ điển trong suốt năm 2005
                và 2006, và sau đó là một lần nữa trong khoảng thời gian từ 2016-2018.
              </p>
            </div>
          </div>
          <div class="l__tt_c_children">
            <div class="anh__ttnb size__df">
              <a href=""><img src="./src/image/img_header_hoan/product-11.webp" alt="" srcset="" /></a>
            </div>
            <div class="noidung__ttnb">
              <h4>
                <a href="" class="cls__f_t_a">Điểm danh những đôi Air Jordan Retro sẽ có mặt giữa 2024 này</a>
              </h4>
              <p class="contentt__child33">
                Lại là thời điểm đó: Jordan Brand đã cho chúng ta xem trước những gì sẽ diễn ra trong những tháng tới.
                Authentic Shoes đã tổng hợp tất cả những phát hành mới nhất của Air Jordan Retro vào giữa năm (Mùa hè)
                2024,
                từ các phối màu OG cho đến các phiên bản cổ điển.
                Hãy kéo xuống và xem phối màu nào sẽ được ra mắt trong thời gian sắp tới nhé!
              </p>
            </div>
          </div>
        </div>
        <div>
          <ul class="chuyentiep__tintuc">
            <li class="next active"><a href="" class="cls__f_t_a">1</a></li>
            <li class="next"><a href="" class="cls__f_t_a">2</a></li>
            <li class="next"><a href="" class="cls__f_t_a">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section>