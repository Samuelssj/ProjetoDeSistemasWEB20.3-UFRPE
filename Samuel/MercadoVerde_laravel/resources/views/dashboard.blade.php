<x-app-layout>
    <x-slot name="header">


    </x-slot>
    <div >
        <section id="hero">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><span>Mercado Verde Tavares</span></h2>
                                <p class="animate__animated animate__fadeInUp">Oferecemos uma plataforma que permite a compra
                                    segura de Produtos Orgânicos, pensada nos mínimos detalhes e suportada por uma equipe
                                    comprometida para lhe oferecer a melhor seleção de produtos certificados e o melhor
                                    atendimento antes, durante e depois da sua compra.</p>
                                <a href="#comofunciona" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba
                                    mais</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Nossa missão</h2>
                                <p class="animate__animated animate__fadeInUp"> Promover o
                                    comércio Justo de Produtos Orgânicos. Apoiando agricultores orgânicos para que vendam
                                    diretamente, sem intermediários, seus produtos para os consumidores, tornando os preços dos
                                    orgânicos mais acessíveis para consumidores e trazendo maior renda para os Produtores de
                                    Orgânicos e maior saúde para os clientes.</p>
                                <a href="#comofunciona" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba
                                    mais</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Sejam bem vindos</h2>
                                <p class="animate__animated animate__fadeInUp">Convido você a fazer parte dessa família e
                                    desfrutar de uma vida mais saudável com nossos produtos orgânicos.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba
                                    mais</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services section-bg">
                <div class="container">

                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-computer"></i></div>
                                <h4 class="title"><a href="">Mercado Digital</a></h4>
                                <p class="description">Facilitando a disseminação de comida orgânica, cultivada com respeito, e
                                    entregue com amor. Através da parceria com diversos produtores orgânicos oferecemos uma
                                    grande diversidade de alimentos orgânicos.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-image"></i></div>
                                <h4 class="title"><a href="">Catalogo de Produtos</a></h4>
                                <p class="description">Desfrute de produtos orgânicos fresquinhos e saudáveis com sua família. E
                                    fique ligado em nosso site e no link de pedidos: toda semana temos a lista de produtos
                                    atualizada.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-tasks-alt"></i></div>
                                <h4 class="title"><a href="">Datas de entregas</a></h4>
                                <p class="description">Gerencie suas próximas entregas: você pode compra onde e quando quiser
                                    recebendo em qualquer hora do dia que desejar sendo entre as 7:00 às 17:30 h</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Featured Services Section -->

            <!-- ======= como funciona Section ======= -->
{{--            <section id="comofunciona" class="about">--}}
{{--                <div class="container">--}}
{{--                    <div>--}}

{{--                        <div class="section-title m-12">--}}
{{--                            <h2>Como funciona</h2>--}}
{{--                            <a href="/" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>--}}
{{--                            <p>O que nos motiva é distribuir os alimentos cheio de energia, por isso nosso foco está nas frutas,--}}
{{--                                legumes e verduras. Procuramos construir uma rede sustentável e virtuosa com nossos fornecedores--}}
{{--                                e clientes: nossa cultura é a abundância!.</p>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-12 order-1 order-lg-2 ml-5">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 align-items-stretch " data-aos="zoom-in"--}}
{{--                                     data-aos-delay="100">--}}

{{--                                    <div class="icon" m>--}}
{{--                                        <a href="/" class="logo mr-auto"><img src="assets/img/cestapronta.jpg" alt=""--}}
{{--                                                                              class="img-fluid"></a>--}}
{{--                                    </div>--}}
{{--                                    <h4><a href="">Cestas Prontas</a></h4>--}}
{{--                                    <p>Toda semana montamos cestas incríveis de acordo com a colheita prevista de cada--}}
{{--                                        produtor.--}}
{{--                                        O valor das cestas possui um desconto em relação à compra avulsa e você ainda pode--}}
{{--                                        trocar até 2 dos alimentos orgânicos da composição da cesta, que cobraremos apenas a--}}
{{--                                        diferença.</p>--}}

{{--                                </div>--}}


