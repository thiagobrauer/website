<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prefeitura Municipal de Lagoa da Confusão</title>

        <link rel = 'stylesheet' type = 'text/css' href = "{{asset('css/style.min.css')}}">    
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
                        <img class="img-responsive logo-header-side" src="img/logos/logo-side-azul.png" alt="logotipo-lagoa" width="280" height="160">
                        <img class="img-responsive logo-header-bottom" src="img/logos/logo-bottom-azul.png" alt="logotipo-lagoa" width="280" height="160">
                    </a>
                </div> 
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-header header-info">
                    <!--<h4>ATENDIMENTO</h4>-->
                    <p class="header-fone">(63) 3364-1623</p>
                    <p><b>Atendimento: 07h às 13h Horas, Segunda a Sexta</b></p>
                    <p>Prefeitura Municipal de Lagoa da Confusão</p>
                    <p>Rua Firmino Lacerda, 257 - Quadra 53, Lote 07, Centro</p>
                    <p>Lagoa da Confusão, Tocantins</p>
                    <p>CEP: 77493-000</p>
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
                    <li class="active menu-item" ><a class="" href="#">INÍCIO</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            ADMINISTRAÇÃO 
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu" style="background: #D9EDF7;">
                            <li><a href="#">Prefeito</a></li>
                            <li><a href="#">Vice Prefeito</a></li>
                            <li><a href="#">Agenda</a></li>
                        </ul>
                    </li>
                    <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            SECRETARIAS 
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu" style="background: #D9EDF7;">
                            <li><a href="#">Educação</a></li>
                            <li><a href="#">Finanças</a></li>
                            <li><a href="#">Gabinete</a></li>
                            <li><a href="#">Infraestrutura</a></li>
                            <li><a href="#">RH</a></li>
                            <li><a href="#">Saúde</a></li>
                            <li><a href="#">Serviço Social</a></li>
                        </ul>
                    </li>
                    <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            SERVIÇOS 
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu" style="background: #D9EDF7;">
                            <li><a href="#">Nota Fiscal Eletrônica</a></li>
                            <li><a href="#">Transparência</a></li>
                            <li><a href="#">Outros serviços</a></li>
                        </ul>
                    </li>
                    <!--<li class="menu-item"><a href="#contact" >PROJETOS E AÇÕES</a></li>-->
                    <li class="menu-item"><a href="#contact" >NOTÍCIAS</a></li>
                    <li class="menu-item"><a href="#contact" >IMPRENSA</a></li>
                    <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            FALE CONOSCO 
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu" style="background: #D9EDF7;">
                            <li><a href="#">Ouvidoria</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </li>
                    
                </ul>
                </div>           
        </nav>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!--<div style="overflow: hidden; width: 100%; height: 480px; background: black" >-->
                        <img src="img/slides/slide5.jpg" alt="..." style="width: 100%;">
                    <!--</div>-->
                    <div class="carousel-caption">
                        <p class="slide-caption-title">Lagoa da Confusão</p>
                        <p class="slide-caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</p>
                    </div>
                </div>
                <div class="item ">
                    <!--<div style="overflow: hidden; width: 100%; height: 480px; background: black" >-->
                        <img src="img/slides/slide7.jpg" alt="..." style="margin: ; width: 100%; height: %;">
                    <!--</div>-->
                    
                    <div class="carousel-caption">
                        <p class="slide-caption-title">Lagoa da Confusão</p>
                        <p class="slide-caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</p>
                    </div>
                </div>
                <div class="item ">
                    <!--<div style="overflow: hidden; width: 100%; height: 480px; background: black" >-->
                        <img src="img/slides/slide8.jpg" alt="..." style="margin: ; width: 100%; height: %;">
                    <!--</div>-->
                    
                    <div class="carousel-caption">
                        <p class="slide-caption-title">Lagoa da Confusão</p>
                        <p class="slide-caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</p>
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

        <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->
        <!--<iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=2883&w=h&c=748ccc&f=ffffff" height="200px" width="215px"></iframe><noscript>Previs&atilde;o de <a href="http://www.cptec.inpe.br/cidades/tempo/2883">Lagoa da Confusão/TO</a> oferecido por <a href="http://www.cptec.inpe.br">CPTEC/INPE</a></noscript> Widget Previs&atilde;o de Tempo CPTEC/INPE -->
        
        
        
        
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
                                <img src="img/noticias/noticia1.jpg" class="img-responsive" alt="Responsive image">
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
                                <img src="img/noticias/noticia1.jpg" class="img-responsive" alt="Responsive image">
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
                                <img src="img/noticias/noticia1.jpg" class="img-responsive" alt="Responsive image">
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
                                <img src="img/noticias/noticia1.jpg" class="img-responsive" alt="Responsive image">
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
                    <!--<div class="col-lg-12">
                        <a href="http://www.accuweather.com/pt/br/lagoa-da-confusao/1800490/current-weather/1800490" class="aw-widget-legal">
                        TESTE
                        </a>
                        <div id="awtd1487862196758" class="aw-widget-36hour"  data-locationkey="1800490" data-unit="c" data-language="pt" data-useip="false" data-uid="awtd1487862196758" data-editlocation="false">
                        </div>
                        <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

                    </div>    -->



                    <a href="http://lagoadaconfusao.megasofttransparencia.com.br/transparencia/viagem.xhtml">
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
                    <a href="https://lagoadaconfusao.megasoftarrecadanet.com.br/lagoadaconfusao/nfe-municipal/login.jsf">
                        <div class="col-lg-12 col-md-3 col-sm-3 nopadding" >                                
                            <div class="div-shortcut">
                                <div >
                                    <img class="img-responsive" src="img/logos/nfe.png" alt="" width="80px" height="80px" style="margin: 0 auto">
                                    <!--<i class="fa fa-info fa-3x" aria-hidden="true"></i>-->
                                    <p style="margin: 5px;">NF-E</p>
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
                            <a href="doc/ato_040_2017.pdf" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 040/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Jonathas Nunes de Jesus</p>
                            </a>
                            <a href="doc/ato_041_2017.pdf" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 041/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Dacio N. dos Santos Barbosa</p>
                            </a>
                            <a href="doc/ato_042_2017.pdf" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 042/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Marcelo Damas Teixeira</p>
                            </a>
                            <a href="doc/ato_043_2017.pdf" class="list-group-item list-group-item-action">
                                <p class="list-group-item-heading publicacao-title">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Ato nº 043/2017
                                </p>
                                <p class="list-group-item-text publicacao-subtitle">Raysa Lucena Godói</p>
                            </a>
                            <a href="doc/ato_044_2017.pdf" class="list-group-item list-group-item-action">
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
                                        <img src="img/conheca/conheca1.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                    </div>
                                
                                    <div class="carousel-caption">                                    
                                        <span class="caption-title">Lagoa da Confusão</span><br>
                                        <span class="caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</span>
                                    </div>
                                </a>   
                            </div>
                                                                                        
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-wrapper-conheca-sm"  style="">                                
                            <div class="row" style="padding: 0; margin: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-top-left"  style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/conheca/conheca2.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">Lagoa da Confusão</span><br>
                                            <!--<span class="caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</span>-->
                                        </div>
                                    </a>  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-top-right"  style=" ">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/conheca/conheca3.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">Lagoa da Confusão</span><br>
                                            <!--<span class="caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</span>-->
                                        </div>
                                    </a>  
                                </div>        
                            </div>                    
                            <div class="row" style="padding: 0; margin: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-bottom-left" style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/conheca/conheca4.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">Lagoa da Confusão</span><br>
                                            <!--<span class="caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</span>-->
                                        </div>
                                    </a>  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-img-conheca-sm-bottom-right"  style="">
                                    <a href="">        
                                        <div class="grow">
                                            <img src="img/conheca/conheca5.jpg" class="img-responsive" alt="Responsive image" width="100%">
                                        </div>
                                    
                                        <div class="carousel-caption">                                    
                                            <span class="caption-title">Lagoa da Confusão</span><br>
                                            <!--<span class="caption-subtitle">Subtitulo subtilo subtitulo subtitulo subtitulo subtitulo</span>-->
                                        </div>
                                    </a>  
                                </div>      
                            </div>                              
                        </div>
                    </div>                     
                </div>
            </div>
        </div>             

        <footer class="footer" style="">            
            <div class="row " style="">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <a href="" class="">
                        <img class="img-responsive logo-footer" src="img/logos/logo-side-branco.png" alt="logotipo-lagoa" width="280" height="160">
                    </a>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-links">
                    <h4><b>LINK</b></h4>
                    <!--<div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>  -->
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
                    <!--<div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>-->
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
                    <!--<div style="height: 1px; width: 150px; background: white; margin-left: -10px; margin-bottom: 10px;"></div>-->
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