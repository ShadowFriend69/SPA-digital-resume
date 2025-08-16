<?php

declare(strict_types=1);

namespace App\Dto;

readonly class Interest
{

    /**
     * @param string $name
     * @param array $keywords
     */
    public function __construct(
        public string $name = '',
        public array $keywords = []
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            keywords: $data['keywords'] ?? []
        );
    }
}
