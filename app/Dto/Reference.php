<?php

declare(strict_types=1);

namespace App\Dto;

readonly class Reference
{
    /**
     * @param string $name
     * @param string $reference
     */
    public function __construct(
        public string $name = '',
        public string $reference = ''
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            reference: $data['reference'] ?? ''
        );
    }
}
