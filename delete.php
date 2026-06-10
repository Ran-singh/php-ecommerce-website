<?php
include('connection.php');

?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Line Icons -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
            padding:40px 20px;
        }

        .contact-form-wrapper{
            width:100%;
            max-width:1100px;
            margin:auto;
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        .single-input{
            position:relative;
            margin-bottom:30px;
        }

        .single-input label{
            display:block;
            margin-bottom:10px;
            font-size:20px;
            font-weight:600;
            color:#4a4a7a;
        }

        .form-input{
            width:100%;
            height:70px;
            border:2px solid #5d5d93;
            border-radius:16px;
            padding:0 60px 0 20px;
            font-size:18px;
            outline:none;
            transition:0.3s;
        }

        textarea.form-input{
            height:220px;
            padding-top:20px;
            resize:none;
        }

        .form-input:focus{
            border-color:#2f80ed;
        }

        .single-input i{
            position:absolute;
            right:22px;
            top:58px;
            color:#5d5d93;
            font-size:20px;
        }

        textarea + i{
            top:70px !important;
        }

        .form-button{
            margin-top:10px;
        }

        .button{
            background:#2f80ed;
            color:#fff;
            border:none;
            padding:16px 40px;
            border-radius:12px;
            font-size:22px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .button:hover{
            background:#1366d6;
        }

        .button i{
            margin-left:8px;
        }

        /* Responsive */

        @media(max-width:768px){

            .contact-form-wrapper{
                padding:25px;
            }

            .single-input label{
                font-size:18px;
            }

            .form-input{
                height:65px;
                font-size:16px;
            }

            textarea.form-input{
                height:180px;
            }

            .button{
                width:100%;
                font-size:18px;
            }

        }

    </style>

</head>

<body>

<div class="contact-form-wrapper">

    <form action="" method="">

        <div class="row">
		<div class="single-input">

                    <label for="name">sr</label>

                    <input type="text" id="name" name="sr" class="form-input" placeholder="Name"value="<?php echo $_GET['sr'];  ?>">

                    <i class="lni lni-user"></i>

                </div>

            <div class="col-md-6">
                <div class="single-input">

                    <label for="name">Name</label>

                    <input type="text" id="name" name="nm" class="form-input" placeholder="Name"value="<?php echo $_GET['nm'];  ?>">

                    <i class="lni lni-user"></i>

                </div>
            </div>

            <div class="col-md-6">
                <div class="single-input">

                    <label for="email">Email</label>

                    <input type="email" id="email" name="email" class="form-input" placeholder="Email"value="<?php echo $_GET['em'];  ?>">

                    <i class="lni lni-envelope"></i>

                </div>
            </div>

            

            <div class="col-md-6">
                <div class="single-input">

                    <label for="subject">Subject</label>

                    <input type="text" id="subject" name="subject" class="form-input" placeholder="Subject" value="<?php echo $_GET['subject'];  ?>">

                    <i class="lni lni-text-format"></i>

                </div>
            </div>

            <div class="col-md-12">
                <div class="single-input">

                    <label for="message">Message</label>

                    <textarea name="msg" id="message" class="form-input" placeholder="Message" ><?php echo $_GET['msg'];  ?></textarea>

                    <i class="lni lni-comments-alt"></i>

                </div>
            </div>

            <div class="col-md-12">

                <div class="form-button">

                    <button type="submit" class="button"name="up">
                        DELETED
                        <i class="lni lni-telegram-original"></i>
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>

</body>
</html>
<?php


if(isset($_GET['up']))
{
$f=$_GET['sr'];
$f=$_GET['nm'];
$b=$_GET['email'];
$d=$_GET['subject'];
$e=$_GET['msg'];
    $del="DELETE FROM ram WHERE sr='$f'";
    

   
	$up=mysqli_query($con,$del);
	if($up)
	{
	echo "Deleted";	
	}
	else
	{
		echo "not Deleted";
	}
}
?>