<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <table id="main"  cellspacing="0">
        <tr>
            <td><h1>php ajax</h1></td>
        </tr>
        <tr>
            <td>
                <input type="button"id="load-button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table border="1" width="100%" cellpadding="10px">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>rakib</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" >
    $(document).ready(function(){
        $("#load-button").on("click",function(e){
            $.ajax({
                url: "display.php",
                type: "POST",
                success: function(data){
                    $("#table-data").html(data);
                }           
            });
        });
    });
</script>
<!-- <script>
      $('document').ready(function(){
        $('#button').click(function(){
            $('#test').append('<p>hhh</p>');
        });
      });
    </script> -->
</body>
</html>