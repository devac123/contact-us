<!-- <%@ Master Language="C#" AutoEventWireup="true" MasterPageFile="~/core.master" CodeFile="main.master.cs" Inherits="main" %>


<asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server">
    <asp:ContentPlaceHolder ID="metas" runat="server"></asp:ContentPlaceHolder>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server">
    <asp:ContentPlaceHolder ID="head" runat="server"></asp:ContentPlaceHolder>
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server"> -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" itemscope="itemscope" itemtype="http://schema.org/Organization">

<head id="Head1" runat="server">
    <title></title>

    <meta name="viewport" content="width=device-width initial-scale=1" />
    <!-- <asp:ContentPlaceHolder ID="metas" runat="server"></asp:ContentPlaceHolder> -->


    <link href="assets/css/iis-bootstrap.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/common.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,100,300,700' rel='stylesheet' type='text/css' />
    <link href="assets/fonts/basic/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/iis/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/basic/css/animation.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/addlink.js" type="text/javascript"></script>
    <script src="assets/js/jquery-1.11.3.min.js"></script>

    <script>
        function contact_us_sent() {

            toggleFromsProcessing('frm-contact-us-popup');



            $('#btn-contact-us-send').children('span').html("Sent");
            $('#btn-contact-us-send').children('i').addClass("flyaway-class");

            setTimeout(function () {

                $('#btn-contact-us-send').children('span').html("Send Message");
                $('#btn-contact-us-send').children('i').removeClass("flyaway-class");
                nthform('frm-contact-us-popup', 2)
            }, 1300);

        }



    </script>


    <!-- <asp:ContentPlaceHolder ID="head" runat="server"></asp:ContentPlaceHolder> -->
</head>

