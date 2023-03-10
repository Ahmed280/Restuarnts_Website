<!DOCTYPE html>
<html>

<head>

    <title>form</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            background-image: url('res3.jpg');
        }

        .form-wrapper {
            width: 400px;
            height: 500px;
            border-radius: 4px;
            background: #2F366D;
            color: rgba(253, 243, 248, 1);
            box-shadow: 0px 1px 10px 3px rgba(145, 125, 160, 1);
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            overflow: hidden;
        }

        #registeras {

            border-radius: 4px;
            background: #2F366D;
            color: rgba(253, 243, 248, 1);
            box-shadow: 0px 1px 10px 3px rgba(145, 125, 160, 1);

        }

        .form-wrapper img {
            height: 100%;
            position: absolute;
            top: 0;
            left: -50%;
            opacity: .3;
            -webkit-filter: blur(3px);
            filter: blur(3px);
        }

        .form-wrapper .content-wrapper {
            position: relative;
            opacity: 1;
            width: 400px;
            height: 500px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: column;
            -ms-flex-flow: column;
            flex-flow: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .form-login {
            margin: 4rem auto;
        }

        .form-login input {
            margin: 5px auto;
            display: block;
            border-radius: 4px;
            background: none;
            color: rgba(253, 243, 248, 1);
            border: 2px solid rgba(85, 112, 172, .8);
            padding: 10px;
            width: 300px;
            font-weight: bolder;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }

        .form-login button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            display: block;
            font-weight: bolder;
            color: rgba(253, 243, 248, 1);
            background: #ec6838;
            border: none;
            border-radius: 4px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }

        .form-login input:focus {
            outline: none;
            color: rgba(253, 243, 248, 1);
            background: rgba(85, 112, 172, .8);
            border-width: 2px;
            border-style: solid;
            border-color: rgba(85, 112, 172, .8);
        }

        .form-login input:hover {
            color: rgba(253, 243, 248, 1);
            background: rgba(85, 112, 172, .8);
            border-width: 2px;
            border-style: solid;
            border-color: rgba(85, 112, 172, .8);
        }

        .form-login button:hover {
            cursor: pointer;
            box-shadow: 0px 1px 10px 1px rgba(236, 104, 56, .6);
        }

        .form-wrapper .content-wrapper p {
            font-size: .7rem;
            color: rgba(253, 243, 248, 1);
        }

        .form-wrapper .content-wrapper a {
            color: #FDF3F8;
            text-decoration: none;
        }

        #wrapper-signup {
            opacity: 0;
            pointer-events: none;
        }

        #wrapper-signup:target {
            display: block;
            opacity: 1;
            pointer-events: all;
        }

        #wrapper-signup:target #wrapper-login,
        #wrapper-signin:target #wrapper-signup {
            opacity: 0;
            pointer-events: none;
        }

        #wrapper-signup,
        #wrapper-login {
            -webkit-transition: .2s linear all;
            transition: .2s linear all;
        }
    </style>

</head>

<body>
    <div class="form-wrapper" id="wrapper-login">
        <img src='res3.jpg' alt='bg1' />
        <div class="content-wrapper" id="content-signin">
            <h1>Hello!</h1>
            <?php
            if (isset($_GET['error'])) {
                echo "<p> " . $_GET['error'] . " !</p>";
            }

            ?>
            <form action="checking.php" method="post" class="form-login">
                <input type="email" name="email" placeholder="Enter yor email" class="input-username" />
                <input type="password" name="password" placeholder="password" class="input-password" />
                <div style="font-size: 10pt; text-align: center; margin: 8px 0 8px 0;">
                    Login as
                    <select name="loginas" id="registeras">
                        <option name="user" value="user" selected>User</option>
                        <option name="admin" value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn-login">LOGIN</button>
            </form>
            <p>No account? <a href="#wrapper-signup">Sign up</a></p>
        </div>
    </div>
    <div class="form-wrapper" id="wrapper-signup">
        <img src='res3.jpg' alt='bg2' />
        <div class="content-wrapper" id="content-signin">
            <h1>Join us!</h1>
            <?php
            if (isset($_GET['error'])) {
                echo "<p> " . $_GET['error'] . " !</p>";
            }

            ?>
            <form method="post" action="registerUser.php" class="form-login">
                <input type="text" id="username" name="username" placeholder="Name" class="input-username" />
                <input type="email" id="email" name="email" placeholder="Email address" class="input-email" />

                <input type="password" id="password" name="password" placeholder="Password" class="input-password" />
                <input type="password" class="form-control" name="confirm" id="confirm" class="input-password" placeholder="Confirm PassWord" requireed>

                <div style="font-size: 10pt; text-align: center; margin: 8px 0 8px 0;">
                    Register as
                    <select name="registeras" id="registeras">
                        <option name="user" value="user" selected>User</option>
                        <option name="admin" value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn-login">SIGN UP</button>
            </form>
            <p>Got account? <a href="#wrapper-login">Sign in</a></p>
        </div>
    </div>
</body>

</html>