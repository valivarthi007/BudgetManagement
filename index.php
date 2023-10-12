<!DOCTYPE html>
<html>
    <head>
        <title>Budget Ledger System</title>
        <link rel = "icon" type = "image/png" href = "images/svasset_icon.ico">
        <link rel= "stylesheet" type = "text/css" href= "./styles/style.css">
        <link rel= "script" type = "text/javascript" href = "./js/slides.js">
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
        <div class="main_content" style="padding:50px;">
            <u><h1>Course Maintenance Budget Factors</h1></u>
            <h2>I Teaching Staff</h2>
            <ul>
                <li>Honorium for Co-Ordinator</li>
                <li>Remunaration For Academic Consultants</li>
                <li>Remunaration For Project Guidance</li>
                <li>Remuneration For Guest Faculty</li>
            </ul>
            <h2>II Establishment</h2>
            <ul>
                <li>Part Time Remunaration for Jr Assistant</li>
                <li>Part Time Remuneration for Office Subordinate</li>
                <li>Remuneration for CMM/CWMS(Lab Assistant)</li>
            </ul>
            <h2>III Other Charges</h2>
            <ul>
                <li>Contingency(Postage,Hospitatlity,Stationary)</li>
                <li>Books and Journals</li>
                <li>Lab & Maintenance<ul>
                    <li>Computer Systems</li>
                    <li>Computer related Electronics</li>
                </ul></li>
            </ul>
        </div>
        <div class="side_content">
            <div class="login">
                <form method="post" action="auth_login.php" class="" >
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