<body>


    <!-- Header Starts Here -->
    <section class="header" style="z-index:9999; position:relative;">
        <!-- Logo Bar Starts Here -->
        <div class="logo-bar">
            <div class="container">
                <div class="row">
                    <div class="logo-con col-5 no-pad">
                        <a href="/" style="display:inline-block;"><img src="assets/img/devologix.png"
                                style="max-height:70px; width:auto;" alt="Devologix Logo" /></a>
                    </div>
                    <div class=" col-3 pull-right" style="padding-left:0px; width:auto;">


                        <a href="commingsoon.php">
                            <div class="btn   pull-right" style="height:40px; line-height:30px;"> <i
                                    class="icon-user"></i> Client Area &nbsp;&nbsp;&nbsp;</div>
                        </a>
                        <div class="btn   pull-right " onclick="toggle_iismodel('contact-us-form-1');"
                            style="height:40px; line-height:30px;"> <i class="icon-mail-alt"></i> Write to Us
                            &nbsp;&nbsp;&nbsp;</div>
                    </div>

                    <div class="col-3 pull-right no-pad">
                        <div
                            style="width:100%; height:30px; background-color:#e5e5e5; margin-top:0px; margin-top:15px;">
                            <input type="text" placeholder="Search"
                                style=" line-height:27px; width:calc( 100% - 70px); float:left; border:none; border-bottom:3px solid #bbb; background-color:#e5e5e5; padding:5px 15px;" />
                            <div class="btn yellow"
                                style=" width:40px; line-height:40px; padding:0px; font-size:15px;  text-align:center;  float:right; height:40px; margin-left:-10px; ">
                                <i class="icon-search"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Menu Bar Starts Here -->
        <div class="menu-bar">
            <div class="container">
                <div class="mega-menu">
                    <div class="menu-thumb"><i class="icon-list"></i></div>
                    <div class="menu-con">
                        <div class="menu-item">
                            <a class="menu-item-head" href="defaul.php"><i class="icon-home"></i></a>
                        </div>
                        <div class="menu-divder"></div>

                        <div class="menu-item ">
                            <div class="menu-item-head"><i class="icon-server"></i> Services</div>
                            <div class="menu-item-con">
                                <div class="pad-15">

                                    <div class="pad-15 col-6 ">


                                        <a href="/services/website-development" style="display:block;"
                                            class="block-lhc-1  pad-10">
                                            <div class="block-img col-3 no-pad " style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/web.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">Website Development</div>
                                                <div class="block-text col-12 no-pad">Get a custom built website that
                                                    compliments your <b>Business</b>.</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>
                                        <div style="height:10px;"></div>

                                        <a class="block-lhc-1  pad-10" href="/services/software-development"
                                            style="display:block;">
                                            <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/soft.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">Software Development</div>
                                                <div class="block-text col-12 no-pad">Get a custom <b>Window's
                                                        software</b> built, specifically for your needs.</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>
                                        <div style="height:10px;"></div>
                                        <a href="/services/app-development" style="display:block;"
                                            class="block-lhc-1  pad-10">
                                            <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/app.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">App Development <span
                                                        class="badge-new"></span></div>
                                                <div class="block-text col-12 no-pad">Get a custom personal <b>Android &
                                                        iOS</b> application, that runs on most of devices. </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                    </div>

                                    <div class="pad-15 col-6 ">
                                        <a href="/services/search-engine-optimization" style="display:block;"
                                            class="block-lhc-1   pad-10">
                                            <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/seo.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">Search Engine Optimization</div>
                                                <div class="block-text col-12 no-pad">Rank your webisite on all major
                                                    search engines like <b>Goolge, Yahoo, Bing</b> etc.</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>
                                        <div style="height:10px;"></div>
                                        <a href="/services/social-media-marketing" style="display:block;"
                                            class="block-lhc-1   pad-10">
                                            <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/smo.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">Social Media Marketing</div>
                                                <div class="block-text col-12 no-pad">Grow your business with the help
                                                    of social media sites like <b>Facebook, Google+</b> etc</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>
                                        <div style="height:10px;"></div>
                                        <a href="/services/e-commerce" style="display:block;"
                                            class="block-lhc-1   pad-10">
                                            <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                    style="width:70px;" src="assets/img/ecom.png" /></div>
                                            <div class="block-content col-9 no-pad">
                                                <div class="block-head col-12 no-pad">E-Commerce Solutions</div>
                                                <div class="block-text col-12 no-pad">Expand your busniess by seeling
                                                    online with <b>5 simple steps</b></div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>
                                    </div>



                                    <div class="clear-both"></div>
                                </div>

                                <div class="menu-footer-bar">
                                    Look what else we Offer &nbsp;&nbsp;&nbsp; <a href="/services/"
                                        style="color:#fec51b; font-size:22px;"><b> All Services </b></a>
                                </div>

                            </div>
                        </div>
                        <div class="menu-divder"></div>
                        <div class="menu-item">
                            <div class="menu-item-head"><i class="icon-paper-plane"></i> Products</div>
                            <div class="menu-item-con">

                                <div class="pad-15">

                                    <div class="pad-15 col-6 ">
                                        <a target="_blank" href="http://www.infiretails.com" style="display:block;">
                                            <div class="block-lhc-1   pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/cms.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">Infi Retail <span
                                                            class="badge-hot"></span></div>
                                                    <div class="block-text col-12 no-pad">Powerful yet Simple <b>Retail
                                                            Software</b> for Small and Medium Retailers and Returant
                                                        Owners</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>

                                        <div style="height:10px;"></div>

                                        <a href="/Coming-soon" style="display:block;">
                                            <div class="block-lhc-1  pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/invoice.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">Infi SchoolManager</div>
                                                    <div class="block-text col-12 no-pad">Coming Soon......</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>



                                    </div>

                                    <div class="pad-15 col-6 ">
                                        <a href="inficart.php" style="display:block;">
                                            <div class="block-lhc-1  pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/cartl.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">Infi Cart</div>
                                                    <div class="block-text col-12 no-pad">Get your <b> Custom Online
                                                            Store</b> up and Running just in 7 days.</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>

                                        <div style="height:10px;"></div>

                                    </div>



                                    <div class="clear-both"></div>
                                </div>

                                <div class="menu-footer-bar">
                                    Get a <b>Website</b> and <b>Promote</b> your Business &nbsp;&nbsp;&nbsp; <a
                                        href="/contact-us" style="color:#fec51b; font-size:22px;"><b> Contact-US</b></a>
                                </div>

                            </div>
                        </div>
                        <div class="menu-divder"></div>
                        <!-- <div class="menu-item">
                            <div class="menu-item-head"><i class="icon-flag"></i> Blog</div>
                            <div class="menu-item-con">
                                <div class="pad-15">

                                    <div class="dotted-header">
                                        <i class="icon-flag"></i> Top Blog Post's

                                        <a href="/blog/" class="btn pull-right yellow">Goto Blog</a>

                                    </div>
                                    <div class="dark">

                                        <a class="iis-post col-4">
                                            <div class="post-img">
                                                <img src="assets/img/temp/1.jpg" />
                                                <span class="btn yellow">View Post</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">


                                                    July 14, 2015 4:56 AM
                                                </div>
                                                <div class="post-badges col-6 no-pad">

                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">


                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">Festive</span>
                                                    <span class="post-tag">Design</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <a class="iis-post col-4">
                                            <div class="post-img">
                                                <img src="assets/img/temp/2.jpg" />
                                                <span class="btn yellow">View Post</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">


                                                    July 14, 2015 4:56 AM
                                                </div>
                                                <div class="post-badges col-6 no-pad">

                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">


                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">Festive</span>
                                                    <span class="post-tag">Design</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <a class="iis-post col-4">
                                            <div class="post-img">
                                                <img src="assets/img/temp/3.jpg" />
                                                <span class="btn yellow">View Post</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">


                                                    July 14, 2015 4:56 AM
                                                </div>
                                                <div class="post-badges col-6 no-pad">

                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">


                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">Festive</span>
                                                    <span class="post-tag">Design</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                                <div class="menu-footer-bar">
                                    Get a <b>Website</b> and <b>Promote</b> your Business &nbsp;&nbsp;&nbsp; <a
                                        href="/contact-us" style="color:#fec51b; font-size:22px;"><b> Contact-US</b></a>

                                    <a href="/blog/"
                                        style="height:50px; margin:-15px 0px; width:200px; display:block; float:right; background-image:url('/assets/img/iis-dark-blog.svg');background-repeat:no-repeat;background-position:center center; background-size:auto 40px;"></a>
                                </div>



                            </div>
                        </div> -->
                        <div class="menu-divder"></div>
                        <!-- <div class="menu-item">
                            <div class="menu-item-head" ><i class="icon-graduation-cap"></i>
                                &nbsp;E-Learning</div>
                            <div class="menu-item-con">
                                <div class="pad-15">
                                    <div class="dotted-header">
                                        <i class="icon-graduation-cap"></i> &nbsp;E-Learning

                                        <a href="/e-learn">
                                            <div class="btn pull-right yellow">Goto E-Learning</div>
                                        </a>

                                    </div>

                                    <div class="dark">

                                        <a class="iis-post col-3">
                                            <div class="post-img">
                                                <img src="assets/img/data/course-html.png" />
                                                <span class="btn yellow">Start Course</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">
                                                    100 Lectures
                                                </div>
                                                <div class="post-badges col-6 no-pad">
                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">
                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">ASP.NET</span>
                                                    <span class="post-tag">MVC</span>
                                                    <span class="post-tag">C#</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <a class="iis-post col-3">
                                            <div class="post-img">
                                                <img src="assets/img/data/course-jq.png" />
                                                <span class="btn yellow">Start Course</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">
                                                    100 Lectures
                                                </div>
                                                <div class="post-badges col-6 no-pad">
                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">
                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">ASP.NET</span>
                                                    <span class="post-tag">MVC</span>
                                                    <span class="post-tag">C#</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <a class="iis-post col-3">
                                            <div class="post-img">
                                                <img src="assets/img/data/course-asp.png" />
                                                <span class="btn yellow">Start Course</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">
                                                    100 Lectures
                                                </div>
                                                <div class="post-badges col-6 no-pad">
                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">
                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">ASP.NET</span>
                                                    <span class="post-tag">MVC</span>
                                                    <span class="post-tag">C#</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <a class="iis-post col-3">
                                            <div class="post-img">
                                                <img src="assets/img/data/course-mvc.png" />
                                                <span class="btn yellow">Start Course</span>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-time col-6 no-pad">
                                                    100 Lectures
                                                </div>
                                                <div class="post-badges col-6 no-pad">
                                                    <span class="badge-new badge-mini"></span>
                                                    <span class="badge-hot badge-mini"></span>
                                                </div>
                                                <div class="post-title col-12 no-pad">
                                                    Open your appetite for Thanksgiving day with these delicious designs
                                                </div>
                                                <div class="post-tags col-12 no-pad">
                                                    Tags: &nbsp;
                                                    <span class="post-tag">ASP.NET</span>
                                                    <span class="post-tag">MVC</span>
                                                    <span class="post-tag">C#</span>
                                                </div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </a>

                                        <div class="clear-both"></div>
                                    </div>

                                </div>

                                <div class="menu-footer-bar">
                                    Get a <b>Website</b> and <b>Promote</b> your Business &nbsp;&nbsp;&nbsp; <a
                                        href="/contact-us" style="color:#fec51b; font-size:22px;"><b> Contact-US</b></a>
                                </div>

                            </div>
                        </div> -->
                        <div class="menu-divder"></div>
                        <!-- <div class="menu-item">
                            <div class="menu-item-head"><i class="icon-wrench"></i> Tools</div>
                            <div class="menu-item-con">
                                <div class="pad-15">

                                    <div class="pad-15 col-6 ">
                                        <a href="/coming-soon" style="display:block;">
                                            <div class="block-lhc-1  pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/pics.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">Picture Editor<span
                                                            class="badge-hot"></span></div>
                                                    <div class="block-text col-12 no-pad">Create <b>Beautiful
                                                            Pictures</b> online without installing any software</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>
                                        <div style="height:10px;"></div>

                                        <a href="/coming-soon" style="display:block;">
                                            <div class="block-lhc-1  pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/js.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">JS beautifier</div>
                                                    <div class="block-text col-12 no-pad">Beautify your
                                                        <b>Javascript</b> with just one click.</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>


                                    </div>

                                    <div class="pad-15 col-6 ">
                                        <a href="/coming-soon" style="display:block;">
                                            <div class="block-lhc-1   pad-10">
                                                <div class="block-img col-3 no-pad" style="text-align:center;"><img
                                                        style="width:70px;" src="assets/img/rank.png" /></div>
                                                <div class="block-content col-9 no-pad">
                                                    <div class="block-head col-12 no-pad">Keyword Rank Checker</div>
                                                    <div class="block-text col-12 no-pad">Check the postion of your
                                                        website with any keyword in just one click.</div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                        </a>
                                        <div style="height:10px;"></div>

                                    </div>



                                    <div class="clear-both"></div>
                                </div>

                                <div class="menu-footer-bar">
                                    Get a <b>Website</b> and <b>Promote</b> your Business &nbsp;&nbsp;&nbsp; <a
                                        href="/contact-us" style="color:#fec51b; font-size:22px;"><b> Contact-US</b></a>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>


            </div>

        </div>

    </section>
  
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/iis-bootstrap.js"></script>





    <!-- <asp:ContentPlaceHolder ID="footerscript" runat="server"></asp:ContentPlaceHolder> -->

</body>

</html>

<!-- Header Ends Here -->

<!-- <asp:ContentPlaceHolder ID="Body" runat="server"></asp:ContentPlaceHolder> -->


<!-- </asp:Content>
<asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server">

    <asp:ContentPlaceHolder ID="footerscript" runat="server"></asp:ContentPlaceHolder>
</asp:Content> -->