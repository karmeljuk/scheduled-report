<!--
 Created with Webformgenerator by easyclick.ch
 www.easyclick.ch
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div class="TTWForm-container">
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Name *
               </label>
               <input type="text" name="name" id="field1" required="required" pattern="">
          </div>
          
          
          <div id="field7-container" class="field f_100">
               <label for="field7">
                    Send to *
               </label>
               <input type="email" name="send_to" id="field7" required="required">
          </div>
          
          
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Subject *
               </label>
               <input type="text" name="subject" id="field4" required="required">
          </div>
          
          
          <div id="field5-container" class="field f_100">
               <label for="field5">
                    Comments
               </label>
               <textarea rows="5" cols="20" name="comments" id="field5"></textarea>
          </div>
          
          
          <div id="field6-container" class="field f_100 checkbox-group">
               <label for="field6-1">
                    Is scheduled
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="checkbox_scheduled" id="field6-1" value="">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field8-container" class="field f_100">
               <label for="field8">
                    Reported period
               </label>
               <select name="reported_period" id="field8" required="required">
                    <option id="field8-1" value="Day">
                         Day
                    </option>
                    <option id="field8-2" value="Week">
                         Week
                    </option>
                    <option id="field8-3" value="Month">
                         Month
                    </option>
                    <option name="reported_period" id="reported_period-4" value="Year">
                         Year
                    </option>
               </select>
          </div>
          
          
          <div id="field9-container" class="field f_100">
               <label for="field9">
                    Include turbines under *
               </label>
               <input type="text" name="turbines_under" id="field9" required="required">
          </div>
          
          
          <div id="field10-container" class="field f_100 checkbox-group">
               <label for="field10-1">
                    Production
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="production" id="field10-1" value="">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field11-container" class="field f_100 checkbox-group">
               <label for="field11-1">
                    Availability
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="availability" id="field11-1" value="">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field12-container" class="field f_100 checkbox-group">
               <label for="field12-1">
                    Events
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="events" id="field12-1" value="">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field13-container" class="field f_100">
               <label for="field13">
                    Max-count
               </label>
               <input type="text" name="max_count_1" id="field13">
          </div>
          
          
          <div id="field15-container" class="field f_100 checkbox-group">
               <label for="field15-1">
                    Alarm List
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="alarm_list" id="field15-1" value="">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field16-container" class="field f_100">
               <label for="field16">
                    Max-count
               </label>
               <input type="text" name="max_count_2" id="field16">
          </div>
          
          
          <div id="field17-container" class="field f_100">
               <label for="field17">
                    Min-urgency level
               </label>
               <select name="min_urgency_level" id="field17">
                    <option id="field17-1" value="Low">
                         Low
                    </option>
                    <option id="field17-2" value="Middle">
                         Middle
                    </option>
                    <option id="field17-3" value="High">
                         High
                    </option>
               </select>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Send now">
          </div>
     </form>
</div>

</body>
</html>