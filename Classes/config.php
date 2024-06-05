<?php
session_start();
ini_set('display_errors', 0);
error_reporting(0);
error_reporting(E_ALL);
date_default_timezone_set('Asia/Calcutta');

// define('BASE_URL', 'http://10.80.4.55:8081/API/SAP/'); // Query Based API Base URL
// $SAP_URL='https://10.80.4.35';
// $SAP_Port='50000';

define('BASE_URL', 'http://192.168.1.30:8082/API/SAP/'); // Live server Query Based API Base URL
$SAP_URL='https://192.168.1.32';
$SAP_Port='50000';

// UserName='.$_SESSION['Baroque_eMail'].'&

// ----------- Query Based API URL Start Here ----------------------------------------------------
	$USERID_APi=BASE_URL.'USERID?EMPID=';

	$OPNTRANSAMPINTMTN_API=BASE_URL.'OPNTRANSAMPINTMTN?UserName='.$_SESSION['Baroque_eMail'].'&DocEntry=';
	$SAMINTSTYPE_API=BASE_URL.'SAMINTSTYPE';
	$SAMINTTRBY_API=BASE_URL.'SAMINTTRBY';
	$INWARDQCSERIES_API=BASE_URL.'INWARDQCSERIES?ObjectCode=';
	$SAMPLEINTMUNDERTEST_API=BASE_URL.'SAMPLEINTMUNDERTEST';
	$SAMINTCONTAINERSELECTION_API=BASE_URL.'SAMINTCONTAINERSELECTION';
	$INVENTRANSFER_API=BASE_URL.'INVENTRANSFER?DocEntry=';
	$INVTRANSBATCH_API=BASE_URL.'INVTRANSBATCH';
	$SAMPLECOLLECTION_API=BASE_URL.'SAMPLECOLLECTION?UserName='.$_SESSION['Baroque_eMail'];
	$SAMPLECOLL_API=BASE_URL.'SAMPLECOLL';
	$CONTCOLLSEL_API=BASE_URL.'CONTCOLLSEL'; // all popup container selection list called this API
	$INWARDQCPOSTDOC_API=BASE_URL.'INWARDQCPOSTDOC?UserName='.$_SESSION['Baroque_eMail'];
	$INWARDQCPOSTROWDETAILS_API=BASE_URL.'INWARDQCPOSTROWDETAILS';
	$SAMPLECOLLGOODSISSUE_API=BASE_URL.'SAMPLECOLLGOODSISSUE?DocEntry='; // Sample collection (Reverse sample Issue) Punch
	$dropdownMaster_API=BASE_URL.'VALIDVALUES';

	$GRQCPOSTINWARD_APi=BASE_URL.'GRQCPOSTINWARD';
	$GRSAMPLEINTIINWARD_APi=BASE_URL.'GRSAMPLEINTIINWARD';
	$GRSAMPLECOLINWARD_APi=BASE_URL.'GRSAMPLECOLINWARD';
	$QCPOSTQSDONEBYDROPDOWN_APi=BASE_URL.'QCPOSTQSDONEBYDROPDOWN';
	$QCPOSTGDINSTRUMENTDROPDOWN_APi=BASE_URL.'QCPOSTGDINSTRUMENTDROPDOWN';
	$QCPOSTDOCAPPROVEDBYDROPDOWN_APi=BASE_URL.'QCPOSTDOCAPPROVEDBYDROPDOWN'; // QC Approved By List
	// $QCPOSTQSDONEBYDROPDOWN_APi=BASE_URL.'QCPOSTQSDONEBYDROPDOWN'; // QC Done By List

	$SAMPLECOLLEXTENALINWARD_APi=BASE_URL.'SAMPLECOLLEXTENALINWARD';

	$SAMPLECOLLEXTRAINWARD_APi=BASE_URL.'SAMPLECOLLEXTRAINWARD';


// ReTest QC API Define Here...
	$GRSAMPLECOLLRETEST_APi=BASE_URL.'GRSAMPLECOLLRETEST';
	$INWARDSAMPCOLARNOUPDATE_APi=BASE_URL.'INWARDSAMPCOLARNOUPDATE';
	
	$RETESTQCSAMPLEINTIMATIONVIEW_API=BASE_URL.'RETESTQCSAMPLEINTIMATIONVIEW?UserName='.$_SESSION['Baroque_eMail'];  // Sample Intimation Retest QC All list & Single Recored API
	$RETESTQCSAMPLEINTIMATIONAFTERADD_API=BASE_URL.'RETESTQCSAMPLEINTIMATIONAFTERADD'; // Sample Intimation Retest QC After Add Data
	$RETESTQCSAMPLEINTIMATIONCONTSEL_API=BASE_URL.'RETESTQCSAMPLEINTIMATIONCONTSEL'; // Container List API According Item
	$RETESTQCSAMPLECOLLVIEW_API=BASE_URL.'RETESTQCSAMPLECOLLVIEW?UserName='.$_SESSION['Baroque_eMail'];//Open Trasaction for Sample Collection Retest-QC Listing and get Single Data
	$RETESTQCSAMPCOLLADD_API=BASE_URL.'RETESTQCSAMPCOLLADD'; // Sample Collection - Retest QC List , Single data and Search API

