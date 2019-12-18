<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search User</title>
  <!--Bootstrap CSS-->
  <link href="https://bootswatch.com/4/cosmo/bootstrap.min.css" rel="stylesheet">

  <script>
    function showSuggestion(str) {
      if (str.length == 0) document.getElementById('output').innerHTML = '';
      else {
        // AJAX request
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "suggest.php?q=" + str, true);
        xmlhttp.onload = () => {
          document.getElementById('output').innerHTML = xmlhttp.responseText;
        }
        xmlhttp.send();
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <h1>Search User</h1>
    <form>
      Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
  </div>
</body>

</html>