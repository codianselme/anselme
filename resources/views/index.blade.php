@extends("layouts.base")

@section('title')
    {{ "Anselme Portfolio - Accueil"  }}
@endsection

@section('content')

    <section id="home" class="w3l-banner py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 mt-lg-0 mt-4">
                    <span class="title-small">Bonjour, </span>
                    <h1 class="mb-4 title"> <span>Je suis</span> Anselme Victor AKPOVI </h1>
                    <h1 class="mb-4 title"> a <span class="typed-text"></span><span class="cursor">&nbsp</span></h1> 
                    <p style="text-align: justify">Bonjour et bienvenue sur mon profil ! Je suis un ingénieur informatique polyvalent avec une passion pour le développement web
                        et mobile, l'analyse de données et le machine learning. <br> Avec plus de {{ $nombreAnnees }} années d'expérience dans le domaine du développement d'application web et mobile,
                        j'ai travaillé sur de nombreux projets allant de la création de sites et plateforme web dynamiques aux applications mobiles interactives.
                        Je suis constamment à l'affût des dernières avancées technologiques et des meilleures pratiques pour offrir des solutions innovantes
                        et efficaces
                    </p>
                    <div class="mt-sm-5 mt-4">
                        <a class="btn btn-primary btn-style mr-2" href="{{ route("contact") }}"> {{--Hire Me--}} Me Contacter</a>
                        <a class="btn btn-outline-primary btn-style mr-2" href="#portfolio"> Mon Portfolio </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 mt-lg-0 mt-4">
                    <div class="img-effect text-lg-center">
                        <img src="{{ asset('assets/images/r2.jpg') }}" alt="myphoto" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home page about section -->
    <section class="w3l-index3" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/r4.jpg') }}" alt="" class="radius-image img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-lg-0 mt-5">
                        <h5 class="title-small mb-2">Qui suis-je ?</h5>
                        <h3 class="title-big">Je m'appelle Anselme Victor AKPOVI.</h3>
                        <p class="mt-4" style="text-align: justify">Je suis un ingénieur en informatique et un developpeur Web et mobile. Passionné par les mathématiques et les nouvelles technologies, j'ai entrepris mon parcours académique après l'obtention de mon baccalauréat
                            série C en 2012. Inscrit dans un premier temps à la faculté des sciences et techniques (FAST - UAC), j'y ai poursuivi mes études pendant deux ans avant de m'inscrire au cycle ingénieur de conception,
                            grade master, à l'École Polytechnique d'Abomey-Calavi (Université d'Abomey-Calavi - UAC) au Bénin de 2014 à 2019.</p>
                        <p class="mt-4" style="text-align: justify">
                            À la fin de mes études, j'ai consolidé ma formation par le biais de stages professionnels enrichissants. Par la suite, j'ai choisi de mettre en pratique mes connaissances en travaillant
                            en tant que développeur indépendant. Actuellement, je contribue activement au sein d'une structure spécialisée dans la transformation digitale, où j'exerce en tant que développeur web et mobile
                            en contrat à durée déterminée (CDD). Cette expérience me permet d'appliquer mes compétences de manière concrète tout en restant à la pointe des évolutions technologiques dans le domaine.
                        </p>
                        <p class="mt-4" style="text-align: justify">Au fil du temps, j'ai contribué significativement à la conception et au développement de plusieurs solutions
                            informatiques innovantes. Mon expérience inclut la création de applications web dynamiques, le développement d'applications mobiles interactives et la mise
                            en œuvre de solutions d'analyse de données. Ces défis ont renforcé mes compétences techniques et ma capacité à trouver des solutions efficaces.</p>

                        <p style="text-align: justify">
                            Bénéficiaire de la Bourse d'Excellence Vallet de 2010 à 2014, cette opportunité a grandement contribué à ma réussite académique. Cette bourse m'a permis de me consacrer pleinement à mes études en allégeant
                            le poids financier des frais universitaires. Grâce à ce soutien financier, j'ai pu accéder à des ressources supplémentaires, participer à des événements académiques et investir dans du matériel spécialisé, renforçant ainsi ma formation.
                        </p>
                        <a href="#download" class="btn btn-style btn-primary mt-lg-5 mt-4">Télécharger mon CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page about section -->

    <!-- home page second section -->
    <div class="py-5 w3l-resume">
        <div class="container py-lg-5 py-3">
            <h5 class="title-small mb-2">Besoin de mes services</h5>
            <h3 class="title-big mb-4">J'adorerais concrétiser vos idées</h3>
            <p style="text-align: justify">Dans cette démarche, je mets toute ma passion et mon expertise au service de la réalisation de vos idées. Mon objectif est de transformer vos concepts en des solutions tangibles,
                innovantes et efficaces. Fort de mon expérience dans le domaine du développement web et mobile, ainsi que de ma formation en ingénierie informatique, je suis prêt à relever
                le défi de donner vie à vos projets. En travaillant en étroite collaboration, nous pouvons créer des solutions qui dépassent vos attentes et répondent parfaitement à vos besoins.
                N'hésitez pas à partager vos idées, et ensemble, nous les concrétiserons.</p>
            <div class="mt-5">
                <a href="#download" class="btn btn-style btn-primary">Télécharger mon résumé</a>
            </div>
        </div>
    </div>
    <!-- //home page second section -->

    <!-- home page services section -->
    <section class="w3l-services">
        <div class="blog py-5" id="services">
            <div class="container py-lg-5">
                <h5 class="title-small text-center">PROJETS</h5>
                <h3 class="title-big text-center mb-sm-5 mb-4">Mes Réalisation</h3>
                <div class="row">
                    <div class="col-md-12 mx-auto pr-2">
                        <div class="owl-two owl-carousel owl-theme">
                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </div>
                                        <h4 class="number">01</h4>
                                        <h4><a href="https://master.keyladistribution.com/">Master Digit</a></h4>
                                        <p style="text-align: justify"> J'ai élaboré une plateforme web et mobile visant à digitaliser l'ensemble des processus des Master Distributeurs dans
                                            le domaine du réseau de téléphonie mobile. La version web a été réalisée avec le framework Laravel, tandis que la version mobile a été conçue en
                                            utilisant la technologie Flutter. Ce projet a permis de moderniser et d'optimiser les opérations des Master Distributeurs, offrant ainsi une
                                            solution intégrée et efficace pour une gestion plus fluide et performante des activités liées à l'entreprise.
                                            <br><br><br><br><br>
                                        </p>
                                        <a href="https://master.keyladistribution.com/" class="read">Voir Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-laptop"></span>
                                        </div>
                                        <h4 class="number">02</h4>
                                        <h4><a href="https://garage.keyladistribution.com">Garage Digit</a></h4>
                                        <p style="text-align: justify">J'ai participé à la conception de la plateforme web Garage Digit destinée à la digitalisation complète des processus au sein des garages automobiles.
                                            Cette solution englobe plusieurs modules essentiels, notamment un module d'enregistrement des véhicules à leur arrivée, un module de diagnostic,
                                            un module dédié aux travaux effectués dans les ateliers, un module de paiement, ainsi que des rapports détaillés. Chacun de ces modules a été
                                            développé dans le but d'optimiser l'efficacité opérationnelle des garages, offrant ainsi une solution complète et intuitive pour la gestion
                                            transparente et performante de l'ensemble des activités liées à l'entretien automobile.</p>
                                        <a href="https://garage.keyladistribution.com" class="read">Voir Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </div>
                                        <h4 class="number">03</h4>
                                        <h4><a href="https://akimboutique.yes.bj/">Akim Store</a></h4>
                                        <p style="text-align: justify">La plateforme se décline en deux versions : une version web développée en Laravel - Livewire et une version mobile
                                            développée en Flutter. Son objectif est de gérer à la fois une boutique de vente d'articles et les tontines des clients associés à la boutique.
                                            Cette solution complète comprend plusieurs modules, notamment ceux dédiés à l'approvisionnement, à la vente, à la gestion des tontines,
                                            ainsi qu'à la génération de rapports. Chacun de ces modules a été soigneusement conçu pour assurer une gestion efficace et transparente des
                                            activités de la boutique, offrant ainsi une expérience optimale tant pour les gérants que pour les clients.</p>
                                        <a href="https://akimboutique.yes.bj/" class="read">Voir plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-area-chart"></span>
                                        </div>
                                        <h4 class="number">04</h4>
                                        <h4><a href="#">GestPallais</a></h4>
                                        <p style="text-align: justify">Il s'agit d'une plateforme web conçue pour faciliter la gestion des réservations du palais des congrès de Cotonou. Les particuliers et entreprises
                                            souhaitant réserver une salle avec des caractéristiques spécifiques telles que la sonorisation, la capacité d'accueil, et la climatisation peuvent
                                            aisément effectuer leur réservation en fonction de leur événement ou de leurs besoins organisationnels. Cette plateforme offre une solution pratique
                                            et efficace pour simplifier le processus de réservation et assurer une planification optimale des événements au sein du palais des congrès.</p>
                                        <a href="#" class="read">Voir Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-laptop"></span>
                                        </div>
                                        <h4 class="number">05</h4>
                                        <h4><a href="#">Bénin Concert</a></h4>
                                        <p style="text-align: justify">Il s'agit d'une plateforme innovante, à la fois web et mobile, conçue pour révolutionner la gestion des concerts au Bénin. Cette solution complète vise à simplifier et à dynamiser l'organisation d'événements musicaux en offrant une interface conviviale aux organisateurs, artistes et participants. La version web, développée avec Laravel pour une robustesse optimale, assure une gestion efficace des données et des transactions, tandis que la version mobile, créée avec Flutter, offre une expérience utilisateur fluide, accessible à tout moment et en tout lieu.</p>
                                        {{--<p style="text-align: justify">L'un des principaux modules de cette plateforme est dédié à la planification des concerts, permettant aux organisateurs de créer et de personnaliser leurs événements. Du choix du lieu aux détails logistiques tels que la sonorisation et l'éclairage, chaque aspect peut être coordonné de manière transparente. Les artistes peuvent également utiliser la plateforme pour promouvoir leurs performances, interagir avec leur public et faciliter la vente de billets en ligne.</p>--}}
                                        {{--<p style="text-align: justify">De plus, la plateforme intègre des fonctionnalités de billetterie électronique, simplifiant le processus d'achat et d'inscription pour les participants. Les rapports générés par la plateforme offrent aux organisateurs une vision claire des performances de leurs événements, tandis que les retours des participants peuvent être recueillis pour améliorer continuellement l'expérience concert. Cette initiative vise à stimuler l'industrie musicale au Bénin en facilitant la mise en place d'événements de qualité et en renforçant l'interaction entre les artistes et leur public.</p>--}}
                                        <a href="#" class="read">Voir Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-area-chart"></span>
                                        </div>
                                        <h4 class="number">06</h4>
                                        <h4><a href="#">Tx MoMo</a></h4>
                                        <p style="text-align: justify">L'application PAS (Paiement Automatisé et Simplifié) représente une solution novatrice, avec sa composante web dédiée à la gestion des abonnements et sa version mobile conçue pour offrir aux clients une automatisation complète des opérations liées aux transactions via mobile money. La partie web, développée avec une technologie moderne telle que Django, offre une interface conviviale pour la gestion fluide des abonnements. Les utilisateurs peuvent facilement s'abonner, gérer leurs informations personnelles et suivre l'état de leur abonnement grâce à des fonctionnalités intuitives.</p>
                                        {{--<p style="text-align: justify">La version mobile de l'application PAS, développée avec une technologie comme React Native pour une expérience utilisateur homogène, révolutionne la manière dont les transactions mobile money sont effectuées. Les clients bénéficient d'une automatisation complète, de la consultation du solde à l'envoi d'argent en passant par le paiement de factures, le tout au bout de leurs doigts. Cette application simplifie le processus de paiement en offrant une solution centralisée et conviviale pour les utilisateurs de mobile money, contribuant ainsi à l'efficacité et à la facilité d'utilisation dans le quotidien des clients.</p>--}}
                                        {{--<p style="text-align: justify">Un aspect clé de cette application est sa sécurité renforcée. Les transactions mobiles sont traitées de manière sécurisée, garantissant la confidentialité des informations financières des utilisateurs. De plus, des fonctionnalités de suivi des transactions et de génération de rapports sont intégrées pour permettre une gestion transparente et efficace, aussi bien pour les abonnements que pour les transactions mobile money. En combinant la commodité de la gestion d'abonnements en ligne avec l'automatisation des transactions mobiles, l'application PAS offre une solution complète et fiable pour les abonnés et les utilisateurs de services financiers mobiles.</p>--}}
                                        <a href="#" class="read">Voir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-more">
                    <p class="mt-4 pt-3 sample text-center">
                        <a href="#">Voir tous les services <span class="pl-2 fa fa-long-arrow-right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page services section -->

    <!-- stats -->
    <section class="w3l-stats py-lg-5 py-4" id="stats">
        <div class="gallery-inner container py-md-5 py-4">
            <div class="row stats-con">
                <div class="col-sm-3 col-6 stats_info counter_grid">
                    <span class="fa fa-laptop"></span>
                    <p class="counter">06</p>
                    <h4>Projets achevés</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid1">
                    <span class="fa fa-hourglass-end"></span>
                    <p class="counter">05</p>
                    <h4>En Cours de developpement</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                    <span class="fa fa-gift"></span>
                    <p class="counter">02</p>
                    <h4>Prix reçus</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                    <span class="fa fa-smile-o"></span>
                    <p class="counter">03</p>
                    <h4>Clients satisfaits</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- testimonials -->
    <section class="w3l-clients" id="clients">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="heading text-center mx-auto">
                    <h6 class="title-small text-center">TÉMOIGNAGES</h6>
                    <h3 class="title-big mb-md-5 mb-4">Ce qu'on pensent de moi </h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-carousel owl-theme mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Anselme Victor AKPOVI est un atout précieux pour notre équipe de développement. Son expertise exceptionnelle en tant que développeur web et mobile a considérablement amélioré notre capacité à livrer des projets de haute qualité dans les délais impartis. Sa créativité et son engagement envers l'excellence ont été des facteurs clés dans le succès de plusieurs initiatives stratégiques de l'entreprise.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team1.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Mathias DEKADJEVI</h3>
                                            <p class="indentity">Cotonou, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Travailler aux côtés d'Anselme Victor AKPOVI est une expérience enrichissante. Sa collaboration proactive et sa volonté constante de partager ses connaissances ont contribué à renforcer notre équipe. En tant que collègue, il incarne l'esprit d'équipe et la recherche de solutions novatrices..</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team2.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Banel SEMASSOUSSI</h3>
                                            <p class="indentity">Cotonou, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Anselme Victor AKPOVI apporte une énergie positive à notre espace de travail. Sa passion pour le développement web et mobile est contagieuse, et il n'hésite jamais à partager ses idées et son expertise. Sa collaboration a été essentielle pour le succès de nos projets communs.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team3.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Enselme AGUIDIGODO</h3>
                                            <p class="indentity">Abomey-Calavi, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Les solutions web et mobile conçues par Anselme Victor AKPOVI ont révolutionné la façon dont nous gérons nos processus internes. Sa compréhension approfondie de nos besoins et sa capacité à transformer des idées en réalité ont considérablement amélioré notre efficacité opérationnelle.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team4.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Fréjus HOUNON</h3>
                                            <p class="indentity">Abomey-Calavi, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Anselme Victor AKPOVI a créé des applications exceptionnelles pour notre entreprise. Son attention aux détails et sa capacité à comprendre nos besoins spécifiques ont abouti à des solutions sur mesure qui ont augmenté notre productivité et amélioré l'expérience de nos utilisateurs.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team2.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Inès KINDJI</h3>
                                            <p class="indentity">Cotonou, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Faire équipe avec Anselme Victor AKPOVI en tant que développeur indépendant a été une expérience exceptionnelle. Il a su comprendre rapidement nos exigences et créer une application qui a dépassé nos attentes. Sa communication transparente et son professionnalisme ont rendu le processus de développement fluide et efficace..</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team3.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Akim </h3>
                                            <p class="indentity">Cotonou, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Anselme Victor AKPOVI a apporté une valeur inestimable à notre projet en tant que développeur indépendant. Son expertise technique, son engagement envers la qualité et sa capacité à respecter les délais ont fait de lui un partenaire de confiance. Nous sommes extrêmement satisfaits des résultats obtenus.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team3.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Smith Johnson</h3>
                                            <p class="indentity">Cotonou, Bénin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->

    <!-- home page video popup section -->
    <section class="w3l-index5" id="about">
        <div class="new-block py-5">
            <div class="container py-lg-5">
                <div class="middle-section text-center">
                    <div class="section-width">
                        <h3 class="title-big">Je peux donner à votre entreprise un nouveau départ créatif dès maintenant ! Engagez-moi pour votre projet incroyable !</h3>
                        <p class="mt-3" style="text-align: justify">Fort d'une passion inébranlable pour le développement web et mobile, je suis prêt à insuffler une nouvelle vie créative à votre entreprise.
                            Avec un bagage solide en ingénierie informatique et une expérience variée tant en entreprise que en tant que développeur indépendant, je suis confiant dans ma
                            capacité à transformer vos idées en des solutions technologiques innovantes. Mon engagement envers l'excellence, ma créativité sans limite et ma volonté de
                            repousser les frontières du possible font de moi le partenaire idéal pour votre projet. Ensemble, nous pouvons créer une présence en ligne exceptionnelle,
                            des applications mobiles remarquables et des solutions sur mesure qui propulseront votre entreprise vers de nouveaux sommets. Engagez-moi aujourd'hui, et
                            commençons ce voyage vers le succès et l'innovation !</p>
                    </div>
                    <div class="history-info mt-5">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/bg.jpg') }}" class="img-fluid radius-image video-popup-image"
                                 alt="video-popup">

                            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                            </a>

                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://www.youtube.com/shorts/T54zxAWfXsk?feature=share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/shorts/AKOCcbVxgJM?feature=share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page video popup section -->

    <!-- freelance hire me -->
    <section class="w3l-grid-quote text-center py-5">
        <div class="container py-3">
            <h6 class="title-small">Prendre contact</h6>
            <h3 class="title-big mb-md-5 mb-4">Commençons un projet ! Embauchez-moi.</h3>
            <a href="{{ route("contact") }}" class="btn btn-style btn-primary mr-2">Embauchez-moi </a>
            <a href="{{ route("contact") }}" class="btn btn-style btn-outline-primary">Prendre contact</a>
        </div>
    </section>
    <!-- //freelance hire me -->

@endsection