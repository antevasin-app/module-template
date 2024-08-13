# Antevasin Plugin Module Template
Built for the [Rukovoditel](https://rukovoditel.net) Open Source application designer.

Use this to create your own module within the [Antevasin Rukovodital Plugin](https://github.com/antevasin-app/plugin-rukovoditel)

## Dependancies
 ### Rukovoditel Open Source application designer.

 For more information see [here](https://www.rukovoditel.net/about.php)

 Download and install the latest version from [here](https://www.rukovoditel.net/download.php)


 ### Antevasin Rukovoditel Plugin.

 Download and install the latest release from [here](https://github.com/antevasin-app/plugin-rukovoditel)


## Installation / Setup

Ensure that you do NOT have any browser tabs open to your Rukovodital instance / application.

Download the latest release of the module 

Unzip to your **plugins/antevasin/modules** directory

This will create **plugin/antevasin/modules/template** directory. To change the name of the plugin then you just have rename this directory to the module name of your choice. It is recommended to make the module name a single descriptive word that matches what the module will do or handle like **readme**, **projects**, **store** etc Ensuring it doesn't conflict with any of the existing modules is easy as you can't have two folders with the same name under the modules directory. 

>[!NOTE]
>Any reserved names will be updated here as they are discovered.

Open your Rukovoditel instance in a browser. You will see an output similar to the following showing the files which have been created / updated...

![Screenshot of installation output for the Antevasin Plugin Module Template](https://private-user-images.githubusercontent.com/65867585/346619238-d6083b24-6489-43bf-a3cb-6c89c955333d.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjM1OTE2ODAsIm5iZiI6MTcyMzU5MTM4MCwicGF0aCI6Ii82NTg2NzU4NS8zNDY2MTkyMzgtZDYwODNiMjQtNjQ4OS00M2JmLWEzY2ItNmM4OWM5NTUzMzNkLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA4MTMlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwODEzVDIzMjMwMFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWQzYWE5NjA4OGMxMTBhOTU5MWFlZWY5MTgxYjg0MDFhNzYyNmEyMWM1NWVjNTc0Y2Q0MDMwMTVkMDBjNDM5YzMmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.p-0PFpMjgelOkz5Y03aSZkn3SXPVmCBmhiK2_7gzXsg)

Delete the **plugins/antevasin/modules/{your module name}/setup.php** file

Refresh your Rukovoditel instance in a broswer

You will then find your new module acessible in the Sidebar menu under Antevasin Plugin

![Screenshot of new module accessible under Antevasin Plugin in the sidebar menu](https://private-user-images.githubusercontent.com/65867585/346621229-b6d21f82-75b1-4f8f-9910-e1edbd058c04.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjM1OTE2ODAsIm5iZiI6MTcyMzU5MTM4MCwicGF0aCI6Ii82NTg2NzU4NS8zNDY2MjEyMjktYjZkMjFmODItNzViMS00ZjhmLTk5MTAtZTFlZGJkMDU4YzA0LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA4MTMlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwODEzVDIzMjMwMFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTA4MzQ3YTA4ODJiNWU3YmYxOGZkN2Q4MDY4ZmJiMDdmMzNlZWUxMWUwYTU2NmYyYzE5OTA4MDAyMDk0MGViYTUmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.xLmgmezu_fhVOm4QafSSsFJQnvloNmQdr1P0_M2y0wI)

For help on how to extend your plugin check out the [Antevasin Plugin Wiki](https://github.com/antevasin-app/plugin-rukovoditel) 