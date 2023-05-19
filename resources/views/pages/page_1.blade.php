@extends('base')
@section('style')
    <link rel="stylesheet" href="./assets/css/page1.css" />
    <link rel="stylesheet" href="./assets/css/temoin.css" />
    <link rel="stylesheet" href="./assets/css/catego.css" />
    <link rel="stylesheet" href="./assets/css/ek.css" />

@endsection
@section('title', 'Accueil')
@section('content')

    <div class="swipers">
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" effect="fade"
            navigation="true" autoplay-delay="2500">
            <swiper-slide>
                <img src="./assets/img/acceil.png" />
            </swiper-slide>
            <swiper-slide>
                <img src="./assets/img/personnel_califi.png" />
            </swiper-slide>
            <swiper-slide>
                <img src="./assets/img/a1.png" />
            </swiper-slide>
        </swiper-container>

        <div class="ctn-text">
            <h1>Bienvenue à l'IFNTI Sokodé</h1>
            <p>
                Le concours d'entrée pour l'année académique 2022-2023 et <br />
                prévu le 29 septembre 2022 à 07H00 dans nos locaux
            </p>

            <a href="http://">JE M'INSCRIS</a>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgb(250, 247, 244)" fill-opacity="1"
                d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,170.7C1120,171,1280,117,1360,90.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="bas">
        <a href="#pourquoi"><i class="fas fa-circle-chevron-down"></i></a>
    </div>
    <div class="p">
        <h1>Nos partenaires</h1>
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
                est un institut de formation post-bac situé à Sokodé, dans la
                région
                <br />
                centrale du Togo.
                <br /><br />

                Fondé en 2009, il est destiné aux bacheliers et aux étudiants
                souhaitant se réorienter. L’IFNTI dispense une formation
                supérieure en licence de type LMD en informatique. L’IFNTI est une
                Association à but non lucratif (ASBL).
            </p>
            <a href="#">En Savoir Plus</a>
        </div>

        <div class="pre-image">
            <img src="./assets/img/page3_img2.png" alt="" />
        </div>
    </div>

    <div class="raison">
        <div class="bloc">
            <button class="apropos">IFNTI-Apropos</button>
            <h1>Pourquoi choisir l'IFNTI?</h1>
            <div>
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id
                est laborum.
            </div>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Voluptatum praesentium
                atque neque quo nemo eligendi minima, a deserunt sequi tempore
                ducimus asperiores
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
            <p>
                <img src="./assets/img/icons8-ok.svg" alt="" />Lorem ipsum dolor,
                sit amet consectetur adipisicing elit. Odit, ullam perferendis,
                accusamus rerum saepe voluptate, vel ipsa excepturi quae
                architecto voluptas
            </p>
        </div>
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave" style="transform: rotate(0deg); transition: 0.3s"
            viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(255, 255, 255, 1)" offset="0%" />
                    <stop stop-color="rgba(255, 255, 255, 1)" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform: translate(0, 0px); opacity: 1" fill="white"
                d="M0,392L120,392C240,392,480,392,720,343C960,294,1200,196,1440,196C1680,196,1920,294,2160,343C2400,392,2640,392,2880,334.8C3120,278,3360,163,3600,130.7C3840,98,4080,147,4320,196C4560,245,4800,294,5040,302.2C5280,310,5520,278,5760,285.8C6000,294,6240,343,6480,375.7C6720,408,6960,425,7200,408.3C7440,392,7680,343,7920,277.7C8160,212,8400,131,8640,147C8880,163,9120,278,9360,326.7C9600,376,9840,359,10080,367.5C10320,376,10560,408,10800,400.2C11040,392,11280,343,11520,334.8C11760,327,12000,359,12240,310.3C12480,261,12720,131,12960,138.8C13200,147,13440,294,13680,302.2C13920,310,14160,180,14400,171.5C14640,163,14880,278,15120,302.2C15360,327,15600,261,15840,236.8C16080,212,16320,229,16560,204.2C16800,180,17040,114,17160,81.7L17280,49L17280,490L17160,490C17040,490,16800,490,16560,490C16320,490,16080,490,15840,490C15600,490,15360,490,15120,490C14880,490,14640,490,14400,490C14160,490,13920,490,13680,490C13440,490,13200,490,12960,490C12720,490,12480,490,12240,490C12000,490,11760,490,11520,490C11280,490,11040,490,10800,490C10560,490,10320,490,10080,490C9840,490,9600,490,9360,490C9120,490,8880,490,8640,490C8400,490,8160,490,7920,490C7680,490,7440,490,7200,490C6960,490,6720,490,6480,490C6240,490,6000,490,5760,490C5520,490,5280,490,5040,490C4800,490,4560,490,4320,490C4080,490,3840,490,3600,490C3360,490,3120,490,2880,490C2640,490,2400,490,2160,490C1920,490,1680,490,1440,490C1200,490,960,490,720,490C480,490,240,490,120,490L0,490Z" />
        </svg>
    </div>

    <div class="p">
        <h1>Nos Valeurs</h1>
    </div>

    <section class="ctn-profils">
        <div class="card-container">
            <div class="card">
                <div class="valeurs">
                    <img src="./assets/img/Protect Cloud-2.svg" alt="" />
                </div>
                <h1>Responsable</h1>
                <p>
                    L'IFNTI transmet du savoir et du savoir-faire des technologies
                    informatique en privilégiant le sens de la responsabilité
                </p>
                <a href="#">En savoir plus <i class="fas fa-arrow-right-long"></i></a>
            </div>
            <div class="card">
                <div class="valeurs">
                    <img src="./assets/img/Protect Cloud-3.svg" alt="" />
                </div>
                <h1>Compétence</h1>
                <p>
                    Equipe de matériels récents, IFNTI emploie des formateurs à
                    plein temps, de niveau ingénieur, ayant une expérience
                    universitaire
                </p>
                <a href="#">En savoir plus <i class="fas fa-arrow-right-long"></i></a>
            </div>
            <div class="card">
                <div class="valeurs">
                    <img src="./assets/img/Protect Cloud-4.svg" alt="" />
                </div>
                <h1>Excellence</h1>
                <p>
                    L'IFNTI participe ainsi à l'effort national en offrant à la sous
                    région des formations de haute qualité, à la fois qualifiante
                    pour des compétences techniques et diplômatne
                </p>
                <a href="#">En savoir plus <i class="fas fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <div class="page1 materiel">
        <img src="./assets/img/salle.png" alt="" class="bg" />
        <div class="svg-h">
            <img src="./assets/svg/wave4.svg" alt="" class="svg-haut" />
        </div>
        <h1>Nos sales sont équipés de matériels récents</h1>
        <div class="svg-b">
            <img src="./assets/svg/wave.svg" alt="" class="svg-bas" />
        </div>
    </div>
    <section class="sec2">
        <h1 style="margin: 50px; font-size: 2em">Actualité</h1>
        <div class="catego">
            <h5>Categories</h5>
            <ul>
                <li><a href="">Test </a></li>
                <li><a href="">Concours</a></li>
                <li><a href="">Cérémonie</a></li>
                <li><a href="">Partenaire</a></li>
            </ul>
        </div>
        <section class="cards-wrapper fah">
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">concours</div>
                </a>
                <a class="card j">
                    <div>
                        <h1>HTML Syntax</h1>
                        <p>
                            The syntax of a language is how it works. How to actually
                            write it. Learn HTML syntax…
                        </p>
                        <div class="date">6 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">cérémonie</div>
                </a>
                <a class="card j1" width="15rem" height="20rem">
                    <div>
                        <h1>Basic types of HTML tags</h1>
                        <p>Learn about some of the most common HTML tags…</p>
                        <div class="date">9 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">cérémonie</div>
                </a>
                <a class="card j2">
                    <div>
                        <h1>Links, images and about file paths</h1>
                        <p>
                            Learn how to use links and images along with file paths…
                        </p>
                        <div class="date">14 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">Test</div>
                </a>
                <a class="card j3">
                    <div>
                        <h1>Links, images and about file paths</h1>
                        <p>
                            Learn how to use links and images along with file paths…
                        </p>
                        <div class="date">14 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">partenaire</div>
                </a>
                <a class="card j4">
                    <div>
                        <h1>Links, images and about file paths</h1>
                        <p>
                            Learn how to use links and images along with file paths…
                        </p>
                        <div class="date">14 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a href="#">
                    <div class="actu">partanaire</div>
                </a>
                <a class="card j5">
                    <div>
                        <h1>Links, images and about file paths</h1>
                        <p>
                            Learn how to use links and images along with file paths…
                        </p>
                        <div class="date">14 Oct 2017</div>
                        <div class="tags">
                            <div class="nom">IFNTI</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </section>
    <div class="swipers">
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
            effect="fade" navigation="true" autoplay-delay="2500">
            <swiper-slide>
                <img src="./assets/img/acceil.png" alt="" />
            </swiper-slide>
            <swiper-slide>
                <img src="./assets/img/personnel_califi.png" alt="" />
            </swiper-slide>
            <swiper-slide>
                <img src="./assets/img/a1.png" alt="" />
            </swiper-slide>
        </swiper-container>

        <div class="ctn-text">
            <h1 style="text-transform: capitalize">Un personnel qualifié</h1>
            <p>
                L'IFNTI emploie des formateurs à plein temps de niveau ingénieur
                ayant une expérience universitaire
            </p>

            <a href="http://">Contacter-nous (+228) 90 91 81 41</a>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgb(250, 247, 244)" fill-opacity="1"
                d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,170.7C1120,171,1280,117,1360,90.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="temoin page1">
        <p>Temoignages</p>
        <br />

        <div class="temenf">
            <h1>
                Nos avis clients parlent <br />
                eux mêmes
            </h1>
            <div class="aut">
                <small><i class="fas fa-star"></i></small>
                <div class="txe">
                    <p>Evalué</p>
                    <h2>4.8/5</h2>
                    <p>de plus de 1000 utilisateurs</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cardes page1">
        <div class="coln1">
            <div class="boi1 b1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    Sunt qui esse pariatur duis <br />
                    deserunt mollit
                </h2>

                <div class="partieparagraphe">
                    Nulla lorem mollit cupidatat irune .Laborum <br />
                    magna nulla duis ulillamoo cuillim dolor <br />
                    Voluptate exercitation incidunt aliquio <br />
                    deserunt reprehenderit elit laborum
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    <p>Mdical Assistant</p>
                </div>
            </div>

            <div class="boi1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    At lectus urna duis con v allis <br />
                    tellus
                </h2>

                <div class="partieparagraphe">
                    Lorem ipsum dolor sit amet , consectetur <br />
                    adi p iscingelit , sed do eiusmod tempor <br />
                    ncididunt ut labore et dolore magna aliqua . <br />
                    Dui accumsan sit amet nulla facilisi morbi .<br />
                    In ni b h mauris cursus mattis . At lectus urna <br />
                    duis con v allis con v allis tellus . Enimblandit <br />
                    volut pat maecenas volut pat . <br />
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    <p>Mdical Assistant</p>
                </div>
            </div>
        </div>

        <div class="coln2">
            <div class="boi1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    At lectus urna duis con v allis <br />
                    tellus
                </h2>

                <div class="partieparagraphe">
                    Lorem ipsum dolor sit amet , consectetur <br />
                    adi p iscingelit , sed do eiusmod tempor <br />
                    ncididunt ut labore et dolore magna aliqua . <br />
                    Dui accumsan sit amet nulla facilisi morbi .<br />
                    In ni b h mauris cursus mattis . At lectus urna <br />
                    duis con v allis con v allis tellus . Enimblandit <br />
                    volut pat maecenas volut pat . <br />
                    In ni b h mauris cursus mattis . At lectus urna <br />
                    duis con v allis con v allis tellus . E nim b landit <br />
                    v olut p at maecenas v olut p at . <br />
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    <p>Mdical Assistant</p>
                </div>
            </div>

            <div class="boi1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    At lectus urna duis con v allis <br />
                    tellus
                </h2>

                <div class="partieparagraphe">
                    Lorem ipsum dolor sit amet , consectetur <br />
                    adi p iscingelit , sed do eiusmod tempor <br />
                    ncididunt ut labore et dolore magna aliqua . <br />
                    Dui accumsan sit amet nulla facilisi morbi .<br />
                    In ni b h mauris cursus mattis . At lectus urna <br />
                    duis con v allis con v allis tellus . Enimblandit <br />
                    volut pat maecenas volut pat . <br />
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    <p>Mdical Assistant</p>
                </div>
            </div>
        </div>

        <div class="coln3">
            <div class="boi1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    At lectus urna duis con v allis <br />
                    tellus
                </h2>

                <div class="partieparagraphe">
                    Lorem ipsum dolor sit amet , consectetur <br />
                    adi p iscingelit , sed do eiusmod tempor <br />
                    ncididunt ut labore et dolore magna aliqua . <br />
                    Dui accumsan sit amet nulla facilisi morbi .<br />
                    In ni b h mauris cursus mattis . At lectus urna <br />
                    duis con v allis con v allis tellus . Enimblandit <br />
                    volut pat maecenas volut pat . <br />
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    @media screen and ((min-width: 600px) and (max-width: 1080px))
                </div>
            </div>

            <div class="boi1 b1">
                <div class="etoiles">
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                    <small><i class="fas fa-star"></i></small>
                </div>

                <h2>
                    Sunt qui esse pariatur duis <br />
                    deserunt mollit
                </h2>
                <div class="partieparagraphe">
                    Nulla lorem mollit cupidatat irune .Laborum <br />
                    magna nulla duis ulillamoo cuillim dolor <br />
                    Voluptate exercitation incidunt aliquio <br />
                    deserunt reprehenderit elit laborum
                </div>

                <div class="auteur">
                    <h2>Cody Fisher</h2>
                    <p>Mdical Assistant</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
@endsection
