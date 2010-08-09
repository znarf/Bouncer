<?php
$banned_fingerprints = array(
// Most Popular
'cd3ea020baf312a8dc8e12e8ecd524ab',
// Browsers
'800debb6bf463b5c72336a2ab6c76176', // JP - Windows XP   - Explorer 6.0   (.asianetcom.net),
'd4a3108acff0dd17752192df5d175333', // KR - MacOS X 10.5 - Firefox 3.0.6
// Comment Spam
'd72e329d83dbc23e65b7d8412dbe31b8', //  *  - Windows XP    - Explorer 6.0
'00e9cd8e4ffc0d2d5ab8236bc062773b', //  *  - Windows XP    - Explorer 6.0
'14ae981d20516d71505ed67a4564c7d5', //  CN - Windows XP    - Explorer 6.0
'863791545df8ec86ddda02d961fb332c', //  US - Windows XP    - Explorer 6.0
'476f7382c6de03533d1d84302a3c16d6', //  PL - Windows 7     - Explorer 7.0
// BM Spam
'2d427eaca8980ae196a9c003780057c8', //  *  - Windows 2000  - Explorer 6.0
// Bots
'6135b0ff46c9c6168ef13c221f3528b5', // SN - DTS Agent
'dcf57bea9a755eea1f8de282f4c3279a', // CN - Indy Library
'61dc815933fe47026e1cdf0f5dc7ffbc', // CN - Indy Library
'ea61161ef904102c26654f77fbc1af27', //  * - larbin 2.6.3
'e001df5efb3b7e2392430eea763ef765', //  * - binlar 2.6.3
'c3519edceadd1945fdeb626ad9c2a5fe', //  * - larbin 2.6.3
'1eee5009bfa152ad21b863af9cb134c6', //  * - page_test - larbin 2.6.3
// Security Exploits
'1145d630273e73472fb728301b95b362', //  * - dex Bot Search
'bd3ddc784afb3d4c98278e86cd2e38a8', // RU - Casper Bot Search
'b0f23770497882623698007998676f4c', //  * - MaMa CaSpEr
'5d5185a11ffe776821edd761a57f87ad', //  * - SunOS 5.7 - Netscape 4.76
// Fake Google
'a8c59cca16eb7d753659ae07aa6745bb',
'834f20c97f18fc1fa04ddd63f11ec2e8',
'b1c0361564c267d2786dd731a346af77',
'b56beeee346852e3f2928964b2eb97c7',
// Lib WWW
'4380852845d037820bfd4e0b9ea4e555', // libWWW 5.64
'fb01926b55f6a61d0d619dca6a6e905b', // libWWW 5.65
'dd2cce743b64f2b797fa3bba306f387a', // libWWW 5.76
'c67c0196c4ad44c35b1f2f3160a96fcd', // libWWW 5.79
'f706d25efc54ba36bbc61a288612071e', // libWWW 5.800
'020801d2d515f2fa3a50d70dd8f846be', // libWWW 5.808
'2a50b1f21abfc30c5b6494d19e672866', // libWWW 5.803
'6ca73eacc292a19896f58dd5b17b6652', // libWWW 5.805
'1d38e98da2e7509bb37d14989560800f', // libWWW 5.810
'a029b4d65c51fcd4d67551c0ae97f529', // libWWW 5.811
'95dde41a36a4c266b9bc520a9d4a8f1f', // libWWW 5.812
'bfe5caacf3af775ccc94e927a5737372', // libWWW 5.813
'9405658d078823e6df4c8429ea72be46', // libWWW 5.816
'49a2baabfc2a9ed50086f75b4dda5a0b', // libWWW 5.825
'63fe534afc8cfc5afb0c90c40619dafa', // libWWW 5.831
'ca6b56b9244a2201fedad435c76333c2', // libWWW 5.833
'953a6b376f8c3cf19d6a99cd52f933bc', // libWWW 5.834
'10cabc19da6511f5655f29c4aa871d85', // libWWW 5.836
// Java (text/html, image/gif, image/jpeg, *; q=.2, */*; q=.2)
'013c9e2e72d01a71528ea3e5828287f0', // Java/1.4.1_04
'b9d80793083ab72eecb293c49a4e97be', // Java/1.5.0_04
'fa1d0fa9804e415239b734d215563a0d', // Java/1.6.0-rc
'ecc03938cc08478c23e6fe702ae7b715', // Java/1.6.0_0
'84b593f1747616af0c09232b7f7435e8', // Java/1.6.0_02
'dcf79fc274f3da000292130426613878', // Java/1.6.0_04
'c100a6673ba6f6bc15df8ac130939659', // Java/1.6.0_05
'917375f84c04b9515fee277caa61a1c9', // Java/1.6.0_06
'5aa8fd37461acc8b03fd6c1c59f45671', // Java/1.6.0_07
'9832958bd7e3208b73dda84c05055e1f', // Java/1.6.0_10
'7611f5198af4e6cb85ea0edaa1144c31', // Java/1.6.0_11
'f53bff6acc2e26e7b78da6831eb467f0', // Java/1.6.0_12
'aa8ba6fd98fd9085ec08ede5cd67b941', // Java/1.6.0_14
'28a71f390ac85707e2f71fda43de578a', // Java/1.6.0_16
'5416d4958dd6569e17f2269de5f64f46', // Java/1.6.0_17
'b1844cc5196d7f0642a7f390e2d028f7', // Java/1.6.0_18
'4616e11d99bdf4cdf877be2b67cb61c2', // Java/1.6.0_19
'cd0e52f56c70ca6b149c9d41af4f698b', // Java/1.6.0_20
'7b8a8409e605ab281c8efc7c4366fd02', // Java/1.6.0_21
// Various
'69c914f8638b73983cc50aaad91257f1', // Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
);
return $banned_fingerprints;
?>