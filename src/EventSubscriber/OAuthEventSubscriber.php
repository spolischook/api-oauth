<?php

namespace App\EventSubscriber;

use HWI\Bundle\OAuthBundle\Event\FilterUserResponseEvent;
use HWI\Bundle\OAuthBundle\HWIOAuthEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class OAuthEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            HWIOAuthEvents::CONNECT_COMPLETED => [
                ['connect', 10],
            ],
            HWIOAuthEvents::CONNECT_CONFIRMED => [
                ['connect', 10],
            ],
            HWIOAuthEvents::CONNECT_INITIALIZE => [
                ['connect', 10],
            ],
            HWIOAuthEvents::REGISTRATION_INITIALIZE => [
                ['connect', 10],
            ],
        ];
    }

    public function connect($event)
    {
        var_dump($event); exit;
    }
}
