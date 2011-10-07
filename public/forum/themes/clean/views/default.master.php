<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
	<head>
		<?php $this->RenderAsset('Head'); ?>
	</head>
	<body id="<?php echo $BodyIdentifier; ?>" class="<?php echo $this->CssClass; ?>">
		<div id="Wrapper">
			<div id="Main">
				<div id="ContentHolder">
					<div id="Content">
						<?php $this->RenderAsset('Content'); ?>
					</div>
				</div>
				<div id="PanelHolder">
					<div id="Panel"><?php $this->RenderAsset('Panel'); ?></div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
			
			<div id="Header">
				<h1><a class="Title" href="<?php echo Url('/'); ?>"><span><?php echo Gdn_Theme::Logo(); ?></span></a></h1>
			</div>
			
			<div id="Nav">
				<?php
				  $Session = Gdn::Session();
					if ($this->Menu) {
						$this->Menu->AddLink('Dashboard', T('Dashboard'), '/dashboard/settings', array('Garden.Settings.Manage'));
						// $this->Menu->AddLink('Dashboard', T('Users'), '/user/browse', array('Garden.Users.Add', 'Garden.Users.Edit', 'Garden.Users.Delete'));
						//$this->Menu->AddLink('Activity', T('Activity'), '/activity');
					 $Authenticator = Gdn::Authenticator();
						if ($Session->IsValid()) {
							$Name = $Session->User->Name;
							$CountNotifications = $Session->User->CountNotifications;
							if (is_numeric($CountNotifications) && $CountNotifications > 0)
								$Name .= ' <span>'.$CountNotifications.'</span>';
								
							$this->Menu->AddLink('User', $Name, '/profile/{UserID}/{Username}', array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
							$this->Menu->AddLink('SignOut', T('Sign Out'), $Authenticator->SignOutUrl(), FALSE, array('class' => 'NonTab SignOut'));
						} else {
							$Attribs = array();
							if (C('Garden.SignIn.Popup') && strpos(Gdn::Request()->Url(), 'entry') === FALSE)
								$Attribs['class'] = 'SignInPopup';
								
							$this->Menu->AddLink('Entry', T('Sign In'), $Authenticator->SignInUrl($this->SelfUrl), FALSE, array('class' => 'NonTab'), $Attribs);
						}
						echo $this->Menu->ToString();
					}
				?>
				<div id="Search">
					<?php
						$Form = Gdn::Factory('Form');
						$Form->InputPrefix = '';
						echo 
							$Form->Open(array('action' => Url('/search'), 'method' => 'get')),
							$Form->TextBox('Search'),
							$Form->Button('Search', array('Name' => '')),
							$Form->Close();
					?>
				</div>
			</div>
			
			<div id="Footer">
				<ul>
					<?php
						$this->RenderAsset('Foot');
						echo Wrap(Anchor(T('Powered by Vanilla'), C('Garden.VanillaUrl')), 'li');
					?>
				</ul>
			</div>
		</div>

		<?php $this->FireEvent('AfterBody'); ?>
	</body>
</html>
