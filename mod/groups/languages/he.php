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
	        'groups:widget:membership' => 'חברות בקבוצה',
	        'groups:widgets:description' => 'הצג קבוצות בפרופיל',
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
			'groups:nofriends' => "כל חבריך הוזמנו לקבוצה.",
	
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
			'groups:closedgroup' => 'קבוצה זו סגורה. אם ברצונך להצטרף, לחץ על "בקשת חברות".',
	
			/*
			   Group tools
			*/
			'groups:enablepages' => 'הוספת דפי קבוצה',
			'groups:enableforum' => 'הוספת קבוצת דיון לקבוצה',
			'groups:enablefiles' => 'הוספת קבצים לקבוצה',
			'groups:yes' => 'כן',
			'groups:no' => 'לא',
	
			'group:created' => 'נוצר %s עם %d פוסטים',
			'groups:lastupdated' => 'עודכן לאחרונה %s על ידי %s',
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
			'groups:topicmessage' => 'הודעת נושא',
			'groups:topicstatus' => 'סטטוס נושא',
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
			'groups:topiccloseddesc' => 'הנושא סגור להודעות חדשות.',
			'grouptopic:error' => 'לא ניתן ליצור נושא. נסה שוב או צור קשר עם מנהל המערכת.',
	
			'groups:privategroup' => 'הקבוצה פרטית. מבקש חברות.',
			'groups:notitle' => 'יש להוסיף כותרת לקבוצות',
			'groups:cantjoin' => 'לא ניתן להצטרף לקבוצה',
			'groups:cantleave' => 'לא ניתן לעזוב את הקבוצה',
			'groups:addedtogroup' => 'המשתמש נוסף בהצלחה לקבוצה',
			'groups:joinrequestnotmade' => 'לא ניתן להצטרף',
			'groups:joinrequestmade' => 'בקשת הצטרפות נשלחה',
			'groups:joined' => 'הצטרפות בוצעה בהצלחה!',
			'groups:left' => 'עזיבת קבוצה בוצעה בהצלחה',
			'groups:notowner' => 'אינך הבעלים של הקבוצה.',
			'groups:alreadymember' => 'אתה כבר חבר בקבוצה!',
			'groups:userinvited' => 'המשתמש הוזמן.',
			'groups:usernotinvited' => 'לא ניתן להזמין משתמש.',
	
			'groups:invite:subject' => "%s הוזמנת להצטרף ל%s!",
			'groups:invite:body' => "שלום %s,

הוזמנת להצטרף לקבוצה '%s', לחץ למטה לאישור:

%s",

			'groups:welcome:subject' => "ברוך הבא לקבוצת %s!",
			'groups:welcome:body' => "שלום %s!
		
אתה חבר בקבוצת '%s'! לחץ למטה להעלאת פוסטים!

%s",
	
			'groups:request:subject' => "%s ביקש להצטרף ל%s",
			'groups:request:body' => "שלום %s,

%s ביקש להצטרף לקבוצת '%s', לחץ למטה כדי לראות את הפרופיל:

%s

או לחץ למטה לאישור:

%s",
	
			'groups:river:member' => 'חבר כעת ב',
	
			'groups:nowidgets' => 'לא נקבע סמל לקבוצה.',
	
	
			'groups:widgets:members:title' => 'חברי הקבוצה',
			'groups:widgets:members:description' => 'רשימת חברי הקבוצה.',
			'groups:widgets:members:label:displaynum' => 'הצג את חברי הקבוצה.',
			'groups:widgets:members:label:pleaseedit' => 'נא לעדכן סמל.',
	
			'groups:widgets:entities:title' => "Objects in group",
			'groups:widgets:entities:description' => "List the objects saved in this group",
			'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
			'groups:widgets:entities:label:pleaseedit' => 'נא לעדכן סמל.',
		
			'groups:forumtopic:edited' => 'נושא הפורום עודכן בהצלחה.',
	);
					
	add_translation("he",$hebrew);
?>