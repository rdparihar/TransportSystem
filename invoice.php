<!DOCTYPE html>
<!-- saved from url=(0074)http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html -->
<html lang="en"><!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It&#39;s modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Invoice | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="http://demo.geekslabs.com/materialize/v2.1/layout01/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize/v2.1/layout01/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="./invoice_files/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="./invoice_files/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="./invoice_files/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="./invoice_files/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="./invoice_files/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="./invoice_files/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="loaded">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div id="invoice">
            <div class="invoice-header">
              <div class="row section">
                <div class="col s12 m6 l6">
                  <img src="./invoice_files/generic-logo.png" alt="company logo">
                  <p>To,
                    <br>
                    <span class="strong">Jonathan Doe</span>
                    <br>
                    <span>125, ABC Street,</span>
                    <br>
                    <span>New Yourk, USA</span>
                    <br>
                    <span>+91-(444)-(333)-(221)</span>
                  </p>
                </div>

                <div class="col s12 m6 l6">
                  <div class="invoce-company-address right-align">
                    <span class="invoice-icon"><i class="mdi-social-location-city cyan-text"></i></span>

                    <p><span class="strong">Company Name LLC</span>
                      <br>
                      <span>125, ABC Street,</span>
                      <br>
                      <span>New Yourk, USA</span>
                      <br>
                      <span>+91-(444)-(333)-(221)</span>
                    </p>
                  </div>

                  <div class="invoce-company-contact right-align">
                    <span class="invoice-icon"><i class="mdi-communication-quick-contacts-mail cyan-text"></i></span>
                    <p><span class="strong">www.exampledomain.com</span>
                      <br>
                      <span>info@exampledomain.com</span>
                      <br>
                      <span>admin@exampledomain.com</span>
                    </p>
                  </div>

                </div>
              </div>
            </div>

            <div class="invoice-lable">
              <div class="row">
                <div class="col s12 m3 l3 cyan">
                  <h4 class="white-text invoice-text">INVOICE</h4>
                </div>
                <div class="col s12 m9 l9 invoice-brief cyan white-text">
                  <div class="row">
                    <div class="col s12 m3 l3">
                      <p class="strong">Total Due</p>
                      <h4 class="header">$ 3,600.00</h4>
                    </div>
                    <div class="col s12 m3 l3">
                      <p class="strong">Invoice No</p>
                      <h4 class="header">MT_A_124563</h4>
                    </div>
                    <div class="col s12 m3 l3">
                      <p class="strong">Due Date</p>
                      <h4 class="header">22.05.2015</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="invoice-table">
              <div class="row">
                <div class="col s12 m12 l12">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th data-field="no">No</th>
                        <th data-field="item">Item</th>
                        <th data-field="uprice">Unit Price</th>
                        <th data-field="price">Unit</th>
                        <th data-field="price">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>MacBook Pro</td>
                        <td>$ 1,299.00</td>
                        <td>2</td>
                        <td>$ 1,100.00</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>iMAC</td>
                        <td>$ 1,099.00</td>
                        <td>2</td>
                        <td>$ 2,198.00</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>iPhone</td>
                        <td>$ 299.00</td>
                        <td>5</td>
                        <td>$ 1,495.00</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>iPad 3</td>
                        <td>$399.00</td>
                        <td>1</td>
                        <td>$ 399.00</td>  
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>iPod</td>
                        <td>$49.00</td>
                        <td>2</td>
                        <td>$ 98.00</td>
                      </tr>
                      <tr>
                        <td colspan="3" class="white"></td>
                        <td>Sub Total:</td>
                        <td>$ 5,290.00</td>
                      </tr>
                      <tr>
                        <td colspan="3" class="white"></td>
                        <td>Service Tax</td>
                        <td>11.00%</td>
                      </tr>
                      <tr>
                        <td colspan="3" class="white"></td>
                        <td class="cyan white-text">Grand Total</td>
                        <td class="cyan strong white-text">$ 5,871.90</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
            
            <div class="invoice-footer">
              <div class="row">
                <div class="col s12 m6 l6">
                  <p class="strong">Payment Method</p>
                  <p>Please make the cheque to: AMANDA ORTON</p>
                  <p class="strong">Terms &amp; Condition</p>
                  <ul>
                    <li>You know, being a test pilot isn't always the healthiest business in the world.</li>
                    <li>We predict too much for the next year and yet far too little for the next 10.</li>
                  </ul>
                </div>
                <div class="col s12 m6 l6 center-align">
                  <p>Approved By</p>
                  <img src="./invoice_files/signature-scan.png" alt="signature">
                  <p class="header">AMANDA ORTON</p>
                  <p>Managing Director</p>
                </div>
              </div>
            </div>
            
          </div>
          <!-- Floating Action Button -->
            
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation right-aligned ps-container ps-active-y" style="width: 300px; right: -310px; height: 703px;">
            <li class="li-hover">
            <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li class="active">
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity" style="display: block;">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="http://demo.geekslabs.com/materialize/v2.1/layout01/eCommerce-invoice.html#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart" style="display: block;">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="./invoice_files/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="./invoice_files/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="./invoice_files/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="./invoice_files/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="./invoice_files/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 643px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 588px;"></div></div></ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="./invoice_files/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="./invoice_files/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="./invoice_files/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="./invoice_files/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="./invoice_files/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="./invoice_files/plugins.js"></script>
    


<div class="hiddendiv common"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); right: 0px;"></div><div class="drag-target" style="right: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><iframe frameborder="0" scrolling="no" style="border: 0px; display: none; background-color: transparent;"></iframe><div id="GOOGLE_INPUT_CHEXT_FLAG" input="null" input_stat="{&quot;tlang&quot;:true,&quot;tsbc&quot;:true,&quot;pun&quot;:true,&quot;mk&quot;:false,&quot;ss&quot;:true}" style="display: none;"></div></body></html>