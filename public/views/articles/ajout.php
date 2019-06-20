<?php ob_start(); ?>


<form method="post" action="<?= url('ajout-article') ?>">
    <fieldset>

        <label for="name">Nom utilisateur:</label>
        <input type="text" id="name" name="name"> <br />

        <label for="pass">Mot de passe:</label>
        <input type="password" id="pass" name="pass"> <br />

        <input type="submit" value="connecter">

    </fieldset>
</form>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>