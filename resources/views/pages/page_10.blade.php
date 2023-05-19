@extends('base')
@section('style')
<link rel="stylesheet" href="./assets/css/form.css">
@endsection
@section('title', 'Contacter')
@section('content')

    <div class="entete">
        <div class="page6 entete-image">
            <img src="./assets/img/p10_img1.png" alt="" />
        </div>
        <h1 id="titre">Nous contacter</h1>
    </div>

    <div class="promotion">
        <h1>Besoin de nous contacter? <br>
            Prière remplir ce
            formulaire</h1>
    </div>

    <form action="">
        <div class="myform">
            <div class="neuroform">

                <div class="inputs">
                    <div class="names">
                        <div><label>Nom</label>
                            <input type="text" />
                        </div>
                        <div><label>Prénoms</label>
                            <input type="text" />
                        </div>

                    </div>

                    <label>Email</label>
                    <input type="email" />
                    <label>Objet</label>
                    <input type="text" />
                    <label>Message</label>
                    <textarea cols="30" rows="10" ></textarea>
                </div>
                <a class="bouton" href="#">Envoyer</a>
            </div>
        </div>
    </form>

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
            <h3>Adresse <br> Complète</h3>
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
