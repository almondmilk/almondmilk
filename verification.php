<!DOCTYPE html>
<html>
  <head>
    <title="results">
  </head>
  <body>
    <script type="text/javascript">

    var firstname = <?php echo($_POST["firstName"]); ?>;
    var replacedFirstName = firstname.replace(/%2D/g, "-");
    var replacedFirstName = replacedFirstName.replace(/%2C/g, "'");
    var replacedFirstName = replacedFirstName.split('+').join(' ');
    document.write('<h3>test if it shows this text</h3>');
    </script>



  </body>
</html>
