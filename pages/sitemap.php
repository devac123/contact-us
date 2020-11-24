<!-- <%@ Page Title="Sitemap - Infinity InfoSolutions" Language="C#" MasterPageFile="~/main.master" AutoEventWireup="true" CodeFile="sitemap.aspx.cs" Inherits="Default2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="metas" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="Body" Runat="Server"> -->
<?php $ini = parse_ini_file('../app.ini'); ?>
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/header.php';?>

    <section style="background-color:white;">
        <div class="container">

            <div class="row pad-15 no-pad-v" style="text-align:left;">

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Pages</div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Error 404</a></li>
                            <li><a href="#">Coming Soon</a></li>
                            <li><a href="#">Get Started</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Services</div>
                        <ul>
                            <li><a href="#">All Services</a>
                                <ul>
                                    <li><a href="#">Website Development</a></li>
                                    <li><a href="#">Software Development</a></li>
                                    <li><a href="#">App Development</a></li>
                                    <li><a href="#">E-commerce Solutions</a></li>
                                    <li><a href="#">Search Engine Optimization</a></li>
                                    <li><a href="#">Social Media Marketing</a></li>
                                    <li><a href="#">Content Writing</a></li>
                                    <li><a href="#">Pay Per Click</a></li>
                                    <li><a href="#">Product Photography</a></li>
                                    <li><a href="#">Graphics Design</a></li>
                                    <li><a href="#">Animated Videos</a></li>
                                    <li><a href="#">Logo Design</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Latest 10 Posts</div>
                        <ul>
                            <li><a href="#">Blog Home</a></li>
                            <li><a href="#">Build Your First Admin Bundle for Laravel</a></li>
                            <li><a href="#">Learning from Historic Web Archives</a></li>
                            <li><a href="#">Publishers: Don't Restrict Writers</a></li>
                            <li><a href="#">Polishing up Your Creative Process</a></li>
                            <li><a href="#">Using Inline SVGs With HTML5</a></li>
                            <li><a href="#">Testing JavaScript with PhantomJS</a></li>
                            <li><a href="#">Typographic Readability and Legibility</a></li>
                            <li><a href="#">The Latest Updates to jQuery Mobile</a></li>
                            <li><a href="#">Build a Multi-Step Form Interface</a></li>
                            <li><a href="#">Getting Started with Web Workers</a></li>
                        </ul>
                    </div>
                </div>

            </div><%--row--%>

            <div class="row pad-15 no-pad-v" style="text-align:left;">

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Other Pages</div>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Error 500</a></li>
                        </ul>
                    </div>
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Projects</div>
                        <ul>
                            <li><a href="#">CartLauncher</a></li>
                            <li><a href="#">Quick Webpage</a></li>
                            <li><a href="#">IIS Invoice</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">Tools</div>
                        <ul>
                            <li><a href="#">Picture Editor</a></li>
                            <li><a href="#">Keyword Rank</a></li>
                            <li><a href="#">Checker</a></li>
                        </ul>
                    </div>
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">E-Learning</div>
                        <ul>
                            <li><a href="#">E-learn Home</a></li>
                            <li><a href="#">Courses</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="site_map_link_box">
                        <div class="site_map_link_heading">E-Learning Courses</div>
                        <ul>
                            <li><a href="#">HTML5 and CSS3 Tutorial for Beginners</a></li>
                            <li><a href="#">Javascript Tutorial for Beginners</a></li>
                            <li><a href="#">Jquery Tutorial for Beginners</a></li>
                            <li><a href="#">ASP.NET Tutorial for Beginners</a></li>
                            <li><a href="#">ASP.NET MVC Tutorial for Beginners</a></li>
                            <li><a href="#">Learn to Build Website on Wordpress</a></li>
                            <li><a href="#">Learn to Build Website on OpenCart</a></li>
                            <li><a href="#">Photoshop Tutorial for Beginners</a></li>
                            <li><a href="#">Illustrator Tutorial for Beginners</a></li>
                        </ul>
                    </div>
                </div>

            </div><%--row--%>

        </div>
    </section>

    <section style="background-color:#B1D15D; text-align:center;">
        <div class="container pad-30">

            <span style="font-size:30px; color:white; font-weight:600; text-shadow:1px 1px 0px #777;">Send us your brief!</span>
            <div class="btn green large" style="margin-top:-10px;">Contact Us</div>

        </div>
    </section>
    
    <?php include $_SERVER["DOCUMENT_ROOT"].$ini['folder_path'].'includes/footer.php';?>
<!-- 
</asp:Content>
<asp:Content ID="Content4" ContentPlaceHolderID="footerscript" Runat="Server">
</asp:Content>
 -->
