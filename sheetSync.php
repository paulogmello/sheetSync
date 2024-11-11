<?php
class sheetSync
{
    private $aplicationName;
    private $authFile;

    public function __construct(string $aplicationName, string $authFile)
    {
        $this->aplicationName = $aplicationName;
        $this->authFile = $authFile;
    }

    public function client(string $accessType, string $scope)
    {
        try {
            $client = new Google_Client();
            $client->setApplicationName($this->aplicationName);
            if ($scope == 'read') {
                $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
            } else if ($scope == 'create') {
                $client->setScopes([Google_Service_Sheets::SPREADSHEETS, Google_Service_Drive::DRIVE]);
            }
            $client->setAuthConfig($this->authFile);
            $client->setAccessType($accessType);
            $service = new Google_Service_Sheets($client);
            return $service;
        } catch (error $err) {
            return $err;
        }
    }

    public function read(string $sheetId, string $sheetPage, string $accessType = "online")
    {
        try {
            $service = $this->client($accessType, 'read');
            $response = $service->spreadsheets_values->get($sheetId, $sheetPage);
            $values = $response->getValues();
            return $values;
        } catch (error $err) {
            echo "Error: " . $err;
        }
    }
}
