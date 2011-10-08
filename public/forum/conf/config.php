<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1a1';

// Database
$Configuration['Database']['Name'] = 'josriv891_acho';
$Configuration['Database']['Host'] = 'localhost';
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
$Configuration['EnabledPlugins']['AllViewed'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;
$Configuration['EnabledPlugins']['Facebook'] = TRUE;
$Configuration['EnabledPlugins']['Flagging'] = TRUE;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = TRUE;
$Configuration['EnabledPlugins']['Minify'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['Quotes'] = TRUE;
$Configuration['EnabledPlugins']['OpenID'] = TRUE;
$Configuration['EnabledPlugins']['GoogleSignIn'] = TRUE;
$Configuration['EnabledPlugins']['Tagging'] = TRUE;
$Configuration['EnabledPlugins']['Twitter'] = TRUE;
$Configuration['EnabledPlugins']['UsefulFunctions'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;
$Configuration['EnabledPlugins']['cleditor'] = TRUE;
$Configuration['EnabledPlugins']['SplitMerge'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'AchoRoller';
$Configuration['Garden']['Cookie']['Salt'] = 'XOPR3QE8P2';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = FALSE;
$Configuration['Garden']['Registration']['DefaultRoles'] = 'a:1:{i:0;s:1:"8";}';
$Configuration['Garden']['Registration']['ApplicantRoleID'] = '4';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '';
$Configuration['Garden']['Registration']['Method'] = 'Approval';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LePxcgSAAAAANE3bEzdMluw8zCMNV9_kIJbbc7L';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LePxcgSAAAAAFmtn7Rz32OniVgZTXDzfYDxYFHw';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles'] = 'a:4:{i:8;s:2:"-1";i:16;s:2:"-1";i:32;s:1:"0";i:33;s:2:"-1";}';
$Configuration['Garden']['Email']['SupportName'] = 'AchoRoller';
$Configuration['Garden']['Email']['SupportAddress'] = 'forum@achoroller.com';
$Configuration['Garden']['Email']['UseSmtp'] = FALSE;
$Configuration['Garden']['Email']['SmtpHost'] = '';
$Configuration['Garden']['Email']['SmtpUser'] = '';
$Configuration['Garden']['Email']['SmtpPassword'] = '';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = '';
$Configuration['Garden']['Version'] = '2.1a1';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Locale'] = 'es-ES';
$Configuration['Garden']['Theme'] = 'achoroller';
$Configuration['Garden']['EditContentTimeout'] = '86400';
$Configuration['Garden']['InstallationID'] = 'F4A7-9704EC07-33961FC7';
$Configuration['Garden']['InstallationSecret'] = '912aa1ee4124c0e73ffee5796cb60fa6bb5fe4ec';
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['Html']['SafeStyles'] = FALSE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['Facebook']['ApplicationID'] = '240473369336908';
$Configuration['Plugins']['Facebook']['Secret'] = 'e8a17377a9f309d37f2189280f5bb39e';
$Configuration['Plugins']['Twitter']['ConsumerKey'] = 'vNsuo9rfN13nW8H2wb0fhQ';
$Configuration['Plugins']['Twitter']['Secret'] = 'vjHmPILtVbWcIcfbKWsqEgAR9I7DqQBG1l9nZNhuWD4';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1a1';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Comments']['AutoRefresh'] = '0';
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = FALSE;
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = TRUE;

// Last edited by sevir (83.49.55.194) 2011-10-07 16:50:37