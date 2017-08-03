<?php

/**
 * Dummy class autoloader for WeatherUnderground SDK
 */

require_once(__DIR__. '/WUGApiClient.php');
require_once(__DIR__. '/Exception.php');
require_once(__DIR__. '/Fetcher/FetcherInterface.php');
require_once(__DIR__. '/Fetcher/CurlFetcher.php');
require_once(__DIR__. '/Fetcher/FileGetContentsFetcher.php');