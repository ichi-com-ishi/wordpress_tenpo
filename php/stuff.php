<?php 

$news_posts = get_posts('post_type=stuff&posts_per_page=10');
if ( !empty($news_posts) ): ?>
<section id="stuff">
<?php
foreach ( $news_posts as $post ):
    setup_postdata($post); ?>
    <table>
      <caption><?php echo get_post($post->ID,ARRAY_A)['post_title']; ?></caption>
      <tr>
        <th>業務内容</th>
        <th>勤務時間</th>
        <th>給与</th>
        <th>備考</th>
      </tr>
      <tr>
        <td><?php echo get_post_meta($post->ID, 'stuff_type', true); ?></td>
        <td><?php echo get_post_meta($post->ID, 'stuff_time', true); ?></td>
        <td><?php echo get_post_meta($post->ID, 'stuff_price', true); ?></td>
        <td><?php echo get_post_meta($post->ID, 'stuff_info', true); ?></td>
      </tr>
    </table>
<?php endforeach;
wp_reset_postdata(); ?>
</section>
<?php endif; ?>
