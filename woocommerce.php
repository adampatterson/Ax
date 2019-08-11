<?php
$data = get_fields();
$post = get_post();

include(get_template_part_acf('templates/partials/header'));

echo '<!-- master/page -->';
if (is_front_page()):
    echo '<!-- template: templates/content-home -->';
    include(get_template_part_acf('templates/content', 'home'));
else:
    if (is_sub_page($post)):
        $patent = get_post($post->post_parent);
        if (check_path('/templates/sub-' . $patent->post_name . '.php')):
            echo '<!-- template: templates/sub-' . $patent->post_name . ' -->';
        else:
            echo '<!-- template: templates/content-page.php -->';
            include(get_template_part_acf('templates/content', 'page'));
        endif;
    elseif (check_path('/templates/content-' . $post->post_name . '.php')):
        echo '<!-- template: templates/content-' . $post->post_name . ' -->';
        include(get_template_part_acf('templates/content', $post->post_name));

    else:
        echo '<!-- template: templates/content-page -->';
        include(get_template_part_acf('templates/woo', 'page'));
    endif;
endif;

include(get_template_part_acf('templates/partials/footer'));
