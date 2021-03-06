<?php

$title = 'Project Pride';

$defaultDeathScreenHeading = "Project Pride error";
$defaultDeathScreenMessage = "Something went wrong and I don't know what.";

$defaultMessageHeading = 'Message';
$defaultMessageText = 'This page did not receive a message';
$defaultMessageTime = '1';

$helpText = "If you need help email me!";


$homeBtn = <<<"END"
<button class="btn waves-effect waves-light pink lighten-1 z-depth-5" onclick="window.location='index.php'">
    <i class="material-icons">home</i>
</button>

END;


$copyright = <<<"END"
<footer class="page-footer yellow">
  <div class="footer-copyright">
    <div class="container">
      <details>
        <summary class="purple-text">Project Pride &copy; 2017-2018</summary>
        <p class="indigo-text"> - by <a href="https://github.com/rshah2020">Rahul Shah</a>. All Rights Reserved.</p>
      </details>
    </div>
  </div>
</footer>

END;


$imports = <<<"END"
    <!-- Links to resources -->
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Animation resources -->
            <!-- Animate css-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

            <!-- WOW js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
            <script>new WOW().init();</script>

END;
