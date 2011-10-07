<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
  {asset name='Head'}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
   <div id="Frame">
   <div id="topbar">
   	<div class="topbar_center">
		<h1><a href="{link path="/"}">{logo}</a></h1><span id="subtitle">(puntico)COM</span>
		<div id="top_search">{searchbox}</div>
		<div id="right_bar">
		{if $User.SignedIn}
             <a href="{link path="messages/inbox"}" id="msg_link" title="Mensajes">
             {if $User.CountUnreadConversations} <span>{$User.CountUnreadConversations}</span>{/if}</a>
             <a href="{link path="profile"}" title="{$User.Name}" id="user_link">
             {if $User.CountNotifications} <span>{$User.CountNotifications}</span>{/if}</a>
        {/if}
		{link path="signinout"}
		</div>
	</div>
   </div>
   <div id="container-wrap">
      <div id="container">
      <div id="Head">


				<!--Load custom logo from banner options-->

                  <!-- Start menu -->
                 <div class="Menu">
                  <ul id="Menu">
                    {if CheckPermission('Garden.Settings.Manage')}
                       <li><a href="{link path="dashboard/settings"}">Dashboard</a></li>
                    {/if}
                    <li><a href="{link path="discussions"}">Temas</a></li>
                    <li><a href="{link path="activity"}">Actividad</a></li>
                    {custom_menu}

                  </ul>

                  <!-- End menu -->

         </div>
      </div>

      <div id="Body">

         <!-- Start body content: helper menu and discussion list -->



         <div id="Content">{asset name="Content"}</div>

         <!-- End body content -->

         <!-- Start panel modules: search, categories, and bookmarked discussions -->

         <div id="Panel">

		 {asset name="Panel"}

         </div>

         <!-- End panel -->


      </div>

      <!-- Start foot -->

      <div id="Foot">
			<div><!--<div class="vanilla-ico"></div> Powered by <a href="http://vanillaforums.org"><span>Vanilla</span></a>--></div>
    {asset name="Foot"}
		</div>

      <!-- End foot -->
        </div>
        </div>
   </div>
</body>
</html>
