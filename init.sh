#!/bin/bash
#composer update
#cp .env.example .env
#php artisan key:generate

if ! [ $(id -u) = 0 ]; then
   echo "The script need to be run using sudo!" >&2
   exit 1
fi

if [ $SUDO_USER ]; then
    real_user=$SUDO_USER
else
    real_user=$(whoami)
fi

#these commands need to run as the regular user...
sudo -u $real_user composer update
sudo -u $real_user cp .env.example .env 
sudo -u $real_user php artisan key:generate
sudo echo "I will update this README soon." > README.md

#these commands are the reason that we insist on running with sudo
chmod 0777 storage -R
chmod 0777 bootstrap/cache -R 