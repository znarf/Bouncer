<?php
$known_fingerprints = array(
// Facebook
'22a5eee46083360de8bc4beca9c8fe2d',  // http://www.facebook.com/externalhit_uatext.php
'ddb1e86b32cf145e05a6e0a52e92f174',  // FacebookFeedParser
'6d7c13b80393caf44744488e477e7e55',  // facebook share (http://facebook.com/sharer.php)
'afa4788739136af0b8de6d47868ee2f7',  // http://friendfeed.com/about/bot
'9e717c7cb2cddb32396c2cd53c06080d',  // facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)
'09f23681d71f4a667432fa11c8465f5c',  // facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)
'656fbf00aebce50ee22eb07b115c6395',  // Facebook share follower
// Google
'0f90768387e17021566a40bdc5ed4b0c',  //  * - Google Wireless Transcoder
'46c694c4e4e26cd05657ff74cf9300da',  //  * - Google Wireless Transcoder
'6f82b98fc53efbaca170d51e67469860',  //  * - Google Translate
'e06615d3118241037d7314f5b9411105',  //  * - Google Desktop
// App Engine Apps
'ab44e9e98d2763d6dd77a88fad021077',  // networkedhub
'e625657d8c7bbdd6e9fa2c5502086ef7',  // linksalpha
'380c7335752386c015df396e2616bf2d',  // networkedblogs
'7392c65f7872a8be46b2c68c9bc46fb4',  // lookingglass-server
'962a8dc6b0c4f1f0d67568c50b31da66',  // mapthislink
'06ca030f40974c9f8a30718e261bdfe5',  // rtweetme
'86da1e9551b784725ced8434be16755d',  // getfavicon
'337fb2b23192d6dbdfa9031e1468fb92',  // rtweetme
// Microsoft Suspicous Crawlers
'34f895d7de2f45b4ee2a57a6ece95518',  // US - Windows 2003  - Explorer 6.0 (search.msn.com)
'7764c3c0f1922a0a6d1edf498b35bc20',  // US - Windows 2003  - Explorer 6.0 (search.msn.com)
'970fa08c4ee995e7dde6b45b69bd9fb9',  // US - Windows Vista - Explorer 7.0
'0d8c0fe3cbecc12b7c4d416786be82bd',  // US - Windows 2003  - Explorer 6.0
'498aa0376230d5dd29b93242493a47d1',  // US - Windows 2003  - Explorer 6.0
'86b514d5a14bff1d237affaee680dbe1',  // US - Windows XP    - Explorer 6.0
'9f93e51b6cfe93f6da579b96452e4e22',  // US - Windows 2003  - Explorer 6.0
'7db6eb564b3454843085b7e112fc08a0',  // US - Windows 2003  - Explorer 6.0
'a03692f17fca1183f81571b323b06603',  // US - Windows XP    - Explorer 6.0
'680cf2aea17429b27f8f43e3332cf20d',  // US - Windows XP    - Explorer 6.0
'812a7eb82cd88810f66bd415598828ac',  // US - Windows 2003  - Explorer 6.0
'4872be284155fc900f610613a0b05f8c',  // US - Windows 2003  - Explorer 6.0
'2440249824ac5f46c8450483c0f9abba',  // US - Windows XP    - Explorer 6.0
'98e8461c651f2019cdf8e4f16fc80383',  // US - Windows XP    - Explorer 6.0
// Crawlers
'e69ff737f65a3b12adf29016e5ada98d',  // http://www.seoprofiler.com/bot
'2e3e78982b709fcee9558e17726c7638',  // BNF
'16e7bbc8f77ff058af8b2343b3115e72',  // INA
'0a524df12ce230d76cf2abc04d94e7ad',  // DotSpotsBot/0.2 (crawler; support at dotspots.com)
'8c3c59cf7f249feecf359881ef36576e',  // Mozilla crawl/5.0 (compatible; fairshare.cc +http://fairshare.cc)
'eea168b7c9d0d958c6e9b29e1212414b',  // Search17 Web Crawler
'65a6a88c94f8a9f6dbd11f129271843b',  // SheenBot
'4244fa19396ed9f656d60a0f424abcd5',  // Twenga
'b553cdef9205ddab1b33c9f4777ebd4f',  // Brandwatch
'db01ac7d8b3807323e1e1db2069fd679',  // http://www.chainn.com/mxbot.html
'98e414a4caa45ad58ce03028adee6cdb',  // bitlybot
'37a95c66ec11cc628a1aeadf2dfbb84f',  // WebVac
'934b30bd6857304ebb8cdbc0e2be3953',  // TweetmemeBot
'4244fa19396ed9f656d60a0f424abcd5',  // TwengaBot-Discover (http://www.twenga.fr/bot-discover.html)
'acfb1cd9b01b3c53d5fdbc14cc83d201',  // OneRiot/1.0 (http://www.oneriot.com)
'c1e39fdc4438cc12d7fd4d1962199e4b',  // OneRiot/1.0 (http://www.oneriot.com)
'c6ee697b0d3ed706ac974e45fa16221a',  // http://www.ellerdale.com/crawler.html
'eb69ec8038e09c15dc6c7bf544814076',  // http://www.hpi.uni-potsdam.de/meinel/bross/feedcrawler
'00bb892963ac734a8eeb681e23d01395',  // Twitterbot/0.1
'a42e96a3dc3f855d3d60264307ad28aa',  // http://support.embed.ly/home
'ba1b1f5bd2fff182d02bebcae1238b62',  // Twitturly / v0.6
'b02ebc3b48874c4b0a101a709dbdd379',  // acquia-crawler
'be659eb627ef3c2fd42705e4e5d39044',  // ThingFetcher; (+http://thinglabs.com)
'2687c1f1bb7f6803a4f1ee2896a2e01e',  // Superfeedr: FeedDiscovery/1.1
'8ccb889b7d69bb8e0453258c55db3c07',  // SurveyBot/2.3 (DomainTools)
'2708e9c06a83250e6bcab443f73c71e3',  // http://page-store.com/
'6afae750923289d89eb638a6a7ae8947',  // librabot/2.0 (+http://academic.research.microsoft.com/)
'9c1bb51b327c07997fe1971925a5149e',  // librabot/2.0 (+http://academic.research.microsoft.com/)
// Flash (eg: WP image uploader)
'd22d47791a32b40fc841754dde0784e4',  // Adobe Flash Player 9
'4f4c2a419649c56cad7d3cca8dc9eeb6',  // Adobe Flash Player 10
'11ef0d39f0f9d3fb96063c9b867198aa',  // Shockwave Flash
// Nagios
'f13c1c8a68a515732ff72cc498f66dc4',
'5bffca1b20894579bd276a36a6f5ca86',
// Browsers
'c54cc4c78527d6b3d1a6c4e2c7985b2d',  // FR - Windows XP - Explorer 6.0
'f60a395ee95725480e2f56a68dbf6521',  // FR - Windows XP - Explorer 6.0
'ec0ca634072614e1a83522e857a6e0b7',  // ES - Windows XP - Explorer 6.0
'14387686ae699c119579e09342d35c65',  // IN - Windows XP - Explorer 6.0
'b5f86f22b42c905d30ecd11d0e767bb1',  // FR - Windows XP - Explorer 8.0
'98382a7339a5175ad37a386a5bf74b89',  // BR - Windows XP - Explorer 7.0
'98382a7339a5175ad37a386a5bf74b89',  // BR - Windows XP - Explorer 6.0
// RSS
'5b2361fdf1c6e31b99a55def5adfea6e',  // SimplePie/1.1.1 (Moonmoon)
'48f48b60e48af65e9fc20bc99971e76d',  // US - Apple-PubSub 65.20
'7322bf08f0f24445f48613e0c3488610',  // FR - Apple-PubSub 65.20
'8e756bbd8fd1b053856ce00735d9fe6f',  // US - Apple-PubSub 65.19
'7ac14d372759acefcf867c15ffeffec0',  // GB - Apple-PubSub 65.19
'9acfacf72fee443f8ee3c437ed847fac',  // FR - Apple-PubSub 65.19
'fdc2442a41e8d683b8583643489f59e4',  // DE - Apple-PubSub 65.19
'4749f1c7f7346a7f1f5b7f0d0e543467',  // JP - Apple-PubSub 65.19
'1ab88260c3c9d004408d693c7cd770fb',  // IT - Apple-PubSub 65.19
'2569e538829f558ef9eafa94ba67718e',  // PT - Apple-PubSub 65.19
'd25f04999693ba3952141a7ef4c10dc2',  // TH - Apple-PubSub 65.19
'21f0cb2cdf1f6f93f5a3b10e577df842',  // US - Apple-PubSub 65.12.1
'34ce75b388f7d016655d3e8f4e9b4dc3',  // FR - Apple-PubSub 65.12.1
'60248970d4202b916d13bc9634f1c9cf',  // IT - Apple-PubSub 65.12.1
'9056d759336e5c04a43e8fc53d4d83f5',  // DK - Apple-PubSub 65.12.1
'54cc3a0885c3de1d510251a77b893a8d',  // DE - Apple-PubSub 65.12.1
'5b9716640f9bda92f449edb1ab65ad75',  // BR - Apple-PubSub 65.12.1
'd69a16e600d8bcf2e62247e50b939bf6',  // TW - Apple-PubSub 65.12.1
'ae956247ba90b100d8a6f84f56694f2f',  // KR - Apple-PubSub 65.12.1
'f9a94ccbf9a5c4a1d89a325ec48b4a82',  // JP - Apple-PubSub 65.12.1
'08d540eadd7470c7cff1270c0e34c7ea',  // ES - Apple-PubSub 65.12.1
'4651e1f2972c049bcd63cdc7fdaa5e47',  // US - Apple-PubSub 65.11
'd364febb3fb6afee911877589738e6e4',  // FR - Apple-PubSub 65.11
'52790b3c1e9e7707e420725a0e6fd161',  // DE - Apple-PubSub 65.11
'4d908f72752d2a627f8d057ef18b86a0',  // ES - Apple-PubSub 65.11
'b29c7c4d8fa9ebf7847cccc913f2a3f9',  // NL - Apple-PubSub 65.11
'38f04bbd00765a16fac050023827723c',  // BR - Apple-PubSub 65.11
'8808c9db1008304e0e77cdb45cd852c9',  // FR - Apple-PubSub 65.1.4
'2a24a50989d3d498054a46cb252e2f93',  // US - Apple-PubSub 65
'4426ccebdb8efd4884ad3c8b187bbbd0',  // FR - Apple-PubSub 65
'b906752d12c59f44cc54f26e090a0c6d',  // FR - AppleSyndication
'456b14879e2280c76c1c949b805f821d',  // FR - AppleSyndication/56.1
'f25748fc2c3c617fba53199f337f7131',  // IT - AppleSyndication/56.1
);
return $known_fingerprints;
?>