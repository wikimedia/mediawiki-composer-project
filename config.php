<?php

const MW_CONFIG_FILE =  __DIR__. '/LocalSettings.php';
const MW_VENDOR_DIR = __DIR__ . '/vendor/';
const MW_CONFIG_CALLBACK = 'mwProjectDefaultConfig';

function mwProjectDefaultConfig() {
  // Pull all globals into the function's scope.
  extract($GLOBALS, EXTR_REFS);

  // Set the project default values.
  $wgResourceBasePath = '/core/';
  $wgExtensionDirectory = __DIR__ . '/html/extensions/';
  $wgExtensionAssetsPath = '/extensions/';
  $wgStyleDirectory = __DIR__ . '/html/skins/';
  $wgStylePath = '/skins/';

  // If the config file is unreadable, throw the standard error.
  if ( !is_readable( MW_CONFIG_FILE ) ) {
		require_once "$IP/includes/NoLocalSettings.php";
		die();
  }

  require_once MW_CONFIG_FILE;
}
