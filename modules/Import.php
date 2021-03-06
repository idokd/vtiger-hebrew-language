<?php 

    /*+**********************************************************************************
     * The contents of this file are subject to the vtiger CRM Public License Version 1.0
     * ("License"); You may not use this file except in compliance with the License
     * The Original Code is: vtiger CRM Open Source
     * The Initial Developer of the Original Code is vtiger.
     * Portions created by vtiger are Copyright (C) vtiger.
     * Portions created by Ido Kobelkowsky are Copyright (C) yalla ya!.
     * All Rights Reserved.
     *  ********************************************************************************
     *  Author       : Ido Kobelkowsky
     ************************************************************************************/
    
$languageStrings = array (
  'LBL_IMPORT_STEP_1' => 'שלב 1',
  'LBL_IMPORT_STEP_1_DESCRIPTION' => 'בחר קובץ',
  'LBL_IMPORT_SUPPORTED_FILE_TYPES' => 'סוגי קבצים נתמכים: .CSV, .VCF',
  'LBL_IMPORT_STEP_2' => 'שלב 2',
  'LBL_IMPORT_STEP_2_DESCRIPTION' => 'ציין פורמט',
  'LBL_FILE_TYPE' => 'סוג קובץ',
  'LBL_CHARACTER_ENCODING' => 'קידוד תווים',
  'LBL_DELIMITER' => 'דלימיטר',
  'LBL_HAS_HEADER' => 'יש כותרת',
  'LBL_IMPORT_STEP_3' => 'שלב 3',
  'LBL_IMPORT_STEP_3_DESCRIPTION' => 'טיפול רשומות כפולות',
  'LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED' => 'בחר באפשרות זו כדי להפעיל ולהגדיר קריטריונים מיזוגים כפולים',
  'LBL_SPECIFY_MERGE_TYPE' => 'בחר כיצד יש לטפל ברשומות כפולות',
  'LBL_SELECT_MERGE_FIELDS' => 'בחר בשדות המתאימים כדי למצוא רשומות כפולות',
  'LBL_AVAILABLE_FIELDS' => 'שדות זמינים',
  'LBL_SELECTED_FIELDS' => 'שדות להתאמה על',
  'LBL_NEXT_BUTTON_LABEL' => 'הבא',
  'LBL_IMPORT_STEP_4' => 'שלב 4',
  'LBL_IMPORT_STEP_4_DESCRIPTION' => 'מפה את עמודות לשדות מודול',
  'LBL_FILE_COLUMN_HEADER' => 'כותרת',
  'LBL_ROW_1' => 'שורה 1',
  'LBL_CRM_FIELDS' => 'שדות CRM',
  'LBL_DEFAULT_VALUE' => 'ערך ברירת מחדל',
  'LBL_SAVE_AS_CUSTOM_MAPPING' => 'שמור כמפה מותאמת אישית',
  'LBL_IMPORT_BUTTON_LABEL' => 'ייבוא',
  'LBL_RESULT' => 'תוצאה',
  'LBL_TOTAL_RECORDS_IMPORTED' => 'רשומות מיובאות בהצלחה',
  'LBL_NUMBER_OF_RECORDS_CREATED' => 'רשומות שנוצרו',
  'LBL_NUMBER_OF_RECORDS_UPDATED' => 'רשומות הוחלפו',
  'LBL_NUMBER_OF_RECORDS_SKIPPED' => 'הרשומות דילגו',
  'LBL_NUMBER_OF_RECORDS_MERGED' => 'רשומות מאוחדות',
  'LBL_TOTAL_RECORDS_FAILED' => 'הרשומות נכשלו בייבוא',
  'LBL_IMPORT_MORE' => 'ייבוא עוד',
  'LBL_VIEW_LAST_IMPORTED_RECORDS' => 'רשומות מיובאות אחרונות',
  'LBL_UNDO_LAST_IMPORT' => 'בטל ייבוא אחרון',
  'LBL_FINISH_BUTTON_LABEL' => 'סיים',
  'LBL_UNDO_RESULT' => 'בטל תוצאות ייבוא',
  'LBL_TOTAL_RECORDS' => 'סה"כ מספר רשומות',
  'LBL_NUMBER_OF_RECORDS_DELETED' => 'מספר הרשומות שנמחקו',
  'LBL_OK_BUTTON_LABEL' => 'בסדר',
  'LBL_IMPORT_SCHEDULED' => 'ייבוא מתוזמן',
  'LBL_RUNNING' => 'רץ',
  'LBL_CANCEL_IMPORT' => 'בטל ייבוא',
  'LBL_ERROR' => 'שגיאה',
  'LBL_CLEAR_DATA' => 'נקה נתונים',
  'ERR_LOCAL_INFILE_NOT_ON' => 'המשתנה local_infile כבוי בשרת מסד הנתונים.',
  'ERR_UNIMPORTED_RECORDS_EXIST' => 'לא ניתן לייבא נתונים נוספים באצווה זו. התחל ייבוא חדש.',
  'ERR_IMPORT_INTERRUPTED' => 'הייבוא הנוכחי הופסק. בבקשה נסה שוב מאוחר יותר',
  'ERR_FAILED_TO_LOCK_MODULE' => 'נכשלה נעילת המודול לייבוא. נסה שוב מאוחר יותר',
  'LBL_SELECT_SAVED_MAPPING' => 'בחר מיפוי שמור',
  'LBL_IMPORT_ERROR_LARGE_FILE' => 'שגיאת ייבוא קובץ גדול',
  'LBL_FILE_UPLOAD_FAILED' => 'טעינת הקובץ נכשלה',
  'LBL_IMPORT_CHANGE_UPLOAD_SIZE' => 'ייבוא שינוי גודל העלאה',
  'LBL_IMPORT_DIRECTORY_NOT_WRITABLE' => 'ייבוא מדריך הכתובות אינו ניתן לכתיבה',
  'LBL_IMPORT_FILE_COPY_FAILED' => 'העתק קובץ הייבוא נכשל',
  'LBL_INVALID_FILE' => 'קובץ לא תקין',
  'LBL_NO_ROWS_FOUND' => 'לא נמצאו שורות',
  'LBL_SCHEDULED_IMPORT_DETAILS' => 'הייבוא שלך נקבע ומתחיל תוך 15 דקות. תקבל הודעת דוא"ל לאחר השלמת הייבוא. <br> <br>
ודא שהשרת היוצא וכתובת הדואר האלקטרוני שלך מוגדרים לקבל הודעת דוא"ל',
  'LBL_DETAILS' => 'פרטים',
  'skipped' => 'רשומות מדלגות',
  'failed' => 'הרשומות נכשלו',
  'LBL_IMPORT_LINEITEMS_CURRENCY' => 'מטבע (עבור שדות פריטים קו)',
  'LBL_USE_SAVED_MAPS' => 'השתמש במפות שמורות שמורות',
  'LBL_IMPORT_MAP_FIELDS' => 'מפה את coloumns לשדות CRM',
  'LBL_UPLOAD_CSV' => 'העלה קובץ CSV',
  'LBL_UPLOAD_VCF' => 'העלה קובץ VCF',
  'LBL_DUPLICATE_HANDLING' => 'טיפול כפול',
  'LBL_FIELD_MAPPING' => 'מיפוי שדה',
  'LBL_IMPORT_FROM_CSV_FILE' => 'ייבא מקובץ CSV',
  'LBL_SELECT_IMPORT_FILE_FORMAT' => 'לאן תרצה לייבא?',
  'LBL_CSV_FILE' => 'קובץ CSV',
  'LBL_VCF_FILE' => 'קובץ VCF',
  'LBL_GOOGLE' => 'Google',
  'LBL_IMPORT_COMPLETED' => 'הייבוא הושלם',
  'LBL_IMPORT_SUMMARY' => 'סיכום ייבוא',
  'LBL_DELETION_COMPLETED' => 'המחיקה הושלמה',
  'LBL_TOTAL_RECORDS_SCANNED' => 'סה"כ רשומות סרוקות',
  'LBL_SKIP_BUTTON' => 'לדלג',
  'LBL_DUPLICATE_RECORD_HANDLING' => 'טיפול רשומות כפולות',
  'LBL_IMPORT_FROM_VCF_FILE' => 'ייבוא מקובץ VCF',
  'LBL_SELECT_VCF_FILE' => 'בחר קובץ VCF',
  'LBL_DONE_BUTTON' => 'בוצע',
  'LBL_DELETION_SUMMARY' => 'מחק סיכום',
  'LBL_SKIP_THIS_STEP' => 'דלג על שלב זה',
  'LBL_ICS_FILE' => 'קובץ ICS',
  'LBL_UPLOAD_ICS' => 'העלה קובץ ICS',
  'LBL_IMPORT_FROM_ICS_FILE' => 'ייבוא מקובץ ICS',
  'LBL_SELECT_ICS_FILE' => 'בחר קובץ ICS',
);
