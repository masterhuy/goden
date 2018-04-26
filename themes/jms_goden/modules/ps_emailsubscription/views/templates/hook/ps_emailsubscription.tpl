{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="textnews_popup addon-title">
			<h2>{l s='Sign Up Our Newsletter' d='Shop.Theme'}</h2>
			<span>{l s='For receive and never miss the latest products, news, events, promotion and many more' d='Shop.Theme'}</span>
		</div>
		<div class="textnews_h1 addon-title">
			<h3>{l s='Don’t Miss Out!' d='Shop.Theme'}</h3>
			<span>Get latest news & receive 30% off for your next buy!</span>
		</div>
		<div class="textnews_h2 addon-title">
			<h3>Join Our Newsletter</h3>
			<span>Sign up for get our offers and promotions and receive 20% off for your next buy!</span>
		</div>
		<div class="textnews_h3 addon-title">
			<h3>Follow Us</h3>
			<p>Hi you, sign up our newsletter and  get 30% off for your next purchase!</p>
		</div>
		<div class="news_content">
        	<div  class="block_content block_c_right">
				<form action="{$urls.pages.index}#footer" method="post">
					<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
						<input class="inputNew normal form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Enter your e-mail' d='Shop.Forms.Labels'}" />
						<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Email@example.com' d='Shop.Forms.Labels'}" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1 btn-default">
							{l s='Subscribe' d='Shop.Theme'}
						</button>
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1 btn-h3">
							<span class="fa fa-paper-plane"></span>
						</button>
						
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
			</div>
       	</div>
	</div>
</div>
{if $msg}
    <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
        {$msg}
    </div>
{/if}
<div id="social_block">
	<ul class="find-us">
       <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
       <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
       <li class="divider"><a href="#" class="gplus"><span class="fa fa-google"></span></a></li>
	   <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a></li>
	   <li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
    </ul>
</div>

