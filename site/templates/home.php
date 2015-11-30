<?php snippet('header') ?>



<div id="home-orbit" role="region" class="orbit" aria-label="Residence Concept" data-orbit data-options="timerDelay: 500">
    

<ul class="orbit-container">
    
    <button class="orbit-previous" aria-label="previous">&#9664;</button>
    <button class="orbit-next" aria-label="next">&#9654;</button>

    <?php 
        $j=0;
        foreach($page->images() as $image){
            if($j==0){
                echo '<li class="is-active orbit-slide"><img class="orbit-image" src="'. $image->url() .'"></li>';
            }else{
                echo '<li class="orbit-slide"><img class="orbit-image" src="'. $image->url() .'"></li>';
            }
            $j++;
        }
    ?>
    
</ul>
    
<nav class="orbit-bullets"> 
    <?php 
        $j=0;
        foreach($page->images() as $image){
            if($j==0){
                echo '<button class="is-active" data-slide="0"></button>';
            }else{
                echo '<button data-slide="' . $j . '"></button>';
            }
            $j++;
        }
    ?>

</nav>
    
</div>





<h1><?php echo $page->catchphrase()->html() ?></h1>
<?php echo $page->text()->kirbytext() ?>


<?php snippet('footer') ?>