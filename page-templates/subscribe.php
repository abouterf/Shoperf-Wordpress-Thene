<?php
/* Template Name: Subscribe */
?>


<?php if (isset($_POST['subscribe_submit'])){
    global $wpdb,$table_prefix;
    $insert_data = [
        'mobile' => sanitize_text_field($_POST['mobile']),
        'created_at' =>date('Y-m-d H:i:s')
    ];
    $table_name = $table_prefix.'subscribers';
    $wpdb->insert($table_name,$insert_data);
} ?>

<div class="wrapper">

    <form action="" method="post">

        <div class="form-row">
            <input type="text" name="mobile" placeholder="شماره تلفن خود را وارد کنید.">
        </div>

        <div class="form-row">
            <input type="submit" name="subscribe_submit" value="ارسال">
        </div>
    </form>

</div>
