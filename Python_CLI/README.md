# Python CLI mixpanel-demo

There are two variations of python impl. 

## Using MixPanel Python Library
Python app that uses MixPanel python library and simply uses that library to track the events. In order to use this program, you mush install the MixPanel python lib. Use the following command to install the lib

```
#Assuming you have already checked out the project, change directory to <PROJROOT>/Python_CLI
bash install-mp-lib.sh
```

Once the library is successfully installed, you can use run.sh to run the app. 

## Using a direct HTTP call to the MixPanel API.  
Python app that uses the REST endpoint direct to push the event payload. Since this program uses basic python libraries, no additional MixPanel specific libraries are required. 

You can use run.sh to run the app. Make selection from the available options wisely :-) 

## Output in MixPanel Event Dashboard

<img src="https://raw.githubusercontent.com/sainib/mixpanel-demos/master/Python_CLI/Output.png">

