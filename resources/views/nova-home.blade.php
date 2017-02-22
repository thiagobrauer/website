<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel = 'stylesheet' type = 'text/css' href = "css/style.min.css">    
        <link rel = 'stylesheet' type = 'text/css' href = "css/custom.css"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body style=""> 
        <header class="header">            
            <div class="row " style="">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-header" >
                    <a href="" class="">
                        <img class="img-responsive logo-header-side" src="img/logo-side-azul.png" alt="logotipo-lagoa" width="280" height="160">
                        <img class="img-responsive logo-header-bottom" src="img/logo-bottom-azul.png" alt="logotipo-lagoa" width="280" height="160">
                    </a>
                </div> 
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-header header-info">
                    <!--<h4>ATENDIMENTO</h4>-->
                    <p class="header-fone">(63) 3385-1120</p>
                    <p>Atendimento: 07h às 13h Horas Segunda a Sexta</p>
                    <p>Prefeitura Municipal de Talismã - Av Rio Formoso, 127 - qd-5 lt-5 - Setor Central, Talismã, TO CEP: 77483-000</p>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-header" >                        
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 div-media-header" >                        
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " >
                            <a href=""><i class="fa fa-facebook fa-3x" aria-hidden="true" ></i></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            <a href=""><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            <a href=""><i class="fa fa-instagram fa-3x" aria-hidden=""></i></a> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            <a href=""><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a>
                        </div>                                                            
                    </div>
                    
                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 30px;">
                        <input type="text" class="input-lg form-control" placeholder="Buscar" style="border-radius: 2px;"/>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-lg" type="button" style="border-radius: 2px;">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>                      
                </div>                  
            </div>                    
                                    
        </header>
        
        <nav class="navbar" >            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" >
                    <li class="active" ><a class="menu-item" href="#">INÍCIO</a></li>
                    <li><a href="#about" class="menu-item">A PREFEITURA</a></li>
                    <li><a href="#contact" class="menu-item">SERVIÇOS</a></li>
                    <li><a href="#contact" class="menu-item">PROJETOS E AÇÕES</a></li>
                    <li><a href="#contact" class="menu-item">NOTÍCIAS</a></li>
                    <li><a href="#contact" class="menu-item">IMPRENSA</a></li>
                    <li><a href="#contact" class="menu-item">OUVIDORIA</a></li>
                </ul>
                </div>           
        </nav>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/slide1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>First slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>First slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>First slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container page-content-wrapper" >
            <div class="row">                
                <div class="col-lg-10 col-section section-noticia">                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-title">                        
                        <p class="">
                            <img src="img/right-chevron.png" alt="" width="15px" height="15px" style="margin-right: 2px; margin-bottom: 2px;">
                            NOTÍCIAS
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">                        
                        <div class="row div-noticia">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-img-noticia">
                                <img src="img/slide2.jpg" class="img-responsive" alt="Responsive image">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 div-noticia-content">
                                <a href="" class="header-noticia">Gostaria de enfatizar que a consolidação das estruturas 
                                    assume importantes 
                                </a>
                                <br><a href=""><span>Publicado em: 11/11/1111</span></a>
                                <p style="margin-top:5px;">Caros amigos, a necessidade de renovação processual exige a precisão e a 
                                    definição dos paradigmas corporativos. Todavia, o comprometimento entre as equipes acarreta um 
                                    processo de reformulação e modernização do sistema de formação de quadros que corresponde às necessidades...</p>
                            </div>
                        </div>

                        <div class="row div-noticia">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-img-noticia">
                                <img src="img/slide2.jpg" class="img-responsive" alt="Responsive image">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 div-noticia-content">
                                <a href="" class="header-noticia">Gostaria de enfatizar que a consolidação das estruturas 
                                    assume importantes 
                                </a>
                                <br><a href=""><span>Publicado em: 11/11/1111</span></a>
                                <p style="margin-top:5px;">Caros amigos, a necessidade de renovação processual exige a precisão e a 
                                    definição dos paradigmas corporativos. Todavia, o comprometimento entre as equipes acarreta um 
                                    processo de reformulação e modernização do sistema de formação de quadros que corresponde às necessidades...</p>
                            </div>
                        </div>

                        <div class="row div-noticia">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-img-noticia">
                                <img src="img/slide2.jpg" class="img-responsive" alt="Responsive image">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 div-noticia-content">
                                <a href="" class="header-noticia">Gostaria de enfatizar que a consolidação das estruturas 
                                    assume importantes 
                                </a>
                                <br><a href=""><span>Publicado em: 11/11/1111</span></a>
                                <p style="margin-top:5px;">Caros amigos, a necessidade de renovação processual exige a precisão e a 
                                    definição dos paradigmas corporativos. Todavia, o comprometimento entre as equipes acarreta um 
                                    processo de reformulação e modernização do sistema de formação de quadros que corresponde às necessidades...</p>
                            </div>
                        </div>

                        <div class="row div-noticia">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-img-noticia">
                                <img src="img/slide2.jpg" class="img-responsive" alt="Responsive image">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 div-noticia-content">
                                <a href="" class="header-noticia">Gostaria de enfatizar que a consolidação das estruturas 
                                    assume importantes 
                                </a>
                                <br><a href=""><span>Publicado em: 11/11/1111</span></a>
                                <p style="margin-top:5px;">Caros amigos, a necessidade de renovação processual exige a precisão e a 
                                    definição dos paradigmas corporativos. Todavia, o comprometimento entre as equipes acarreta um 
                                    processo de reformulação e modernização do sistema de formação de quadros que corresponde às necessidades...</p>
                            </div>
                        </div>                    
                                                                    
                    </div>                    
                </div>

                <div class="col-lg-2 col-section">                        
                    <a href="">
                        <div class="col-lg-12 col-md-3 col-sm-3 nopadding" >    
                            <div class="div-shortcut">
                                <div>
                                    <i class="fa fa-search fa-3x" aria-hidden="true"></i>
                                    <p>TRANSPARÊNCIA</p>
                                </div> 
                            </div>                                                                                                    
                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-12 col-md-3 col-sm-3 nopadding" >    
                            <div class="div-shortcut">
                                <div>
                                    <i class="fa fa-bell fa-3x" aria-hidden="true"></i>
                                    <p>EDITAIS</p>
                                </div>     
                            </div>                                                                                                    
                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-12 col-md-3 col-sm-3 nopadding" >    
                            <div class="div-shortcut">
                                <div>
                                    <i class="fa fa-gavel fa-3x" aria-hidden="true"></i>
                                    <p>LICITAÇÕES</p>
                                </div>     
                            </div>                                                                                                    
                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-12 col-md-3 col-sm-3 nopadding" >    
                            <div class="div-shortcut">
                                <div>
                                    <i class="fa fa-info fa-3x" aria-hidden="true"></i>
                                    <p>E-SIC</p>
                                </div>    
                            </div>                                                                                                    
                        </div>
                    </a> 
                </div>  
            </div>                           
                                                        
                        
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-section section-publicacoes" >
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-title" >
                        <p class="">
                            <img src="img/right-chevron.png" alt="" width="15px" height="15px" style="margin-right: 2px; margin-bottom: 2px;">
                            ÚLTIMAS PUBLICAÇÕES
                        </p>
                    </div>                   
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="list-group div-publicacao">
                            <a href="doc/ato_039_2017.pdf" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 039/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Marcilene dos Santos Oliveira</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 040/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Jonathas Nunes de Jesus</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 041/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Dacio N. dos Santos Barbosa</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 042/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Marcelo Damas Teixeira</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 043/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Raysa Lucena Godói</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 044/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Rosenir Souza Cardoso</p>
                            </a>    
                            
                                               
                        </div>    
                    </div>                       
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-section section-servicos" style="border: 0px solid black">  
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-title" style="">
                        <p class="">
                            <img src="img/right-chevron.png" alt="" width="15px" height="15px" style="margin-right: 2px; margin-bottom: 2px;">
                            ACESSO RÁPIDO
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service " >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO1
                        </button>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service" >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO2
                        </button>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service" >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO3
                        </button>   
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service" >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO4
                        </button>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service" >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO5
                        </button>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 div-btn-service" >
                        <button type="button" class="btn btn-primary btn-lg" > 
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            SERVIÇO6
                        </button>
                    </div>
                    
                </div>
            </div>   

            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-section section-conheca" >
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-title " >
                        <p class="">
                            <img src="img/right-chevron.png" alt="" >
                            CONHEÇA NOSSA CIDADE
                        </p>
                    </div>                        
                        
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-imgs-conheca"  style="">                  
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-img-conheca-lg" style="">
                            <div class="row" style="padding: 0; margin: 0;">
                                <a href="">    
                                    <div class="grow">
                                        <img src="img/slide1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                    </div>
                                
                                    <div class="carousel-caption">                                    
                                        <span class="caption-title">First slide label</span><br>
                                        <span class="caption-subtitle">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</span>
                                    </div>
                                </a>   
                            </div>
                                                                                        
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-wrapper-conheca-sm"  style="">                                
                            <div class="row" style="padding: 0; margin: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-top-left"  style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/slide1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">First slide label</span><br>
                                            <!--<span class="caption-subtitle">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</span>-->
                                        </div>
                                    </a>  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-top-right"  style=" ">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/slide1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">First slide label</span><br>
                                            <!--<span class="caption-subtitle">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</span>-->
                                        </div>
                                    </a>  
                                </div>        
                            </div>                    
                            <div class="row" style="padding: 0; margin: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-bottom-left" style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/slide1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">First slide label</span><br>
                                            <!--<span class="caption-subtitle">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</span>-->
                                        </div>
                                    </a>  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-bottom-right"  style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/slide1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">First slide label</span><br>
                                            <!--<span class="caption-subtitle">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</span>-->
                                        </div>
                                    </a>  
                                </div>      
                            </div>                              
                        </div>
                    </div>                     
                </div>
            </div>
        </div>             

        <footer class="footer" style="background: #">            
            <div class="row " style="">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <a href="" class="">
                        <img class="img-responsive logo-footer" src="img/logo-side-branco.png" alt="logotipo-lagoa" width="280" height="160">
                    </a>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-links">
                    <h4><b>LINK</b></h4>
                    <div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>  
                    <ul class="list-unstyled">
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                    </ul>                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-links" >
                    <h4><b>LINK</b></h4>
                    <div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>
                    <ul class="list-unstyled">
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                    </ul>                          
                </div>  
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-links" >
                    <h4><b>LINK</b></h4>
                    <div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>
                    <ul class="list-unstyled">
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                        <li><a href="" class=""><img src="img/right-chevron.png" alt="">Link</a></li>
                    </ul>                          
                </div>                 
            </div>              
        </footer>
       
    <script type='text/javascript' src="js/script.min.js"></script>     
    <script type='text/javascript' src="js/custom.js"></script>      
    </body>
