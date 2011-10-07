<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.0.17.10';

// Database
$Configuration['Database']['Name'] = 'josriv891_acho';
$Configuration['Database']['Host'] = 'mysql14.freehostia.com';
$Configuration['Database']['User'] = 'josriv891_acho';
$Configuration['Database']['Password'] = 'achoroller1';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['spanish'] = 'es-ES';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['cleditor'] = 'cleditor';
$Configuration['EnabledPlugins']['Emotify'] = 'Emotify';
$Configuration['EnabledPlugins']['Flagging'] = 'Flagging';
$Configuration['EnabledPlugins']['Facebook'] = 'Facebook';
$Configuration['EnabledPlugins']['Gravatar'] = 'Gravatar';
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = 'VanillaInThisDiscussion';
$Configuration['EnabledPlugins']['AllViewed'] = 'AllViewed';
$Configuration['EnabledPlugins']['Minify'] = 'Minify';
$Configuration['EnabledPlugins']['OpenID'] = 'OpenID';
$Configuration['EnabledPlugins']['Tagging'] = 'Tagging';
$Configuration['EnabledPlugins']['Twitter'] = 'Twitter';
$Configuration['EnabledPlugins']['VanillaStats'] = 'VanillaStats';
$Configuration['EnabledPlugins']['GoogleSignIn'] = 'GoogleSignIn';
$Configuration['EnabledPlugins']['embedvanilla'] = 'embedvanilla';

// Garden
$Configuration['Garden']['Title'] = 'AchoRoller';
$Configuration['Garden']['Cookie']['Salt'] = 'KVEP6A2T6D';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Version'] = '2.0.17.10';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
#$Configuration['Garden']['Errors']['MasterView'] = 'error.master.php';
$Configuration['Garden']['Registering'] = 1317726372;
$Configuration['Garden']['Theme'] = 'achoroller';
$Configuration['Garden']['Email']['SupportName'] = 'AchoRoller Forum';
$Configuration['Garden']['Email']['SupportAddress'] = 'forum@achoroller.com';
$Configuration['Garden']['Email']['UseSmtp'] = FALSE;
$Configuration['Garden']['Email']['SmtpHost'] = '';
$Configuration['Garden']['Email']['SmtpUser'] = '';
$Configuration['Garden']['Email']['SmtpPassword'] = '';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = '';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LePxcgSAAAAAFmtn7Rz32OniVgZTXDzfYDxYFHw';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LePxcgSAAAAANE3bEzdMluw8zCMNV9_kIJbbc7L';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles'] = 'a:3:{i:8;s:1:"0";i:32;s:1:"0";i:16;s:1:"0";}';
$Configuration['Garden']['Locale'] = 'es-ES';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['AllViewed']['Enabled'] = TRUE;
$Configuration['Plugins']['Facebook']['ApplicationID'] = '240473369336908';
$Configuration['Plugins']['Facebook']['Secret'] = 'e8a17377a9f309d37f2189280f5bb39e';
$Configuration['Plugins']['OpenID']['Enabled'] = TRUE;
$Configuration['Plugins']['Twitter']['ConsumerKey'] = 'vNsuo9rfN13nW8H2wb0fhQ';
$Configuration['Plugins']['Twitter']['Secret'] = 'vjHmPILtVbWcIcfbKWsqEgAR9I7DqQBG1l9nZNhuWD4';
$Configuration['Plugins']['GoogleSignIn']['Enabled'] = TRUE;

// Routes
$Configuration['Routes']['DefaultController'] = 'a:2:{i:0;s:11:"discussions";i:1;s:8:"Internal";}';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.0.17.10';

// Last edited by sevir (84.124.50.22)2011-10-04 07:06:26