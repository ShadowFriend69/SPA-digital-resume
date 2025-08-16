<?php

declare(strict_types=1);

namespace App\Dto;

readonly class Location
{
    /**
     * @param string $address
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param string $region
     */
    public function __construct(
        public string $address = '',
        public string $postalCode = '',
        public string $city = '',
        public string $countryCode = '',
        public string $region = '',
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            address: $data['address'] ?? '',
            postalCode: $data['postalCode'] ?? '',
            city: $data['city'] ?? '',
            countryCode: $data['countryCode'] ?? '',
            region: $data['region'] ?? '',
        );
    }
}
