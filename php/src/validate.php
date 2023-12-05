<?php
function cleaningInput($dataInput)
{
    $dataInput = trim($dataInput);  //Aqui estamos removendo possíveis espaços em branco presentes tanto no final quanto no começo
    $dataInput = htmlspecialchars($dataInput); //caracteres especiais são transformados em html entities (" (double quote) 	turns into &quot)
    $dataInput = stripslashes($dataInput); //Anteriormente eu estava passando o stripcslashes, mas vi que a função atual remove a barra invertida, enquanto a função que mencionei remove caracteres especiais como "\n"
    return $dataInput;
}

function cleaningInputLogin($dataInput)
{
    $dataInput = trim($dataInput); //Aqui estamos removendo possíveis espaços em branco presentes tanto no final quanto no começo
    $dataInput = str_replace(' ', '', $dataInput); //No login eu adicionei isso para caso algum engraçado tente colocar espaços no meio de strings, a fim de rodar comandos  
    $dataInput = htmlspecialchars($dataInput); //caracteres especiais são transformados em html entities (" (double quote) 	turns into &quot)
    $dataInput = stripslashes($dataInput); //Anteriormente eu estava passando o stripcslashes, mas vi que a função atual remove a barra invertida, enquanto a função que mencionei remove caracteres especiais como "\n"
    return $dataInput;
}


function validateLength($dataInput, $min, $max)
{
    $dataInput = strlen($dataInput);
    if ($dataInput >= $min && $dataInput <= $max) {
        return true; //Validando tamanho da string no backend
    }
}

function validateType($dataInput, $typeInput)
{ //Validação de tipo para que o usuário não cometa o erro de digitar algo que não seja um e-mail, por exemplo
    switch ($typeInput) {
        case 'email':
            return filter_var($dataInput, FILTER_VALIDATE_EMAIL) !== false;
            break;
        default:
            return true; //Qualquer tipo valido, mas nao especificado
    }
}

function uniqueInput($input, $otherInputs)
{ //Acredito que essa função pode ser muito útil também na hora de fazer o cadastro
    return !in_array($input, $otherInputs);
}

function validateRegex($dataInput, $pattern)
{
    return preg_match($pattern, $dataInput) === 1;
}
