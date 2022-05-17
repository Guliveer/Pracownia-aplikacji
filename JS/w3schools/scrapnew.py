import os
from bs4 import BeautifulSoup as bs
import numpy as np
import requests
# in CMD type:
# python3.10 -m pip install bs4 numpy requests
headers = {
    'User-Agent': 'anonymous',
    'From': 'example@gmail.com'
}

def clear():
    command = 'clear'
    if os.name in ('nt', 'dos'):  # If Machine is running on Windows, use cls
        command = 'cls'
    os.system(command)

def MainFunc():
    clear()
    urlToScrape=input("Which URL you want me to scrap examples from?\n> ")
    clear()
    pathToSave=input("Where do you want me to save files?\nWrite '.' if in the place from where you executed the program.\n> ")
    clear()
    finalList=TakingAllURLsOfExamples(urlToScrape)
    CreatingFolders(finalList, pathToSave)
    DownloadAnExample(finalList, pathToSave)

# This Function takes URLs of examples from one site provided by the user in variable urlToScrape 
def TakingAllURLsOfExamples(urlMain):
    data=[]
    page=requests.get(urlMain, headers=headers).text
    soup=bs(page, 'html.parser')
    listOfURLs=[item.get("href") for item in soup.find_all("a", class_="w3-btn")]
    urlFinal = [x for x in listOfURLs if x.startswith('tryit.asp?filename=')]
    domain="https://www.w3schools.com/js/"
    finalList=[domain+s for s in urlFinal]
    print(f'{len(finalList)} examples found', finalList)
    return finalList

# This functions downloads Examples and makes them pretty (usable)
def DownloadAnExample(finalList, pathToSave):
    newPathToSave=pathToSave
    q=0
    for oneURL in finalList:
        q+=1
        oneExmpl=(bs(requests.get(oneURL, headers=headers).text,'html.parser'))
        pathToSave=newPathToSave+"/"+str(q).zfill(2)+"/index.html"
        with open(pathToSave,'w') as f:
            f.writelines(str(oneExmpl.textarea.contents))
        with open(pathToSave,'r+') as f:
            lines=f.readlines()
            first2lines="<!DOCTYPE html>\n<html>\n"
            last1line="\n</html>"
            f.seek(0)
            f.truncate()
            f.writelines(first2lines)
            f.writelines(lines[1:-1])
            f.seek(0,2)
            f.writelines(last1line)

# this creates numbered folders inside a folder provided by the user in variable pathToSave
def CreatingFolders(numberOfFolders, pathToSave):
    for i in range(len(numberOfFolders)):
        os.mkdir(pathToSave+"/"+str(i+1).zfill(2))
    return numberOfFolders
MainFunc()
