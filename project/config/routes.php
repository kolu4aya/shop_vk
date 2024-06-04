<?php
	use \Core\Route;
	
	return [
		new Route('/', 'Main', 'index'), 
		new Route('/products', 'Product', 'index'),
		new Route('/product/:id', 'Product', 'show'),
		new Route('/cart', 'Cart', 'index'),
		new Route('/cart/create', 'Cart', 'create'),
		new Route('/cart/delete', 'Cart', 'delete'),
		new Route('/profile', 'User', 'index'),
		new Route('/profile/edit', 'User', 'edit'),
		new Route('/profile/update', 'User', 'update'),
		new Route('/login', 'User', 'loginForm'), 
		new Route('/auth', 'User', 'auth'), 
		new Route('/register', 'User', 'create'), 
		new Route('/user_create', 'User', 'store'), 

		new Route('/admin/products', 'Admin\Product', 'index'), 
		new Route('/admin/products/edit', 'Admin\Product', 'edit'), 
		new Route('/admin/products/update', 'Admin\Product', 'update'), 
		new Route('/admin/products/delete', 'Admin\Product', 'delete'), 
		new Route('/admin/products/create', 'Admin\Product', 'create'), 
		new Route('/admin/products/store', 'Admin\Product', 'store'), 
	];
	