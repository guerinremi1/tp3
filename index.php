<?php
require 'book.php';
require 'library.php';
?>

    <!doctype html>
    <html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test de POO</title>
</head>
<body style="text-align: center">
<h2>Page de test des classe book et library</h2>
<h4><a href="https://github.com/Retrovers/cours-WEB/tree/master/td4" target="_blank">Voir le code source</a></h4>
<p>
    - Création de l'instance pour la classe Library, elle a pour nom "Mon centre", comme adresse "Stade velodrome, marseille";
</p>
<?php
$library = new Library("Mon centre", "Stade velodrome, Marseille", 3);
?>
<p>
    - Creation de 3 livres
</p>
<?php
$book1 = new Book("Mon super livre 1", "Villas-Boas", "OM", 30);
$book2 = new Book("Mon super livre 2", "Galtier", "LOSC", 10);
$book3 = new Book("Mon super livre 3", "Tuchel", "PSG", 1);
$book4 = new Book("La legende", "Villas-Boas", "OM", 50);
?>
<p>
    - Ajout des livres dans la Library "Mon centre" et un doublon
</p>
<?php
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book2);
$library->addBook($book4);
?>
<p>
    - Affichage des livres
</p>
<?php
$library->showBooks();
?>
<p>
    - Supression des doublons
</p>
<?php
$library->removeTwinBook();
?>
<p>
    - Affichage des livres
</p>
<?php
$library->showBooks();
?>
<p>
    - Supression d'un livre
</p>
<?php
$library->removeBook($book3);
?>
<p>
    - Affichage des livres
</p>
<?php
$library->showBooks();
?>
<p>
    - Prendre les livres ecrit uniquement par "Villas-Boas"
</p>
<?php
$library->getBooksBy("Villas-Boas");
?>
</body>
    </html><?php
