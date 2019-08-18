<div class="wrap">
    <h1>
        تنظیمات قالب
    </h1>

    <form action="" method="post">
        <div class="form-row">
            <label for="member_content_active">فعال بودت محتوای مخصوص اعضا :</label>

            <input type="checkbox"
                   name="member_content_archive" <?php checked( 1, $options['member_content_archive'] ); ?>>
        </div>
        <br>
        <div class="form-row">
            <button type="submit" name="save_options" class="button button-primary">ذخیره اظلاعات</button>
        </div>
    </form>
</div>