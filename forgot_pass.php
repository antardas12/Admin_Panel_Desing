<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Employee</title>
        <link href="css/styles.css?v=1" rel="stylesheet" />
        <link href="css/style.css?v=1" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700;800&display=swap');
            body{
                background:#e1e1e1;
                width: 100vw;
                height: 100vh;
                padding:3vw;
                font-family: 'Open Sans', sans-serif;
            }
            #main{
                width:100% ;
                height:100%;
                background:white;
                box-shadow:5px 5px 20px -17px ;
                display:flex;
            }
            .left,.right{
                flex:1;
                height:100%;
            }
            .left{
                /* padding:1rem;     */
            }
            .right{
                background:url('./img/login-bg.jpg') no-repeat center center/70%;
            }
            .left .heading{
                /* border-bottom:3px solid black; */
                margin-bottom:0 !important;
                padding:8px;
                display:inline-block;
            }
            #form{
                width:500px;
                height:70%;
                display:grid;
                place-items:center;
                margin: 2rem auto;
            }
            label{
                padding:0 !important;
            }
            form{
                box-shadow:5px 5px 20px -15px;
                border-radius:15px;
                padding:3rem !important;
            }
            .head{
                background:#28282B;
            }
            .pass-con{
                padding:0 !important;
                position:relative;
            }
            .pass-btn{
                position: absolute;
                top:50%;
                right:2px;
                transform:translateY(-50%);
                background:white;
                border:none;
                outline:none;
            }
            
        </style>
    </head>
    <body>
            <div id="main">
                <div class="left">
                    <div class="head">
                        <h2 class="heading text-light">Forgot Password</h2>
                    </div>
                    <div class="row" id="form">
						<form control="" class="form-group">
							<div class="row mb-3">
                                <label for="Email">Email</label>
								<input type="text" name="Email" id="Email" class="form-control" placeholder="Email">
							</div>
							
							<div class="row">
								<!-- <input type="submit" value="Login" class="btn btn-primary"> -->
                                <a href="./verify_otp" class="btn btn-primary">Send OTP</a>
							</div>
                            
						</form>
					</div>
                </div>
                <div class="right"></div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            let passInput = document.getElementById('password');
            let viewToggle = document.querySelector('.pass-btn');
            viewToggle.addEventListener('click',()=>{
                if (passInput.type === 'password') {
                        passInput.type = 'text';
                    } else {
                        passInput.type = 'password';
                    }
            })
        </script>
    </body>
</html>
