<?php 

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\Http;

class CheckAgainDisposableMail{
    public function __invoke(string $email): void 
    {
       $response = Http::get("https://disposable.debounce.io/?email=$email");

       dump($response->getBody()->getContents());
    }   
}