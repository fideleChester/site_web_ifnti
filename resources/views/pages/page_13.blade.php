@extends('base')
@section('title', 'Coût de la formation')
@section('content')
        <div class="entete">
            <div class="page6 entete-image">
              <img src="./assets/img/p13_img1.png" alt="" />
            </div>
            <h1 id="titre">Coût de la formation</h1>
        </div>

        <div class="promotion">
            <h1>Si vous êtes retenus après les épreuves orales, <br>
                 vous pourrez commencer la procédure <br>
                d’inscription académique.</h1>
                <button class="example">S'inscrire pour le prochain concours <i class="fas fa-arrow-right-long"></i></button>
        </div>

        <div class="ctn_infos">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="contenu">
                <h2>Coût de la formation</h2>
                <p>Les deux étapes se dérouleront dans nos locaux à Sokodé.</p>
                <div class="align-text">
                    <h2>Frais de scolarité :</h2>
                    <p id="red">590.000 FCFA / ans</p>
                </div>
                <div class="align-text">
                    <h2>Frais d’inscription :</h2>
                    <p id="red">30.000 FCFA / ans</p>
                </div>
                <p >Ces frais restent les mêmes pendant toute la formation.</p>
                <h2 id="red">Les frais d’inscription ne sont pas remboursables.</h2>
            </div>
        </div>

        <div class="modal">
            <div class="modal-content">
              <span class="close-button">&times;</span>
              <img src="./asset/img/map.png" alt="Carte localisation IFNTI">
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
</body>
</html>