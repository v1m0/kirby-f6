<div class="top-bar hide-for-small-only">
<ul class="dropdown menu" data-dropdown-menu data-options="disableHover: true; closingTime: 2000; closeOnClick: true;">
    <li><a href="<?php echo $pages->find('home')->url() ?>"><?php echo $pages->find('home')->title() ?></a></li>
    
    <?php foreach($pages->visible() as $p): ?>
    
        <?php if($p->hasVisibleChildren()): ?>

            <li><a><?php echo $p->title()->html() ?></a>
                <ul class="menu">
                    <?php foreach($p->children()->visible() as $p): ?>
                    <li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
                    <?php endforeach ?>
                </ul>
            </li>

        <?php else: ?>

            <li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
    
        <?php endif ?>
    
    <?php endforeach ?>    
</ul>
</div>
