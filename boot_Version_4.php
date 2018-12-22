<?php

?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #section1  {padding-top:5px;height:500px;color: #fff; background-color: #eee;}
  #section2  {padding-top:5px;height:500px;color: #fff; background-color: #673ab7;}
  #section3  {padding-top:5px;height:500px;color: #fff; background-color: #ff9800;}
  #section11 {padding-top:5px;height:500px;color: black; background-color: #eee;}
  #section12 {padding-top:5px;height:500px;color: #fff; background-color: #009688;}
  #section41 {padding-top:5px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:5px;height:500px;color: #fff; background-color: #009688;}

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                <!--    <span class="icon-bar"></span> -->                           
                </button>
                <a class="navbar-brand" href="#">DWSS</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Estimate <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#basicdata">Basic Data</a></li>
                                <li><a href="#section11">Section 1-1</a></li>
                                <li><a href="#section12">Section 1-2</a></li>
                            </ul>
                        <li><a href="#section2">Tubewell</a></li>
                        <li><a href="#section3">Canal</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#section41">Section 4-1</a></li>
                                <li><a href="#section42">Section 4-2</a></li>
                                <li><a href="#section42">Section 4-3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>    

    <div id="section1" class="container-fluid">
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <div class="container">
            <div class="row">
                <div class="col-*-*"></div>
                <div class="col-*-*">5</div>
            </div>
            <div class="row">
                <div class="col-*-*">1</div>
                <div class="col-*-*">2</div>
                <div class="col-*-*">3</div>
            </div>
            <div class="row">
            ...
            </div>
        </div>
    </div>
    
    <div id="section11" class="container-fluid">
        <h3>Data Entry Form</h3>
        <div class="form-group row">
            <div class="col-xs-2">
                <label for="zone-cbo">Zone</label>
                <select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Zone</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="circle-cbo">Circle</label>
                <select name="circle-cbo" id="circle-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Circle</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="district-cbo">District</label>
                <select name="district-cbo" id="district-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="block-cbo">Block</label>
                <select name="block-cbo" id="block-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Block</option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="scheme-cbo">Scheme</label>
                <select name="scheme-cbo" id="scheme-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Scheme</option>
                </select>
            </div>
        </div>
        <div id="basicdata" class="container-fluid">
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="zone-cbo">Additional New Pipe Length Required (Size in mm )</label>
                </div>    
                   
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="zone-cbo">160mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="circle-cbo">110mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="district-cbo">90mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="block-cbo">75mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="scheme-cbo">63mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-4">
                    <label for="zone-cbo">Sluice Valve Required [ Size in mm ]</label>
                </div> 
                <div class="col-xs-3">
                    <label for="zone-cbo">Haudi for S.V [ Size in mtr]</label>
                </div>    
                   
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="zone-cbo">160mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="circle-cbo">110mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="district-cbo">90mm</label>
                    <input class="form-control input-sm" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="block-cbo">75mm</label>
                    <input class="form-control" id="ex1" type="text">
                </div>
                <div class="col-xs-2">
                    <label for="scheme-cbo">63mm</label>
                    <input class="form-control" id="ex1" type="text">
                </div>

            </div>
    </div>
    </div>
    
   <div id="section12" class="container-fluid">
        <h3>Data Entry Form</h3>
        <div class="form-group row">
            <div class="col-xs-2">
                <label for="zone-cbo">Zone</label>
                <select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Zone</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="circle-cbo">Circle</label>
                <select name="circle-cbo" id="circle-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Circle</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="district-cbo">District</label>
                <select name="district-cbo" id="district-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="block-cbo">Block</label>
                <select name="block-cbo" id="block-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Block</option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="scheme-cbo">Scheme</label>
                <select name="scheme-cbo" id="scheme-cbo" class="form-control input-sm" autofocus="autofocus" required>
                    <option value="">Select Scheme</option>
                </select>
            </div>
        </div>
        <div id="basicdata" class="container">
            <div class="form-group row">
                <table class="table table-stripped">
                    <tr>
                        <td colspan="5" style="text-align: center;">
                            <span>Additional New Pipe Length Required (Size in mm )</span>        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>160mm</span>
                        </td>
                        <td>
                            <span>110mm</span>
                        </td>
                        <td>
                            <span>90mm</span>
                        </td>
                        <td>
                            <span>75mm</span>
                        </td>
                        <td>
                            <span>63mm</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <span>Sluice Valve Required [Size in mm]</span>        
                        </td>
                        <td colspan="2" style="text-align: center;">
                            <span>Haudi for S.V [Size in mtr]</span>        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>150mm</span>
                        </td>
                        <td>
                            <span>75mm</span>
                        </td>
                        <td>
                            <span>63mm</span>
                        </td>
                        <td>
                            <span>0.60 X 0.60</span>
                        </td>
                        <td>
                            <span>0.90 X 0.90</span>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                        <td>
                            <input class="form-control input-sm" id="ex1" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align: center;">
                            <div class="col-md-12" >
                                <button type="button" name="delete-btn" id="delete-btn" class="btn btn-danger">Delete</button>
                                <button type="button" name="reset-btn" id="reset-btn" class="btn btn-primary">Reset</button>
                                <button type="button" name="save-btn" id="save-btn" class="btn btn-primary">Add New</button>
                                <button type="button" name="update-btn" id="update-btn" class="btn btn-success">Update</button>
                            </div>        
                        </td>
                    
                    </tr>

                </table>
            </div>    
        </div>
    </div>
</div>
    <div id="section2" class="container-fluid">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <div class="container-fluid">
            <h1>Hello World!</h1>
            <div class="row">
                <div class="col-sm-3 col-md-6" style="background-color:yellow;">
                  <p>Lorem ipsum...</p>
                </div>
                <div class="col-sm-9 col-md-6" style="background-color:pink;">
                  <p>Sed ut perspiciatis...</p>
                </div>
            </div>
        </div>
    </div>

    <div id="section3" class="container-fluid">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    
    <div id="section41" class="container-fluid">
        <h1>Section 4 Submenu 1</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    
    <div id="section42" class="container-fluid">
        <h1>Section 4 Submenu 2</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

</body>
</html>
