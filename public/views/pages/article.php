<?php ob_start(); ?>
<h1>article</h1>


<form method="post" action="<?= url('article') ?>">
    <fieldset>

        <label for="name">email</label>
        <input type="text" id="name" name="name"> <br />

        <label for="text">texte</label>
        <input type="text" id="pass" name="text"> <br />

        <input type="submit" value="connecter">

    </fieldset>
</form>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>