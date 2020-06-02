<?php

namespace Entity;

use ludk\Utils\Serializer;

class Category
{
    public int $id;
    public string $name;

    use Serializer;
}
