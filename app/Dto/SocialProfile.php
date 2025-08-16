<?php

declare(strict_types=1);

namespace App\Dto;

readonly class SocialProfile
{
    /**
     * @param string $network
     * @param string $username
     * @param string $url
     */
    public function __construct(
        public string $network = '',
        public string $username = '',
        public string $url = ''
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            network: $data['network'] ?? '',
            username: $data['username'] ?? '',
            url: $data['url'] ?? ''
        );
    }
}
