# PHP Sitemap Crawler
## Scrape list of url from sitemap
Main purpose of this library is to scrape list of url from sitemap file

# Install

```
git clone https://github.com/sjurajpuchky/find-keyword-golden-ratio-kgr-to-optimize-pages-for-search-engines-helps-you-top10-google-php.git
cd search-analytics-utilities
composer install
```

For google-ads-api suggestions you need activated mmc account and developer key, once you can't have it you can use sample kgr-csv.php with keywords and volumes in csv, which you can obtain from google-ads onr another seo tool as well.
Feel free to look into samples folder and checkout 

# Examples
In folder samples you can find some basic usage of library.

```php samples/crawleit.php <your sitemap.xml ur>```

```php samples/kgr-collabim.php ./samples/keywords.csv ./results.csv```

# How to use it?
As you can see in samples you have to first make instance of Engine then pass Engine to Analyzer tool, which has an interface to call operation with results.
Instance of Engine requires instance of Cache Driver to store results in the cache.

# Tutorial
https://www.youtube.com/watch?v=KQsGHZSY64I

# Where get long tail keywords?
in application is also implemented google-ads API keyword planner, for which you must have MMC account with activated developer token. Or export results from keyword planner in ADS to CSV, (keyword;volume) format.
If you do not have google-ads-api developer token, you can use collabim (https://www.collabim.com/?promoCode=mRfeciXH1V)
Wonderful is also keyword-researcher (http://babatumise.clevergiz.hop.clickbank.net?cgpage=keyword-researcher) and Answer the public (https://answerthepublic.com/)

# License
GPL-2.0-only

# Authors
Juraj Puchký - BABA Tumise s.r.o. <info@baba.bj>

https://www.seoihned.cz - SEO optilamizace

https://www.baba.bj - Tvorba webových stránek

https://www.webtrace.cz - Tvorba portálů a ecommerce b2b/b2c (eshopů) na zakázku

# Log
1.0.0 - first release

1.0.1 - some fixes regarding kgr specification

1.0.2 - future keywords

1.0.3 - better statistics in sample

1.3.6 - tested google ads api suggestions with kgr + samples

1.4.0 - collabim api implemented

# Copyright
&copy; 2021 BABA Tumise s.r.o.

# Thanks to
Created with help of Dalibor Jaroš - CEO of Collabim and their webinar about KGR SEO method (https://collabim.cz/kgr?promoCode=mRfeciXH1V),

you can also check SEO trénink (https://collabim.cz/seo-trenink?promoCode=mRfeciXH1V) which is one of the actually most honored SEO course on the Czech market.

# Special discount
for Collabim services and products you can use discount coupon AFF-DIS-30, coupon is possible to use only with links mentioned above.
