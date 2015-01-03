<?php
	// Barebones CMS demo/kiosk mode plugin.
	// (C) 2015 CubicleSoft.  All Rights Reserved.

	if (!defined("BB_FILE"))  exit();

	// Disable developer accounts by changing them temporarily to designer.
	function DemoMode_ChangeAccountType()
	{
		global $bb_account;

		if ($bb_account["type"] == "dev")  $bb_account["type"] = "design";
	}

	BB_AddPluginAction("account_valid", "DemoMode_ChangeAccountType");

	// Disable profile editing attempts.
	function DemoMode_DisableProfileEdits()
	{
		BB_PropertyFormError("The ability to save a profile has been disabled because Barebones CMS is running in demo mode.");
	}

	BB_AddPluginAction("pre_bb_main_edit_site_opt_profile_submit", "DemoMode_DisableProfileEdits");

	// Outputs a little extra information.
	function DemoMode_DisplayInfo()
	{
		echo BB_Translate("<br />This is a demo of Barebones CMS.  Some features are disabled.");
	}

	BB_AddPluginAction("post_bb_main_edit_mainviewinfo", "DemoMode_DisplayInfo");
?>