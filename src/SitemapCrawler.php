<?php

namespace BABA\Utilities;

use DOMDocument;
use DOMElement;

class SitemapCrawler
{

    /** @var array */
    private $urls = [];

    public function crawleit($sitemapUrl)
    {
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->load($sitemapUrl);

        $urls = $dom->getElementsByTagName('url');
        /** @var DOMElement $eurl */
        foreach ($urls as $eurl) {
            $loc = $eurl->getElementsByTagName('loc')->item(0);
            if ($loc) {
                $this->urls[$loc->nodeValue] = $loc->nodeValue;
            }
        }

        // Other sitemaps
        $sitemaps = $dom->getElementsByTagName('sitemap');
        /** @var DOMElement $esitemap */
        foreach ($sitemaps as $esitemap) {
            $loc = $esitemap->getElementsByTagName('loc')->item(0);
            if ($loc) {
                $this->crawleit($loc->nodeValue);
            }
        }
    }

    /**
     * @return array
     */
    public
    function getUrls()
    {
        return $this->urls;
    }
}