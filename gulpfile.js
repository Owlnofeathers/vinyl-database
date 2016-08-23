process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');

/*
    CSS
 */
elixir(function(mix) {
    mix.styles([
        "scrolling-nav.css",
        "main.css"
    ]);
});

/*
    JS
 */
elixir(function(mix) {
    mix.scripts([
        "jquery.easing.min.js",
        "scrolling-nav.js"
    ]);
});

/*
    Build
 */
elixir(function(mix) {
    mix.version(["css/all.css", "js/all.js"]);
});
