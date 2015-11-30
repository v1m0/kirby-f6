<nav class="headlanguages">
    <ul>
        <?php foreach($site->languages() as $language): ?>
            <li<?php e($site->language() == $language, ' class="active"') ?>>
            <a href="<?php echo $page->url($language->code()) ?>">
            <?php echo html($language->name()) ?>
            </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>