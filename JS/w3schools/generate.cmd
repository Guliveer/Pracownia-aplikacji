@echo off
cd %~dp0

echo Podaj nazwe tematu:
set /p "nazwa=>"
cls

echo Podaj ilosc przykladow w temacie:
set /p "count=>"
cls

mkdir "%nazwa%"
echo 2> "%nazwa%/lista.txt"
cls

setlocal EnableDelayedExpansion
for /L %%i in (1, 1, %count%) do (
     set "formattedValue=000000%%i"
     
     mkdir "%nazwa%/!formattedValue:~-2!"
     echo !formattedValue:~-2! has been created
     
     echo. 2> "%nazwa%/!formattedValue:~-2!/index.html"
     echo !formattedValue:~-2!/index.html has been created

     echo !formattedValue:~-2!. >> "%nazwa%/lista.txt"
     echo. >> "%nazwa%/lista.txt"

     echo.
)
echo.
@pause