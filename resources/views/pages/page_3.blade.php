@extends('base')

@section('style')
    <link rel="stylesheet" href="./assets/css/page3.css" />
    <link rel="stylesheet" href="./assets/css/cube.css" />
@endsection
@section('title', 'IFNTI')
@section('content')

    <div class="entete">
        <div class="entete-image">
            <img src="./assets/img/page3.img1.png" alt="" />
        </div>
        <h1 id="titre" style="margin: auto; text-align: center">IFNTI</h1>
    </div>
    <div class="page3 presentation">
        <div class="page3 titre-pres">
            <h1 class="page3 presentation-title">Présentation</h1>
        </div>
        <div class="page3 presentation-content">
            <p>
                <strong>L’Institut de formation aux normes et technologies de
                    l’informatique (IFNTI) </strong>est un institut de formation post-bac situé à Sokodé, dans la
                région centrale du Togo.
            </p>
            <p>
                Fondé en 2009, il est destiné aux bacheliers et aux étudiants
                souhaitant se réorienter. L’IFNTI dispense une formation
                supérieure en licence de type LMD en informatique. L’IFNTI est une
                Association à but non lucratif (ASBL). Elle a pour but de
                contribuer a la transmission du savoir et du savoir-faire des
                technologies informatique en privilégiant le sens de la
                responsabilité et de la qualité.
            </p>
            <p>
                Situé à Sokodé dans la Région Centrale du Togo, l’IFNTI est
                implanté dans le quartier administratif à proximité des deux
                grands lycées.
            </p>
        </div>
        <div class="page3 batiment">
            <div class="slides">
                <div class="slides__spinner" style="transform: rotateY(0deg)">
                    <div class="slide one">
                        <img src="./assets/img/batiment_ifnti.png" />
                    </div>
                    <div class="slide two">
                        <img src="./assets/img/vue.jpeg" />
                    </div>
                    <div class="slide three">
                        <img src="./assets/img/bueau.jpeg" />
                    </div>
                    <div class="slide four">
                        <img src="./assets/img/entre.jpeg" />
                    </div>
                </div>
            </div>
            <ul class="slide-selector">
                <li class="selected">
                    <img src="./assets/img/batiment_ifnti.png" />
                </li>
                <li class="">
                    <img src="./assets/img/vue.jpeg" />
                </li>
                <li><img src="./assets/img/bueau.jpeg" /></li>
                <li><img src="./assets/img/entre.jpeg" /></li>
            </ul>
        </div>
    </div>

    <div class="page3 fondateur">
        <div class="page3 fondateur-title">
            <h1>Fondateurs</h1>
        </div>

        <div class="fondateur1">
            <div class="page3 fondateur-content">
                <div class="page3 fondateur-image">
                    <img src="./assets/img/fondateur.png" alt="" ">
                      </div>
                      <p class="page3 fondateur-description">
                        Jean-Pierre Paillard est ingénieur informaticien de
                        l’ENSIMAG,Grenoble. Ancien maître de conférences, il a enseigné
                        auxuniversités de Grenoble et de La Rochelle.
                      </p>
                      <div class="extra">
                        <p>
                          Il figurait parmi les initiateurs et les premiers enseignants
                          de l’Institut africain d’informatique (IAI, projet OCAMM,
                          Gabon) de 1970 à 1973. Il a travaillé pour la RNET (Régie
                          Nationale des Eaux du Togo) de 1986 à 1990 comme expert puis
                          directeur informatique.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="fondateur2">
                    <div class="page3 fondateur-content">
                      <p class="page3 fondateur-description">
                        <strong> Sabirou Téouri</strong>est ingénieur informaticien du
                        CNAM, Paris. Travailleur indépendant, consultant formateur, il a
                        enseigné à l’université de La Rochelle et travaillé au
                        laboratoire de recherche L3I de La Rochell
                      </p>
                      <div class="page3 fondateur-image">
                        <img src="./assets/img/fondateur1.png" alt="" ">
                </div>
            </div>
        </div>
        <div class="conclusion" style="width: 80%; margin: auto">
            <p>
                Les initiateurs regroupent des compétences complémentaires :
                connaissance du terrain, motivation d’activité dans la Communauté
                économique des États de l’Afrique de l’Ouest (CEDEAO), maîtrise
                technologique et didactique, expérience professionnelle. Ils
                partagent des convictions fortes sur la possibilité de réussir à
                freiner la fuite des cerveaux par une formation de qualité, et sur
                la baisse d’attrait de l’émigration qui se fait jour chez les
                nouvelles générations. Un engagement sur plus de dix ans dans des
                activités associatives locales leur a montré les potentialités des
                petites organisations : associations, ONG, PME.
            </p>
        </div>
        <div class="objectif">
            <div class="objectif-title">
                <h1>Objectifs</h1>
            </div>
            <div class="objectif-content">
                <div class="objt-cont content1">
                    <h3>FORMATION DIPLÔMANTE</h3>
                    <p>
                        elle permet à l'étudiant d'obtenir une licence en trois ans et de poursuivre éventuellement ses études au niveau mastère ou ingénieur. Pour cela les connaissances fondamentales théoriques et technologiques sont indispensables.
                    </p>
                </div>
                <div class="objt-cont content2">
                    <h3>FORMATION QUALIFIANTE</h3>
                    <p>
                       Elle permet aux étudiants de proposer des solutions de mise en place ou d'extension de systèmes d'information d'organisation, pour les grandes entreprises mais aussi les PME, ONG et services publics. Les acquis de compétences et de savoir-faire permettent l'exercice des métiers; les acquis de savoir permettent de suivre l'évolution des techniques.
                    </p>
                </div>
                <div class="objt-cont content3">
                    <h3>ACTIVITE PROFESSIONNELLES</h3>
                    <p>
                        En choisissant de petits effectifs, et en augmentant le suivi, y compris en stage, l'étudiant disposant d'acquis de compétence et de savoir-faire trouve rapidement un emploi salarié dans une grande entreprise, ou crée, seul ou avec des associés sa propre entreprise de services, pouvant ainsi agir comme sous-traittant.
                    </p>
                    <p style="margin-top: 20px">
                       Au niveau du système d'information, l'étudiant peut participer aux équipes d'analyse des grands groupes et proposer des solutions techniques. Au niveau du système informatique, l'étudiant peut proposer des choix de composants matériels de logiciels permettant l'implémentation des besoins du système d'information. Dans le cas particulier des petites structures, il peut oeuvrer au passage des données orales ou papier à système d'information informatisé, éventuellement accessible depuis Internet.
                    </p>
                </div>
                <div class="objt-cont content4">
                    <h3>POURSUITE D'ETUDES</h3>
                    <p>
                       Plusieurs universités françaises connaissent le projet IFNTI et le soutiennent. L'IFNTI est intégrée au système LMD, facilitant la mobilité et la poursuite d'études. Les crédits obtenus permettant à d'autres organismes d'enseignement supérieu d'accueillir les diplomés.
                    </p>
                </div>
            </div>
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
    <script src="./assets/js/jquery-3.7.0.min.js"></script>
    <script src="./assets/js/cube.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@endsection
