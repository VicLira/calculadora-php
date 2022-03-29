<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="../style/style.css">

    <title>Calculadora QTS</title>
</head>
<body>

    <?php if(isset($_GET["total"])){echo "Resultado: ".$_GET["total"]."<br><br>";}  ?>
    

    <div class="container">
        <section id="calculadora">
        

            <form action="calcular.php" method="post">
                <div class="top">
                <input type="number" name="n1" class="input-valor">
                <input type="number" name="n2" class="input-valor">
                </div>
                
                <ul class="key">
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li class="operador">
                        <label for="operacao">
                            <div class="botao-operador">
                                /
                            </div>
                            <input 
                                type="radio" 
                                name="operacao"
                                value="dividir"
                            >
                        </label>
                        
                    </li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li class="operador">
                        <label for="operacao">
                            <div class="botao-operador">
                                *
                            </div>
                            <input 
                                type="radio" 
                                name="operacao"
                                value="multiplicar"
                            >
                        </label>
                        
                    </li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li class="operador">
                        <label for="operacao">
                            <div class="botao-operador">
                                -
                            </div>
                            <input 
                                type="radio" 
                                name="operacao"
                                value="subtrair"
                            >
                        </label>
                        
                    </li>
                    <li>0</li>
                    <li>.</li>
                    <li class="operador">
                        <label for="operacao">
                            <div class="botao-operador">
                                +
                            </div>
                            <input 
                                type="radio" 
                                name="operacao"
                                value="somar"
                            >
                        </label>
                        
                    </li>
                    <li>c</li>
                    <li class="verificar">
                        <input 
                            type="submit"
                            value="="
                        >
                    </li>
                </ul>
                
            </form>

        </section>
    </div>
</body>
</html>