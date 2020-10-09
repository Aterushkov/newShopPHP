<? $curr = \tavshop\App::$app->getProperty('currency');
$cats = \tavshop\App::$app->getProperty('cats');
$acat = $cats[$product->category_id]['alias'];
$tcat = $cats[$product->category_id]['title'];?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<!-- <li><a href="index.html">Home</a></li>
					<li class="active">Single</li> -->
					<?=$breadcrumbs;?>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
        <!-- <?=debug($product);?> -->
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<? if($gallery):?>
						<div class="flexslider">
							  <ul class="slides">
									<? foreach ($gallery as $key ):?>
									<li data-thumb="images/<?=$key->img?>">
										<div class="thumb-image"> <img src="images/<?=$key->img?>" data-imagezoom="true" class="img-responsive" alt="<?=$key->img?>"/> </div>
									</li>
									<? endforeach?>
							  </ul>
						</div>
								<? else:?>
								<div class="flexslider">
									<ul class="slides">		
										<li data-thumb="images/<?=$product->img?>">
											<div class="thumb-image"> <img src="images/<?=$product->img?>"alt="<?=$product->img?>"/> </div>
										</li>
									</ul>
								</div>
						<? endif;?>
						<!-- FlexSlider -->
					</div>	


					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
						<h2><?=$product->title?></h2>
							<!-- <div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 1 customer review </a>
									
								</div>
							<div class="clearfix"> </div>
							</div> -->
							
							<h5 class="item_price" id="base-price" data-bace="<?=$product->price * $curr['value']?>"><?=$curr['symbol_left']." "?><?=$product->price * $curr['value']?><?=" ".$curr['symbol_right']?>
								<?if($product->old_price):?>
									<small><del><?=$curr['symbol_left']." "?><?=$product->old_price* $curr['value']?><?=" ".$curr['symbol_right']?></small></del>
                <? endif; ?>
							</h5>
							<?=$product->content;?>
                            <? if($mods):?>
							<div class="available">
								<ul>
									<li>Color
										<select>
                                            <option>Выбрать цвет</option>
                                            <? foreach ($mods as $mod):?>
                                                <option data-title="<?=$mod->title?>" data-price="<?=$mod->price * $curr['value']?>" value="<?=$mod->id?>"><?=$mod->title?></option>
                                            <? endforeach; ?>
									</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
                            <? endif;?>
							<ul class="tag-men">
								<li><span>Category</span>
								<span class="women1"><a href="category/<?=$acat;?>">: <?=$tcat;?></a></span></li>
							</ul>
									<div class="quantity">
										<input type="number" size="4" class="input-text qty text" value="1" name="quantity" main="1" step="1">
									</div>
								<a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-cart item_add add-to-cart-link">В корзину</a>
							
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="tabs">
					<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
				</div>
				<!-- Начало связанных продуктов -->
				<? if($related):?>
				<div class="latestproducts">
					<div class="product-one">
						<h3>Товары похожие на этот</h3>
						<? foreach ($related as $item):?>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="product/<?=$item['alias']?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img']?>" alt="<?=$item['alias']?>" /></a>
								<div class="product-bottom">
									<h3><a href="product/<?=$item['alias']?>"><?=$item['title']?></a></h3>
									<p>Explore Now</p>
									<h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a> 
									<span class=" item_price">
											<?=$curr['symbol_left']." "?><?=$item['price'] * $curr['value']?><?=" ".$curr['symbol_right']?>
										<?if($item['old_price']):?>
											<small><del><?=$curr['symbol_left']." "?><?=$item['old_price'] * $curr['value']?><?=" ".$curr['symbol_right']?></small></del>
										<? endif; ?>
									</span></h4>
								</div>
								<div class="srch">
									<span>-50%</span>
								</div>
							</div>
						</div>
						<? endforeach;?>
						<div class="clearfix"></div>
					</div>
				<? endif;?>

				<? if($recentlyViewed):?>
				<div class="latestproducts">
					<div class="product-one">
						<h3>Ранее вы смотрели:</h3>
						<? foreach ($recentlyViewed as $item):?>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="product/<?=$item['alias']?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img']?>" alt="<?=$item['alias']?>" /></a>
								<div class="product-bottom">
									<h3><a href="product/<?=$item['alias']?>"><?=$item['title']?></a></h3>
									<p>Explore Now</p>
									<h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a> 
									<span class=" item_price">
											<?=$curr['symbol_left']." "?><?=$item['price'] * $curr['value']?><?=" ".$curr['symbol_right']?>
										<?if($item['old_price']):?>
											<small><del><?=$curr['symbol_left']." "?><?=$item['old_price'] * $curr['value']?><?=" ".$curr['symbol_right']?></small></del>
										<? endif; ?>
									</span></h4>
								</div>
								<div class="srch">
									<span>-50%</span>
								</div>
							</div>
						</div>
						<? endforeach;?>
						<div class="clearfix"></div>
					</div>
				<? endif;?>
				</div>
				<!-- Конец связанных продуктов -->
			</div>
<!--				<div class="col-md-3 single-right">-->
<!--					<div class="w_sidebar">-->
<!--					</div>-->
<!--				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	