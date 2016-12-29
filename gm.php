<?php
session_start(); 
$page_title = "Track Users on Map!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');
}
elseif(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');
}
else
{
   include('./Header.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"> 
  <head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/> 
   
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript"> 
      var map;
      var XMLHttpRequestObject = false; 
      var str; 
      var APIKey;
      var t; // target
      var mylat; // my current latitude
      var mylong; // my current longitude
      
      function initialize() {
	
	  	   getData(getPeopleLocations,"process.php",'targetDiv');
      }

    
      // reusable AJAX HTTP GET function
      function getData(fn,dataSource, divID) { 
         if (window.XMLHttpRequest) {
            XMLHttpRequestObject = new XMLHttpRequest();
         } else if (window.ActiveXObject) {
            XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
         }

         if(XMLHttpRequestObject) {
            t = document.getElementById(divID); 
            XMLHttpRequestObject.open("GET", dataSource); 
            XMLHttpRequestObject.onreadystatechange = fn;
            XMLHttpRequestObject.send(null); 
         }
      }
      
      function getPeopleLocations() { 
        if (XMLHttpRequestObject.readyState == 4 && 
            XMLHttpRequestObject.status == 200) { 
          var str  = XMLHttpRequestObject.responseText; 


          var num = str.substring(0,str.indexOf("@")); // extract number of records
          
          var temp = new Array();     
          temp = str.split('?');
                
          var username;
          
          // print number of records
      	  t.innerHTML = "<br>Number of users: "+num+"<br><br>"; // initialize
      	  
      	  // show the historical records of locations
      	  var u= "User:".length;
		  var num_mark="";
          for(var i=0; i < temp.length-1;i++) {
			  var n=i+1;
            username = temp[i].substring(temp[i].indexOf("User:")+u,temp[i].indexOf(';'));
            lat = temp[i].substring(temp[i].indexOf(';')+1,temp[i].indexOf(','));
            longi = temp[i].substring(temp[i].indexOf(',')+1);
			addre = temp[i].substring(temp[i].indexOf('*')+1);
            t.innerHTML = t.innerHTML +"["+n+"] "+ "username:" + username +" <input type=button onClick=location.href='SearchItem.php?id="+username+ "' value=View_Items></input><BR>"+ "Address:" + addre + "<BR> <BR>";
			num_mark+= "&markers=color:red%7Clabel:"+n+"%7C"+lat+","+longi;
			
          }
                
          // now get the map from Google maps
          // construct the URL for the map we want
          var mapURL= "https://maps.googleapis.com/maps/api/staticmap?center=Melbourne&zoom=10&size=800x800&maptype=mobile"+num_mark+"&sensor=false";
                  
          // make the image tag that contains the map
          document.getElementById("map").innerHTML = "<img class=img-responsive src='"+mapURL+"'"+">";
        }
      }  

    </script> 
  </head> 
  <body onload="initialize()"> 
  
  <div class="container panel panel-info" >
  </br>  </br>  </br>
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>View Locations of all users</b></h3>
</div>  
</div>
<div class="row panel panel-body">
<div class="col-lg-6 text-center">
    <div id="map" ></div> 
     	</div>  
			
	<div class="col-lg-6">
         <div id="message">List of Users</div>
    <div id="targetDiv"></div>
	</div>  
</div>
	</div>
	
  </body> 
</html> 

<?php
include('./Footer.php');
?>
