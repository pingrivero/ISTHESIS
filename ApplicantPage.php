<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LBASS Applicant Page</title>
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

    <style type="text/css">
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 30%;        
        }
        td.table-header{
            background-color: lightgray;
        }
        .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        }
        .panel-default {

        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
        }
    </style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Home</span> </a> </li>
            <li><a href="ApplicantGuidelines.html"><i class="icon-list-alt"></i><span>Guidelines</span> </a> </li>
            <li><a href="ApplicantResume.php"><i class="icon-file"></i><span>Resume</span> </a> </li>      
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->


     <!--Activities and Dates Panel-->
     <!--Date Picker JS-->
     <script src="jquery/jquery-1.9.1.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script src="dateTimePicker/js/kendo.all.min.js"></script>
        <script src="dateTimePicker/content/shared/js/console.js"></script>

        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">
               
                  <!-- Table -->
                  <table class="table">
                    <tr>
                        <td colspan="2"class="table-header"><center><b>Please schedule Activities and Dates</b></center></td>
                    </tr>

                    <tr>
                      <td>Teaching Demonstration @ Grade 11-Newton (Dummy Data)</td>
                      <td>

                     <script>
                          $(document).ready(function(){
                            $("#txtFromDate").datepicker({
                                minDate: "+10D",
                                maxDate: "+60D",
                                numberOfMonths: 1,
                                onSelect: function(selected) {
                                  $("#txtToDate").datepicker("option","minDate", selected)
                                  $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
                                }
                            });
                            $("#txtToDate").datepicker({ 
                                minDate: "+10D",
                                maxDate:"+60D",
                                numberOfMonths: 1,
                                onSelect: function(selected) {
                                   $("#txtFromDate").datepicker("option","maxDate", selected)
                                   $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
                                }
                            });  
                        });
                            
                         </script>

                         <script>
                            $(document).ready(function() {
                                function startChange() {
                                    var startTime = start.value();

                                    if (startTime) {
                                        startTime = new Date(startTime);

                                        end.max(startTime);

                                        startTime.setMinutes(startTime.getMinutes() + this.options.interval);

                                        end.min(startTime);
                                        end.value(startTime);
                                    }
                                }

                                //init start timepicker
                                var start = $("#start").kendoTimePicker({
                                    change: startChange
                                }).data("kendoTimePicker");

                                //init end timepicker
                                var end = $("#end").kendoTimePicker().data("kendoTimePicker");

                                //define min/max range
                                start.min("8:00 AM");
                                start.max("6:00 PM");

                                //define min/max range
                                end.min("8:00 AM");
                                end.max("7:30 AM");
                                });
                            </script>


            <!--User input for Date and Time-->
            <!--Date-->           <input type="text" id="txtFromDate" placeholder="Date" name="startDate" class="selector" required/> <br/>
            <!--Start Time-->     <input id="start" value="8:00 AM" name="startTime" required/><br/>
            <!--End Time-->       <input id="end" value="8:30 AM" name="endTime" required/><br/>

            <!--User input for Date and Time-->

                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
            </div>
        <!--Activities and Dates Panel-->


 

  </body>
</html>
