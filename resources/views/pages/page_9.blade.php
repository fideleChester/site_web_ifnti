@extends('base')

@section('style')
    <link rel="stylesheet" href="./assets/css/page9.css" />
    <link rel="stylesheet" href="./assets/css/page1.css" />
@endsection
@section('title', 'Actualité')
@section('content')
    <div class="entete">
        <div class="page6 entete-image">
            <img src="./assets/img/p9_img1.png" alt="" />
        </div>
        <h1 id="titre">Nos Actualités</h1>
    </div>
    <section class="sec2">
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
@endsection
