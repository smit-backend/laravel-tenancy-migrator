<?php

declare(strict_types=1);

namespace SmitBackend\TenancyShift;

use SmitBackend\TenancyShift\Contracts\TenantConnectionInterface;

/**
 * Class TenantMigrator
 *
 * @package SmitBackend\TenancyShift
 */
class TenantMigrator implements TenantConnectionInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
