#!/bin/sh

if [ `uname` == 'Darwin' ]; then
	echo "Installing MixPanel.."
	sudo pip install mixpanel
	echo "MixPanel installation completed.."	
else
	echo "This script is built for MixPanel installation on Mac"
	echo "Since this is just for demo..preventing changes to unknown env"
	echo "Exiting.."
	exit 1
fi

