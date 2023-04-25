<?php

declare(strict_types=1);

use ExAkt\ContaoHeaderModuleBundle\Controller\FrontendModule\HeaderModuleController;

$GLOBALS['TL_DCA']['tl_module']['palettes'][HeaderModuleController::TYPE] =
    '{title_legend},name,type;{redirect_legend},jumpTo';

