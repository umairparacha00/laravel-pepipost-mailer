<?php

namespace UmairParacha00\LaravelPepipostMailer;
use \Illuminate\Mail\MailServiceProvider as LaravelMailServiceProvider;
class PepipostMailServiceProvider extends LaravelMailServiceProvider
{
    /**
     * Register to Illuminate mailer instance.
     *
     * @return void
     */
    protected function registerIlluminateMailer()
    {
        $this->app->singleton('mail.manager', function($app) {
            return new PepipostMailManager($app);
        });

        // Copied from Illuminate\Mail\MailServiceProvider
        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
    }
}
