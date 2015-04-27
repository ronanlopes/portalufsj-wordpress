<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="pt-br" xml:lang="pt-br">

<head profile="http://gmpg.org/xfn/11">
	<title> UFSJ | Universidade Federal de São João del-Rei </title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/idioma.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/inside-pages.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lytebox.css" type="text/css" media="screen" />

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.3.2.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ui.core.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ui.tabs.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/home.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/easySlider1.7.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/acessibilidade_fonte.js" type="text/javascript"></script>
	<?php wp_head();?>
</head>

<body>

<div id="canvas">
<div id="barra-brasil">
    <a href="http://brasil.gov.br"  style="background:#7F7F7F; height: 20px; padding:4px 0 4px 10px; display: block; font-family:sans,sans-serif; text-decoration:none; color:white; ">Portal do Governo Brasileiro</a>
</div>
<script src="http://static00.mec.gov.br/barragoverno/barra.js" type="text/javascript"></script>

<div id="header">
        <div id="header-content" class="menu">

            <div id="header-menu">
				
                <ul id="smartlinks">
                    <a href="#" class="menu"><span class="icon-smartlinks"></span>Acesso Rápido</a>
                    <span class="box-list">
                        <span class="box-list-left">
                            <span class="box-list-right">
                                <span class="box-list-middle">
                                    
                                    <div id="conteudoEsqUP">
                                        <li><a href="http://www.dibib.ufsj.edu.br"><span class="icon-mapa-biblioteca"></span>Biblioteca</a></li>
                                        <li><a href="http://www.ufsj.edu.br/agenda/index.php"><span class="icon-mapa-calendarioacademico"></span>Calendário Acadêmico</a></li>
                                        <li><a href="http://www.ufsj.edu.br/centrocultural"><span class="icon-mapa-centrocultural"></span>Centro Cultural</a></li>
										<li><a href="http://www.ufsj.edu.br/concursos.php"><span class="icon-mapa-concursos"></span>Concursos</a></li>
                                        <li><a href="http://www.ufsj.edu.br/ntinf/solicitacao_ouvidoria.php"><span class="icon-mapa-ouvidoria"></span>Ouvidoria</a></li>
                                    </div>

                                    <div id="conteudoMidUP">
                                        <li><a href="http://www.ufsj.edu.br/download_de_arquivos.php"><span class="icon-mapa-downloadarquivos"></span>Download de arquivos</a></li>
                                        <li><a href="http://www.ufsj.edu.br/dicon"><span class="icon-mapa-dicon"></span>Dicon</a></li>
                                        <li><a href="http://www.ufsj.edu.br/fale_conosco.php"><span class="icon-mapa-faleconosco"></span>Fale Conosco</a></li>
                                        <li><a href="http://www.intranet2.ufsj.edu.br/principal.php"><span class="icon-mapa-intranet"></span>Intranet</a></li>
                                        <li><a href="http://www.ufsj.edu.br/dimap"><span class="icon-mapa-licitacoes"></span>Licitações</a></li>
                                    </div>

                                    <div id="conteudoDirUP">
                                        <li><a href="http://www.ufsj.edu.br/portal2-repositorio/File/ascom/catalogo_telefonico.doc"><span class="icon-mapa-catalogotelefone"></span>Lista Telefônica</a></li>
                                        <li><a href="http://www.periodicos.capes.gov.br"><span class="icon-mapa-periodicos"></span>Periódicos</a></li>
                                        <li><a href="http://www.campusvirtual.ufsj.edu.br/site"><span class="icon-mapa-portaldidatico"></span>Portal Didático</a></li> 
                                        <li><a href="http://www.ufsj.edu.br/vestibular/index.php"><span class="icon-mapa-vestibular"></span>Vestibular</a></li>
                                        <li><a href="https://mail.google.com/a/ufsj.edu.br"><span class="icon-mapa-webmail"></span>Webmail</a></li>
                                    </div>

                                </span>
                            </span>
                        </span>
                        <span class="box-list-b-left">
                            <span class="box-list-b-right">
                                <span class="box-list-b-middle">
                                </span>
                            </span>
                        </span>
                    </span>
                </ul>

                <ul>
                    <a href="<?php echo get_site_url(); ?>/mapa-estrutural" class="menu"><span class="icon-sitemap"></span>Mapa do site</a>
                </ul>

            </div> <!-- header-menu -->

            <!-- busca Google -->
            <div id="search">
                <!-- id="cse-search-box" -->
                <form action="<?php echo get_site_url(); ?>" id="search-form" method="get">
                    <label for="search-text-box"> Busca: </label> <input id="search-text-box" accesskey="3" placeholder="termo da busca" value="termo da busca" onblur="if (this.value=='') this.value=this.defaultValue" onfocus="if (this.defaultValue==this.value) this.value=''" name="s" type="text">
                    <input value="" id="search-button" title="Buscar" type="submit">
                </form>
            </div>
            <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=pt"></script>

	    <div id="font-options">
                Fonte:
                <a class="font-dec" href="javascript:mudaTamanho('main','main-canvas','menus-acesso','footer-info-top', -1);"></a>
                <a class="font-inc" href="javascript:mudaTamanho('main','main-canvas','menus-acesso','footer-info-top', 1);"></a>
            </div>
            <div id="redes-sociais">
				<a class="ico-twitter" href="http://twitter.com/ufsjbr"></a>
            </div>
        </div> <!-- header-content -->
