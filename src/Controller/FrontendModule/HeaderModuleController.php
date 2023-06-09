<?php

namespace ExAkt\ContaoHeaderModuleBundle\Controller\FrontendModule;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule(HeaderModuleController::TYPE, category="miscellaneous", template="mod_header_module")
 */
class HeaderModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'header_module_bundle';

    public function __construct(){
        dump('test');
    }

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        if ($request->isMethod('post')) {
            if (null !== ($redirectPage = PageModel::findByPk($model->jumpTo))) {
                throw new RedirectResponseException($redirectPage->getAbsoluteUrl());
            }
        }

        $template->action = $request->getUri();

        return $template->getResponse();
    }
}

