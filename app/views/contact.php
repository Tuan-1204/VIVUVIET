<?php
// view: contact.php
// expects $errors and $successMsg variables
?>

<div class="main__slide_offers">
    <div class="home_slide__item">
        <div class="home_slide__background" style="background-image: url(styles/images/offers_slide.jpg)"></div>
        <div class="home__content">
            <div class="home__title animated bounceInDown">Liên hệ</div>
        </div>
    </div>
</div>

<div class="contact_form_container">
    <div class="box contact_form__box">
        <div class="contact_form__title">Form liên hệ</div>
        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $e): ?><li><?= escape($e) ?></li><?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($successMsg): ?>
            <div class="success"><?= escape($successMsg) ?></div>
        <?php endif; ?>
        <form action="" id="form_contact" class="contact__form" method="post" name="form_contact">
            <label>
                <input
                    id="form_name"
                    class="contact__form_name input_field"
                    name="name"
                    placeholder="Họ và Tên"
                    type="text"
                    value="<?= escape($_POST['name'] ?? '') ?>"
                />
            </label>
            <label>
                <input
                    id="form_email"
                    class="contact__form_email input_field"
                    name="email"
                    placeholder="E-mail"
                    type="text"
                    value="<?= escape($_POST['email'] ?? '') ?>"
                />
            </label>
            <label>
                <input
                    id="form_subject"
                    class="contact__form_subject input_field"
                    name="subject"
                    placeholder="Chủ đề"
                    type="text"
                    value="<?= escape($_POST['subject'] ?? '') ?>"
                />
            </label>
            <textarea
                name="mess"
                id="form_mess"
                placeholder="Nội dung"
                rows="4"
                class="contact__form_mess input_field"><?= escape($_POST['mess'] ?? '') ?></textarea>
            <input
                type="submit"
                class="contact__form_button button trans_200"
                value="Gởi đi"
            />
        </form>
    </div>
</div>

<div class="contact__info">
    <div class="box contact__info_box">
        <h2>Địa chỉ</h2>
        <p>- Xóm 4 , Thôn Đình Cao, Xã Tiên Tiến , Tỉnh Hưng Yên -</p>
    </div>
</div>
<div class="contact__map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7464.295367698883!2d106.18577959034951!3d20.704226709441745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359531989c3dd7%3A0x3e44d65b98f65e20!2zxJDDrG5oIENhbywgUGjDuSBD4burLCBIxrBuZyBZw6puLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1772469528540!5m2!1svi!2s"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
</div>

