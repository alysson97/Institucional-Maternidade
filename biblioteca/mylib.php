<?php

function geracomentario(){

    $comments = file_get_contents("component/comments.txt");
    echo $comments;
}