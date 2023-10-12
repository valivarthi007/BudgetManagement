<!DOCTYPE html>
<html>
    <head>
        <title>Budget Ledger System</title>
        <link rel = "icon" type = "image/png" href = "images/svasset_icon.ico">
        <link rel = "stylesheet" type = "text/css" href= "./styles/style.css">
        <link rel = "stylesheet" type = "text/css" href= "./styles/RemoveStyles.css">
        <link rel = "script" type = "text/javascript" href = "./js/slides.js">
        <meta charset="UTF-8">
        <meta name="description" content="Asset Management System">
        <meta name="keywords" content="Asset,Budget,Management,Library">
        <meta name="author" content="Diwakar Raju">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="main_container">
        <div class="header">
            <div class="logo">
              <img src="images/budget1.jpg" alt="Logo">
            </div>
            <div class="website_heading">
                <h1>Budget Management System</h1>
                <p>Budget Ledger</p>
                <p>Developed and Maintained By</p>
                <p>M.Sc Computer Science</p>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="index.php" target="_self">Home</a></li>
                <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Budget Items</a>
                <div class="dropdown-content">
                        <a href="add.php" target="_self">Add</a>
                        <a href="Remove.php" target="_self">Remove</a>
                        <a href="Update.php" target="_self">Update</a>
                </div>
                </li>
                <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Reports</a>
                <div class="dropdown-content">
                        <a href="#">Budget Report</a>
                        <a href="#">Budget Dashboard</a>
                </div>
                </li>
                <li><a href="#">Admin Panel</a></li>
            </ul>
        </div>
        <div class="quicklinks">
            <h5>Quick Links</h5>
            <a href="#">Get The list recently added Budget items</a><br><br>
            <a href="#">Budget Balance</a><br><br>
            <a href="#">Last 6 months</a><br><br>
            <a href="#">Search asset</a><br><br>
        </div>
        <div class="main_content">
            <u><h1>Remove Form</h1></u>
            <form id="" class="" action="">
                <label for="search_rm_bdg">Enter budget item Number to delete : </label><br><br>
                <input type="text" name="search_rm_bdg" placeholder="Search.."><br><br>
                <a href="#">Search Instructions</a><br><br>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
        <div class="side_content">
            <div class="login">
                <form action="" class="" >
                    <fieldset>
                    <legend>Login</legend>
                    <input type="text" id="usrid" name="userid" value="" placeholder="user name" required><br><br>
                    <input type="password" id="usrpwd" name="usrpwd" placeholder="password" required><br><br>
                    <input type="submit" name="submit" value="Login">&nbsp;
                    <input type="reset" name="resetall" value="Clear"><br><br>
                    <a style="color:white;" href="#">Forgot password</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="About" id="About">
                <p>Developer : { Diwakar , Jaya }</p>
            </div>
        </div>
        </div>
    </body>
</html>