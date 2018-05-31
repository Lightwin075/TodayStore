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
{extends file='customer/page.tpl'}
{block name="page_content"}
<section id="st_product_comment_reply_block" class="block">
    <div class="flex_container flex_start mb-3">
        <div class="mr-2">
          <img src="{$order.product.cover.bySize.small_default.url}" width="{$order.product.cover.bySize.small_default.width}" height="{$order.product.cover.bySize.small_default.height}" alt="{$order.product.product_name}" class="general_border" />
        </div>
        <div class="flex_child">
          <div>
            <p class="font-weight-bold">{$order.product.product_name}</p>
            <div class="mb-1">{l s='Quantity' d='Shop.Theme.Panda'}: {$order.product.quantity}</div>
            <div class="mb-1">{l s='Order reference' d='Shop.Theme.Panda'}: <a href="{$link->getPageLink('order-detail', null, null, ['id_order'=>$order.id])}">{$order.reference}</a></div>
            <div>{l s='Date' d='Shop.Theme.Panda'}: {dateFormat date=$order.date_add full=0}</div>
          </div>
        </div>
    </div>
    {if $comment|is_array && $comment|count}
    <div>
        {l s='You\'ve commented the product.' d='Shop.Theme.Panda'}
        <a href="{$link->getModuleLink('stproductcomments','mycomments',['secure_key'=>$secure_key, 'view_comment'=>1, 'id_order'=>$id_order,'id_product'=>$id_product])}">{l s='view my comment' d='Shop.Theme.Panda'}</a>
    </div>
    {else}
	  <div class="st_product_comment_reply">
        {if $customer.is_logged && !$customer.is_guest}
        <form name="st_product_comment_form" method="post" action="{$link->getModuleLink('stproductcomments','mycomments',['secure_key'=>$secure_key])}">
            {if $criterions|@count > 0}
				<ul class="criterions_list li_fl clearfix">
        {foreach from=$criterions item='criterion'}
          <li class="flex_container flex_left mr-5">
            <span class="criterion_name mr-2">{$criterion.name}:</span>
            <div class="star_content clearfix">
							<input class="star" type="radio" name="criterion[{$criterion.id_st_product_comment_criterion|round}]" value="1" />
							<input class="star" type="radio" name="criterion[{$criterion.id_st_product_comment_criterion|round}]" value="2" />
							<input class="star" type="radio" name="criterion[{$criterion.id_st_product_comment_criterion|round}]" value="3" />
							<input class="star" type="radio" name="criterion[{$criterion.id_st_product_comment_criterion|round}]" value="4" />
							<input class="star" type="radio" name="criterion[{$criterion.id_st_product_comment_criterion|round}]" value="5" checked="checked" />
						</div>
					</li>
				{/foreach}
				</ul>
			{/if}
            <div class="form-group row mb-3">
              <label class="col-md-2 form-control-label required">
                {l s='Describe it:' d='Shop.Forms.Labels'}
              </label>
              <div class="col-md-8 tag-wrap">
                <input type="text" name="tags" placeholder="{l s='Use a comma to seperate words.' d='Shop.Theme.Panda'}" class="tm-input form-control"/>
                <div>Describe this product using simple and short words.</div>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-2 form-control-label">
                {l s='Review(required):' d='Shop.Forms.Labels'}
              </label>
              <div class="col-md-8">
                <textarea id="comment_content" name="content" rows="30" cols="6" class="form-control" autocomplete="off"></textarea>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-2">{l s='Upload an image:' d='Shop.Forms.Labels'}</div>
              <div class="col-md-8">
                {if isset($upload_image) && $upload_image}
                <div class="st-dropzone" id="st_product_comment_uploader">
                  <div class="dz-message needsclick">
                    Drop an image here or click to upload one.
                  </div>
                </div>
                <input name="image" type="hidden" value="" />
                {/if}
                <input name="id_product" type="hidden" value="{$id_product}" />
                <input name="id_order_detail" type="hidden" value="{$order.product.id_order_detail}" />
                <input name="id_order" type="hidden" value="{$id_order}" />
                <input name="id_parent" type="hidden" value="0" />
                <input name="SaveComment" type="hidden" value="1" />
                <div>
                    <input type="submit" name="st_product_comment_submit" id="st_product_comment_submit" value="{l s='Post comment' d='Shop.Theme.Panda'}" class="btn btn-default mar_r4" />
                    <a href="javascript:;" id="cancel_comment_reply_link" class="go hidden">{l s='Cancel reply' d='Shop.Theme.Panda'}</a>
                </div>
              </div>
            </div>
        </form>
        {/if}
    </div>
    {/if}
</section>
<div id="preview-template" style="display: none;">
    <div class="dz-preview dz-file-preview">
      <div class="dz-image"><img data-dz-thumbnail /></div>
      <div class="dz-details">
        <div class="dz-size"><span data-dz-size></span></div>
        <div class="dz-filename"><span data-dz-name></span></div>
      </div>
      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
      <div class="dz-error-message"><span data-dz-errormessage></span></div>
      <div class="dz-success-mark">
        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
          <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
          <title>Check</title>
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
              <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
          </g>
        </svg>
      </div>
      <div class="dz-error-mark">
        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
            <title>error</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
      </div>
    </div>
  </div>
{/block}

{block name='my_account_links'}
  <div class="clearfix my_account_page_footer mt-3 mb-3">
    <a href="{url entity='module' name='stproductcomments' controller='mycomments'}" title="{l s='Back to my comments' d='Shop.Theme.Panda'}" rel="nofollow"><i class="fto-left fto_mar_lr2"></i>{l s='Back to my comments' d='Shop.Theme.Panda'}</a>
  </div>
{/block}