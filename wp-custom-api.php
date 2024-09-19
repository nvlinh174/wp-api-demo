<?php
add_action('rest_api_init', function () {
  register_rest_field('post', 'featured_media_url', [
    'get_callback' => function ($post) {
      $post_id = $post['id'];
      $url = '';

      if ($post_id) $url = get_the_post_thumbnail_url($post_id);

      return $url;
    }
  ]);

  register_rest_field('post', 'author_nickname', [
    'get_callback' => function ($post) {
      $author_id = $post['author'];
      return get_the_author_meta('nickname', $author_id);
    }
  ]);
});
