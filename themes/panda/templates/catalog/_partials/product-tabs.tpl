{block name='product_tabs'}
<div class="product_info_tabs sttab_block mobile_tab {if $sttheme.product_tabs_style==0} sttab_2 sttab_2_2 {elseif $sttheme.product_tabs_style==2} sttab_2 sttab_2_3 {elseif $sttheme.product_tabs_style==3} sttab_3 sttab_3_2 flex_container flex_start {/if}">
  <ul class="nav nav-tabs {if !$sttheme.product_tabs} tab_lg {/if} {if $sttheme.product_tabs_style==2} flex_box flex_center {/if}" role="tablist">
    {if $product.description}
    <li class="nav-item">
      <a class="nav-link{if $product.description} active{/if}" data-toggle="tab" role="tab" href="#description">{l s='Description' d='Shop.Theme.Catalog'}</a>
    </li>
    {/if}
    <li class="nav-item">
      <a class="nav-link{if !$product.description} active{/if}" data-toggle="tab" role="tab" href="#product-details">{l s='Product Details' d='Shop.Theme.Catalog'}</a>
    </li>
    {if $product.attachments}
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
    </li>
    {/if}
    {foreach from=$product.extraContent item=extra key=extraKey}
        {if $extra.moduleName == 'stproductlinknav' || $extra.moduleName == 'ststickers' || $extra.moduleName == 'stvideo'}{continue}{/if}
        {if $extra.moduleName == 'stthemeeditor'}
          {if $sttheme.display_pro_tags==1 && isset($extra.content.tags)}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" data-module="{$extra.moduleName}" href="#porudct-tags-tab">{l s='Tags' d='Shop.Theme.Panda'}</a>
            </li>
          {/if}
          {continue}
        {/if}
        {if $extra.moduleName == 'steasycontent'}
          {if isset($extra.content.tabs) && $extra.content.tabs}
            {foreach $extra.content.tabs as $es}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" data-module="{$extra.moduleName}" href="#easycontent-tab-{$es.id_st_easy_content}">{$es.title}</a>
            </li>
            {/foreach}
          {/if}
          {continue}
        {/if}
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" data-module="{$extra.moduleName}" href="#extra-{$extraKey}">{$extra.title}</a>
        </li>
    {/foreach}

  </ul>

  <div class="tab-content {if $sttheme.product_tabs_style==3} flex_child {/if}">
   <div role="tabpanel" class="tab-pane active {if $sttheme.product_tabs_style==1} st_open {/if}" id="description">
      <div class="mobile_tab_title">
            <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
              <div class="mobile_tab_name">{l s='Description' d='Shop.Theme.Catalog'}</div>
          </div>
      <div class="tab-pane-body">
         {block name='product_description'}
           <div class="product-description">
           <div class="style_content">{$product.description nofilter}</div>
           {foreach from=$product.extraContent item=extra key=extraKey}
                {if $extra.moduleName == 'steasycontent' && isset($extra.content.description) && $extra.content.description}
                    {$extra.content.description nofilter}
                {/if}
            {/foreach}
           </div>
         {/block}
        </div>
   </div>

   {block name='product_details'}
     {include file='catalog/_partials/product-details.tpl'}
   {/block}
   {block name='product_attachments'}
     {if $product.attachments}
      <div role="tabpanel" class="tab-pane" id="attachments">
        <div class="mobile_tab_title">
            <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
              <div class="mobile_tab_name">{l s='Attachments' d='Shop.Theme.Catalog'}</div>
          </div>
        <div class="tab-pane-body">
         <section class="product-attachments base_list_line medium_list">
           {foreach from=$product.attachments item=attachment}
             <div class="attachment line_item flex_box">
               <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}" title="{l s='Download' d='Shop.Theme.Actions'}" rel="nofollow" class="mar_r6 font-weight-bold">{$attachment.name}</a>
               <div class="flex_child mar_r6">{$attachment.description}</div>
               <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}" title="{l s='Download' d='Shop.Theme.Actions'}" rel="nofollow">
                 {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
               </a>
             </div>
           {/foreach}
         </section>
        </div>
       </div>
     {/if}
   {/block}
   {foreach from=$product.extraContent item=extra key=extraKey}
       {if $extra.moduleName == 'stproductlinknav' || $extra.moduleName == 'ststickers' || $extra.moduleName == 'stvideo'}{continue}{/if}
       {if $extra.moduleName == 'stthemeeditor'}
           {if $sttheme.display_pro_tags==1 && isset($extra.content.tags)}
            <div role="tabpanel" class="tab-pane" id="porudct-tags-tab">
                <div class="mobile_tab_title">
                    <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
                      <div class="mobile_tab_name">{l s='Tags' d='Shop.Theme.Panda'}</div>
                  </div>
                <div class="tab-pane-body">
                  {foreach $extra.content.tags as $tag}
                      <a href="{url entity='search' params=['tag' => $tag|urlencode]}" title="{l s='More about' d='Shop.Theme.Panda'} {$tag}" target="_top">{$tag}</a>{if !$tag@last}, {/if}
                  {/foreach}
                </div>
            </div>
            {/if}
          {continue}
        {/if}
        {if $extra.moduleName == 'steasycontent'}
          {if isset($extra.content.tabs) && $extra.content.tabs}
            {foreach $extra.content.tabs as $es}
            <div role="tabpanel" class="tab-pane" id="easycontent-tab-{$es.id_st_easy_content}">
                <div class="mobile_tab_title">
                    <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
                      <div class="mobile_tab_name">{$es.title}</div>
                  </div>
                <div class="tab-pane-body">
                    {$es.tab_content nofilter}
                </div>
           </div>
            {/foreach}
          {/if}
          {continue}
        {/if}
       <div role="tabpanel" class="tab-pane {$extra.attr.class}" id="extra-{$extraKey}" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
            <div class="mobile_tab_title">
                <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
                  <div class="mobile_tab_name">{$extra.title}</div>
              </div>
            <div class="tab-pane-body">
                {$extra.content nofilter}
            </div>
       </div>
   {/foreach}
</div>
</div>
{/block}