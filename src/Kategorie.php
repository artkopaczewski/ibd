<?php

namespace Ibd;

class Kategorie
{
    /**
     * Instancja klasy obsługującej połączenie do bazy.
     *
     * @var Db
     */
    private $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    /**
     * Pobiera wszystkie kategorie.
     *
     * @return array
     */
    public function pobierzWszystkie(): array
    {
        $sql = "SELECT * FROM kategorie";

        return $this->db->pobierzWszystko($sql);
    }

    public function titles(int $id):array
    {
        $titles = "SELECT tytul FROM ksiazki WHERE id = $id";
        return $this->db->pobierzWszystko($titles);
    }

    public function opis(int $id):array
    {
        $opis = "SELECT opis FROM ksiazki WHERE id = $id";
        return $this->db->pobierzWszystko($opis);
    }

    public function cena(int $id):array
    {
        $cena = "SELECT cena FROM ksiazki WHERE id = $id";
        return $this->db->pobierzWszystko($cena);
    }

    public function liczba_stron(int $id):array
    {
        $liczba_stron = "SELECT liczba_stron FROM ksiazki WHERE id = $id";
        return $this->db->pobierzWszystko($liczba_stron);
    }

    public function autor(int $id):array
    {
        $autor = "SELECT autor FROM autorzy join ksiazki on (autorzy.id = ksiazki.id) WHERE ksiazki.id = $id";
        return $this->db->pobierzWszystko($autor);
    }


}
