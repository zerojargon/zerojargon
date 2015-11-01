<!DOCTYPE html>
<html>
    <head>
        <title>ZeroJargon</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Roboto';
                color: #666;
                background: #fafafa;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                border-radius: 3px;
                padding: 2em 1.5em;
                background: #fff;
                box-shadow: 0.05em 0.05em 0.1em 0.05em rgba(0,0,0,0.1);
            }
            .title:before {
                position:  absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 50%;
                content: "";
                display: block;
                background: #333;
                z-index: -1;
                -webkit-animation: expand 1s; /* Chrome, Safari, Opera */ 
                animation: expand 1s;
            }
            @-webkit-keyframes expand{
                0% {bottom: 100%;}
                100% {bottom: 50%;}
            }
            @keyframes expand{
                0% {bottom: 100%;}
                100% {bottom: 50%;}
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" id="zj"><strong>Zero</strong>Jargon</div>
            </div>
        </div>
    </body>
</html>
<script>
(function() {
    var title = document.getElementById('zj');
    title.className = title.className + ' after';

})();
</script>