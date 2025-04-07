<?php

namespace DesignPattern\Proxy;

interface Downloader
{
    public function download(string $url): string;
}