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
	                                            <p class="titulo-int" align="left"><strong>Resultados da Busca para:</strong> <?php isset($_GET["s"]) AND print $_GET["s"];?></p>

                                                <ul>


						<?php

						$postsporpag = get_option( 'posts_per_page' );
         					$allsearch =& new WP_Query("s=$s&showposts=-1"); 
						$count = $allsearch->post_count; 
						$numpaginas= ceil($count/$postsporpag);

						if(!isset($_GET["pagina"])) {
							$pc = "1";
						}else{
							if ($_GET["pagina"]<=$numpaginas and $_GET["pagina"]>0){
								$pc = $_GET["pagina"];
							}else{
								$pc = 1;
							}
						}

						// WP_Query arguments
						$args = array (
							'pagination'             => true,
							'post_type'              => 'post',
							'paged'                  => $pc,
							's'			=>$s
						);

						// The Query
						$query = new WP_Query( $args );


						while($query->have_posts()){
							$query->the_post();
							if ($post->post_type=='post'){
								echo '<li><span class="date">'.get_the_date('d/m/Y').': </span><a class="title" href="';
								the_permalink();
								echo'">';
								the_title();
								echo '</a> </li>';
							}
							
						} ?>
		

						</ul>
                                                
						<?php
   	                                           echo "Página ".$pc." de ".$numpaginas."<br>";
						  echo "Total de registros encontrados: ".$count."<br><br>";
						  if($pc>1){
							echo "<a href=\"".get_site_url()."/?s=".$s."&pagina=".($pc-1)."\"> <b>";
	        				  }
						  echo "<< Anterior </b></a>";
					          for ($i=1;$i<$pc;$i++){
							echo "<a href=\"".get_site_url()."/?s=".$s."&pagina=".$i."\"> ".$i."</a> ";
						  }
						  echo " <b>[".$i."]</b> ";
						  for ($i=$pc+1;$i<=$numpaginas;$i++){
							echo "<a href=\"".get_site_url()."/?s=".$s."&pagina=".$i."\"> ".$i."</a> ";
						  }
						  if ($pc<$numpaginas){
							  echo "<a href=\"".get_site_url()."/?s=".$s."&pagina=".($pc+1)."\"><b>";
						  }
						  echo "Próximo >></b></a></p>";
						?>
                                            </div>
                                        </div>
                               			                                    </div>
                                    </span><div id="home-box-bottom"></div>
                                </div>
                                
                                <div id="content-footer">
	                                                                    <div id="c-footer-info">
                                        <div id="c-f-info-top"></div>
                                        <div id="c-f-info-middle">
                                            <div id="c-f-info-left">Unidade informadora responsável: <br>ASCOM</div>
                                            <div id="c-f-info-right">Última atualização:<br> <?php the_modified_time('d/m/Y');?></div>
                                        </div>
                                        <div id="c-f-info-bottom"></div>
                                    </div>
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
