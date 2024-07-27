<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <pre>
            <?php
            setcookie("dia-da-semana", "segunda", time() + 3600); // quanto tempop o cookie vai durar (no caso 1hora)
            // session_start("exerciciophp");
            session_start();
            $_SESSION = array();
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            session_destroy();
            

            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);
            
            
            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);


           
            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);


            // Defina uma variável de sessão 
            echo "<h1>Superglobal SESSION</h1>";
            $_SESSION["teste"] = "Funcionou!";
            var_dump($_SESSION);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);
            foreach(getenv() as $c => $v){
                echo "<br> $c -> $v";
            }

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);



            ?>
        </pre>
    </main>
</body>

</html>