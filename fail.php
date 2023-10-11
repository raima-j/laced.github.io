<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Animation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

            background-color: #1d0d2e;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #062441;
        }

        .success-container {
            color: #ffffff;
        }



        .message {
            font-size: 24px;
            margin-top: 20px;
            animation: message-animation 1s forwards;
        }



        @keyframes message-animation {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        #button{
color: #291a76;
font-weight: bold;
border-radius: 20px;
padding:5px;
border: 0px;

background-color: #9181de;
box-shadow:2px 2px 1px 0px #362f5a;
animation: wbutton 2s forwards;
}

@keyframes wbutton {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
#button:hover{
    color: #bab3db;
font-weight: bold;
border-radius: 20px;
border: 0px;
animation: wbutton 2s forwards;
background-color: #4e3bab;
box-shadow:2px 2px 1px 0px #362f5a;
}

    </style>
</head>

<body>
    <div class="container success-container">
        <div class="success-icon">

        </div>
        <p class="message"> Error!</p>
        <!---<form action="feedform.html">
            <input type="submit" value="Continue" id="button">
            
        </form>--->

        <?php 
         echo '<form method="POST" action="contact.html" target="_parent">
            <input type="submit" value="Continue" id="button"/>
          </form>';
        ?>
        
    </div>
</body>

</html>