</html>

<!--<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        <img src="img/slide2.jpg" class="" alt="Responsive image" style="max-height: 100%; max-width: 100%">
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <img src="img/slide1.jpg" class="" alt="Responsive image" style="max-height: 100%; max-width: 100%">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <img src="img/slide1.jpg" class="" alt="Responsive image" style="max-height: 100%; max-width: 100%">
    </div>
</div>-->


<!--<div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
        <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="6" data-gs-height="6" >
            <div class="grid-stack-item-content">
                <div style="width: %; height: %; background: pink">
                    <img src="img/slide1.jpg" alt="" style="max-height: 100%; max-width: 100%">
                </div>
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="6" data-gs-y="0" data-gs-width="3" data-gs-height="3" >
            <div class="grid-stack-item-content">
                <div style="width: %; height:%; background: yellow">
                    <img src="img/slide1.jpg" alt="" style="max-height: 100%; max-width: 100%">
                </div>
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="9" data-gs-y="0" data-gs-width="3" data-gs-height="3" >
            <div class="grid-stack-item-content">
                <div style="width: %; height:%; background: yellow">
                    <img src="img/slide1.jpg" alt="" style="max-height: 100%; max-width: 100%">
                </div>
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="6" data-gs-y="3" data-gs-width="3" data-gs-height="3">
            <div class="grid-stack-item-content">
                <div style="width: %; height:%; background: green">
                    <img src="img/slide1.jpg" alt="" style="max-height: 100%; max-width: 100%">
                </div>
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="6" data-gs-y="6" data-gs-width="2" data-gs-height="2">
            <div class="grid-stack-item-content">
                <div style="width: 100%; height: 100%; background: blue;">
                    <img src="img/slide1.jpg" alt="" style="max-height: 100%; max-width: 100%">
                </div>
            </div>
        </div>
    </div>-->