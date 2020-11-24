<!-- <%@ Master Language="C#" AutoEventWireup="true"  MasterPageFile="~/main.master" CodeFile="services.master.cs" Inherits="services" %> -->

<!-- <asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server">
    <asp:ContentPlaceHolder ID="metas" runat="server"></asp:ContentPlaceHolder>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server">
    <asp:ContentPlaceHolder ID="head" runat="server"></asp:ContentPlaceHolder>
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server">

        <asp:ContentPlaceHolder ID="Body" runat="server"></asp:ContentPlaceHolder> -->
    <?php $ini = parse_ini_file('../app.ini'); ?>
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>

      <section style="padding-bottom:40px; background-color:#f5f5f5;">
        <div class="container">

            <div style="color:#545454; font-size:25px; font-weight:900; padding-top:40px; text-align:center;">
             We also blog,
            </div>
             <div style="font-size:20px; font-weight:300; text-align:center;">
                 Learn more about E-commerce with the following blog post by Devologix
             </div>

            <div class="row">

                <div class="iis-post col-4">
                    <div class="post-img">
                        <img src="/assets/img/temp/7.jpg"   />
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
                            <span  class="post-tag" >Festive</span>
                            <span class="post-tag" >Design</span>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <!-- <%--box--%> -->

                <div class="iis-post col-4">
                    <div class="post-img">
                        <img src="/assets/img/temp/10.jpg"   />
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
                            <span  class="post-tag" >Festive</span>
                            <span class="post-tag" >Design</span>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <!-- <%--box--%> -->

                <div class="iis-post col-4">
                    <div class="post-img">
                        <img src="/assets/img/temp/9.jpg"   />
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
                            <span  class="post-tag" >Festive</span>
                            <span class="post-tag" >Design</span>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <!-- <%--box--%> -->


            </div>

        </div>
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>

<!-- </asp:Content>
<asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server">

    <asp:ContentPlaceHolder ID="footerscript" runat="server"></asp:ContentPlaceHolder>
</asp:Content> -->