// Production QC -Route Stage API Define Here...

	$ROUTESTAGEOPENTRANS_API=BASE_URL.'ROUTESTAGEOPENTRANS?UserName='.$_SESSION['Baroque_eMail']; //Sample Intimation list and single data API
	$ROUTESTAGESAMPLEINTIMATIONADD_API=BASE_URL.'ROUTESTAGESAMPLEINTIMATIONADD'; //Sample Intimation list After addedand single data API
	$RSSAMPLECOLLECTIONVIEW_API=BASE_URL.'RSSAMPLECOLLECTIONVIEW?UserName='.$_SESSION['Baroque_eMail']; //Sample Collection list and Single data API
	$RSSAMPCOLLADD_API=BASE_URL.'RSSAMPCOLLADD'; //Sample Collection - Route/Stage list after added and single data API

// Stability Plan API Define Here...

	// $STABILITYPLANLISTOFITEMS_API=BASE_URL.'STABILITYPLANLISTOFITEMS'; // Item dropdown and Singel Item details API
	$STABILITYITEMLIST_API=BASE_URL.'STABILITYITEMLIST'; // Item dropdown and Singel Item details API
	
	$STABILITYPLANSTYPE_API=BASE_URL.'STABILITYPLANSTYPE'; // Stability Type list API
	$STABILITYPLANSCONDITION_API=BASE_URL.'STABILITYPLANSCONDITION'; // Stability Condition & Time Period List API based on Stability Type
	
	$STABILITYBATCHNO_API=BASE_URL.'STABILITYBATCHNO'; // Batch List based on Item Code
	$STABILITYBATCHNOLIST_API=BASE_URL.'STABILITYBATCHNOLIST'; // Batch List based on Item Code
	$STABILITYPLANSSTATION_API=BASE_URL.'STABILITYPLANSSTATION'; // row level station no list API

// Open Trasaction For Stability Check
	$OPENTRANSQCDOCSTABILITY_API=BASE_URL.'OPENTRANSQCDOCSTABILITY?UserName='.$_SESSION['Baroque_eMail'];

// Open Transaction For Sample Intimation Stability
	$OPENTRANSSAMPINTSTABILITY_API=BASE_URL.'OPENTRANSSAMPINTSTABILITY?UserName='.$_SESSION['Baroque_eMail']; // All Record and Single Data Get Using Some Parameter API

// Sample Intimation (Transfer Request) - Stability (After Add)
	$STABSAMPINTIAFTERADD_API=BASE_URL.'STABSAMPINTIAFTERADD';
	$STABILITYSAMINTICONTSEL_API=BASE_URL.'STABILITYSAMINTICONTSEL'; // Sample Intimation stability- inventroy transfer contener data API

// Open Transaction For Sample Collection Stability 
	$OPENTRANSSAMPCOLSTABILITY_API=BASE_URL.'OPENTRANSSAMPCOLSTABILITY?UserName='.$_SESSION['Baroque_eMail']; //Open Transaction for Sample Collection - Stability list API
	$STABSAMPCOLAFTERADD_API=BASE_URL.'STABSAMPCOLAFTERADD'; //sample collection stability list , filter and single record API
	
// Open trasaction for QC check finish good

	$FGQCPOSTDOC_API=BASE_URL.'FGQCPOSTDOC?UserName='.$_SESSION['Baroque_eMail'];
// ====================== Query Based API URL End Here ==========================================================================


