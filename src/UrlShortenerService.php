<?php
// ./src/UrlShortenerService.php

declare(strict_types=1);

namespace App;

use Grpc\Shortener\LongUrl;
use Grpc\Shortener\ShortUrl;
use Grpc\Shortener\UrlShortenerInterface;
use Spiral\RoadRunner\GRPC;

final class UrlShortenerService implements UrlShortenerInterface
{
    public function shorten(GRPC\ContextInterface $ctx, LongUrl $in): ShortUrl
    {
        $longUrl = $in->getUrl();
        $shortedUrl = $this->buildShortUrl($longUrl);

        return (new ShortUrl())->setUrl($shortedUrl);
    }

    private function buildShortUrl(string $longUrl): string
    {
        // Вместо настоящей реализации мы имитируем бурную деятельность
        $randomStr = bin2hex(\random_bytes(5));

        return 'https://examp.le/' . $randomStr;
    }
}
