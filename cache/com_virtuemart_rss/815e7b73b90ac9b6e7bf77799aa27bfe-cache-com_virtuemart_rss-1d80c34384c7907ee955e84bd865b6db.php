<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:72:"https://virtuemart.net/news/virtuemart-4-2-including-new-paypal-checkout";s:5:"title";s:44:"VirtueMart 4.2 including new PayPal Checkout";s:11:"description";s:3372:"<p>Yes a new mayor sub version as it would be sub number 24 already. On the other hand, this version works now very well on Joomla 3 and of course Joomla 4.3 and PHP8.2. So most things have settled in 4.0.22 and compared to last autumn we had almost no bugs to fix. So this stability should also be reflected in the version number and therefore 4.2!<br />Some have already noticed, after years of maintaining our root server on our own, our developer server went down. But thanks to our members, we can leave the do-it-yourself attitude and have our infrastructure repaired and maintained by a professional team in the future.<br />So there is no feature and bug fix list this time available. I thank our members for their patience and for the forum moderators for the good job keeping my back free. Of course, I will now focus more on the community again.</p>
<p><img src="https://virtuemart.net/images/partners/PayPal/PayPal_trusted_cp.png" alt="goAheadPayLater" width="558" height="201" style="display: block; margin-left: auto; margin-right: auto;" /></p>
<h3>PayPal Checkout</h3>
<p>VirtueMart and PayPal has always been a strong combination. Almost every VirtueMart store used PayPal. PayPal has been VirtueMart's first Platinum Partner for 10 years now. Their steady commissions have supported the funding of the VM project since years. The plugin was revised several times and got new features like SmartButtons, but still on the old API. Our provided plugin became an oldtimer.</p>
<p>The VirtueMart Team and PayPal are very proud to release the new PayPal Checkout Plugin working with the PayPal REST API V2. <br />You can expect a perfect seamless integration with VirtueMart, all workflows are combined. Just trust the buttons.</p>
<p>The new plugin also introduces Venmo for US merchants. Very interesting for European merchants are the "Country-specific payment methods", which allow local payments. Customers can use their addresses stored at PayPal or provide a new shipping address.</p>
<p>Advanced Credit Card works with 3Dsecure to protect the merchant and the customer. Credit card information is entered in a high-tech secured box and no sensitive data is processed on the shop server.</p>
<p>Read more about the PayPal features here&nbsp;<a href="https://virtuemart.net/partners/our-partners/987-platinum-partner"><img src="https://virtuemart.net/images/partners/PayPal/PayPal_logo.png" alt="PayPal logo" width="293" height="78" /></a></p>
<h4>Simple Configuration</h4>
<p>Simply use the convenient merchant onboarding provided in VirtueMart. Just click on the merchant Onboarding button in the paymentmethod edit view. Use the login in the popup and let PayPal configure the basics of the plugin for you. The connection to the iStraxx UG (haftungsbeschränkt) is, in opposite to some other shop systems, without any granted rights. It is just for the convenience.</p>
<p style="text-align: center;"><a href="https://virtuemart.net/releases/com_virtuemart.4.2.0.10905_package_or_extract.zip" class="btn btn-primary">DOWNLOAD VirtueMart 4.2.0<br /> NOW</a></p>
<footer>
<p><span style="font-size: 8pt;">18 Morning Consult - The 15 Most Trusted Brands Globally. March 2021. Morning Consult surveyed over 330,000 consumers across 10 international markets to provide a global view on the current state of consumer trust across brands</span></p>
</footer>";}i:1;O:8:"stdClass":3:{s:4:"link";s:89:"https://virtuemart.net/news/bugfix-release-4-0-20-compatible-joomla-4-3-and-php8-2-mysql8";s:5:"title";s:63:"Bugfix Release 4.0.20, compatible Joomla 4.3 and PHP8.2, MySQL8";s:11:"description";s:3737:"<p>It's been a busy few weeks since our last release.</p>
<h3>Thanks to our new support members</h3>
<p>Funding by membership is progressing towards the way I hoped it would. If the trend goes on I will be able to spend much more time on VM core development. More important, however, is the possibility of financing infrastructure upgrades or paying developers for a specific task.</p>
<p>From our side, there is still a lot of work to be done.&nbsp;<br />I updated the module displaying the purchased license, whilst still far from perfect, it represents a good initial step.</p>
<h3>Apologies for the delay in answering our support tickets</h3>
<p>There was a siginificant short term increase in support tickets, in the main these were focussed on very similar root problems.<br />Answering all tickets immediately would have cost a lot of time, so I used this time to solve the issues and to present the solution as quickly as possible. This approach was the best way of utilising development time and testing, but has taken longer than expected.</p>
<h3>The dilemma I faced</h3>
<p>Of the problems reported, two were having negative impacts on the operation of our customers platforms and lead to impacts on multiple touchpoints within the VirtueMart component.</p>
<p>Most significant in terms of impact was the registered user experience when trying to login and the report of "cannot use joomla login module". This was due to how Joomla 4 now handles the GET, POST and REQUEST data, which impacts all page calls. This issue lead us to discover that the Joomla 4 implementation of VirtueMart 4 was unexpectedly less than optimal. Joomla 3 handles this area differently and was not impacted. I trust that this problem is now resolved.</p>
<p>Secondly were reports of vendors not being able to use the frontend administration. Obviously very challenging for some of our businesses and resulting in a lot of vendors updating their extensions.Investigating that problem I noticed a big quirk due an old pattern. I just checked it, it is there since we have vmmodel (Mai/2011). This pattern tries to recieve the id for the model in the constructor. Prior the router just used own queries, but new optimisations use the category model to reduce the sql. Remember the router is just finding the GET data, while just calling a model tries to use the GET data, which is not there yet. Removing this lead to a cascade of problems, easy to solve, but needed again a lot of testing and any bug was "serious" directly (cannot register, cannot store user,...)</p>
<p>Both problems lead all the time to "strange" bugs and had to be cleaned up asap.</p>
<h3>Rapid development of Joomla, PHP and VirtueMart</h3>
<p>The software development and support wheel is turning fast at the moment.</p>
<p>Support for PHP 8.2.xx is progressing fast. In the last weeks approx 40 new commits were made in the repository as you can see here: <a href="https://dev.virtuemart.net/projects/virtuemart/repository/revisions">https://dev.virtuemart.net/projects/virtuemart/repository/revisions.</a><br />Significant effort has been expended and I hope you can see that the project is moving forward and is on the right path. We anticipate that we are nearing the point where we will be back to a 6-8 month release cycle.</p>
<p style="text-align: center;"><a href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail" class="btn btn-primary">DOWNLOAD VirtueMart 4.0.20 with the Membership<br /> NOW</a></p>
<p>The joomla updater for VirtueMart works, but you need at least version 4.0.14. Just download the core one time manually from the <a href="https://extensions.virtuemart.net/my-orders-downloads">Order/Download</a> page.</p>";}i:2;O:8:"stdClass":3:{s:4:"link";s:90:"https://virtuemart.net/news/effective-and-sustainable-funding-with-a-virtuemart-membership";s:5:"title";s:62:"Effective and sustainable funding with a VirtueMart Membership";s:11:"description";s:4841:"<p><img src="https://virtuemart.net/images/Fraunkirche_Dresden_2020_by_Zoja_Milbers.png" alt="Fraunkirche Dresden 2020 copyright by Zoja Milbers" width="690" height="173" /></p>
<p>Some people from the community have been saying for years, that we should make a paid version for better funding of the project. I was unsure that this would be a way forward. However, the last year has had me re-evaluate the completely "free to use" model and whether such a strategy is sustainable or good for the future of VirtueMart.</p>
<p>One clear issue is that, while I am busy with updating and testing the core, third party developers work to quickly update their extensions and earn revenue immediately on release of the core. Unfortuantely the majority of my ISTRAXX extensions are not able to be updated for compatibility until after the core is released which results in customers being negatively impacted by the delay, a major loss in user installations and significant loss in revenue for my business.</p>
<p>Additionally, in order to make this current business model economically viable, I have to direct significant efforts to bespoke customer projects, effectively further reducing the time available for core developement. This was a major factor in the speed in which the latest version of VirtueMart could be delivered. - Joomla 4 compatibility along with PHP 8.0 support required significant core changes.</p>
<p>We also have our wide user community offering a lot of suggestions, solutions and fixes. A tiny feature, for example, for which 3 community members donate their 30 minutes, has to be discussed, tested and eventually a core solution must be optimised by myself to ensure a compatible and long term resolution.</p>
<p>Many of you will wonder why these tasks fall on me alone and why this work has not beeen distributed to supportive interested parties. Such a distributed and loosely managed approach was used in the past with VirtueMart and it eventually led to a codebase that was a mish mash of confused, personal style, bespoke, often hard coded and short term "solutions" that rendered VirtueMart too unweildy for people to maintain or develop in a cohesive and coherent manner. Today a key part of my role is that of VirtueMart Product Manager, taking ideas and features forward and ensuring code compatibility and flexibility such that it is suitable for multiple ecommerce use cases now and in the future, with the additional workload of creating releases and associated documentation - weeks and months of time is being expended.</p>
<p>Over the many years core VirtueMart has helped secure significant revenues for: customers selling products, agencies selling compatible plugins and agencies building strong revenue generating customer bases throught the use of VitueMart. Unfortunately only a tiny fraction of these businesses and customers have made any contribution to the ongoing work of the VirtueMart business, even when it was obvious how such a contribution could be made. This is not a unique situation, but it is one that is misaligned and unsustainable. VirtueMart clearly needs a better funding model. On analysing the sold memberships over the last years, I have found that less then 1% of virtuemart shops are members, incredible but true!</p>
<p>The new approach is that the core code will still be free in the SVN, but the new installer or package will only be available with a membership on extensions.virtuemart.net. <br />I have added a small manual showing how to update VirtueMart by the SVN directly <a href="https://docs.virtuemart.net/tutorials/installation-migration-upgrade/246-how-to-update-virtuemart-from-svn.html.">https://docs.virtuemart.net/tutorials/installation-migration-upgrade/246-how-to-update-virtuemart-from-svn.html.</a> <br />Users willing to expend the time and effort to learn how to do this update and implement it via SVN should understand, in a very small way, how much effort one tiny aspect of VirtueMart takes to maintain.</p>
<p>There will be still an older VirtueMart version on VirtueMart.net. This will be updated less frequently than it is currently.</p>
<p>These slightly outdated versions will be good enough to start with VirtueMart, but the convenience to update to the latest VirtueMart version with one click will not be offered unless you support the project with at least a Bronze membership.</p>
<p>You can still install the latest version via our SVN, but for the small price of a basic membership you will save a lot of time and effort as you will be able to update VirtueMart to the latest version with the click of a button.</p>
<p style="text-align: center;"><a href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail" class="btn btn-primary">DOWNLOAD VirtueMart 4.0.14 with the Membership<br /> NOW</a></p>";}i:3;O:8:"stdClass":3:{s:4:"link";s:83:"https://virtuemart.net/news/joomla-4-update-is-fixing-a-serious-vulnerability-today";s:5:"title";s:55:"Joomla 4 update is fixing a serious vulnerability today";s:11:"description";s:728:"<p>Dear VirtueMart users,</p>
<p>a Joomla 4 update is fixing a serious vulnerability today at 4pm UTC.</p>
<p>Please be advised to update Joomla 4 as soon as the update is available.<br />In a similar case Joomla 3 sites were getting hacked hours after the update was available.</p>
<p>The vulnerability is reported to exist only in Joomla 4 not Joomla 3.</p>
<p>Find the security report here:<br /><a href="https://www.joomla.org/announcements/release-news/5877-joomla-4-2-8-important-security-announcement-patch-available-soon.html">https://www.joomla.org/announcements/release-news/5877-joomla-4-2-8-important-security-announcement-patch-available-soon.html</a></p>
<p>Please update and stay safe<br />The VirtueMart Team</p>";}i:4;O:8:"stdClass":3:{s:4:"link";s:58:"https://virtuemart.net/news/virtuemart-4-0-12-release-news";s:5:"title";s:30:"VirtueMart 4.0.12 Release News";s:11:"description";s:5793:"<h3><img src="https://virtuemart.net/images/Panorama_Holzer_Kreuz_004.jpg" alt="Panorama Holzer Kreuz 004" width="690" height="107" style="display: block; margin-left: auto; margin-right: auto;" />Improved compatibility with Joomla 4.2 and PHP 8.1 plus category tree loading speeded up by factor 10</h3>
<p style="text-align: justify;">This version took longer than expected, as the team faced several compatibility issues this time. Joomla 4.2 caused more problems than Joomla 4.0 did back then. Suddenly, the 'add to cart' function didn't work anymore, opening shipping/payment methods caused a loop, saving with timestamp failed and so on.<br /><br />In addition, the changes and removed functions/methods/modes in PHP 8.1 caused further trouble. For example, this caused searches with special characters to not work. <br />When we were about ready, a customer with more than 8000 categories (in 5 levels) tested the new version with a terrible result. A lot of tweaking was done on the category tree loading process with an improved cache. The idea of the new cache was to store the cached array instead of a rendered result, so the cache is used by almost every function to list categories. It was super fast with the cache created, but building the cache took 29 seconds for 8000 categories.<br /><br /> I took a closer look, and the reason for the error was simple: The cache saved the result every time there was a new result. The solution was to save it only once at the end. That helped a lot, but it still took 8 seconds to build the cache. I told the customer that there was another idea to make it faster, and he agreed to buy a membership to finance testing this idea. The new idea loads the entire table at once and does the tree sorting directly in php. The new result is phenomenal, loading the category tree via ajax now takes only 800ms without cache for the 8000+ categories. With cache it is about 650ms. Of course this is all measured on my computer, and of course the result is a bit different each time. But in more than 10 tests it was between 780-830ms. On the customer's real live server it is even a bit faster.</p>
<p style="text-align: justify;">After the release is before the release. There is still a lot to do for a seamless integration of VirtueMart into Joomla 4, because there is still a lot of change in the Joomla 4 development. From my humble point of view, Joomla 4.0 was not really stable when we look at the problems we got with Joomla 4.2. But the real problem pressure comes from the compatibility issues with PHP8. So our current focus is still on a stable Joomla 3.10.x with PHP 8.</p>
<p>and it happened again, that the release was ready. But the new compatibility fixes needed compatibilty fixes ;-)</p>
<h4>New Options:</h4>
<ul>
<li>New option BrowseProductCartattributeOnly. This can enhance the speed browsing products</li>
<li>Cart; added hidden configs enableCartMerging and enableCartLoad (by stAn)</li>
</ul>
<h4>Improvements FOR users</h4>
<ul>
<li>Customfields, translation are shown in the BE</li>
<li>Free shipment is calculated without shipment cost</li>
<li>Fix for edting order items (by Quorvia)</li>
<li>J4 fixed popup of related products/categories</li>
<li>added missing empty option to customlist, customlist shows now by default only published customfieldsadded missing empty option to customlist, customlist shows now by default only published customfields</li>
<li>customfield dropdown in product edit reacts adding the same customfield the second time</li>
</ul>
<h4>Improvements/Fixes under the hood</h4>
<ul>
<li>Added extra checks, so that unbrowseable discontinued products cannot be added to the cart or get removed</li>
<li>GetNeighborProducts enhanced it by parsing for more than one orderby correctly. It is better, but still not perfect. Perfect works only with temporarly lists.</li>
<li>Removed mf_name from product search</li>
<li>Important enhancement for router cache. The cache for the routing is now stored within the maincontroller after everything is executed, to ensure just one call</li>
<li>Enhanced cache in category.php</li>
<li>Added program cache to getParentsList</li>
<li>Fixed wrong limit in getCategoryTree</li>
<li>Calls for category tree without media now.</li>
<li>Fixed fallback for second language</li>
<li>0.0 prices are no longer inherited</li>
<li>Fixes in router for the manufacturer views</li>
</ul>
<h4>Compatibility</h4>
<ul>
<li>Added mb_decode_mimeheader to subject of mails</li>
<li>added check if function exists for mb_decode_mimeheader</li>
<li>Added setConvertInt analogue to setConvertDecimal to define the variables which must be converted to integer (mysql strict mode) and added some of them (for example userinfo)</li>
<li>Replaced some overlooked query() against execute()</li>
<li>Enhanced deletion of cookie, added check if function exists</li>
</ul>
<h4>Developers:</h4>
<ul>
<li>Use for filtering of strings vmSpecialChars and vmSpecialChars_decode.</li>
<li>Use for tables setLockable if applicable</li>
<li>Added vRequest::setRouterVars(); to main controllers</li>
<li>Enhanced vRequest, can now filter given array</li>
<li>Removed default for text to avoid compatibility problems with some dbs</li>
<li>Enhanced the currency object, can now be created with custom exchange rate</li>
<li>Enhanced vmecho, works now with variables of class vmecho (works standalone)</li>
<li>Added lastAddedProduct to the cart object</li>
<li>Added hidden configs for CLI; for max_execution_time use givenMaxTime and memory_limit givenMaxRam</li>
<li>Added getInt and getFloat to vmConfig</li>
<li>updated jQuery.UI min to 1.13.2</li>
</ul>
<p style="text-align: center;"><a href="https://virtuemart.net/download" class="btn btn-primary">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}}s:6:"output";s:0:"";}