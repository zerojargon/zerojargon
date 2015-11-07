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
                box-shadow: 0.05em 0.05em 0.1em 0.05em rgba(0,0,0,0.05);
                -webkit-animation: shadow 0.5s;
                animation: shadow 1s;
            }
            a {
                text-decoration: none;
                color: inherit;
            }
            .title:before {
                position: fixed;
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
            @-webkit-keyframes expand {
                0% {bottom: 100%;}
                100% {bottom: 50%;}
            }
            @keyframes expand {
                0% {bottom: 100%;}
                100% {bottom: 50%;}
            }

            @-webkit-keyframes shadow {
                0%   { box-shadow: 0px 0px 0px rgba(0,0,0,0); }
                100% { box-shadow: 0.05em 0.05em 0.1em 0.05em rgba(0,0,0,0.05); }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <a href="mailto:info@zerojargon.com"><div class="title" id="zj"><strong>Zero</strong>Jargon</div></a>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69682931-1', 'auto');
  ga('send', 'pageview');

</script>