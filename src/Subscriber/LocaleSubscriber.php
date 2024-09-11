<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\RequestStack;

class LocaleSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;
    private $requestStack;

    public function __construct(RequestStack $requestStack, string $defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
            return;
        }

        // Essayer de récupérer la langue depuis la session
        $locale = $request->getSession()->get('_locale', $this->defaultLocale);
        $request->setLocale($locale);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 20]],
        ];
    }
}
