<?php

declare(strict_types=1);

namespace SmitBackend\TenancyShift\Contracts;

/**
 * Interface TenantConnectionInterface
 *
 * @package SmitBackend\TenancyShift
 */
interface TenantConnectionInterface
{
    public function execute(array $payload = []): mixed;
}
