<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vysali Pughazhendi's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <nav>
        <div class="col-md-2"
            style="margin:0px;padding:0px;padding-left:20px;padding-right:20px;color: white;font-family: Georgia, 'Times New Roman', Times, serif;font-weight: bold">
            Vysali Pughazhendi</div>
        <a class="tabHover" href='{!! url('/'); !!}'><span class="glyphicon glyphicon-home"></span>HOME</a>
        <a class="tabHover" href='{!! url('/skills'); !!}'><span class="glyphicon glyphicon-cog">MYSKILLS</span></a>
        <a class="tabHover" href='{!! url('/recommendation'); !!}'><span class="glyphicon glyphicon-thumbs-up"></span>RECOMMENDATION</a>
        <a class="tabHover" href='{!! url('/latestwork'); !!}'><span class="glyphicon glyphicon-blackboard"></span> WORKS</a>
        <a class="tabHover" href='{!! url('/blog'); !!}'><span class="glyphicon glyphicon-modal-window"></span> BLOG</a>
        <a class="tabHover" href='{!! url('/hireme'); !!}'><span class="glyphicon glyphicon-briefcase"></span> HIRE ME</a>
        <a class="tabHover" href='{!! url('/contact'); !!}'><span class="glyphicon glyphicon-earphone"></span> CONTACT ME</a>
    </nav>
</head>

<body onload="showAllFunc()">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container col-md-8">
        <div>
            <button onclick="showAllFunc()">SHOW ALL </button>
            <button onclick="webFunc()">WEBSITES </button>
            <button onclick="appFunc()">APPS </button>
            <button onclick="designsFunc()">DESIGNS </button>
            <button onclick="photoFunc()">PHOTOGRAPHY </button>
        </div>
        <br>
        <div id="ShowAll">
            <div class="col-md-2"></div>
            <table style="align-items: center;">
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app3.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>STAFF TRAINING</h5> <br>
                        <p>Websites</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/app6.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>ABC</h5> <br>
                        <p>Apps</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/program09.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>WEBSITE DESIGNS</h5> <br>
                        <p>Design</p>
                    </td>
                </tr>
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app10.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>W3 PHOTOGRAPHY</h5> <br>
                        <p>Photography</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/app1.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>DIZAPPS</h5> <br>
                        <p>Apps</p>

                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/app4.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>TECH TRAINING</h5> <br>
                        <p>Websites</p>

                    </td>
                </tr>
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app7.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>Mobile Apps Designs</h5> <br>
                        <p>Designs</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/program04.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>AA PHOTOGRAPHY</h5> <br>
                        <p>Photography</p>

                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/payer.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>PAYER</h5> <br>
                        <p>Apps</p>

                    </td>
                </tr>
            </table>
        </div>
        <div id="Websites">
            <div class="col-md-2"></div>
            <table style="align-items: center;">
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app3.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>STAFF TRAINING</h5> <br>
                        <p>Websites</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/app4.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>TECH TRAINING</h5> <br>
                        <p>Websites</p>

                    </td>
                    <td style="padding:20px;">
                    </td>
                    <td style="padding:20px;">
                    </td>
                </tr>
            </table>
        </div>
        <div id="Apps">
            <div class="col-md-2"></div>
            <table style="align-items: center;">
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app6.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>ABC</h5> <br>
                        <p>Apps</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/app1.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>DIZAPPS</h5> <br>
                        <p>Apps</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/payer.PNG" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>PAYER</h5> <br>
                        <p>Apps</p>
                    </td>
                </tr>
            </table>
        </div>
        <div id="Photo">
            <div class="col-md-2"></div>
            <table style="align-items: center;">
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app10.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>W3 PHOTOGRAPHY</h5> <br>
                        <p>Photography</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/program04.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>AA PHOTOGRAPHY</h5> <br>
                        <p>Photography</p>
                    </td>
                </tr>
            </table>
        </div>
        <div id="designs">
            <div class="col-md-2"></div>
            <table style="align-items: center;">
                <tr style="padding:20px;">
                    <td style="padding:20px;">
                        <img src="images/Works/app7.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>Mobile Apps Designs</h5> <br>
                        <p>Designs</p>
                    </td>
                    <td style="padding:20px;">
                        <img src="images/Works/program09.jpg" style="height:100px;width:100px;" />
                    </td>
                    <td style="padding:20px;">
                        <h5>WEBSITE DESIGNS</h5> <br>
                        <p>Design</p>
                    </td>
                </tr>
            </table>
        </div>

        <script type="text/javascript">
            function showAllFunc() {
                document.getElementById("ShowAll").style.display = "block";
                document.getElementById("Websites").style.display = "none";
                document.getElementById("Apps").style.display = "none";
                document.getElementById("Photo").style.display = "none";
                document.getElementById("designs").style.display = "none";
            }
            function webFunc() {
                document.getElementById("ShowAll").style.display = "none";
                document.getElementById("Websites").style.display = "block";
                document.getElementById("Apps").style.display = "none";
                document.getElementById("Photo").style.display = "none";
                document.getElementById("designs").style.display = "none";
            }
            function appFunc() {
                document.getElementById("ShowAll").style.display = "none";
                document.getElementById("Websites").style.display = "none";
                document.getElementById("Apps").style.display = "block";
                document.getElementById("Photo").style.display = "none";
                document.getElementById("designs").style.display = "none";
            }
            function designsFunc() {
                document.getElementById("ShowAll").style.display = "none";
                document.getElementById("Websites").style.display = "none";
                document.getElementById("Apps").style.display = "none";
                document.getElementById("Photo").style.display = "none";
                document.getElementById("designs").style.display = "block";
            }
            function photoFunc() {
                document.getElementById("ShowAll").style.display = "none";
                document.getElementById("Websites").style.display = "none";
                document.getElementById("Apps").style.display = "none";
                document.getElementById("Photo").style.display = "block";
                document.getElementById("designs").style.display = "none";
            }
            function openLogin() {
                var myWindow = window.open("login.php", "", "width=700,height=500,modal=yes")
            }
            function openSignUp() {
                var myWindow = window.open("signup.php", "", "width=700,height=500,modal=yes")
            }
        </script>
</body>

</html>
