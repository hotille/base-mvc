<?php ob_start(); ?>
<h1>contact</h1>


<form method="post" action="<?= url('contact') ?>">
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