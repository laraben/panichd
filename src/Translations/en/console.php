<?php

return [
	// Command: panichd:wipe-off-tickets
	'wipe-off-tickets'             => 'Panic Help Desk wipe off tickets',
	'wipe-off-no-tickets-message'  => 'There aren\'t any tickets registered. Command will exit',
	'wipe-off-tickets-description' => 'This command is going to erase all tickets in database and all related data, including all comments, attachments and assigned tags.',
	'wipe-off-tickets-start'       => 'Deletion started...',
	
	// Command panichd:wipe-off-lists
	'wipe-off-lists'               => 'Panic Help Desk wipe off lists',
	'wipe-off-lists-tickets-error' => 'This command won\'t execute if there is any ticket in database. Please, wipe off tickets before executing this command.',
	'wipe-off-lists-description'   => 'This command helps you to delete content from desired lists in: Categories, Priorities, Statuses',
	'wipe-off-wich-list-question'  => 'Type any option number or name to choose the list you want to reset. Leave blank to select',
	'wipe-off-list-all'            => 'All',
	'wipe-off-list-categories'     => 'Categories',
	'wipe-off-list-categories-done'=> 'All categories deleted.',
	'wipe-off-list-priorities'     => 'Priorities',
	'wipe-off-list-priorities-done'=> 'All priorities deleted.',
	'wipe-off-list-statuses'       => 'Statuses',
	'wipe-off-list-statuses-done'  => 'All statuses deleted.',
	
	// General usage
	'continue-question'            => 'Do you want to continue?',
	'continue-question-yes'        => 'y',
	'continue-question-no'         => 'n',
	'continue-question-abort'      => 'Abort',
	'process-started'              => 'Process started.',
	'command-aborted'              => 'Command aborted.',
	'done'                         => 'Done!',
];

?>