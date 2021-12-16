cd .
git init

git add ./*

git remote add origin https://github.com/Guliveer/Pracownia-aplikacji.git

set date = date /t
set time = time /t

git commit -m "Last update: %date% @ %time%"
git branch -M main
git fetch https://github.com/Guliveer/Twitch-Watchers_Multiple.git
git push -u origin main

exit
