<?php

$w_routes = array(
	['GET', '/', 'Default#home', 'home'],

	['GET', '/movie/catalog', 'Movie#catalog', 'movie_catalog'],
	['GET', '/movie/view/[i:id]', 'Movie#view', 'movie_view'],
	['GET', '/movie/random', 'Movie#random', 'movie_random'],
	['GET', '/movie/search/[:search]', 'Movie#search', 'movie_search'],
	['GET|POST', '/movie/add', 'Movie#add', 'movie_add'],

	['GET', '/admin', 'Admin#dashboard', 'admin'],
	['GET', '/admin/dashboard', 'Admin#dashboard', 'admin_dashboard'],
);