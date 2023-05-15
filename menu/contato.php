<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ana maternidade</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon" />
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
        <link rel="stylesheet" href="../css/mdb.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    </head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-white" style="z-index: 3;">
    <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><i class="row"><img src="../img/logo/logo-pequeno.png" alt=""></i></a>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Maternidade
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="historia.php" class="dropdown-item">Nossa História</a></li>
                                <li><a href="infraestrutura.php"  class="dropdown-item">Infraestrutura</a></li>
                            </ul>
                    </li>
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestantes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="pre-natal.php" class="dropdown-item">Pré-natal</a></li>
                                <li><a href="internacao.php"  class="dropdown-item">Internação</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a href="servicos.php" class="nav-link active">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="contato.php" class="nav-link active">Contato</a>
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

    <main>

        <!-- colocar esses três botões a uma distância fixa do topo da página -->
        

      <!-- Fale Conosco -->
      <section class="image-container w-100 object-fit-xxl-contain pezinho-imagem" style="height: 65vw; background-image: url(../img/Contato/Contato_fundo.jpg);">
        <div class="row">
          <div class="col">
            <div class="text-container pezinho-texto" style=" top: 30vw;text-shadow: 2px 4px 2px #00000077;">
                
                <h1 style="color:#ffffff !important; font-weight: 500;" class="texto-titulo">Contato</h1>
                <p style="color:#ffffff !important; font-weight: 500;" class="texto-titulo">Entre já em contato conosco! Nos envie suas sugestões e dúvidas, será um prazer ouví-lo.</p>
            </div>
          </div>  
      
          <div class="col">
            <div class="contato-form ps-5 pb-5" style="position: relative; max-width: 40vw; top: 10vw;">
              <div class="text-container contato-texto ps-5" style="text-shadow: 2px 4px 2px #00000077;">
              <p class="texto">
                    <a  style="color:#ffffff !important; text-decoration: none;" href="../index.html">
                        < Home
                    </a>
                </p>
                <h1 style="color:#ffffff !important; font-weight: 500;" class="texto-titulo">Fale conosco!</h1>
              </div>
            
              <form action="" class="col ps-5 pt-3">
                <div class="row pb-2">
                    <input type="text" class="form-control" placeholder="Nome*">
                </div>                
    
                <div class="row pb-2">
                    <input type="email" class="form-control" placeholder="E-mail*">
                </div>
    
    
                <div class="row pb-2">
                    <input type="number" class="form-control" placeholder="(00) 0000-0000">
                </div>

                <div class="row pb-2">
                  <textarea name="contatoMsg" id="" cols="20" rows="5"></textarea>
                </div>

                <div class="row pb-2">
                    <input type="submit" value="Cadastre-se" class="form-control-lg subimite">
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row justify-content-center p-5 position-relative" style="top: 25vw;">
            <div class="col-3">
              <a href="#">
                <img src="../img/pagina_inicial/Botoes_abas/Consulta.png" alt="" >
              </a>
            </div>
            <div class="col-3 image-container">
              <a href="#">
                <img src="../img/pagina_inicial/Botoes_abas/Exame.png" alt="" >
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="image-container">
                <img src="../img/pagina_inicial/Botoes_abas/Visita.png" alt="" class="image-container" >
              </a>
            </div>
          
      </div>
        

        <!-- <div class="buchuda_texto-form w-25">        
        </div> -->

    </section>

    <section class="container-fluid my-5 pt-5">
      <div class="row pt-5">
        <p class="texto py-5 m-y5 text-center">2ª a 6ª feira, exceto feriados, das 8h às 18h Sábados, exceto feriados das 8h às 12h</p>
      </div>
    </section>

    </main>

    <footer class="text-center text-white mt-5" style="background-color: #f1f1f1;">
        
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