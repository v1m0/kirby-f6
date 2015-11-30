<?php

kirbytext::$tags['accordion'] = array(
  'attr' => array(
    'title'
  ),
  'html' => function($tag) {
      
    $uniqueid = uniqid();  
      
    switch ($tag->attr('accordion')) {
      case 'open':
        $markup  = '<div class="panel panel-default"><div class="panel-heading" role="tab" id="heading' . $uniqueid . '"><h6 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#' . $uniqueid . '" href="#collapse' . $uniqueid . '" aria-expanded="false" aria-controls="collapse' . $uniqueid . '">';
        $markup .= $tag->attr('title');
        $markup .= '</a></h6></div><div id="collapse' . $uniqueid . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' . $uniqueid . '"><div class="panel-body" markdown="1">';
        break;
      case 'close':
        $markup  = '</div></div></div>';
        break;
    }
    return $markup;
  }
    
);

?>
