<?php session_start();

if(isset($_SESSION['korisnik']) && $_SESSION['korisnik']->naziv=="Administrator") {
    require_once "config/konekcija.php";

    require_once "views/head.php";
    require_once "views/admin_nav.php";
    require_once "views/header.php";

    require_once "models/kategorija/kategorija.php";
    require_once "views/aside.php";

    // sinclude_once "models/blog/ispisiBlogove.php";

    if(isset($_GET['stranica'])) {
            
        switch($_GET['stranica']) {
            case "admin":
                require_once "models/post/post.php";
                require_once "views/main-content/blog.php";
                break;
            case "postovi":
                require_once "views/main-content/admin/postovi.php";
                break;
            case "korisnik":
                require_once "views/main-content/register.php";
                break;
            case "kategorije":
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
} else {
    header("Location: index.php?stranica=pocetna");
}
    

?>