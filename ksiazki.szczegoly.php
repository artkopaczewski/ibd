<?php

// jesli nie podano parametru id, przekieruj do listy książek
if(empty($_GET['id'])) {
    header("Location: ksiazki.lista.php");
    exit();
}

$id = (int)$_GET['id'];

include 'header.php';

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$dane = $ksiazki->pobierz($id);
?>

    <h1><?=$dane['tytul']?></h1>

    <div class="row">

        <?php if (!empty($dane['zdjecie'])) : ?>
            <img src="zdjecia/<?= $dane['zdjecie'] ?>" alt="<?= $dane['tytul'] ?>" class="img-thumbnail" />
        <?php else : ?>
            brak zdjęcia
        <?php endif; ?>


        <div class="col-10">
            <table class="table">
                <tr>
                    <h1 style="text-align:center;">Opis</h1>
                    <td><?= $dane['opis'] ?></td>
                </tr>
                <tr>
                    <td><strong>Cena</strong></td>
                    <td><?= $dane['cena'] ?></td>
                </tr>
                <tr>
                    <td><strong>Liczba stron</strong></td>
                    <td><?= $dane['liczba_stron'] ?></td>
                </tr>
                <tr>
                    <td><strong>ISBN</strong></td>
                    <td><?= $dane['isbn'] ?></td>
                </tr>

            </table>
        </div>
    </div>


    <p>
        <a href="ksiazki.lista.php"><i class="fas fa-chevron-left"></i> Powrót</a>
    </p>


<?php include 'footer.php'; ?>