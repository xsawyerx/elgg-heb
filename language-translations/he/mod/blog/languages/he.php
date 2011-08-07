<?php

	$hebrew = array(
	
		/**
		 * Menu items and titles
		 */
	
			'blog' => "בלוגים",
			'blogs' => "בלוגים",
			'blog:user' => "הבלוג של %s",
			'blog:user:friends' => "הבלוגים של החברים של %s",
			'blog:your' => "הבלוג שלי",
			'blog:posttitle' => "%s's blog: %s",
			'blog:friends' => "הבלוגים של חברי",
			'blog:yourfriends' => "הבלוגים המעודכנים של חבריך",
			'blog:everyone' => "כל הבלוגים באתר",
	
			'blog:read' => "קרא בלוג",
	
			'blog:addpost' => "כתיבה של פוסט חדש",
			'blog:editpost' => "עריכת פוסט",
	
			'blog:text' => "תוכן הבלוג",
	
			'blog:strapline' => "%s",
			
			'item:object:blog' => 'פוסטים בבלוג',
	
			
         /**
	     * Blog river
	     **/
	        
	        //generic terms to use
	        'blog:river:created' => "%s כתב/ה",
	        'blog:river:updated' => "%s התעדכן",
	        'blog:river:posted' => "%s פרסמ/ה",
	        
	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "פוסט חדש בבלוג",
	        'blog:river:update' => "פוסט בבלוג",
	        'blog:river:annotate:create' => "הערה בבלוג",
			
	
		/**
		 * Status messages
		 */
	
			'blog:posted' => "הפוסט פורסם בהצלחה",
			'blog:deleted' => "הפוסט נמחק בהצלחה",
	
		/**
		 * Error messages
		 */
	
			'blog:save:failure' => "Your blog post could not be saved. Please try again.",
			'blog:blank' => "Sorry; you need to fill in both the title and body before you can make a post.",
			'blog:notfound' => "Sorry; we could not find the specified blog post.",
			'blog:notdeleted' => "Sorry; we could not delete this blog post.",
	
	);
					
	add_translation("he",$hebrew);

?>