<!-- <%@ Page Title="" Language="C#" MasterPageFile="~/main.master" AutoEventWireup="true" CodeFile="coming-soon.aspx.cs" Inherits="Default2" %> -->

<!-- <asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server"> -->
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server"> -->
<?php $ini = parse_ini_file('../app.ini'); ?>
<?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>
    <section style="padding-top:30px; background-color:white;">
        <div class="container">

            <div class="row no-pad">

                <div class="col-12">
                    <div style="width:100%; text-align:center;">
                        <div style="padding-top:15px; color:#545454; font-size:50px; font-weight:800; text-transform:uppercase;">Coming Soon</div>
                        <div style="padding-top:10px; color:#666; font-size:20px; font-weight:400;">Our website is under construction, we are working very hard to give you the best experience with this one.<br />If you have any questions in the meantime, please contact us or join our newsletter to be notify.</div>
                        <div style="width:100%; padding-top:20px;">
                            <a href="/" class="btn yellow large">Home</a>
                            <a href="/contact-us" class="btn large">Contact</a>
                        </div>
                    </div>
                </div>
                

            </div>

        </div>

        <div class="coming_soon_page_bg" style="background-image:url(/assets/img/coming_soon.png);"></div>

    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>
<!-- </asp:Content> -->
<!-- <asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server"> -->
<!-- </asp:Content> -->

