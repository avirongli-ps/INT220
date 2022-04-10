<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>THE Music | Contact</title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css" />
</head>

<body>
    <div class="header_wrapper">
        <div class="login">
            <?php
            $today = date("F j, Y");
            echo '&nbsp;Today is ' . $today;
            ?>
            &nbsp;&nbsp;&nbsp;<a href="FeedbackForm.php">Submit Feedback</a>
            <ul>

                <li><a href="../loginpage.php">Admin Login</a></li>
            </ul>
        </div>
    </div>

    <div class="header_menu">
        <!--Start Menu-->
        <div class="menu">
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="Albums.php">ALBUMS</a></li>
                <li><a href="AboutUS.php">ABOUT US</a></li>

            </ul>
        </div>
    </div>
    <!--End Menu-->
    <div class="header_under"></div>
    <div class="container_wrapper">
        <!--Start Container for the web content-->
        <div class="sidebar_menu">
            <!--Sidebar-->
            <h3 class="header_1">THE Music</h3>
            <ul>
                <li><a href="Profile.php">Company Profile</a></li>
            </ul>
        </div>
        <!--End sidebar-->
        <div class="col2">
            <!--Start second column-->

            <div id="header_title">Contact Us</div>
            <div class="content1_info">
                <h3>Office</h3>
                <p>LOvely Professionall University</p>
                <p>Phagwara,Jalander</p>
                <p>144411,Punjab</p>
                <p></p>
                <table>
                    <tr>
                        <th>Chief Executive Officer</th>
                        <th>Publishing Director</th>
                    </tr>
                    <tr>
                        <td>Lucifer Mornistar</td>
                        <td>Monkey D. Luffy</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>Contact Numbers</th>
                        <th>7047857857</th>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>avirongli.ps@gmail.com</td>
                    </tr>
                </table>
            </div>
        </div>
        <!--End second column-->
    </div>
    <div class="footer_wrapper">
        <div class="footer_menu">
            <ul>
                <li>Find the us <a href="Contacts.php">THE Music Office</a> or <a href="Contacts.php">contact us</a> for more information</li>
            </ul>
            <br /> <br /> <br />
            <span style="color:#999; font-size:14px; margin-top:10px;">&copy;THE Music, Inc.</span>
        </div>
    </div>
</body>

</html>