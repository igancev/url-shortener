<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Shortener;

/**
 */
class UrlShortenerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Shortener\LongUrl $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function shorten(\Grpc\Shortener\LongUrl $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.shortener.UrlShortener/shorten',
        $argument,
        ['\Grpc\Shortener\ShortUrl', 'decode'],
        $metadata, $options);
    }

}
