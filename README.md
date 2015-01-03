Barebones CMS - Demo/Kiosk Mode plugin
======================================

Transforms Barebones CMS into a safer environment for running it as a public demo.  Installing this extension will always turn developer accounts into designer accounts, which means it can only be manually uninstalled.

This extension is intended to be used in combination with good common sense and automated scripts that are beyond the scope of an introduction.

License
-------

Same as Barebones CMS.  MIT or LGPL (your choice).

Automated Installation
----------------------

To install this plugin, use the built-in Barebones CMS extension installer.

Manual Installation
-------------------

Upload the 'plugins' subdirectory to your Barebones CMS installation.

Manual Uninstall
----------------

Remove the 'demo_mode' subdirectory from your Barebones CMS installation.

Usage
-----

The following tips may prove useful:

  * Create an isolated PHP environment for the "just in case" jailbreak scenario.
  * Install Barebones CMS using the "Less Safe Storage" option.
  * Delete 'install.php'.
  * Delete whatever other files you don't want/need.  For example, the Code widget (widgets/bb_code) is commonly removed.
  * Install whatever extensions you want except for this extension.  Or automate the extension installation later using the appropriate APIs.
  * Create whatever accounts you want.
  * Install the Demo/Kiosk Mode plugin.
  * Manually delete all developer accounts from the 'accounts.php' file.
  * Copy Barebones CMS to a backup location.  Isolate it from the isolated PHP environment.  Set permissions, owner, and group of various files and directories.
  * Write a script that will periodically run from 'cron' to restore a pristine demo from the backup.

Some potentially helpful APIs:

  * Demo mode extensions list:  https://barebonescms.com/extend/api/?action=list
  * Install an extension programmatically:  BB_InstallExtension($id)
