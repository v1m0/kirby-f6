<?php

kirbytext::$tags['cvtable'] = array(
  'attr' => array(
    'datecell',
    'infocell'
  ),
  'html' => function($tag) {
      
    $uniqueid = uniqid();  
      
    switch ($tag->attr('cvtable')) {
      case 'start':
        $markup  = '<table class="cvtable">';
        break;
      case 'row':
        $markup  = '<tr><td class="datecell" markdown="1">' . $tag->attr('datecell') . '</td><td class="infocell" markdown="1">' . $tag->attr('infocell') . '</tr>';
        break;
      case 'end':
        $markup  = '</table>';
        break;
    }
    return $markup;
  }
    
);

?>
