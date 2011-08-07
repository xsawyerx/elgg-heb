<?php

	$hebrew = array(
	
		/**
		 * Menu items and titles
		 */
	
			'thewire' => "מסרונים",
			'thewire:user' => "המסרונים של %s",
			'thewire:posttitle' => "%s's notes on the wire: %s",
			'thewire:everyone' => "כל המסרונים",
	
			'thewire:read' => "Wire posts",
			
			'thewire:strapline' => "%s",
	
			'thewire:add' => "פרסום מסרון חדש",
		    'thewire:text' => "מסרון ברשת",
			'thewire:reply' => "תגובה",
			'thewire:via' => "via",
			'thewire:wired' => "נשלח ברשת",
			'thewire:charleft' => "אותיות נותרו",
			'item:object:thewire' => "מסרונים קצרים",
			'thewire:notedeleted' => "note deleted",
			'thewire:doing' => "מה אתם עושים עכשיו? רשמו מסרון שכולם ידעו!",
			'thewire:newpost' => 'מסרון חדש',
			'thewire:addpost' => 'מסרון חדש',

	
        /**
	     * The wire river
	     **/
	        
	        //generic terms to use
	        'thewire:river:created' => "מסר לכולם %s",
	        
	        //these get inserted into the river links to take the user to the entity
	        'thewire:river:create' => "ברשת",
	        
	    /**
	     * Wire widget
	     **/
	     
	        'thewire:sitedesc' => 'This widget shows the latest site notes posted to the wire',
	        'thewire:yourdesc' => 'This widget shows your latest notes posted to the wire',
	        'thewire:friendsdesc' => 'This widget will show the latest from your friends on the wire',
	        'thewire:friends' => 'Your friends on the wire',
	        'thewire:num' => 'Number of items to display',
	        
	        
	
		/**
		 * Status messages
		 */
	
			'thewire:posted' => "Your message was successfully posted to the wire.",
			'thewire:deleted' => "Your note was successfully deleted.",
	
		/**
		 * Error messages
		 */
	
			'thewire:blank' => "Sorry; you need to actually put something in the textbox before we can save it.",
			'thewire:notfound' => "Sorry; we could not find the specified note.",
			'thewire:notdeleted' => "Sorry; we could not delete this shout.",
	
	
		/**
		 * Settings
		 */
			'thewire:smsnumber' => "Your SMS number if different from your mobile number (mobile number must be set to public for the wire to be able to use it). All phone numbers must be in international format.",
			'thewire:channelsms' => "The number to send SMS messages to is <b>%s</b>",
			
	);
					
	add_translation("he",$hebrew);

?>