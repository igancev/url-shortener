<?php
// ./src/ShortenUrlCliCommand.php

declare(strict_types=1);

namespace App;

use Grpc\ChannelCredentials;
use Grpc\Shortener\LongUrl;
use Grpc\Shortener\ShortUrl;
use Grpc\Shortener\UrlShortenerClient;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('shortener:shorten', 'Shorten url by shortener grpc service')]
final class ShortenUrlCliCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $urlShortenerClient = new UrlShortenerClient('127.0.0.1:9001', [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);

        $longUrl = (new LongUrl())->setUrl('https://example.com/long-url');

        /** @var ShortUrl $shortUrl */
        [$shortUrl] =  $urlShortenerClient->shorten($longUrl)->wait();

        $output->writeln('Short url: ' . $shortUrl->getUrl());

        return Command::SUCCESS;
    }
}
