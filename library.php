<?php
class Library {
    const MAX_BOOKS = 5;
    private $name;
    private $address;
    private $max;
    private $books = [];
    public function __construct($name, $address, $max) {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
    }
    public function showBooks() {
        if (count($this->books) == 0) {
            echo 'Aucun livre est enregistré';
            return;
        }
        ?>
        <table style="display: inline; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black;">Titre</th>
                <th style="border: 1px solid black;">Autheur</th>
                <th style="border: 1px solid black;" >Editeur</th>
                <th style="border: 1px solid black;">Nombre de page</th>
            </tr>
            <?php
            foreach ($this->books as $book){ ?>
                <tr>
                    <td style="border: 1px solid black;"><?= $book->getTitle() ?></td>
                    <td style="border: 1px solid black;"><?= $book->getAuthor() ?></td>
                    <td style="border: 1px solid black;" ><?= $book->getEditor() ?></td>
                    <td style="border: 1px solid black;"><?= $book->getPageNb() ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
    public function addBook($book){
        array_push($this->books, $book);
    }
    public function getBooksBy($author) {
        $list = [];
        foreach ($this->books as $book){
            if ($book->getAuthor() == $author) array_push($list, $book);
        }
        ?>
        <p>Livre ecrit par <?= $author ?> : <br>
        <table style="display: inline; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black;">Titre</th>
                <th style="border: 1px solid black;" >Editeur</th>
                <th style="border: 1px solid black;">Nombre de page</th>
            </tr>
            <?php
            foreach ($list as $book){ ?>
                <tr>
                    <td style="border: 1px solid black;"><?= $book->getTitle() ?></td>
                    <td style="border: 1px solid black;" ><?= $book->getEditor() ?></td>
                    <td style="border: 1px solid black;"><?= $book->getPageNb() ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
    public function removeBook($book){
        unset($this->books[array_search($book, $this->books)]);
    }
    public function removeTwinBook(){
        foreach ($this->books as $book){
            if (count(array_keys($this->books, $book)) > 1) {
                $this->removeBook($book);
            }
        }
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function getMax() {
        return$this->max;
    }
    public function setMax($max) {
        $this->max = $max;
    }
}