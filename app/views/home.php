<?php
// view: home.php
?>
<!-- homepage static content pulled from original index.html -->
        <!--slider-->
        <div class="main__slide">
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/bana-slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInLeft">
                        <h1>tour</h1>
                        <h1>Bana Hill</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/hoian-slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInRight">
                        <h1>tour</h1>
                        <h1>Hội An</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/phuquoc_slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInDown">
                        <h1>tour</h1>
                        <h1>Phú Quốc</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="main_slide__nav nav__prev"><i onclick="plusSlides(-1)" class="fas fa-chevron-circle-left"></i>
            </div>
            <div class="main_slide__nav nav__next"><i onclick="plusSlides(1)"
                                                      class="fas fa-chevron-circle-right"></i></i>
            </div>
            <div class="main_slide__dots">
                <ul class="customs_dots">
                    <li class="customs_dot active" onclick="currentSlide(1)">01.</li>
                    <li class="customs_dot" onclick="currentSlide(2)">02.</li>
                    <li class="customs_dot" onclick="currentSlide(3)">03.</li>
                </ul>
            </div>
        </div>
        <div class="main_search">
            <div id="tabs" class="main_search__tabs">
                <ul class="search_tabs__list">
                    <li class="search_tabs__item"><a href="#tabs-1"><i
                            class="fas fa-hotel"></i><span>Khách sạn</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-2"><i
                            class="fas fa-car"></i><span>Xe cho thuê</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-3"><i class="fas fa-plane"></i><span>Chuyến bay</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-4"><i
                            class="fas fa-umbrella-beach"></i><span>Trips</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-5"><i
                            class="fas fa-ship"></i><span>Du thuyền</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-6"><i class="fas fa-hiking"></i><span>Hoạt động</span></a>
                    </li>
                </ul>
                <div id="tabs-1" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <!-- ... the rest of the tabs and homepage content is identical to the original index.html  -->