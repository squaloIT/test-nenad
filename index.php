<?php session_start();
    require_once "config/konekcija.php";

    require_once "views/head.php";
    require_once "views/nav.php";
    require_once "views/header.php";

    require_once "models/kategorija/kategorija.php";
    require_once "views/aside.php";

    // sinclude_once "models/blog/ispisiBlogove.php";

    if(isset($_GET['stranica'])) {
            
        switch($_GET['stranica']) {
            case "pocetna":
                require_once "models/post/post.php";
                require_once "views/main-content/blog.php";
                break;
            case "onama":
                require_once "views/main-content/about.php";
                break;
            case "register":
                require_once "views/main-content/register.php";
                break;
            case "login":
                require_once "views/main-content/login.php";
                break;
            case "postovi":
                require_once "models/post/post.php";
                require_once "views/main-content/post.php";
                break;
            default: 
                require_once "404.php";
        }
    } else {
        require_once "views/main-content/blog.php";
    }
    
    require_once "views/footer.php";

?>