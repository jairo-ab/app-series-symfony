<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series', methods: ['GET'])]
    public function index(): Response
    {
        $series_list = [
            'Lost',
            'Grey\'s Anatomy',
            'Loki',
            'Suits'
        ];

        return $this->render('series/index.html.twig', [
            'seriesList' => $series_list
        ]);
    }

    #[Route('/series/create', name: 'app_add_series', methods: ['GET'])]
    public function addSeriesForm(): Response
    {
        return $this->render('series/form.html.twig');
    }
}
