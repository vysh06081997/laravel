@php
session_start();
$a=DB::select('select id,startyear,endyear,universityname,course,degree FROM edus');
$b=DB::select('select id,Start_Date,End_Date,Company_Name,Designation,Job_Description FROM exps');
@endphp
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
  <div style="text-align: center;width: 100%;padding-left:50px; display: inline-block" class="col-md-10">
    <div class="col-md-12">
      <div class="col-md-5">
        <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
          SKILLS & <br>EXPERTISE
        </h1>
        <div style="color: grey">Visual Designer, Front-End Developer 3D Designer.
        </div>
        <br>
        <div style="height:300px;width:200px;" class="pull-left">
          <img src="images/AboutMe/profile 1.jpg" style="height:300px;width:300px;" />
        </div>
      </div>
      <div class="col-md-5">
        <table style="align-items: center">
          <tr>
            <td width="300px" style="padding-right: 30px;">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">BRANDING &nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span></h6>
              </div>
              <div>
                <p style="text-align:left">Creating logos and posters for your company</p>
              </div>
            </td>
            <td width="300px">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">MARKETING &nbsp;&nbsp;<span class="glyphicon glyphicon-globe"></span> </h6>
              </div>
              <div>
                <p style="text-align:left">Trend designs for better experience of both images, logos and websites</p>
              </div>
            </td>
          </tr>
          <tr>
            <td width="300px" style="padding-right: 30px;">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">DESIGNING &nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span> </h6>
              </div>
              <div>
                <p style="text-align:left">Maintaining the quality and productivity in the works to please my clients.
                </p>
              </div>
            </td>
            <td width="300px">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">PROGRAMMING &nbsp;&nbsp; <span
                    class="glyphicon glyphicon-modal-window"></span></h6>
              </div>
              <div>
                <p style="text-align:left">Developing applications and systems that meet the needs and streamline the
                  work and experience of
                  the users.</p>
              </div>
            </td>
          </tr>
        </table>
        <br>
        <br>
        <div>
          <h5><b style="color: grey">Smart Digital Solutions </b> A Front-End Developer<br></h5>
          <img src="images/AboutMe/device01.png" style="height:100px;width:120px;" />
          <img src="images/AboutMe/device02.png" style="height:100px;width:120px;" />
          <img src="images/AboutMe/device03.png" style="height:100px;width:120px;" />
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="col-md-12" style="border-top:solid;"><br><br>
      <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
        EDUCATION
      </h1>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <div class="col-md-10">
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          @php echo $a[0]->startyear; @endphp @php echo $a[0]->endyear; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $a[0]->course; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:30px;">
        <h4 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $a[0]->course; @endphp</h4> <br>
        <h6 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey">
          @php echo $a[0]->universityname; @endphp</h6>
      </div>
     
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="col-md-10" style="border-top:solid;"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
           @php echo $a[1]->startyear; @endphp @php echo $a[1]->endyear; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $a[1]->course; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:30px;">
        <h4 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $a[1]->course; @endphp </h4> <br>
        <h6 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey">
          @php echo $a[1]->universityname; @endphp</h6>
      </div>
     
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="col-md-10" style="border-top:solid;"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
           @php echo $a[2]->startyear; @endphp @php echo $a[2]->endyear; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $a[2]->course; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:30px;">
        <h4 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $a[2]->course; @endphp </h4> <br>
        <h6 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey">
           @php echo $a[2]->universityname; @endphp</h6>
      </div>
          <br><br><br><br><br><br><br><br><br>
    <div class="col-md-10" style="border-top:solid;"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
           @php echo $a[3]->startyear; @endphp @php echo $a[3]->endyear; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $a[3]->course; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:30px;">
        <h4 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $a[3]->course; @endphp </h4> <br>
        <h6 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey">
           @php echo $a[3]->universityname; @endphp</h6>
      </div>
     <br><br><br><br><br><br><br><br><br>
    </div>

    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <div class="col-md-12" style="border-top:solid;"><br><br>
      <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
        WORK EXPERIENCE
      </h1>
    </div>
    <br><br><br><br><br><br>
    
    <br><br><br><br><br><br>
    <div class="col-md-10"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          @php echo $b[0]->Start_Date; @endphp  @php echo $b[0]->End_Date; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[0]->Company_Name; @endphp</h6>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[0]->Designation; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:5px; padding-left: 50px;">
        <h4 style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $b[0]->Designation; @endphp</h4>
        <br>
        <p
          style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey;font-size:small;">
          @php echo $b[0]->Job_Description; @endphp</h6>
        </p>
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br> <br><br><br><br>
    <div class="col-md-10" style="border-top:solid;padding-bottom: 50px;">
      <br><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          @php echo $b[1]->Start_Date; @endphp  @php echo $b[1]->End_Date; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[1]->Company_Name; @endphp</h6>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[1]->Designation; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:5px; padding-left: 50px;">
        <h4 style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $b[1]->Designation; @endphp</h4> <br>
        <p
          style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey;font-size:small;">
          @php echo $b[1]->Job_Description; @endphp
        </p>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br> <br><br><br><br>
    <div class="col-md-10" style="border-top:solid;padding-bottom: 50px;">
      <br><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          @php echo $b[2]->Start_Date; @endphp  @php echo $b[2]->End_Date; @endphp
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[2]->Company_Name; @endphp</h6>
        <h6 style="color:grey;text-align:right;padding-right:50px;">@php echo $b[2]->Designation; @endphp</h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:5px; padding-left: 50px;">
        <h4 style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          @php echo $b[2]->Designation; @endphp</h4> <br>
        <p
          style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey;font-size:small;">
          @php echo $b[2]->Job_Description; @endphp
        </p>
      </div>
    </div>
  </div>
  
  
</body>

</html>
