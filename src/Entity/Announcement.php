<?php

namespace Entity;

use Entity\User;
use Entity\Category;

use ludk\Utils\Serializer;

class Announcement
{
    public $id;
    public Category $category;
    public $title;
    public $description;
    public $price;
    public $creationDate;
    public User $user;

    use Serializer;
}
