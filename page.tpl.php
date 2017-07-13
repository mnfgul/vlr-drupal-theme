<?php 
	global $user;
	$ismember = false;
	$cart = 0;
	if($user->uid > 0)
	{
		$ismember = true;
		$items = uc_cart_get_contents();
		$cart = count($items);
	}
	
	//set timezone
	date_default_timezone_set('America/Montreal');
    
    ini_set('display_errors', 0); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript">
    	jQuery(document).ready(function(){
			
			function hideCube() {
			    $('.cube').each(function(index, element) {
			        var sleepTime = Math.floor(Math.random() * 2000);
			        var t = setTimeout(function() {
			            var d = Math.floor(Math.random() * 2000);
			            $(element).fadeTo(d, 0);
			        }, sleepTime);
			    });
			}

			function showCube() {
			    $('.cube').each(function(index, element) {
			        var sleepTime = Math.floor(Math.random() * 2000);
			        var t = setTimeout(function() {
			            var d = Math.floor(Math.random() * 1000);
			            $(element).fadeTo(d, 0.99);
			        }, sleepTime);
			    });
			}
			
			$(function() {
			
			    var h = setTimeout(hideCube, 2000);
			    var g = setTimeout(showCube, 5000);
			
			});
			
    	});
    </script>
</head>
<body>
	<div id="mainDiv">
		<div id="top">
			<a href="<?php echo $base_path?>" title="Homepage" id="logo">
				<h1>Vilore</h1>
			</a>
			<?php  if($ismember){?>
			<div id="topMenu">
				<ul class="nolist clearfix">
					<li>
						<a href="<?php echo $base_path?>" id="home">Home</a>
					</li>
					<li class="cart-count">
						<a href="<?php echo $base_path?>?q=cart/" id="cart-count"><?php echo $cart;?> Items</a>
					</li>					
					<li>
						<a href="<?php echo $base_path?>?q=user/<?php echo $user->uid;?>" id="account">My Account</a>
					</li>					
					<li>
						<a href="<?php echo $base_path?>?q=logout/" id="logout" class="last-item">Logout</a>
					</li>					
				</ul>
			</div>
			<div id="searchBox">
				<?php if ($search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
			</div>
			<?php } ?>
		</div>
		<?php if(drupal_is_front_page()){ ?>
			<?php if($ismember){?>
				<div id="banner" class="clearfix">
					<br/><br/>
					<table>
						<tr>
							<td><a href="/?q=cat-brands/12"><img src="/files/content-img/1-la-costena.png"/></a></td>
							<td><a href="/?q=cat-brands/67"><img src="/files/content-img/4-calctose.png"/></a></td>
							<td><a href="/?q=cat-brands/63"><img src="/files/content-img/7-congelli.png"/></a></td>
							<td><a href="/?q=cat-brands/83"><img src="/files/content-img/pronto.png"/></a></td>
						</tr>
						<tr>
							<td><a href="/?q=cat-brands/59"><img src="/files/content-img/2-jumex.png"/></a></td>
							<td><a href="/?q=cat-brands/65"><img src="/files/content-img/3-benedik.png"/></a></td>
							<td><a href="/?q=cat-brands/68"><img src="/files/content-img/6-choco.png"/></a></td>
							<td><a href="/?q=cat-brands/66"><img src="/files/content-img/11-yasta.png"/></a></td>
						</tr>
					</table>
					<br/><br/>
				</div>
			<?php }else{?>
				<div id="banner" class="clearfix">
					<br/><br/>
					<table id="photos">
						<tr>
							<td><img class="cube" id="cube_1" src="/files/content-img/1-la-costena.png"/></td>
							<td><img class="cube" id="cube_2" src="/files/content-img/4-calctose.png"/></td>
							<td><img class="cube" id="cube_3" src="/files/content-img/7-congelli.png"/></td>
							<td><img class="cube" id="cube_4" src="/files/content-img/pronto.png"/></td>
						</tr>
						<tr>
							<td><img class="cube" id="cube_5" src="/files/content-img/2-jumex.png"/></td>
							<td><img class="cube" id="cube_6" src="/files/content-img/3-benedik.png"/></td>
							<td><img class="cube" id="cube_7" src="/files/content-img/6-choco.png"/></td>
							<td><img class="cube" id="cube_8" src="/files/content-img/11-yasta.png"/></td>
						</tr>
					</table>
					<br/><br/>
				</div>
			<?php }?>
		<?php }?>
		<div id="content" class="clearfix">
			<div id="home" class="<?php if(drupal_is_front_page()) echo 'home'?> clearfix">
				<?php
					if(drupal_is_front_page())
					{
						if($ismember)
						{
						?>
						<div id="homeMenuBox" class="bigbox">							
							<table>							
								<tr>
									<td width="300" style="text-align: right;"></td>
									<td width="100">US Section</td>
									<td width="100">Canada Section</td>
									<td width="150"></td>
								</tr>
								<tr>
									<td style="text-align: right;"><h3 class="subHd">Brands</h3></td>
									<td ><a href="/?q=brand-list/all" class="btLink">SHOW ALL</a></td>
									<td ><a href="/?q=brand-list-ca/all" class="btLink">SHOW ALL</a></td>
									<td width="150"></td>
								</tr>
								<tr>
									<td style="text-align: right;"><h3 class="subHd">Logos Only</h3></td>
									<td><a href="/?q=brand-logo/all" class="btLink">SHOW ALL</a></td>
									<td><a href="/?q=brand-logo-ca/all" class="btLink">SHOW ALL</a></td>
									<td width="150"></td>
								</tr>
								<tr>
									<td style="text-align: right;"><h3 class="subHd">Promotional Elements & Ad Kits</h3></td>
									<td><a href="/?q=brand-kits/all" class="btLink">SHOW ALL</a></td>
									<td><a href="/?q=brand-kits-ca/all" class="btLink">SHOW ALL</a></td>
									<td width="150"></td>
								</tr>
							</table>
						</div>
						<?php 
						}
						else
						{
						?>
						<?php if ($messages) { print $messages;}?>
						<div id="homeLoginBox" class="bigbox clearfix">
							<div class="homeLoginSec" id="sec1"></div>
							<div class="homeLoginSec" id="sec2">
								<?php echo drupal_get_form('user_login_block');?>
							</div>
							<div class="homeLoginSec" id="sec3">
								<h3 class="subHd">Acceptable Use Policy</h3>
  									<p>Acceptable use of downloaded images and logos includes in store advertising, product catalogs, sale sheets, presentations and email.</p>
  									<p>Unacceptable use of downloaded images and logos includes production of premiums, POS, banners, digital or video media.</p>
  									<p style="margin: 0px;">Use of images for anything other than acceptable use guidelines provided above must be requested and approved through Vilore Marketing Department.</p>
							</div>
						</div>
						<?php
						}
					}
					else
					{
					if(!$ismember){
						if((arg(0) == 'user'))
						{
							//user can see this page even if not registered, if not redirect them to homepage
						}
						else
						{
							drupal_goto();
						}
					}
					?>
					<div id="left" class="clearfix">
					<?php 
						echo $left;
					?>
					</div>
					<div id="right" class="clearfix">
					<?php
						if(!empty($title)){
						?>
						<h1 class="pageTitle"><?php echo $title;?></h1>
						<?php 
						}
					?>
					<?php 
						if ($show_messages) { print $messages;}
							print $tabs;
							print $help;       						
        					print $content;
					?>
					</div>
										
					<?php
					}
					?>
			</div>
		</div>
	</div>
	<div id="footer" class="clearfix">
		<div id="footerLeft">
			Copyright <?php echo strftime("%Y"); ?> &copy; Vilore Foods Company, Inc. Unauthorized use prohibited
		</div>
		<div id="footerRight">
			<a href="/?q=contact" title="Contact Us">Contact Us</a> | 
			<a href="/?q=node/11" title="Read Privacy Statement">Privacy Statement</a> | 
			<a href="/?q=node/10" title="Read Terms of Use">Terms of Use</a> | 
			<a href="/?q=node/9" title="Read Legal Disclaimer">Legal Disclaimer</a>
		</div>
	</div>
    <?php print $closure ?>
</body>
</html>