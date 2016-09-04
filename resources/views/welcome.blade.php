@extends('layouts.main')

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Adam's Vinyl Database</h1>
                <p>
                    <a class="btn btn-default btn-lg" href="/record" role="button">Browse Records</a>
                    <a class="btn btn-default btn-lg" href="/artist" role="button">Browse Artists</a>
                </p>
                <a class="btn btn-default btn-lg page-scroll" href="#about">About My Collection</a>
            </div>
        </div>
    </div>
</section>

<section id="records" class="records-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Records Section</h1>
                <p>Browse my <a href="https://www.discogs.com" title="Discogs.com" target="_blank">Discogs</a> collection,
                    read details about my personal copies.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="/record" role="button">Browse Records</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="artists" class="artists-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Artists Section</h1>
                <p>Check out a list of all the bands and artists in my record collection, and discover details about them.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="/artist" role="button">Browse Artists</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Section</h1>
                <p class="lead">This website is a place to collect and show off my record collection.</p>
                <p>The site uses the <a href="https://www.discogs.com" title="Discogs.com" target="_blank">Discogs</a> API to pull in my data,
                    then I add specific details for each record in this database built upon it.</p>
                <p>Built on the <a href="https://laravel.com/" title="Laravel.com" target="_blank">Laravel 5.2 framework</a> and
                    <a href="https://vuejs.org/" title="Vuejs.org" target="_blank">Vue.js</a>
                </p>
            </div>
        </div>
    </div>
</section>