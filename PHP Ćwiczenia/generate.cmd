@echo off
cd %~dp0

echo Podaj nazwe tematu:
set /p "nazwa=>"
cls

echo Podaj ilosc przykladow w temacie:
set /p "count=>"
cls

mkdir "%nazwa%"

setlocal EnableDelayedExpansion
for /L %%i in (1, 1, %count%) do (
     set "formattedValue=000000%%i"
     
     mkdir "%nazwa%/!formattedValue:~-2!"
     echo Folder !formattedValue:~-2! has been created
     
     echo. 1> "%nazwa%/!formattedValue:~-2!/index.php"
     echo !formattedValue:~-2!/index.php has been created

     echo.
)
echo.
@pause