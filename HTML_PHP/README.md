# Python CLI mixpanel-demo



## Flow 

* User Navigates to the home page of the website and clicks on the 'Stalk Me' button. 
* HTML page initiate AJAX call to PHP Rest API which uses native HTTP APIs of MixPanel to log the event. 

## Setup 

* Assuming the webserver is already configured to handle PHP code
* Drop the files in <PROJECT_ROOT>/mixpanel-demos/HTML_PHP to the docroot of the webserver
* Edit file <PROJECT_ROOT>/mixpanel-demos/HTML_PHP/application/config/config.php to map the base_url property appropriately. 

