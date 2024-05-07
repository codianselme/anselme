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
                        <p class="mt-4" style="text-align: justify">Ingénieur en informatique et développeur Web et mobile, j'ai une passion pour les maths et les nouvelles technologies. Après mon bac en 2012, j'ai commencé à la FAST - UAC avant de rejoindre l'École Polytechnique d'Abomey-Calavi, où j'ai obtenu mon diplôme en 2019.
                        </p>
                        <p class="mt-4" style="text-align: justify">
                            Après mes études, j'ai renforcé mes compétences par des stages professionnels et j'ai opté pour le travail en tant que développeur indépendant. Actuellement, je suis engagé dans une entreprise axée sur la transformation digitale en tant que développeur web et mobile en CDD, ce qui me permet d'appliquer mes compétences tout en restant à jour avec les avancées technologiques.
                        </p>
                        <p class="mt-4" style="text-align: justify">J'ai contribué à la conception et le développement de solutions informatiques novatrices. J'ai créé des applications web dynamiques, des apps mobiles interactives, et mis en place des solutions d'analyse de données. Ces expériences ont aiguisé mes compétences techniques et ma capacité à trouver des solutions efficaces.
                        </p>

                        <p class="mt-4" style="text-align: justify">
                            En tant que récipiendaire de la Bourse d'Excellence Vallet de 2010 à 2014, j'ai bénéficié d'un soutien financier précieux qui a largement contribué à ma réussite académique. Cette bourse m'a permis de me concentrer pleinement sur mes études en réduisant le fardeau financier des frais universitaires. Grâce à cette assistance, j'ai pu accéder à des ressources supplémentaires, participer à des événements académiques et investir dans du matériel spécialisé, ce qui a renforcé ma formation.
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
                <a href="#download" class="btn btn-style btn-primary">Télécharger mon CV</a>
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
                                        <h4><a href="https://master.dadigitall.com/">Master Digit</a></h4>
                                        <p style="text-align: justify"> J'ai élaboré une plateforme web et mobile visant à digitaliser l'ensemble des processus des Master Distributeurs dans
                                            le domaine du réseau de téléphonie mobile. La version web a été réalisée avec le framework Laravel, tandis que la version mobile a été conçue en
                                            utilisant la technologie Flutter. Ce projet a permis de moderniser et d'optimiser les opérations des Master Distributeurs, offrant ainsi une
                                            solution intégrée et efficace pour une gestion plus fluide et performante de leurs activités.  <br>
                                            <br>
                                        </p>
                                        {{-- <a href="https://master.dadigitall.com/" class="read">Voir Plus</a> --}}
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
                                        <h4><a href="https://garage.dadigitall.com">Garage Digit</a></h4>
                                        <p style="text-align: justify">J'ai contribué à la conception de Garage Digit, une plateforme web visant à numériser entièrement les processus des garages 
                                            automobiles. Elle comprend plusieurs modules couvrant de l'arrivée à la sortie du véhicule, incluant diagnostics, tâches et paiements, y compris l'historique 
                                            et les différents rapports. Chaque module vise à optimiser l'efficacité opérationnelle des garages, offrant une solution complète et intuitive pour une gestion 
                                            transparente et performante des activités d'entretien automobile. <br> <br>
                                        </p>
                                        {{-- <a href="https://garage.dadigitall.com" class="read">Voir Plus</a> --}}
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
                                        <h4><a href="https://akimstore.xyz/">Akim Store</a></h4>
                                        <p style="text-align: justify">La plateforme se décline en deux versions : une web, développée en Laravel - Livewire - Alpine JS, et une mobile, développée en Flutter. 
                                            Elle vise à gérer à la fois une boutique et les tontines des clients affiliés. Cette solution comprend plusieurs modules, notamment pour l'approvisionnement, 
                                            la vente, la gestion des tontines et les rapports. Chaque module est bien conçu pour garantir une gestion fluide et transparente des activités 
                                            de la boutique, offrant ainsi une expérience optimale tant aux gérants qu'aux clients.
                                        </p>
                                        {{-- <a href="https://akimstore.xyz/" class="read">Voir plus</a> --}}
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
                                        <p style="text-align: justify">Une plateforme web simplifie la gestion des réservations des salles au palais des congrès de Cotonou. Particuliers et entreprises 
                                            peuvent réserver des salles avec des caractéristiques spécifiques, telles que la sonorisation et la climatisation, pour leurs événements. Cette solution pratique 
                                            optimise la planification des événements au palais des congrès.</p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
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
                                        <p style="text-align: justify">Il s'agit d'une plateforme innovante, à la fois web et mobile, conçue pour révolutionner la gestion des concerts au Bénin. 
                                            Cette solution complète vise à simplifier et à dynamiser l'organisation d'événements musicaux en offrant une interface conviviale aux organisateurs, 
                                            artistes et participants. La version web, développée avec Laravel - livewire -Alpine JS pour une robustesse optimale, assure une gestion efficace 
                                            des données et des transactions</p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
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
                                        <p style="text-align: justify">L'application PAS (Paiement Automatisé et Simplifié) innove avec sa composante web pour la gestion des abonnements et sa 
                                            version mobile, offrant une automatisation complète des achats virtuels et des transactions via mobile money aux clients. La version web gère les 
                                            abonnements clients et fournit divers rapports, tandis que la version mobile est destinée aux clients pour leurs transactions.
                                        </p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-area-chart"></span>
                                        </div>
                                        <h4 class="number">07</h4>
                                        <h4><a href="#">PDRDM-IA</a></h4>
                                        <p style="text-align: justify">Il s'agit d'une plateforme web en cours de developpement à l'aide des technologies Laravel - Livewire et Alpine JS. Il s'agit 
                                            d'une plateforme piloté par une IA offrant une gamme étendue de fonctionnalités pour les entrepreneurs, les professionnels 
                                            et les apprenants. 
                                        </p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-area-chart"></span>
                                        </div>
                                        <h4 class="number">08</h4>
                                        <h4><a href="#">Lotto IA</a></h4>
                                        <p style="text-align: justify">Il s'agit d'une programme basé sur l'IA exploitant les capacités de l'intelligence artificielle pour fournir des prévisions sur les jeux de lotterie. 
                                        </p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-area-chart"></span>
                                        </div>
                                        <h4 class="number">09</h4>
                                        <h4><a href="#">Lotto IA</a></h4>
                                        <p style="text-align: justify">Ce programme, développé en Python, offre une simulation détaillée de la propagation d'une épidémie. Après la collecte minutieuse des données, celles-ci 
                                            sont exploitées dans un algorithme de machine learning afin de générer des prévisions précises.
                                        </p>
                                        {{-- <a href="#" class="read">Voir Plus</a> --}}
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
                                        <q>Anselme Victor AKPOVI est un atout précieux pour notre équipe de développement. Son expertise exceptionnelle en tant que développeur web et mobile a considérablement amélioré notre capacité à livrer des projets de haute qualité dans les délais impartis.</q>
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
                                        <q>Travailler aux côtés d'Anselme Victor AKPOVI est une expérience enrichissante. Sa collaboration proactive et sa volonté constante de partager ses connaissances ont contribué à renforcer notre équipe. En tant que collègue, il incarne l'esprit d'équipe.</q>
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
                        <h3 class="title-big">Je peux donner à votre entreprise un nouveau départ créatif dès maintenant ! Engagez-moi pour votre projet !</h3>
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
            {{-- <a href="{{ route("contact") }}" class="btn btn-style btn-primary mr-2">Embauchez-moi </a> --}}
            <a href="{{ route("contact") }}" class="btn btn-style btn-outline-primary">Contact-Moi</a>
        </div>
    </section>
    <!-- //freelance hire me -->

@endsection