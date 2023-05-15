<?php   

    include '../biblioteca/mylib.php';
    #criar uma função e colocar no arquivo que vai ser recebido pelo formulario.

    #essa função vai escrever no arquivo de texto na pasta do projeto.

    #colocar um include na aba de comentários da página e esse include vai printar o html que está contido no arquivo de texto.

    // $comments = file_get_contents("component/comments.txt");
    // echo $comments;
    geracomentario();





    // $comment = fopen("../comment", "r") or die("Não foi possível abrir o arquivo");
    // while(!feof($comment)) {
    //     echo fgets($comment) . "<br>";
    //   }
    //   fclose($comment);



    // // Lê o conteúdo do arquivo de texto
    // $conteudo = file_get_contents('comentarios.txt');

    // // Quebra o conteúdo em linhas
    // $linhas = explode("\n", $conteudo);

    // // Exibe os comentários como HTML
    // echo '<ul>';
    // foreach ($linhas as $linha) {
    //     if (!empty($linha)) {
    //         echo '<li>' . htmlspecialchars($linha, ENT_QUOTES, 'UTF-8') . '</li>';
    //     }
    // }
    // echo '</ul>';


    // Read the contents of the file into a string
    

    // Split the string into an array of individual comments
    // $comments_array = explode("\n", $comments);

    // // Loop through the comments array and display each comment

   
    // foreach ($comments_array as $comment) {
    //     // Ignore empty lines
    //     if (!empty($comment)) {
    //         // Parse the comment string into its parts
    //         list($name, $email, $comment_text) = explode(" <", $comment);
    //         $email = rtrim($email, ">");
    //         $comment_text = trim($comment_text);

    //         // Output the comment with HTML structure
    //         // echo '<div class="comment">';
    //         // echo '<p class="name">' . $name . '</p>';
    //         // echo '<p class="email">' . $email . '</p>';
    //         // echo '<p class="comment-text">' . $comment_text . '</p>';
    //         // echo '</div>';
    //         echo '<div class="row ms-2"><p class="texto">'.$comment_text.'</p></div>';
    //     }
    // }
?>