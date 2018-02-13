<?php

class Autoloader {
    // Quand une fonction est static on peut directement sans instancier la classe.
    // Elle est déconnectée de l'objet, elle appartient à la classe, pas a l'objet !
    // Elles ne peuvent appeler que des fonctions static, elles ne communiquent entre elle
    // Une fonction "normal" peut appeler une fonction static avec "self" qui fait référence à la classe et "this" à l'objet.
    public static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class) {
        echo 'Autoload pour : ';
            print_r($class);
        echo '<br>';
    }
}