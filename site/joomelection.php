<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by JoomElectionController
$controller = JControllerLegacy::getInstance('JoomElection');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();