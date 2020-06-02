<?php

namespace Entity;

use Entity\User;
use Entity\Category;

use ludk\Utils\Serializer;

class Announcement
{
    public int $id;
    public Category $category;
    public string $title;
    public string $description;
    public string $price;
    public string $creationDate;
    public User $user;

    use Serializer;
}