{{--                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 align-items-stretch m-3" data-aos="zoom-in"--}}
{{--                                     data-aos-delay="100">--}}

{{--                                    <div class="icon" m>--}}
{{--                                        <a href="/" class="logo mr-auto"><img src="assets/img/cesta2jpg.jpg" alt=""--}}
{{--                                                                              class="img-fluid"></a>--}}
{{--                                    </div>--}}
{{--                                    <h4><a href="">Mercado</a></h4>--}}
{{--                                    <p>Oferecemos um mercado com uma série de produtos orgânicos 100% certificados, para você--}}
{{--                                        montar uma cesta personalizada ou incrementar a sua cesta pronta, de acordo com a sua--}}
{{--                                        vontade.--}}
{{--                                        Ah, assinantes ganham 10% de desconto em todos os produtos do Mercado!</p>--}}

{{--                                </div>--}}

{{--                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 align-items-stretch m-3" data-aos="zoom-in"--}}
{{--                                     data-aos-delay="100">--}}

{{--                                    <div class="icon" m>--}}
{{--                                        <a href="/" class="logo mr-auto"><img src="assets/img/Icon3.jpg" alt=""--}}
{{--                                                                              class="img-fluid"></a>--}}
{{--                                    </div>--}}
{{--                                    <h4><a href="">Frequência</a></h4>--}}
{{--                                    <p>Você pode fazer uma compra avulsa ou assinar o seu pedido. Assinando, você receberá seu--}}
{{--                                        pedido--}}
{{--                                        em casa na frequência desejada e ainda ganha desconto na loja! A cobrança é realizada na--}}
{{--                                        semana--}}
{{--                                        do envio de cada cesta. Vale lembrar que é possível pausar ou cancelar a assinatura--}}
{{--                                        quando quiser.--}}
{{--                                        Aqui o freguês é quem manda!.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--            </section><!-- End Section -->--}}
            <!-- ======= Services Section ======= -->
{{--            <section id="services" class="services">--}}
{{--                <div class="container">--}}

{{--                    <div class="section-title">--}}
{{--                        <h2>Vantagens de assinar</h2>--}}
{{--                        <p>Nosso catálogo é atualizado toda semana com os itens disponíveis.--}}
{{--                            Toda segunda-feira incluímos também as frutas, verduras e legumes da semana. Fique ligado!</p>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
                        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">--}}
                        {{--                    <div class="icon-box iconbox-blue">--}}
                        {{--                        <div class="icon">--}}
                        {{--                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
                        {{--                                      d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>--}}
                        {{--                            </svg>--}}
                        {{--                            <i class="bx bxl-dribbble"></i>--}}
                        {{--                        </div>--}}
                        {{--                        <h4><a href="">Lorem Ipsum</a></h4>--}}
                        {{--                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

{{--                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"--}}
{{--                             data-aos-delay="200">--}}
{{--                            <div class="icon-box iconbox-orange ">--}}
{{--                                <div class="icon">--}}
{{--                                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
{{--                                              d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>--}}
{{--                                    </svg>--}}
{{--                                    <i class="bx bx-file"></i>--}}
{{--                                </div>--}}
{{--                                <h4><a href="">Perder feiras nunca mais!</a></h4>--}}
{{--                                <p>Escolha uma cesta pronta ou crie sua cesta no mercado e receba na sua casa seus orgânicos na--}}
{{--                                    frequência escolhida.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"--}}
{{--                             data-aos-delay="300">--}}
{{--                            <div class="icon-box iconbox-pink">--}}
{{--                                <div class="icon">--}}
{{--                                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
{{--                                              d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>--}}
{{--                                    </svg>--}}
{{--                                    <i class="bx bx-tachometer"></i>--}}
{{--                                </div>--}}
{{--                                <h4><a href="">Flexibilidade</a></h4>--}}
{{--                                <p>Gerencie suas próximas entregas: você pode pular qualquer ciclo ou cancelar a sua assinatura--}}
{{--                                    a qualquer momento.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                            <div class="icon-box iconbox-yellow">--}}
{{--                                <div class="icon">--}}
{{--                                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
{{--                                              d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>--}}
{{--                                    </svg>--}}
{{--                                    <i class="bx bx-layer"></i>--}}
{{--                                </div>--}}
{{--                                <h4><a href="">10% de desconto no mercado!</a></h4>--}}
{{--                                <p>Quanto mais pessoas fizerem parte dos nossos planos, maior será o desconto. Abundância gera--}}
{{--                                    abundância!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">--}}
                        {{--                    <div class="icon-box iconbox-red">--}}
                        {{--                        <div class="icon">--}}
                        {{--                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
                        {{--                                      d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>--}}
                        {{--                            </svg>--}}
                        {{--                            <i class="bx bx-slideshow"></i>--}}
                        {{--                        </div>--}}
                        {{--                        <h4><a href="">Dele Cardo</a></h4>--}}
                        {{--                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

                        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">--}}
                        {{--                    <div class="icon-box iconbox-teal">--}}
                        {{--                        <div class="icon">--}}
                        {{--                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                <path stroke="none" stroke-width="0" fill="#f5f5f5"--}}
                        {{--                                      d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>--}}
                        {{--                            </svg>--}}
                        {{--                            <i class="bx bx-arch"></i>--}}
                        {{--                        </div>--}}
                        {{--                        <h4><a href="">Divera Don</a></h4>--}}
                        {{--                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

                        {{--            </div>--}}

                    </div>
            </section><!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-9 text-center text-lg-left">
                            <h3>Ficou interessado?</h3>
                            <p> Saiba que cada entrega você receberá uma sacola com os alimentos orgânicos e poderá devolver a
                                sacola do
                                pedido anterior para o entregador. Nossas sacolas são resistentes e nós a reutilizamos para
                                minimizar o uso de plástico.</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="/register">Cadastre-se</a>
                        </div>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Produtos</h2>
                        <p>Trabalhamos somente com produtores e fornecedores com o certificado orgânico dentro da validade e
                            registramos todas as notas fiscais de compra dos alimentos. Em breve disponibilizaremos todas as
                            informações dos produtores aqui no nosso site.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Todos</li>
                                <li data-filter=".filter-app">Frutas</li>
                                <li data-filter=".filter-card">Verduras</li>
                                <li data-filter=".filter-web">Outros</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Fruta</h4>
                                    <p>morango</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Fruta 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Natural</h4>
                                    <p>Mel</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Fruta</h4>
                                    <p>Maçã</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Fruta 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Verdura</h4>
                                    <p>Pimentão</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Natural</h4>
                                    <p>Queijo Coalho</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Fruta</h4>
                                    <p>Pera</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Fruta 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Vegetal</h4>
                                    <p>Tomate</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Vegetal</h4>
                                    <p>Alface</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Natural</h4>
                                    <p>Rapadura</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery"
                                           class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

        {{--    <!-- ======= Team Section ======= -->--}}
        {{--    <section id="team" class="team section-bg">--}}
        {{--        <div class="container">--}}

        {{--            <div class="section-title">--}}
        {{--                <h2>Team</h2>--}}
        {{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint--}}
        {{--                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia--}}
        {{--                    fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        {{--            </div>--}}

        {{--            <div class="row">--}}
        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">--}}
        {{--                    <div class="member">--}}
        {{--                        <img src="assets/img/team/team-1.jpg" alt="">--}}
        {{--                        <h4>Walter White</h4>--}}
        {{--                        <span>Chief Executive Officer</span>--}}
        {{--                        <p>--}}
        {{--                            Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat--}}
        {{--                            qui aut aut aut--}}
        {{--                        </p>--}}
        {{--                        <div class="social">--}}
        {{--                            <a href=""><i class="icofont-twitter"></i></a>--}}
        {{--                            <a href=""><i class="icofont-facebook"></i></a>--}}
        {{--                            <a href=""><i class="icofont-instagram"></i></a>--}}
        {{--                            <a href=""><i class="icofont-linkedin"></i></a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">--}}
        {{--                    <div class="member">--}}
        {{--                        <img src="assets/img/team/team-2.jpg" alt="">--}}
        {{--                        <h4>Sarah Jhinson</h4>--}}
        {{--                        <span>Product Manager</span>--}}
        {{--                        <p>--}}
        {{--                            Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum--}}
        {{--                            temporibus--}}
        {{--                        </p>--}}
        {{--                        <div class="social">--}}
        {{--                            <a href=""><i class="icofont-twitter"></i></a>--}}
        {{--                            <a href=""><i class="icofont-facebook"></i></a>--}}
        {{--                            <a href=""><i class="icofont-instagram"></i></a>--}}
        {{--                            <a href=""><i class="icofont-linkedin"></i></a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">--}}
        {{--                    <div class="member">--}}
        {{--                        <img src="assets/img/team/team-3.jpg" alt="">--}}
        {{--                        <h4>William Anderson</h4>--}}
        {{--                        <span>CTO</span>--}}
        {{--                        <p>--}}
        {{--                            Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro--}}
        {{--                            des clara--}}
        {{--                        </p>--}}
        {{--                        <div class="social">--}}
        {{--                            <a href=""><i class="icofont-twitter"></i></a>--}}
        {{--                            <a href=""><i class="icofont-facebook"></i></a>--}}
        {{--                            <a href=""><i class="icofont-instagram"></i></a>--}}
        {{--                            <a href=""><i class="icofont-linkedin"></i></a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section><!-- End Team Section -->--}}

        <!-- ======= Contact Section ======= -->
            {{--    <section id="contact" class="contact">--}}
            {{--        <div class="container">--}}

            {{--            <div class="section-title">--}}
            {{--                <h2>Contact</h2>--}}
            {{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint--}}
            {{--                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia--}}
            {{--                    fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            {{--            </div>--}}

            {{--            <div class="row">--}}

            {{--                <div class="col-lg-5 d-flex align-items-stretch">--}}
            {{--                    <div class="info">--}}
            {{--                        <div class="address">--}}
            {{--                            <i class="icofont-google-map"></i>--}}
            {{--                            <h4>Location:</h4>--}}
            {{--                            <p>A108 Adam Street, New York, NY 535022</p>--}}
            {{--                        </div>--}}

            {{--                        <div class="email">--}}
            {{--                            <i class="icofont-envelope"></i>--}}
            {{--                            <h4>Email:</h4>--}}
            {{--                            <p>info@example.com</p>--}}
            {{--                        </div>--}}

            {{--                        <div class="phone">--}}
            {{--                            <i class="icofont-phone"></i>--}}
            {{--                            <h4>Call:</h4>--}}
            {{--                            <p>+1 5589 55488 55s</p>--}}
            {{--                        </div>--}}

            {{--                        <iframe--}}
            {{--                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"--}}
            {{--                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>--}}
            {{--                    </div>--}}

            {{--                </div>--}}

            {{--                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">--}}
            {{--                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">--}}
            {{--                        <div class="form-row">--}}
            {{--                            <div class="form-group col-md-6">--}}
            {{--                                <label for="name">Your Name</label>--}}
            {{--                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"--}}
            {{--                                       data-msg="Please enter at least 4 chars"/>--}}
            {{--                                <div class="validate"></div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group col-md-6">--}}
            {{--                                <label for="name">Your Email</label>--}}
            {{--                                <input type="email" class="form-control" name="email" id="email" data-rule="email"--}}
            {{--                                       data-msg="Please enter a valid email"/>--}}
            {{--                                <div class="validate"></div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="form-group">--}}
            {{--                            <label for="name">Subject</label>--}}
            {{--                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"--}}
            {{--                                   data-msg="Please enter at least 8 chars of subject"/>--}}
            {{--                            <div class="validate"></div>--}}
            {{--                        </div>--}}
            {{--                        <div class="form-group">--}}
            {{--                            <label for="name">Message</label>--}}
            {{--                            <textarea class="form-control" name="message" rows="10" data-rule="required"--}}
            {{--                                      data-msg="Please write something for us"></textarea>--}}
            {{--                            <div class="validate"></div>--}}
            {{--                        </div>--}}
            {{--                        <div class="mb-3">--}}
            {{--                            <div class="loading">Loading</div>--}}
            {{--                            <div class="error-message"></div>--}}
            {{--                            <div class="sent-message">Your message has been sent. Thank you!</div>--}}
            {{--                        </div>--}}
            {{--                        <div class="text-center">--}}
            {{--                            <button type="submit">Send Message</button>--}}
            {{--                        </div>--}}
            {{--                    </form>--}}
            {{--                </div>--}}

            {{--            </div>--}}

            {{--        </div>--}}
            {{--    </section><!-- End Contact Section -->--}}

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Mercado Verde</h3>
                <p>Somos uma empresa de produtos orgânicos. Localizada na Paraíba, entregamos em grande parte do território da
                    cidade. Faça sua encomenda..</p>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>Mercado Verde</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
                    {{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        </body>

        </html>

    </div>
</x-app-layout>