<?php

	$hebrew = array(

		/**
		 * Sites
		 */
	
			'item:site' => 'אתרים',
	
		/**
		 * Sessions
		 */
			
			'login' => "כניסה",
			'loginok' => "נכנסת למערכת.",
			'loginerror' => "We couldn't log you in. This may be because you haven't validated your account yet, or the details you supplied were incorrect. Make sure your details are correct and please try again.",
	
			'logout' => "יציאה",
			'logoutok' => "התקנת בהצלחה.",
			'logouterror' => "כניסה נכשלה, אנא נסו שוב.",
	
		/**
		 * Errors
		 */
			'exception:title' => "ברוכים הבאים.",
	
			'InstallationException:CantCreateSite' => "Unable to create a default ElggSite with credentials Name:%s, Url: %s",
		
			'actionundefined' => "The requested action (%s) was not defined in the system.",
			'actionloggedout' => "סליחה, פעולה זו מותרת למשתמשים רשומים בלבד.",
	
			'notfound' => "The requested resource could not be found, or you do not have access to it.",
			
			'SecurityException:Codeblock' => "Denied access to execute privileged code block",
			'DatabaseException:WrongCredentials' => "Elgg couldn't connect to the database using the given credentials %s@%s (pw: %s).",
			'DatabaseException:NoConnect' => "Elgg couldn't select the database '%s', please check that the database is created and you have access to it.",
			'SecurityException:FunctionDenied' => "Access to privileged function '%s' is denied.",
			'DatabaseException:DBSetupIssues' => "There were a number of issues: ",
			'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",
			
			'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
			'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
			'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",
			
			'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",
			
			'PluginException:MisconfiguredPlugin' => "%s is a misconfigured plugin.",
			
			'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",
			
			'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",
			
			'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",
	
			'IOException:UnableToSaveNew' => "Unable to save new %s",
			
			'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
			'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",
			
			'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
			'IOException:NotDirectory' => "%s is not a directory.",
			
			'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
			'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
			'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",
			
			'ClassException:ClassnameNotClass' => "%s is not a %s.",
			'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
			'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",

			'ImportException:ImportFailed' => "Could not import element %d",
			'ImportException:ProblemSaving' => "There was a problem saving %s",
			'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",
			
			'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
			'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",
			
			'ExportException:NoSuchEntity' => "No such entity GUID:%d", 
			
			'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
			'ImportException:NotAllImported' => "Not all elements were imported.",
			
			'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
			'InvalidParameterException:MissingOwner' => "All files must have an owner!",
			'IOException:CouldNotMake' => "Could not make %s",
			'IOException:MissingFileName' => "You must specify a name before opening a file.",
			'ClassNotFoundException:NotFoundNotSavedWithFile' => "Filestore not found or class not saved with file!",
			'NotificationException:NoNotificationMethod' => "No notification method specified.",
			'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
			'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
			'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
			'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",
			
			'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
			'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
			'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
			'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
			'DatabaseException:NoACL' => "No access control was provided on query",
			
			'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",
			
			'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
			'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
			'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
			'InvalidParameterException:NoDataFound' => "Could not find any data.",
			'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
			'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
			'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",
			
			'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
			'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
			'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.", 
			
			'ConfigurationException:NoSiteID' => "No site ID has been specified.",
			'InvalidParameterException:UnrecognisedMethod' => "Unrecognised call method '%s'",
			'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
			'APIException:ParameterNotArray' => "%s does not appear to be an array.",
			'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
			'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
			'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
			'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
			'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
			'CallException:InvalidCallMethod' => "%s must be called using '%s'",
			'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
			'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
			'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
			'APIException:NotGetOrPost' => "Request method must be GET or POST",
			'APIException:MissingAPIKey' => "Missing X-Elgg-apikey HTTP header",
			'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
			'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
			'APIException:MissingTime' => "Missing X-Elgg-time header",
			'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
			'APIException:NoQueryString' => "No data on the query string",
			'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
			'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
			'APIException:MissingContentType' => "Missing content type for post data",
			'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
			'SecurityException:DupePacket' => "Packet signature already seen.",
			'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
			'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",
	
			'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
			'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
			'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",
	
			'PluginException:NoPluginName' => "The plugin name could not be found",
	
			'ConfigurationException:BadDatabaseVersion' => "The database backend you have installed doesn't meet the basic requirements to run Elgg. Please consult your documentation.",
			'ConfigurationException:BadPHPVersion' => "You need at least PHP version 5.2 to run Elgg.",
			'configurationwarning:phpversion' => "Elgg requires at least PHP version 5.2, you can install it on 5.1.6 but some features may not work. Use at your own risk.",
	
	
			'InstallationException:DatarootNotWritable' => "Your data directory %s is not writable.",
			'InstallationException:DatarootUnderPath' => "Your data directory %s must be outside of your install path.",
			'InstallationException:DatarootBlank' => "You have not specified a data directory.",
	
			'SecurityException:authenticationfailed' => "User could not be authenticated",
	
			'CronException:unknownperiod' => '%s is not a recognised period.',
	
			'SecurityException:deletedisablecurrentsite' => 'You can not delete or disable the site you are currently viewing!',
	
			'memcache:notinstalled' => 'PHP memcache module not installed, you must install php5-memcache',
			'memcache:noservers' => 'No memcache servers defined, please populate the $CONFIG->memcache_servers variable',
			'memcache:versiontoolow' => 'Memcache needs at least version %s to run, you are running %s',
			'memcache:noaddserver' => 'Multiple server support disabled, you may need to upgrade your PECL memcache library',
		/**
		 * API
		 */
			'system.api.list' => "List all available API calls on the system.",
			'auth.gettoken' => "This API call lets a user log in, returning an authentication token which can be used in leu of a username and password for authenticating further calls.",
	
		/**
		 * User details
		 */

			'name' => "שם לתצוגה",
			'email' => "כתובת דואר אלקטרוני",
			'username' => "שם משתמש",
			'password' => "סיסמא",
			'passwordagain' => "סיסמא - פעם נוספת",
			'admin_option' => "הפוך משתמש זה למנהל מערכת",
	
		/**
		 * Access
		 */
	
			'ACCESS_PRIVATE' => "לי בלבד",
			'ACCESS_LOGGED_IN' => "למשתמשי האתר",
			'ACCESS_PUBLIC' => "לכולם",
			'PRIVATE' => "לי בלבד",
			'LOGGED_IN' => "למשתמשי האתר",
			'PUBLIC' => "לכולם",
			'access' => "למי להראות",
	
		/**
		 * Dashboard and widgets
		 */
	
			'dashboard' => "עמוד ראשי",
            'dashboard:configure' => "עריכת עמוד",
			'dashboard:nowidgets' => "Your dashboard is your gateway into the site. Click 'Edit page' to add widgets to keep track of content and your life within the system.",

			'widgets:add' => 'הוסף רכיבים לעמוד',
			'widgets:add:description' => "Choose the features you want to add to your page by dragging them from the <b>Widget gallery</b> on the right, to any of the three widget areas below, and position them where you would like them to appear.

To remove a widget drag it back to the <b>Widget gallery</b>.",
			'widgets:position:fixed' => '(Fixed position on page)',
	
			'widgets' => "רכיבים",
			'widget' => "רכיב",
			'item:object:widget' => "רכיבים",
			'layout:customise' => "התאם תצוגה",
			'widgets:gallery' => "גלריית רכיבים",
			'widgets:leftcolumn' => "רכיבים לשמאל",
			'widgets:fixed' => "מקום קבוע",
			'widgets:middlecolumn' => "רכיבים באמצע",
			'widgets:rightcolumn' => "רכיבים לימין",
			'widgets:profilebox' => "קופסת פרופיל",
			'widgets:panel:save:success' => "הרכיבים נשמרו בהצלחה.",
			'widgets:panel:save:failure' => "There was a problem saving your widgets. Please try again.",
			'widgets:save:success' => "הרכיב נשמר בהצלחה.",
			'widgets:save:failure' => "We could not save your widget. Please try again.",
			
	
		/**
		 * Groups
		 */
	
			'group' => "קבוצה", 
			'item:group' => "קבוצות",
	
		/**
		 * Profile
		 */
	
			'profile' => "פרופיל",
			'profile:edit:default' => 'החלפת שדות פרופיל',
			'user' => "משתמש",
			'item:user' => "משתמשים",
			'riveritem:single:user' => 'משתמש',
			'riveritem:plural:user' => 'משתמשים',

		/**
		 * Profile menu items and titles
		 */
	
			'profile:yours' => "הפרופיל שלך",
			'profile:user' => "הפרופיל של %s",
	
			'profile:edit' => "עריכת פרופיל",
			'profile:profilepictureinstructions' => "תמונת הפרופיל היא התמונה המוצגת בעמוד הפרופיל שלך. <br /> באפשרותך לשנות תמונה זו בכל עת.",
			'profile:icon' => "תמונת פרופיל",
			'profile:createicon' => "יצירת דמות אישית",
			'profile:currentavatar' => "דמות נוכחית",
			'profile:createicon:header' => "תמונת פרופיל",
			'profile:profilepicturecroppingtool' => "התאמת תמונת פרופיל",
			'profile:createicon:instructions' => "הקליקו ומשכו ריבוע מסביב לחלק בתמונה שאותו ברצונכם לראות. תצוגה מקדימה תופיע מצד ימין.  לסיום לחצו על יצירת דמות אישית. תמונה זו תופיע באתר ליד ההודעות שלך. ",
	
			'profile:editdetails' => "עריכת פרטים",
			'profile:editicon' => "עריכת תמונת פרופיל",
	
			'profile:aboutme' => "קצת עלי", 
			'profile:description' => "קצת עלי",
			'profile:briefdescription' => "תיאור קצר",
			'profile:location' => "מיקום",
			'profile:skills' => "מיומנויות",  
			'profile:interests' => "מתעניין ב", 
			'profile:contactemail' => 'דוא"ל',
			'profile:phone' => "טלפון",
			'profile:mobile' => "טלפון נייד",
			'profile:website' => "אתר",

			'profile:river:update' => "עדכן/ה את הפרופיל האישי %s",
			'profile:river:iconupdate' => " %s עדכן/ה את תמונת הפרופיל",
	
			'profile:label' => "Profile label",
			'profile:type' => "סוג פרופיל",
	
			'profile:editdefault:fail' => 'Default profile could not be saved',
			'profile:editdefault:success' => 'Item successfully added to default profile',
	
			
			'profile:editdefault:delete:fail' => 'Removed default profile item field failed',
			'profile:editdefault:delete:success' => 'Default profile item deleted!',
	
			'profile:defaultprofile:reset' => 'Default system profile reset',
	
			'profile:resetdefault' => 'Reset default profile',
	
		/**
		 * Profile status messages
		 */
	
			'profile:saved' => "Your profile was successfully saved.",
			'profile:icon:uploaded' => "Your profile picture was successfully uploaded.",
	
		/**
		 * Profile error messages
		 */
	
			'profile:noaccess' => "אין לך הרשאות לערוך פרופיל זה.",
			'profile:notfound' => "Sorry; we could not find the specified profile.",
			'profile:cantedit' => "Sorry; you do not have permission to edit this profile.",
			'profile:icon:notfound' => "Sorry; there was a problem uploading your profile picture.",
	
		/**
		 * Friends
		 */
	
			'friends' => "החברים שלי",
			'friends:yours' => "החברים שלך",
			'friends:owned' => "החברים של %s",
			'friend:add' => "הפוך לחבר/ה",
			'friend:remove' => "הסר חבר/ה",
	
			'friends:add:successful' => "You have successfully added %s as a friend.",
			'friends:add:failure' => "We couldn't add %s as a friend. Please try again.",
	
			'friends:remove:successful' => "You have successfully removed %s from your friends.",
			'friends:remove:failure' => "We couldn't remove %s from your friends. Please try again.",
	
			'friends:none' => "This user hasn't added anyone as a friend yet.",
			'friends:none:you' => "You haven't added anyone as a friend! Search for your interests to begin finding people to follow.",
	
			'friends:none:found' => "לא נמצאו חברים.",
	
			'friends:of:none' => "Nobody has added this user as a friend yet.",
			'friends:of:none:you' => "Nobody has added you as a friend yet. Start adding content and fill in your profile to let people find you!",
	
			'friends:of:owned' => "People who have made %s a friend",

			 'friends:num_display' => "Number of friends to display",
			 'friends:icon_size' => "גודל צלמית",
			 'friends:tiny' => "קטנטנה",
			 'friends:small' => "קטנה",
			 'friends' => "חברים",
			 'friends:of' => "חברים של",
			 'friends:collections' => "אוסף חברים",
			 'friends:collections:add' => "אוסף חברים חדש",
			 'friends:addfriends' => "הוסף חבר",
			 'friends:collectionname' => "שם האוסף",
			 'friends:collectionfriends' => "חברים באוסף",
			 'friends:collectionedit' => "עריכת אוסף זה",
			 'friends:nocollections' => "You do not yet have any collections.",
			 'friends:collectiondeleted' => "Your collection has been deleted.",
			 'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
			 'friends:collectionadded' => "Your collection was successfuly created",
			 'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
			 'friends:expandall' => 'Expand all',
			 'friends:closeall' => 'Close all',
			'friends:collections:members' => "Collection members",
			'friends:collections:edit' => "Edit collection",
		
	        'friends:river:created' => "%s added the friends widget.",
	        'friends:river:updated' => "%s updated their friends widget.",
	        'friends:river:delete' => "%s removed their friends widget.",
	        'friends:river:add' => "%s add someone as a friend.",
	
		/**
		 * Feeds
		 */
			'feed:rss' => 'רישום לעדכונים',
			'feed:odd' => 'סינדיקצית מידע',
			
		/**
          * links
		 **/

			'link:view' => 'צפיה בקישור',

	
		/**
		 * River
		 */
			'river' => "נהר",			
			'river:relationship:friend' => 'חבר/ה עם',

		/**
		 * Plugins
		 */
			'plugins:settings:save:ok' => "ההגדרות לתוסף %s נשמרו.",
			'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
			'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
			'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
	
			'item:object:plugin' => 'Plugin configuration settings',
			
		/**
		 * Notifications
		 */
			'notifications:usersettings' => "Notification settings",
			'notifications:methods' => "Please specify which methods you want to permit.",
	
			'notifications:usersettings:save:ok' => "Your notification settings were successfully saved.",
			'notifications:usersettings:save:fail' => "There was a problem saving your notification settings.",
	
			'user.notification.get' => 'Return the notification settings for a given user.',
			'user.notification.set' => 'Set the notification settings for a given user.',
		/**
		 * Search
		 */
	
			'search' => "חיפוש",
			'searchtitle' => "חיפוש: %s",
			'users:searchtitle' => "Searching for users: %s",
			'advancedsearchtitle' => "%s שנמצאו בחיפוש של: %s",
			'notfound' => "לא נמצאו תוצאות.",
			'next' => "הבא",
			'previous' => "הקודם",
	
			'viewtype:change' => "שינוי תצוגה",
			'viewtype:list' => "תצוגה כרשימה",
			'viewtype:gallery' => "גלרייה",
	
			'tag:search:startblurb' => "פריטים המכילים תגים: %s",

			'user:search:startblurb' => "משמשים מתאימים ל: %s",
			'user:search:finishblurb' => "To view more, click here.",
	
		/**
		 * Account
		 */
	
			'account' => "חשבון",
			'settings' => "הגדרות",
            'tools' => "כלים",
            'tools:yours' => "הכלים שלך",
	
			'register' => "רישום",
			'registerok' => "נרשמת ב-% בהצלחה.",
			'registerbad' => "פעולת רישום נכשלה, יכול להיות שכבר קיים שם משתמש כזה או שהסיסמא שבחרת קצרה מדי.",
			'registerdisabled' => "מערכת רישום נוטרלה בידי מנהל המערכת.",
	
			'registration:notemail' => 'The email address you provided does not appear to be a valid email address.',
			'registration:userexists' => 'שם משתמש קיים כבר במערכת',
			'registration:usernametooshort' => 'Your username must be a minimum of 4 characters long.',
			'registration:passwordtooshort' => 'The password must be a minimum of 6 characters long.',
			'registration:dupeemail' => 'This email address has already been registered.',
			'registration:invalidchars' => 'Sorry, your username contains invalid characters.',
			'registration:emailnotvalid' => 'Sorry, the email address you entered is invalid on this system',
			'registration:passwordnotvalid' => 'Sorry, the password you entered is invalid on this system',
			'registration:usernamenotvalid' => 'Sorry, the username you entered is invalid on this system',
	
			'adduser' => "הוספת משתמש",
			'adduser:ok' => "הוספת משתמש חדש הצליחה.",
			'adduser:bad' => "הוספת משתמש חדש נכשלה.",
			
			'item:object:reported_content' => "תכנים מדווחים",
	
			'user:set:name' => "Account name settings",
			'user:name:label' => "שמך",
			'user:name:success' => "שמך שונה בהצלחה.",
			'user:name:fail' => "פעולת שינוי שם נכשלה.",
	
			'user:set:password' => "סיסמא נוכחית",
			'user:password:label' => "סיסמא חדשה",
			'user:password2:label' => "סיסמא חדשה, שוב",
			'user:password:success' => "סיסמא שונתה",
			'user:password:fail' => "שינוי סיסמא נכשל.",
			'user:password:fail:notsame' => "שתי הסיסמאות אינן זהות!",
			'user:password:fail:tooshort' => "הסיסמא קצרה מדי!",
	
			'user:set:language' => "הגדרות שפה",
			'user:language:label' => "בחירת שפה",
			'user:language:success' => "הגדרות שפה נשמרו.",
			'user:language:fail' => "הגדרות שפה לא נשמרו.",
	
			'user:username:notfound' => 'שם משתמש %s לא נמצא.',
	
			'user:password:lost' => 'שכחתי סיסמא',
			'user:password:resetreq:success' => 'Successfully requested a new password, email sent',
			'user:password:resetreq:fail' => 'Could not request a new password.',
	
			'user:password:text' => 'To generate a new password, enter your username below. We will send the address of a unique verification page to you via email click on the link in the body of the message and a new password will be sent to you.',
	
			'user:persistent' => 'זכור אותי',
		/**
		 * Administration
		 */

			'admin:configuration:success' => "הגדרות אישיות נשמרו.",
			'admin:configuration:fail' => "הגדרות האישיות לא נשמרו.",
	
			'admin' => "ניהול",
			'admin:description' => "The admin panel allows you to control all aspects of the system, from user management to how plugins behave. Choose an option below to get started.",
			
			'admin:user' => "ניהול משתמשים",
			'admin:user:description' => ".מסך ניהול זה מאפשר לנהל את תכונות משתמשי המערכת. בחר באפשרות הרצויה",
			'admin:user:adduser:label' => "...לחץ בכדי להוסיף משמש חדש למערכת",
			'admin:user:opt:linktext' => "Configure users...",
			'admin:user:opt:description' => "Configure users and account information. ",
			
			'admin:site' => "ניהול האתר",
			'admin:site:description' => "This admin panel allows you to control global settings for your site. Choose an option below to get started.",
			'admin:site:opt:linktext' => "עדכון הגדרות אתר...",
			'admin:site:opt:description' => "Configure the site technical and non-technical settings. ",
			
			'admin:plugins' => "ניהול תוספים",
			'admin:plugins:description' => "מסך ניהול זה מאפשר שליטה וניהול בתוספי המערכת",
			'admin:plugins:opt:linktext' => "נהלו תוספים ...",
			'admin:plugins:opt:description' => "הגדרת תוספים המוגדרים באתר .",
			'admin:plugins:label:author' => "יוצר",
			'admin:plugins:label:copyright' => "זכויות יוצרים",
			'admin:plugins:label:licence' => "רישיון",
			'admin:plugins:label:website' => "URL",
			"admin:plugins:label:moreinfo" => 'פרטים נוספים',
			'admin:plugins:reorder:yes' => "מיקומו של התוסף %s שונה.",
			'admin:plugins:reorder:no' => "שינוי מיקום התוסף %s  נכשל.",
			'admin:plugins:disable:yes' => "התוסף %s מנוטרל.",
			'admin:plugins:disable:no' => "ניטרול התוסף %s נכשל.",
			'admin:plugins:enable:yes' => "התוסף %s פעיל.",
			'admin:plugins:enable:no' => "הפעלת התוסף %s נכשלה.",
	
			'admin:statistics' => "סטטיסטיקה",
			'admin:statistics:description' => "זהו סיכום של סטטיסטיקה לאתר. במידה והנך זקוק לססיסטיקה נוספת, זוהי זמינה כתוסף.",
			'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'admin:statistics:opt:linktext' => "צפיה בסטטיסטיקה...",
			'admin:statistics:label:basic' => "סטטיסטיקה בסיסית לאתר",
			'admin:statistics:label:numentities' => "ישויות באתר",
			'admin:statistics:label:numusers' => "מספר משתמשים",
			'admin:statistics:label:numonline' => "מספר המשתמשים המחוברים כרגע למערכת",
			'admin:statistics:label:onlineusers' => "משתמשים מחוברים כעת",
			'admin:statistics:label:version' => "גירסת תוכנה",
			'admin:statistics:label:version:release' => "Release",
			'admin:statistics:label:version:version' => "Version",
	
			'admin:user:label:search' => "חיפוש משתמשים:",
			'admin:user:label:seachbutton' => "חיפוש", 
	
			'admin:user:ban:no' => "Can not ban user",
			'admin:user:ban:yes' => "User banned.",
			'admin:user:unban:no' => "Can not unban user",
			'admin:user:unban:yes' => "User un-banned.",
			'admin:user:delete:no' => "Can not delete user",
			'admin:user:delete:yes' => "User deleted",
	
			'admin:user:resetpassword:yes' => "Password reset, user notified.",
			'admin:user:resetpassword:no' => "Password could not be reset.",
	
			'admin:user:makeadmin:yes' => "המשתמש הוא מעכשיו מנהל מערכת.",
			'admin:user:makeadmin:no' => "לא ניתן להפוך משתמש זה למנהל מערכת.",
			
		/**
		 * User settings
		 */
			'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",
	
			'usersettings:statistics' => "סטטיסטיקה אישית",
			'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'usersettings:statistics:opt:linktext' => "סטטיסטיקה לחשבון",
	
			'usersettings:user' => "הגדרות אישיות",
			'usersettings:user:opt:description' => "מאפשר לשנות הגדרות אישיות.",
			'usersettings:user:opt:linktext' => "שינוי הגדרות אישיות",
	
			'usersettings:plugins' => "תוספים",
			'usersettings:plugins:opt:description' => "הגדרות עבור התוספים שלך.",
			'usersettings:plugins:opt:linktext' => "הגדרת תוספים",
	
			'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
			'usersettings:statistics:label:numentities' => "תכולה",
	
			'usersettings:statistics:yourdetails' => "פרטים אישיים",
			'usersettings:statistics:label:name' => "שם מלא",
			'usersettings:statistics:label:email' => "דואר אלקטרוני",
			'usersettings:statistics:label:membersince' => "חבר מתאריך",
			'usersettings:statistics:label:lastlogin' => "כניסה אחרונה ב",
	
			
	
		/**
		 * Generic action words
		 */
	
			'save' => "שמירה",
			'cancel' => "ביטול",
			'saving' => "...שומר",
			'update' => "עדכון",
			'edit' => "עריכה",
			'delete' => "מחיקה",
			'load' => "טעינה",
			'upload' => "העלאה",
			'ban' => "החרמה",
			'unban' => "התרה",
			'enable' => "איפשור",
			'disable' => "ניטרול",
			'request' => "בקשה",
			'complete' => "השלמה",
			'open' => 'פתיחה',
			'close' => 'סגירה',
			'reply' => "מענה",
	
			'up' => "למעלה",
			'down' => "למטה",
			'top' => "להתחלה",
			'bottom' => "לסוף",
	
			'invite' => "הזמנה",
	
			'resetpassword' => "איפוס סיסמה",
			'makeadmin' => "הפוך למנהל מערכת",
	
			'option:yes' => "כן",
			'option:no' => "לא",
	
			'unknown' => 'לא ידוע',
	
			'active' => 'פעיל',
			'total' => 'סה"כ',
	
			'learnmore' => "לחצו כאן בכדי ללמוד עוד.",
	
			'content' => "תוכן",
			'content:latest' => "פעילות אחרונה",
			'content:latest:blurb' => 'לחילופין לחץ כאן בכדי לראות תכנים מכלל האתר.',
	
			'link:text' => 'צפה בקישור',
	
	
		/**
		 * Generic data words
		 */
	
			'title' => "כותרת",
			'description' => "תיאור",
			'tags' => "תגים",
			'spotlight' => "זרקור",
			'all' => "כולם",
	
			'by' => 'על ידי',
	
			'annotations' => "Annotations",
			'relationships' => "יחסים",
			'metadata' => "Metadata",
	
		/**
		 * Input / output strings
		 */

			'deleteconfirm' => "Are you sure you want to delete this item?",
			'fileexists' => "A file has already been uploaded. To replace it, select it below:",
			
			
	    /**
         * System messages
         **/

			'systemmessages:dismiss' => "לחץ לשחרור",

	
		/**
		 * Import / export
		 */
			'importsuccess' => "ייבוא נתונים הסתיים בהצלחה",
			'importfail' => "OpenDD import of data failed.",
	
		/**
		 * Time
		 */
	
			'friendlytime:justnow' => "עכשיו",
			'friendlytime:minutes' => "לפני %s דקות",
			'friendlytime:minutes:singular' => "לפני דקה",
			'friendlytime:hours' => "לפני %s שעות",
			'friendlytime:hours:singular' => "לפני שעה",
			'friendlytime:days' => "לפני %s ימים",
			'friendlytime:days:singular' => "אתמול",
	
		/**
		 * Installation and system settings
		 */
	
			'installation:error:htaccess' => "Elgg requires a file called .htaccess to be set in the root directory of its installation. We tried to create it for you, but Elgg doesn't have permission to write to that directory. 

Creating this is easy. Copy the contents of the textbox below into a text editor and save it as .htaccess

",
			'installation:error:settings' => "Elgg couldn't find its settings file. Most of Elgg's settings will be handled for you, but we need you to supply your database details. To do this:

1. Rename engine/settings.example.php to settings.php in your Elgg installation.

2. Open it with a text editor and enter your MySQL database details. If you don't know these, ask your system administrator or technical support for help.

Alternatively, you can enter your database settings below and we will try and do this for you...",
	
			'installation:error:configuration' => "Once you've corrected any configuration issues, press reload to try again.",
	
			'installation' => "התקנה",
			'installation:success' => "Elgg's database was installed successfully.",
			'installation:configuration:success' => "Your initial configuration settings have been saved. Now register your initial user; this will be your first system administrator.",
	
			'installation:settings' => "System settings",
			'installation:settings:description' => "Now that the Elgg database has been successfully installed, you need to enter a couple of pieces of information to get your site fully up and running. We've tried to guess where we could, but <b>you should check these details.</b>",
	
			'installation:settings:dbwizard:prompt' => "Enter your database settings below and hit save:",
			'installation:settings:dbwizard:label:user' => "Database user",
			'installation:settings:dbwizard:label:pass' => "Database password",
			'installation:settings:dbwizard:label:dbname' => "Elgg database",
			'installation:settings:dbwizard:label:host' => "Database hostname (usually 'localhost')",
			'installation:settings:dbwizard:label:prefix' => "Database table prefix (usually 'elgg')",
	
			'installation:settings:dbwizard:savefail' => "We were unable to save the new settings.php. Please save the following file as engine/settings.php using a text editor.",
	
			'installation:sitename' => "The name of your site (eg \"My social networking site\"):",
			'installation:sitedescription' => "Short description of your site (optional)",
			'installation:wwwroot' => "The site URL, followed by a trailing slash:",
			'installation:path' => "The full path to your site root on your disk, followed by a trailing slash:",
			'installation:dataroot' => "The full path to the directory where uploaded files will be stored, followed by a trailing slash:",
			'installation:dataroot:warning' => "You must create this directory manually. It should sit in a different directory to your Elgg installation.",
			'installation:language' => "The default language for your site:",
			'installation:debug' => "Debug mode provides extra information which can be used to diagnose faults, however it can slow your system down so should only be used if you are having problems:",
			'installation:debug:label' => "Turn on debug mode",
			'installation:usage' => "This option lets Elgg send anonymous usage statistics back to Curverider.",
			'installation:usage:label' => "Send anonymous usage statistics",
			'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",

			'installation:siteemail' => "דואר אלקטרוני של האתר - מדואר זה נשלחות הודעות בשם האתר",
	
			'installation:disableapi' => "The RESTful API is a flexible and extensible interface that enables applications to use certain Elgg features remotely.",
			'installation:disableapi:label' => "Enable the RESTful API",

			'upgrading' => 'Upgrading',
			'upgrade:db' => 'Your database was upgraded.',
			'upgrade:core' => 'Your elgg installation was upgraded',
	
		/**
		 * Welcome
		 */
	
			'welcome' => "ברוכים הבאים %s",
			'welcome_message' => "ברוכים הבאים להתקנה זו של Elgg",
		/**
		 * Folders
		 */

		  'folder:create' => 'יצירת תיקייה חדשה',
		  'folder:your' => 'התיקיות שלך',
		  'folder:view' => 'צפייה בתיקיות',
		  'folder:edit' => 'ערכית תיקיות',
		  'folder:user' => 'התיקיות של %s',
		  'folder:friends' => 'תיקיות בפרופיל',
		  'folder:friendsselect' => 'בחירת פרופיל',
		  'folder:file:nofolder' => 'לא מוגדר',
		  'folder:title' => 'שם תיקייה',
		  'folder:text' => 'תיאור',
		  'folder:deletefailed' => 'הייתה טעות במחיקת התיקייה, נא לנסות שוב.',
		  'folder:deleted' => 'תיקייה נמחקה בהצלחה',
		  'folder:add' => 'הוספת תיקייה',
		  'folder:title:blank' => 'נא לבחור שם לתיקייה',
		  'folder:save:error' => 'הייתה טעות ביצירת התיקייה, נא לנסות שוב.',
		  'folder:edit:error' => 'הייתה טעות בעריכת התיקייה, נא לנסות שוב.',
		  'folder:save:success' => 'תיקייה נוצרה בהצלחה',
		  'folder:edit:success' => 'תיקייה נערכה בהצלחה',
		  'folder:notfound' => 'תיקייה לא נמצאה',
		  'folder:put' => 'תיקייה',
		  'folder:current' => 'תיקייה: %s',
		  'folder:group' => 'התיקיות של היוזמה',
		  'folder:deletenoperm' => 'אין לך הרשאה למחיקת תיקייה זו',

		/**
		 * Emails
		 */
			'email:settings' => "הגדרות דואר אלקטרוני",
			'email:address:label' => "כתובת הדואר האלקטרוני שלך",
			
			'email:save:success' => "New email address saved, verification requested.",
			'email:save:fail' => "Your new email address could not be saved.",
	
			'email:confirm:success' => "You have confirmed your email address!",
			'email:confirm:fail' => "Your email address could not be verified...",
	
			'friend:newfriend:subject' => "%s has made you a friend!",
			'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

	%s

You cannot reply to this email.",
	
	
	
			'email:resetpassword:subject' => "סיסמך אופסה!",
			'email:resetpassword:body' => "שלום %s,
			
סיסמך החדשה היא: %s",
	
	
			'email:resetreq:subject' => "בקשת סיסמא חדשה",
			'email:resetreq:body' => "שלום %s,
			
Somebody (from the IP address %s) has requested a new password for their account.

If you requested this click on the link below, otherwise ignore this email.

%s
",

	
		/**
		 * XML-RPC
		 */
			'xmlrpc:noinputdata'	=>	"Input data missing",
	
		/**
		 * Comments
		 */
	
			'comments:count' => "תגובות %s",
			
			'riveraction:annotation:generic_comment' => '%s commented on %s',
	
			'generic_comments:add' => "הוספת תגובה",
			'generic_comments:text' => "תגובה",
			'generic_comment:posted' => "Your comment was successfully posted.",
			'generic_comment:deleted' => "Your comment was successfully deleted.",
			'generic_comment:blank' => "Sorry; you need to actually put something in your comment before we can save it.",
			'generic_comment:notfound' => "Sorry; we could not find the specified item.",
			'generic_comment:notdeleted' => "Sorry; we could not delete this comment.",
			'generic_comment:failure' => "An unexpected error occurred when adding your comment. Please try again.",
	
			'generic_comment:email:subject' => 'You have a new comment!',
			'generic_comment:email:body' => "You have a new comment on your item \"%s\" from %s. It reads:

			
%s


To reply or view the original item, click here:

	%s

To view %s's profile, click here:

	%s

You cannot reply to this email.",
	
		/**
		 * Entities
		 */
			'entity:default:strapline' => 'Created %s by %s',
			'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',
	
			'entity:delete:success' => 'Entity %s has been deleted',
			'entity:delete:fail' => 'Entity %s could not be deleted',
	
	
		/**
		 * Action gatekeeper
		 */
			'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
			'actiongatekeeper:tokeninvalid' => "We encountered an error (token mismatch). This probably means that the page you were using expired. Please try again.",
			'actiongatekeeper:timeerror' => 'The page you were using has expired. Please refresh and try again.',
			'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',
	
		/**
		 * Word blacklists
		 */
			'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',
	
		/**
		 * Languages according to ISO 639-1
		 */
			"aa" => "Afar",
			"ab" => "Abkhazian",
			"af" => "Afrikaans",
			"am" => "Amharic",
			"ar" => "Arabic",
			"as" => "Assamese",
			"ay" => "Aymara",
			"az" => "Azerbaijani",
			"ba" => "Bashkir",
			"be" => "Byelorussian",
			"bg" => "Bulgarian",
			"bh" => "Bihari",
			"bi" => "Bislama",
			"bn" => "Bengali; Bangla",
			"bo" => "Tibetan",
			"br" => "Breton",
			"ca" => "Catalan",
			"co" => "Corsican",
			"cs" => "Czech",
			"cy" => "Welsh",
			"da" => "Danish",
			"de" => "German",
			"dz" => "Bhutani",
			"el" => "Greek",
			"en" => "English",
			"eo" => "Esperanto",
			"es" => "Spanish",
			"et" => "Estonian",
			"eu" => "Basque",
			"fa" => "Persian",
			"fi" => "Finnish",
			"fj" => "Fiji",
			"fo" => "Faeroese",
			"fr" => "French",
			"fy" => "Frisian",
			"ga" => "Irish",
			"gd" => "Scots / Gaelic",
			"gl" => "Galician",
			"gn" => "Guarani",
			"gu" => "Gujarati",
			"he" => "עברית",
			"ha" => "Hausa",
			"hi" => "Hindi",
			"hr" => "Croatian",
			"hu" => "Hungarian",
			"hy" => "Armenian",
			"ia" => "Interlingua",
			"id" => "Indonesian",
			"ie" => "Interlingue",
			"ik" => "Inupiak",
			//"in" => "Indonesian",
			"is" => "Icelandic",
			"it" => "Italian",
			"iu" => "Inuktitut",
			"iw" => "Hebrew (obsolete)",
			"ja" => "Japanese",
			"ji" => "Yiddish (obsolete)",
			"jw" => "Javanese",
			"ka" => "Georgian",
			"kk" => "Kazakh",
			"kl" => "Greenlandic",
			"km" => "Cambodian",
			"kn" => "Kannada",
			"ko" => "Korean",
			"ks" => "Kashmiri",
			"ku" => "Kurdish",
			"ky" => "Kirghiz",
			"la" => "Latin",
			"ln" => "Lingala",
			"lo" => "Laothian",
			"lt" => "Lithuanian",
			"lv" => "Latvian/Lettish",
			"mg" => "Malagasy",
			"mi" => "Maori",
			"mk" => "Macedonian",
			"ml" => "Malayalam",
			"mn" => "Mongolian",
			"mo" => "Moldavian",
			"mr" => "Marathi",
			"ms" => "Malay",
			"mt" => "Maltese",
			"my" => "Burmese",
			"na" => "Nauru",
			"ne" => "Nepali",
			"nl" => "Dutch",
			"no" => "Norwegian",
			"oc" => "Occitan",
			"om" => "(Afan) Oromo",
			"or" => "Oriya",
			"pa" => "Punjabi",
			"pl" => "Polish",
			"ps" => "Pashto / Pushto",
			"pt" => "Portuguese",
			"qu" => "Quechua",
			"rm" => "Rhaeto-Romance",
			"rn" => "Kirundi",
			"ro" => "Romanian",
			"ru" => "Russian",
			"rw" => "Kinyarwanda",
			"sa" => "Sanskrit",
			"sd" => "Sindhi",
			"sg" => "Sangro",
			"sh" => "Serbo-Croatian",
			"si" => "Singhalese",
			"sk" => "Slovak",
			"sl" => "Slovenian",
			"sm" => "Samoan",
			"sn" => "Shona",
			"so" => "Somali",
			"sq" => "Albanian",
			"sr" => "Serbian",
			"ss" => "Siswati",
			"st" => "Sesotho",
			"su" => "Sundanese",
			"sv" => "Swedish",
			"sw" => "Swahili",
			"ta" => "Tamil",
			"te" => "Tegulu",
			"tg" => "Tajik",
			"th" => "Thai",
			"ti" => "Tigrinya",
			"tk" => "Turkmen",
			"tl" => "Tagalog",
			"tn" => "Setswana",
			"to" => "Tonga",
			"tr" => "Turkish",
			"ts" => "Tsonga",
			"tt" => "Tatar",
			"tw" => "Twi",
			"ug" => "Uigur",
			"uk" => "Ukrainian",
			"ur" => "Urdu",
			"uz" => "Uzbek",
			"vi" => "Vietnamese",
			"vo" => "Volapuk",
			"wo" => "Wolof",
			"xh" => "Xhosa",
			//"y" => "Yiddish",
			"yi" => "Yiddish",
			"yo" => "Yoruba",
			"za" => "Zuang",
			"zh" => "Chinese",
			"zu" => "Zulu",
	);
	
	add_translation("he",$hebrew);

?>
