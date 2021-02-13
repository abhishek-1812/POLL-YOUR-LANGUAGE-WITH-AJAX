<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLL UPDATED!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <style>
        .core{
            font-family: 'Langar', cursive;
        }
        .abs{
            font-size: 40px;
        }
    </style>
</head>
<body class="bg-dark core">
    <header>
        <div class="container">
            <h3 class="text-center mt-5 bg-warning abs">Vote Your Favourite Programming Language?</h3>
        </div>
    </header>
    <section>  
        <div class="conatiner text-white mt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="poll">               
                    <form>
                        <input type="radio" class="mb-3" name="vote" value="0" onclick="getVote(this.value)"> PYTHON<br>
                        <input type="radio" class="mb-3" name="vote" value="1" onclick="getVote(this.value)"> JAVA<br>
                        <input type="radio" class="mb-3" name="vote" value="2" onclick="getVote(this.value)"> C<br>
                        <input type="radio" class="mb-3" name="vote" value="3" onclick="getVote(this.value)"> PHP<br>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function getVote(int) {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("poll").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","poll_vote.php?vote="+int,true);
        xmlhttp.send();
        }
    </script>
</body>

</html>