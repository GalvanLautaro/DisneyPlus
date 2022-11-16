<?php
    session_start();

    if(isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
        
    }
?>

<!DOCTYPE html>
<html lang="en-ar" class="en-ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <title>Disney+ Day | The Best Stories in One Place</title>
    </head>
    <body class="typeramp-avenir">
        <header>
            <nav class="nav pre-sticky">
                <a href="LoginDisney/login.html" class="small secondary">
                    <span>LOG IN</span>
                </a>
            </nav>
            <nav class="nav post-sticky">
                <a href="#" class="small image">
                    <span>
                        <picture class="sm-130 md-160 lg-180 logo">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original" width="1045" height="569" alt="Disney+ Logo">
                        </picture>
                    </span>
                </a>
                <a href="RegisterDisney/Register.html">
                    <span>SIGN UP NOW</span>
                </a>
                <a href="LoginDisney/login.html" class="small secondary">
                    <span>LOG IN</span>
                </a>
            </nav>
        </header>
        <main>
            <section class="hero sm-align-center md-align-center lg-align-left bg-100 mobile-pushdown-large tablet-pushdown-large desktop-pushdown-none">
                <div class="content container-medium sm-text-center md-text-center lg-text-center">
                    <div class="spacer-10"></div>
                    <h3>Enjoy the greatest stories, all in one place.</h3>
                    <picture class="sm-180 md-320 lg-320 logo">
                        <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original">
                        <img src="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original" width="1045" height="569" alt="Disney+ Logo">
                    </picture>
                    <ul class="grid-list one-column mobile-one-column top">
                        <li class="grid-item center both-ends target-#price-selector">
                            <a href="#" class="large primary backgroundColorOverride" style="background:#6421ff">
                                <span>Choose your plan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                    <div class="background sm" style="background-image:url(https://cnbl-cdn.bamgrid.com/assets/533f790016017de0fa6affc30df24d567892f206ecd7467614b99bb854d2ab2e/original)"></div>
                    <div class="background md" style="background-image:url(https://cnbl-cdn.bamgrid.com/assets/533f790016017de0fa6affc30df24d567892f206ecd7467614b99bb854d2ab2e/original)"></div>
                    <div class="background lg" style="background-image:url(https://cnbl-cdn.bamgrid.com/assets/464d8592d684db66834fa1406231c0c24513c2aea3f07326c781a68f21301538/original)"></div>
                    <button class="hint">
                        <span>
                            <svg class="down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <rect width="48" height="48" fill="none"></rect>
                                <path d="M36.63,18.37a1.37,1.37,0,0,1,2.15.37,1.7,1.7,0,0,1-.3,2.06L25.4,32.64a1.37,1.37,0,0,1-1.85,0l-13-11.84a1.71,1.71,0,0,1-.29-2.06,1.37,1.37,0,0,1,2.15-.37l12.11,11ZM24.25,31.42a.38.38,0,0,1,.46,0l-.23-.21ZM11.71,19.55s0,.06,0,0Zm25.61,0h0Z"></path>
                            </svg>
                        </span>
                    </button>
            </section>
            <section id="plan-selector" class="center target-#plan-selector">
                <h1>Choose your plan</h1>
                <ul class="grid-list three-column mobile-one-column middle">
                    <li class="grid-item center both-ends card">
                        <div>
                            <picture class=""><source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/1c972e7d40ab087035b01ff104cf40efa4cf804b0e817e93b4bc00f0c72cf276/original"><img src="https://cnbl-cdn.bamgrid.com/assets/1c972e7d40ab087035b01ff104cf40efa4cf804b0e817e93b4bc00f0c72cf276/original" width="420" height="120" alt="Disney+ Logo">
                            </picture>
                        </div>
                        <div class="griditem-footer">
                            <h3>ARS 149/month (final)*</h3>
                            <p class="medium">With Disney+ stream the latest releases that come from the cinema, originals and classics.</p>
                            <a href="RegisterDisney/Register.html" class="medium primary backgroundColorOverride" style="background: #6421ff;">
                                <span>Sign Up Now</span>
                            </a>
                        </div>
                    </li>
                    <li class="grid-item center both-ends card" style="background-image: url(https://cnbl-cdn.bamgrid.com/assets/f086458ec6d65657a75c62d8d44a887d06d6db3670b69bbedefd06dc68d5e9dd/original);">
                        <div>
                            <picture>
                                <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/551da487c372e19edf47cde71d0b9b339164808f310cdc7f9f46bb482d725323/original">
                                <img src="https://cnbl-cdn.bamgrid.com/assets/551da487c372e19edf47cde71d0b9b339164808f310cdc7f9f46bb482d725323/original" width="420" height="120" alt="Combo+ Logo ">
                            </picture>
                        </div>
                        <div class="griditem-footer">
                            <h3>ARS 995/month (final)*</h3>
                            <p class="medium">Get Disney+ and Star+ together. Save and enjoy now the two services for a unique price.</p>
                            <a href="RegisterDisney/Register.html" class="medium primary backgroundColorOverride" style="background: #6421ff;">
                                <span>Sign Up Now</span>
                            </a>
                        </div>
                    </li>
                    <li class="grid-item center both-ends card">
                        <div>
                            <picture>
                                <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/c5c6717d6568db0a7cbc92dea58f4b413bbea717276c9a047d8ba29deab9bf3b/original">
                                <img src="https://cnbl-cdn.bamgrid.com/assets/c5c6717d6568db0a7cbc92dea58f4b413bbea717276c9a047d8ba29deab9bf3b/original" width="420" height="120" alt="STARZ Logo">
                            </picture>
                        </div>
                        <div class="griditem-footer">
                            <h3>ARS 1.150/month (final)*</h3>
                            <p class="medium">Disney+, Star+ and STARZPLAY in a special plan. Buy now the three services together.</p>
                            <a href="RegisterDisney/Register.html" class="medium primary backgroundColorOverride" style="background: #6421ff;">
                                <span>Sign Up Now</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <p class="footnote">
                    <br>
                    *The price may vary if billed through other platforms. Third party charges may apply.
                </p>
                <p class="footnote">
                    *Disney+ Day: Promotion valid from 9/8/2022 to 9/19/2022 for new Disney+ subscriptions. Upon redeeming this offer, you will be charged the then-currently monthly retail price of your territory on a monthly basis: ARS
                    385/month (final). Cancel anytime, effective at the end of your billing period. You must be 18+ years old to subscribe. For more information, visit DisneyPlus.com. Cannot be combined with Combo+ or with the combined
                    offer of Disney+/Star+/STARZPLAY. Visit ComboPlus.com.
                </p>
            </section>
            <section class="sidealign side-by-side text-container-right mobile-container-bottom">
                <picture class="sidealign-image">
                    <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/f09e9344c17a11eb6aaa054704cdb169ec8c2f9a661a5119994c632c47d72dd1/original">
                    <img src="https://cnbl-cdn.bamgrid.com/assets/f09e9344c17a11eb6aaa054704cdb169ec8c2f9a661a5119994c632c47d72dd1/original" width="1200" height="960" alt="4 Devices showcasing the Disney+ product on TV, Mobile, Laptop, and Tablet">
                </picture>
                <div class="text-container">
                    <h2>Watch the way you want</h2>
                    <p></p>
                    <p>Enjoy the big screen experience on your TV, or watch on your tablet, laptop, phone and more. You can watch an ever-growing selection of titles in 4K. Plus, you can stream on 4 screens at once, so everyone's happy.</p>
                </div>
            </section>
            <section id="" class="center">
                <h2>Exclusive Disney+ Originals</h2>
                <p class="large">Watch never-before-seen movies, series, shorts and more from the world's greatest storytellers - only available on Disney+</p>
                <ul class="grid-list three-column mobile-two-column middle round-image-corners">
                    <li class="grid-item center">
                        <picture class="">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/ac915426b021288c04f8908ce12d080dcd70953fe0fac328383c7d5e3a253843/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/ac915426b021288c04f8908ce12d080dcd70953fe0fac328383c7d5e3a253843/original" width="630" height="378" alt="The Beatles: Get Back">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/63c1be4d37c015f7861a3a7c284c5afa74c77d29d609f56a5400f1f34d85c5b4/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/63c1be4d37c015f7861a3a7c284c5afa74c77d29d609f56a5400f1f34d85c5b4/original" width="630" height="378" alt="The Book of Boba Fett">
                        </picture>
                    </li>
                    <li class="grid-item center target-test-grid-item">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/1742d878d2d5475eae2afba94902b3b41b313fe1f0897579c3293c5b82c70693/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/1742d878d2d5475eae2afba94902b3b41b313fe1f0897579c3293c5b82c70693/original" width="630" height="378" alt="What If">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/8572f24f7ff388caa7c786a821cb2a34030141f5d81ea1c35444bad71faf1c0d/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/8572f24f7ff388caa7c786a821cb2a34030141f5d81ea1c35444bad71faf1c0d/original" width="630" height="378" alt="Olaf Presents">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture class="">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/24069b782e1b1531b7197153b6ac1819191ca448aa4576cdd3767fa47270aae3/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/24069b782e1b1531b7197153b6ac1819191ca448aa4576cdd3767fa47270aae3/original" width="630" height="378" alt="Disney Pixar Luca">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/3b3873e224ad242c3881403e14bac752101fe4658900f5bb23b0eaab77313797/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/3b3873e224ad242c3881403e14bac752101fe4658900f5bb23b0eaab77313797/original" width="630" height="378" alt="Monsters at Work">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/5a18c94c533869bbe5abeea4e94d9866d3f48f0d5aa6cb4b6a40e91d4c281c2b/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/5a18c94c533869bbe5abeea4e94d9866d3f48f0d5aa6cb4b6a40e91d4c281c2b/original" width="630" height="378" alt="Welcome to Earth">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/c6a366b03bb9f332381cf85c8aaf93924540ed1a3dbc601d050bfcb52080a54e/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/c6a366b03bb9f332381cf85c8aaf93924540ed1a3dbc601d050bfcb52080a54e/original" width="630" height="378" alt="Hawkeye">
                        </picture>
                    </li>
                    <li class="grid-item center">
                        <picture>
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/aa512dad255ee92217f66c4fd5a5f01790fb718230f6ef99c4a8ac924c2c4c70/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/aa512dad255ee92217f66c4fd5a5f01790fb718230f6ef99c4a8ac924c2c4c70/original" width="630" height="378" alt="Diary of a Wimpy Kid">
                        </picture>
                    </li>
                </ul>
            </section>
            <section class="sidealign overlay text-container-right mobile-container-bottom">
                <picture class="sidealign-image">
                    <source media="(max-width: 768px)" srcset="https://cnbl-cdn.bamgrid.com/assets/05eaa634ed3345fe39a45aa9e2effddb64ab990b8eeba3c48e59f3d02f9878df/original">
                    <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/76fc866dc046df64c9ae6cc4be1d0aacbe5b188299726c6312f6009e6143399d/original">
                    <img src="https://cnbl-cdn.bamgrid.com/assets/76fc866dc046df64c9ae6cc4be1d0aacbe5b188299726c6312f6009e6143399d/original" width="1943" height="1133" alt="The Lion King">
                </picture>
                <div class="text-container">
                    <h3>Download any series or movie</h3>
                    <p class="medium">Download whatever you want and watch whenever you want. Your favorites will always stay with you, even if your Wi-Fi won't.</p>
                </div>
            </section>
            <section id="devices" class="center">
                <h2>Available on your favorite devices</h2>
                <p class="medium"></p>
                <ul class="grid-list four-column mobile-two-column middle">
                    <li class="grid-item center">
                        <picture class="device">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/d73b7c534afd2af2a454dbd47bd6c766c70e334ce8137084e9cd25c2644dd267/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/d73b7c534afd2af2a454dbd47bd6c766c70e334ce8137084e9cd25c2644dd267/original" width="800" height="400" alt="Compute">
                        </picture>
                        <h3>Computer</h3>
                        <p class="medium">
                            Chrome OS<br>
                            MacOS<br>
                            Windows PC
                        </p>
                    </li>
                    <li class="grid-item center">
                        <picture class="device">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/00fb59319fa715222100d8a84d11bc7e23a42970b4f413c9e85166d0cfba9346/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/00fb59319fa715222100d8a84d11bc7e23a42970b4f413c9e85166d0cfba9346/original" width="800" height="400" alt="TV icon">
                        </picture>
                        <h3>TV</h3>
                        <p class="medium">
                            Amazon Fire TV<br>
                            Android TV<br>
                            Apple TV<br>
                            Chromecast<br>
                            LG TV<br>
                            Roku<br>
                            Samsung
                        </p>
                    </li>
                    <li class="grid-item center">
                        <picture class="device">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/51b639d2ebe97ee175975c29d42a90b0e043713856db8e5d6d9fb87b2b3a48c0/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/51b639d2ebe97ee175975c29d42a90b0e043713856db8e5d6d9fb87b2b3a48c0/original" width="800" height="400" alt="Game Consoles">
                        </picture>
                        <h3>Game Consoles</h3>
                        <p class="medium">
                            PS4<br>
                            PS5<br>
                            Xbox One<br>
                            Xbox Series X<br>
                            Xbox Series S
                        </p>
                    </li>
                    <li class="grid-item center">
                        <picture class="device">
                            <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/66475056e769443ef9a491a48dfa44059c8964890ae9ef7c4f69f322693c59d8/original">
                            <img src="https://cnbl-cdn.bamgrid.com/assets/66475056e769443ef9a491a48dfa44059c8964890ae9ef7c4f69f322693c59d8/original" width="800" height="400" alt="Mobile and Tablet">
                        </picture>
                        <h3>Mobile &amp; Tablet</h3>
                        <p class="medium">
                            Amazon Fire Tablets<br>
                            Android Phones &amp; Tablets<br>
                            iPhone &amp; iPad
                        </p>
                    </li>
                </ul>
            </section>
            <section class="center">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion-container">
                    <button class="accordion-btn h5"><span>What is Disney+?</span></button>
                    <div class="accordion-child">
                        <p><span class="medium">With Disney+, you get:</span></p>
                        <p><span class="medium">• A premium ad-free experience.</span></p>
                        <p><span class="medium">• The greatest stories of Disney, Pixar, Marvel, Star Wars, and National Geographic, all in one place.</span></p>
                        <p><span class="medium">• GroupWatch, a way to watch Disney+ together, even when you're apart.</span></p>
                        <p><span class="medium">• Unlimited downloads on up to 10 devices.</span></p>
                        <p><span class="medium">• Over 300 titles in 4K UHD and HDR.</span></p>
                        <p><span class="medium">• Up to 4 current streams.</span></p>
                        <p><span class="medium">• IMAX Enhanced. Available with certain Marvel titles and accessible on all devices where Disney+ is supported.</span></p>
                    </div>
                </div>
                <div class="accordion-container">
                    <button class="accordion-btn h5">
                        <span>Do you already have a Disney+ or Star+ subscription but want Combo+?</span>
                    </button>
                    <div class="accordion-child">
                        <p><span class="medium">With Combo+:</span></p>
                        <p><span>• </span><span class="medium">We will discount the value of your existing subscription to the Combo+ deal. (Yes, for the annual plan as well!)</span></p>
                        <p><span>• </span><span class="medium">If you have a monthly subscription, your monthly bill will be reduced to the Combo+ price.</span></p>
                        <p><span>• </span><span class="medium">If you have an annual subscription, we will divide your annual price into 12 equal parts and discount the monthly price to the Combo+ monthly payment.</span></p>
                        <p><span>• </span><span class="medium">A detailed email with all of the payment charges and deductions will be sent to your inbox as soon as you confirm your Combo+ payment method.</span></p>
                        <p><span>• </span><span class="medium">Remember you can cancel at any moment.</span></p>
                        <p><span class="medium">The Combo+ subscription is only offering a monthly plan at this moment.</span></p>
                    </div>
                </div>
                <div class="accordion-container">
                    <button class="accordion-btn h5"><span>What payment methods can I use?</span></button>
                    <div class="accordion-child">
                        <p><span class="medium">You can pay with a credit or debit card, Mercado Pago and even through third parties and local service providers. It is not mandatory to have a bank card.</span></p>
                    </div>
                </div>
                <div class="accordion-container">
                    <button class="accordion-btn h5">
                        <span>How can I stream the new 16+ and 18+ content?</span>
                    </button>
                    <div class="accordion-child">
                        <p>
                            <span>
                                Disney+ subscribers in Latin America will need to update the parental controls on their profile in order to access to the full catalog that includes 16+ and 18+ content. Users are able to restrict content in
                                each profile as well as add a lock PIN. If you are a subscriber and you prefer to keep your current parental settings, you will enjoy all Disney+ content in a 14+ environment, and you will have the option to
                                modify parental controls in the “edit profile” section any time.
                            </span>
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <footer role="contentinfo" id="footer">
            <div>
                <picture class="sm-130 md-160 lg-180 logo">
                    <source media="(min-width: 1025px)" srcset="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original">
                    <img src="https://cnbl-cdn.bamgrid.com/assets/7ecc8bcb60ad77193058d63e321bd21cbac2fc67281dbd9927676ea4a4c83594/original" width="1045" height="569" alt="Disney+ Logo">
                </picture>
                <div class="fine">
                    <a href="https://disneytermsofuse.com/english/" target="_blank" class="link">
                        <span>Terms of Use</span>
                    </a>
                    <a href="https://privacy.thewaltdisneycompany.com/en/" class="link">
                        <span>Privacy Policy</span>
                    </a>
                    <a href="https://preferences-mgr.trustarc.com/?pid=disney01&amp;aid=disneyplus01&amp;type=disneyplus" target="_blank" class="link">
                        <span>Interest-Based Ads</span>
                    </a>
                    <a href="https://help.disneyplus.com/csp?id=csp_article_content_international&amp;sys_kb_id=eac89167db3048900a2af56e0f96193b" target="_blank" class="link">
                        <span>Supported Devices</span>
                    </a>
                    <a href="https://help.disneyplus.com" target="_blank" class="link">
                        <span>Help Centre</span>
                    </a>
                    <a href="https://help.disneyplus.com/csp?id=csp_article_content&amp;article=introduction" target="_blank" class="link">
                        <span>About Us</span>
                    </a>
                </div>
                <p class="footnote">
                    © 2022 Disney and its family of affiliated companies. All rights reserved.<br>
                    <br>
                    Disney+ is a paid subscription service, its content is subject to availability. The Disney+ service is marketed by The Walt Disney Company (Argentina) S.A., Tucumán 1, Piso 4º (C1049AAA) Autonomous City of Buenos Aires,
                    Argentina and CUIT number 30-63984459-1
                </p>
            </div>
        </footer>
    </body>
</html>