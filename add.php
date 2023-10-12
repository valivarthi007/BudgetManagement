<!DOCTYPE html>
<html>
    <head>
        <title>Budget Ledger System</title>
        <link rel = "icon" type = "image/png" href = "images/svasset_icon.ico">
        <link rel= "stylesheet" type = "text/css" href= "./styles/style.css">
        <link rel= "stylesheet" type = "text/css" href= "./styles/addpagestyles.css">
        <link rel= "script" type = "text/javascript" href = "./js/slides.js">
        <meta charset="UTF-8">
        <meta name="description" content="Budget Management System">
        <meta name="keywords" content="Budget,Management,Library">
        <meta name="author" content="Diwakar Raju">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        </style>
    </head>
    <body>
        <script src="js/slides.js" ></script>
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
            <div class="mcaddForm">
                <h3>Budget Item Addition Form</h3>
                <label for="Category">Category : </label>
                <select id="Category" name="Category" onchange="showCat()">
                    <option value=""></option>
                    <option  value="TSDiv">Teaching Staff</option>
                    <option  value="ESTBDiv">Establishment</option>
                    <option  value="OTCDiv">Other Charges</option>
                </select><br><br>
                <div class="TStaffDiv" id="TSDiv">
                    <form class="TStaffForm" action="">
                        <h3></h3>
                        <label for="TStaff">Teaching Staff Category : </label>
                        <select id="TStaff" name="TStaff" onchange="showTS()">
                            <option value=""></option>
                            <option value="AC">Academic Consultant</option>
                            <option value="PG">Project Guidance</option>
                            <option value="GF">Guest Faculty</option>
                        </select>
                        <div id="AC" class="ACRel">
                            <label for="ACName">AC Name : </label>
                            <input type="text" name="ACName" id="ACName" placeholder="AC Name">
                            <label for="ACBillToPay">Bill Amount : </label>
                            <input type="number" name="ACBillToPay" id="ACBillToPay" placeholder="Amount to be paid">
                            <label for="ACBill">Upload Bill : </label>
                            <input type="file" name="ACBill" id="ACBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                        </div>
                        <div id="PG" class="PGRel">
                            <label for="PGName">Project Name : </label>
                            <input type="text" name="PGName" id="PGName" placeholder="Project Name">
                            <label for="PGDesc">Project Description : </label>
                            <input type="text" name="PGDesc" id="PGDesc" placeholder="Project Description">
                            <label for="PGBillToPay">Bill Amount : </label>
                            <input type="number" name="PGBillToPay" id="PGBillToPay" placeholder="Amount to be paid">
                            <label for="PGBill">Upload Bill : </label>
                            <input type="file" name="PGBill" id="PGBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                        </div>
                        <div id="GF" class="GFRel">
                            <label for="GFName">Guest Faculty Name : </label>
                            <input type="text" name="GFName" id="GFName" placeholder="Guest Faculty Name">
                            <label for="GFDesc">Courses Taught : </label>
                            <input type="text" name="GFDesc" id="GFDesc" placeholder="Description">
                            <label for="GFBillToPay">Bill Amount : </label>
                            <input type="number" name="GFBillToPay" id="GFBillToPay" placeholder="Amount to be paid">
                            <label for="GFBill">Upload Bill : </label>
                            <input type="file" name="GFBill" id="GFBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                        </div>   
                    </form>
                </div>
                <div class="Estbdiv" id="ESTBDiv">
                    <form class="EstbForm" action="">
                    <label for="ESTB">Establishment Charge Type : </label>
                    <select id="ESTB" name="ESTB" onchange="showEstb()">
                        <option value=""></option>
                        <option value="JA">Junior Assistant</option>
                        <option value="OFS">Office Subordinate</option>
                        <option value="LBA">Lab Assistant</option>
                    </select>
                    <div class="JARel" id="JA">
                        <label for="JAName">JA Name : </label>
                        <input type="text" name="JAName" id="JAName" placeholder="Junior Assistant Name">
                        <label for="JABillToPay">Bill Amount : </label>
                        <input type="number" name="JABillToPay" id="JABillToPay" placeholder="Amount to be paid">
                        <label for="JABill">Upload Bill : </label>
                        <input type="file" name="JABill" id="JABill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                    </div>
                    <div class="OFSRel" id="OFS">
                        <label for="OFSName">OFS Name : </label>
                        <input type="text" name="OFSName" id="OFSName" placeholder="Office Subordinate Name">
                        <label for="OFSBillToPay">Bill Amount : </label>
                        <input type="number" name="OFSBillToPay" id="OFSBillToPay" placeholder="Amount to be paid">
                        <label for="OFSBill">Upload Bill : </label>
                        <input type="file" name="OFSBill" id="OFSBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                    </div>
                    <div class="LBARel" id="LBA">
                        <label for="LBAName">LBA Name : </label>
                        <input type="text" name="LBAName" id="LBAName" placeholder="Lab Assistant Name">
                        <label for="LBABillToPay">Bill Amount : </label>
                        <input type="number" name="LBABillToPay" id="LBABillToPay" placeholder="Amount to be paid">
                        <label for="LBABill">Upload Bill : </label>
                        <input type="file" name="LBABill" id="LBABill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                    </div>  
                    </form>
                </div>
                    <div class="OTCDiv" id="OTCDiv">
                        <form class="OTCForm" action="">
                            <label For="OTC">Other Charge Type : </label>
                            <select id="OTC" name="OTC" onchange="showOtc()">
                                <option value=""></option>
                                <option value="OTCCont">Contingency(Postage,Hospitality,Stationary)</option>
                                <option value="OTCBok">Journals and Books</option>
                                <option value="OTCLab" title="Computer and computer related">Lab & Maintenance</option>
                            </select>
                            <div class="COTrel" id="OTCCont">
                                <label for="Cont">Contingency Type : </label>
                                <select name="Cont">
                                    <option value="Postage">Postage</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Stationary">Stationary</option>
                                </select>
                                <label for="COTBillToPay">Bill Amount : </label>
                                <input type="number" name="COTBillToPay" id="COTBillToPay" placeholder="Amount to be paid">
                                <label for="COTBill">Upload Bill : </label>
                                <input type="file" name="COTBill" id="COTBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                            </div>
                            <div class="BOKRel" id="OTCBok">
                                <label for="BokType">Book and Journal : </label>
                                <select name="BokType">
                                    <option value="Bokbok">Book</option>
                                        <option value="BokJor">Journal</option>
                                    </select>
                                    <label for="BokName">Book/Journal Name</label>
                                    <input type="text" name="BokName" id="BokName" placeholder="Book Name">
                                    <label for="BokISBN">ISBN</label>
                                    <input type="text" name="BokISBN" id="BOKISBN" placeholder="Book ISBN No">
                                    <label for="BokPub">Publisher</label>
                                    <input type="text" name="BokPub" id="BokPub" placeholder="Book Publisher No">
                                    <label for="BokBillToPay">Bill Amount : </label>
                                    <input type="number" name="BokBillToPay" id="BokBillToPay" placeholder="Amount to be paid">
                                    <label for="BokBill">Upload Bill : </label>
                                    <input type="file" name="BokBill" id="BokBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                                </div>
                                <div class="LABRel" id="OTCLab">
                                    <label for="LabItemType">Lab Item : </label>
                                    <select name="LabItemType">
                                        <option value="LabCs">Computer</option>
                                        <option value="LabCR">Electronics</option>
                                    </select>
                                    <label for="LabCsNm">Item Name : </label>
                                    <input title="Computer System/Electronics Item" type="text" name="LabCsNm" type="LabCsNm" placeholder="System Name">
                                    <label for="LabCsBillToPay">Bill Amount : </label>
                                    <input type="number" name="LabCsBillToPay" id="LabCsBillToPay" placeholder="Amount to be paid">
                                    <label for="LabCsBill">Upload Bill : </label>
                                    <input type="file" name="LabCsBill" id="LabCsBill">
                            <input type="submit" name="submit" value="submit">&nbsp;
                            <input type="reset" name="resetall" value="reset"><br><br>
                                </div>
                            </form>  
                        </div>
            </div>                
        </div>
        <div class="side_content">
            <div class="login">
                <form action="" class="" action="">
                    <fieldset>
                    <legend>Login</legend>
                    <input type="text" id="usrid" name="userid" value="" placeholder="user name" required><br><br>
                    <input type="password" id="usrpwd" name="usrpwd" placeholder="password" required><br><br>
                    <input type="submit" name="submit" value="Login">&nbsp;
                    <input type="reset" name="resetall" value="Clear"><br><br>
                    <a href="#">Forgot password</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="About" id="About">
                <p>Developer : { Diwakar }</p>
            </div>
        </div>
        </div>
    </body>
</html>