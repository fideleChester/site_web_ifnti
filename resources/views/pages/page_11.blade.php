
@extends('base')
@section('title', "Procedure d'inscription")
@section('content')

        <div class="entete">
            <div class="page6 entete-image">
              <img src="./assets/img/p11_img.png" alt="" />
            </div>
            <h1 id="titre">Procédure d'inscription</h1>
        </div>

        <div class="promotion">
            <h1>Les promotions étant limitées à 24 étudiants, <br>
                l’entrée à l’IFNTI se fait sur concours. <br>
                L’inscription se fait en ligne,</h1>
                <button class="example">S'inscrire pour le prochain concours <i class="fas fa-arrow-right-long"></i></button>
        </div>

        <div class="ctn_infos">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="contenu">
                <h2>Il se déroule en deux étapes:</h2>
                <p>Les deux étapes se dérouleront dans nos locaux à Sokodé</p>
                <div class="align-text">
                    <h2>Des épreuves écrites</h2>
                    <p>Pendant le journée</p>
                </div>
                <div class="align-text">
                    <h2>Un entretien oral </h2>
                    <p>conditionné par la réussité des épreuves écrites</p>
                </div>
                <p>Vous serez évalués sur trois matières </p>
                <h2>Français</h2>
                <h2>Anglais</h2>

                <h2>Mathématique(sans l'étude des fonctions ni calculs des intégrales)</h2>
                <p id="frais">Frais d'inscription au concours:</p>
                <h2 id="red">La date du prochain concours est le 29 septembre 2022 à 7h00 </h2>
            </div>
        </div>

        <div class="modal">
            <div class="modal-content">
              <span class="close-button">&times;</span>
              <img src="./assets/img/map.png" alt="Carte localisation IFNTI">
            </div>
        </div>

        <div class="ctn-adresse">
            <div class="ctn-heure">
                <h2>Heure d'ouverture</h3>
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