<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" itemscope="itemscope" itemtype="http://schema.org/Organization">
<head id="Head1" runat="server">
    <title></title>

     <meta name="viewport" content="width=device-width initial-scale=1"/>
    <!-- <asp:ContentPlaceHolder ID="metas" runat="server"></asp:ContentPlaceHolder> -->

    
    <link href="/assets/css/iis-bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/main.css" rel="stylesheet" />
    <link href="/assets/css/common.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,100,300,700' rel='stylesheet' type='text/css' />
    <link href="/assets/fonts/basic/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="/assets/fonts/iis/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="/assets/fonts/basic/css/animation.css" rel="stylesheet" type="text/css" />

    <script src="/assets/js/addlink.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
   
    <script>
        function contact_us_sent()
        {

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
<body >

 

    <form id="form1" runat="server">
      <!-- <asp:ScriptManager ID="ScriptManager1" runat="server"></asp:ScriptManager>   -->
          
        <!-- <asp:ContentPlaceHolder ID="Body" runat="server"></asp:ContentPlaceHolder> -->

    


        <!-- footer starts Here -->

        <section style="">

           
            <div style="min-height:100px; width:100%; background-color:#333; " >

                <div class="container pad-30" style="padding-left:0px; padding-right:0px; color:#999;">
                    <div class="col-4" style="">
                        <div style="height:50px; background:url('/assets/img/devologix-logo-light.png') no-repeat left center; background-size:auto 55px;"></div>
                        <div style="margin-top:10px; font-size:14px; font-weight:400; padding-left:10px;">
                            Devologix is a Software Company based in India. We work hard at providing quality web & win applications, expertise in online advertising and clean design.<br /><a style="color:#fec51b;" href="/about-us">Know More ...</a>
                        </div>
                        <br />
                        <div>
                            <div style="font-size:23px; font-weight:900;"><i class="icon-phone"></i> (+91) 97813-97819<br /></div>
                            <div style="font-size:15px; font-weight:600;"><i style="font-size:20px;" class="icon-mail-alt"></i> &nbsp; info@devologix.com</div>
                            <div></div>
                            
                        </div>

                    </div>
                    <div class="col-8 no-pad">

                        <div class="row no-pad">
                            <div class="col-4 no-pad" >
                                <div style="height:250px; background:url('/assets/img/customer_support_ribbon.svg') no-repeat center center; background-size:200px; " ></div>

                                 
                                  

                           
                            </div>

                            <div class="col-8">
                                
                                <div style="line-height:30px;  font-size:20px; color:#bbb; font-weight:900;">Stay In Touch With US</div>
                                <div style="line-height:20px; font-size:15px; color:#bbb; font-weight:300;">Sign up for newsletter for daily update</div>
                                <div style="width:100%; height:50px; background-color:#bbb; margin-top:20px;">
                                    <input type="text" placeholder="Email Address" style=" line-height:37px; width:calc( 100% - 150px); float:left; border:none; border-bottom:3px solid #999; background-color:#bbb; padding:5px 20px;" />
                                    <div class="btn yellow" style=" width:110px; line-height:50px; padding:0px;  text-align:center;  float:right; height:50px; margin-left:-10px; ">
                                        Subscribe
                                    </div>
                                </div>
                                <div style="margin-top:20px;">
                                <div style="     height:70px; width:80px; float:left; background:url('/assets/img/tree.svg') no-repeat center right; background-size:70px;"></div> 
                                 <div style="height:70px; width:calc( 100% - 80px); float:left; padding:20px 5px; font-size:14px;">
                                    We provide special discount for Non Profits and Social Welfare Orgnisations
                                </div>
                                    </div>
                            </div>
                            
                        </div>
                     


                    </div>


                    <div class="col-4" style="display:none">
                       
                        <div  style="height:180px; padding-top:100px; text-shadow:1px 1px 0px #333;  text-align:center; background-image:url('/assets/img/newsd.png'); background-position:center center; background-repeat:no-repeat;  background-size:100%;   color:white; font-size:18px; font-weight:600; "></div>
                        <div style="  text-align:center;  color:#545454; font-size:20px; font-weight:600;">
                         
                            <input style=" line-height:20px; padding:5px; margin-bottom:10px;  font-size:15px; width:80%; color:#848484 " placeholder="Email Address" />
                            <span class="btn blue" style="margin-left:-5px;"> Subscribe to Our News</span>

                        </div>
                    </div>
                    
                    <div class="col-4" style="display:none">
                        <span style="font-weight:600;">Like & Share</span>
                        <div class="fb-page" data-href="https://www.facebook.com/InfinityInfoSolutions/"  data-height="215" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-posts="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/InfinityInfoSolutions/"><a href="https://www.facebook.com/InfinityInfoSolutions/">Devologix</a></blockquote></div></div>
                    </div>
                </div>

                <div class="container" style="padding-bottom:20px; text-align:center;">
                                <a href="https://www.facebook.com/InfinityInfoSol" target="_blank" class="btn-slideup"><div class="text"> <i style="color:#507BBE;" class=" icon-facebook "></i> | &nbsp; Like Us</div><span style="background-color:#507BBE;" class="slide"></span></a>
                              
                                <!-- <a href="https://plus.google.com/109460498433395611983" target="_blank" class="btn-slideup"><div class="text whattsapp-color" ;><i style="color:rgb(101,188,84);" class="icon-whatsapp"></i> | &nbsp;Whatsapp</div><span  style="background-color:#EF4745;" class="slide"></span></a> -->
                                
                                <!-- <a href="https://plus.google.com/109460498433395611983" target="_blank" class="btn-slideup"><div class="text insta-color" ><i style="color:rgb(101,188,84);" class="icon-instagram"></i> | &nbsp;Instagram</div><span  style="background-color:#EF4745;" class="slide"></span></a> -->
                                <a href="https://www.youtube.com/user/InfinityInfoSol" target="_blank" class="btn-slideup"><div class="text"><i style="color:#EC6B53;" class="icon-youtube"></i> | &nbsp; Subscribe</div><span style="background-color:#EC6B53;"  class="slide"></span></a>
                                <a href="#" target="_blank" class="btn-slideup"><div class="text"><i style="color:#64CCEF;" class="icon-twitter"></i> | &nbsp; Follow Us</div><span  style="background-color:#64CCEF;" class="slide"></span></a>
                                <a href="https://plus.google.com/109460498433395611983" target="_blank" class="btn-slideup"><div class="text "><i style="color:#EF4745;" class="icon-gplus"></i> | &nbsp; Add Us</div><span  style="background-color:#EF4745;" class="slide"></span></a>
                </div>



            </div>
          
            <div style="min-height:120px; width:100%; background-color:#484848; color:white; " class="footer-list" >
                <div class="container" style="height:0px; background:url('/assets/img/color-bar.png'); background-position:center;  background-size:100%; "></div>
                 <div class="container pad-20" style=" padding-left:0px; padding-right:0px; text-align:center;">
                     
                    
                       <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-link"></i> Quick Links</div>
                           <a class="links" href="/">Home</a>
                           <a class="links" href="/about-us">About Us</a>
                           <a class="links" href="/contact-us">Contact Us</a>
                           <a class="links" href="/coming-soon">Client Area</a>
                           
                       </div>
                         <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-server"></i> Services</div>
                           <a class="links" href="/services/website-development">Website Development</a>
                           <a class="links" href="/services/software-development">Software Development</a>
                           <a class="links" href="/services/app-development">App Development</a>
                           <a class="links" href="/services">All Services</a>
                           
                       </div>
                     <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-paper-plane"></i> Projects</div>
                           <a class="links" href="/projects/infiretail">Devo Retail</a>
                           <a class="links" href="/projects/inficart">Devo Cart</a>
                           <a class="links" href="/projects/infi-school-manager">Infi SchoolManager</a>
                         <a class="links" href="/projects">All Projects</a>
                           
                       </div>
                     <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-flag"></i> Blog</div>
                           <a class="links" href="/blog">Blog Home</a>
                           <a class="links" href="/coming-soon">Catagories</a>
                           <a class="links" href="/coming-soon">Trending</a>
                           <a class="links" href="/coming-soon">Recent</a>
                       </div>

                     <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-graduation-cap"></i> E-learning</div>
                           <a class="links" href="/e-learn">E-Learn Home</a>
                           <a class="links" href="/e-learn/course">Courses</a>
                           <a class="links" href="/coming-soon">Topics</a>
                           <a class="links" href="/coming-soon">Tutorials</a>
                           
                       </div>

                     <div class="col-2 col-ml-6">
                           <div class="headings"><i class="icon-wrench"></i> Tools</div>
                           <a class="links" href="/coming-soon">Picture Editor</a>
                           <a class="links" href="/coming-soon">Keyword Rank Checker</a>
                           <a class="links" href="/coming-soon">JS Beautifier</a>
                           
                       </div>


                </div>



            </div>
            <div style="color:white; width:100%; padding:0px; margin:0px; position:relative; background-color:#333;  font-weight:300; " >
                <div class="container no-after footer_copyright_sec_box" style="padding:10px 15px; line-height:24px; font-size:14px; text-align:center;">
                 Copyright &copy; 2012-2021 Devologix. All rights Reserved | <a href="/pages/privacy-policy">Privacy Policy</a> | <a href="/pages/terms-and-conditions">Terms & Conditions</a> | <a href="/pages/sitemap">Sitemap</a>
                


                
                    
                    <div style="height:1px; clear:both;"></div>
                </div>
            </div>
        </section>

 
        <div id="modal-area">


            <div id="contact-us-form-1" class="iis-model">
                <div class="model-container">
                    
                     <div class="contact-us-model-container">
                            


                         <div id="frm-contact-us-popup" class="iis-forms">
                            <div  style="height:130px; background:#fec51b url('/assets/img/contact-us-form-head.png') center center no-repeat; background-size:auto 100%;"> </div>
                             <div class="zigzag-top" style="background-color: #f7c90d;"></div>
                             
                              <div class="form-parts-con">
                                 <div class="form-part active">
                                 

                                   <div style="min-height:300px; padding:5px 20px;">
                                 <div style=" font-size:30px; color:#545454;  font-weight:300; margin-bottom:20px; ">
                                     Feel Free to leave us a Message
                                     
                                 </div>

                                 <div style="height:40px; background-color:#fff; margin-top:5px; margin-bottom:5px; border:1px solid #ddd; display:table; width:100%; position:relative;">
                                     
                            

                                         <div style="float:left; height:40px; line-height:40px;">
                                             <i class="icon-user" style="color:#484848; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                     <div style="float:right; height:40px; line-height:40px;">
                                             <i class="icon-ok" style="color:#fedf80; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                       
                                           <input style=" width:100%; left:0px; position:absolute; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; background-color:transparent; border:none; line-height:40px; color:#545454; padding:0px 40px 0px 40px;" placeholder="Name" />
                                         
                                    



                                     
                                     
                                 </div>

                                  <div style="height:40px; background-color:#fff; margin-top:5px; margin-bottom:5px; border:1px solid #ddd; display:table; width:100%; position:relative;">
                                     
                            

                                         <div style="float:left; height:40px; line-height:40px;">
                                             <i class="icon-mail-alt" style="color:#484848; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                     <div style="float:right; height:40px; line-height:40px;">
                                             <i class="icon-ok" style="color:#fedf80; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                       
                                           <input style=" width:100%; left:0px; position:absolute; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; background-color:transparent; border:none; line-height:40px; color:#545454; padding:0px 40px 0px 40px;" placeholder="Email" />
                                         
                                    



                                     
                                     
                                 </div>
                                <div style="height:40px; background-color:#fff; margin-top:5px; margin-bottom:5px; border:1px solid #ddd; display:table; width:100%; position:relative;">
                                     
                            

                                         <div style="float:left; height:40px; line-height:40px;">
                                             <i class="icon-phone " style="color:#484848; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                     <div style="float:right; height:40px; line-height:40px;">
                                             <i class="icon-ok" style="color:#fedf80; font-size:20px; width:40px; display:block; text-align:center;"></i>
                                         </div>
                                       
                                           <input style=" width:100%; left:0px; position:absolute; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; background-color:transparent; border:none; line-height:40px; color:#545454; padding:0px 40px 0px 40px;" placeholder="Contact No. ( Optional )" />
                                         
                                    



                                     
                                     
                                 </div>
                                 <div style="min-height:10px; background-color:#fff;margin-top:5px; margin-bottom:5px; border:1px solid #ddd;">
                                     <textarea style="width:100%; min-height:150px; max-height:150px; padding:10px;  color:#545454; min-width:100%; max-width:540px; background-color:transparent; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; border:none;" placeholder="Message"></textarea>
                                     
                                     
                                 </div>



                             </div>

                                 <div class="zigzag-bottom" style="background-color:#545454;"></div>

                                  <div style="min-height:40px;  background-color:#545454;">
                             <div class="pad-20">
                             <div style="position:relative;" id="btn-contact-us-send" class="btn yellow large col-4 pull-center" onclick="contact_us_send();"> <i class="icon-paper-plane"></i> &nbsp; <span class="btn-txt"> Send Message</span></div>
                                 
                            
                                  <script>
                                      function contact_us_send() {
                                          toggleFromsProcessing('frm-contact-us-popup');





                                          //server module 
                                          setTimeout(function ()
                                          {
                                              document.getElementById("<%= UpdateButton1.ClientID %>").click();
                                          }, 2000);


                                      }

                                  </script>


                                 </div>
                         </div>

                                </div>

                                 <div class="form-part" style="">
                                      
                                      <div style="min-height:300px; max-width:600px; padding:5px 20px;">
                               
                                 <div style=" font-size:35px; margin-top:50px; padding:30px; padding-bottom:0px; color:#545454; font-weight:300;">
                                     Thanks for writing US
                                     
                                 </div>
                                 <div style="font-size:20px; padding:10px 30px; color:#545454; font-weight:300;">
                                     
                                     We have recevied your message.
                                     Our executives will contact you back with-in 24 hours.
                                 </div>

                                 

                             </div>
                                      <div class="zigzag-bottom" style="background-color:#545454; height:50px;"></div>
                                 </div>

                             </div>



                             <div class="form-processing"></div>
                             <div class="form-result"></div>

                         </div>



                         






                        </div>
                   
                    <div class="model-close"></div>
                     
                </div>


            </div>


        </div>

        <div>
       
      
        
        
    
    </div>
        <div style="display:none;">
         <!-- <asp:TextBox runat="server" ID="tb_action_asp"></asp:TextBox> -->

         <!-- <asp:UpdatePanel runat="server" id="UpdatePanel" updatemode="Conditional"> -->
        <!-- <Triggers>
            <asp:AsyncPostBackTrigger controlid="UpdateButton1" eventname="Click" />
        </Triggers>
            <ContentTemplate>

               
                <asp:TextBox runat="server" ID="tb_data_asp"></asp:TextBox>
                <asp:Button runat="server" id="UpdateButton1" onclick="UpdateButton1_Click" text="Update" />               

            </ContentTemplate>
        </asp:UpdatePanel> --> 
    
    </div>
 
    </form>

    


    <script src="/assets/js/jquery.touchSwipe.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/iis-bootstrap.js"></script>
   
      <!-- <asp:ContentPlaceHolder ID="footerscript" runat="server"></asp:ContentPlaceHolder> -->

</body></html>
