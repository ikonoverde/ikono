<?php

namespace App\Http\Middleware\S3;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImagesMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        $response = $next($request);
        if (get_class($response) === JsonResponse::class) {
            $data = $response->getData(true);
            foreach ($data['records'] as $i => $record) {
                $data['records'][$i]['base_image'] = isset($record['base_image']) ? Storage::url($record['base_image']) : null;
            }
            $response->setData($data);
        }
        return $response;
    }
}
