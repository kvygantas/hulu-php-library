<?php
    require_once('../src/Hulu.php');
    $hulu = new Hulu();

    switch($_GET['method']) {
        case 'getCompanies':
            // Remove method from GET so it can be passed to the library
            unset($_GET['method']);

            // Call the method!
            $companies = $hulu->getCompanies($_GET);
            exit($companies);
            break;
        case 'getGenres':
            // Remove method from GET so it can be passed to the library
            unset($_GET['method']);

            // Call the method!
            $genres = $hulu->getGenres($_GET);
            exit($genres);
            break;
        case 'getShows':
            // Remove method from GET so it can be passed to the library
            unset($_GET['method']);

            // Call the method!
            $shows = $hulu->getShows($_GET);
            exit($shows);
            break;
        case 'getVideos':
            // Remove method from GET so it can be passed to the library
            unset($_GET['method']);

            // Call the method!
            $videos = $hulu->getVideos($_GET);
            exit($videos);
            break;
        case 'search':
            $results = $hulu->search($_GET['query'], $_GET['limit'], $_GET['page']);
            exit($results);
            break;
        default:
            // ...
    }
?>