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

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        break;
    case 'logout':
        break;
    case 'login':
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
