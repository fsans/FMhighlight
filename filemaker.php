<?php
/*************************************************************************************
 * filemaker.php
 * ---------------------------------
 * Author: Famcesc Sans (fsans@ntwk.es)
 * Copyright: (c) 2008 Network BCN Software (http://www.ntwk.es)
 * Release Version: 1.0.8.1
 * Date Started: 09.01.2008
 *
 * filemaker language file for GeSHi.
 *
 * <any-comments...>
 *
 * CHANGES
 * -------
 * <date-of-release> (<GeSHi release>)
 *	-  First Release
 *
 * TODO (updated <date-of-release>)
 * -------------------------
 * <things-to-do>
 *
 *************************************************************************************
 *
 *	   This file is part of GeSHi.
 *
 *	 GeSHi is free software; you can redistribute it and/or modify
 *	 it under the terms of the GNU General Public License as published by
 *	 the Free Software Foundation; either version 2 of the License, or
 *	 (at your option) any later version.
 *
 *	 GeSHi is distributed in the hope that it will be useful,
 *	 but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	 GNU General Public License for more details.
 *
 *	 You should have received a copy of the GNU General Public License
 *	 along with GeSHi; if not, write to the Free Software
 *	 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/
 
$language_data = array (
  'LANG_NAME' => 'filemaker',
  'COMMENT_SINGLE' => array(1 => '#', 2 => '//'),
  'COMMENT_MULTI' => array('/*' => '*/'),
  'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
  'QUOTEMARKS' => array("'", '"','“','”'),
  'ESCAPE_CHAR' => '\\',
  'KEYWORDS' => array(
	1 => array( // FileMaker static functions
'Average','Count','List','Max','Min','StDev','StDevP','Sum','Variance','VarianceP','Date','Day','DayName','DayNameJ','DayOfWeek','DayOfYear','Month','MonthName','MonthNameJ','WeekOfYear','WeekOfYearFiscal','Year','YearName','DatabaseNames','FieldBounds','FieldComment','FieldIDs','FieldNames','FieldRepetitions','FieldStyle','FieldType','GetNextSerialValue','LayoutIDs','LayoutNames','LayoutObjectNames','RelationInfo','ScriptIDs','ScriptNames','TableIDs','TableNames','ValueListIDs','ValueListItems','ValueListNames','WindowNames','External','FV','NPV','PMT','PV','Case','Choose','Evaluate','EvaluationError','GetAsBoolean','GetField','GetFieldName','GetLayoutObjectAttribute','GetNthRecord','If','IsEmpty','IsValid','IsValidExpression','Let','Lookup','LookupNext','Self','Abs','Ceiling','Combination','Div','Exp','Factorial','Floor','Int','Lg','Ln','Log','Mod','Random','Round','SetPrecision','Sign','Sqrt','Truncate','Extend','GetRepetition','Last','GetSummary','Char','Code','Exact','Filter','FilterValues','GetAsCSS','GetAsDate','GetAsNumber','GetAsSVG','GetAsText','GetAsTime','GetAsTimestamp','GetAsURLEncoded','GetValue','Hiragana','KanaHankaku','KanaZenkaku','KanjiNumeral','Katakana','Left','LeftValues','LeftWords','Length','Lower','Middle','MiddleValues','MiddleWords','NumToJText','PatternCount','Position','Proper','Quote','Replace','Right','RightValues','RightWords','RomanHankaku','RomanZenkaku','SerialIncrement','Substitute','Trim','TrimAll','Upper','ValueCount','WordCount','RGB','TextColor','TextColorRemove','TextFont','TextFontRemove','TextFormatRemove','TextSize','TextSizeRemove','TextStyleAdd','TextStyleRemove','Hour','Minute','Seconds','Time','Timestamp','Acos','Asin','Atan','Cos','Degrees','Pi','Radians','Sin','Tan','Get'

	  ),
	2 => array( // FileMaker GET() function identifiers	
'AccountName','ActiveFieldContents','ActiveFieldName','ActiveFieldTableName','ActiveLayoutObjectName','ActiveModifierKeys','ActiveRepetitionNumber','ActiveSelectionSize','ActiveSelectionStart','AllowAbortState','AllowToolbarState','ApplicationLanguage','ApplicationVersion','CalculationRepetitionNumber','CurrentDate','CurrentHostTimestamp','CurrentTime','CurrentTimestamp','CustomMenuSetName','DesktopPath','DocumentsPath','DocumentsPathListing','ErrorCaptureState','ExtendedPrivileges','FileMakerPath','FileName','FilePath','FileSize','FoundCount','HighContrastColor','HighContrastState','HostApplicationVersion','HostIPAddress','HostName','LastError','LastMessageChoice','LastODBCError','LayoutAccess','LayoutCount','LayoutName','LayoutNumber','LayoutTableName','LayoutViewState','MultiUserState','NetworkProtocol','PageNumber','PortalRowNumber','PreferencesPath','PrinterName','PrivilegeSetName','RecordAccess','RecordID','RecordModificationCount','RecordNumber','RecordOpenCount','RecordOpenState','RequestCount','RequestOmitState','ScreenDepth','ScreenHeight','ScreenWidth','ScriptName','ScriptParameter','ScriptResult','SortState','StatusAreaState','SystemDrive','SystemIPAddress','SystemLanguage','SystemNICAddress','SystemPlatform','SystemVersion','TemporaryPath','TextRulerVisible','TotalRecordCount','TriggerKeystroke','TriggerModifierKeys','UserCount','UserName','UseSystemFormatsState','WindowContentHeight','WindowContentWidth','WindowDesktopHeight','WindowDesktopWidth','WindowHeight','WindowLeft','WindowMode','WindowName','WindowTop','WindowVisible','WindowWidth','WindowZoomLevel','Roman','Greek','Cryllic','CentralEurope','ShiftJIS','TraditionalChinese','SimplifiedChinese','OEM','Symbol','Other','Plain','Bold','Italic','Underline','Condense','Extend','Strikethrough','SmallCaps','Superscript','Subscript','Uppercase','Lowercase','Titlecase','WordUnderline','DoubleUnderline','AllStyles','objectType','hasFocus','containsFocus','isFrontTabPanel','bounds','left','right','top','bottom','width','height','rotation','startPoint','endPoint','source','content','enclosingObject','containedObjects','ActiveModiﬁerKeys'
	  ),
	3 => array( // ScriptMaker static functions 
'Add Account','Adjust Window','Allow Toolbars','Allow User Abort','Arrange All Windows','Beep','Change Password','Check Found Set','Check Record','Check Selection','Clear','Close File','Close Window','Comment','Commit Records/Requests','Constrain Found Set','Convert File','Copy All Records/Requests','Copy Record/Request','Copy','Correct Word','Cut','Delete Account','Delete All Records','Delete Portal Row','Delete Record/Request','Dial Phone','Duplicate Record/Request','Edit User Dictionary','Enable Account','Enter Browse Mode','Enter Find Mode','Enter Preview Mode','Execute SQL','Exit Application','Export Field Contents','Export Records','Extend Found Set','Flush Cache to Disk','Freeze Window','Go to Field','Go to Layout','Go to Next Field','Go to Object','Go to Portal Row','Go to Previous Field','Go to Record/Request/Page','Go to Related Record','Import Records','Insert Calculated Result','Insert Current Date','Insert Current Time','Insert Current User Name','Insert File','Insert From Index','Insert From Last Visited','Insert Object','Insert Picture','Insert QuickTime','Insert Text','Install Menu Set','Modify Last Find','Move/Resize Window','New File','New Record/Request','New Window','Omit Multiple Records','Omit Record','Open File Options','Open File','Open Find/Replace','Open Help','Open Manage Data Sources','Open Manage Database','Open Manage Value Lists','Open Preferences','Open Record/Request','Open Remote','Open ScriptMaker','Open Sharing','Open URL','Paste','Pause/Resume Script','Perform AppleScript','Perform Find','Perform Find/Replace','Perform Script','Print Setup','Print','Recover File','Refresh Window','Re-Login','Relookup Field Contents','Replace Field Contents','Reset Account Password','Revert Record/Request','Save a Copy as','Save Records as Excel','Save Records As PDF','Scroll Window','Select All','Select Dictionaries','Select Window','Send DDE Execute','Send Event','Send Mail','Set Error Capture','Set Field','Set Multi-User','Set Next Serial Value','Set Selection','Set Use System Formats','Set Variable','Set Web Viewer','Set Window Title','Set Zoom Level','Show All Records','Show Custom Dialog','Show Omitted Only','Show/Hide Status Area','Show/Hide Text Ruler','Sort Records','Speak','Spelling Options','Undo/Redo','Unsort Records','Update Link','View As','Install OnTimer Script','Open Edit Saved Finds','Set Field By Name','Case','Choose','Evaluate','Let','List','Lookup','LookupNext','Quote'

	),
	
	4 => array( // ScriptMaker and calc statements functions. Clauses
'If','End If','Else','Else If','End Loop','Exit Loop If','Exit Script','Halt Script'
	),
	
	5 => array( // ScriptMaker step options
'File Name','Current file','Next','Last','First','Previous','Speciﬁed Sort Order','Restore','No dialog','ascending','descending','Exit after last','Current Layout','External','from ﬁle','Select','Resize to Fit','Maximize','Minimize','Hide','Home','End','Page Up','Page Down','To Selection','Current Window','Height','Width','Top','Left','Name','Current file','Parameter','On','Off','From table','Using layout','Show only related records','Match found set','New window','Result','Account Name','Privilege Set','Expire password','Password','Current record','Worksheet','Create email','Use ﬁeld names as column names','Speciﬁed Find Requests','Find Records','Criteria','Automatically open','Records being browsed','Title','Subject','Author','Message','Buttons','Send via SMTP Server','To','Interval','Value'
		),
		
	),
	
	'SYMBOLS' => array(
'(', ')', '[', ']', '{', '}', '!', '%', '&', '*','/', '<', '>', '≠', '=','+','-','≥', '≤', '$','$$', 'and', 'AND','or','OR','not','xor', '::', '^', '¶'
	),
	
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => false,
			1 => true,
			2 => true,
			3 => true,
			4 => true,
			5 => true
		),
	
	'STYLES' => array(
		
		'KEYWORDS' => array(
			1 => 'color: #006600; font-weight: bold;', 	// FileMaker static functions
			2 => 'color: #b1b100;', 	// FileMaker GET() function identifiers
			3 => 'color: #000066; font-weight: bold;', 	// ScriptMaker static functions
			4 => 'color: #000066;', 	// ScriptMaker and calc statements functions. Clauses
			5 => 'color: #009900;'						// ScriptMaker step options
			),
	
		'COMMENTS' => array(
			1 => 'color: #999999; font-style: italic;',
			2 => 'color: #009900; font-style: italic;', // disabled script step
			'MULTI' => 'color: #999999; font-style: italic;'
			),
	
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
			),
	
		'BRACKETS' => array(
			0 => 'color: #333333;'
			),
	
		'STRINGS' => array(
			0 => 'color: #3366CC;',
			'HARD' => 'color: #0000ff;'
			),
	
		'NUMBERS' => array(
			0 => 'color: #CC0000;'
			),
	
		'METHODS' => array(
			1 => 'color: #FFCC00;' //006600
			),
	
		'SYMBOLS' => array(
			0 => 'color: #333333;'
			),
	
		'REGEXPS' => array(
			0 => 'color: #CC0099;',
			1 => 'color: #CC0099;',
			),
	
		'SCRIPT' => array(
			0 => '',
			1 => '',
			2 => '',
			3 => ''
			)
		
	),
	
	'URLS' => array(
		1 => '',
		2 => '',
		3 => ''
		),
	'OOLANG' => false,
	
	'OBJECT_SPLITTERS' => array(
		1 => '::'
		),
		
	'REGEXPS' => array(
		0 => "[\\$]{1,2}[a-zA-Z_][a-zA-Z0-9_]*", // matches local global vars
		1 => "[\\$\\$]{1,2}[a-zA-Z_][a-zA-Z0-9_]*" // matches '$$' global session vars
		),
	
	'STRICT_MODE_APPLIES' => GESHI_NEVER, //GESHI_MAYBE,
	
	'SCRIPT_DELIMITERS' => array(
		),
		
	'HIGHLIGHT_STRICT_BLOCK' => array(
		0 => true,
		1 => true
		),
		
   'TAB_WIDTH' => 4
);

?>
