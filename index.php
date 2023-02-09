<?php
    require "./functions.php";
    get_header("Home");  //function get_header com html
    $user_sentence = ""; //variável que será inserida a frase do usuário

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $user_sentence = $_POST["sentence"];    #Verifica se request method === post que chama do html input type name sentence
    }
?>
<h1>Veja a maior e menor palavra da frase aqui:</h1>
    <form action="" method="POST">     <!-- Envia formulario do tipo post -->
            <input type="text" name="sentence" value="<?php echo $user_sentence; ?>" placeholder="Insira uma frase">
            <input type="submit" value="Send">
    </form> 

    <?php
    if ($user_sentence != ""){  #Verifica se a frase do usuário é vazia
        echo "Frase: ".$user_sentence;
        $words = explode(" ", $user_sentence);
    ?>
    <div><br>
        <?php echo "\nMaior(es) palavra(s): "; ?>
        <?php echo biggest_word($words); // chama a function biggest_word?> 
    </div>
    <div><br>
    <?php echo "Menor(es) palavra(s): "; ?>
        <?php echo smallest_word($words); // chama a function smallest_word?> 
    </div>
    <?php }
get_footer();