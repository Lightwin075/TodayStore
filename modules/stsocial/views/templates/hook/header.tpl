{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $page['page_name'] != 'product'}
    <meta property="og:site_name" content="{$shop['name']|escape:'html':'UTF-8'}" />
    <meta property="og:url" content="{$urls['base_url']}" />
    {if $page['page_name']=='category'}
    <meta property="og:type" content="product" />
    <meta property="og:title" content="{$page['meta']['title']|escape:'html':'UTF-8'}" />
    <meta property="og:description" content="{$page['meta']['description']|escape:html:'UTF-8'}" />
    <meta property="og:image" content="{$image_link|escape:'html':'UTF-8'}" />
    {elseif $page['page_name']=='manufacturer' && isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer}
    <meta property="og:type" content="product" />
    <meta property="og:title" content="{$page['meta']['title']|escape:'html':'UTF-8'}" />
    <meta property="og:description" content="{$page['meta']['description']|escape:html:'UTF-8'}" />
    <meta property="og:image" content="{$urls['img_manu_url']}{$smarty.get.id_manufacturer|escape:'htmlall':'UTF-8'}-big_default.jpg" />
    {elseif $page['page_name']=='supplier' && isset($smarty.get.id_supplier) && $smarty.get.id_supplier}
    <meta property="og:type" content="product" />
    <meta property="og:title" content="{$page['meta']['title']|escape:'html':'UTF-8'}" />
    <meta property="og:description" content="{$page['meta']['description']|escape:html:'UTF-8'}" />
    <meta property="og:image" content="{$urls['img_sup_url']}{$smarty.get.id_supplier|escape:'html':'UTF-8'}-big_default.jpg" />
    {elseif $page['page_name']=='module-stblog-article'}
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{$meta_title|escape:'html':'UTF-8'}" />
    <meta property="og:description" content="{$meta_description|escape:html:'UTF-8'}" />
    <meta property="og:image" content="{$blog_image_link|escape:html:'UTF-8'}" />
    {else}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{$page['meta']['title']|escape:'html':'UTF-8'}" />
    <meta property="og:description" content="{$page['meta']['description']|escape:html:'UTF-8'}" />
    {if isset($logo_image_link) && $logo_image_link}
    <meta property="og:image" content="{$logo_image_link}" />
    {elseif isset($shop['logo']) && $shop['logo']}
    <meta property="og:image" content="{$shop['logo']}" />
    {/if}
    {/if}
{/if}
{if isset($custom_css) && $custom_css}
<style type="text/css">{$custom_css nofilter}</style>
{/if}