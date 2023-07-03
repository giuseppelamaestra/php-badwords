<?php 

$paragraph = $_POST["userParagraph"];
$censorWord = $_POST["bannedWord"];

$bannedParagraph = str_replace($censorWord, '*****', $paragraph)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    
<h1>
    Questo è il paragrafo non censurato: 
</h1>
<p>
    <em>
      "<?php echo $paragraph;  ?>"
    </em>
   
</p>

<h2>
    Il paragrafo censurato: 
</h2>
<p>
    <em>
        "<?php echo $bannedParagraph; ?>"
    </em>
</p>

</body>
</html>