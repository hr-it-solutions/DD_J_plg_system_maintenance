<?php
/**
 * @package    DD_Maintenance
 *
 * @author     HR IT-Solutions Valeria Rizak <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2017 - 2017 Didldu e.K. | HR IT-Solutions
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');
jimport('joomla.access.access');

/**
 * plgSystemDD_Maintenance
 */
class plgSystemDD_Maintenance extends JPlugin
{
	protected $app;

	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * onAfterRender
	 */
	public function onAfterRender()
	{
		// Front only
		if ($this->app instanceof JApplicationSite)
		{
			// Get urlstring field object
			$urlStrings = $this->params->get('urlstring');

			if($urlStrings){
				foreach ($urlStrings as $urlString)
				{
					// Check if urlstring is in URL
					if (strpos($_SERVER['REQUEST_URI'], $urlString->urlstring) !== false)
					{
						$this->redirectMessage();
					}
				}
			}
		}
	}

	/**
	 * onUserLogin
	 * @param       $user
	 * @param array $options
	 */
	public function onUserLogin($user, $options = array())
	{
		// Front only
		if ($this->app instanceof JApplicationSite)
		{
			$this->redirectMessage();
		}
	}

	/**
	 * redirectMessage
	 */
	private function redirectMessage()
	{
		$message = JText::_('PLG_SYSTEM_DD_MAINTENANCE_UPDATE_MESSAGE');
		$this->app->redirect(JURI::base(), $message);
	}

}
