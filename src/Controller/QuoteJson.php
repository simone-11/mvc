<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class QuoteJson
{
    #[Route("/api/quote")]
    public function jsonQuote(): Response
    {
        date_default_timezone_set('Europe/Stockholm');
        $date = date("D M d Y");
        $time = date("h:i:s");
        
        $quotes = [
            "Nature is not a place to visit, it is home.",
            "In every walk with nature one receives far more than he seeks.",
            "Adopt the pace of nature. Her secret is patience.",
            "Nature is pleased with simplicity.",
            "It never hurts to keep looking for sunshine."
        ];
        $quoteKey = array_rand($quotes,1);

        $data = [
            "Quote" => $quotes[$quoteKey],
            "Date"=> $date,
            "Time"=>$time  
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}