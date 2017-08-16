#!/bin/sh

while true; 
do
    read -p "Which python app you want to execute?
1. The one that uses MixPanel library?
2. The one that uses direct HTTP API?
Type 1 or 2..." yn

   case $yn in
	1) echo "Executing python app to send MP events using MP libs.";python app-mp-lib.py; echo "Done. Exiting.."; exit ;;
        2) echo "Executing python app to send MP events using direct HTTP API.";python app-http-api.py; echo "Done. Exiting.."; exit ;;
        *) echo "How hard is it to type just 1 or 2? :-) Lets try again, shall we?";;
    esac
done
