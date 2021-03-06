<?php

namespace PhpTwinfield\ApiConnectors;

use PhpTwinfield\Enums\Services;
use PhpTwinfield\Exception;
use PhpTwinfield\Secure\Connection;
use PhpTwinfield\Services\BaseService;

abstract class BaseApiConnector
{
    /**
     * @var BaseService
     */
    protected $service;

    /**
     * The service that is needed by this connector.
     *
     * @return Services
     */
    abstract protected function getRequiredWebservice(): Services;

    /**
     * @param Connection $login
     * @throws Exception
     */
    public function __construct(Connection $login)
    {
        $this->service = $login->getAuthenticatedClient($this->getRequiredWebservice());
    }
}