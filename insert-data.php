<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    #success-message{
        background: #DEF1D8;
        color: green;
        padding: 10px;
        margin: 10px;
        display:none;
        position:absolute;
        right: 15px;
        top: 15px;
    }
    #error-message{
        background: #DEF1D8;
        color: red;
        padding: 10px;
        margin: 10px;
        display:none;
        position:absolute;
        right: 15px;
        top: 15px;
    }
</style>
</head>
<body>
    <table id="main"  cellspacing="0">
        <tr>
            <td><h1>php ajax</h1></td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                <input type="text"id="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <input type="submit"id="save-button" value="Save">
</form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
                
            </td>
        </tr>
    </table>
 <div id="error-message"></div>
 <div id="success-message"></div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" >
    $(document).ready(function(){
    function loadTable(){
            $.ajax({
                url: "display1.php",
                type: "POST",
                success: function(data){
                    $("#table-data").html(data);
                }           
            });
        }
        loadTable();
        $("#save-button").on("click",function(e){
            e.preventDefault();
            var name = $("#name").val();
            if(name== ""){
                $("#error-message").html("All fileds are required.").slideDown();
                $("#success-message").slideUp();
            }else{
                $.ajax({
                url: "show-data.php",
                type: "POST",
                data: {user_name:name},
                success: function(data){
                    if(data==1){
                    loadTable();
                    $("#addForm").trigger("reset");
                    $("#success-message").html("Data Inserted succesfull.").slideDown();
                    $("#error-message").slideUp();
                    }
                    else{
                        
                        $("#error-message").html("All fileds are required.").slideDown();
                        $("#success-message").slideUp();
                    }
                }
            });
            }
           
        });
    });
</script>



</body>
</html>