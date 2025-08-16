<?php

declare(strict_types=1);

namespace App\Dto;

readonly class Skill
{
    /**
     * @param string $name
     * @param string $level
     * @param array $keywords
     */
    public function __construct(
        public string $name = '',
        public string $level = '',
        public array $keywords = []
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            level: $data['level'] ?? '',
            keywords: $data['keywords'] ?? []
        );
    }
}
