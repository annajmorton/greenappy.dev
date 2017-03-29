This application requires OpenStudio 2.0 or greater. Here is a link to the download location:
https://www.openstudio.net/developers

The OS_energyplus.sh file assumes you are running bash on an Ubuntu linx machine. 
run the script with the following command:
`sudo bash OS_energyplus.sh`


You may need to install updated liboost1.55 and libqt5 (OS will let you know)
command for installing liboost1.55:
`sudo aptitude install libboost1.55-all-dev`

use the following command for libqt where the ---- should be replaced with the missing dependencies reported by the OS install:
`sudo aptitude install libqt5----`