// ====================== Service Layer API URL Start Here ======================================================================
	$API_Login='EmployeesInfo'; // Portal User login API

	$API_SINTIMATION='SCS_SINTIMATION';
	$API_InventoryGenEntries='InventoryGenEntries';
	$API_PurchaseDeliveryNotes='PurchaseDeliveryNotes';
	$SCS_ARSE_APi='SCS_ARSE';
	
	$API_StockTransfers='StockTransfers'; // sample intimation Inventory transfer
	$API_SCS_SINTIMATION='SCS_SINTIMATION'; // sample intimation Under Test Inventory transfer
	$API_SCS_INGREDIENT='SCS_INGREDIENT?$select=Code,Name&$orderby=Code'; // Ingrediant Type List API
	$API_SCS_SCOL='SCS_SCOL'; // Open Transaction For Sample Collection Successfully Added
	$API_SCS_OROUTPUT='OROUTPUT?$select=Code,Name&$orderby=Code'; // Ingrediant Type List API
	$API_InventoryGenExits='InventoryGenExits'; // sampe collection (Goods Issue) punch API
	$API_InventoryGenEntries='InventoryGenEntries'; // sample collection (Reverse sample issue) Punch API 
	$API_BusinessPartners="BusinessPartners"; // Business Partners list API (Supplier List)
	$API_Warehouses="Warehouses"; // Warehouses list API (Supplier List)

// ReTest QC API Define Here...

	$SCS_SIRETEST_API='SCS_SIRETEST';  // Sample Intimation Retest QC Add API
	$GRSAMPLEINTIRETEST_APi='GRSAMPLEINTIRETEST';
	$SCS_SCRETEST_API='SCS_SCRETEST';  // Sample Collection Retest QC Add API

// Production QC -Route Stage API Define Here...

	$SCS_SIRSTAGE_API='SCS_SIRSTAGE'; // Sample Intimation (Transfer Request) - Route Stage Generate
	$SCS_SCRSTAGE_API='SCS_SCRSTAGE'; // Sample Collection Route Stage Add

// Stability Plan API Define Here...
	$SCS_ANALYSIS_API='SCS_ANALYSIS?$select=Code,Name&$orderby=Code';
	$SCS_STAB_API='SCS_STAB';

	$SCS_SISTAB_API='SCS_SISTAB';

// Open Transaction For Sample Collection Stability 
	$SCS_SCOLSTAB_API='SCS_SCOLSTAB';
// ----------- Service Layer API URL End Here ----------------------------------------------------


// ================================******************=========================================================================


// --------------------------------------------------krishna---------------------------------------------

$INWARDQCPOSTDOCUMENTDETAILS=BASE_URL.'INWARDQCPOSTDOCUMENTDETAILS';
$assay_Calculation_Based_On=BASE_URL.'VALIDVALUES?TableId=@SCS_QCPD&Alias=AsyCal';
$SAMINTTRBY_APIURL=BASE_URL.'SAMINTTRBY';
$api_SCS_QCPD='SCS_QCPD';
$api_OQCSTATUS=$SAP_URL.':'.$SAP_Port.'/b1s/v1/OQCSTATUS?$select=Code,Name&$orderby=Code';

$RETESTQCPOSTDOC=BASE_URL.'RETESTQCPOSTDOC?UserName='.$_SESSION['Baroque_eMail'];
$RETESTQCPOSTROWDETAILS=BASE_URL.'RETESTQCPOSTROWDETAILS';
$SCS_QCRETEST='SCS_QCRETEST';
$RETESTQCPOSTDOCUMENTCONTSEL=BASE_URL.'RETESTQCPOSTDOCUMENTCONTSEL';
$RETESTQCPOSTDOCUMENTDETAILS=BASE_URL.'RETESTQCPOSTDOCUMENTDETAILS';

$RETESTQCSAMPLECOLLCONTSEL=BASE_URL.'RETESTQCSAMPLECOLLCONTSEL';

$InventoryGenExits=$SAP_URL.':'.$SAP_Port.'/b1s/v1/InventoryGenExits';
$_InventoryGenEntries=$SAP_URL.':'.$SAP_Port.'/b1s/v1/InventoryGenEntries';

$BATCHDETAILS=BASE_URL.'BATCHDETAILS';

// =============Producttion=============================

$INPROCESSOPENSAMPLEINTIMATION=BASE_URL.'INPROCESSOPENSAMPLEINTIMATION?UserName='.$_SESSION['Baroque_eMail'];

$INWARDQCSERIES=BASE_URL.'INWARDQCSERIES?ObjectCode=';
$VALIDVALUES=BASE_URL.'VALIDVALUES';

$INPROCESSSAMINTTRBY=BASE_URL.'INPROCESSSAMINTTRBY';
$SCS_SINPROCESS='SCS_SINPROCESS';
$INPROCESSSAMPLEINTIMATIONADD=BASE_URL.'INPROCESSSAMPLEINTIMATIONADD';

