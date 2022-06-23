<?php

namespace UmairParacha00\LaravelPepipostMailer;

use Illuminate\Mail\MailManager;
use UmairParacha00\LaravelPepipostMailer\Transport\PepipostTransport;

class PepipostMailManager extends MailManager
{
    protected function createPepipostTransport()
    {
        $config = $this->app['config']->get('services.pepipost', []);

        return new PepipostTransport(
            $this->guzzle($config), $config['api_key']
        );
    }
}
