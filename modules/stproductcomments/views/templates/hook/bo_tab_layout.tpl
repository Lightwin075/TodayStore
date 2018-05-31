{*
* 2007-2016 PrestaShop
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
*  @author    ST-themes <hellolee@gmail.com>
*  @copyright 2007-2016 ST-themes
*  @license   Use, by you or one client for one Prestashop instance.
*  
*  
*}
<div class="tabbable row">
<div class="st_sidebar col-xs-12 col-lg-2"><ul class="nav nav-tabs">
{foreach $bo_tabs as $tab}
	<li class="nav-item"><a href="javascript:;" title="{$tab['name']}" data-fieldset="{$tab['id']}">{$tab['name']}</a></li>
{/foreach}
</ul></div>
<div id="st_tab" class="col-xs-12 col-lg-10 tab-content">
{$bo_tab_content}{* HTML in this variable, no escape necessary *}
</div>
</div>