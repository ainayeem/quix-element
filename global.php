<?php
use QuixNxt\AssetManagers\StyleManager;
if ( ! defined('LOAD_TIMELINE_CSS')) {
  define('LOAD_TIMELINE_CSS', true);
  StyleManager::getInstance()->add(file_get_contents(__DIR__.'/style.css'));
}
