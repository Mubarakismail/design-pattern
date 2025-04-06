<?php

namespace DesignPattern\Factory;

interface SocialNetworkConnector
{
    public function login(): void;

    public function logout(): void;

    public function createPost(string $content): void;
}