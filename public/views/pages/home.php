<?php ob_start(); ?>
    <h1>Bienvenue !</h1>

    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, 
        tempora? Veritatis, architecto atque? Nulla, labore nihil distinctio optio 
        voluptate sapiente, saepe fuga unde praesentium in molestiae veritatis voluptas 
        necessitatibus sequi!</P>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>