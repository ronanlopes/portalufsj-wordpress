<?php get_header(); ?>
              <div id="content-middle">	
					    <div id="interna-middle"></div>
                        <div id="content-top">
                            <div id="home-box1">

                                <!-- conteudo -->
                                <span id="content-start"></span>
                                <div id="home-box-container">
                                    <div id="home-box-content">

                                        <div id="home-subbox-noticias">                                        
                                            <div id="home-subbox-bottom-noticias">

                                                <span class="text-title"><br>
                                                   <span id="txt"> 
							<?php 
							$do_not_duplicate = array(); //Array que auxilia o controle de posts já mostrados (para evitar repetição no mais notícias)				
							if (have_posts()){
								the_post();
								$do_not_duplicate[] = $post->ID;
							}?>

                                                      <h1 id='titulonoticia'><a href="#content" accesskey="1"></a><?php the_title(); ?></h1>
                                                      <div align="right">
<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="ufsjbr" data-text="Últimas semanas de inscrições de propostas artísticas para o Centro Cultural" title="Compartilhe">Tweet</a>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
</div>
                                                   </span>
                                                </span>

                                                <div class="text" style="margin-right:15px;">

                                                    <!--style="padding-right: 20px; padding-bottom: 5px;" /></a>!-->
                                                    <p href="#content"><?php the_content();?></p>
													
                                                    <p align="right"><br><strong><i>Publicada em <?php $datanoticia=get_the_date('d/m/Y'); echo $datanoticia;?></i></strong><br><strong>Fonte: ASCOM</strong></p>
                                                    
                                                    <a href="javascript:history.go(-1)"><span class="icon-voltar"></span>&nbsp;<strong class="link-voltar">Voltar</strong></a>
                                                </div>

                                            </div> <!-- home-subbox-bottom-noticias -->
                                        </div> <!-- home-subbox-noticias -->
                                                                               
                                    </div> <!-- home-box-content -->
                                    </span><div id="home-box-bottom"></div>
                            
                                </div> <!-- home-box-container -->
                            </div> <!-- home-box1 -->
                        </div> <!-- content-top -->

                        <div id="home-subbox">
                            <div id="home-subbox-bottom">
                                <ul id="home-subbox-news">
					<?php query_posts('showposts=6'); ?>
					<?php for($i=0;$i<6;$i++){
							if (have_posts()){
								the_post();
								if ( !in_array( $post->ID, $do_not_duplicate ) ) {?>
									<li><span class="date"><?php echo get_the_date();?> </span><a class="title" href="<?php the_permalink();?>"> <?php the_title();?></a> </li>
							<?php   }
							}
					}
					?>
                                    <br>
                                </ul>
                                <a href="<?php echo get_site_url(); ?>/mais_noticias.php" class="more-news">mais notícias</a>	
                            </div>
                        </div>

						<br>
                        <div id="content-footer">
                                                        <div id="c-footer-info">
                                <div id="c-f-info-top"></div>
                                <div id="c-f-info-middle">
                                    <div id="c-f-info-left">Unidade informadora responsável: <br>ASCOM</div>
                                    <div id="c-f-info-right">Data da notícia:<br> 
									<?php echo $datanoticia; ?>                        </div>
                                </div>
                                <div id="c-f-info-bottom"></div>
                            </div>
                        </div>

                    </div> <!-- content-middle -->
                </div> <!-- content -->
            </div> <!-- submain -->
            <div id="main-bottom"></div>
        </div> <!-- main-canvas -->
    </div> <!-- main -->
<?php get_footer(); ?>
