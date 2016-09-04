@extends('layouts.main')

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Adam's Vinyl Database</h1>
                <p>
                    <a class="btn btn-default btn-lg sharp" href="/record" role="button">Browse Records</a>
                    <span class="hidden-md hidden-lg"><br><br></span>
                    <a class="btn btn-default btn-lg sharp" href="/artist" role="button">Browse Artists</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="records" class="records-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Records</h1>
                <p class="lead">Browse my <a href="https://www.discogs.com" title="Discogs.com" target="_blank">Discogs</a> collection,
                    read details about my personal copies. A registered user may add records from Discogs with just one click, or edit
                    the existing data.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg sharp" href="/record" role="button">Browse Records</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="artists" class="artists-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Artists</h1>
                <p class="lead">You can search for a record by specific artist, or just browse and edit the data.</p>
                <p>
                    <a class="btn btn-primary btn-lg sharp" href="/artist" role="button">Browse Artists</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About This Site</h1>
                <p class="lead">This website is a place to collect and show off my record collection.</p>
                <p class="lead">The site uses the <a href="https://www.discogs.com" title="Discogs.com" target="_blank">Discogs</a> API to pull in my data,
                    then I add specific details for each record in this database built upon it.</p>
                <p class="lead">Built on the <a href="https://laravel.com/" title="Laravel.com" target="_blank">Laravel 5.2 framework</a> and
                    <a href="https://vuejs.org/" title="Vuejs.org" target="_blank">Vue.js</a>, this app makes it much easier for me to
                    organize and reference my records using publicly supplied data.
                </p>
            </div>
        </div>
    </div>
</section>