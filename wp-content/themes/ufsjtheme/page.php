<?php get_header(); ?>
                   <div id="content-middle">	
                        <div id="content-top">
                            <div id="home-box1">

                                <!-- conteudo -->
                                <span id="content-start"></span>
                                <div id="home-box-container">
                                    <div id="home-box-content">
                                        <span class="text-title">

                                            <div id="header-menu-interno">
                                                <p class="titulo-int"></p>

                                                <div id="texto-int">
							<?php if (have_posts()){
								the_post();
                                                		echo "<p class=\"titulo-int2\" style=\"padding-top:30px;\">";
								echo "<a href=\"#content\" accesskey=\"1\"></a>";
								the_title(); 
								echo "</p>";
                                                      		the_content();
							}?>

                                                   </span>
                                                </span>

                                               </div>
                                            </div>

                                        </span>
                                    </div>
                                    <div id="home-box-bottom"></div>
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
