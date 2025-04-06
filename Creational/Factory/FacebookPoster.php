<?php

namespace DesignPattern\Factory;

use DesignPattern\Factory\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}