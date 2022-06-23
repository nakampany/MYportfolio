<?php get_header() ;?>
    <section class="intro text-center section-padding" id="intro">
            <div class="container">
                <div class="row py-2">
                <div class="col-md-8 col-md-offset-2 wp1">
                    <h1 class="arrow">ABOUT ME</h1>
                </div>
                </div>
                <div class="row justify-content-center mr-0">
                <div class="col-lg-6 fuwatto1 f-act">
                    <img src="<?php bloginfo("template_url");?>/img/mypict.jpeg" alt="" style="width:350px; ">
                </div>
                <div class="col-lg-6 aboutdes fuwatto2 pl-0 f-act">
                    <h2 style="color: black;">SHOTA NAKAJIMA</h2>
                    <p>Born December 1999 , 22 years old<br>Current graduate student</p>
                    <!-- 1999年12月生まれ 現大学院生 -->
                    <p>Research: Machine Learning<br>Study Abroad: Thailand, Australia<br>Other Studies: Management</p>
                    <!-- 研究：機械学習 留学：タイ，オーストラリア飲食店経営 -->
                    <p>
                    <ul class="social-buttons">
                        <li><a href="https://www.facebook.com/shota.nakajima.146" class="social-btn">
                        <!-- <i class="fa fa-dribbble"></i> -->
                        <svg class="svg-inline--fa fa-facebook-f fa-w-9 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" data-fa-i2svg=""><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg>
                        </a></li>
                        <li><a href="https://twitter.com/nakaji__1229" class="social-btn">
                        <!-- <i class="fa fa-twitter"></i> -->
                        <svg class="svg-inline--fa fa-twitter fa-w-16 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a></li>
                        <li><a href="https://www.instagram.com/nakasy1229" class="social-btn">
                        <!-- <i class="fa fa-envelope"></i> -->
                        <svg class="svg-inline--fa fa-instagram fa-w-14 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                        </a></li>
                    </ul>

    <a href="https://instagram.com/hiko_pro">


                    </p>
                </div>
                </div>

            </div>
            </section>



            <section class="features text-center section-padding" id="features">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h1 class="arrow">SKILLS</h1>
                    <div class="features-wrapper">
                    <div class="col-md-4 wp2">
                        <div class="icon">
                        <!-- <i class="fa fa-laptop shadow"></i> -->
                        <img src="<?php bloginfo("template_url");?>/img/python.jpg" alt="" style="height: 100px;">
                        </div>
                        <h2>Python</h2>
                        <p>I like Machine Learning.(keras,Tensorflow,Pytorch) <br>Currently, I am researching  adversarial generative networks (GAN). <br>In deep learning, 
                        I use Single Shot MultiBox Detector(SSD).</p>
                        <!-- 機械学習が得意です.
                        （keras,Tensorflow,Pytorch）敵対的生成ネットワーク（GAN）の研究をしています。深層学習では、畳み込みニューラルネットワーク（SNN）を使用しています。 -->
                    </div>
                    <div class="col-md-4 wp2 delay-05s">
                        <div class="icon">
                        <!-- <i class="fa fa-code shadow"></i> -->
                        <img src="<?php bloginfo("template_url");?>/img/html.jpg" alt="" style="width: 100px;">
                        </div>
                        <h2>HTML/CSS</h2>
                        <p>I study design with UI,UX in mind. I use bootstrap. I have experience in creating websites and web applications.</p>
                        <!-- UI,UXを意識して勉強しています。ウェブサイト、WEBアプリケーションの作成経験があります。 -->
                    </div>
                    <div class="col-md-4 wp2 delay-1s">
                        <div class="icon">
                        <!-- <i class="fa fa-heart shadow"></i> -->
                        <img src="<?php bloginfo("template_url");?>/img/flutter.jpg" alt="" style="height: 100px;">
                        </div>
                        <h2>Flutter</h2>
                        <p>I produce applications for Android and IOS. <br>The production is in the process of being created. <br>I want to focus on development in the future!</p>
                        <!-- アンドロイドやIOSに対応したアプリケーションを制作しています。制作物は作成中です。 -->
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                </div>
            </div>
            </section>

            <section class="swag text-center">
            <div class="container">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 style="color: black;">WORKS</h1>
                </div>
                </div>
            </div>
            </section>

           <section class="portfolio text-center section-padding" id="portfolio">
            <div class="container">
                <div class="row">
                <div id="portfolioSlider">
                    <ul class="slides">
                    <li>
                        <div class="col-md-4 wp4">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/kyuuri-cut.png" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="img/kyuuri.jpg" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>Cucumber detection</h2>
                        <p>I have used (Single Shot MultiBox Detector(SSD) to detect cucumber seed. The language used is python(TensorFlow). I also used the annotation tool VOTT to give the correct answer labels.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-05s">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/AutoQR-cut.jpg" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="img/AutoQR.jpg" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>AutoQR</h2>
                        <p>This is my first Hackathon and my first production: put a URL into a form and it will automatically scrape the site's icon and insert it into the QR code background.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-1s">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/comming-yel-soon.jpg" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>Creat Thing</h2>
                        <p>hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-4 wp4">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/comming-bule-soon.jpg" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>Creat Thing</h2>
                        <p>hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!</p>
                        </div>
                        <div class="col-md-4 wp4 delay-05s">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/comming-red-soon.jpg" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>Creat Thing</h2>
                        <p>hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!</p>
                        </div>
                        <div class="col-md-4 wp4 delay-1s">
                        <div class="overlay-effect effects clearfix">
                            <div class="img">
                            <img src="<?php bloginfo("template_url");?>/img/comming-yel-soon.jpg" alt="Portfolio Item">
                            <div class="overlay">
                                <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                            </div>
                        </div>
                        <h2>Creat Thing</h2>
                        <p>hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!</p>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </section>

            
            
            <section class="subscribe text-center">
            <div class="container">
                <h1><i class="fa fa-paper-plane"></i><span>CONTACT</span></h1>
                <form class="" action="https://docs.google.com/forms/d/e/1FAIpQLScjxdESzmRQj8dENt6-WKScYYGKQ2oX200dFkbmuyoqb3uSbQ/viewform?usp=sf_link" method="post">
                <input type="text" name="entry.2005620554" value="" placeholder="Your Name"><br>
                <input type="text" name="entry.1045781291" value="" placeholder="Your Email"><br>
                <input type="text" name="entry.531730234" value="" placeholder="Subject"><br>
                <textarea name="entry.839337160" style="width:50%;" rows="5" cols="80" placeholder="messages..."></textarea><br>
                <button type="submit" name="submit" class="btn btn-info ">Submit</button>
                </form>
            </div>
            </section>

            <section class="dark-bg text-center section-padding contact-wrap" id="contact">
            <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
            <div class="container">
                <div class="row py-2">
                <div class="col-md-8 col-md-offset-2 wp1">
                    <h1 class="arrow">SNS</h1>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <ul class="social-buttons">
                    <li><a href="https://www.facebook.com/shota.nakajima.146" class="social-btn">
                        <!-- <i class="fa fa-dribbble"></i> -->
                        <svg class="svg-inline--fa fa-facebook-f fa-w-9 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" data-fa-i2svg=""><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg>
                    </a></li>
                    <li><a href="https://twitter.com/nakaji__1229" class="social-btn">
                        <!-- <i class="fa fa-twitter"></i> -->
                        <svg class="svg-inline--fa fa-twitter fa-w-16 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                    </a></li>
                    <li><a href="https://www.instagram.com/nakasy1229" class="social-btn">
                        <!-- <i class="fa fa-envelope"></i> -->
                        <svg class="svg-inline--fa fa-instagram fa-w-14 iicon" aria-hidden="true" style="height: 23px;" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                    </a></li>
                    </ul>
                </div>
                </div>
            </div>
            </section>
<?php get_footer() ;?>