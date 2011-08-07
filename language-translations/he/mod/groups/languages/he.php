<?php
	/**
	 * Elgg groups plugin language pack
	 * 
	 * @package ElggGroups
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	$hebrew = array(
	
		/**
		 * Menu items and titles
		 */
			
			'groups' => "קבוצות",
			'groups:owned' => "קבוצות בבעלותי",
			'groups:yours' => "הקבוצות שלי",
			'groups:user' => "%s הקבוצות של",
			'groups:all' => "כל הקבוצות באתר",
			'groups:new' => "יצירת קבוצה חדשה",
			'groups:edit' => "עריכת קבוצה",
	
			'groups:icon' => 'סמל הקבוצה',
			'groups:name' => 'שם הקבוצה',
			'groups:username' => 'שם קצר באנגלית',
			'groups:description' => 'תיאור',
			'groups:briefdescription' => 'תיאור קצר',
			'groups:interests' => 'נושאים',
			'groups:website' => 'אתר אינטרנט',
			'groups:members' => 'חברים בקבוצה',
			'groups:membership' => "חברות",
			'groups:access' => "הרשאות גישה",
			'groups:owner' => "בעלים",
	        'groups:widget:num_display' => 'מספר קבוצות להצגה',
	        'groups:widget:membership' => 'Group membership',
	        'groups:widgets:description' => 'Display the groups you are a member of on your profile',
			'groups:noaccess' => 'אין גישה לקבוצה',
			'groups:cantedit' => 'אין בסמכותך לערוך קבוצה זו',
			'groups:saved' => 'קבוצה עודכנה',
			'groups:featured' => 'קבוצות מודגשות',
			'groups:makeunfeatured' => 'בטל הדגשה',
			'groups:makefeatured' => 'הדגש',
			'groups:featuredon' => 'הפכת קבוצה זו למודגשת.',
			'groups:unfeature' => 'ביטלת הדגשה של קבוצה זו.',	
			'groups:joinrequest' => 'בקשת הצטרפות',
			'groups:join' => 'הצטרפות',
			'groups:leave' => 'עזיבת הקבוצה',
			'groups:invite' => 'הזמנת חברים',
			'groups:inviteto' => "הזמנת חברים ל%s",
			'groups:nofriends' => "You have no friends left who have not been invited to this group.",
	
			'groups:group' => "קבוצה",
			
			'item:object:groupforumtopic' => "נושאים לדיון",
	
			'groups:count' => "groups created",
			'groups:open' => "קבוצה פתוחה",
			'groups:closed' => "קבוצה סגורה",
			'groups:member' => "חברים",
			'groups:searchtag' => "חיפוש קבוצה לפי תג",
	
			
			/*
			 * Access
			 */
			'groups:access:private' => 'סגורה - חברות לפי הזמנה בלבד',
			'groups:access:public' => 'פתוחה - כל אחד יכול להצטרף',
			'groups:closedgroup' => 'This group has a closed membership. To ask to be added, click the "request membership" menu link.',
	
			/*
			   Group tools
			*/
			'groups:enablepages' => 'הוספת דפי קבוצה',
			'groups:enableforum' => 'הוספת קבוצת דיון לקבוצה',
			'groups:enablefiles' => 'הוספת קבצים לקבוצה',
			'groups:yes' => 'כן',
			'groups:no' => 'לא',
	
			'group:created' => 'Created %s with %d posts',
			'groups:lastupdated' => 'Last updated %s by %s',
			'groups:pages' => 'דפי קבוצה',
			'groups:files' => 'קבצי קבוצה',
	
			/*
			  Group forum strings
			*/
			
			'group:replies' => 'תגובות',
			'groups:forum' => 'דיונים בקבוצה',
			'groups:addtopic' => 'הוסף נושא לדיון',
			'groups:forumlatest' => 'עדכונים אחרונים',
			'groups:latestdiscussion' => 'דיונים אחרונים',
			'groups:newest' => 'חדשות',
			'groups:popular' => 'פופולריות',	
			'groupspost:success' => 'הערתך נרשמה',
			'groups:alldiscussion' => 'דיונים אחרונים',
			'groups:edittopic' => 'עריכת נושא',
			'groups:topicmessage' => 'Topic message',
			'groups:topicstatus' => 'Topic status',
			'groups:reply' => 'הוסף הערה',
			'groups:topic' => 'נושא',
			'groups:posts' => 'תגובות',
			'groups:lastperson' => 'מגיב אחרון',
			'groups:when' => 'תאריך',
			'grouptopic:notcreated' => '.אין נושאים לדיון',
			'groups:topicopen' => 'פתיחה',
			'groups:topicclosed' => 'סגירה',
			'groups:topicresolved' => 'Resolved',
			'grouptopic:created' => 'נוצר נושא לדיון חדש',
			'groupstopic:deleted' => 'נושא לדיון נמחק',
			'groups:topicsticky' => 'קבוע',
			'groups:topicisclosed' => 'נושא לדיון זה סגור.',
			'groups:topiccloseddesc' => 'This topic has now been closed and is not accepting new comments.',
			'grouptopic:error' => 'Your group topic could not be created. Please try again or contact a system administrator.',
	
			'groups:privategroup' => 'This group is private, requesting membership.',
			'groups:notitle' => 'Groups must have a title',
			'groups:cantjoin' => 'Can not join group',
			'groups:cantleave' => 'Could not leave group',
			'groups:addedtogroup' => 'Successfully added the user to the group',
			'groups:joinrequestnotmade' => 'Join request could not be made',
			'groups:joinrequestmade' => 'Request to join group successfully made',
			'groups:joined' => 'Successfully joined group!',
			'groups:left' => 'Successfully left group',
			'groups:notowner' => 'Sorry, you are not the owner of this group.',
			'groups:alreadymember' => 'You are already a member of this group!',
			'groups:userinvited' => 'User has been invited.',
			'groups:usernotinvited' => 'User could not be invited.',
	
			'groups:invite:subject' => "%s you have been invited to join %s!",
			'groups:invite:body' => "Hi %s,

You have been invited to join the '%s' group, click below to confirm:

%s",

			'groups:welcome:subject' => "Welcome to the %s group!",
			'groups:welcome:body' => "Hi %s!
		
You are now a member of the '%s' group! Click below to begin posting!

%s",
	
			'groups:request:subject' => "%s has requested to join %s",
			'groups:request:body' => "Hi %s,

%s has requested to join the '%s' group, click below to view their profile:

%s

or click below to confirm request:

%s",
	
			'groups:river:member' => 'is now a member of',
	
			'groups:nowidgets' => 'No widgets have been defined for this group.',
	
	
			'groups:widgets:members:title' => 'Group members',
			'groups:widgets:members:description' => 'List the members of a group.',
			'groups:widgets:members:label:displaynum' => 'List the members of a group.',
			'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',
	
			'groups:widgets:entities:title' => "Objects in group",
			'groups:widgets:entities:description' => "List the objects saved in this group",
			'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
			'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',
		
			'groups:forumtopic:edited' => 'Forum topic successfully edited.',
	);
					
	add_translation("he",$hebrew);
?>