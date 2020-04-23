<?php

namespace Entity;

use Entity\User;
use Entity\Category;

class Announcement
{
    public $id;
    public $category;
    public $title;
    public $description;
    public $price;
    public $creationDate;
    public User $user;
}
