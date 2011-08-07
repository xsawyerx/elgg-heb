<?php

	$hebrew = array(

		/**
		 * Menu items and titles
		 */
	
			'messages' => "הודעות",
            'messages:back' => "חזרה להודעות",
			'messages:user' => "דואר נכנס",
			'messages:sentMessages' => "הודעות שנשלחו",
			'messages:posttitle' => "%s's messages: %s",
			'messages:inbox' => "דואר נכנס",
			'messages:send' => "שליחת הודעה",
			'messages:sent' => "הודעות שנשלחו",
			'messages:message' => "הודעה",
			'messages:title' => "כותרת",
			'messages:to' => "נמען",
            'messages:from' => "מאת",
			'messages:fly' => "שליחה",
			'messages:replying' => "Message replying to",
			'messages:inbox' => "דואר נכנס",
			'messages:sendmessage' => "שליחת הודעה",
			'messages:compose' => "שלח הודעה",
			'messages:sentmessages' => "הודעות שנשלחו",
			'messages:recent' => "הודעות אחרונות",
            'messages:original' => "הודעה מקורית",
            'messages:yours' => "ההודעה שלך",
            'messages:answer' => "מענה",
			'messages:toggle' => 'שנה הכל',
			'messages:markread' => 'סמן שקראתי',
		
			
			'item:object:messages' => 'הודעות',
	
		/**
		 * Status messages
		 */
	
        	'messages:posted' => "ההודעה נשלחה",
			'messages:deleted' => "ההודעה נמחקה",
			'messages:markedread' => "ההודעות סומנו ככאלו שנקראו על ידך.",
		
	
		/**
		 * Email messages
		 */
	
			'messages:email:subject' => 'יש לך הודעה חדשה!',
			'messages:email:body' => "יש לך הודעה חדשה במערכת מ: %s. תוכן ההודעה הוא:

			
%s


כדי לראות את ההודעה, הקלק על:

	%s

בכדי לשלוח הודעה ל %s הקלק כאן:

	%s

בכדי לענות להודעה זו יש להכנס למערכת.",
	
		/**
		 * Error messages
		 */
	
			'messages:blank' => "Sorry; you need to actually put something in the message body before we can save it.",
			'messages:notfound' => "Sorry; we could not find the specified message.",
			'messages:notdeleted' => "Sorry; we could not delete this message.",
			'messages:nopermission' => "You do not have permission to delete that message.",
			'messages:nomessages' => "There are no messages to display.",
			'messages:user:nonexist' => "We could not find the recipient in the user database.",
	
	);
					
	add_translation("he",$hebrew);

?>