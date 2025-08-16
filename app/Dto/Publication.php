<?php

declare(strict_types=1);

namespace App\Dto;

use Carbon\Carbon;

readonly class Publication
{
    /**
     * @param string $name
     * @param string $publisher
     * @param Carbon|null $releaseDate
     * @param string $url
     * @param string $summary
     */
    public function __construct(
        public string $name = '',
        public string $publisher = '',
        public ?Carbon $releaseDate = null,
        public string $url = '',
        public string $summary = ''
    ) {}

    public static function fromArray(array $data): self
    {
        $releaseDate = isset($data['releaseDate']) ? Carbon::parse($data['releaseDate']) : null;

        return new self(
            name: $data['name'] ?? '',
            publisher: $data['publisher'] ?? '',
            releaseDate: $releaseDate,
            url: $data['url'] ?? '',
            summary: $data['summary'] ?? ''
        );
    }
}
