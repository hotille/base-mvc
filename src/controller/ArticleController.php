
<?php

class ArticleController {

public function article(){

view('pages.article');
}


public function ajoutArticle(){
dump($_POST);
}


}