<?php
$db=mysqli_connect('localhost','root','','origdb');
if(mysqli_connect_errno()){exit;}?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<body>

<H1 style="color: brown">Uses AJAX to bring the File informations </H1>
<form id ="myform" action="hw7.php" method="post">
    <label>inter the file name</label>
    <input type="text" id="user" name="user" >
    <span>
<table id ="result" ></form>

<?PHP
include ('hw7.php');
?>
</tbody>
</table></span>
<script type="text/javascript">
    $.post($("#myform").attr("action"),$("#myform :input").serializeArray(),function (info) {$("#result").html(info);})
    $("#user").onblur(function () { var t=setTimeout("alert('Save Changes Done !')",1);
        var fon = $('#user').val(); // here is the most important part because if you dont replace you will get a DOM 18 exception.

        console.log('starting ajax');
        $.ajax({
            type: "POST",
            url: "./hw7.php",
            data: {
                fille:fon,
            }
        }).done(function(data) {
            var dataParsed = JSON.parse(data);
            console.log(dataParsed);

        });

    });


</script>

</body>
</html>

