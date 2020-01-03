   <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
          <script src="script.js" type="text/javascript"></script>

        <style>
            ol li
            {
                cursor: pointer;
                line-height: 50px;
                padding:2px;
                list-style: none;
                font-size:18px;
                width:119%;
                color: #C4B2B9;
                height:50px;
                font-style: italic;
                font-family: monospace;
            }
            
            ol li:hover
            {

                cursor: pointer;
                background: #5e5e5e;
                color:black;
                background-size: cover; 
                margin-left:-50px; 
                text-align:center;
                width:155.5%;
            }
            
        </style>
        </head>
    <body>

    <div class="alert alert-info" style="width:185px;height:50px;border-radius: 0px;">

                    <div class="well-sm">
                        <p style="margin-top:-12px;font-family: cursive;font-size: 20px;
                           color: green"> <img src="user.png" class="img-circle" width="30" height="30" style="border:2px solid green;background:green"/>
                           <?php echo $_SESSION["userid"]; ?>

                        </p>
                        <ol style=";margin-left:-40px;margin-top: 20px">

                            <li id="settings"><span class="glyphicon glyphicon-cog"></span> Settings
                            </li>
                            <li id="posts"><span class="glyphicon glyphicon-pushpin"></span> Posts</li>
                            
                            <li><span class="glyphicon glyphicon-ok"></span> Answered</li>
                            <li id="question"><span class="glyphicon glyphicon-question-sign"></span> Question</li>
                            <li style="margin-top:290px"><span class="glyphicon glyphicon-question-sign"></span>Rules</li>

                        </ol>
                    </div>
                </div>
        
    </body>
    