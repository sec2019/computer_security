var res = {'data':'HTTP/1.1 200 Partial Content\x0aDate: Sat, 08 Dec 2018 21:23:59 GMT\x0aServer: Apache/2.4.35 (Win32) OpenSSL/1.1.0i PHP/7.2.11\x0aX-Powered-By: PHP/7.2.11\x0aExpires: Thu, 19 Nov 1981 08:52:00 GMT\x0aCache-Control: no-store, no-cache, must-revalidate\x0aPragma: no-cache\x0aContent-Range: bytes 0-1010/1011\x0aContent-Length: 1011\x0aKeep-Alive: timeout=5, max=94\x0aConnection: Keep-Alive\x0aContent-Type: text/html; charset=UTF-8\x0a\x0a\x3c!DOCTYPE html\x3e\x0d\x0a\x3chtml\x3e\x0d\x0a    \x3chead\x3e\x0d\x0a        \x3ctitle\x3eWelcome to SecurBank\x3c/title\x3e\x0d\x0a\x09\x09\x3cmeta charset=\x22utf-8\x22\x3e\x0d\x0a\x09\x09\x3cmeta name=\x22author\x22 content=\x22Kacper Zielinski\x22\x3e\x0d\x0a\x09\x09\x3cmeta name=\x22viewport\x22 content = \x22width=device-width, initial-scale=1.0\x22/\x3e\x0d\x0a        \x3clink rel=\x22stylesheet\x22 href=\x22static/css/form.css\x22 /\x3e\x0d\x0a    \x3c/head\x3e\x0d\x0a    \x3cbody\x3e\x0d\x0a\x09\x09\x3cdiv class=\x22formDiv\x22\x3e\x0d\x0a\x09\x09\x09\x3cform action=\x22web/login.php\x22 method=\x22post\x22\x3e\x0d\x0a\x09\x09\x09\x09\x3clabel for=\x22login\x22\x3eLogin:\x3c/label\x3e\x0d\x0a\x09\x09\x09\x09\x3cinput type=\x22text\x22 id=\x22login\x22 name=\x22login\x22 value=\x22jakubiak\x22\x3e\x0d\x0a\x0d\x0a\x09\x09\x09\x09\x3clabel for=\x22password\x22\x3ePassword:\x3c/label\x3e\x0d\x0a\x09\x09\x09\x09\x3cinput type=\x22password\x22 id=\x22password\x22 name=\x22password\x22 value=\x22domestos\x22\x3e\x0d\x0a\x09\x09\x09\x09\x0d\x0a\x09\x09\x09\x09\x3cinput id=\x22buttonForm\x22 type=\x22submit\x22 value=\x22Submit\x22\x3e\x0d\x0a\x09\x09\x09\x3c/form\x3e\x0d\x0a\x09\x09\x09\x0d\x0a\x09\x09\x09\x3ca href=\x22\x22 onclick=\x22return send();\x22\x3eClick me\x3c/a\x3e\x0d\x0a\x09\x09\x09\x0d\x0a\x09\x09\x09\x09\x09\x3c/div\x3e\x0d\x0a\x09\x09\x0d\x0a\x09\x09\x3cscript\x3e\x0d\x0a\x09\x09function send() {\x0d\x0a\x09\x09\x09var rand = Math.floor(Math.random() * 10);\x0d\x0a\x09\x09\x09if(rand % 2) {\x0d\x0a\x09\x09\x09\x09var formButton = document.getElementById(\x27buttonForm\x27);\x0d\x0a\x09\x09\x09\x09formButton.click();\x0d\x0a\x09\x09\x09}\x0d\x0a\x09\x09}\x0d\x0a\x09\x09\x3c/script\x3e\x0d\x0a    \x3c/body\x3e\x0d\x0a\x3c/html\x3e\x0d\x0aFound\x3c/h1\x3e\x0a\x3cp\x3eT!'}