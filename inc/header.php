<html>
    <head>
        <title>MiRACKulous</title>
        <link rel="stylesheet" type="text/css" href="./inc/styles.css">
    </head>
</html>
<body>
    <nav>
        <a class="btn" href="?cmd=new">Design New Rack</a>&nbsp;<a class="btn" href="?cmd=load">Load A Rack</a>&nbsp;<a class="btn" href="?cmd=save">Save This Rack</a><?php if(isset($RACKLOADED)) {print "<a class=\"btn\" href=\"?cmd=delete\">Delete This Rack</a>";} ?>
    </nav>