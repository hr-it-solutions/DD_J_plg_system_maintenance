# DD_J_plg_system_maintenance (BETA)
is a Joomla! system plugin for maintenance updates. It disables login and hide some input pages to prevent input during the update.

[![GPL Licence](https://badges.frapsoft.com/os/gpl/gpl.png?v=102)](https://opensource.org/licenses/GPL-2.0/)

To hide input pages, just add the string which should be found in url at plugin config page under extensions > plugins > DD Maintenance

# Settings
**Input pages** (Aliases/Strings which should be detect in REQUEST_URI) can be define at plugin under extensions > plugins > DD Maintenance <br>
**Note:** Define only one string for each text input which sould be searched at each url.
The input field has a multiple option, to block multiple urls like cart, register, login etc...

**The Login** function it self is always blocked.

Just do not forget to enable the plugin after your update **;)**

That's all.

# DD_ Namespace
DD_ stands for  **D**idl**d**u e.K. | HR IT-Solutions (Brand recognition)                   <br>
It is a namespace prefix, provided to avoid element name conflicts.

<br>
Author: HR IT-Solutions Valeria Rizak                                                       <br>
Author: HR IT-Solutions Florian Häusler https://www.hr-it-solution.com                      <br>
Copyright: (C) 2011 - 2017 Didldu e.K. | HR IT-Solutions                                    <br>
http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only