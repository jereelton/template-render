<?php

require __DIR__ . '/vendor/autoload.php';

use \Slim\Slim;
use \Rain\Tpl;
use \App\TemplateRender;

$app = new Slim();

$app->config('debug', true);

$app->get("/", function(){

	$tplfiles = [
		"header"  => true, 
		"main"    => true, 
		"section" => false, 
		"article" => false, 
		"aside"   => false, 
		"footer"  => true,
		"others"  => false
	];

	$tpldata  = [
		"page" => "INDEX"
	];

	$tpldirs  = [
		"tpl_dir"   => __DIR__ . "/views/", 
		"cache_dir" => __DIR__ . "/views-cache/"
	];

	$tplsequence = ["header", "main", "footer"];

	$template = new TemplateRender($tplfiles, [], $tpldirs);

	$template->templatePrepare($tpldata)->templateRender($tplsequence);

	exit;

});

$app->get("/:generic", function($generic){

	$tplfiles = [
		"header"  => true, 
		"main"    => false, 
		"section" => false, 
		"article" => false, 
		"aside"   => false, 
		"footer"  => false,
		"others"  => true
	];

	$tpldata  = [
		"page"   => ucfirst($generic)." Page",
		"user"   => "Jereelton Teixeira",
		"status" => "Online"
	];

	$tpldirs  = [
		"tpl_dir"   => __DIR__ . "/views/", 
		"cache_dir" => __DIR__ . "/views-cache/"
	];

	$tplsequence = ["header", $generic];

	$template = new TemplateRender($tplfiles, [], $tpldirs);

	$template->templatePrepare($tpldata)->templateRender($tplsequence);

	exit;

});

$app->get("/user/login", function(){

	$tplfiles = [
		"header"  => true, 
		"main"    => false, 
		"section" => false, 
		"article" => false, 
		"aside"   => false, 
		"footer"  => false,
		"others"  => true
	];

	$tpldata  = [
		"page" => "LOGIN"
	];

	$tpldirs  = [
		"tpl_dir"   => __DIR__ . "/views/", 
		"cache_dir" => __DIR__ . "/views-cache/"
	];

	$tplsequence = ["header", "login"];

	$template = new TemplateRender($tplfiles, [], $tpldirs);

	$template->templatePrepare($tpldata)->templateRender($tplsequence);

	exit;

});

$app->get("/user/recovery", function(){

	$tplfiles = [
		"header"  => true, 
		"main"    => false, 
		"section" => false, 
		"article" => false, 
		"aside"   => false, 
		"footer"  => false,
		"others"  => true
	];

	$tpldata  = [
		"page"   => "Recovery Page",
		"user"   => "Jereelton Teixeira",
		"status" => "Online"
	];

	$tpldirs  = [
		"tpl_dir"   => __DIR__ . "/views/", 
		"cache_dir" => __DIR__ . "/views-cache/"
	];

	$tplsequence = ["header", "recovery"];

	$template = new TemplateRender($tplfiles, [], $tpldirs);

	$template->templatePrepare($tpldata)->templateRender($tplsequence);

	exit;

});

$app->run();
	
?>
