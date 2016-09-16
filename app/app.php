<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app["debug"] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form_input.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $new_repeat_counter = new RepeatCounter($_GET["word"], $_GET["text"]);
        $new_repeat_counter->countRepeats($new_repeat_counter->getSearchWord(), $new_repeat_counter->getSearchText());
        return $app["twig"]->render("results.html.twig", array("repeat_counter" => $new_repeat_counter));
    });
    
    return $app;
 ?>
