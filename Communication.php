<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!--Accesibility Bar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="http://shakedwebdesign.com/plugins/accessibility-menu/accessibilitymenu.css" type="text/css" rel="stylesheet" />
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://shakedwebdesign.com/plugins/accessibility-menu/accessibilitymenu.js" data-language="eng" data-oemsource="accessible+" data-sign="classic"></script>
        <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
        <!--Accesibility Bar End -->

        <link href="style.css" rel="stylesheet" type="text/css">
        <!--<link href="https://www.google.com/intl/en/chrome/assets/common/css/chrome.min.css" rel="stylesheet">-->
        <script>
            new gweb.analytics.AutoTrack({
            profile: 'UA-26908291-1'
            });
        </script>
        <script>
            function Today()
                    v
                    var date = new Date();
            var days = new Array("Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο")
                    var months = new Array("Ιανουαρίου", "Φεβρουαρίου", "Μαρτίου", "Απριλίου", "Μαϊου", "Ιουνίου", "Ιουλίου", "Αυγούστου", "Σεπτεμβρίου", "Οκτωβρίου", "Νοεμβρίου", "Δεκεμβρίου")

                    var d = date.getDay();
            var m = date.getMonth();
            var y = date.getYear().toString();
            var date = date.getDate();
            var day = days[d];
            var month = months[m];
            var Today = day + ", " + date + " " + month + " 20" + y.substring(y.length - 2, y.length);
            return Today;
            }

            function setPoly()
            {
            document.langForm.lang.value = "poly";
            document.langForm.submit();
            }

            function setMono()
            {
            document.langForm.lang.value = "mono";
            document.langForm.submit();
            }
        </script>
        <style>
            .button{background:#0370ea;background:-moz-linear-gradient(top,#008dfd 0,#0370ea 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#008dfd),color-stop(100%,#0370ea));background:-webkit-linear-gradient(top,#008dfd 0,#0370ea 100%);background:-o-linear-gradient(top,#008dfd 0,#0370ea 100%);background:-ms-linear-gradient(top,#008dfd 0,#0370ea 100%);background:linear-gradient(top,#008dfd 0,#0370ea 100%);border:1px solid #076bd2;-moz-border-radius:3px;border-radius:3px;color:#fff !important;display:inline-block;font-size:13px;font-weight:700;line-height:1.3;padding:8px 25px;text-align:center;text-decoration:none !important;text-shadow:1px 1px 1px #076bd2}.button.disabled,.button.disabled:hover{background:none;background-color:#dadada;border:0;color:#333;cursor:default;text-shadow:none}.button:hover{background:-moz-linear-gradient(top,#008dfd 30%,#0370ea 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(30%,#008dfd),color-stop(100%,#0370ea));background:-webkit-linear-gradient(top,#008dfd 30%,#0370ea 100%);background:-o-linear-gradient(top,#008dfd 30%,#0370ea 100%);background:-ms-linear-gradient(top,#008dfd 30%,#0370ea 100%);background:linear-gradient(top,#008dfd 30%,#0370ea 100%);cursor:pointer}.button-alt{background:#eee;background:-o-linear-gradient(bottom,#dcdcdc 46%,#fafafa 87%);background:-moz-linear-gradient(bottom,#dcdcdc 46%,#fafafa 87%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#dcdcdc),color-stop(100%,#fafafa));background:-webkit-linear-gradient(bottom,#dcdcdc 46%,#fafafa 87%);background:-ms-linear-gradient(bottom,#dcdcdc 46%,#fafafa 87%);background:linear-gradient(bottom,#dcdcdc 46%,#fafafa 87%);border:1px solid #d6d6d6;-moz-border-radius:3px;border-radius:3px;color:#333 !important;display:inline-block;font-size:12px;font-weight:700;line-height:24px;padding:0 15px;text-align:center;text-decoration:none !important;text-shadow:none}.button-alt:hover{background:-o-linear-gradient(bottom,#dcdcdc 20%,#fafafa 87%);background:-moz-linear-gradient(bottom,#dcdcdc 20%,#fafafa 87%);background:-webkit-gradient(linear,left top,left bottom,color-stop(20%,#dcdcdc),color-stop(87%,#fafafa));background:-webkit-linear-gradient(bottom,#dcdcdc 20%,#fafafa 87%);background:-ms-linear-gradient(bottom,#dcdcdc 20%,#fafafa 87%);background:linear-gradient(bottom,#dcdcdc 20%,#fafafa 87%);cursor:pointer}.eula-download-button.disabled,.eula-download-button.disabled:hover,#download-options .eula-download-button.disabled,#download-options .eula-download-button.disabled:hover{color:#dadada;cursor:default}.default-browser-opt{display:none}.mac.force-win.build-dev .default-browser-opt,.linux.force-win.build-dev .default-browser-opt,.mac.force-win64.build-dev .default-browser-opt,.linux.force-win64.build-dev .default-browser-opt,.linux.build-dev .modal-dialog.platform-win .default-browser-opt,.mac.build-dev .modal-dialog.platform-win .default-browser-opt,.linux.build-dev .eula-win .default-browser-opt,.mac.build-dev .eula-win .default-browser-opt,.winXP.build-dev .default-browser-opt,.win7.build-dev .default-browser-opt,.vista.build-dev .default-browser-opt{display:none !important}.mac.force-win.build-beta .default-browser-opt,.linux.force-win.build-beta .default-browser-opt,.mac.force-win64.build-beta .default-browser-opt,.linux.force-win64.build-beta .default-browser-opt,.linux.build-beta .modal-dialog.platform-win .default-browser-opt,.mac.build-beta .modal-dialog.platform-win .default-browser-opt,.linux.build-beta .eula-win .default-browser-opt,.mac.build-beta .eula-win .default-browser-opt,.winXP.build-beta .default-browser-opt,.win7.build-beta .default-browser-opt,.vista.build-beta .default-browser-opt{display:none !important}.mac.force-win .default-browser-opt,.linux.force-win .default-browser-opt,.mac.force-win64 .default-browser-opt,.linux.force-win64 .default-browser-opt,.linux .modal-dialog.platform-win .default-browser-opt,.mac .modal-dialog.platform-win .default-browser-opt,.linux .eula-win .default-browser-opt,.mac .eula-win .default-browser-opt,.winXP .default-browser-opt,.win7 .default-browser-opt,.vista .default-browser-opt{display:block}.build-canary.force-win .default-browser-opt,.build-canary.linux .modal-dialog.platform-win .default-browser-opt,.build-canary.mac .modal-dialog.platform-win .default-browser-opt,.build-canary.linux .eula-win .default-browser-opt,.build-canary.mac .eula-win .default-browser-opt,.build-canary.winXP .default-browser-opt,.build-canary.win7 .default-browser-opt,.build-canary.vista .default-browser-opt{display:none}.eula-dialog-msi .default-browser-opt{display:none !important}.sub-button{font-size:13px !important;margin-top:-20px}
            #info {
                font-size: 20px;
            }
            #div_start {
                float: right;
            }
            #headline {
                text-decoration: none
            }
            #results {
                font-size: 14px;
                font-weight: bold;
                border: 1px solid #ddd;
                padding: 15px;
                text-align: left;
                min-height: 150px;
            }
            #start_button {
                border: 0;
                background-color:transparent;
                padding: 0;
            }
            .interim {
                color: gray;
            }
            .final {
                color: black;
                padding-right: 3px;
            }
            .button {
                display: none;
            }
            .marquee {
                margin: 20px auto;
            }

            #buttons {
                margin: 10px 0;
                position: relative;
                top: -50px;
            }

            #copy {
                margin-top: 20px;
            }

            #copy > div {
                display: none;
                margin: 0 70px;
            }

            .gif_img {
                width: 80%;
                height: auto;
            }

            .gif_img2 {
                width: 50%;
                height: auto;
            }

            @import url(http://fonts.googleapis.com/css?family=Open+Sans);
            #cssmenu,
            #cssmenu ul,
            #cssmenu ul li,
            #cssmenu ul li a,
            #cssmenu #menu-button {
                margin: 0;
                padding: 0;
                border: 0;
                list-style: none;
                line-height: 1;
                display: block;
                position: relative;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            #cssmenu:after,
            #cssmenu > ul:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                line-height: 0;
                height: 0;
            }
            #cssmenu #menu-button {
                display: none;
            }
            #cssmenu {
                width: 72%;
                font-family: 'Open Sans', sans-serif;
                line-height: 1;
                background: #ffffff;
            }
            #menu-line {
                position: absolute;
                top: 0;
                left: 0;
                height: 3px;
                background: #009ae1;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                -ms-transition: all 0.25s ease-out;
                -o-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }
            #cssmenu > ul > li {
                float: left;
            }
            #cssmenu.align-center > ul {
                font-size: 0;
                text-align: center;
            }
            #cssmenu.align-center > ul > li {
                display: inline-block;
                float: none;
            }
            #cssmenu.align-center ul ul {
                text-align: left;
            }
            #cssmenu.align-right > ul > li {
                float: right;
            }
            #cssmenu.align-right ul ul {
                text-align: right;
            }
            #cssmenu > ul > li > a {
                padding: 20px;
                color: #000000;
                -webkit-transition: color .2s ease;
                -moz-transition: color .2s ease;
                -ms-transition: color .2s ease;
                -o-transition: color .2s ease;
                transition: color .2s ease;
            }
            #cssmenu > ul > li:hover > a,
            #cssmenu > ul > li.active > a {
                color: #009ae1;
            }
            #cssmenu > ul > li.has-sub > a {
                padding-right: 25px;
            }
            #cssmenu > ul > li.has-sub > a::after {
                position: absolute;
                top: 21px;
                right: 10px;
                width: 4px;
                height: 4px;
                border-bottom: 1px solid #000000;
                border-right: 1px solid #000000;
                content: "";
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-transition: border-color 0.2s ease;
                -moz-transition: border-color 0.2s ease;
                -ms-transition: border-color 0.2s ease;
                -o-transition: border-color 0.2s ease;
                transition: border-color 0.2s ease;
            }
            #cssmenu > ul > li.has-sub:hover > a::after {
                border-color: #009ae1;
            }
            #cssmenu ul ul {
                position: absolute;
                left: -9999px;
            }
            #cssmenu li:hover > ul {
                left: auto;
            }
            #cssmenu.align-right li:hover > ul {
                right: 0;
            }
            #cssmenu ul ul ul {
                margin-left: 100%;
                top: 0;
            }
            #cssmenu.align-right ul ul ul {
                margin-left: 0;
                margin-right: 100%;
            }
            #cssmenu ul ul li {
                height: 0;
                -webkit-transition: height .2s ease;
                -moz-transition: height .2s ease;
                -ms-transition: height .2s ease;
                -o-transition: height .2s ease;
                transition: height .2s ease;
            }
            #cssmenu ul li:hover > ul > li {
                height: 32px;
            }
            #cssmenu ul ul li a {
                padding: 10px 20px;
                width: 160px;
                font-size: 12px;
                background: #333333;
                text-decoration: none;
                color: #dddddd;
                -webkit-transition: color .2s ease;
                -moz-transition: color .2s ease;
                -ms-transition: color .2s ease;
                -o-transition: color .2s ease;
                transition: color .2s ease;
            }
            #cssmenu ul ul li:hover > a,
            #cssmenu ul ul li a:hover {
                color: #ffffff;
            }
            #cssmenu ul ul li.has-sub > a::after {
                position: absolute;
                top: 13px;
                right: 10px;
                width: 4px;
                height: 4px;
                border-bottom: 1px solid #dddddd;
                border-right: 1px solid #dddddd;
                content: "";
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transition: border-color 0.2s ease;
                -moz-transition: border-color 0.2s ease;
                -ms-transition: border-color 0.2s ease;
                -o-transition: border-color 0.2s ease;
                transition: border-color 0.2s ease;
            }
            #cssmenu.align-right ul ul li.has-sub > a::after {
                right: auto;
                left: 10px;
                border-bottom: 0;
                border-right: 0;
                border-top: 1px solid #dddddd;
                border-left: 1px solid #dddddd;
            }
            #cssmenu ul ul li.has-sub:hover > a::after {
                border-color: #ffffff;
            }
            @media all and (max-width: 768px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
                #cssmenu {
                    width: 100%;
                }
                #cssmenu ul {
                    width: 100%;
                    display: none;
                }
                #cssmenu.align-center > ul,
                #cssmenu.align-right ul ul {
                    text-align: left;
                }
                #cssmenu ul li,
                #cssmenu ul ul li,
                #cssmenu ul li:hover > ul > li {
                    width: 100%;
                    height: auto;
                    border-top: 1px solid rgba(120, 120, 120, 0.15);
                }
                #cssmenu ul li a,
                #cssmenu ul ul li a {
                    width: 100%;
                }
                #cssmenu > ul > li,
                #cssmenu.align-center > ul > li,
                #cssmenu.align-right > ul > li {
                    float: none;
                    display: block;
                }
                #cssmenu ul ul li a {
                    padding: 20px 20px 20px 30px;
                    font-size: 12px;
                    color: #000000;
                    background: none;
                }
                #cssmenu ul ul li:hover > a,
                #cssmenu ul ul li a:hover {
                    color: #000000;
                }
                #cssmenu ul ul ul li a {
                    padding-left: 40px;
                }
                #cssmenu ul ul,
                #cssmenu ul ul ul {
                    position: relative;
                    left: 0;
                    right: auto;
                    width: 100%;
                    margin: 0;
                }
                #cssmenu > ul > li.has-sub > a::after,
                #cssmenu ul ul li.has-sub > a::after {
                    display: none;
                }
                #menu-line {
                    display: none;
                }
                #cssmenu #menu-button {
                    display: block;
                    padding: 20px;
                    color: #000000;
                    cursor: pointer;
                    font-size: 12px;
                    text-transform: uppercase;
                }
                #cssmenu #menu-button::after {
                    content: '';
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    display: block;
                    width: 15px;
                    height: 2px;
                    background: #000000;
                }
                #cssmenu #menu-button::before {
                    content: '';
                    position: absolute;
                    top: 25px;
                    right: 20px;
                    display: block;
                    width: 15px;
                    height: 3px;
                    border-top: 2px solid #000000;
                    border-bottom: 2px solid #000000;
                }
                #cssmenu .submenu-button {
                    position: absolute;
                    z-index: 10;
                    right: 0;
                    top: 0;
                    display: block;
                    border-left: 1px solid rgba(120, 120, 120, 0.15);
                    height: 52px;
                    width: 52px;
                    cursor: pointer;
                }
                #cssmenu .submenu-button::after {
                    content: '';
                    position: absolute;
                    top: 21px;
                    left: 26px;
                    display: block;
                    width: 1px;
                    height: 11px;
                    background: #000000;
                    z-index: 99;
                }
                #cssmenu .submenu-button::before {
                    content: '';
                    position: absolute;
                    left: 21px;
                    top: 26px;
                    display: block;
                    width: 11px;
                    height: 1px;
                    background: #000000;
                    z-index: 99;
                }
                #cssmenu .submenu-button.submenu-opened:after {
                    display: none;
                }

                .outer-div
                {
                    padding: 30px;
                }
                .inner-div
                {
                    margin: 0 auto;
                    width: 100px; 
                }
            </style>   
        </head>
        <body>
        <center>
            <table>
                <tr><td>
                        <table border="0" width="100%">

                            <tr>
                                <td width="30" height="19" bgcolor="#000099"></td>
                                <td width="20%" height="10" bgcolor="#000099"></td>
                                <td width="45%" height="10" bgcolor="#000099"></td>
                                <td width="35%" height="10" bgcolor="#000099"></td>
                                <td width="30" height="19" bgcolor="#000099"></td>
                            </tr>

                            <tr>
                                <td width="20" height="19" bgcolor="#000099"></td>
                                <td width="20%" height="19" bgcolor="#000099" align="center">
                                    <a target="_blank" href="http://www.aegean.gr">
                                        <img border="0" src="Images/sima_aigaiou.jpg" width="162" height="81"></a>
                                    <span lang="el"><b><span style="font-variant: small-caps">
                                                <font face="Verdana" color="#FFFFFF" style="font-size: 9pt">
                                                <a target="_blank" href="http://www.aegean.gr" style="text-decoration: none"><font color="#FFFFFF">πανεπιστημιο αιγαιου</font></a></font></span></b></span>
                                </td>
                                <td width="45%" height="19" bgcolor="#000099">
                                    <table border="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="100%">
                                        <tr>
                                            <td width="70%" valign="middle" align="center">
                                                <b><font color="#FFFFFF" face="Verdana" size="3"><span lang="el">
                                                        ΠΟΛΥΤΕΧΝΙΚΗ ΣΧΟΛΗ</span> </font></b><br />
                                                <!--<font color="#FFFFFF" face="Verdana" style="font-size: 7pt">*Υπο ψήφιση, από 01.09.2017</font>-->
                                                <!--                        <b><font color="#FFFFFF" face="Verdana" size="2"><span lang="el">
                                                                                ΣΧΟΛΗ ΘΕΤΙΚΩΝ ΕΠΙΣΤΗΜΩΝ</span> </font></b><br />
                                                                        <font color="#FFFFFF" face="Verdana" style="font-size: 7pt">(ένταξη σε ΠΟΛΥΤΕΧΝΙΚΗ ΣΧΟΛΗ με βάση απόφαση του ΣΑΠΕ το 2009,<br /> αναμένεται έκδοση ΦΕΚ)</font>-->
                                                <p style="padding: 0px 0px 10px 0px; font-family: Verdana; font-size : 1.1em; color: #ffffff"><span lang="el">
                                                        Τμήμα Μηχανικών Πληροφοριακών<br />& Επικοινωνιακών Συστημάτων</span>
                                                </p>
                                                <!-- <img border="0" src="/icsd/graphics/department_logo_gr.gif"> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%" height="15" valign="bottom" align="center">
                                                <script language=javascript>
                                                    document.write("<a align=center><b><font size=1 face=verdana color=#ff9933></b>" + "ΚΑΡΛΟΒΑΣΙ, ΣΑΜΟΣ - ");
                                                    document.write(Today());
                                                    document.write("</font>");
                                                </script>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="35%" align="right" style="border: solid #000 0px;" height="19" bgcolor="#FFFFFF" background="Images/bluestripe.png" style="background-position:right">

                                    <table class="header_b" border="0" width="100%" height="130px">
                                        <tr>
                                            <td align="right" style="padding:0px 42px 0px 0px" width="60%"><a title="INFO-SEC-LAB" class="lablink_blue" target="_blank" href="http://www.icsd.aegean.gr/info-sec-lab">Information & Communication Systems Security</a></td>
                                        </tr>
                                        <tr>
                                            <td align="right" style="padding:0px 42px 0px 0px" width="60%"><a title="IS-LAB" class="lablink_blue" target="_blank" href="http://www.icsd.aegean.gr/is-lab">Information Systems</td>
                                        </tr>
                                        <tr>
                                            <td align="right" style="padding:0px 42px 0px 0px" width="60%"><a title="AI-LAB" class="lablink_blue" target="_blank" href="http://www.icsd.aegean.gr/ai-lab">Artificial Intelligence</td>
                                        </tr>
                                        <tr>
                                            <td align="right" style="padding:0px 42px 0px 0px" width="60%"><a title="CCS LAB" class="lablink_blue" target="_blank" href="http://www.icsd.aegean.gr/ccsl">Computer & Communication Systems</td>
                                        </tr>
                                        <tr>
                                            <td align="right" style="padding:0px 42px 0px 0px" width="60%"><a title="GeoDySyC" class="lablink_blue" target="_blank" href="http://www.icsd.aegean.gr/ltc">Geometry, Dynamical Systems & Cosmology</td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="20" height="19" bordercolor="#000099" bgcolor="#000099"></td>
                            </tr>

                            <tr>
                                <td width="30" height="19" bgcolor="#000099"></td>
                                <td width="20%" height="10" bgcolor="#000099"></td>
                                <td width="45%" height="10" bgcolor="#000099"></td>
                                <td width="35%" height="10" bgcolor="#000099"></td>
                                <td width="30" height="19" bgcolor="#000099"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table> 
        </center>

        <br>
        <center>
            <div id='cssmenu'>
                <ul>
                    <li class='active'><a href='index.html'>Αρχική</a></li>
                    <li><a href='Services.html'>Σπουδές & Πληροφορίες</a></li>
                    <li><a href='Communication.php'>Επικοινωνία</a></li>

                </ul>
            </div>
        </center> 
        <br>

        <div id="slideout">
            <button class="transparentButton" onclick="toggleAccessibilityMenu()"><img class="accessibilityimage" src="http://shakedwebdesign.com/plugins/accessibility-menu/accessibility.png" alt="Accessibility Menu Icon" role="navigation" title="Accessibility Menu"/></button>
            <div id="slideout_inner">
                <ul class="ltr">
                    <button class="accessibilityMenuButton alignLeft" id="btnTextSizeOn" onclick="setTextSize(true);" aria-disabled="false"><i class="fa fa-text-height" aria-hidden="true"></i>&nbsp;&nbsp;Μεγάλα Γράμματα</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnTextSizeOff" onclick="setTextSize(false);" disabled="disabled" aria-disabled="true"><i class="fa fa-font" aria-hidden="true"></i>&nbsp;&nbsp;Κανονικά Γράμματα</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnHighContrastOn" onclick="ToggleHighContrastMode(true);" aria-disabled="false"><i class="fa fa-adjust" aria-hidden="true"></i>&nbsp;&nbsp;Υψηλή Αντίθεση</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnHighContrastOff" onclick="ToggleHighContrastMode(false);" disabled="disabled" aria-disabled="true"><i class="fa fa-adjust" aria-hidden="true"></i>&nbsp;&nbsp;Κανονική Αντίθεση</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnYellowLinksOn" onclick="ToggleLinksYellow(true);" aria-disabled="false"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Ένταση Συνδέσμων</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnYellowLinksOff" onclick="ToggleLinksYellow(false);" disabled="disabled" aria-disabled="true"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Κανονικοί Σύνδεσμοι</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnGrayscaleOn" onclick="ToggleGrayscaleMode(true);" aria-disabled="false"><i class="fa fa-barcode" aria-hidden="true"></i>&nbsp;&nbsp;Κλίμακα του Γκρι</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnGrayscaleOff" onclick="ToggleGrayscaleMode(false);" disabled="disabled" aria-disabled="true"><i class="fa fa-barcode" aria-hidden="true"></i>&nbsp;&nbsp;Κανονικό χρώμα</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnLinksOn" onclick="ToggleUnderlineLinks(true);" aria-disabled="false"><i class="fa fa-underline" aria-hidden="true"></i>&nbsp;&nbsp;Υπογράμμιση Συνδέσμων</button>
                    <button class="accessibilityMenuButton alignLeft" id="btnLinksOff" onclick="ToggleUnderlineLinks(false);" disabled="disabled" aria-disabled="true"><i class="fa fa-underline" aria-hidden="true"></i>&nbsp;&nbsp;Ακύρωση Υπογράμμισης</button>
                </ul>
            </div>
        </div> 
        <br>

        <center><h3 class="w3-center" style="font-family:Arial-black;">Επικοινωνία</h3>
            <table style="width:70%;"><td><a id="text1" style=" pointer-events: none; color : black;  font-family: Arial-black;"/>
                <center> Παρακάτω μπορείτε να επικοινωνλησετε με mail με τον τομέα της γραμμματίας στο email : gramicsd@icsd.aegean.gr</center>
                <br>
                <br>
                </td>
            </table>
        </center>
        <input id="myCheck" onclick='responsiveVoice.speak("Παρακάτω μπορείτε να επικοινωνήσετε με mail με τον τομέα της γραμμματίας στο email : gramicsd@icsd.aegean.gr", "Greek Female");' type='button' value='Αναπαραγωγή 🔊' />


        <div class="browser-landing" id="main">

            <div class="compact marquee">
                <div id="info">
                    <p id="info_start">
                        Πατήστε το εικονίδιο του μικροφώνου για να μιλήσετε.
                    </p>
                    <p id="info_speak_now" style="display:none">
                        Τώρα μπορείτε να μιλήσετε.
                    </p>
                </div>
                <div class="compact marquee" id="div_language">
                    <select id="select_language" onchange="updateCountry()">
                    </select>&nbsp;&nbsp; <select id="select_dialect">
                    </select>
                </div>
                <div id="div_start">
                    <button id="start_button" onclick="startButton(event)"><img alt="Start" id="start_img" src="Images/mic.gif"></button>
                </div>
                <div id="results">
                    <span class="final" id="final_span" >Εκφωνήστε το μήνυμα σας</span><span class="interim" id="interim_span"></span>
                </div>
                <center><div id="copy">
                        <button class="button" id="copy_button" onclick="copyButton()">Επιλογή Όλων</button>
                        <button class="button" id="email_button" onclick="emailButton()">Αποστολή Email</button>
                    </div></center>
            </div>
        </div>

        <center>
            <table style="width:70%;">
                <br>
                <br>
                <tr>
                    <td align="center" size="2" bgcolor="#ff9933" colspan="3">
                        <b><font  face="Verdana">
                            <a target="_top" style="text-decoration: none" href="index.html">Αρχική</a>
                            </font></b>
                        <font face="Verdana" size="2" color="#FFffff"><b> | </b></font>
                        <b><font  face="Verdana">
                            <a target="_top" style="text-decoration: none" href="/icsd/epikoinonia.php"> Επικοινωνία </a>
                            </font></b>
                        <font face="Verdana" size="2" color="#FFffff"><b> | </b></font>
                        <b><font  face="Verdana">
                            <a target="_top" style="text-decoration: none" href="/icsd/plirofories/sindesmoi.php"> Σύνδεσμοι </a>
                            </font></b>
                    </td>
                </tr>
                <td width="100%" align=center colspan="3">
                    <span style="text-transform: uppercase">
                        <font face="Verdana" color="#808080">πανεπιστημιο αιγαιου</font></span><p align="center" style="margin-top: 1; margin-bottom: 2">
                        <span style="text-transform: uppercase">
                            <font face="Verdana" color="#808080"> 
                            ΠΟΛΥΤΕΧΝΙΚΗ ΣΧΟΛΗ</font></span><br>
                        <!--	<font face="Verdana" size="1" color="#808080"> * Προς ψήφιση και έναρξη ισχύος από 1.9.2017
                         </font>-->
                        <br />
                        <font face="Verdana" color="#FF9933"></font><font face="Verdana" size="2" color="#808080">
                        <span style="text-transform: uppercase">τμημα μηχανικων πληροφοριακων
                        </span>
                        </font>
                        <span style="text-transform: uppercase"><font face="Verdana" color="#FF9933">&amp;</font><font face="Verdana" size="2" color="#808080"> 
                            επικοινωνιακων συστηματων</font></span><p align="center" style="margin-top: 1; margin-bottom: 2">
                        <img class="gif_img2" border="0" src="images/epeaek.gif">
                </td>
                </tr>
                <tr>
                    <td width="20" height="19" valign="bottom"><!--<img border="0" src="/icsd/graphics/corners/bl_footer.gif" width="20" height="22">--></td>
                    <td width="100%" height="30" align=center>
                        <font face="Verdana" size="-2px" color="#CCCC00">© Copyright ICSD :: 2008 - 2017</font>
                    </td>
            </table>
        </center>    


        <script>
            (function($) {
            $.fn.menumaker = function(options) {

            var cssmenu = $(this), settings = $.extend({
            title: "Menu",
                    format: "dropdown",
                    sticky: false
            }, options);
            return this.each(function() {
            cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
            $(this).find("#menu-button").on('click', function(){
            $(this).toggleClass('menu-opened');
            var mainmenu = $(this).next('ul');
            if (mainmenu.hasClass('open')) {
            mainmenu.hide().removeClass('open');
            }
            else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
            mainmenu.find('ul').show();
            }
            }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
            cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
            cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
            $(this).siblings('ul').removeClass('open').hide();
            }
            else {
            $(this).siblings('ul').addClass('open').show();
            }
            });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
            if ($(window).width() > 768) {
            cssmenu.find('ul').show();
            }

            if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
            }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
            });
            };
            })(jQuery);
            (function($){
            $(document).ready(function(){

            $(document).ready(function() {
            $("#cssmenu").menumaker({
            title: "Menu",
                    format: "multitoggle"
            });
            $("#cssmenu").prepend("<div id='menu-line'></div>");
            var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;
            $("#cssmenu > ul > li").each(function() {
            if ($(this).hasClass('active')) {
            activeElement = $(this);
            foundActive = true;
            }
            });
            if (foundActive === false) {
            activeElement = $("#cssmenu > ul > li").first();
            }

            defaultWidth = lineWidth = activeElement.width();
            defaultPosition = linePosition = activeElement.position().left;
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
            $("#cssmenu > ul > li").hover(function() {
            activeElement = $(this);
            lineWidth = activeElement.width();
            linePosition = activeElement.position().left;
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
            },
                    function() {
                    menuLine.css("left", defaultPosition);
                    menuLine.css("width", defaultWidth);
                    });
            });
            });
            })(jQuery);
        </script>

        <script>
            window.onload = function() {
            responsiveVoice.speak("Παρακάτω μπορείτε να επικοινωνήσετε με mail με τον τομέα της γραμμματίας στο email : gramicsd@icsd.aegean.gr", "Greek Female");        };
        </script>

        <script src="/intl/en/chrome/assets/common/js/chrome.min.js">
        </script> <script>
            var chrmMenuBar = new chrm.ui.MenuBar();
            chrmMenuBar.decorate('nav');
            var chrmLogo = new chrm.ui.Logo('logo');
            var chrmscroll = new chrm.ui.SmoothScroll('scroll');
            chrmscroll.init();
            window.___gcfg = {lang: 'el-GR'};
            (function () {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
            })();
            var doubleTracker = new gweb.analytics.DoubleTrack('floodlight', {
            src: 2542116,
                    type: 'clien612',
                    cat: 'chrom0'
            });
            doubleTracker.track();
            doubleTracker.trackClass('doubletrack', true);
        </script> <script>
            // If you modify this array, also update default language / dialect below.
            var langs =
            [['Ελληνικά', ['el-GR']]];
            for (var i = 0; i < langs.length; i++) {
            select_language.options[i] = new Option(langs[i][0], i);
            }
            // Set default language / dialect.
            select_language.selectedIndex = 0;
            updateCountry();
            showInfo('info_start');
            function updateCountry() {
            for (var i = select_dialect.options.length - 1; i >= 0; i--) {
            select_dialect.remove(i);
            }
            var list = langs[select_language.selectedIndex];
            for (var i = 1; i < list.length; i++) {
            select_dialect.options.add(new Option(list[i][1], list[i][0]));
            }
            select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
            }

            var create_email = false;
            var final_transcript = '';
            var recognizing = false;
            var ignore_onend;
            var start_timestamp;
            if (!('webkitSpeechRecognition' in window)) {
            upgrade();
            } else {
            start_button.style.display = 'inline-block';
            var recognition = new webkitSpeechRecognition();
            recognition.continuous = true;
            recognition.interimResults = true;
            recognition.onstart = function() {
            recognizing = true;
            showInfo('info_speak_now');
            start_img.src = 'Images/mic-animate.gif';
            };
            recognition.onerror = function(event) {
            if (event.error == 'no-speech') {
            start_img.src = 'Images/mic.gif';
            showInfo('info_no_speech');
            ignore_onend = true;
            }
            if (event.error == 'audio-capture') {
            start_img.src = 'Images/mic.gif';
            showInfo('info_no_microphone');
            ignore_onend = true;
            }
            if (event.error == 'not-allowed') {
            if (event.timeStamp - start_timestamp < 100) {
            showInfo('info_blocked');
            } else {
            showInfo('info_denied');
            }
            ignore_onend = true;
            }
            };
            recognition.onend = function() {
            recognizing = false;
            if (ignore_onend) {
            return;
            }
            start_img.src = 'Images/mic.gif';
            if (!final_transcript) {
            showInfo('info_start');
            return;
            }
            showInfo('');
            if (window.getSelection) {
            window.getSelection().removeAllRanges();
            var range = document.createRange();
            range.selectNode(document.getElementById('final_span'));
            window.getSelection().addRange(range);
            }
            if (create_email) {
            create_email = false;
            createEmail();
            }
            };
            recognition.onresult = function(event) {
            var interim_transcript = '';
            if (typeof (event.results) == 'undefined') {
            recognition.onend = null;
            recognition.stop();
            upgrade();
            return;
            }
            for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
            final_transcript += event.results[i][0].transcript;
            } else {
            interim_transcript += event.results[i][0].transcript;
            }
            }
            final_transcript = capitalize(final_transcript);
            final_span.innerHTML = linebreak(final_transcript);
            interim_span.innerHTML = linebreak(interim_transcript);
            if (final_transcript || interim_transcript) {
            showButtons('inline-block');
            }
            };
            }

            function upgrade() {
            start_button.style.visibility = 'hidden';
            showInfo('info_upgrade');
            }

            var two_line = /\n\n/g;
            var one_line = /\n/g;
            function linebreak(s) {
            return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
            }

            var first_char = /\S/;
            function capitalize(s) {
            return s.replace(first_char, function(m) { return m.toUpperCase(); });
            }

            function createEmail() {
            var n = final_transcript.indexOf('\n');
            if (n < 0 || n >= 80) {
            n = 40 + final_transcript.substring(40).indexOf(' ');
            }
            var subject = encodeURI(final_transcript.substring(0, n));
            window.location.href = 'mailto:?subject=Testing Message&body=' + subject;
            }

            function copyButton() {
            if (recognizing) {
            recognizing = false;
            recognition.stop();
            } else{
            var copyText = $('#result span').text();
            copyText.select();
            document.execCommand("Copy")
            }
            copy_button.style.display = 'true';
            copy_info.style.display = 'inline-block';
            showInfo('');
            }

            function emailButton() {
            if (recognizing) {
            create_email = true;
            recognizing = false;
            recognition.stop();
            } else {
            createEmail();
            }
            email_button.style.display = 'true';
            email_info.style.display = 'inline-block';
            showInfo('');
            }

            function startButton(event) {
            if (recognizing) {
            recognition.stop();
            return;
            }
            final_transcript = '';
            recognition.lang = select_dialect.value;
            recognition.start();
            ignore_onend = false;
            final_span.innerHTML = '';
            interim_span.innerHTML = '';
            start_img.src = 'Images/mic.gif';
            showInfo('info_allow');
            showButtons('none');
            start_timestamp = event.timeStamp;
            }

            function showInfo(s) {
            if (s) {
            for (var child = info.firstChild; child; child = child.nextSibling) {
            if (child.style) {
            child.style.display = child.id == s ? 'inline' : 'none';
            }
            }
            info.style.visibility = 'visible';
            } else {
            info.style.visibility = 'hidden';
            }
            }

            var current_style;
            function showButtons(style) {
            if (style == current_style) {
            return;
            }
            current_style = style;
            copy_button.style.display = style;
            email_button.style.display = style;
            copy_info.style.display = 'none';
            email_info.style.display = 'none';
            }
        </script>
        <!--        
                 <script>
                if (annyang) {
                // Let's define our first command. First the text we expect, and then the function it should call
                var commands = {
                'Home': function() {
                window.location = "index.html";
                }
                };
                // Add our commands to annyang
                annyang.addCommands(commands);
                // Start listening. You can call this here, or attach this call to an event, button, etc.
                annyang.start();
                }
            </script>
        
            <script>
                if (annyang) {
                // Let's define our first command. First the text we expect, and then the function it should call
                var commands = {
                'study': function() {
                window.location = "Services.html";
                }
                };
                // Add our commands to annyang
                annyang.addCommands(commands);
                // Start listening. You can call this here, or attach this call to an event, button, etc.
                annyang.start();
                }
            </script>-->


    </body>
</html>
