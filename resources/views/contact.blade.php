<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vysali Pughazhendi's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">

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

<body>

    <div class="container">
        <div class="col-md-4">
            <h1 style="text-align: right; margin-bottom: 0px">MY CUSTOMERS</h1>
            <p style="font-style: italic; margin-bottom: 0px">"The more you engage with customers the clearer things
                become and the easier it is to determine
                what you should be doing </p>
            <p class="pull-right" style="font-style: italic; margin: 0px"> - Kevin Stirtz</p>
        </div>
        <div class="col-md-8" style="padding-left:10px">
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-1.png" />
            </div>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-2.png" />
            </div>
            <div class="col-md-2" style="padding-left:30px">
                <img class="contactImg" src="images/Contact/logo-3.png" />
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-4.png" />
            </div>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-5.png" />
            </div>
            <div class="col-md-2" style="padding-left:30px">
                <img class="contactImg" src="images/Contact/logo-1.png" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-8" style="padding-left: 150px;">
            <h3> CONTACT ME</h3>
         
			<<li><a href="/projecttodiscusses/create">Have a project to discuss?</a></li>
            <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> Vysali Pughazhendi
            </h4>
            <p style="font-style: italic"><span class="glyphicon glyphicon-envelope"
                    style="color: white"></span>&nbsp;<a href="#" onclick="sendMail()">vysali.pughazhendi@gmail.com</a>
            </p>
        </div>
    </div>
    
    </div> -
    <script>
        
        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        //Email Function
        function sendMail() {
            var link = "mailto:vysali.pughazhendi@gmail.com" +
                "?cc=vysali.pughazhendi@gmail.com" +
                "&subject=" + escape("Project Discussion") +
                "&body=" + escape("I would like to discuss regarding a project with you!!!");
            window.location.href = link;
        }
		 function openProject() {
            var myWindow = window.open("/projectform", "", "width=700,height=500,modal=yes")
        }
        
       
    
    </script>

          <a class="tabHover" href='{!! url('/'); !!}'><span class="glyphicon glyphicon-home"></span>HOME</a>
        <a class="tabHover" href='{!! url('/skills'); !!}'><span class="glyphicon glyphicon-cog">MYSKILLS</span></a>
        <a class="tabHover" href='{!! url('/recommendation'); !!}'><span class="glyphicon glyphicon-thumbs-up"></span>RECOMMENDATION</a>
        <a class="tabHover" href='{!! url('/latestwork'); !!}'><span class="glyphicon glyphicon-blackboard"></span> WORKS</a>
        <a class="tabHover" href='{!! url('/blog'); !!}'><span class="glyphicon glyphicon-modal-window"></span> BLOG</a>
        <a class="tabHover" href='{!! url('/hireme'); !!}'><span class="glyphicon glyphicon-briefcase"></span> HIRE ME</a>
        <a class="tabHover" href='{!! url('/contact'); !!}'><span class="glyphicon glyphicon-earphone"></span> CONTACT ME</a>


</body>


</html>
