# syncSheets (In development)
An easy and fast way to syncronize google sheets with your system

 - [x] Read Tables
 - [ ] Create Tables
 - [ ] Delete Tables
 - [ ] Modify Tables
 - [ ] Add Permissions

### Instalation

**OBS: Before everything, you need create an API in Google for Developers because you will need a credentials.json and your Application Name**

Add to your composer.json the following code

    {
    "require":{"google/apiclient": "^2.15.0"},
    "scripts":{"pre-autoload-dump": "Google\\Task\\Composer::cleanup"},
    "extra":{"google/apiclient-services": ["Drive","Sheets"]}
    }
To use this lib, you will need Google/Api client, the script and extra in the code is for you clean the code of others api from Google

#### Instancing a new sheetSync

    $sheet = new  sheetSync('MyAppName', './credentials.json');
Theese two params are from your Google API

#### Reading a Table

    $array = $sheet->read("sheetId", "sheetPage");

