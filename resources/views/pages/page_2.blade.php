@extends('base')


@section('style')
    <link rel="stylesheet" href="./assets/css/page2.css" />
    <link rel="stylesheet" href="./assets/css/treeCards.css" />
    <link rel="stylesheet" href="./assets/css/carteAlign.css" />
@endsection

@section('title', 'Formation')
@section('content')

    <div class="entete">
        <div class="entete-image">
            <img alt="Placeholder Picture" src="./assets/img/page2img1.png" />
        </div>
        <h1 id="titre">Contenue de la formation</h1>
    </div>

    <div class="ctn_infos page2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="contenu">
            <div class="align-text">
                <h2>Nom du diplôme:</h2>
                <p>Licence en Informatique des organisations (Génie logiciel)</p>
            </div>
            <div class="align-text">
                <h2>Durée de la formation:</h2>
                <p>03 ans (6 semestres)</p>
            </div>
            <div class="align-text">
                <h2>Public cible:</h2>
                <p>
                    Titulaires de Baccalauréat 2 Série C, D, E et éventuellement
                    d'autres séries sur étude de dossier
                </p>
            </div>
            <div class="align-text">
                <h2>Mode d'études:</h2>
                <p>Présentiel cours du jour ou soir</p>
            </div>
        </div>
    </div>

    <div class="container-grid container-14">
        <p class="paragraph paragraph-3">
            La maquette de l'IFNTI comprend des matières technologques et
            générales, réparties en Unités d'enseignements de niveau
            international adaptés aux besoins de la sous-région; il est à
            préciser que la pédagogie à l'IFNTI se fait dans le respect strict
            des normes et des standards
        </p>
    </div>
    <div class="container-grid container-15">
        <a class="link-text text-link-3" href="#">Consulter less matières technologiques</a>
        <a class="link-text text-link-3" href="#">Consulter less matières technologiques</a>
    </div>
    <div class="container-grid container-16">
        <h1 class="heading-4">Modalités didactiques</h1>
    </div>
    <div class="container-grid container-17">
        <div class="somecards">
            <figure class="snip1533">
                <figcaption>
                    <h3>Une formation regroupe 24 étudiants</h3>
                    <blockquote>
                        <p>
                            Un stage est garanti à la fin de chaue année pour permettre
                            aux étudiants de mettre en pratique leurs acquis.
                        </p>
                    </blockquote>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <h3>Une formation regroupe 24 étudiants</h3>
                    <blockquote>
                        <p>
                            Un stage est garanti à la fin de chaue année pour permettre
                            aux étudiants de mettre en pratique leurs acquis.
                        </p>
                    </blockquote>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <h3>Une formation regroupe 24 étudiants</h3>
                    <blockquote>
                        <p>
                            Un stage est garanti à la fin de chaue année pour permettre
                            aux étudiants de mettre en pratique leurs acquis.
                        </p>
                    </blockquote>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="ctn-partenaires">
        <div class="ctn-img">
            <a href="#">
                <img src="./assets/img/itpltex.png" alt="" />
            </a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/kbu.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/wass.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/sara.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/ste.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"> <img src="./assets/img/urbis.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/dcc.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/volontaires.png" alt="" /></a>
        </div>
        <div class="ctn-img">
            <a href="#"><img src="./assets/img/tg_all.png" alt="" /></a>
        </div>
    </div>
    <div class="ctn-presentation">
        <div class="pre">
            <h2>
                L’Institut de formation aux normes et <br />
                technologies de l’informatique (IFNTI) <br />
                <br />
            </h2>

            <p>
                est un institut de formation post-bac situé à Sokodé, dans la région
                <br />
                centrale du Togo.
                <br /><br />

                Fondé en 2009, il est destiné aux bacheliers et aux étudiants
                souhaitant se réorienter. L’IFNTI dispense une formation supérieure en
                licence de type LMD en informatique. L’IFNTI est une Association à but
                non lucratif (ASBL).
            </p>
            <a href="#">En Savoir Plus</a>
        </div>

        <div class="pre-image">
            <img src="./assets/img/page3_img2.png" alt="" />
        </div>
    </div>

    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <img src="./assets/img/localisation.png" alt="Carte localisation IFNTI" />
        </div>
    </div>

    <div class="ctn-adresse">
        <div class="ctn-heure">
            <h2>Heure d'ouverture</h2>
            <div>
                <p>Lundi - Vendredi: 07H00-18H00</p>
                <p>Samedi: 07H00-1200</p>
            </div>
        </div>
        <div class="ctn-add-comple">
            <h3>Adresse Complète</h3>
            <p>300 BP 40 Sokodé – Togo, Quartier</p>
            <p>Administratif, entre le lycée Moderne et la Sotoco</p>
            <p>+228 90 91 81 41 <i class="fas fa-phone"></i></p>
            <p>info@siteweb.com <i class="fas fa-envelope"></i></p>
            <i class="fas fa-location-dot show-locate"></i>
        </div>
    </div>
@endsection
@section('script')
    <script src="./assets/js/script.js"></script>
@endsection
