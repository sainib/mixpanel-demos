# HTML-PHP Example



## Flow 

* User Navigates to the home page of the website and clicks on the 'Stalk Me' button. 
* HTML page initiate AJAX call to PHP Rest API which uses native HTTP APIs of MixPanel to log the event. 

Web Page - 
<img src="https://github.com/sainib/mixpanel-demos/blob/master/Python_CLI/Output.png">

Success message after user clicks on the button 
<img src="https://raw.githubusercontent.com/sainib/mixpanel-demos/blob/master/HTML_PHP/2-webpage_sample.png">

Event logged in MixPanel 
<img src="https://raw.githubusercontent.com/sainib/mixpanel-demos/blob/master/HTML_PHP/3-webpage_sample.png">

## Setup 

* Assuming the webserver is already configured to handle PHP code
* Drop the files in <PROJECT_ROOT>/mixpanel-demos/HTML_PHP to the docroot of the webserver
* Edit file <PROJECT_ROOT>/mixpanel-demos/HTML_PHP/application/config/config.php to map the base_url property appropriately. 

Note: The code to log events is in this file - https://github.com/sainib/mixpanel-demos/blob/master/HTML_PHP/application/controllers/Welcome.php

