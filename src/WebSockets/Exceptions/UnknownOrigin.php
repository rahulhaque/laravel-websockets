<?php

namespace BeyondCode\LaravelWebSockets\WebSockets\Exceptions;

class UnknownOrigin extends WebSocketException
{
    public function __construct(string $origin)
    {
        $this->message = "Unknown origin `{$origin}`.";

        $this->code = 4009;
    }
}
