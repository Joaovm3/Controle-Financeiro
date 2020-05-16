<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
    session_start();
    if (!$_SESSION['email']) {
        header('Location: /app/acfinanceiro/view/login/');
        exit();
    }

    include_once('../../model/php/conn.php');

    //Filtragem contra ataques
    $id_directory = test_input($_GET["id_directory"]);
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    switch ($id_directory) {
        case 'ativos':
            $directory = "Ativo";
            break;

        case 'passivos':
            $directory = "Passivos";
            break;

        case 'patrimonio':
            $directory = "Patrimônio";
            break;
        
        default:
            $directory = $id_directory;
            break;
    }

    //Consultar SQL Categorias
    $sqlCategorias = "SELECT id_categoria FROM categoria_$id_directory";
    $result = mysqli_query($conn, $sqlCategorias);

?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="...">
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="/app/acfinanceiro/view/images/icons/favico.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/app/acfinanceiro/controller/css/current.css" type="text/css" />
    <meta name="theme-color" content="#000000" />
    <title>Registrar <?php echo $directory;?></title>
    <style>
        #global h3 { text-align:center; font-size:110%;}
        #global .cor { opacity: 0.3; }
        #global .informations a { margin-top:0px; }

        fieldset { max-width:94%; margin-top:60px; text-align: center;}
        input, .sifra, select { 
        margin-bottom: 7px;
        padding: 10px;
        border-radius: 3px;
        border: solid 1px #9FA9BC;
        }
        .sifra {
            width:40px; 
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .notas {
            border-left: none;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }
        .submite {
            color: #fff;
            background: rgb(0, 0, 0);
            background: linear-gradient(180deg, rgb(0, 0, 0) 50%, rgb(0, 17, 29) 100%);
            cursor: pointer;
        }
        .submite:hover { opacity: 0.6;}
        select, .datas { background-color:#fff;}
        .oculta { display:none; }
    </style>
</head>
<body>
    <!-- CONTAINER BARRA MENU E RODAPÉ-->
    <?php include_once('../../controller/html/header_footer.html');?>

    <!-- CONTAINER GLOBAL INFORMATIONS -->
    <main id="global" class="container">
        <fieldset>
            <form action="/app/acfinanceiro/model/php/registros.php" method="post" id="form">
                <input title="app" class="oculta" type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>" />
                <input title="app" class="oculta" type="text" name="diretorio" id="diretorio" value="<?php echo $id_directory;?>" />
                <input title="app" class="oculta" type="caracteristica" name="caracteristica" id="caracteristica" value="<?php echo $directory;?>" />

                <input title="app" type="text" name="nome" id="nome" placeholder="Nome do <?php echo $directory;?>" required />
                
                <div class="container row">
                    <p class="container sifra">R$</p>
                    <input title="app" onKeyUp="mascaraMoeda(this, event)" class="notas" type="text" name="moeda" id="moeda" placeholder="0,00" required />
                </div>

                <select title="app" name="categorias" form="form">
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <option value="'.$row["id_categoria"].'">'.$row["id_categoria"].'</option>
                                ';
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    <option value="outros">Outros</option>
                </select>

                <input title="app" class="datas" type="date" name="data_registro" id="data_registro" 
                value="<?php echo date('Y-m-d');?>" required />

                <input title="app" class="submite" type="submit" value="Registrar <?php echo $directory;?>">
            </form>
        </fieldset>
    </main>
    <?php mysqli_close($conn); ?>
    <script>
        String.prototype.reverse = function(){
        return this.split('').reverse().join(''); 
        };

        function mascaraMoeda(campo,evento){
        var tecla = (!evento) ? window.event.keyCode : evento.which;
        var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
        var resultado  = "";
        var mascara = "###.###.###,##".reverse();
        for (var x=0, y=0; x<mascara.length && y<valor.length;) {
            if (mascara.charAt(x) != '#') {
            resultado += mascara.charAt(x);
            x++;
            } else {
            resultado += valor.charAt(y);
            y++;
            x++;
            }
        }
        campo.value = resultado.reverse();
        }
    </script>

    <script>
        var form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
        e.preventDefault(); // <--- isto pára o envio da form
        var url = this.action; // <--- o url que processa a form
        var formData = new FormData(this); // <--- os dados da form
        var ajax = new XMLHttpRequest();
        ajax.open("POST", url, true);
        ajax.onload = function() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nome').value='';
                document.getElementById('moeda').value='';
                }
            };
            xhttp.open("GET", true);
            xhttp.send();
                };
        ajax.send(formData);
        });
    </script>

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