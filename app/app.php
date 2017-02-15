<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergies.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_results", function() use($app) {
        $input_score = new Allergies;
        $find_allergies = $input_score->allergyScore($_GET['score']);
        return $app['twig']->render('results.html.twig', array('result' => $find_allergies));
    });

    return $app;

?>
