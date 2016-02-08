<?php

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

require_once('./vendor/autoload.php');

mb_language("ja");
mb_internal_encoding("UTF-8");

// -----------
// GoogleClientの作成
// ----------- 
$G_CLIENT_ID = 'XXXXXXXXXXXXXXXXXXXX';
$G_CLIENT_EMAIL = 'XXXXXXXXXXXXXXXXXXXX';
$G_CLIENT_KEY_PATH = 'XXXXXXXXXXXXXXXXXXXX';
$G_CLIENT_KEY_PW = 'XXXXXXXXXXXXXXXXXXXX';

$obj_client_auth = new Google_Client ();
$obj_client_auth->setApplicationName ('XXXXXXXXXXXXXXXXXXXX');
$obj_client_auth->setClientId ($G_CLIENT_ID);
$obj_client_auth->setAssertionCredentials (new Google_Auth_AssertionCredentials(
    $G_CLIENT_EMAIL,
    array('https://spreadsheets.google.com/feeds','https://docs.google.com/feeds'),
    file_get_contents ($G_CLIENT_KEY_PATH),
    $G_CLIENT_KEY_PW
));

$obj_client_auth->getAuth()->refreshTokenWithAssertion();
$obj_token  = json_decode($obj_client_auth->getAccessToken());
$accessToken = $obj_token->access_token;


// -----------
// スプレットシートの取得
// ----------- 
$serviceRequest = new Google\Spreadsheet\DefaultServiceRequest($accessToken);
Google\Spreadsheet\ServiceRequestFactory::setInstance($serviceRequest);

$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
$spreadsheetFeed = $spreadsheetService->getSpreadsheets();

//タスクを管理しているワークシート取得
$spreadsheet = $spreadsheetService->getSpreadsheetById('XXXXXXXXXXXXXXXXXXXX');
$worksheetFeed = $spreadsheet->getWorksheets();
