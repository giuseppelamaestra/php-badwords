
<?php






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Badwords</title>
</head>
<body>
    
<!-- Action: destinatario dei miei dat -->

<form action="./server.php" method='POST'>
    <label for="user-paragraph"> Insert a Paragraph</label>
    <textarea name="userParagraph" id="user-paragraph" cols="30" rows="10"></textarea>
    <input type="text" name="bannedWord" id="censorWord">
    

    <button type="submit">
        Send
    </button>
</form>
</body>
</html>

