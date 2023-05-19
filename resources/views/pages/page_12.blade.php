    @extends('base')
    @section('title','Matières technologies')
    @section('content')


        <div class="entete">
            <div class="entete-image"><img src="./assets/img/p12_img1.png" alt="" /></div>
    
            <h1 id="titre">Matières technologies</h1>
        </div>

        <div class="promotion">
            <h1>Pour s’inscrire au concours veuillez remplir le <br>
                formulaire d’inscription en ligne en cliquant sur le <br>
                lien ci-après:</h1>
                <button class="example">S'inscrire pour le prochain concours <i class="fas fa-arrow-right-long"></i></button>
        </div>

        <div class="modal">
            <div class="modal-content">
              <span class="close-button">&times;</span>
              <img src="./assets/img/map.png" alt="Carte localisation IFNTI">
            </div>
        </div>

        <div class="ctn-adresse m">
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