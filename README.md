# CanaryPHPConservation Conservations Manager
Simple file manging for php
# Classes Feature
- Create conservation
- Create message
- Update conservation
- Update message
- Delete conservation
- Delete message
- Get conservations
- Get messages
- Conservation Authenfication
## How to Install
#### Availlable only with Composer :
- Command :
```
composer require canaryphp/canaryphpconservation
```
- composer.json
```json
{
    "require":{
        "canaryphp/canaryphpconservation"
    }
}
```
- After install read :
``CanaryPHP START.md``: [START.md](https://github.com/canaryphp/canaryphp/blob/master/START.md)
### Examples
1. Create folder ``templates``
- Download ``templates`` folder and move to your project directory:
[Download](https://github.com/canaryphp/canaryphpconservation/tree/master/templates)
2. Create file index.php
```php
<?php
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'index.php';
$c = "<a href=\"contacts.php\">Contacts</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content-type="text/html" charset="utf-8">
    <title>Chat with aida</title>
</head>
<body>
<center>
<?=$c?>
```

3. Create contacts.php
```php
<?php
require 'index.php';
$canary = new \CanaryPHPConservation\Canary();
$conservation = $canary->conservation('',new \CanaryPHPConservation\ConservationManager('conservations','messages'));
$res = $conservation->setViewer('3')->setReceiver('9')->setContactsTemplate(__DIR__.DS.'templates'.DS.'Contact.php');
$canary = new \CanaryPHPTools\Canary();
if ($canary->request()->is()->post){
    $res->registerConservation($_POST['title'],$_POST['sub']);
}
echo $res->getConservations();
?>
<form method="POST">
    <input type="text" placeholder="Conservation title"  name="title"><br>
    <input type="text" placeholder="Conservation subject"  value="" name="sub"><br>
    <input type="submit" value="Create"><br>
</form>
</center>
</body>
</html>
```
4. Create msg.php
```php
<?php
require 'index.php';
$canary = new \CanaryPHPConservation\Canary();
$id = $_GET['id'];
$conservation = $canary->conservation($id,new \CanaryPHPConservation\ConservationManager('conservations','messages'));
$res = $conservation->setViewer('3')->setReceiver('9')
                                ->setViewerTEXTMSGTemplate(__DIR__.DS.'templates'.DS.'ViewerTEXTMSG.php')
                                ->setViewerIMGMSGTemplate(__DIR__.DS.'templates'.DS.'ViewerIMGMSG.php')
                                ->setViewerVIDEOMSGTemplate(__DIR__.DS.'templates'.DS.'ViewerVIDMSG.php')
                                ->setViewerAUDIOMSGTemplate(__DIR__.DS.'templates'.DS.'ViewerAUDMSG.php')
                                ->setViewerATTACHMENTMSGTemplate(__DIR__.DS.'templates'.DS.'ViewerATTMSG.php')
                                ->setReceiverTEXTMSGTemplate(__DIR__.DS.'templates'.DS.'ReceiverTEXTMSG.php')
                                ->setReceiverIMGMSGTemplate(__DIR__.DS.'templates'.DS.'ReceiverIMGMSG.php')
                                ->setReceiverVIDEOMSGTemplate(__DIR__.DS.'templates'.DS.'ReceiverVIDMSG.php')
                                ->setReceiverAUDIOMSGTemplate(__DIR__.DS.'templates'.DS.'ReceiverAUDMSG.php')
                                ->setReceiverATTACHMENTMSGTemplate(__DIR__.DS.'templates'.DS.'ReceiverATTMSG.php')
                                ->setNoDATATemplate(__DIR__.DS.'templates'.DS.'NODATA.php')
                                ->setNoMSGTemplate(__DIR__.DS.'templates'.DS.'NOMSG.php');
if ($res->Auth()) {
$canary = new \CanaryPHPTools\Canary();
if ($canary->request()->is()->post){
    $res->registerMessage($_POST['msg'],$_POST['msg_type']);
}
$msgs = $res->getMessages();
}else{
    $msgs = "<center><h1>Authenfication Error</h1></center>";
}
?>
<?=$msgs?>
<form method="POST">
    <input type="text" name="msg"><br>
    <input type="text" value="1" name="msg_type"><br>
    <input type="submit" value="Send"><br>
</form>
</center>
</body>
</html>
```
5. Go to localhost/contacts.php
- Type your Conservation title and click Create
- Click on the conservation
- Write Msg and click Send
# NOTICE
- `vendor` folder and the `vendor/autoload.php` script are generated by composer ,there are not part from CanaryPHPFile