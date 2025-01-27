<?php

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url() . '/assets/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url() . '/assets/js/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url() . '/assets/img/' . $nom;
	}
}

if ( ! function_exists('svg_url'))
{
	function svg_url($nom)
	{
		return base_url() . '/assets/svg/' . $nom;
	}
}

if ( ! function_exists('ico_url'))
{
	function ico_url($nom)
	{
		return base_url() . '/assets/ico/' . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

