# syncSheets (In development)
An easy and fast way to syncronize google sheets with your system

 - [x] Read Tables
 - [ ] Create Tables
 - [ ] Delete Tables
 - [ ] Modify Tables
 - [ ] Add Permissions

### Instalation

**OBS: Before everything, you need create an API in Google for Developers because you will need a credentials.json and your Application Name**

Use the following code in composer

    composer require paulogmello/sheetsync
    
To use this lib, you will need Google/Api client, the script will bring all you will need

#### Instancing a new sheetSync

    $sheet = new  sheetSync('MyAppName', './credentials.json');
Theese two params are from your Google API

#### Reading a Table

    $array = $sheet->read("sheetId", "sheetPage");

