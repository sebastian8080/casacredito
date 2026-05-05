<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ResolvesPropertyImages
{
    private function resolveImageUrl(string $image, ?string $size = '600'): string
    {
        $s3Url = 'https://grupohousing.s3.amazonaws.com/listings/' . $image;

        $existsInS3 = Cache::remember('s3_exists_' . md5($image), 86400, function () use ($s3Url) {
            try {
                $headers = get_headers($s3Url, 1);
                return $headers && strpos($headers[0], '200') !== false;
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
}
