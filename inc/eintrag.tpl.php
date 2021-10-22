<article class="eintrag">
    <header class="eintrag_oben">
        <h1><?= bereinige($e['titel']) ?></h1>
    </header>

    <p>
        <?= nl2br(bereinige($e['inhalt'])) ?>
    </p>

    <footer class="eintrag_unten">
        <span>
            geschrieben von
            <?= BENUTZER_DATEN[$e['autor']]['vorname'] ?>
            <?= BENUTZER_DATEN[$e['autor']]['nachname'] ?>
            am
            <time datetime="">
                <?= strftime('%d.%m.%Y um %H:%M', strtotime($e['erstellt_am'])) ?>
            </time>
        </span>
    </footer>
</article>