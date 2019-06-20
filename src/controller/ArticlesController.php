<?php

class ArticlesController {

    // Route GET ajout-article
    public function ajout() {
        view('articles.ajout');
    }

    // Route POST ajout-article
    public function save() {
        dump($_POST);
    }
}