<?php 
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    /* exemplo 2 */
    
    for ($i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
?>