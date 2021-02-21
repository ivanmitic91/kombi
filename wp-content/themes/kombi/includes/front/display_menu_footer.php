<?php

function display_menu_footer($item)
{

    $pages = wp_get_nav_menu_items($item);

    $subMenuPages = array_filter($pages, function ($item) {
        return $item->menu_item_parent;
    });

    $subMenu = [];

    foreach ($subMenuPages as $item) {
        $subMenu[$item->menu_item_parent][] = $item;
    }

    $page_id = $page_id = get_queried_object_id();

    foreach ($pages as $key => $item) {

        if (!$item->menu_item_parent && !array_key_exists($item->ID, $subMenu)) { ?>

            <li>

                <?php if ($pages[$key]->object_id == $page_id) { ?>

                    <a class="active" href="<?= $item->url ?>">
                        <?= $item->title ?>
                    </a>

                <?php } else { ?>

                    <a href="<?= $item->url ?>">
                        <?= $item->title ?>
                    </a>

                <?php } ?>

              </li>

        <?php }

    }
}
