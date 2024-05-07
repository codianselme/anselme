@extends("layouts.base")

@section('title')
{{ "Anselme Portfolio - A Propos"  }}
@endsection

@section('content')

    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-2">
                <h2 class="title">A Propos de Moi</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="{{ route('index') }}">Accueil</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> A Propos </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->

    <!-- about page about section -->
    <section class="w3l-aboutblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/r1.jpg') }}" alt="" class="radius-image img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-lg-0 mt-5">
                        <h3 class="title-big">Bienvenue sur mon profil</h3>
                        {{--<h5 class="title-small mb-2">TRAINING</h5>--}}
                        <p class="mt-4" style="text-align: justify">Je suis un ingénieur informatique polyvalent avec une passion pour le développement web et mobile, l'analyse de données et le machine learning.
                            <br> Avec quatre (04) ans d'expérience dans le domaine du développement informatique, j'ai travaillé sur de nombreux projets allant de la création de sites
                            et applications web dynamiques aux applications mobiles interactives. Je suis constamment à l'affût des dernières avancées technologiques et des meilleures
                            pratiques pour offrir des solutions innovantes et efficaces à mes clients.
                        </p>
                        <div class="my-info mt-4">
                            <div class="single-info"><span>Nom & Prénom:</span>
                                <p>Anselme Victor AKPOVI</p>
                            </div>
                            <div class="single-info"><span>Contact:</span>
                                <p>+229 96 86 52 00</p>
                            </div>
                            <div class="single-info"><span>Nationnalité:</span>
                                <p>Béninoise</p>
                            </div>
                            <div class="single-info"><span>Email:</span>
                                <p><a href="mailto:codianselme@mail.com">codianselme@mail.com</a></p>
                            </div>
                        </div>
                        <div class="my-social mt-lg-5 mt-4">
                            <a href="#download" class="btn btn-style btn-primary">Télécharger mon CV</a>
                            <ul class="social m-0 p-0">
                                <li><a href="https://twitter.com/@AkpoviAnselme"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="https://facebook.com/https://www.facebook.com/anselmev1/"><span class="fa fa-facebook-official"></span></a></li>
                                <li><a href="https://www.linkedin.com/in/victor-anselme-akpovi-00325a165/"><span class="fa fa-linkedin-square"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about page about section -->

    <!-- about page second section -->
    <div class="py-5 w3l-resume">
        <div class="container py-lg-5 py-3">
            <h5 class="title-small mb-2">MES CENTRE D'INTÉRÊTS</h5>
            {{--<h3 class="title-big mb-4">test </h3>--}}
            <p style="text-align: justify">Passionné par l'innovation technologique, je m'intéresse au développement web et mobile, à la data science, et au machine learning.
                Mon intérêt pour le développement mobile, sur Android et avec Flutter, m'incite à explorer des approches novatrices.
                La data science et le machine learning suscitent mon enthousiasme, particulièrement pour l'extraction d'insights et la création de modèles prédictifs.
                Ces domaines convergent dans ma quête d'apprentissage, enrichissant ainsi mon parcours professionnel.
            </p>
            <div class="row features-w3pvt-main mt-5 pt-md-3" id="features">
                <div class="col-lg-4 col-md-6 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-2 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-10 col-10 featured_grid_right_info">
                            <h4><a class="link-hny" href="#url">Le dev web et mobile</a></h4>
                            <p style="text-align: justify">
                                Je m'épanouis dans le développement web en utilisant une combinaison dynamique de technologies,
                                notamment PHP avec les frameworks Laravel et Livewire, et Python avec le framework Django.
                                Cette expertise me permet de concevoir des applications web robustes et interactives, offrant
                                des solutions flexibles et performantes. Passionné par le développement mobile, j'utilise le
                                langage Dart avec le framework Flutter, créant ainsi des applications mobiles fluides et
                                réactives, garantissant une expérience utilisateur homogène sur différentes plateformes.
                                Mon engagement continu dans ces domaines témoigne de ma volonté d'explorer des technologies
                                variées et de proposer des solutions innovantes aux défis actuels.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 feature-gird mt-md-0 mt-4">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-2 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-10 col-10 featured_grid_right_info">
                            <h4><a class="link-hny" href="#url">L'administration Systeme </a></h4>
                            <p style="text-align: justify">Mon intérêt pour l'administration système et serveur se manifeste pleinement à travers
                                ma passion pour les environnements Linux. Fort de compétences approfondies dans l'administration des
                                systèmes Linux, j'ai développé une expertise solide dans la configuration, la maintenance et
                                l'optimisation de serveurs basés sur cette plateforme. Mon expérience inclut la gestion efficiente
                                des ressources, la sécurisation des systèmes, ainsi que la résolution proactive des problèmes,
                                assurant ainsi la stabilité et la performance des serveurs. L'administration des serveurs représente
                                pour moi un défi stimulant, témoignant de mon engagement envers l'efficacité opérationnelle, la
                                sécurité et la disponibilité des systèmes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-2 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-desktop" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-10 col-10 featured_grid_right_info">
                            <h4><a class="link-hny" href="#url">L'intelligence Artificiele<br> </a></h4>
                            <p style="text-align: justify">Mon enthousiasme pour l'intelligence artificielle (IA) et la data science découle de ma fascination pour
                                l'extraction d'informations significatives à partir des données. J'ai exploré ces domaines pour acquérir des compétences
                                approfondies, travaillant sur des projets de data science impliquant l'analyse de jeux de données complexes et la mise
                                en œuvre d'algorithmes statistiques. Parallèlement, l'intelligence artificielle m'inspire, en particulier le machine
                                learning, où j'ai développé une expérience pratique dans la création de modèles prédictifs, incluant la sélection et
                                le prétraitement des données, l'entraînement, l'évaluation et l'optimisation des performances.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //about page about section -->

    <!-- about page third section -->
    <section class="w3l-content-6 py-5">
        <div class="content-6-mian py-lg-5 py-md-4">
            <div class="container">
                <div class="content-info-in row">
                    <div class="content-gd col-lg-4">
                        <h3 class="title-big mb-4">Mes Technologies</h3>
                        <p style="text-align: justify">En tant que développeur passionné, je maîtrise PHP, Python, Laravel, Livewire, Django, Dart, Flutter,
                            et l'administration système Linux. Cette diversité me confère la flexibilité nécessaire pour créer des
                            solutions innovantes et performantes en développement web et mobile.
                        </p>
                    </div>
                    <div class="content-gd col-lg-4">
                        <div class="progress-info">
                            <h6 class="progress-tittle">Laravel | Livewire (PHP)
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                     aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Django (Python)</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Bootstrap | Tailwind.css | Bulma</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%"
                                     aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info mb-0">
                            <h6 class="progress-tittle">MySQL | MariaDB | Postgresql | SQLite</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%"
                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-gd col-lg-4">
                        <div class="progress-info">
                            <h6 class="progress-tittle">API REST | Développement d'API personnalisée
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                     aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">HTML5 | CSS3 | JAVASCRIPT</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Figma - Adobe XD - Wordpress</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%"
                                     aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info mb-0">
                            <h6 class="progress-tittle">Administration Serveur Linux  </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%"
                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about page third section -->

    <!-- subscribe block -->
    <div class="abouthy-img-grids">
        <div class="img-one">
            <img src="{{ asset('assets/images/g5.jpg') }}" alt=" " class="img-fluid">
        </div>
        <div class="img-one content-mid">
            <h3 class="title-big"> Laissez-moi votre email ! </h3>
            <form action="{{ route('souscribe') }}" method="POST" class="subscribe-form">
                @csrf
                <input type="email" name="email" placeholder="Entrez votre email" required>
                <button type="submit" class="btn">{{--Subscribe--}} S'abonner</button>
            </form>
        </div>
        <div class="img-one">
            <img src="{{ asset('assets/images/g3.jpg') }}" alt=" " class="img-fluid">
        </div>
    </div>
    <!-- //subscribe block -->

    <!-- achievements block -->
    <section class="w3l-services">
        <div class="w3l-achievements py-5" id="services">
            <div class="container py-lg-5">
                <h5 class="title-small text-center">Mes passe-temps préférés</h5>
                <h3 class="title-big text-center mb-sm-5 mb-4">Mes distractions</h3>
                <div class="row">
                    <div class="col-lg-6 item">
                        <div class="card">
                            <div class="box-wrap">
                                <div class="icon">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <h4><a href="#">Création d'instrumentale</a></h4>
                                <p style="text-align: justify"> En dehors du monde du code, je m'immerge dans la création d'instrumentales, façonnant des mélodies et des rythmes pour donner vie à des ambiances uniques et inspirantes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 item">
                        <div class="card">
                            <div class="box-wrap">
                                <div class="icon">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h4><a href="#"> Bricolage en électronique</a></h4>
                                <p style="text-align: justify">Mon intérêt pour l'électronique s'épanouit à travers le bricolage. J'aime assembler et concevoir des projets électroniques, explorant les possibilités infinies de cette discipline fascinante.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 item">
                        <div class="card">
                            <div class="box-wrap mb-lg-0">
                                <div class="icon">
                                    <span class="fa fa-trophy"></span>
                                </div>
                                <h4><a href="#url">Gastronomie</a></h4>
                                <p style="text-align: justify">La gastronomie est une aventure sensorielle. J'apprécie découvrir de nouvelles saveurs, expérimenter en cuisine et partager des moments conviviaux autour de plats créatifs et délicieux.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 item">
                        <div class="card">
                            <div class="box-wrap mb-0">
                                <div class="icon">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h4><a href="#url">Les arts martiaux et le sport</a></h4>
                                <p style="text-align: justify"> Les arts martiaux sont bien plus qu'une activité physique, ils incarnent l'autodiscipline, la concentration et la connexion entre le corps et l'esprit.Je mêle renforcement musculaire et endurance pour progresser physiquement en continu.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //achievements block -->

@endsection