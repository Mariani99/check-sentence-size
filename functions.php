<?php
    function get_header($title){ //$name faz com que o nome das páginas seja dinamico de acordo com o nome passado por parametros
?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $title ?></title>
            </head>
            <body>
<?php
    }       //get_header - usado para chamar o header do html via function para o programa principal ficar mais limpo

    function get_footer(){
?>
            </body>
        </html>

<?php
     }      //get_footer -- usado para fechar o header no fim da pagina

     function biggest_word($words){
        $biggest_word = (array) null;       //criado um array caso haja duas ou mais palavras com o mesmo tamanho
        $word_length = 0;       //inicializa o tamanho da palavra a fim de comparação
        foreach ($words as $word) {
            if (strlen($word) > $word_length) {
                unset($biggest_word);       //remove os elementos do array pois a palavra atual é maior que as já inseridas.
                $word_length = strlen($word);       //armazena o tamanho da string para próximas verificações
                $biggest_word[0] = $word;       //armazena na primeira posição do array a palavra
            }else if(strlen($word) == $word_length){
                array_push($biggest_word, $word);       //caso a palavra tenha o mesmo tamanho, acrescenta no array ao inves de apagar os elementos dentro
            }
        }
        print_r ($biggest_word);        //printa o array
    }       //function biggest_word - Verifica quais as maiores palavras do código.

function smallest_word($words){
    $smallest_word = (array) null; //criado um array caso haja duas ou mais palavras com o mesmo tamanho
    $word_length = 100; //inicializa o tamanho da palavra a fim de inicialização
    foreach ($words as $word) {
        if (strlen($word) < $word_length) {
            unset($smallest_word);      //remove os elementos do array pois a palavra atual é menor que as já inseridas.
            $word_length = strlen($word);       //armazena o tamanho da string para próximas verificações
            $smallest_word[0] = $word;      //armazena na primeira posição do array a palavra
        }else if(strlen($word) == $word_length){
            array_push($smallest_word, $word);      //caso a palavra tenha o mesmo tamanho, acrescenta no array ao inves de apagar os elementos dentro
        }
    }
    print_r ($smallest_word);       //printa o array
}
