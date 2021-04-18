<?php

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$lista = $ksiazki->pobierzBestsellery();

?>
<div class="col-md-2">
    <h2>Bestsellery</h2>
    <ul class="list-group">
        <?php foreach ($lista as $ksiazka) : ?>
            <li class="list-group-item" onclick="location.href='ksiazki.szczegoly.php?id=<?= $ksiazka['id'] ?>'">
                <?php if (!empty($ksiazka['zdjecie'])) : ?>
                    <img src="zdjecia/<?= $ksiazka['zdjecie'] ?>" alt="<?= $ksiazka['tytul'] ?>" class="img-thumbnail" />
                <?php else : ?>
                    brak zdjęcia
                <?php endif; ?>
                <p><a href="ksiazki.szczegoly.php?id=<?= $ksiazka['id'] ?>" title="szczegóły"><?= $ksiazka['tytul'] ?></a></p>
                <strong><em><?= $ksiazka['imie']."." .$ksiazka['nazwisko'] ?></em></strong>
            </li>

        <?php endforeach; ?>

    </ul>

</div>