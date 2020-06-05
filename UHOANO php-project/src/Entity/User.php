<?php

namespace Entity;

use ludk\Utils\Serializer;

class User
{
    public int $id;
    public string $email;
    public string $nickname;
    public string $password;
    use Serializer;
}
