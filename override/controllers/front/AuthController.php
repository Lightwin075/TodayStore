<?php
class AuthController extends AuthControllerCore
{
    /*
    * module: stoverride
    * date: 2018-05-21 10:10:16
    * version: 1.0.0
    */
    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        $breadcrumb['links'][] = [
            'title' => $this->trans('Account', array(), 'Shop.Theme.Panda'),
            'url' => $this->context->link->getPageLink('authentication'),
        ];
        return $breadcrumb;
    }
}
