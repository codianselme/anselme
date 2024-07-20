<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio d'Anselme - Développeur Web Fullstack</title>
    <style>
        :root {
            --primary-color: #000000;
            --secondary-color: #ffffff;
            --accent-color: #ffbd39;
            --text-color: #333333;
            --background-color: #f4f4f4;
        }

        body,
        html {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 10px;
        }

        header {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://picsum.photos/id/1067/1920/1080') no-repeat center center/cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--secondary-color);
            margin-top: 60px;
        }

        .hero-content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .section-title {
            text-align: center;
            font-size: 2em;
            margin-bottom: 40px;
            color: var(--primary-color);
        }

        .portfolio {
            padding: 80px 0;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .project {
            background-color: var(--secondary-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project:hover {
            transform: translateY(-5px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
        }

        .project-info {
            padding: 20px;
        }

        .project-title {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: var(--primary-color);
            cursor: pointer;
        }

        .project-description {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 15px;
        }

        .project-links a {
            color: var(--accent-color);
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 800px;
            position: relative;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .image-gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .secondary-images {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .secondary-images img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content h1 {
                font-size: 2em;
            }

            .hero-content p {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="container">
            <div class="logo">Anselme V. AKPOVI</div>
            <div class="nav-links">
                <a href="{{ route('index') }}">Accueil</a>
                <a href="{{ route('portfolio') }}">Portfolio</a>
                <a href="{{ route('about') }}">A Propos</a>
                <a href="{{ route('contact') }}">Me Contacter</a>
            </div>
        </nav>
    </header>

    <section id="accueil" class="hero">
        <div class="hero-content">
            <h1>Anselme V. AKPOVI</h1>
            <p>Développeur Web & Mobile Fullstack</p>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title">Mon Portfolio</h2>
            <div class="projects" id="projects-container">
                <!-- Les projets seront injectés ici par JavaScript -->
            </div>
        </div>
    </section>

    <!-- Les modales seront injectées ici par JavaScript -->
    <div id="modals-container"></div>

    <footer id="contact">
        <div class="container">
            <p>© 2021 Anselme V. AKPOVI. Copyright</p>
            <p>Contact : <a href="mailto:codianselme@gmail.com"
                    style="color: var(--accent-color);">codianselme@gmail.com</a></p>
        </div>
    </footer>

    <script>
        const projectData = [{
                title: "Stock Digit",
                images: [
                    "{{ asset('pictures/01_stock_digit/01.png') }}",
                    "{{ asset('pictures/01_stock_digit/02.png') }}",
                    "{{ asset('pictures/01_stock_digit/03.png') }}",
                    "{{ asset('pictures/01_stock_digit/04.png') }}",
                    "{{ asset('pictures/01_stock_digit/05.jpg') }}",
                    "{{ asset('pictures/01_stock_digit/06.jpg') }}",
                    "{{ asset('pictures/01_stock_digit/07.png') }}",
                    "{{ asset('pictures/01_stock_digit/08.png') }}"
                ],
                designer: "Anselme",
                link: "https://stockfaghal.dadigitall.com/",
                link2: "",
                date: "2024-07-15",
                description: "La Plateforme de gestion de stock, d'approvisionnement, de gestion de vente en dépôt-vente et de reporting avec facture normalisée utilisée par les agences du master distributeur Faghal et les agences de MTN.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            {
                title: "Master Digit (Version Web)",
                images: [
                    "{{ asset('pictures/02_master_digit_web/01') }}",
                    "{{ asset('pictures/02_master_digit_web/11.png') }}",
                    "{{ asset('pictures/02_master_digit_web/02') }}",
                    "{{ asset('pictures/02_master_digit_web/03') }}",
                    "{{ asset('pictures/02_master_digit_web/04') }}",
                    "{{ asset('pictures/02_master_digit_web/05') }}",
                    "{{ asset('pictures/02_master_digit_web/06') }}",
                    "{{ asset('pictures/02_master_digit_web/07') }}",
                    "{{ asset('pictures/02_master_digit_web/08') }}",
                    "{{ asset('pictures/02_master_digit_web/09') }}",
                    "{{ asset('pictures/02_master_digit_web/10') }}"
                ],
                designer: "Anselme",
                link: "https://master.dadigitall.com/",
                link2: "https://masterfaghal.dadigitall.com/",
                date: "2023-03-20",
                description: "Version web de la plateforme visant à digitaliser l'ensemble des processus des Master Distributeurs dans le domaine du réseau de téléphonie mobile. Utilisée par Faghal et Challenge Distribution.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            {
                title: "Master Digit (Version Mobile)",
                images: [
                    "{{ asset('pictures/03_master_digit_mobile/09.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/04.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/15.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/03.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/04.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/05.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/06.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/07.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/08.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/10.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/09.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/10.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/11.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/12.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/13.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/14.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/16.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/17.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/18.png') }}",
                    "{{ asset('pictures/03_master_digit_mobile/19.png') }}"
                ],
                designer: "Anselme",
                link: "",
                link2: "",
                date: "2023-02-01",
                description: "Version mobile de la plateforme Master Digit, offrant une gestion optimisée pour les appareils mobiles.",
                technologies: "Dart, Flutter, SQLite"
            },
            {
                title: "Garage Digit",
                images: [
                    "{{ asset('pictures/12_garage_digit/01.png') }}",
                    "{{ asset('pictures/12_garage_digit/02.png') }}",
                    "{{ asset('pictures/12_garage_digit/03.png') }}",
                    "{{ asset('pictures/12_garage_digit/04.png') }}",
                    "{{ asset('pictures/12_garage_digit/05.png') }}"
                ],
                designer: "Anselme",
                link: "https://garage.dadigitall.com/",
                date: "2023-03-20",
                description: "Plateforme de digitalisation des processus d'un garage automobile, de son enregistrement à son arrivé, son diagnostique, la demande de prix des pièces à changer, le pro-forma, la livraison des pièces, l'établissement de la facture en plus des reporting",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            // --------------------------------------------------------------------
            {
                title: "Akim Store (Version Web)",
                images: [
                    "{{ asset('pictures/04_akim_store/01.png') }}",
                    "{{ asset('pictures/04_akim_store/02.png') }}",
                    "{{ asset('pictures/04_akim_store/03.png') }}",
                    "{{ asset('pictures/04_akim_store/04.png') }}",
                    "{{ asset('pictures/04_akim_store/05.png') }}",
                    "{{ asset('pictures/04_akim_store/06.png') }}",
                    "{{ asset('pictures/04_akim_store/07.png') }}",
                    "{{ asset('pictures/04_akim_store/08.png') }}",
                    "{{ asset('pictures/04_akim_store/09.png') }}",
                    "{{ asset('pictures/04_akim_store/10.png') }}",
                    "{{ asset('pictures/04_akim_store/11.png') }}",
                    "{{ asset('pictures/04_akim_store/12.png') }}",
                    "{{ asset('pictures/04_akim_store/13.png') }}",
                    "{{ asset('pictures/04_akim_store/14.png') }}",
                    "{{ asset('pictures/04_akim_store/15.png') }}",
                    "{{ asset('pictures/04_akim_store/16.png') }}",
                    "{{ asset('pictures/04_akim_store/17.png') }}",
                    "{{ asset('pictures/04_akim_store/18.png') }}",
                    "{{ asset('pictures/04_akim_store/19.png') }}",
                    "{{ asset('pictures/04_akim_store/20.png') }}",
                    "{{ asset('pictures/04_akim_store/21.png') }}",
                    "{{ asset('pictures/04_akim_store/22.png') }}",
                ],
                designer: "Anselme",
                link: "https://akimstore.xyz/",
                link2: "",
                date: "2024-01-02",
                description: "Plateforme web de gestion de boutique et les tontines des clients affiliés.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            {
                title: "Akim Store (Version Mobile)",
                images: [
                    "{{ asset('pictures/04_akim_store_mobile/01.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/02.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/03.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/04.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/05.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/06.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/07.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/08.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/09.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/10.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/11.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/12.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/13.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/14.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/15.png') }}",
                    "{{ asset('pictures/04_akim_store_mobile/16.png') }}",
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2024-01-02",
                description: "Version mobile de la plateforme web Akim Store.",
                technologies: "Dart, Flutter, SQLite"
            },
            // --------------------------------------------------------------------
            {
                title: "GestPallais",
                images: [
                    "{{ asset('pictures/05_gest_pallais/01') }}",
                    "{{ asset('pictures/05_gest_pallais/02') }}",
                    "{{ asset('pictures/05_gest_pallais/03') }}",
                    "{{ asset('pictures/05_gest_pallais/04') }}",
                    "{{ asset('pictures/05_gest_pallais/05') }}",
                    "{{ asset('pictures/05_gest_pallais/06') }}"
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2021-03-20",
                description: "Plateforme web simplifiant la gestion des réservations des salles au palais des congrès de Cotonou.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, MySQL"
            },
            // --------------------------------------------------------------------
            {
                title: "Bénin Concert (Web et mobile)",
                images: [
                    "https://images.unsplash.com/photo-1501386761578-eac5c94b800a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                    "https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                    "https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                    "https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2024-03-20",
                description: "Plateforme innovante, web et mobile, (encore en cours de developpement) conçue pour révolutionner la gestion des concerts au Bénin.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            // --------------------------------------------------------------------
            {
                title: "Trans MoMo (PAS)",
                images: [
                    "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                    
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2023-12-04",
                description: "Application web et mobile offrant une automatisation complète des achats virtuels et des transactions via mobile money.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL, Dart, Flutter, SQLite"
            },
            // --------------------------------------------------------------------
            {
                title: "Lotto IA",
                images: [
                    "https://jupyterlab.readthedocs.io/en/stable/_images/interface-jupyterlab.png",
                    
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2022-09-20",
                description: "Programme basé sur l'IA exploitant l'intelligence artificielle pour fournir des prévisions sur les jeux de loterie.",
                technologies: "Python, Notebook"
            },
            // --------------------------------------------------------------------
            {
                title: "Simulation d'Épidémie",
                images: [
                    "https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                    "{{ asset('pictures/09_simulation_epidemie/01.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/02.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/03.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/04.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/05.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/06.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/07.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/08.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/09.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/10.png') }}",
                    "{{ asset('pictures/09_simulation_epidemie/11.png') }}",
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2021-08-15",
                description: "Programme Python offrant une simulation détaillée de la propagation d'une épidémie dans le but de récolter des données pour entrainner un algorithme de machine learning dans le but de faire des prévisions.",
                technologies: "Python"
            },
            // --------------------------------------------------------------------
            {
                title: "E-commerce Laravel",
                images: [
                    "https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",
                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2021-08-20",
                description: "Site de e-commerce développé en Laravel pour un client privé.",
                technologies: "HTML5, CSS3, Javascript, PHP, Laravel, Livewire, AlpineJS, MySQL"
            },
            // --------------------------------------------------------------------
            {
                title: "E-commerce WordPress",
                images: [
                    "https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",

                ],
                designer: "Anselme",
                link: "Non disponible",
                link2: "",
                date: "2024-05-01",
                description: "Site de e-commerce développé en Wordpress pour un client privé.",
                technologies: "Wordpress"
            },
            // --------------------------------------------------------------------
            {
                title: "Site Vitrine IITECH Bénin",
                images: [
                    "https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80",

                ],
                designer: "Anselme",
                link: "https://iitech-benin.net/",
                link2: "",
                date: "2017-06-17",
                description: "Deuxième version du site vitrine présentant les services et l'expertise de IITECH Bénin.",
                technologies: "HTML5, CSS3"
            },

        ];

        function createProjectElement(project, index) {
            return `
                <div class="project">
                    <img src="${project.images[0]}" alt="${project.title}" class="project-image" onclick="openModal(${index})">
                    <div class="project-info">
                        <h3 class="project-title" onclick="openModal(${index})">${project.title}</h3>
                        <p class="project-description">${project.description}</p>
                        <div class="project-links">
                            <a onclick="openModal(${index})">Détails</a>
                        </div>
                    </div>
                </div>
            `;
        }

        function createModalElement(project, index) {
            return `
                <div id="modal-${index}" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(${index})">&times;</span>
                        <h2>${project.title}</h2>
                        <div class="image-gallery">
                            <img src="${project.images[0]}" alt="${project.title}" class="main-image">
                            <div class="secondary-images">
                                ${project.images.map(img => `<img src="${img}" alt="${project.title}" onclick="changeMainImage(this)">`).join('')}
                            </div>
                        </div>
                        <div class="project-info">
                            <p><strong>Concepteur:</strong> ${project.designer}</p>
                            <p><strong>Lien:</strong> <a href="${project.link}" target="_blank">${project.link}</a></p>
                            <p><strong>Autre Lien:</strong> <a href="${project.link2}" target="_blank">${project.link2}</a></p>
                            <p><strong>Date:</strong> ${project.date}</p>
                            <p><strong>Description:</strong> ${project.description}</p>
                            <p><strong>Technologies:</strong> ${project.technologies}</p>
                        </div>
                    </div>
                </div>
            `;
        }

        function renderProjects() {
            const projectsContainer = document.getElementById('projects-container');
            const modalsContainer = document.getElementById('modals-container');

            projectData.forEach((project, index) => {
                projectsContainer.innerHTML += createProjectElement(project, index);
                modalsContainer.innerHTML += createModalElement(project, index);
            });
        }

        function openModal(index) {
            document.getElementById(`modal-${index}`).style.display = 'block';
        }

        function closeModal(index) {
            document.getElementById(`modal-${index}`).style.display = 'none';
        }

        function changeMainImage(clickedImage) {
            const mainImage = clickedImage.closest('.image-gallery').querySelector('.main-image');
            const temp = mainImage.src;
            mainImage.src = clickedImage.src;
            clickedImage.src = temp;
        }

        // Fermer la modale si on clique en dehors
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }

        // Rendre les projets au chargement de la page
        document.addEventListener('DOMContentLoaded', renderProjects);
    </script>
</body>

</html>
