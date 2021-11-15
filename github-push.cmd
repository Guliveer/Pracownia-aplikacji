cd ./
git init

git add ./

git remote add origin https://github.com/Guliveer/Pracownia-aplikacji.git

git commit -m "`date` (Updated using script)"
git branch -M main
git push -u origin main

exit