$INPROCESSSAMINTICONTSEL=BASE_URL.'INPROCESSSAMINTICONTSEL';
$SCS_SCINPROCESS=BASE_URL.'SCS_SCINPROCESS';

$INPROCESSSAMPCOLLADD=BASE_URL.'INPROCESSSAMPCOLLADD';
$INPROCESSSAMCOLLCONTSEL=BASE_URL.'INPROCESSSAMCOLLCONTSEL';
$SCS_SCINPROC='SCS_SCINPROC';

$INPROCESSQCPOSTDOC=BASE_URL.'INPROCESSQCPOSTDOC?UserName='.$_SESSION['Baroque_eMail'];
$INPROCESSQCPOSTDOCUMENTDETAILS=BASE_URL.'INPROCESSQCPOSTDOCUMENTDETAILS';

$assay_Calculation_VALIDVALUES_On=BASE_URL.'VALIDVALUES?TableId=@SCS_QCINPROC&Alias=PC_AsyCal';
$FGSAMPCOLLADD=BASE_URL.'FGSAMPCOLLADD';
$FGSAMCOLLCONTSEL=BASE_URL.'FGSAMCOLLCONTSEL';
$SCS_SCOLFG=BASE_URL.'SCS_SCOLFG';
$SCS_SINTIFG=BASE_URL.'SCS_SINTIFG';

$FGSAMPLEINTIMATIONDETAILS=BASE_URL.'FGSAMPLEINTIMATIONDETAILS';
$FGSAMINTICONTSEL=BASE_URL.'FGSAMINTICONTSEL';

$FGQCPOSTDOCUMENTDETAILS=BASE_URL.'FGQCPOSTDOCUMENTDETAILS';
$RouteStages='RouteStages';
$assay_Calculation_FG_VALIDVALUES_On=BASE_URL.'VALIDVALUES?TableId=@SCS_QCPDFG&Alias=PC_AsyCal';

$FGQCCHECKCONTSEL=BASE_URL.'FGQCCHECKCONTSEL';
$FGOPENTRANSSAMINTIMATION=BASE_URL.'FGOPENTRANSSAMINTIMATION?UserName='.$_SESSION['Baroque_eMail'];

$INPROCESSSAMPLECOLLECTIONVIEW=BASE_URL.'INPROCESSSAMPLECOLLECTIONVIEW?UserName='.$_SESSION['Baroque_eMail'];
$SCS_QCINPROC='SCS_QCINPROC';

$SCS_SINTIFG_API='SCS_SINTIFG';

$FGSAMPLECOLLECTIONVIEW=BASE_URL.'FGSAMPLECOLLECTIONVIEW?UserName='.$_SESSION['Baroque_eMail'];
$SCS_SCOLFG_API='SCS_SCOLFG';
$INPROCESSQCPOSTDOCUMENTCONTSEL=BASE_URL.'INPROCESSQCPOSTDOCUMENTCONTSEL';

// ===========================stability krishna=====================
$SCS_SCOLSTAB='SCS_SCOLSTAB';

$STABILITYSAMCOLLCONTSEL=BASE_URL.'STABILITYSAMCOLLCONTSEL';

$SCS_QCPDFG_API='SCS_QCPDFG';

$SCS_SCINPROCESS='SCS_SCINPROCESS';

// ====================Route/Stage=======================
$API_RSQCPOSTDOC=BASE_URL.'RSQCPOSTDOC?UserName='.$_SESSION['Baroque_eMail'];
$assay_Calculation_FG_VALIDVALUES_On_routeStage=BASE_URL.'VALIDVALUES?TableId=@SCS_QCRSTAGE&Alias=PC_AsyCal';
$SCS_QCRSTAGE='SCS_QCRSTAGE';
$RSQCPOSTDOCUMENTDETAILS=BASE_URL.'RSQCPOSTDOCUMENTDETAILS';

// =======================
$assay_Calculation_VALIDVALUES_On_Stability=BASE_URL.'VALIDVALUES?TableId=@SCS_QCSTAB&Alias=PC_AsyCal';

$STABILITYQCPOSTDOCCONTSEL=BASE_URL.'STABILITYQCPOSTDOCCONTSEL';
$SCS_QCSTAB='SCS_QCSTAB';
// https://10.80.4.35:50000/b1s/v1/SCS_QCSTAB
$STABQCPOSTDOCUMENTDETAILS=BASE_URL.'STABQCPOSTDOCUMENTDETAILS';

// http://192.168.1.30:8082/api/sap/STABQCPOSTDOCUMENTDETAILS
// https://10.80.4.35:50000/b1s/v1/SCS_QCSTAB