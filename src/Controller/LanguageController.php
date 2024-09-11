<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(Request $request, string $locale): Response
    {
        // Vérifier si la locale est valide
        if (!in_array($locale, ['en', 'fr'])) {
            throw $this->createNotFoundException('Locale not found');
        }

        // Stocker la langue dans la session
        $request->getSession()->set('_locale', $locale);

        // Rediriger vers la page précédente ou la page d'accueil si aucune page précédente n'est trouvée
        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: $this->generateUrl('homepage'));
    }
}
