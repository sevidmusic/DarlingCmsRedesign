<?php

namespace DarlingCms\abstractions\component\Web;

use DarlingCms\interfaces\primary\Storable;
use DarlingCms\classes\primary\Storable as CoreStorable;
use DarlingCms\interfaces\primary\Switchable;
use DarlingCms\abstractions\component\SwitchableComponent as CoreSwitchableComponent;
use DarlingCms\interfaces\component\Web\App as AppInterface;
use DarlingCms\interfaces\component\Web\Routing\Request;

abstract class App extends CoreSwitchableComponent implements AppInterface
{
    public const APP_CONTAINER = "APP";

    public function __construct(Request $request, Switchable $switchable)
    {
        $storable = new CoreStorable(
            self::deriveNameLocationFromRequest($request),
            self::deriveNameLocationFromRequest($request),
            self::APP_CONTAINER
        );
        parent::__construct($storable, $switchable);
    }

    public static function deriveNameLocationFromRequest(Request $request): string {
        $nameLocation = preg_replace("/[^A-Za-z0-9]/", '', parse_url($request->getUrl(), PHP_URL_HOST));
        return (empty($nameLocation) === true ? 'DEFAULT' : $nameLocation);
    }

}