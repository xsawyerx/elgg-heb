<?php
	/**
	 * Elgg pages plugin hebrew language pack
	 * 
	 * @package ElggPages Hebrew
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Guy Nirpaz
	 * @copyright Guy Nirpaz 2009
	 * @link http://www.k-hilot.net
	 */

	$hebrew = array(
	
		/**
		 * Menu items and titles
		 */
			
			'pages' => "דפים",
			'pages:yours' => "הדפים שלי",
			'pages:user' => "דפי תוכן",
			'pages:group' => "הדפים של %s",
			'pages:all' => "כל הדפים באתר",
			'pages:new' => "דף חדש",
			'pages:groupprofile' => "דפי הקבוצה",
			'pages:edit' => "עריכת דף זה",
			'pages:delete' => "מחיקת דף זה",
			'pages:history' => "היסטורית דף",
			'pages:view' => "צפייה בדף",
			'pages:welcome' => "עריכת הודעת כניסה",
			'pages:welcomeerror' => "בעיה ביצירת הודעת כניסה",
			'pages:welcomeposted' => "הודעת הכניסה נשמרה",
			'pages:navigation' => "מעבר בין דפים",
	
			'item:object:page_top' => 'דפים ברמה ראשית',
			'item:object:page' => 'דפים',
			'item:object:pages_welcome' => 'Pages welcome blocks',
	
	
		/**
		 * Form fields
		 */
	
			'pages:title' => 'כותרת',
			'pages:description' => 'תוכן הדף',
			'pages:tags' => 'תגים',	
			'pages:access_id' => 'הרשאות',
			'pages:write_access_id' => 'הרשאות כתיבה',
		
		/**
		 * Status and error messages
		 */
			'pages:noaccess' => 'אין גישה לדף',
			'pages:cantedit' => 'אין לך הרשאות לערוך דף זה',
			'pages:saved' => 'דפים נשמרו',
			'pages:notsaved' => 'לא ניתן לשמור דף זה',
			'pages:notitle' => 'עליך להגדיר כותרת לדף',
			'pages:delete:success' => 'הדף נמחק בהצלחה',
			'pages:delete:failure' => 'נכשלה פעולה מחיקת הדף',
	
		/**
		 * Page
		 */
			'pages:strapline' => 'עודכן %s בידי %s',
	
		/**
		 * History
		 */
			'pages:revision' => 'גירסה נוצרה %s בידי %s',
			
		/**
		 * Wdiget
		 **/
		 
		    'pages:num' => 'כמות דפים לצפייה',
	
		/**
		 * Submenu items
		 */
			'pages:label:view' => "צפייה בדף",
			'pages:label:edit' => "עריכת דף",
			'pages:label:history' => "היסטוריה של דף",
	
		/**
		 * Sidebar items
		 */
			'pages:sidebar:this' => "דף זה",
			'pages:sidebar:children' => "דפי משנה",
			'pages:sidebar:parent' => "דף אב",
	
			'pages:newchild' => "יצירת דף משנה",
			'pages:backtoparent' => "%s בחזרה ל",
	);
					
	add_translation("he",$hebrew);
?>