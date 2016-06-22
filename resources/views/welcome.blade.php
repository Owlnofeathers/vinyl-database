@extends('layouts.main')

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Adam's Vinyl Database</h1>
                    <p>Site to collect and gather data about the records and the people who make them</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="/record" role="button">Browse Records</a>
                        <a class="btn btn-primary btn-lg" href="/artist" role="button">Browse Artists</a>
                    </p>
                    <a class="btn btn-default btn-lg page-scroll" href="#about">About My Collection</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Section</h1>
                <p class="lead">This website is a place to collect and show off my record collection. I have been collecting records since the early 1990's
                    and have some cool ones to show off. Enjoy!</p>
            </div>
        </div>
    </div>
</section>

<section id="records" class="records-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Records Section</h1>
                    <p>Browse my records, read details about the pressings</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="/record" role="button">Browse Records</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="artists" class="artists-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Artists Section</h1>
                    <p>Check out a list of all the bands and artists in my record collection, and discover details about them.</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="/artist" role="button">Browse Artists</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>