<?php 
include('wp-load.php');
get_header(); ?>
                      <div id="content-middle">	
                        <div id="content-top">
                            <div id="home-box1">
                                
								<!-- conteudo -->
                                <span id="content-start"></span>
                                <div id="home-box-container">
                                    <div id="home-box-content">

                                        <div id="home-subbox-noticias">                                        
                                            <div id="home-subbox-bottom-noticias">
	                                            <p class="titulo-int" align="left"><strong>Mais notícias</strong></p>

                                                <ul>


						<?php 

						$postsporpag = get_option( 'posts_per_page' );
                                                $numpaginas=ceil(wp_count_posts()->publish/$postsporpag);
						if(!@$_GET["pagina"]) { // coloquei o @ pra nao mostrar erros ***
							$pc = "1";
						}else{
							if ($_GET["pagina"]<=$numpaginas){
								$pc = $_GET["pagina"];
							}else{
								$pc = 1;
							}
						}
						$query="paged=".$pc;
						query_posts($query);
						while (have_posts()){
								the_post();?>
								<li><span class="date"><?php echo get_the_date('d/m/Y');?>: </span><a class="title" href="<?php the_permalink();?>"> <?php the_title();?></a> </li>
						<?php } ?>

						</ul>
                                                

   	                                          <?php 


						  echo "Página ".$pc." de ".$numpaginas."<br>";
						  echo "Total de registros encontrados: ".wp_count_posts()->publish."<br><br>";
						  if($pc>1){
							echo "<a href=\"mais_noticias.php?pagina=".($pc-1)."\"> <b>";
	        				  }
						  echo "<< Anterior </b></a>";
					          for ($i=1;$i<$pc;$i++){
							echo "<a href=\"mais_noticias.php?pagina=".$i."\"> ".$i."</a> ";
						  }
						  echo " <b>[".$i."]</b> ";
						  for ($i=$pc+1;$i<=$numpaginas;$i++){
							echo "<a href=\"mais_noticias.php?pagina=".$i."\"> ".$i."</a> ";
						  }
						  if ($pc<$numpaginas){
							  echo "<a href=\"mais_noticias.php?pagina=".($pc+1)."\"><b>";
						  }
						  echo "Próximo >></b></a></p>";
						  ?>
                                            </div>
                                        </div>
                               			                                    </div>
                                    </span><div id="home-box-bottom"></div>
                                </div>
                                
                              
                            </div>
                        </div>

                    </div>
    
                </div>
                    
            </div> <!-- Submain -->
            <div id="main-bottom"></div>
        </div> 
    </div> <!-- Main -->

<?php get_footer(); ?>
