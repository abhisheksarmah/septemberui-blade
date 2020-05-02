let mix = require("laravel-mix");
require("laravel-mix-tailwind");

mix.setPublicPath("dist")
    .js("resources/js/asset.js", "js")
    .postCss("resources/css/asset.css", "css")
    .tailwind("./tailwind.config.js");