</div><!-- header -->

    <div id="main">
        <div id="main-canvas">
            <div id="sidebar">
                <div id="sidebar-header">
                    <a href="<?php echo get_site_url(); ?>/index.php" accesskey="h"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-logo.png" alt="Logo da UFSJ" title="UFSJ"></a>	
                </div>

                <div id="sidebar-menu">
                    <div class="sidebar-category">
                        <span>Institucional</span>
                        <p>
                        <!--<a href="http://www.ufsj.edu.br/acessoainformacao/">Acesso à Informação</a>-->
                        <a href="<?php echo get_site_url(); ?>/a-ufsj/">A UFSJ</a>
                        <a href="<?php echo get_site_url(); ?>/conselhos-superiores/">Conselhos Superiores</a>
                        <a href="<?php echo get_site_url(); ?>/reitoria/">Reitoria</a>
			<a href="<?php echo get_site_url(); ?>/pro-reitorias/">Pró-Reitorias</a>
			<a href="<?php echo get_site_url(); ?>/unidades-academicas/">Unidades Acadêmicas</a>
			<a href="<?php echo get_site_url(); ?>/bibliotecas/">Bibliotecas</a>
			<a href="<?php echo get_site_url(); ?>/fundacoes/">Fundações</a>
			<a href="<?php echo get_site_url(); ?>/comissoes/">Comissões</a>
                        <a href="<?php echo get_site_url(); ?>/cpa/">CPA</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>Ensino</span>
                        <p>
			<a href="<?php echo get_site_url(); ?>/graduacao/">Gradua&ccedil;&atilde;o</a>
			<a href="<?php echo get_site_url(); ?>/pos-graduacao/">P&oacute;s-Gradua&ccedil;&atilde;o</a>
			<a href="http://www.nead.ufsj.edu.br/portal/">Educa&ccedil;&atilde;o a Dist&acirc;ncia</a>
			<a href="<?php echo get_site_url(); ?>/formas-de-ingresso/">Formas de Ingresso</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>Pesquisa</span>
                        <p>
			<a href="<?php echo get_site_url(); ?>/a-prope/">A PROPE</a>                        
			<a href="<?php echo get_site_url(); ?>/propriedade-intelectual/">Propriedade Intelectual</a>
			<a href="<?php echo get_site_url(); ?>/iniciacao-cientifica/">Iniciação Científica</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>Extens&atilde;o</span>
                        <p>
                        <a href="a-proex/">A PROEX</a>
			<a href="<?php echo get_site_url(); ?>/inverno-cultural/">Inverno Cultural</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>Concursos</span>
                        <p>
			<a href="<?php echo get_site_url(); ?>/vestibular/">Vestibular</a>
			<a href="<?php echo get_site_url(); ?>/docentes/">Docentes </a>
			<a href="<?php echo get_site_url(); ?>/tecnicos/">Técnicos</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>Serviços</span>
                        <p>
			<a href="<?php echo get_site_url(); ?>/carta-de-servicos-ao-cidadao/">Carta de Serviços ao Cidadão</a>
			<a href="<?php echo get_site_url(); ?>/servicos-oferecidos/">Serviços Oferecidos</a>
			<a href="<?php echo get_site_url(); ?>/formularios-eletronicos/">Formulários Eletrônicos</a>
                        </p>
                    </div>
                    <div class="sidebar-category">
                        <span>UFSJ para</span>
                        <p>
			<a href="<?php echo get_site_url(); ?>/alunos/">Alunos</a>
			<a href="<?php echo get_site_url(); ?>/servidores/">Servidores</a>
                        <a href="<?php echo get_site_url(); ?>/cpa/">Avaliadores</a>
                        </p>
                    </div>
                </div> <!-- sidebar-menu -->
            </div> <!-- sidebar -->
            <div id="submain">

                <div id="content">
                    <div id="content-header">
                   </div> <!-- content-header -->
