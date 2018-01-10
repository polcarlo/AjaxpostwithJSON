<html>
    <head>
       <title>jQuery Test</title>

    </head>

    <body>
 
        <form id="insert" method="post">
        
            firstName: <input type="text" name="firstName" id="firstname"/><br/>
            lastName: <input type="text" name="lastName" id="lastname"/><br/>
        
           <input type="button" value="submit" name="submit" id="submit"/>
        </form>

       <div id="result"></div>
       <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
       <script type="text/javascript">
           $(document).ready(function() {
               $("#submit").click(function(){
                   $.ajax({
                       url: "insert.php",
                       type: "POST",
                       data: {
                           firstname: $("#firstname").val(),
                           lastname: $("#lastname").val()
                        
                       },
                       dataType: "JSON",
                       success: function (jsonStr) {
                           $("#result").text(JSON.stringify(jsonStr));
                       }
                   });
               });
           });
       </script>

    </body>
</html>