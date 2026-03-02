<?php
// view: blog.php
// expects $posts or $post
?>

<div class="main__slide_offers">
    <div class="home_slide__item">
        <div class="home_slide__background" style="background-image: url(styles/images/offers_slide.jpg)"></div>
        <div class="home__content">
            <div class="home__title animated bounceInDown">Tin tức</div>
        </div>
    </div>
</div>

<?php if (isset($post)): ?>
    <div class="blog_post_single">
        <h2><?= escape($post['title']) ?></h2>
        <p><em><?= date('d/m/Y', strtotime($post['created_at'])) ?></em></p>
        <div><?= nl2br(escape($post['content'])) ?></div>
    </div>
<?php else: ?>
    <div class="blog">
        <div class="box blog__box">
            <div class="blog__list">
                <?php
                $posts = getPosts(10);
                foreach ($posts as $p): ?>
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img class="zoom_img" src="<?= escape($p['image'] ?? 'styles/images/blog_1.jpg') ?>" alt="">
                            <div class="blog_post_date"><span><?= date('d/m/Y', strtotime($p['created_at'])) ?></span></div>
                        </div>
                        <div class="blog_post_meta">
                            <ul>
                                <li class="blog_post_meta_item"><a href="#">by <?= escape($p['author']) ?></a></li>
                                <li class="blog_post_meta_item"><a href="#"><?= escape($p['category']) ?></a></li>
                            </ul>
                        </div>
                        <div class="blog_post_title"><a href="index.php?page=blog&amp;id=<?= $p['id'] ?>"><?= escape($p['title']) ?></a></div>
                        <div class="blog_post_text"><p><?= nl2br(escape(substr($p['content'],0,200))) ?>...</p></div>
                        <div class="blog_post_link"><a href="index.php?page=blog&amp;id=<?= $p['id'] ?>">Xem tiếp...</a></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="blog__sidebar">
                <!-- sidebar content can also be dynamic -->
            </div>
        </div>
    </div>
<?php endif; ?>

