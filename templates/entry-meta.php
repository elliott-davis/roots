<div class="postmeta">
  <?php if(get_post_meta($post->ID, 'cat1', true)):  ?><span class='fa fa-star'><?php echo get_post_meta($post->ID, 'cat1', true); ?></span><?php endif; ?>
  <?php if(get_post_meta($post->ID, 'cat2', true)):  ?><span class='cat2'><?php echo get_post_meta($post->ID, 'cat2', true); ?></span><?php endif; ?>
  <?php if(get_post_meta($post->ID, 'cat3', true)):  ?><span class='cat3'><?php echo get_post_meta($post->ID, 'cat3', true); ?></span><?php endif; ?>
</div>
