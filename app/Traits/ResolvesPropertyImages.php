<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

trait ResolvesPropertyImages
{
    private function resolveImageUrl(string $image, ?string $size = '600'): string
    {
        $s3Url = 'https://grupohousing.s3.amazonaws.com/listings/' . $image;

        $existsInS3 = Cache::remember('s3_exists_' . md5($image), 86400, function () use ($s3Url) {
            try {
                return Http::timeout(2)->connectTimeout(2)->head($s3Url)->successful();
            } catch (\Exception $e) {
                return false;
            }
        });

        if ($existsInS3) {
            return $s3Url;
        }

        $sizePath = $size ? $size . '/' : '';
        return 'https://grupohousing.com/uploads/listing/' . $sizePath . $image;
    }

    private function resolvePropertyImages(string $images): string
    {
        return collect(explode('|', $images))
            ->filter()
            ->map(fn($image) => $this->resolveImageUrl(trim($image), '600'))
            ->join('|');
    }

    private function resolveFirstPropertyImage(string $images, ?string $size = '600'): string
    {
        $firstImage = collect(explode('|', $images))->filter()->first();

        return $firstImage ? $this->resolveImageUrl(trim($firstImage), $size) : '';
    }
}
