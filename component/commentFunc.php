<?php

/**
 * Cria um jumbotron fluido.
 * 
 * @param array associativo | dados do jumbotron 
 * (['titulo' => string, 'subtitulo' => string])
 * @return string | código HTML
 */

// Get the user's input from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $comment = $_POST['mensagem'];

    // Create a string to write to the file
    $comment_string = '<div class="col ms-5"><h3 class="row ms-3 texto-titulo">'.$name.'</h3><div class="row ms-4"><p class="texto">'.$comment.'</p></div></div><br><br>';

    // Open the file for writing and append the comment string
    $file = fopen("comments.txt", "a");
    fwrite($file, $comment_string);
    fclose($file);

    //Redireciona para a página anterior para evitar envio duplicado dos dados
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
 }



 
//  function jumbotron_fluido($data){
//    $html = '
//    <div class="jumbotron jumbotron-fluid">
//        <div class="container">
//            <h2 class="display-4">'.$data['titulo'].'</h2>
//            <p class="lead">'.$data['subtitulo'].'.</p>
//        </div>
//    </div>';
//    return $html;
// }

// $text = $_POST["mensagem"];
// $html = '<div class="row ms-2">
// <p class="texto">'.$text.'</p>
// </div>';


// $comment = fopen("../comment", "a");
// fwrite($comment, $html);

// fclose($comment);



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Recebe os dados do formulário
//     $nome = $_POST['nome'];
//     $comentario = $_POST['comentario'];

//     // Sanitiza os dados recebidos
//     $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
//     $comentario = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');

//     // Salva os dados em um arquivo de texto
//     $arquivo = 'comentarios.txt';
//     $handle = fopen($arquivo, 'a');
//     fwrite($handle, "$nome: $comentario\n");
//     fclose($handle);
    
//     // Redireciona para a página anterior para evitar envio duplicado dos dados
//     header('Location: ' . $_SERVER['HTTP_REFERER']);
//     exit;
// }




?>