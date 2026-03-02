    </div> <!-- end main -->
    <footer class="footer">
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a href="<?= BASE_URL ?: 'index.php' ?>"><img src="styles/images/logo.png" alt="" />VIVUVIET</a>
                    </div>
                </div>
                <p class="footer_about__text">
                    ViVuViet tự hào là một đơn vị tiêu biểu trong lĩnh vực tour du lịch đón nhận giải thưởng uy tín nhất dành cho cộng đồng doanh nghiệp Việt Nam.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="footer_social_item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="footer_social_item">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">bản tin</div>
                <?php
                // show latest 3 posts
                $latest = getPosts(3);
                foreach ($latest as $p): ?>
                    <div class="footer_blog__item">
                        <div class="footer_blog__image">
                            <img src="<?= escape($p['image'] ?? 'styles/images/footer_blog_1.jpg') ?>" alt="" />
                        </div>
                        <div class="footer_blog__content">
                            <div class="footer_blog__title">
                                <a href="index.php?page=blog&amp;id=<?= $p['id'] ?>"><?= escape($p['title']) ?></a>
                            </div>
                            <div class="footer_blog__date"><?= date('d/m/Y', strtotime($p['created_at'])) ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Miền Bắc</a></li>
                    <li class="tags_item"><a href="#">Miền Trung</a></li>
                    <li class="tags_item"><a href="#">Miền Nam</a></li>
                    <li class="tags_item"><a href="#">Đà Nẵng</a></li>
                    <li class="tags_item"><a href="#">Quảng Nam</a></li>
                    <li class="tags_item"><a href="#">Huế</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div> <!-- end wrapper -->
<script>
    window.onscroll = function () {scrollFunction(), backTop()};
    function scrollFunction() {
        if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
            $(document).ready(function () { $(".top_bar").hide('slow'); });
        } else {
            $(document).ready(function () { $(".top_bar").show(); });
        }
    }
</script>
</body>
</html>