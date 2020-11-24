<!-- <%@ Page Title="404 Page not found - Infinity InfoSolutions" Language="C#" MasterPageFile="~/main.master" AutoEventWireup="true" CodeFile="404.aspx.cs" Inherits="Default2" %> -->

<!-- <asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server"> -->
<?php $ini = parse_ini_file('../app.ini'); ?>
<?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>
    <section style="background-color:#F9A61A; background-image:url(assets/img/other/contact-top-bg.png); background-repeat:no-repeat; background-size:cover; background-position:center;">
        <div class="container">

            <div class="row">
                <div class="col-7">
                    <div style="padding-top:45px; font-size:40px; color:#fff; font-weight:900; text-shadow:1px 1px 0px #666; background-color:;">404 Error</div>
                    <div style="font-size:25px; color:#fff; font-weight:300;">The resource you are looking for has been removed, had its name changed, or is temporarily unavailable.</div>
                </div>
                <div class="col-5">
                    <div style="width:100%; height:215px; background-color:; background-image:url(/assets/img/error-page-top.png); background-repeat:no-repeat; background-position:center; background-size:contain;"></div>
                </div>
            </div>

        </div>
    </section>
    
    <section style="padding:0px 0px 40px; background-color:#F5F5F5;">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div style="text-align:center;">
                        <div style="font-size:105px; color:#545454; font-weight:800;">404</div>
                        <div style="padding-top:20px; font-size:30px; color:#777; font-weight:600;">Sorry! The Page Not Found</div>
                        <div style="padding-top:10px; font-size:20px; color:#777;">The Page you are looking for doesn't exist or an other error occurred.<br />Go back, or head over to InfinityInfoSol.com to choose a new direction.</div>
                        <a href="/"><div class="btn large green" style="margin-top:20px;">Go to Home</div></a>
                        <a href="/contact-us"><div class="btn large" style="margin-top:20px;">Contact Us</div></a>
                    </div>
                    

                </div>

            </div>
        </div>
    </section>
    <?php $ini = parse_ini_file('../app.ini'); ?>
<?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>

<!-- </asp:Content> -->
<!-- <asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server"> -->
<!-- </asp:Content> -->

