<?php require 'processor.php';



$list = [
    
    'Mango','Grape','Date'
    
];


foreach ( $list as $item ) :
    
    echo $item;
    
    form($item);
    
endforeach;