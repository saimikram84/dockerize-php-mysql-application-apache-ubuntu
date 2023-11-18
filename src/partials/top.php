<?php
// Get the current page's URL
$currentUrl = $_SERVER['PHP_SELF'];
// Use basename to get the page name
$pageName = basename($currentUrl);
$title = '';
if (isset($pageName)) {
    switch ($pageName) {
        case 'index.php':
            $title = 'Home';
            break;
        case 'why.php':
            $title = 'Why us';
            break;
        case 'trainer.php':
            $title = 'Trainers';
            break;
        case 'contact.php':
            $title = 'Contact us';
            break;
        case 'login.php':
            $title = 'Sign In';
            break;
        case 'register.php':
            $title = 'Resgister';
            break;
        default:
            break;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Gym | <?= $title ?></title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>