<?php
    function renderCategories($categories)
    {
        $localeCatSuffix = session()->get('locale'). '_' . 'name';

        foreach ($categories as $category) {
            if (!empty($category->children)) {
                ?>
                    <li>
                        <a href="#cat<?= $category->id ?>" data-toggle="collapse" aria-expanded="false">
                            <?= $category->$localeCatSuffix ?>
                        </a>

                        <ul class="collapse list-unstyled" id="cat<?= $category->id ?>">
                            <?php renderCategories($category->children) ?>
                        </ul>
                    </li>
        <?php
            } else {
                ?>
                    <li>
                        <a href="<?= base_url('category/' . $category->slug) ?>">
                            <?= $category->$localeCatSuffix ?>
                        </a>
                    </li>
        <?php
            }
        }
    }
?>

<!-- Sidebar Start -->
<aside class="seipkon-main-sidebar">
    <nav id="sidebar">
        <!-- Menu Section Start -->
        <div class="menu-section">
            <h3><?= lang('App.categories') ?></h3>
            <ul class="list-unstyled components">
                <?php renderCategories($categories ?? []) ?>
            </ul>
        </div>
        <!-- Menu Section End -->
    </nav>
</aside>
<!-- End Sidebar -->