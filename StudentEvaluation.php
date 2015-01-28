<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LBASS Student Evaluation</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
                rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/dashboard.css" rel="stylesheet">

        <link rel="stylesheet" href="jquery/jquery-ui.css">
        <link href="content/shared/styles/examples-offline.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.common.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.rtl.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.default.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.default.min.css" rel="stylesheet">

        
               <!-- Placed at the end of the document so the pages load faster --> 
        <script src="js/jquery-1.7.2.min.js"></script> 
        <script src="js/excanvas.min.js"></script> 
        <script src="js/chart.min.js" type="text/javascript"></script> 
        <script src="js/bootstrap.js"></script>
        <script src="js/base.js"></script>   
    </head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Let Rivera (Dummy Data)<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
            <form class="navbar-search pull-right">
              <input type="text" class="search-query" placeholder="Search">
            </form>
          </div>
          <!--/.nav-collapse --> 
        </div>
        <!-- /container --> 
      </div>
      <!-- /navbar-inner --> 
    </div>
    <!-- /navbar -->
    <div class="subnavbar">
      <div class="subnavbar-inner">
        <div class="container">
          <ul class="mainnav">
            <li class="active"><a href="#"><i class="icon-home"></i><span>Evaluation Form</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->
    <div class="well" align="center">
    <h4>Evaluation of Advisory Work (EAW-B)</h4>
    <form>
        <h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher">
        <h5>Grade/Section:</h5>
        <input type="text" placeholder="(Grade,Section)"> <br>
        <div class="well" align="center">
        <table border="1">
            <thead>
                <tr>
                    <th>Rating Scale</th>
                    <th>Legend</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Outstanding(4.85-5.00)</td>
                    <td>exceptional/excellent</td>
                </tr>
                <tr>
                    <td>Very Satisfactory(4.21-4.84)</td>
                    <td>way beyond what is expected</td>
                </tr>
                <tr>
                    <td>Satisfactory(3.50-4.20)</td>
                    <td>of the quality required by the job</td>
                </tr>
                <tr>
                    <td>Fair(2.50-3.49)</td>
                    <td>"just to get by"</td>
                </tr>
                 <tr>
                    <td>Unsatisfactory(1.00-2.49)</td>
                    <td>unacceptable/poor</td>
                </tr>
            </tbody>
        </table>
        <div class="well" align="center">
        <table>
            <thead
                <tr>
                    <th>Criteria</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
               <ol>
                <tr>
                    <td><li>Developing a healthy relationship in the class</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Creating a physical classroom setting conducive to a healthy atmosphere</li></td>
                    <td></td>
                </tr>
                <tr>
                    <td><li>Developing a team spirit and camaraderie in the class</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Sensing/detecting academic and other problems in students/class</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Holding private consultations/conselling with the class</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Giving attention to daily problems; not passing immediately to SFC/OPD</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Maintaining good contact with parentsl doing home visits when needed</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Exhibiting discretion, tact, and confidentiality in dealing with the class</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Supervising the class during flag ceremonies, programs, educational tours, and other similar activities</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Monitoring/recording habitual minor offenses and reporting the same to the OPD</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Making referrals to the SFC Personnel/Prefect of Discipline</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Creating and implementing a system of maintaining order/cleanliness in the room</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Conducting daily routine checks on uniform and ID</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Conducting daily routine checks on attendance</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Conducting routine checks on haircut (first Monday of the month)</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Guiding/inspiring the class in relation to environmental thrust</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td><li>Encouraging by word and example the living out of the LBASS core values</li></td>
                    <td><input type="range" value="3.50" min-value="1.0" max-value="5.00sqq"></td>
                </tr>
                <tr>
                    <td>Comments:</td>
                    <td></td>
                </tr>
              
            </tbody>
            </ol>
        </table>
    </form>

</body>
