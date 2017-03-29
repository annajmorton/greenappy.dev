  #!/bin/bash    
  #this script installs energyplus at the root of a site on a linux server
  #it then installs open studio
  #here are the instructions for reference https://energyplus.net/installation-linux     
  echo downloading the energyplus installer
  edir=OS
  mkdir $edir
  curl -o ./$edir/osinstall.deb "https://openstudio-builds.s3.amazonaws.com/2.0.2/OpenStudio-2.0.2.fcf99c0dea-Linux.deb"
  wait
  dpkg -i ./$edir/osinstall.deb
  wait
  echo you win
  sudo rm -rf ./$edir
