<?php

namespace DesignPattern\Proxy;

use DesignPattern\Proxy\Downloader;

class CachingDownloader implements Downloader
{

    private Downloader $downloader;
    private array $cache = [];

    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}