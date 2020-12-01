
<!-- <%@ Page Title="Contact Us - Infinity InfoSolutions" Language="C#" MasterPageFile="~/main.master" AutoEventWireup="true" CodeFile="contact-us.aspx.cs" Inherits="Default2" %> -->

<!-- <asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server"> -->

    <?php $ini = parse_ini_file('../app.ini'); ?>
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>
 <style>
 .loading-btn{ height:46px ; background-image:url('/assets/img/loading-dots.gif'); background-position:center center; background-repeat: no-repeat;  background-size:70px; }
 
.is-invalid{
    display: none;
}

</style>




    <section style="background-color:#e4ab01; background-image:url(/assets/img/other/contact-top-bg.png); background-repeat:no-repeat; background-size:cover; background-position:center;">
        <div class="container">

            <div class="row">
                <div class="col-7">
                    <div style="padding-top:45px; font-size:40px; color:#fff; font-weight:900; text-shadow:1px 1px 0px #666;">Contact Us</div>
                    <div style="font-size:25px; color:#fff; font-weight:300;">Send us an email or fill out the form below and we’ll get back to you as soon as we can.</div>
                </div>
                <div class="col-5">
                    <div style="width:100%; height:215px; background-color:; background-image:url(/assets/img/other/contact-top-img.png); background-repeat:no-repeat; background-position:center; background-size:contain;"></div>
                </div>
            </div>

        </div>
    </section>

    <section style="background-color:#333333;">
        <div class="container">

            <div class="row">

                <div class="col-4">
                    <a href="https://www.facebook.com/InfinityInfoSol" target="_blank"><div class="con-common-btn-style con-btn-fb" style="background-image:url(/assets/img/other/con-fb.png);">fb/Devologix</div></a>
                </div>
                <div class="col-4">
                    <a href="mailto:info@devologix.com"><div class="con-common-btn-style con-btn-mail" style="background-image:url(/assets/img/other/con-mail.png);">Info@Devologix.com</div></a>
                </div>
                <div class="col-4">
                    <a href="tel:+91"><div class="con-common-btn-style con-btn-phone" style="background-image:url(/assets/img/other/con-whatsapp.png);">+91 - 97813-97819</div></a>
                </div>
            </div>

        </div>
    </section>


    <section style="background-color:#F5F5F5;">
        <div class="container" style="padding:30px 0px;">

            <div style="color:#545454; font-size:35px; font-weight:900; padding:20px 0px; text-align:center;">Get in Touch</div>
              <!--contact us form -->
            <div class="row">
                <div class="col-5">
                    <div style="width:100%; height:320px; background-color:; background-image:url(/assets/img/other/con-page-left.png); background-repeat:no-repeat; background-position:center;"></div>
                </div>
                <div class="col-7"style =" ">
                    
                    <div style="width:100%; padding-bottom:15px; display :none;" class="apriciate-msg" >
                       <img src="/assets/img/loading-hourglass.gif"  style="width: 90% ;" >
                    </div>
                    
                     <div style="width:100%; padding-bottom:15px;" class="form-mail" >
                        <input type="text" id ="name"  data-validation-pattern=""  required name = "sendername" class="con-input-element" placeholder="Name*" data-key="person_name" data-group="contact-us" />
                        <span class="formerror  " style="display: none; color: red;"></span>
                    </div>
                    <div style="width:100%; padding-bottom:15px;" class="form-mail">
                        <input type="text" id ="email"  data-validation-pattern="" required name = "senderemail"  class="con-input-element" placeholder="Email Address*" data-key="person_email" data-group="contact-us" />
                        <span class="formerror  " style="display: none; color: red;"></span>
                    </div>
                    <div style="width:100%; padding-bottom:15px;" class="form-mail">
                        <input type="tel" id ="phone"  data-validation-pattern="" required name = "senderph"  class="con-input-element" placeholder="Phone*" data-key="person_phone" data-group="contact-us" />
                        <span class="formerror  " style="display: none; color: red;"></span>
                    </div>
                    <div style="width:100%; padding-bottom:15px;" class="form-mail">
                        <input class="con-input-element con-input-area"  id = "msg"  placeholder="Message*"  data-key="person_msg" data-group="contact-us" />
                        <span class="formerror  " style="display: none; color: red;"></span>
                    </div>
                    <div style="width:100%; padding-bottom:15px; text-align:center; " id= "loading-spiner" class="form-mail">
                        <input type="submit"  id="submit_btn" class="btn yellow large btn-decoration"  data-selgroup="contact-us" data-controller="contactus" data-func="SendQuery" />    
                        <span class= "empty-error" style="display:none; color:red">Something is missing!</span> 
                        <span  class="btn default  large btn-decoration loading-btn" style=" display:none;">Sending..</span>
                    </div> 
               
            </div>
            <!-- contact us form send end her -->

        </div>
    </section>
    
<?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>

<!-- </asp:Content> -->
<!-- <asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server"> -->
<!-- </asp:Content> -->

