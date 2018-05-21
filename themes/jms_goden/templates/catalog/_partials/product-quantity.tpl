<li id="product-quantity" data-product="{$product.embedded_attributes|json_encode}">
    <label class="label" style="padding-right: 0">{l s='Quantity:' d='Shop.Theme.Catalog'}</label>
    <span>{$product.quantity}</span>
    <span {if $product.quantity > 1} style="display: none;"{/if}>{l s='Item' d='Shop.Theme.Catalog'}</span>
    <span {if $product.quantity == 1} style="display: none;"{/if}>{l s='Items' d='Shop.Theme.Catalog'}</span>
</li>
