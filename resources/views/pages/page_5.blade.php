@extends('base')
@section('title', 'Matières générales')
@section('content')

        <div class="entete">
            <div class="entete-image"><img src="./assets/img/p5_img1.png" alt="" /></div>
            <h1 id="titre">Matières générales</h1>
        </div>

        <div class="ctn-base">
            <h1>Générales</h1>
            <div class="ctn-imag-icon">
                <img src="./assets/img/skills.png" alt=""> 
                <i class="fas fa-shapes"></i>           
            </div>
        </div>

        <div class="base-container">
            <div class="card back-violet bot yellom-vert">
                <h2>Mathématiques</h2>
            </div>
            <div class="card back-violet bot yellom-vert">
                 <h2>Anglais</h2>
             </div>
             <div class="card back-violet bot grey yellom-vert">
                 <h2>Insertion et
                    responsabilité dans la
                    société</h2>
             </div>
        </div>

        <div class="base-container">
            <div class="card back-vio yellom-vert">
                <h2>Expression et <br>
                    communication</h2>
            </div>
            <div class="card back-vio yellom-vert">
                 <h2>organisation et <br>
                    comptabilité</h2>
             </div>
             <div class="card back-vio grey yellom-vert">
                 <h2>Bureautique</h2>
             </div>
        </div>

        <div class="base-container">

             <div class="card back-vio bot gre yellom-vert">
                 <h2>Gestion de projets</h2>
             </div>
        </div>
@endsection