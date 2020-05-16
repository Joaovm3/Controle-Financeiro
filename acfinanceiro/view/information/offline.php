<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="..." />
    <meta name="robots" content="noindex" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/app/acfinanceiro/view/icons/favico.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/app/acfinanceiro/controller/css/current.css" type="text/css" />
    <title>Offline - AC Financeiro</title>
    <style>
* {
    width: 100%;
    margin: 0px;
    padding: 0px;
    border: none;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-size: 100%;
    font-family: Arial, Helvetica, sans-serif;
}
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.row { flex-direction: row; }
a:hover { opacity: 0.6; }
.background {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/*BARRA CABEÇALHO E RODAPÉ*/
#header {
    height: 60px;
    position: fixed;
    left: 0px;
    z-index: 10;
    top: 0px;
    padding: 0px 3%;
    color: #fff;
    background: rgb(23, 87, 133);
}
#header .open, #menu .btn-close, #plus .btn-close {
    max-width:60px ;
    max-height: 60px;
    min-width: 60px;
    min-height: 60px;
    cursor: pointer;
    font-size: 110%;
}
#footer {
    z-index: 1;
    position: fixed;
    bottom: 0px;
    left: 0px;
    background-color: #fff;
}
#footer span:hover { opacity: 0.6;}
#footer .open {
    font-size: 150%;
    color: rgb(32,130,198);
}

/*CONTAINER MENU*/
#menu, #plus{
    width: 0px;
    height: 100vh;
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 99;
    overflow: auto;
    justify-content: flex-start;
    align-items: flex-end;
    transition: 0.6s;
    background: rgb(32,130,198);
    background: linear-gradient(180deg, rgba(23, 87, 133) 50%, rgb(32,130,198) 100%);
}
#menu li, #plus li{
    width: 90%;
    padding: 10px 3%;
    border-top: #fff solid 1px;
    border-radius: 0px 50px 0px 0px;
}
#menu a, #plus a{
    text-align: left;
    color: #fff;
}
#menu .btn-close, #plus .btn-close{
    border-left: 2px solid #fff;
    text-align: center;
    border-radius: 100%;
}
#menu .btn-close p, #plus .btn-close p { color: #fff;}

/* CONTAINER GLOBAL */
#global {
    margin-top: 10px;
    margin-bottom: 40px;
}
#global .valor {
    min-height: 40vh;
    color: #fff;
    text-align: center;
    font-size: 110%;
    background: rgb(32,130,198);
    background: linear-gradient(180deg, rgba(23, 87, 133) 50%, rgb(32,130,198) 100%);
}
#global .valor h1 { font-size: 150%;}

/* CONTAINER INFORMATIONS */
#global .informations {
    box-shadow: #9FA9BC 0px 0px 10px;
    max-width: 94%;
    margin: -25px auto 40px auto;
    border-radius: 7px;
    padding: 20px 3%;
    background-color: #fff;
}
#global .informations h2 {
    text-align: center;
    font-size: 150%;
    margin-bottom: 20px;
}
#global .informations .row { margin-bottom: 10px;}
#global .informations .row p:last-child { text-align: right; }
#global .informations a { 
    text-align: center; 
    margin-top: 20px; 
    color: rgb(0, 0, 0); 
    width: auto;
    font-weight: bold;
}

/*CONTAINER RODAPÉ*/
#footer {
    box-shadow: #9FA9BC 0px 0px 10px;
    text-align: center;
}
#footer .btn {
    max-width: 60px;
    min-width: 60px;
    max-height: 60px;
    min-height: 60px;
    cursor: pointer;
    background-size: 60%;
}
#footer .home {
    background-image: url('/app/acfinanceiro/view/images/home.svg');
}
#footer .plus {
    background-image: url('/app/acfinanceiro/view/images/plus.svg');
}
#footer .question {
    background-image: url('/app/acfinanceiro/view/images/question.svg');
}
#footer .off {
    background-image: url('/app/acfinanceiro/view/images/power-off.svg');
}
        #global {margin-top:100px; text-align:center; font-size:250%;}
    </style>
</head>
<body>
    <!-- CONTAINER BARRA MENU E RODAPÉ-->
    <?php include_once('../../controller/html/header_footer.html');?>

    <!-- CONTAINER GLOBAL INFORMATIONS -->
    <main id="global" class="container">
        <h1>Ops!!! Offline</h1>
    </main>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153427274-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153427274-1');
</script>
</body>
</html>