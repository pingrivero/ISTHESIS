<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LBASS Supervisor Evaluation</title>
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
        
               <!-- Placed at the end of the document so the pages load faster --> 
        <script src="js/jquery-1.7.2.min.js"></script> 
        <script src="js/excanvas.min.js"></script> 
        <script src="js/chart.min.js" type="text/javascript"></script> 
        <script src="js/bootstrap.js"></script>
        <script src="js/base.js"></script>   

        <style>
            .well{
                width: 30em;
            }
            ol li.list-group-item { 
                list-style: decimal inside;
                display: list-item;
            }
        </style>
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
    <h4>Evaluation of Classroom Instruction (ECI-A)</h4>
    <form>
        <table class="table">
            <thead>
                <tr>
                    <th><h5>Name of Teacher:</h5></th>
                    <th><input type="text" placeholder="Name of Teacher"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <h5>Level:</h5></td>
                    <td><input type="text" placeholder="(Grade,Section)"> <br></td>
                </tr>
                <tr>
                    <td><h5>Subject of Instruction:</h5></td>
                    <td><input type="text" placeholder="Subject"></td>
                </tr>
                <tr>
                    <td><h5>Type of Observation</h5></td>
                    <td>
                        <input type="radio" value="clinical"> Clinical Visit<br>
                        <input type="radio" value="formal"> Formal Visit<br>
                        <input type="radio" value="announced"> Announced<br>
                        <input type="radio" value="unannounced"> Unannounced<br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

        <div class="well">
        <table border="1" align="center">
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
    </div>
        <div align="center">
        <table>
            <thead
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>

                <tr>
                    <td align="center"><b>A. TEACHER </b></td>
                    <td colspan="4" align="center"><b>Rating</b></td>
                </tr>
                <ol>
                    <tr>
                        <td><li class="list-group-item">Articulation(2)</li></td>
                        <td><input type="radio" name="articulation" value="1"> 1<br></td>
                        <td><input type="radio" name="articulation" value="2"> 2<br></td>
                        <td><input type="radio" name="articulation" value="3"> 3<br></td>
                        <td><input type="radio" name="articulation" value="4"> 4<br></td>    
                        <td><input type="radio" name="articulation" value="5"> 5<br></td>                        
                    </tr>
                    <tr>
                        <td><li class="list-group-item">Modulation of voice(2)</li></td>
                        <td><input type="radio" name="modulation" value="1"> 1<br></td>
                        <td><input type="radio" name="modulation" value="2"> 2<br></td>
                        <td><input type="radio" name="modulation" value="3"> 3<br></td>
                        <td><input type="radio" name="modulation" value="4"> 4<br></td>    
                        <td><input type="radio" name="modulation" value="5"> 5<br></td> 
                    </tr>  
                    <tr>
                        <td><li class="list-group-item">Enthusiasm</li></td>
                        <td><input type="radio" name="enthusiasm" value="1"> 1<br></td>
                        <td><input type="radio" name="enthusiasm" value="2"> 2<br></td>
                        <td><input type="radio" name="enthusiasm" value="3"> 3<br></td>
                        <td><input type="radio" name="enthusiasm" value="4"> 4<br></td>    
                        <td><input type="radio" name="enthusiasm" value="5"> 5<br></td> 
                    </tr>     
                    <tr>
                        <td><li class="list-group-item">Vitality</li></td>
                        <td><input type="radio" name="vitality" value="1"> 1<br></td>
                        <td><input type="radio" name="vitality" value="2"> 2<br></td>
                        <td><input type="radio" name="vitality" value="3"> 3<br></td>
                        <td><input type="radio" name="vitality" value="4"> 4<br></td>    
                        <td><input type="radio" name="vitality" value="5"> 5<br></td> 
                    </tr>
                    <tr>
                        <td><li class="list-group-item">Poise</li></td>
                        <td><input type="radio" name="poise" value="1"> 1<br></td>
                        <td><input type="radio" name="poise" value="2"> 2<br></td>
                        <td><input type="radio" name="poise" value="3"> 3<br></td>
                        <td><input type="radio" name="poise" value="4"> 4<br></td>    
                        <td><input type="radio" name="poise" value="5"> 5<br></td> 
                    </tr> 
                    <tr>
                        <td><li class="list-group-item">Good Grooming</li></td>
                        <td><input type="radio" name="grooming" value="1"> 1<br></td>
                        <td><input type="radio" name="grooming" value="2"> 2<br></td>
                        <td><input type="radio" name="grooming" value="3"> 3<br></td>
                        <td><input type="radio" name="grooming" value="4"> 4<br></td>    
                        <td><input type="radio" name="grooming" value="5"> 5<br></td> 
                    </tr>
                    <tr>
                        <td><li class="list-group-item">Punctuality</li></td>
                        <td><input type="radio" name="punctuality" value="1"> 1<br></td>
                        <td><input type="radio" name="punctuality" value="2"> 2<br></td>
                        <td><input type="radio" name="punctuality" value="3"> 3<br></td>
                        <td><input type="radio" name="punctuality" value="4"> 4<br></td>    
                        <td><input type="radio" name="punctuality" value="5"> 5<br></td> 
                    </tr>    
                </ol>        
                    
                <tr>
                    
                </tr>
                <tr></tr>
            </tbody>
        </table>
    </form>

</body>

