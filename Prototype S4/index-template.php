<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle) ?> – <?= htmlspecialchars($nom) ?></title>
</head>
<body>
    <header>
        <h1>Mon Portfolio</h1>
        <nav>
            <ul>
                <?php foreach ($navigation as $lien => $texte): ?>
                    <li><a href="<?= htmlspecialchars($lien) ?>"><?= htmlspecialchars($texte) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <p>Bonjour, bienvenue sur mon portfolio.</p>
            <h1>Je suis <b><?= htmlspecialchars($nom) ?></b>,<br>apprenant en<br>développement web.</h1>
            <p>J’apprends à créer des sites web avec HTML, CSS et PHP. Voici quelques projets réalisés pendant ma formation.</p>
            <a href="#projet">Voir mes projets</a>
        </section>

        <section id="a-propos">
            <h2>À propos de moi</h2>
            <p><?= htmlspecialchars(mb_substr($texts, 0, 116)) ?>...</p>
        </section>

        <section id="projet">
            <h2>Mes projets</h2>
            <?php if (count($projets) > 0): ?>
                <p>Voici quelques exemples de mon travail (<?= count($projets) ?> projets)</p>
                <?php foreach ($projets as $projet): ?>
                    <article>
                        <img src="<?= htmlspecialchars($projet['image']) ?>"
                             alt="Aperçu du projet <?= htmlspecialchars($projet['titre']) ?>"
                             width="350">
                        <h3><?= htmlspecialchars($projet['titre']) ?></h3>
                        <p><?= htmlspecialchars($projet['description']) ?></p>
                        <p><?= htmlspecialchars($projet['tech']) ?></p>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Je n’ai pas encore de projets.</p>
            <?php endif; ?>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Tu veux discuter d’un projet ? Écris-moi !</p>
            <a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a>
        </section>
    </main>

    <footer>
        <p>© <?= date('d M Y', strtotime($date)) ?></p>
    </footer>
</body>
</html>