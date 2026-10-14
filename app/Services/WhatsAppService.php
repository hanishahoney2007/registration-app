<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Registration;

class WhatsAppService
{
    public function sendTemplate(
        Registration $registration
    ): array {
        $version = config('services.whatsapp.api_version');
        $phoneId = config('services.whatsapp.phone_number_id');

        $url = "https://graph.facebook.com/{$version}/{$phoneId}/messages";

        $response = Http::withToken(
            config('services.whatsapp.token')
        )->post($url, [
            'messaging_product' => 'whatsapp',
            'to' => $registration->mobile,
            'type' => 'template',
            'template' => [
                'name' => 'registration_confirmation',
                'language' => [
                    'code' => 'en_US',
                ],
                'components' => [
                    [
                        'type' => 'body',
                        'parameters' => [
                            [
                                'type' => 'text',
                                'text' => $registration->full_name,
                            ],
                             [
                                'type' => 'text',
                                'text' => $registration->full_name,
                            ],
                             [
                                'type' => 'text',
                                'text' => $registration->email,
                            ],
                             [
                                'type' => 'text',
                                'text' => $registration->mobile,
                            ],
                             [
                                'type' => 'text',
                                'text' => $registration->complaints,
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        $response->throw();

        return $response->json();
    }
}