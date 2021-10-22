<!-- Siehe Übung 92 -->
<?php if (isset($meldung)): ?>
    <p class="meldung"><?= $meldung ?></p>
<?php endif; ?>

<form action="einloggen.php" method="post">
    <input type="text" name="benutzername" id="benutzername" required="required" placeholder="Benutzername" />
    <input type="password" name="passwort" id="passwort" required="required" placeholder="Passwort" />
    <input type="submit" value="Einloggen" class="button" />
</form>