<!-- <%@ Page Title="" Language="C#" MasterPageFile="main.master" AutoEventWireup="true" CodeFile="default.aspx.cs" Inherits="Default2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="metas" runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="head" runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="Body" runat="Server"> -->
<?php $ini = parse_ini_file('../../app.ini'); ?>
<?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>


<link href="assets/css/devoretails.css" rel="stylesheet" />



    <section class="pos_home_sec pos_bg_cover" style="background-image: url(assets/pos/infiretail-bg2.jpg);">
        <div class="container">

            <div class="row no-pad relative">
                <div class="col-12 no-pad-h">

                    <div class="pos_home_heading">Powerful <span class="fweight-500">Yet Simple</span> <span class="dark-yellow">Billing / POS</span> Solution</div>
                    <div class="pos_home_des fweight-300">InfiRetails is retail Billing software with POS, inventory management and customer loyalty.</div>
                    <div class="btn large black yt_video_play_btn all-hide" style="margin-top: 60px;">
                        <i class="icon-play"></i>Watch Demo 

                    </div>

                    <div class="btn large yellow  yt_video_play_btn">
                        <i class="icon-check"></i>Get Started 

                    </div>

                    <div class="pos_home_big_img relative all-hide">
                        <div class="yt_video_play_btn"><i class="icon-play"></i></div>
                        <img src="/assets/img/project_imgs/hero-img1.png" />
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>

            <div style=" width:100%;color:white; padding-top:50px; padding-bottom:50px;" class="text-center background-33">

                <div class="container pad-15 fweight-300 background-prop" style="background-image:url('/assets/img/bck1.png'); background-size:100%;">
                   <div style="font-size:25px; ">World's 1st Plug and Play Billing Software</div>
                    
                    <div style="font-size:25px;line-height:40px; margin:20px 0px; text-shadow:1px 1px 1px #333; " class="fweight-300">
                        <span style="font-size:30px;  color : #FBC51B" class="fweight-700">Infiretails</span> with <span style="font-size:30px;  color : #FBC51B" class="fweight-700 dark-green-1">InfiCloud Box</span></div>
                    <p style="font-size:18px; max-width:550px;" class="div-center">
                      It can help you to make your life hassel free, Infiretail is <span class="fweight-800"> Instalation free</span>, <span class="fweight-800">Easy to use</span> and works on virtually every <span class="fweight-800">Smart Device</span> avaliable in market.
                    </p>

                </div>
            </div>
        </section>


    <style>

            .ratio-wrapper {
                  width: 100%;
                  /* whatever width you want */
                  display: inline-block;
                  position: relative;
                }
                .ratio-wrapper:after {
                      padding-top: 23.25%;
                      /* 16:9 ratio */
                      display: block;
                      content: '';
                }
               .ratio-wrapper .ratio-con {
                      position: absolute;
                      top: 0;
                      bottom: 0;
                      right: 0;
                      left: 0;
                      /* fill parent */
                      background-color: deepskyblue;
                      /* let's see it! */
                      color: white;
                }




        .section1{}
        .section1 .container{}
        .section1 .container .row{}
        .section1 .container .right-sec{ float:right;  padding:0px;}
        .section1 .container .right-sec .image-wrapper{  position: relative; margin-left:-200px;  }
        .section1 .container .right-sec .image-wrapper:after {padding-top: 50%;display: block;content: '';}
        .section1 .container .right-sec .image-con { position: absolute;top: 0;bottom: 0;right: 0;left: 0;background:url(assets/pos/awesome_bg1.png) right 20px no-repeat; color: white;

    -webkit-background-size: cover!important;
    -moz-background-size: cover!important;
    -o-background-size: cover!important;
    background-size: cover!important;


        }
        .section1 .container .left-sec{float:right; margin-top:250px; padding:20px;}
        .section1 .container .left-sec .content{}
        .section1 .container .left-sec .content .heading{ font-size:25px; font-weight:800; }
        .section1 .container .left-sec .content .heading .green{ color:#83AC40;}
        .section1 .container .left-sec .content .desc{ font-weight:300; line-height:26px; font-size:18px; color:#777; }


        .section2{background-color:#e5e5e5;}
        .section2 .container{}
        .section2 .container .row{}
        .section2 .container .right-sec{  padding:0px;}
        .section2 .container .right-sec .image-wrapper{  position: relative; margin-right:-200px;  }
        .section2 .container .right-sec .image-wrapper:after {padding-top: 50%;display: block;content: '';}
        .section2 .container .right-sec .image-con { position: absolute;top: 0;bottom: 0;right: 0;left: 0;background:url(assets/pos/awesome_bg2.png) left 20px no-repeat;background-size:contain; color: white;}
        .section2 .container .left-sec{margin-top:250px; padding:20px;}
        .section2 .container .left-sec .content{}
        .section2 .container .left-sec .content .heading{ font-size:25px; font-weight:800; }
        .section2 .container .left-sec .content .heading .green{ color:#83AC40;}
        .section2 .container .left-sec .content .desc{ font-weight:300; line-height:26px; font-size:18px; color:#777; }
        .local-demo-border{border-left:1px solid #ffffff4d;}


        @media (max-width:979px) 
        {
              .section1 .container .right-sec .image-wrapper{ margin-left:0px; }
              .section2 .container .right-sec .image-wrapper{ margin-right:0px; }
              .section1 .container .left-sec{margin-top:0px;}
              .section2 .container .left-sec{margin-top:0px;}
              .local-demo-border{border-left:0px;}
        }


    </style>


 <section class="section1">
        <div class="container">
            <div class="row no-pad">
                <div class="col-8 right-sec">
                    <div class="image-wrapper">
                        <div class="image-con"> </div>
                    </div>
                </div>
                <div class="col-4 left-sec">
                   <div class="content">
                     <div class="heading" ><span class="" style=" color : #e4ab01 ">Simple</span> yet Effective</div>
                    <div class="desc">InfiRetail is engineered to be Simple yet Effective. It provide everything you need for your retail business.</div>
                   </div>
                </div>
            </div>
        </div>

    </section>

          <section class="section2">
        <div class="container">
            <div class="row no-pad">
                <div class="col-8 right-sec">
                    <div class="image-wrapper">
                        <div class="image-con"> </div>
                    </div>
                </div>
                <div class="col-4 left-sec">
                   <div class="content">
                     <div class="heading" ><span class="dark-yellow">Easy</span>  to use</div>
                    <div class="desc">InfiRetail POS is very easy to use and your employees will love the simplicity and power that it deliver.</div>
                   </div>
                </div>
            </div>
        </div>

    </section>

 

    
    <section class="dark-yellow background-33" style="padding: 30px 0px;">
        <div class="container">

            <div class="row">
                <div class="col-8"style="color:#fff" >Want to see InfiRetail in Action </div>
                <div class="col-4">
                <a onclick="toggle_iismodel('contact-us-form-1');" class="btn large   pos_btn pos_green_btn_margin btn_transparent" >Request a Demo</a>
                    </div>
            </div>

        </div>
    </section>

    <section style="min-height: 200px;" class="background-f5">
        <div class="container" style="padding: 50px 0px;">

            <div class="pos_page_heading">InfiRetail For</div>
            <div class="pos_page_des" style="margin-bottom: 20px;">Whatever business you’re in, InfiRetail has you covered.</div>

            <div class="clear-both"></div>
            <div class="row no-pad" style="text-align:center;">
                <div class="col-4 col-ml-4">

                    <div style="height: 150px; background: url('assets/pos/retail.png'); background-size: 150px;" class="background-prop"></div>
                    <div class="feature_heading">Retail Stores </div>
                    <div class="feature_des">There are a lot of things to manage in a retail store, InfiRetails helps you manage Stock, Sales, Quotations, Purchase, Employees and much more.</div>

                </div>
                <div class="col-4  col-ml-4">

                    
                    <div style="height: 150px; background: url('assets/pos/quick-serve.png'); background-size: 150px;" class="background-prop"></div>
                    <div class="feature_heading">Quick Serve </div>
                    <div class="feature_des">InfiRetail is Simple and Quick enough to help you to serve long queues in matter of seconds and keep your customers happy.</div>

                </div>
                <div class="col-4  col-ml-4">

                    <div style="height: 150px; background: url('assets/pos/restrurents.png'); background-size: 150px;" class="background-prop"></div>
                    <div class="feature_heading">Restaurant & Bars </div>
                    <div class="feature_des">InfiRetail helps you to manage table wise order and create menu list in diffrent catagories and subcatagories with all the reports you need.</div>

                </div>
            </div>

               <div class="align-center" style="margin-top: 20px;">
                <a  class="btn large yellow  pos_btn" href="store_example.aspx">More Examples</a>
            </div>


        </div>




    </section>

    <section class="pos_green_sec" style="padding: 50px 0px; background-color: rgb(228, 171, 1); text-align:center;">
        <div class="container">

            <div class="row">
                 <div class="pos_page_heading" style="font-size: 30px;color:#fff;">Local and online host</div>
            <div class="pos_page_des" style="margin-bottom: 40px;color:#f0f0f0;">InfiRetails works with virtually every Smart Device.</div>
                <div class="col-6">
                    <div class="col-12 col-ml-12">

                    <div style="height: 200px; background: url('assets/pos/local-dev.png'); background-size:280px;" class="background-prop"></div>
                     
                    <div class="feature_heading" style="color:#fff;font-weight:800;">Offline Cloud Box </div>
                    <div class="feature_des" style="color:#fff;letter-spacing:0px;">There are a lot of things to manage in a retail store, InfiRetails helps you manage Stock, Sales, Quotations, Purchase, Employees and much more.</div>
                </div>           <a onclick="toggle_iismodel('contact-us-form-1');" class="btn large yellow  pos_btn pos_green_btn_margin" style="margin-top:0px;background-color:#333;border:0px;border-bottom:3px solid #000; color:#fff">Get Started</a>
               
                </div>

                <div class="col-6 no-pad">
               <div class="col-12  col-ml-12 local-demo-border">
                   
                    <div style="height: 200px; background: url('assets/pos/cloud-dev.png'); background-size:280px;" class="background-prop"></div>
                    <div class="feature_heading" style="font-weight:800;color:#fff;">Online Cloud Hosting  </div>
                    <div class="feature_des" style="color:#fff;letter-spacing:0px;">There are a lot of things to manage in a retail store, InfiRetails helps you manage Stock, Sales, Quotations, Purchase, Employees and much more.</div>
                   </div>   
                   <a onclick="toggle_iismodel('contact-us-form-1');" class="btn large yellow  pos_btn pos_green_btn_margin" style="margin-top:20px;background-color:#333;border:0px;border-bottom:3px solid #000; color:#fff">Get Demo</a>
                   
                    </div>
            </div>

        </div>
    </section>

    <section style="min-height: 600px;" id="hardware" class="background-e5">
        <div class="container" style="padding: 50px 0px;">

            <div class="pos_page_heading" style="font-size: 30px;">Powerd by InfiCloud Box</div>
            <div class="pos_page_des" style="margin-bottom: 20px;">InfiRetails works with virtually every Smart Device.</div>
            <div style=" background: url('assets/pos/inficloudbox.png');" class="hardware_cloud background-prop">
            </div>
            <div class="row" style="text-align: center;">
                
                <div class="col-3 col-ml-3">
                    
                    <div style="height: 80px; background: url('assets/pos/icb-f4.png'); background-size:80px;" class="background-prop"></div>
                    
                    <div class="feature_heading">QuadCore Processor</div>
                    <div class="l_r_des pos_fuild_desc">InfiCloud Box is powered by quad core chip coupled with 1GB ram.</div>
                  
            </div>
                
                  <div class="col-3  col-ml-3">
                    
                    <div style="height: 80px; background: url('assets/pos/icb-f1.png'); background-size:100px;" class="background-prop"></div>
                    
                    <div class="feature_heading">300 Mbps Wifi</div>
                    <div class="l_r_des pos_fuild_desc" >Inbuilt Wifi helps you to connect more devices without any hassel</div>
                    
                </div>
                <div class="col-3  col-ml-3">
                    
                    <div style="height: 80px; background: url('assets/pos/icb-f2.png'); background-size:100px;" class="background-prop" ></div>
                    
                    <div class="feature_heading">Seperate Backup Drive</div>
                    <div class="l_r_des pos_fuild_desc">Inbuilt physically sperate backup drive help you to store your backup with ease of mind.</div>
                    
                </div>
                <div class="col-3  col-ml-3">
                    
                    <div style="height: 80px; background: url('assets/pos/icb-f3.png'); background-size:100px;"  class="background-prop"></div>
                    
                    <div class="feature_heading">Connect upto 40 Devices</div>
                    <div class="l_r_des pos_fuild_desc">Inbuilt Wifi helps you to connect more devices without any hassel</div>
                    
                </div>
                

            <div class="clear-both"></div>
        </div>
            </div>
    </section>

    <style>
        .ratio-wrapper {i
                  width: 100%;
                  /* whatever width you want */
                  display: inline-block;
                  position: relative;
                }
                .ratio-wrapper:after {
                      padding-top: 23.25%;
                      /* 16:9 ratio */
                      display: block;
                      content: '';
                }
               .ratio-wrapper .ratio-con {
                      position: absolute;
                      top: 0;
                      bottom: 0;
                      right: 0;
                      left: 0;
                      /* fill parent */
                      background-color: deepskyblue;
                      /* let's see it! */
                      color: white;
                }
    </style>

    <section class="background-f5 " style="padding:40px 0px;">
        <div class="container" style="padding: 10px 0px; position:relative;">

            <div class="pos_page_heading">Hardware is easy with InfiRetail</div>
            <div class="pos_page_des" style="margin-bottom: 20px;">InfiRetails works with virtually every Smart Device.</div>
            <div style="height: 60px; background:  url('assets/pos/os-logo.png'); background-size: 300px;"  class="background-prop">
            </div>
            
            <div class="clear-both"></div>
            
        <div class="ratio-wrapper" style=" margin-top:30px;">
                        <div class="ratio-con"style=" background:url('assets/pos/hardware.png') center bottom no-repeat; background-size:100%; "></div>
                    </div>
                    
        </div>


       
    </section>


    <section class="pos_sec_pad pos_key_feature_sec background-e5" style="padding-top: 100px;" id="features">
        <div class="container">

            <div class="pos_page_heading">Why InfiRetails</div>
            <div class="pos_page_des">InfiRetail is all-in-one sale solution for serious retailers.</div>

           <div class="row no-pad">
                <div class="col-6 col-ml-6 col-m-12">
                    <div class="col-4 col-ml-4 col-m-3 feat_cata_img" style="background: url('assets/pos/feat-1.png') right top no-repeat;">
                    </div>
                    <div class="col-8 col-ml-8 col-m-9">
                              <div class="feature_heading fweight-500" style="color:#444; ">Extremely <span class="fweight-800" style="color:#652C90"> Simple </span></div>
                        <div class="feature_des">Our simple interface means you and your staff will be POS masters in no time.</div>
                    </div>


                </div>
                  <div class="col-6 col-ml-6 col-m-12">
                    <div class="col-4 col-ml-4 col-m-3 feat_cata_img" style="background: url('assets/pos/feat-4.png') right top no-repeat; ">
                    </div>
                    <div class="col-8 col-ml-8 col-m-9">
                              <div class="feature_heading fweight-500">Fully <span class=" fweight-800" style="color:#E97952"> Expandable </span></div>
                        <div class="feature_des" >Weather you want it for multiple Users, Billers or Stores, we got you covered.</div>
                    </div>


                </div>
               <div class="col-6 col-ml-6 col-m-12">
                    <div class="col-4 col-ml-4 col-m-3  feat_cata_img" style="background: url('assets/pos/feat-2.png') right top no-repeat; ">
                    </div>
                    <div class="col-8 col-ml-8 col-m-9">
                              <div class="feature_heading  fweight-500">Highly <span class=" fweight-800" style="color:#1B75BB;"> Flexible </span></div>
                        <div class="feature_des">Work on Virtually every Smart Device like Mac, Windows, Android, iOs, Linux.</div>
                    </div>


                </div>
                <div class="col-6 col-ml-6 col-m-12">
                    <div class="col-4 col-ml-4 col-m-3  feat_cata_img" style="background: url('assets/pos/feat-3.png') right top no-repeat;">
                    </div>
                    <div class="col-8 col-ml-8  col-m-9">
                              <div class="feature_heading  fweight-500">Super <span class=" fweight-800 dark-green-1"> Reliable </span></div>
                        <div class="feature_des">Your data is safe with are 3 layer encrypted and automated backup system.</div>
                    </div>


                </div>
             


            </div>
<!--
            <div class="row no-pad">
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f1.png" />
                        <div class="feature_heading">Easy to Use </div>
                        <div class="feature_des">Our simple interface means you and your staff will be POS masters in no time. When you’re busy, you don’t want to be wrestling with a complicated sales system. With us, you won’t be. Get ready for point, touch, done.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f2.png" />
                        <div class="feature_heading">Fast and Reliable</div>
                        <div class="feature_des">Fly through our simple, friendly interface with lightning speed. We believe in turning waiting visitors into paying customers as efficiently as possible.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f3.png" />
                        <div class="feature_heading">Powerful Reporting</div>
                        <div class="feature_des">If you can measure it, you can manage it. With both standard and fully customized reports, InfiRetail excels at providing instant insights into the numbers that matter to your business.</div>
                    </div>
                </div>
            </div>

            <div class="row no-pad">
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f4.png" />
                        <div class="feature_heading">Loyalty features</div>
                        <div class="feature_des">If a customer has bought from you once, then why not again? Make more money per customer by leveraging options such as loyalty point programs and seamless email collection & marketing.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f5.png" />
                        <div class="feature_heading">Cloud / Offline Mode</div>
                        <div class="feature_des">Like to keep an eye on things from a far? Time spent away from your physical business location becomes a lot less stressful knowing that one simple login gives you full access to monitor & manage your entire POS system.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f6.png" />
                        <div class="feature_heading">Easy to Expand</div>
                        <div class="feature_des">Gone are the days of the traditional checkout. Our POS system is hyper-flexible, allowing for combinations of hardware and software that let you sell where and when you sell best, be it the door, the floor, or on the road.</div>
                    </div>
                </div>
            </div>

            <div class="row no-pad">
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f7.png" />
                        <div class="feature_heading">Auto Backup Feature</div>
                        <div class="feature_des">You can say goodbye to manually taking backups of your POS data. InfiReatil automatically Manage it for your so that you can concentrate more on your business </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f8.png" />
                        <div class="feature_heading">Wireless Operation</div>
                        <div class="feature_des">Take deliveries wirelessly, make changes to inventory counts, and handle pricing, all from one handheld device loaded with the InfiRetail Android mobile application.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feature_box">
                        <img src="http://www.infinityinfosol.com/assets/img/project_imgs/f9.png" />
                        <div class="feature_heading">Powerful Receipts</div>
                        <div class="feature_des">Save paper and build a customer database by emailing receipts to customers – great for marketing to repeat buyers. Quickly retrieve any receipt from anytime.</div>
                    </div>
                </div>
            </div>

    --->

            <div class="align-center" style="margin-top: 20px;">
                <a  class="btn large yellow  pos_btn" onclick="toggle_iismodel('contact-us-form-1');">Get Started</a>
            </div>



        </div>
    </section>

    <section class="pos_sec_pad pos_l_r_sec background-e5">
    <div class="container">

        <div class="row">
            <div class="col-6 pull-right">
                <div class="l_r_img"><img src="http://www.infinityinfosol.com/assets/img/project_imgs/learn-more-1.png" /></div>
            </div>
            <div class="col-6 pull-right">
                <div class="top_mini_heading">Fast & Flexible</div>
                <div class="l_r_heading">Wide Hardware Support</div>
                <div class="l_r_des">Our POS systems is engineered to work with the wide variety of hardware available in the market like Handheld / Table Barcode scanners, Barcode Lable Printers,Thermal receipt printers, Touchscreen monitors, Cash Drawer.</div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="l_r_img"><img src="http://www.infinityinfosol.com/assets/img/project_imgs/learn-more-2.png" /></div>
            </div>
            <div class="col-6">
                <div class="top_mini_heading">User Friendly Interface</div>
                <div class="l_r_heading">Ready to go on any Device</div>
                <div class="l_r_des">Some Point of Sale providers expect you to bend around their software. Not us. We create bundles that can handle heavy transaction volume, support multiple screen usage, and work on PC and Android devices interchangeably.</div>
            </div>
        </div>

    </div>
</section>--%>


    <section class="pos_sec_pad pos_bg_cover pos_app_sec background-f5" style="background-image: url(assets/pos/bg-app.jpg);">
        <div class="container">

            <div class="row">
                <div class="pos_app_container">
                    <div class="pos_app_mini_heading">Download Now</div>
                    <div class="pos_app_big_heading">Turn any Mobile in into Powerful POS Terminal</div>
                    <a href="#">
                        <img src="assets/pos/play-store-btn.svg" /></a>
                </div>
            </div>

        </div>
    </section>


    <section class="pos_sec_pad pos_business_sec all-hide background-ee">
        <div class="container">

            <div class="pos_page_heading">For Business App</div>
            <div class="pos_page_des">Let’s get started on making sales simple</div>

            <div class="row no-pad">
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/1.png" />
                        <div class="pos_business_heading">Convenience & Grocery</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/2.png" />
                        <div class="pos_business_heading">Restaurants</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/3.png" />
                        <div class="pos_business_heading">Gadgets Store</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/4.png" />
                        <div class="pos_business_heading">Computer Store</div>
                    </div>
                </div>
            </div>

            <div class="row no-pad">
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/5.png" />
                        <div class="pos_business_heading">Apparel Store</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/6.png" />
                        <div class="pos_business_heading">Sports Store</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/7.png" />
                        <div class="pos_business_heading">Specialty Food</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/8.png" />
                        <div class="pos_business_heading">Gift Shops</div>
                    </div>
                </div>
            </div>

            <div class="row no-pad">
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/9.png" />
                        <div class="pos_business_heading">Retail</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/10.png" />
                        <div class="pos_business_heading">Book Store</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/11.png" />
                        <div class="pos_business_heading">Thrift Stores</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="pos_business_img">
                        <img src="assets/pos/12.png" />
                        <div class="pos_business_heading">Furniture Shop</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

   
    <section class="pos_sec_pad pos_more_reason_sec list_item background-ff all-hide">
        <div class="container">

            <div class="pos_page_heading">More reasons to use InfiRetail</div>
            <div class="pos_page_des">Benefits of buying this product</div>

            <div class="row">
                <div class="col-6">
                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Inventory Accounting</div>
                            <div class="pos_ul_li_des">Multiple delete option for inventories, products, quotations, sales and transfers.</div>
                            <div class="pos_ul_li_des">New user interface design to ease many tasks</div>
                            <div class="pos_ul_li_des">Ability to add new customer groups</div>
                            <div class="pos_ul_li_des">Notifications Module</div>
                            <div class="pos_ul_li_des">Email protocol options (mail, sendmail and smtp)</div>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Products Module</div>
                            <div class="pos_ul_li_des">Improved barcode feature and attached barcode symbology to product</div>
                            <div class="pos_ul_li_des">Improved barcode/label printing feature</div>
                            <div class="pos_ul_li_des">Ability to add watermark to product images</div>
                            <div class="pos_ul_li_des">Attach tax rate with product</div>
                            <div class="pos_ul_li_des">Option for product expiry date while purchasing the stock</div>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Users Module</div>
                            <div class="pos_ul_li_des">Assign users a warehouse and biller</div>
                            <div class="pos_ul_li_des">Own sales/quotations/purchases/transfers restrictions for users</div>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">POS Module</div>
                            <div class="pos_ul_li_des">Add Item by Barcode scanner and code/name suggestion</div>
                            <div class="pos_ul_li_des">Ability to add manual product to order list</div>
                            <div class="pos_ul_li_des">Ability to sell gift cards</div>
                            <div class="pos_ul_li_des">Ability to edit the product price on sale page</div>
                            <div class="pos_ul_li_des">Record multiple payments to sale</div>
                            <div class="pos_ul_li_des">Simple restriction for staff to not delete item in POS (POS will ask for password, that owner can set in POS Settings)</div>
                            <div class="pos_ul_li_des">Added swipe credit card input</div>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Sales Module</div>
                            <div class="pos_ul_li_des">Invoice view (Standard or Tax Invoice)</div>
                            <div class="pos_ul_li_des">Ability to add manual product to order list</div>
                            <div class="pos_ul_li_des">Ability to sell gift cards</div>
                            <div class="pos_ul_li_des">Instant discount (add percentage or fixed discount to order and/or any product)</div>
                            <div class="pos_ul_li_des">Sale status (pending/completed)</div>
                            <div class="pos_ul_li_des">Ability to edit the product price on sale page</div>
                            <div class="pos_ul_li_des">Record payments to sale (full/partial with any no of payments)</div>
                            <div class="pos_ul_li_des">Payment status (pending/due/partially paid/fully paid)</div>
                            <div class="pos_ul_li_des">Email invoices with payment buttons (Paypal and Skrill)</div>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Reports Module</div>
                            <div class="pos_ul_li_des">Improved old reports</div>
                            <div class="pos_ul_li_des">Added product expiry alerts</div>
                            <div class="pos_ul_li_des">Added payments report</div>
                            <div class="pos_ul_li_des">Added profit and loss report</div>
                            <div class="pos_ul_li_des">Added customer report</div>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <i class="icon-ok"></i>
                            <div class="pos_ul_li_heading">Settings Module</div>
                            <div class="pos_ul_li_des">Manage user groups and permissions</div>
                            <div class="pos_ul_li_des">Manage customer groups</div>
                            <div class="pos_ul_li_des">Manage currencies</div>
                            <div class="pos_ul_li_des">Added option to upload map for warehouses</div>
                            <div class="pos_ul_li_des">Added option to upload images for categories and sub categories</div>
                            <div class="pos_ul_li_des">Added email templates (set email message in WYSIWYG editor)</div>
                            <div class="pos_ul_li_des">Added option to add tax code</div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>



  
    <section class="pos_sec_pad pos_price_plan_sec background-ee" id="pricing">
        <div class="container">

            <div class="pos_page_heading">Plans & Pricing</div>
            <div class="pos_page_des">30 day money back guarantee. No credit card required!</div>

            <div class="row">
                <div class="col-4">
                    <div class="background-light-green" style="border-bottom:3px solid #3C3B3B">
                        <div style="background-image:url(assets/pos/bubble-back.png);padding:20px;background-size:cover;background-position:center;">
                            <span style=" background:url('assets/pos/plan1.png');" class="pos_price_plan_img background-prop" ></span>
                        </div>
                        
                    </div>
                    <div class="pos_price_con margin web">
                        <div class="pos_plan_type">Basic</div>
                        <div class="pos_plan_price"><span>RS</span>20000</div>
                        
                       
                        <div class="pos_plan_detail">
                            <ul>
                                <li><span class="dark-yellow-1">Online</span> Mode</li>
                                <li><span class="dark-yellow-1">Multiple</span> Outlets</li>
                                <li><span>Unlimited</span> Products</li>
                                <li><span>Unlimited</span> Billers</li>
                                <li><span>Multiple</span> Warehouses</li>
                                <li><span>Migration</span> Asist</li>
                                <li><span>Cloud</span> Backup service</li>
                                <li>--</li>
                                <li>--</li>
                                <li>--</li>
                                
                            </ul>

                            <div style="padding:25px 0px;text-align:center;">
                      <div class="pos_plan_price">INR  20,000/-</div>
                            <div class="pos_plan_mini_heading">INR 7000/- Yearly renewal.</div>
                        </div>
                            </div>
                         <a href="#" class="btn large yellow  pos_btn div-center" style="width:200px;">Get Started</a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="background-light-green" style="border-bottom:3px solid #3C3B3B;position:relative;">
                        <div style="background-image:url(assets/pos/bubble-back.png);padding:20px;background-size:cover;background-position:center;">
                            <span style=" background:url('assets/pos/plan2.png');" class="pos_price_plan_img background-prop" ></span>
                        </div>
                        <div style="position: absolute;top: -57px;right: -29px;" ><img src="assets/pos/discount.png" style="max-width:123px;" /></div>
                    </div>
                    <div class="pos_price_con tag">
                        
                        
                     
                        <div class="pos_plan_detail">
                            <ul>
                                 <li><span class="dark-yellow-1">Offline</span> Mode</li>
                                <li><span class="dark-yellow-1">Single</span> Outlet</li>
                                <li><span>Unlimited</span> Products</li>
                                <li><span>Unlimited</span> Billers</li>
                                <li><span>Multiple</span> Warehouses</li>
                                <li><span>Migration</span> Asist</li>
                                <li><span>Cloud</span> Backup service</li>
                                <li><span>3 Layer</span> Backups</li>
                                <li><span>Ultra Fast</span> Response Time</li>
                                <li><span>InfiCloudBox</span> Included</li>
                            
                            </ul>
                            <div style="padding:25px 0px;text-align:center;">
                            <div class="pos_plan_price" style=""><span style="text-decoration:line-through;color:#777; text-decoration-color:#333;padding-left:10px;text-align:left;font-size:13px;"> INR 30,000/-</span><span class="pos_plan_price" style="color:#fb8800; "> INR    20,000/-</span></div> 
                        <div class="pos_plan_mini_heading">INR 5000/- Yearly renewal.</div>
                            </div>
                        </div>
                           <a href="#" class="btn large yellow  pos_btn div-center" style="width:200px;">Get Started</a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="background-light-green" style="border-bottom:3px solid #3C3B3B">
                        <div style="background-image:url(assets/pos/bubble-back.png);padding:20px;background-size:cover;background-position:center;">
                            <span style=" background:url('assets/pos/plan3.png');" class="pos_price_plan_img background-prop"  ></span>
                        </div>
                    </div>
                    <div class="pos_price_con multi">
                        
                        
                        
                        
                        <div class="pos_plan_detail">
                            <ul>
                                <li><span class="dark-yellow-1">Offline Sync</span>  Mode</li>
                                <li><span class="dark-yellow-1">Multiple</span> Outlets</li>
                                <li><span>Unlimited</span> Products</li>
                                <li><span>Unlimited</span> Billers</li>
                                <li><span>Multiple</span> Warehouses</li>
                                <li><span>Migration</span> Asist</li>
                                <li><span>Cloud</span> Backup service</li>
                                <li><span>3 Layer</span> Backups</li>
                                 <li><span>Ultra Fast</span> Response Time</li>
                                <li><span>2 InfiCloudBox</span> Included</li>
                                
                            
                            </ul>
                            <div style="padding:25px 0px;text-align:center;">
                            <div class="pos_plan_price">Coming Soon</div>
                            <div class="pos_plan_mini_heading" style="height:38px;"> </div>
                                </div>
                        </div>
                        <a href="#" class="btn large yellow  pos_btn div-center" style="width:200px;">Get Started</a>
                    </div>
                </div>


            </div>

        </div>
    </section>



    <section class="pos_sec_pad pos_extra_feature_sec background-ff">
        <div class="container">

            <div class="pos_page_heading">Not convinced yet?</div>
            <div class="pos_page_des">Check out these awesome features</div>

            <div class="row no-pad" style="display:table;">
                <div class="col-6 pos_extra_f_box" style="display:table-cell;">
                    <div style="background-image:url(assets/pos/features-cta.png);" class=""></div>
                    <img class="" src="http://www.infinityinfosol.com/assets/img/project_imgs/features-cta.jpg" />
                </div>
                <div class="col-6"  style="display:table-cell;">
                    <ul class="pos_extra_f_ul_li">
                        <li>
                            <img src="assets/pos/feature-icon1.png" />
                            <div class="pos_extra_f_heading">Shortcuts</div>
                            <div class="pos_extra_f_des">Save time by using the many keyboard shortcuts that are available in InfiRetail Retail to move through your point of sale more easily and quickly.</div>
                        </li>
                    </ul>

                    <ul class="pos_extra_f_ul_li">
                        <li>
                            <img src="assets/pos/feature-icon2.png" />
                            <div class="pos_extra_f_heading">Powerful Backup System</div>
                            <div class="pos_extra_f_des">The InfiRetail system is designed to store your data in organized file folders. All that needs to be done is to copy that folder data to a backup device of your choice.</div>
                        </li>
                    </ul>

                    <ul class="pos_extra_f_ul_li">
                        <li>
                            <img src="assets/pos/feature-icon3.png" />
                            <div class="pos_extra_f_heading">Gift Cards</div>
                            <div class="pos_extra_f_des">Our InfiRetail software offers an easy way to provide your customers the convenience and flexibility of gift cards.</div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <section class="pos_green_sec" style="padding: 30px 0px; background-color: #e4ab01;">
        <div class="container">

            <div class="row">
                <div class="pos_green_heading col-8">Contact Us for Trial Software Today!</div>
                <div class="col-4">
                <a onclick="toggle_iismodel('contact-us-form-1');" class="btn large pos_btn pos_green_btn_margin btn_transparent" >Get Started</a>
                    </div>
            </div>

        </div>
    </section>



    <div class="pos_video_sec">
        <div class="yt_video_close_btn"><i class="icon-cancel"></i></div>
        <div class="pos_yt_control_con">
            <div style="position: relative; padding-bottom: 56.25%; overflow: hidden; height: 0;">
                <iframe id="yt_video_frame" src="https://www.youtube.com/embed/hoKAH-Ynn4A?rel=0&amp;showinfo=0" frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"></iframe>
            </div>
        </div>
    </div>


<!-- </asp:Content>
<asp:Content ID="Content4" ContentPlaceHolderID="footerscript" runat="Server"> -->

    <script type="text/javascript">
        $(document).ready(function () {

            var vid_url = $('#yt_video_frame').attr('src');

            $('.yt_video_play_btn').on('click', function (ev) {
                $('.pos_video_sec').fadeIn();
                $('#yt_video_frame')[0].src += '&autoplay=1';
                ev.preventDefault();
            });

            $('.yt_video_close_btn').on('click', function () {
                $('#yt_video_frame').attr('src', vid_url);
                $('.pos_video_sec').fadeOut();
            });
        });
    </script>
  
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>
<!-- 
</asp:Content> -->

