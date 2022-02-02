<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Pet Paws</title>
</head>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="logo">
                Pet Paws
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">User Log-In</a></li>
                <li><a href="emp-index.php">Admin Log-In</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<body>
<section>
    <div class="container">
        <div class="user signinBx">
            <div class="imgBx"><img src="Images/dog.jpg" alt="cat" /></div>
            <div class="formBx">
                <form method="post" action="ownerLogin.php">
                    <h2>Log-In</h2>
                    <input type="tel" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" name="oname" placeholder="Name" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <input type="submit" name="ologin" value="Log-In" />
                    <p class="signup">
                        Didn't register an employee ?
                        <a href="#" onclick="toggleForm();">Register</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="user signupBx">
            <div class="formBx">
                <form action="ownerRegistration.php" method="post">
                    <h2>Register</h2>
                    <input type="tel" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" name="oname" placeholder="Name" required/>
                    <input type="password" name="password" placeholder="Password" />
                    <input type="tel" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" name="olocation" placeholder="Location" required/>
                    <input type="tel" pattern="[0-9]{10}" name="ocontact" placeholder="Contact(10 digits)" required/>
                    <input type="tel" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" name="pname" placeholder="Pet Name" required/>
                    <input type="tel" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" name="breed" placeholder="Breed" required/>
                    <input type="submit" name="oregister" value="Register" />
                    <p class="signup">
                        Already registered ?
                        <a href="#" onclick="toggleForm();">Check-In.</a>
                    </p>
                </form>
            </div>
            <div class="imgBx"><img src="Images/cat.jpg" alt="dog" /></div>
        </div>
    </div>
</section>
<script src="script.js"></script>
</body>
</html>