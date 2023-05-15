<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana maternidade</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- Google Fonts Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-q8CJ5Q2d5+5yvJ5Wg/a8bodlrSZEx56a5ZJljqWlD8+I7CrX9NSBqCP7VWLGPK8nU22+1r6rjU6QWIt6xHj4Cg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- account icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    


</head>
<body>
    <!-- Aqui temos um ícone, os links para as outras seções e página de pesquisa. O projeto está adaptado para smartphones -->
    <header class="navbar navbar-expand-lg navbar-light bg-white" style="z-index: 3;">
    <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><i class="row"><img src="img/logo/logo-pequeno.png" alt=""></i></a>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Maternidade
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="menu/historia.php" class="dropdown-item">Nossa História</a></li>
                                <li><a href="menu/infraestrutura.php"  class="dropdown-item">Infraestrutura</a></li>
                            </ul>
                    </li>
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestantes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="menu/pre-natal.php" class="dropdown-item">Pré-natal</a></li>
                                <li><a href="menu/internacao.php"  class="dropdown-item">Internação</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a href="menu/servicos.php" class="nav-link active">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu/contato.php" class="nav-link active">Contato</a>
                    </li>
                </ul>
            
            </div>
            
            <!-- <div class="row">
                <input type="text" name="" id="" class="navbar-nav me-auto mb-2 mb-lg-0">
            </div> -->
            <nav class="navbar-body-tertiary">
                <form action="" class="container-fluid">
                    <div class="input-group">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </form>
            </nav>
        </div>
    </header>

    <main class="container-fluid mx-0" style="padding: 0;">
        <!-- colocar esses três botões a uma distância fixa do topo da página -->
        <div class="botao_abas">
            <a href="#">
                <img src="img/pagina_inicial/Botoes_abas/Consulta.png" alt="" class="container-fluid ms-2 Botoes_img mx-2 min-w-50">
            </a>
            <a href="#">
                <img src="img/pagina_inicial/Botoes_abas/Exame.png" alt="" class=" container-fluid ms-2 Botoes_img mx-2">
            </a>
            <a href="#">
                <img src="img/pagina_inicial/Botoes_abas/Visita.png" alt="" class="container-fluid ms-2 Botoes_img mx-2">
            </a>
            
            
            
        </div>

        <!-- Foto do pezinho -->
        <section class="image-container w-100 object-fit-xxl-contain pezinho-imagem" style="background-image: url(img/pagina_inicial/pezinho.jpg);margin: 0; padding: 0;">
            <div class="container-fluid">

                <!-- <img src="img/pagina_inicial/Fundo.jpg" class="img-fluid imagem_pai-css" alt=""> -->
                
                <div class="text-container pezinho-texto">
                    <h1>Uma nova experiência <br> para o parto normal</h1>
                    <p class="mt-4" style="font-weight: 500;">Uma experiência humanizada em todos os aspectios. <br>
                    E em todas as etapas do parto.</p>  
                </div>
            </div>   
        </section>

        <!-- buchuda do cadastro -->
        <section class="image-container container-fluid buchuda-imagem" style="background-image: url(img/pagina_inicial/tela_cadastre-se.jpg);">
            <!-- <img src="img/pagina_inicial/tela_cadastre-se.jpg" alt="mulher grávida"> -->
            <div class="buchuda-texto my-4">
                <h2 style="font-weight: 700; font-size: 26pt; ">Entenda como está seu corpo <br class="mt-3">e a evolução do seu bebê</h2>
            </div>

            <div class="buchuda_texto-form w-25">  
                <form action="">
                    <div class="row formulario-tamanho">
                        <input type="text" class="form-control" placeholder="Nome*">
                    </div>                

                    <div class="row formulario-tamanho">
                        <input type="email" class="form-control" placeholder="E-mail*">
                    </div>

                    <div class="row formulario-tamanho">
                        <select name="idade-gestacional" class="form-select" id="">
                            <option selected>Idade Gestacional</option>
                            <option value="1-4 semanas">1-4 semanas</option>
                            <option value="5-8">5-8 semanas</option>
                            <option value="9-12">9-12 semanas</option>
                            <option value="13-16">13-16 semanas</option>
                            <option value="17-21">17-21 semanas</option>
                            <option value="22-26">22-26 semanas</option>
                            <option value="27-30">27-30 semanas</option>
                            <option value="31-35">31-35 semanas</option>
                            <option value="36-40">36-40 semanas</option>
                        </select>
                    </div>

                    <div class="row formulario-tamanho">
                        <input type="number" class="form-control" placeholder="(00) 0000-0000">
                    </div>

                    <div class="row formulario-tamanho">
                        <input type="submit" value="Cadastre-se" class="form-control-lg subimite">
                    </div>
                </form>
            </div>

        </section>
        
        <!-- prédio do plano -->
        <section class="container-fluid" style="background-color: rgba(196, 134, 85, 0.5)">
            <!-- Metade do conteúdo deste lado -->
            <div class="container-fluid row">
                <div class="container-fluid col sec3_texto">
                    <h1><span class="plano-title">Plano </span><img src="img/icon/pregnant_woman.png" alt=""><br> <span class="plano-title">Maternidade</span></h1>
                    <p class="plano-text">Aqui, você conta com plano particulares exclusivos, caso você não tenha convênio ou esteja em período de carência, para realizar o seu parto na Ana com toda segurança e acolhimento que oferecemos.</p>

                    <button class="btn btn-success botao-planos" style="background-color: #59AA8C; padding: 1.3vw; font-size: 10pt; font-family: 'Montserrat';font-weight: 600;letter-spacing: 0.9pt; border-radius: 8px;">
                        C<span id="apequenar">onsultar Planos</span>
                    </button>
                </div>
                <!-- Outra metade -->
                <div class="container-fluid col sec3_imagem">
                    <img src="img/pagina_inicial/img_predio.png" class="img-fluid" alt="imagem de um prédio" width="627px" height="876px" class="img_predio">
                </div>
            </div>
        </section>

        <!-- Deixe seu comentario -->
        <section class="container-fluid">
            <hr class="my-5">
            <div class="mw-25 my-4 ms-4">
                <h4 class="texto-preto">Deixe seu comentário</h4>
            </div>
            <form action="component/commentFunc.php" method="post" class="ms-4" >
                <div class="row formulario-tamanho w-50">
                    <input type="text" name="nome" class="form-control" placeholder="Nome*">
                </div>
                <div class="row formulario-tamanho w-50">
                    <input type="text" name="email" class="form-control" placeholder="E-mail*">
                </div>
                <div class="row formulario-tamanho w-75">
                    <textarea name="mensagem" style="max-height: 50px;" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="formulario-tamanho">
                    <input type="submit" value="Cadastre-se" class="form-control-lg btn subimite" style="background-color: #59AA8C; color: #ffffff;">
                </div>
            </form>
        </section>

        <!-- Comentarios -->
        <section class="container-fluid my-5">
            <div class="row ms-4">
                <h4 class="texto-preto">Comentarios (<span id="comentNumber"></span>)</h4>
            </div>
            <div class="col texto-titulo texto-preto mt-5">
                <div class="row"><h3 class="ms-2"><img src="img/icon/comentario.png" alt="" class="mb-2"><span class="texto-titulo ms-2">Titulo_teste</span></h3></div>
            <div class="row ms-2">
                <p class="texto">Teste</p>
            </div><br>
        </div>
            
            <!-- <span class="material-symbols-outlined">account_circle</span> -->
            <?php
                $comments = file_get_contents("component/comments.txt");
                echo $comments;
            ?>


        </section>
    </main>

    <!-- <footer class="container-fluid mx-auto p-2">
        <div class="row mb-4 mx-auto p-2">
            <div class="col mx-auto p-2">
                <img src="img/logo/logo-medio.png" alt="">
            </div>
            <div class="col mx-auto p-2">
                <div class="row mx-auto p-2">
                    <ul class="list-unstyled list-group list-group-horizontal mx-auto p-2">
                        <li class="flex-fill mx-auto p-2">Imprensa</li>
                        <li class="flex-fill mx-auto p-2">Contato</li>
                        <li class="flex-fill mx-auto p-2">Trabalhe conosco</li>
                        <li class="flex-fill mx-auto p-2">Ética</li>
                    </ul>
                </div>
                <div class="row mx-auto p-2">
                    <p>Acompanhe nossas redes sociais</p>
                
                    <ul class="list-unstyled list-group list-group-horizontal">
                        
                        <li class="flex-fill mx-auto p-2">
                            
                            <i class="bi bi-facebook">
                                <img src="img/icon/facebook-icon.png" alt="">
                            </i>
                            <a href="https://www.facebook.com">Facebook</a>
                        </li>
                        <li class="flex-fill mx-auto p-2">
                            <a href="#">
                                <i class="bi bi-instagram">
                                    <img src="img/icon/Instagram-icon.png" alt="">
                                </i></a>Instagram
                        </li>
                        <li class="flex-fill mx-auto p-2">
                            <a href="#"><i class="bi bi-linkedin">
                                <img src="img/icon/LinkedIn-icon.png" alt="">
                            </i></a>LinkedIn
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col mx-auto p-2">
                <div>
                    <i>
                        <img src="img/icon/whats.png" alt="">
                    </i>
                </div>
            </div>
        </div>
        
        
    </footer> -->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        
        <!-- Grid container -->
        <div class="container pt-4">
            <div class="ms-2">
                <img src="img/logo/logo-pequeno.png" alt="" class="alignt-itens-center">
            </div>
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
 
      <script src="../js/mdb.min.js"></script>
      <script src="../js/mdb.min.js.map"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>