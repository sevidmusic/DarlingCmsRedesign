<?php

namespace DarlingDataManagementSystem\interfaces\component\Factory\App;

use DarlingDataManagementSystem\interfaces\component\Factory\OutputComponentFactory as OutputComponentFactoryInterface;
use DarlingDataManagementSystem\interfaces\component\Factory\RequestFactory as RequestFactoryInterface;
use DarlingDataManagementSystem\interfaces\component\Factory\ResponseFactory as ResponseFactoryInterface;
use DarlingDataManagementSystem\interfaces\component\Factory\StoredComponentFactory as StoredComponentFactoryInterface;
use DarlingDataManagementSystem\interfaces\component\Web\Routing\Request as RequestInterface;
use DarlingDataManagementSystem\interfaces\component\Web\App as AppInterface;

interface AppComponentsFactory extends StoredComponentFactoryInterface, OutputComponentFactoryInterface, RequestFactoryInterface, ResponseFactoryInterface
{

    public const SHOW_LOG = 2;
    public const SAVE_LOG = 4;

    /**
     * @return array<mixed>
     */
    public static function buildConstructorArgs(RequestInterface $domain, AppInterface|null $app = null): array;

    public static function buildDomain(string $url): RequestInterface;

    public function buildLog(int $flags = 0): string;

}
