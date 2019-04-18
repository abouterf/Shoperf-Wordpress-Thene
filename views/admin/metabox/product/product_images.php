<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.add_slider_item').on('click', function (event) {
            $('.slider_item_wrapper').append('    <p>\n' +
                '        <input type="text" name="slider[]"><a href="#" class="remove_slider_item"><span style="text-decoration: none" class="dashicons dashicons-no-alt"></span></a>\n' +
                '    </p>');
            event.preventDefault();

        });

        $(document).on('click', '.remove_slider_item', function (event) {
            event.preventDefault();
            var $this = $(this);
            $this.parent().remove();
        });
    });
</script>


<p>
    <a href="#" class="add_slider_item">اضافه کردن</a>
</p>


<div class="slider_item_wrapper">

	<?php $slider_images = get_post_meta( $post->ID, 'slider_images', true );
	?>
	<?php if ( ! empty( $slider_images ) && isset( $slider_images ) && count( $slider_images ) > 0 ) : ?>
		<?php foreach ( $slider_images as $slider_image ): ?>
            <p>
                <input type="text" name="slider[]" value="<?php echo $slider_image; ?>">
                <a class="remove_slider_item" href="#"><span style="text-decoration: none" class="dashicons dashicons-no-alt"></span></a>
            </p>
		<?php endforeach; ?>
	<?php else: ?>
        <p>
            <input type="text" name="slider[]">
            <a class="remove_slider_item" href="#"><span style="text-decoration: none" class="dashicons dashicons-no-alt"></span></a>
        </p>
	<?php endif; ?>


</div>