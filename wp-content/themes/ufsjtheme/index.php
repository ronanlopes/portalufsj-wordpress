<?php get_header(); ?>
                  <div id="content-middle">
                        <div id="content-top">
                            <div id="home-box">
                                <ul id="home-box-tabs">
                                    <li><a href="#Principal"><span>Principal</span></a></li>
                                    <li><a href="#Sao_Joao_del-Rei"><span>S&atilde;o Jo&atilde;o del-Rei</span></a></li>
                                    <li><a href="#Alto_Paraopeba"><span>Alto Paraopeba</span></a></li>
                                    <li><a href="#Divinopolis"><span>Divin&oacute;polis</span></a></li>
                                    <li><a href="#Sete_Lagoas"><span>Sete Lagoas</span></a></li></span>
                                </ul>
                                <div id="Principal">
                                    <span id="content-start"></span> <!-- Ancora para marcar comeco do conteudo nas opcoes de acessibilidade -->
                                    <div id="home-box-container">
                                        <div id="home-box-content">
                                            <span class="text-title"><br>
                                               <span id="txt">
                                                   <!--<span class="date">
                                                        <span class="date-d">&nbsp;</span>
                                                        <span class="date-m">&nbsp;</span>
                                                        <span class="date-bottom"></span>
                                                   </span>-->
							<?php 
							$do_not_duplicate = array(); //Array que auxilia o controle de posts já mostrados (para evitar repetição no mais notícias)				
							if (have_posts()){
								the_post();
								$do_not_duplicate[] = $post->ID;
							}?>
                                                   <img src="<?php echo get_template_directory_uri(); ?>/images/home-news.png" width="15" height="17" id="homenews" alt="Quadrado vermelho"/>&nbsp;&nbsp;
						   <a href="#content" accesskey="1"></a><a href="<?php the_permalink() ?>"><h1 id='titulopaginainicial'><?php the_title(); ?></h1></a><br><br>
                                               </span>
                                            </span>
                                            <div id="box-gallery" >
                                                <div id="box-gallery-canvas">
                                                    <div id="box-gallery-slides">
                                                        <ul>
                                                            <li>
					                        <?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								}else{
									echo '<img src="'.get_template_directory_uri().'/images/ufsj_logo.jpg" alt="Logo Ufsj">';
								}?>
                                                                <span class="box-image-title"> </span>
                                                            </li>
                                                        </ul>
                                                    </div> <!-- box-gallery-slides -->
                                                </div> <!-- box-gallery-canvas -->
                                            </div> <!-- box-gallery -->
                                            <div class="text">
                                                <p class="text" id="texto"><p> <?php the_excerpt();?>                                              
						    <!-- Tava assim: <div align="right" style="margin-right:20px;"><a href="<?php the_permalink() ?>" class="text" id="texto"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_leia_mais.jpg" alt="Leia Mais" width="11" height="11" /> <strong>Leia mais</strong></a></div> -->
						    <div style="margin-right:20px;float:right;"><a href="<?php the_permalink() ?>" class="text" id="texto"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_leia_mais.jpg" alt="Leia Mais" width="11" height="11" /> <strong>Leia mais</strong></a></div>
                                                    <p><br><br><!-- <strong>Fonte: ASCOM</strong> --></p>
                                                </p>
                                            </div>
                                        </div> <!-- home-box-content -->
                                        </span><div id="home-box-bottom"></div>
                                    </div> <!-- home-box-container -->
                                </div> <!-- Principal -->
                                <div id="Sao_Joao_del-Rei">
                                    <div id="home-box-container"><!-- class="home-tab-container" -->
                                        <div id="home-box-content"><!-- class="home-tab-content" -->
                                            <div id="home-subtab">
                                            
                                                <ul id="home-subtab-tabs">
                                                	<br>
                                                    <li><a href="#Campus_Santo_Antonio">Campus Santo Antônio</a></li>
                                                    <li><a href="#Campus_Dom_Dosco">Campus Dom Dosco</a></li>
                                                    <li><a href="#Campus_Tancredo_Neves">Campus Tancredo Neves</a></li>
                                                </ul>
                                                
                                                <div id="Campus_Santo_Antonio" class="home-subtab-content">
                                                    <h2>Campus Santo Antônio</h2>
                                                    <p class="pesquerda"><a href="http://www.ufsj.edu.br/campi_sao_joao_del_rei_sa.php">Campus Santo Antônio</a></p>
                                                    <p class="pjustificado">O prédio principal do Campus Santo Antônio teve sua construção iniciada, pelo pavilhão sul, em 1915 e inaugurado em 1917. Faz parte do conjunto arquitetônico da área tombada do centro histórico de São João del-Rei. Está localizado na Praça Frei Orlando, ao lado da Igreja São Francisco, de arquitetura barroca e suas vistosas, frondosas e centenárias palmeiras imperiais, cujo valor histórico é incalculável.</p>
                                                    <p class="pjustificado">No Campus Santo Antônio, funcionou o famoso Colégio Santo Antônio, no qual várias personalidades brasileiras estudaram, tendo sido administrado até a década de 70 pelos freis franciscanos e posteriormente, até a implantação da UFSJ, pela municipalidade, onde funcionava a Fundação Municipal de São João del-Rei. Inicialmente, a instituição instalou-se no prédio principal e depois, com a aquisição dos terrenos adjacentes, ampliou sua estrutura com novas construções.</p>
                                                    <p class="pjustificado">Reformas e adequações foram realizadas para modernizar e adaptar este prédio para o funcionamento da Universidade. Outros prédios foram anexados ao prédio central e são mais novos: a Biblioteca que abriga um dos mais modernos anfiteatros do país com ilha de edição; a Mecânica na qual se instalaram salas de laboratório e de professores dos Departamentos de Mecânica e de Ciências Térmicas e dos Fluidos; o da Elétrica no qual funcionam laboratórios e salas de professores do Departamento de Eletricidade; o Ginásio Poliesportivo, obra em fase final de execução e financiada com recursos do Ministério dos Esportes, a oficina mecânica, além dos prédios da Gráfica, Carpintaria/Serralheria e a casa onde está instalado o Projeto Terceira Idade.</p>
                                                    <p class="pjustificado">Neste Campus, estão instaladas, em 2007, a Reitoria, as Pró-Reitorias de Administração, de Ensino de Graduação, de Planejamento, além da de Gestão e Desenvolvimento de Pessoas, bem como, os cursos de Ciências Econômicas, Engenharia Industrial Elétrica, Engenharia Industrial Mecânica e Matemática.</p>
                                                </div>
                                                
                                                <div id="Campus_Dom_Dosco" class="home-subtab-content">
                                                    <h2>Campus Dom Dosco</h2>
                                                    <p class="pesquerda"><a href="http://www.ufsj.edu.br/campi_sao_joao_del_rei_db.php">Campus Dom Bosco</a></p>
                                                    <p class="pjustificado">O Campus Dom Bosco está situado no bairro das fábricas e sua história está atrelada a do Colégio São João, cujas atividades iniciais se deram em 1940 pela Congregação Salesiana. Com a ajuda da população sanjoanense, representada pelo Prefeito – Sr. José do Nascimento Teixeira, foi construído o prédio, onde funcionou a partir 1943, como internato de seminaristas. Em 1948, instalou-se também o Instituto de Filosofia e Pedagogia. Depois de 30 anos de existência, unicamente, como internato para seminaristas, abriu suas salas de aulas para alunos externos e finalmente, encerrado o internato, passou a funcionar apenas como externato, o que durou até o ano de 1986.</p>
                                                    <p class="pjustificado">Em 1953, a Inspetoria Salesiana Dom Bosco, criou, anexa ao Colégio São João, uma Faculdade de Filosofia, Ciências e Letras com o objetivo de habilitar profissionalmente, de acordo com as exigências oficiais, os religiosos da Congregação mantenedora. A Faculdade Dom Bosco foi reconhecida pelo Decreto 34392, de 27 de outubro de 1953, do Presidente Vargas e foi instalada em março de 1954. Dois anos após sua instalação, abriu-se também à educação externa e ampliou seus cursos, acrescentando Psicologia e Pedagogia e em 1986 foi incorporada ao patrimônio da UFSJ.</p>
                                                    <p class="pjustificado">A partir de então, várias obras de reformas e adaptações foram realizadas no prédio principal e outros prédios foram e estão sendo construídos para atender as necessidades institucionais, tais como: prédio do DCNAT, onde funcionam os cursos de graduação em Biologia, Química e Física e o de mestrado de Física, Química e Neurociências com as devidas coordenadorias e o departamento de ciências naturais; o prédio do DEPEB onde estão alocadas as salas deste departamento e os laboratórios de neurociências; o laboratório de psicologia aplicada e o de química; o biotério central; o pavilhão de salas de aula; o prédio de salas para o Departamento das Psicologias; o prédio da nova biblioteca em fase final de execução e o prédio anexo ao DCNAT que abrigará salas de aula e laboratórios dos cursos de Biologia, Física e Química que está em fase inicial.</p>
                                                    <p class="pjustificado">Neste Campus está instalada a Pró-Reitoria de Pesquisa e Pós-Graduação, bem como os cursos de graduação em Ciências Biológicas, Filosofia, Física, História, Letras, Pedagogia, Psicologia e Química e os cursos de Pós-Graduação (Mestrado) em Física, Química e Neurociências e Letras.</p>
                                                </div>

                                                <div id="Campus_Tancredo_Neves" class="home-subtab-content">
                                                    <h2>Campus Tancredo Neves</h2>
                                                    <p class="pesquerda"><a href="http://www.ufsj.edu.br/campi_sao_joao_del_rei_ct.php">Campus Tancredo Neves</a></p>
                                                    <p class="pjustificado">Oriundo da Escola Padre Sacramento, criada por decreto em 1929 e confiada à Congregação Salesiana em 1943, suas instalações eram de propriedade do Estado e foi dirigida por longo tempo pelo Pe. Fernando Enning. Conhecida como “Patronato”, sob a direção do Pe. Godofredo Resende teve suas instalações modernizadas e ampliadas e abrigava, em sua maioria, meninos carentes.</p>
                                                    <p class="pjustificado">Em 1973 a Congregação Salesiana afastou-se de sua direção e a Escola teve fechada suas portas. Por um bom tempo ficou em completo abandono, até que em 1985, foi entregue à Igreja Adventista responsável pela Golden Cross, em comodato prorrogável de 40 anos de duração e foi então instalado, a partir de 1986, o CETAN – Centro Educacional Tancredo de Almeida Neves, destinado ao ensino de práticas agrícolas e educacionais em sistema de internato, que funcionou até o início de 2002, quando foi fechado e o imóvel devolvido à Prefeitura Municipal de São João Del Rei, a qual disponibilizou para a Universidade, por cessão de direito de uso.</p>
                                                    <p class="pjustificado">O CTAN é cinco vezes maior que os outros campi juntos. O terceiro campus passou por grandes reformas que possibilitaram a instalação dos cursos de Educação Física e Ciências Contábeis, em 2005 recebeu o curso de Administração e agora em 2006 o curso de música. Além disto, lá funcionam:</p>
                                                    <p class="pjustificado">a) o Centro de Referência do Trabalhador (CRT) que vem executando muitos projetos de inclusão social, de geração de renda e emprego, tais como o da criação de Cooperativas Populares, como a dos Catadores de Materiais Recicláveis (ASCAS);</p>
                                                    <p class="pjustificado">b) a Incubadora de Empresas de Tecnologia Mista e Negócios Tradicionais (INDETEC);</p>
                                                    <p class="pjustificado">c) o Centro de Referência da Criança e do Adolescente em Condição de Risco, que vem desenvolvendo projetos com pais, crianças e adolescentes, assistidos por professores e muitos outros parceiros, e tem por objetivo a busca de alternativas que evitem a exposição de crianças e adolescentes aos riscos impostos por vários agentes de violência e criminalidade;</p>
                                                    <p class="pjustificado">d) a Fazenda Experimental Risoleta Neves, em parceria com a EPAMIG, que pretende desenvolver projetos de fruticultura, floricultura, bovinocultura de corte e leite, dentre outros, dos quais se beneficiarão os pequenos agropecuaristas da região, com matrizes, mudas e sementes mais adequados ao nosso clima e solo;</p>
                                                    <p class="pjustificado">e) e estamos em fase de recuperação de um espaço onde funcionará o Consórcio Social da Juventude, Caminho da Estrada Real, projeto de qualificação e inclusão social, de 3.000 jovens entre 16 a 24 anos de 28 municípios, que está sendo desenvolvido em parceria com o Ministério do Trabalho.</p>
                                                </div>

                                            </div> <!-- home-subtab -->
                                        </div> <!-- home-tab-content -->
                                        <div id="home-box-bottom"></div><!-- class="home-tab-bottom" -->
                                    </div> <!-- home-tab-container -->
                                </div> <!-- Sao_Joao_del-Rei -->
                            <div id="Alto_Paraopeba">
                                <div id="home-box-container">
                                    <div id="home-box-content">
                                    	<br>
                                        <h3>Campus Alto Paraopeba</h3>
                                        <p class="pesquerda"><a href="http://www.ufsj.edu.br/cap">Campus Alto Paraopeba</a></p>
                                        <p class="pjustificado">Um novo Campus que se implementa, particularmente com a peculiaridade de campus avançado, demanda um mínimo de 10 a 15 anos para seu amadurecimento, isto é, para que se aproveite todo o potencial de sua comunidade acadêmica nos vários níveis de ensino e de geração de conhecimento novo. Assim sendo, o Campus Alto Paraopeba estará amadurecido entre 2018 e 2023. Esse fato anuncia, com clareza, que o Campus deve ser pensado na perspectiva de que ele é um campus do século XXI. Ora, isso exige da UFSJ um esforço de antecipação do que será o ensino superior tecnológico neste século, isso exige pensar o campus e estruturá-lo de modo a atender às exigências do ensino superior e da universidade diante da realidade do século XXI. Por isso, é necessário refletir sobre quais seriam as tendências deste século, como elas afetariam a ciência, a tecnologia, a sociedade e, especialmente, o ensino superior no mundo e no Brasil.</p> 
                                        <p class="pjustificado">Algumas tendências são aqui colocadas como previsíveis. </p>
                                        <p class="pjustificado">A) O envelhecimento da população mundial e brasileira, com o prolongamento da vida economicamente ativa, o que exige possíveis redirecionamentos de atividades profissionais ao longo a vida. </p>
                                        <p class="pjustificado">B) O grande desafio ecológico, o que exige soluções e adequações tecnológicas para práticas cada vez mais sustentáveis, visando ao eco-desenvolvimento, como resultado de escassez de recursos naturais e crescimento de demanda oriunda de padrões insustentáveis de consumo. O aumento de danos causados ao ambiente por impactos globais e locais. </p>
                                        <p class="pjustificado">C) A cada vez maior inovação e avanço tecnológico no campo da produção. Esse fato coloca o desafio de que engenheiros tenham que ser promotores de inovações de produtos em ritmo e velocidades crescentes e saibam se adaptar, rapidamente, a novas tecnologias. </p>
                                        <p class="pjustificado">D) A banalização dos instrumentos de informática que possibilita a simplificação de novas e diferentes formas de ensino. </p>
                                        <p class="pjustificado">E) A crescente interdisciplinaridade das questões, problemas e inovações, com a integração de tecnologias, o que implica uma nova heurística de inovação. </p>
                                        <p class="pjustificado">F) A necessidade de maior participação cidadã na solução de problemas, que, por sua complexidade, afetam amplos seguimentos da população, e no enfrentamento do desafio de convivência entre diferentes, com tolerância e paz. </p>
                                        <p class="pjustificado">G) A globalização econômica e as grandes mudanças no mundo da produção e do trabalho, provocadas pela integração de mercados, meios de comunicação e transportes, e a aceleração das inovações e mudanças tecnológicas. Tais mudanças vêm impondo rearranjos de empregos e de funções, num quadro de precariedade das relações entre o trabalho e o capital. </p>
                                        <p class="pjustificado">H) As possibilidades de integração econômica mundial, tanto com os países do capitalismo central como com áreas periféricas, e a emergência de novas áreas e blocos econômicos, como Ásia, África e América Latina. </p>
                                        <p class="pjustificado">Essas tendências levam a UFSJ a pensar no que deve ser um Campus de Ciência e Tecnologia do século XXI. Levam-na a repensar não apenas o conteúdo do ensino, seus métodos e práticas, mas até mesmo suas estruturas administrativas e as instalações físicas do campus. A UFSJ quer que o campus do Alto Paraopeba se constitua como UM CAMPUS DO SÉCULO XXI. Um Campus que busque adiantar-se a seu tempo no Brasil, caracterizando-se como: </p>
                                        <p class="pjustificado">A) um Campus que busque abordar o ensino de modo interdisciplinar; </p>
                                        <p class="pjustificado">B) um Campus que implemente em todas as suas ações, inclusive naquelas relativas às instalações físicas, uma concepção do que há de mais moderno em termos de consciência eco-desenvolvimentista, fazendo do próprio Campus um exemplo, nesse aspecto, para as gerações de estudantes; </p>
                                        <p class="pjustificado">C) um Campus que integre a questão de processos voltados para a inovação e que ofereça a seus formandos os instrumentos para a compreensão desse processo e de envolvimento na criação de novos produtos; </p>
                                        <p class="pjustificado">D) um Campus que antecipe a universalização do uso de ferramentas informáticas associadas ao ensino, bem como de simulação de fenômenos; </p>
                                        <p class="pjustificado">E) um Campus que incorpore a preocupação cidadã como parte da formação do estudante; </p>
                                        <p class="pjustificado">F) um Campus que incorpore a dimensão da integração social, da diversidade e da convivência pacífica entre diferentes; </p>
                                        <p class="pjustificado">G) um Campus que dialogue, criticamente, com a globalização cultural, tecnológica, econômica e social, abrindo-se a novas culturas emergentes na área tecnológica. </p>
                                        <p class="pjustificado">Aspectos gerais da concepção acadêmica dos cursos do Campus Alto Paraopeba</p>
                                        <p class="pjustificado">O projeto do Campus Alto Paraopeba tem o desafio de escolher um modelo, a partir das discussões em curso no País e no exterior e no seio da própria UFSJ, inovar e interagir com o conjunto da UFSJ. A partir de um balanço do estado dos debates, dentro e fora da UFSJ, optou-se por aceitar o desafio de inovar no modelo acadêmico dos cursos de graduação, de abordagens de ensino e na estrutura administrativa e física que se coadunem com os novos parâmetros acadêmicos. </p>
                                    </div> <!-- home-tab-content -->
                                    <div id="home-box-bottom"></div>
                                </div> <!-- home-tab-container -->
                            </div> <!-- Alto_Paraopeba -->
                                <div id="Divinopolis">
                                    <div id="home-box-container">
                                        <div id="home-box-content">
                                        	<br>
	                                        <h3>Campus Divin&oacute;polis</h3>
                                            
                                            <p class="pesquerda"><a href="http://www.ufsj.edu.br/cco">Campus de Divinópolis</a></p>
                                            
                                            <p class="pjustificado">A Universidade Federal de São João del-Rei (UFSJ) iniciou em 2008, na região Centro-Oeste de Minas, a implantação de um projeto socioeducacional capaz de trazer profundas mudanças na vida de sua população: trata-se do Campus Centro-Oeste Dona Lindu, em Divinópolis, que abriga os cursos superiores de Medicina, Enfermagem, Farmácia e Bioquímica.</p>
                                            <p class="pjustificado">A escolha do Centro-Oeste mineiro para abrigar o Campus Dona Lindu da UFSJ foi resultado de minuciosa analise do perfil social da região, que tem mais de 1,12 milhões de habitantes, 96% dos quais em áreas urbanas e com indicadores de saúde ainda insatisfatórios.</p>
                                            <p class="pjustificado">Divinópolis, sede do campus e município-polo da região, com mais de 200 mil habitantes, possui 41 estabelecimentos públicos de saúde, cinco hospitais filantrópicos ou particulares e 16 serviços especializados. O campus Centro-Oeste Dona Lindu tem o compromisso com a formação de profissionais capazes de atuar como agentes de transformação social e das praticas em saúde.</p>
                                            <p class="pjustificado" style="margin-bottom:0px;">A implantação do Campus Dona Lindu teve como fundamentos:
                                                    <p style="margin-left:15px; margin-top:0px; margin-bottom:0px;" class="pjustificado"><strong>&raquo;</strong> a busca de soluções para os problemas de saúde da região;</p>
                                                    <p style="margin-left:15px; margin-top:0px; margin-bottom:0px;" class="pjustificado"><strong>&raquo;</strong> a constituição de parcerias com os municípios do Centro-Oeste para formação profissional e consolidação do Sistema Único de Saúde (SUS);</p>
                                                    <p style="margin-left:15px; margin-top:0px; margin-bottom:0px;" class="pjustificado"><strong>&raquo;</strong> o enfrentamento da baixa resolubilidade dos serviços ambulatoriais e hospitalares;</p>
                                                    <p style="margin-left:15px; margin-top:0px; margin-bottom:0px;" class="pjustificado"><strong>&raquo;</strong> o compromisso com uma nova visão de formação profissional para a concepção ampliada de saúde.</p><br>
                                            </p>
                                            
										<!--    
                                            <p class="pjustificado">O Campus Avançado Divinópolis abrigará quatro cursos na área de Saúde a partir 
                                            de 2008. A Câmara Municipal de Divinópolis aprovou, e o prefeito sancionou, a 
                                            Lei 6.632, de 13 de setembro de 2007, que autoriza a transferência do imóvel onde 
                                            funcionarão os cursos da área de saúde.  São 20 mil metros quadrados de área, dos 
                                            quais 12,6 mil já edificados. Pela letra da lei, a doação destina-se, 
                                            exclusivamente, à implantação do quinto campus da UFSJ, não podendo ser objeto de 
                                            alienação nem permuta.
                                            </p>
                                        -->
                                        </div>
                                        <div id="home-box-bottom"></div>
                                    </div>
                                </div>
                                <div id="Sete_Lagoas">
                                    <div id="home-box-container">
                                        <div id="home-box-content">
                                        	<br>
                                            <h3>Campus Sete Lagoas</h3>
                                            <p class="pesquerda"><a href="http://www.ufsj.edu.br/csl">Campus Sete Lagoas</a></p>
                                            <p class="pjustificado">O novo campus da Universidade Federal de São João del-Rei (UFSJ) foi criado em 2009 no município de Sete Lagoas (SL), MG, para fomentar o desenvolvimento científico e tecnológico dos municípios da mesorregião metalúrgica de Sete Lagoas. Esta mesorregião tem como principais atividades econômicas a agropecuária e indústrias do setor de metalurgia e de alimentos, dentre outras. Na nova unidade da UFSJ foram implantados os cursos de graduação de Engenharia Agronômica e Engenharia de Alimentos, e uma pós-graduação, em nível de mestrado e doutorado, na área de Bioengenharia.</p>
                                            <p class="pjustificado">A Unidade de Sete Lagoas (USL) da UFSJ está inserida em uma região que apresenta na atualidade forte desenvolvimento tecnológico. Esta região tem taxa de desenvolvimento comparável à da China, entorno de 11,5% ao ano. Sua área de influência, com mais de 500.000 habitantes, abrange 38 municípios da mesorregião metalúrgica.</p>
                                            <p class="pjustificado">A inserção da USL-UFSJ no contexto regional é estratégica, prevendo atuação nas diferentes áreas das ciências agrárias e da tecnologia de alimentos, com base em uma formação teórica e prática, aliada à pesquisa científica, extensão e cooperações com outras instituições de ensino e pesquisa, como previsto no Programa de Desenvolvimento Institucional (PDI) da Universidade Federal de São del-Rei.</p> 
                                        </div>
                                        <div id="home-box-bottom"></div>
                                    </div>
                                </div>                            </div>
                        </div>
                        <!-- Noticias em Destaque -->
                        <div id="home-subbox">
                            <div id="home-subbox-content">

				<?php 
				for($i=0;$i<4;$i++){
					if (have_posts()){
						the_post(); 
						$do_not_duplicate[] = $post->ID;?>
						<p><a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) {
		   						the_post_thumbnail();	
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/ufsj_logo.jpg" alt="UFSJ Logo">';
							}?>
							<span> <?php the_title(); ?></span>
						</p>
					<?php }
				}?>

                     
                            </div>
                            <!-- Demais Noticias -->
                            <div id="home-subbox-bottom">
                                <ul id="home-subbox-news">
					<?php for($i=0;$i<5;$i++){
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
                        </div> <!-- home-subbox -->
                    </div>

                    <br>
                    <div id="acesso-rapido-header">
                        <div id="acesso-rapido-top"></div>
                        <div id="acesso-rapido-middle">
                            <span id="acesso-rapido-img">&nbsp;&nbsp;</span>
                            <span id="acesso-rapido-titulo"><strong><a href="#acessorapido" accesskey="2"></a>Acesso R&aacute;pido</strong></span><br>
                            <div id="header-menu">
                                <span class="boxlist">
                                    <div id="menus-acesso">
                                        <ul id="smartlinks">
                                            <div id="conteudoEsq">
	                                        <li><a href="http://www.dibib.ufsj.edu.br"><span class="icon-mapa-biblioteca"></span>Biblioteca</a></li>
	                                        <li><a href="http://www.ufsj.edu.br/agenda/index.php"><span class="icon-mapa-calendarioacademico"></span>Calendário Acadêmico</a></li>
	                                        <li><a href="http://www.ufsj.edu.br/centrocultural"><span class="icon-mapa-centrocultural"></span>Centro Cultural</a></li>
											<li><a href="http://www.ufsj.edu.br/concursos.php"><span class="icon-mapa-concursos"></span>Concursos</a></li>
											<li><a href="http://www.ufsj.edu.br/ntinf/solicitacao_ouvidoria.php"><span class="icon-mapa-ouvidoria"></span>Ouvidoria</a></li>
                                            </div>

                                            <div id="conteudoMiddle">
	                                        <li><a href="http://www.ufsj.edu.br/download_de_arquivos.php"><span class="icon-mapa-downloadarquivos"></span>Download de arquivos</a></li>
	                                        <li><a href="http://www.ufsj.edu.br/dicon"><span class="icon-mapa-dicon"></span>Dicon</a></li>
	                                        <li><a href="http://www.ufsj.edu.br/fale_conosco.php"><span class="icon-mapa-faleconosco"></span>Fale Conosco</a></li>
	                                        <li><a href="http://www.intranet2.ufsj.edu.br/principal.php"><span class="icon-mapa-intranet"></span>Intranet</a></li>
	                                        <li><a href="http://www.ufsj.edu.br/dimap"><span class="icon-mapa-licitacoes"></span>Licitações</a></li>
                                            </div>

                                            <div id="conteudoDir">
	                                        <li><a href="http://www.ufsj.edu.br/portal2-repositorio/File/ascom/catalogo_telefonico.doc"><span class="icon-mapa-catalogotelefone"></span>Lista Telefônica</a></li>
	                                        <li><a href="http://www.periodicos.capes.gov.br"><span class="icon-mapa-periodicos"></span>Periódicos</a></li>
	                                        <li><a href="http://www.campusvirtual.ufsj.edu.br/site"><span class="icon-mapa-portaldidatico"></span>Portal Didático</a></li> 
	                                        <li><a href="http://www.vestibular.ufsj.edu.br"><span class="icon-mapa-vestibular"></span>Vestibular</a></li>
	                                        <li><a href="https://mail.google.com/a/ufsj.edu.br"><span class="icon-mapa-webmail"></span>Webmail</a></li>
                                            </div>
                                        </ul>
                                    </div>
                                </span>
                            </div> <!-- header-menu -->
                        </div> <!-- acesso-rapido-middle -->
                        <div id="acesso-rapido-bottom"></div>
                    </div> <!-- acesso-rapido-header -->
                </div> <!-- content -->
            </div> <!-- submain -->
            <div id="main-bottom"></div>
        </div> <!-- main-canvas -->
    </div> <!-- main -->
<?php get_footer(); ?>
