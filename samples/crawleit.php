<?php

require_once __DIR__ . '/../vendor/autoload.php';

if($argc == 2) {
    $crawler = new \BABA\Utilities\SitemapCrawler();
    $crawler->crawleit($argv[1]);
    foreach($crawler->getUrls() as $url) {
        echo "$url\n";
    }
} else {
    echo "cravleit.php <url of your sitemap>\n";
}