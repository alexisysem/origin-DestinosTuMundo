<?php
    require("etiquetas.php"); 
    include('header.php');
?>

<div class="wrapper ps-static en-lang-class">
        <div class="page">
            <div class="top-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="top_block">
                                <p class="welcome-msg"><?php echo label_bienvenido  ?> </p>
                                <div class="header-buttons">
                                    <div class="header-button currency-list">
                                        <a title="Spanish" id="lnkEspaniol">
                                            <img src="images/flag_pe.png" />
                                        </a>
                                    </div>
                                    <div class="header-button lang-list">
                                        <a title="English" id="lnkIngles">
                                            <img src="images/flag_us.png" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="header-container-tile">

                <div class="header-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header">
                                    <h1 class="logo">
                                        <strong>Destinos Tu Mundo</strong>
                                        <a href="index.php" title="Destinos Tu Mundo">
                                            <img src="images/logo.png" alt="Destinos Tu Mundo">
                                        </a>
                                    </h1>
                                    <div class="right_head">
                                        <div class="quick-access hidden">
                                            <ul class="links">
                                                <li class="first link-1"><a href="http://livedemo00.template-help.com/magento_47319/customer/account/" title="My Account">My Account</a></li>
                                                <li class="link-2"><a href="http://livedemo00.template-help.com/magento_47319/wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                <li class="link-3 top-car"><a href="http://livedemo00.template-help.com/magento_47319/checkout/cart/" title="My Cart" class="top-link-cart">My Cart</a></li>
                                                <li class="link-4"><a href="http://livedemo00.template-help.com/magento_47319/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                                <li class="last link-5"><a href="http://livedemo00.template-help.com/magento_47319/customer/account/login/" title="Log In">Log In</a></li>
                                            </ul>
                                        </div>
                                        <div class="block-cart-header hidden">
                                            <h3>My Cart:</h3>
                                            <div class="block-content">
                                                <div class="empty">
                                                    <div>0 item(s) - <span class="price">$0.00</span></div>
                                                    <div class="cart-content">
                                                        You have no items in your shopping cart.
                                                    </div>
                                                </div>
                                                <p class="mini-cart"><strong>0</strong></p>
                                            </div>
                                        </div>
                                        <form id="search_mini_form" action="http://livedemo00.template-help.com/magento_47319/catalogsearch/result/" method="get">
                                          <?php 
                                                echo '<div class="form-search">
                                                  <label for="search">Search:</label>
                                                  <input id="search" type="text" name="q" value="" class="input-text" autocomplete="off">
                                                  <button type="submit" title="'.boton_busqueda_principal.'" class="button"><span><span>'.boton_busqueda_principal.'</span></span></button>
                                                  <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                                                </div>'
                                            ?>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="nav-container">
                                        <ul id="nav" class="sf-menu sf-js-enabled">
                                                    <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        // Retrieve appropriate title according to the chosen language in the system
                                                          $idioma = '';
                                                          //echo "<script>alert(".is_null($idioma).")</script>";
                                                          if(!array_key_exists('lang',$_GET))
                                                            $idioma = 'ES';
                                                          else $idioma = $_GET["lang"];

                                                        $sql = "SELECT m.CodigoMenu,mt.DescripcionMenu,m.Pagina
                                                                FROM MENU m
                                                                INNER JOIN MENUTRANSLATION mt ON m.CodigoMenu = mt.CodigoMenu
                                                                WHERE mt.CodigoIdioma = '".$idioma."'";


                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {
                                                           echo '<li class="level0 nav-1 first level-top">
                                                            <a href="'. $row{'Pagina'} .'?lang='.$idioma.'" class="level-top"><span>
                                                            '.$row{'DescripcionMenu'}.'</span></a>
                                                        </li>'; 
                                                           
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);


                                                        ?>
                                        </ul>
                                    </div>
                                    <div class="header_block">
                                        <div class="index_row1">
                                            <div class="index_cols_wrapper">
                                                <!-- banner principal -->
                                                <div class="index_col2" style="min-height: 390px;">
                                                    <!-- Demo Slider -->
                                                    <!-- banner main-->
                                                    <div id="banner_main">
                                                        <div class="flex-container">
                                                            <div class="flexslider slide">
                                                                <ul class="slides">
                                                        <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        // Retrieve appropriate title according to the chosen language in the system
                                                          //$idioma = '';
                                                          //echo "<script>alert(".is_null($idioma).")</script>";
                                                          /*if(!array_key_exists('lang',$_GET))
                                                            $idioma = 'ES';
                                                          else $idioma = $_GET["lang"];*/
                                                         

                                                        $sql = "call usp_SelSeccionHome ('B','".$idioma."')";

                                                        
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo '<li class="image">
                                                                        <img src="'.$row{'ImagenPrincipal'}.'" alt="" /><div class="flex-caption">
                                                                            <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                            <p>'.$row{'DescripcionCortaPaquete'}.'</p>
                                                                            <div class="ban_price">$ '.number_format($row{'PrecioFinal'},2).'</div>
                                                                        </div>
                                                              </li>';
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>                                                


                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Demo Slider -->
                                                </div>
                                                <!-- cierra banner principal -->
                                                <!-- cierra banner SECCION A-->
                                                <div class="index_col1" style="min-height: 390px;">
                                                    <div class="banner_medium ban1">
                                                        <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        // Retrieve appropriate title according to the chosen language in the system
                                                          //$idioma = '';
                                                          //echo "<script>alert(".is_null($idioma).")</script>";
                                                          /*if(!array_key_exists('lang',$_GET))
                                                            $idioma = 'ES';
                                                          else $idioma = $_GET["lang"];*/
                                                         

                                                        $sql = "call usp_SelSeccionHome ('A','".$idioma."')";

                                                        
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo   '<a href="detalle.php">
                                                                <div class="hot"><strong>Local</strong>tour</div>
                                                                <img src="'.$row{'ImagenPrincipal'}.'" alt="">
                                                                <div class="banner_holder">
                                                                <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                <p>'.$row{'DescripcionCortaPaquete'}.'</p>
                                                                <div class="ban_price">$ '.number_format($row{'PrecioFinal'},2).'</div>
                                                                <span class="btn_shop">'.boton_ver_mas.'!</span>
                                                                </div>
                                                                </a>';
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>                                                
                                                    </div>
                                                </div>
                                                <!-- cierra banner  SECCION C-->
                                            </div>
                                            <div class="index_col3">
                                                <div class="banner_medium ban4">
                                                    <a href="detalle.php">
                                                        <div class="hot"><strong>Local</strong>tour</div>

                                                        <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        // Retrieve appropriate title according to the chosen language in the system
                                                          //$idioma = '';
                                                          //echo "<script>alert(".is_null($idioma).")</script>";
                                                          /*if(!array_key_exists('lang',$_GET))
                                                            $idioma = 'ES';
                                                          else $idioma = $_GET["lang"];*/
                                                         

                                                        $sql = "call usp_SelSeccionHome ('C','".$idioma."')";

                                                        
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo '<img src="'.$row{'ImagenPrincipal'}.'" alt="">
                                                                <div class="banner_holder">
                                                                    <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                    <p>'.$row{'DescripcionCortaPaquete'}.'</p>
                                                                    <div class="ban_price">$ '.number_format($row{'PrecioFinal'},2).'</div>
                                                                    <span class="btn_shop">'.boton_ver_mas.'!</span>
                                                                </div>';        
                                                        
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="index_row2">
                                            <div class="index_cols_wrapper">
                                                <div class="index_col2">
                                                    <div class="banner_wide ban3">
                                                        
                                                        <!--Seccion E -->
                                                        
                                                        <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        // Retrieve appropriate title according to the chosen language in the system
                                                          //$idioma = '';
                                                          //echo "<script>alert(".is_null($idioma).")</script>";
                                                          /*if(!array_key_exists('lang',$_GET))
                                                            $idioma = 'ES';
                                                          else $idioma = $_GET["lang"];*/
                                                         

                                                        $sql = "call usp_SelSeccionHome ('E','".$idioma."')";

                                                        
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo '<a href="detalle.php">
                                                                <img src="'.$row{'ImagenPrincipal'}.'" alt="">
                                                                <div class="banner_holder">
                                                                    <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                    <p>'.$row{'DescripcionCortaPaquete'}.'</p>
                                                                    <div class="ban_price">$ '.number_format($row{'PrecioFinal'},2).'</div>
                                                                    <span class="btn_shop">'.boton_ver_mas.'!</span>
                                                                </div>
                                                                </a>
                                                                ';        
                                                        
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="index_col1">
                                                    <div class="banner_small ban2">
                                                        <!-- Seccion D -->
                                                        <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        $sql = "call usp_SelSeccionHome ('D','".$idioma."')";
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo '<a href="detalle.php">
                                                                <img src="'.$row{'ImagenPrincipal'}.'" alt="">
                                                                <div class="banner_holder">
                                                                    <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                    <p>'.$row{'DescripcionCortaPaquete'}.' $ '.number_format($row{'PrecioFinal'},2).' </p>
                                                                </div>
                                                                </a>';        
                                                        
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="index_col3">
                                                <div class="banner_small ban5">
                                                    <!-- Seccion F -->
                                                    <?php

                                                        $username = "root";
                                                        $password = "1234";
                                                        $hostname = "localhost"; 

                                                        //connection to the database
                                                        $dbhandle = mysql_connect($hostname, $username, $password) 
                                                         or die("Unable to connect to MySQL");
                                                        //echo "Connected to MySQL<br>";

                                                        //select a database to work with
                                                        $selected = mysql_select_db("destinos",$dbhandle) 
                                                          or die("Could not select examples");

                                                        $sql = "call usp_SelSeccionHome ('F','".$idioma."')";
                                                        
                                                        //execute the SQL query and return records
                                                        $result = mysql_query($sql);

                                                        //fetch tha data from the database 
                                                        while ($row = mysql_fetch_array($result)) {

                                                        echo '<a href="detalle.php">
                                                                <div class="hot"><strong>Hot</strong>tour</div>
                                                                <img src="'.$row{'ImagenPrincipal'}.'" alt="">
                                                                <div class="banner_holder">
                                                                    <h2>'.$row{'TituloPaquete'}.'</h2>
                                                                    <p>'.$row{'DescripcionCortaPaquete'}.' $ '.number_format($row{'PrecioFinal'},2).' </p>
                                                                </div>
                                                                </a>';        
                                                        
                                                        }
                                                        //close the connection
                                                        mysql_close($dbhandle);
                                                        ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="main-container-tile">
            </div>
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer">

                                <div class="footer-cols-wrapper">
                                    <div class="footer-col footer-col-ex">
                                        <div class="f_block">
                                            <h4>Information<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <ul>
                                                    <li><a href="http://livedemo00.template-help.com/magento_47319/about-magento-demo-store">About Us</a></li>
                                                    <li><a href="http://livedemo00.template-help.com/magento_47319/customer-service">Customer Service</a></li>
                                                    <li class="last privacy"><a href="http://livedemo00.template-help.com/magento_47319/privacy-policy-cookie-restriction-mode">Privacy Policy</a></li>
                                                </ul>
                                                <ul class="links">
                                                    <li class="first"><a href="http://livedemo00.template-help.com/magento_47319/catalog/seo_sitemap/category/" title="Site Map">Site Map</a></li>
                                                    <li class=" last"><a href="http://livedemo00.template-help.com/magento_47319/contacts/" title="Contact Us">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-col footer-col-ex">
                                        <div class="f_block">
                                            <h4>Why buy from us<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <ul>
                                                    <li><a href="#">Secure Shopping</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-col footer-col-ex">
                                        <div class="f_block">
                                            <h4>My account<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <ul>
                                                    <li><a href="http://livedemo00.template-help.com/magento_47319/customer/account/login/">Sign In</a></li>
                                                    <li><a href="http://livedemo00.template-help.com/magento_47319/checkout/cart/">View Cart</a></li>
                                                    <li><a href="http://livedemo00.template-help.com/magento_47319/wishlist/">My Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-col wide-col footer-col-ex">
                                        <div class="f_block">
                                            <h4>Contacts<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <div class="footer_info">
                                                    <p>
                                                        Company Inc. Lima Perú
                                                        <br>
                                                        www.destinostumundo.com
                                                    </p>
                                                    <span>Call us now toll free:</span>
                                                    <strong>(+511) 3543532</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-col wide-col last footer-col-ex">
                                        <div class="f_block block-subscribe">
                                            <h4>Newsletter<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <form action="#" method="post" id="newsletter-validate-detail">
                                                    <div class="newsletter-wrapper">
                                                        <div class="input-box">
                                                            <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email form-control">
                                                        </div>
                                                        <div class="actions">
                                                            <button type="button" onclick="javascript:alert('Gracias por registrarte');" title="Subscribe" class="button"><strong><i class="icon-angle-right"></i></strong></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="f_block socials">
                                            <h4>Follow us<span class="toggle"></span></h4>
                                            <div class="footer-col-content">
                                                <a href="#"><i class="icon-facebook"></i></a>
                                                <a class="btn btn-social-icon btn-twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#"><i class="icon-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="clear"></div>
    </div>		

</div>
</body>
    <script type="text/javascript">
        jQuery(function(){

                jQuery('#lnkIngles').click(function(){
                    var cadena = window.location.href;
                    var concatenar ='&&';
                    if(cadena.indexOf('?')>0)
                        concatenar='';
                    else concatenar = '?';

                    window.location.href = cadena.replace('lang=ES',"").replace('lang=EN','') + concatenar+ 'lang=EN';
                });

                jQuery('#lnkEspaniol').click(function(){
                    var cadena = window.location.href;
                    var concatenar ='&&';
                    if(cadena.indexOf('?')>0)
                        concatenar='';
                    else concatenar = '?';

                    window.location.href = cadena.replace('lang=ES',"").replace('lang=EN','') + concatenar+ 'lang=ES';
                });
        });
</script>
</html>
