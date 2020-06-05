<?php

use Entity\Announcement;
use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';
session_start();
$orm = new ORM(__DIR__ . '/../Resources');
$announcementRepo = $orm->getRepository(Announcement::class);
// $items = $announcementRepo->findAll();

// $manager = $orm->getManager();

// $item = $announcementRepo->find(1);
// $item->title = "New title";
// $manager->persist($item);
// $manager->flush();

$items = $announcementRepo->findAll();

// Si le paramètre “search” est passé en GET filtrer les données remontées avec sa valeur.
// $items = array();
// if (isset($_GET['search'])) {
//     $items = $announcementRepo->findBy(array("content" => $_GET['search']));
// } else {
//     $items = $announcementRepo->findAll();
// }

// $action = $_GET["action"] ?? "display";
$action = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1); //remplacer le code ci dessus

switch ($action) {
    case 'register':
        break;
    case 'logout':
        break;
    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $usersWithThisLogin = $userRepo->findBy(array("nickname" => $_POST['username']));
            if (count($usersWithThisLogin) == 1) {
                $firstUserWithThisLogin = $usersWithThisLogin[0];
                if ($firstUserWithThisLogin->password != md5($_POST['password'])) {
                    $errorMsg = "Wrong password.";
                    include "../templates/login.php";
                } else {
                    $_SESSION['user'] = $usersWithThisLogin[0];
                    header('Location:/?action=display');
                }
            } else {
                $errorMsg = "Nickname doesn't exist.";
                include "../templates/login.php";
            }
        } else {
            include "../templates/login.php";
        }
        break;
    case 'new':
        break;
    case 'display':
    default:
        $items = array();
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            if (strpos($search, "@") === 0) {
                $nickname = substr($search, 1); // récupère le nickname en enlevant le premier caractère (ici le @)
                $users = $announcementRepo->findBy(array("nickname" => $nickname));
                if (count($users) == 1) {
                    $user = $users[0];
                    $items = $announcementRepo->findBy(array("user" => $user->id));
                }
            } else {
                $items = $announcementRepo->findBy(array("category" => $search));
            }
        } else {
            $items = $announcementRepo->findAll();
        }

        include "../templates/display.php";
        break;
}

// $items = array();
// if (isset($_GET['search'])) {
//     $items = $announcementRepo->findBy(array("content" => $_GET['search']));
// } else {
//     $items = $announcementRepo->findAll();
// }
