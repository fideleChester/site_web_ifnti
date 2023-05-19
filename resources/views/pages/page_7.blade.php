@extends('base')

@section('title', 'Projet etudiant')
@section('content')
        <div class="entete">
            <div class="entete-image"><img src="./assets/img/p7_img1.png" alt="" /></div>
    
            <h1 id="titre">Projets étudiants</h1>
        </div>
        <i class="example"></i>

        <div class="ctn_infos">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="contenu">
                <h2>TP électroniques: Réalisation d'un programme qui fonctionne comme
                    les feux tricolores</h2>
                <p>Au cours des TP électroniques, les étudiants de 2ème année ont réalisé un programme qui fonctionne comme les feux tricolores à
                    l’aide des composants électroniques suivants</p>
                <div class="align-text">
                    <h2>Diode LED</h2>
                    <p>composants électroniques</p>
                </div>
                <div class="align-text">
                    <h2>Résistor</h2>
                    <p>composants électroniques</p>
                </div>
                <div class="align-text">
                    <h2>Potentiomètre</h2>
                    <p>composants électroniques</p>
                </div>
                <div class="align-text">
                    <h2>Bouton poussoir</h2>
                    <p>composants électroniques</p>
                </div>
                <div class="align-text">
                    <h2>Planche à pain</h2>
                    <p>composants électroniques</p>
                </div>
               
                <h2>La date du prochain concours est le 29 septembre 2022 à 7h00 </h2>
            </div>
        </div>

        <div class="modal">
            <div class="modal-content">
              <span class="close-button">&times;</span>
              <img src="./assets/img/map.png" alt="Carte localisation IFNTI">
            </div>
        </div>

        <div class="ctn-video">
            <video src="./assets/img/1.mp4" autoplay muted loop ></video>
        </div>
   @endsection