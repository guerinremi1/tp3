<?php
class Book {
    private $title;
    private $author;
    private $editor;
    private $pageNb;
    public function __construct($title, $author, $editor, $pageNb) {
        $this->title = (string) $title;
        $this->author = (string) $author;
        $this->editor = (string) $editor;
        $this->pageNb = (int) $pageNb;
    }
    public function getTitle () {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = (string) $title;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function setAuthor($author) {
        $this->author = (string) $author;
    }
    public function getEditor() {
        return $this->editor;
    }
    public function setEditor($editor) {
        $this->editor = (string) $editor;
    }
    public function getPageNb() {
        return $this->pageNb;
    }
    public function setPageNb($pageNb) {
        $this->pageNb = (int) $pageNb;
    }
    public function show(){
        echo 'Voici le livre de ' . $this->getAuthor() . '. Il a été edité par ' . $this->getEditor()
            . '. Le livre s\'apelle ' . $this->getTitle() . ' et il contient ' . $this->getPageNb() . ' pages.';
    }
}