#!/bin/sh

if [ `uname` == 'Darwin' ]; then
	echo "Installing MixPanel.."
	sudo pip install mixpanel
	echo "MixPanel installation completed.."	
elif [ `uname` == 'Linux' ]; then
	echo "Installing MixPanel on Linux, assuming you have installation privileges.."
	yum -y update
	yum -y install epel-release
	yum -y install python-pip
	pip install --upgrade pip
	pip install mixpanel
	echo "MixPanel installation completed.."
else 
	echo "Unsupported OS"
	echo "Exiting.."
	exit 1
fi

