<?php
require("isdk.php");  
session_start();
include "Barcode39.php";
include "config.php";
require_once('class.phpmailer.php');
//if(isset($_SESSION["products"]))
//{

//	$result;

//}
 if(!$_SESSION["email"])
{
header('Location: index.php');
} 
$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
   echo 'getconnected'; 
   
   $id=$_SESSION['contactId'];
  //$conDat = array('ShipStreet1' => 'John',
//		'ShipPhone'  => '9322307912',
//		'ShipZip'     => '421503');
	//  $conID = $app->dsAdd("Job", $conDat);
	//echo $grpID;
	
	  $returnFields = array('Contact.FirstName','Contact.Email','Contact.Phone1','Contact.StreetAddress1','Contact.PostalCode','Contact.State','Contact.City');
    $query = array('ContactID' => $id);
    $contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
    
    $arr=$contactgroupassign[0];
	  
   	//$data =$app->getAffiliatesByProgram((Int)1);
   	//print_r($data);
  	//print_r($data['affiliateId']);
  	
  	//$affiliateId = 36;
	//$links = $app->getRedirectLinksForAffiliate($affiliateId);
	//print_r['$links'];
        
  	//$programs = $app-> getAffiliatePrograms();
  	//print_r($programs);
        
	// $programs = $app -> getProgramsForAffiliate((Int)0);
   	// print_r($programs);
   	
   	// $result = $app -> getResourcesForAffiliateProgram((Int)1);
   	// print_r($result);
   
   	$id=$_SESSION['contactId'];
   
   	$dateObj = date(' d-m-Y');
   	$oDate = $app->infuDate("$dateObj");
  	$invoiceId = $app->blankOrder($id,"Online Order Details", $oDate, 0, 0);
  	echo $invoiceId;
   	
  	 $result = $app->addOrderItem($invoiceId, 17, 4, 800.00, 1, "Online Order Details5", "Order Details ka principle hu main");
   	echo $result;
   	
  	$currentDate = date("d-m-Y");
  	$pDate = $app->infuDate($currentDate);
 	$result = $app->manualPmt($invoiceId,8780.00, $pDate, 'Credit Card', '8780.00 paid by Credit Card', false);
   	
   	
   	
   	$grp = array('ShipFirstName' => $arr['Contact.FirstName'],
   	'ShipStreet1' => $arr['Contact.StreetAddress1'],
		'ShipPhone'  => $arr['Contact.Phone1'],
		'ShipZip'     => $arr['Contact.PostalCode'],
   	'ShipCity' => $arr['Contact.City'],
   	'ShipState' => $arr['Contact.State'],
   	'ShipCountry' =>'India'
   	);
	$grpID = $invoiceId;
	$grpID = $app->dsUpdate("Job", (int)$grpID, $grp);
	
$content='<html>
  <head>
  </head><body>
  <table id="mainTable" style="width: 650px;">
    <tbody>
      <tr>
        <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
        12px;color: #000000;">
          <table style="width: 100%;">
            <tbody>
              <tr>
                <td nowrap="nowrap" style="font-family: Tahoma, Arial,
                Verdana, sans-serif;font-size: 12px;color: #000000;">
                  <img alt="Logo" border="0" src="https://ad129.infusionsoft.com/Logo" />
                <br />
                <br />
                ~Company.HTMLMailingAddressBlock~
                <br />
                <!--~Company.Phone1~-->
              </td><td align="right" valign="top" style="font-family: Tahoma,
                Arial, Verdana, sans-serif;font-size: 12px;color: #000000;">
                <h1 style="margin: 1px;color: #000000;">
                  Invoice
                </h1>
                <table cellpadding="5" cellspacing="0" id="infoTable" style="border: solid
                #000000 1px;">
                  <tbody>
                    <tr>
                      <td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                        Date
                      </td><td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                      Invoice #
                      </td>
                    </tr>
                    <tr>
                      <td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                        '.$currentDate.'
                      </td><td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                      '.$invoiceId.'
                      </td>
                    </tr>
                  </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <tr>
                  <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                  sans-serif;font-size: 12px;color: #000000;height: 15px;">
                  </td>
                </tr>
                <tr>
                  <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
                  12px;color: #000000;">
                    <table cellpadding="0" cellspacing="0" style="width: 100%;">
                      <tbody>
                        <tr>
                          <td width="200" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                            TO:
                          </td><td width="200" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                          SHIP TO:
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table style="width: 100%;">
                      <tbody>
                        <tr>
                          <td width="50%" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                          '.$arr['Contact.FirstName'].'<br />
                             '.$arr['Contact.StreetAddress1'].'<br />
                             <!--'.$arr['Contact.Phone1'].'<br />-->
                '.$arr['Contact.City'].'<br />
                '.$arr['Contact.PostalCode'].'<br />
                '.$arr['Contact.State'].'<br />
                
                          </td><td width="50%" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                          '.$arr['Contact.FirstName'].'<br />
                          '.$arr['Contact.StreetAddress1'].'<br />
                          '.$arr['Contact.Phone1'].'<br />
                '.$arr['Contact.City'].'<br />
                '.$arr['Contact.PostalCode'].'<br />
                '.$arr['Contact.State'].'<br />
                '.$arr['Contact.Country'].'<br />
                
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  </tr>
                    <tr>
                      <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                      sans-serif;font-size: 12px;color: #000000;height: 15px;">
                      </td>
                    </tr>
                    <tr>
                      <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
                      12px;color: #000000;">
                        <table id="purchasesTable" cellpadding="0" cellspacing="0" style="width: 100%;">
                          <tbody>
                            <tr id="purchaseRowsHeader">
                              <th class="col1" style="width: 20%;vertical-align:
                              top;font-size: 15px;padding: 5px;background-color: #000000;color:
                              #ffffff;padding-right: 1px;padding-left: 3px;text-align: left;">
                                Qty
                              </th><th class="col2" style="width: 50%;vertical-align:
                              top;font-size: 15px;padding: 5px;background-color: #000000;color:
                              #ffffff;padding-right: 1px;padding-left: 3px;">
                              Description
                              </th><th class="col3" style="width: 15%;vertical-align:
                              top;font-size: 15px;padding: 5px;background-color: #000000;color:
                              #ffffff;padding-right: 1px;padding-left: 3px;text-align: right;">
                              Unit Price
                              </th><th class="col4" style="width: 15%; font-size:
                              15px;padding: 5px;background-color: #000000;color: #ffffff;padding-right:
                              1px;padding-left: 3px;width: 100px;text-align: right;">
                              Total
                              </th>
                            </tr>
                            <?php for($i=0;$i<count(($_SESSION["products"]))
                            <tr>
                              <td colspan="4" style="font-family: Tahoma, Arial, Verdana,
                              sans-serif;font-size: 12px;color: #000000;padding-left:
                              3px;">                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; THE SECRET MILLIONAIRE BLUEPRINT SEMINAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.8780.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. 8780.00 <br /> <b>Total Purchases</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 8780.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      </tr>
                        <tr>
                          <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;height: 15px;">
                          </td>
                        </tr>
                        <tr>
                          <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
                          12px;color: #000000;">
                            <h2 class="type-header" style="background-color: #000000;color:
                            #FFFFFF;margin-bottom: 2px;font-size: 15px;padding: 5px;">
                              Payments Made
                            </h2>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$currentDate.' ""&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit Card/Debit Card - PAID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.8780.00
                           <br /><b>Total Payment & Adjustments</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 8780.00</td>
                          </tr>
                            <tr>
                              <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                              sans-serif;font-size: 12px;color: #000000;height: 15px;">
                              </td>
                            </tr>
                            <tr>
                              <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
                              12px;color: #000000;">
                                <h2 class="type-header" style="background-color: #000000;color:
                                #FFFFFF;margin-bottom: 2px;font-size: 15px;padding: 5px;">
                                  Payments Due
                                </h2>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$currentDate.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Current&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.00.00
                              <br />
                            <b>OutstandingBalance</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 0.00 <br />
                              <b>Balance Due Now</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 0.00</td>
                              </tr>
                              </tbody>
                              </table>
                                <p class="spacer" style="font-family: Tahoma, Arial, Verdana, sans-serif;color:
                                #000000;height: 15px;">
                                </p>
                                <p style="font-family: Tahoma, Arial, Verdana, sans-serif;color: #000000;">
                                  Thanks,<br />
                                  Arfeen Khan
                                </p>
                              </body>
                              </html>';

//$tmpId = $app->createEmailTemplate(
     //     "This is my template",
    //      1, //Made public
    //    $auto_from,
      //    "~Contact.Email~",
     //     "",
     //   "",
     //    "HTML",
     //     "My Test Email",
     //     $content,
     //    "This is my test body");
  
 // echo $tmpId;
 $mail=$app->updateEmailTemplate(5205, $arr['Contact.FirstName'], 'Broadcasts', 'Arfeen Khan<arfeenkhan@arfeenkhan.com>',"~Contact.Email~", 'harsh@arfeenkhan.com,ajay@arfeenkhan.com', '', 'The Secret Millionaire Blueprint Seminar-Invoice', '', $content, 'HTML','Contact');
     
     echo $mail;
     
    
     
    // $clist = array(11); 
//	$status = $app->sendEmail($clist,"singh.ashutosh611@gmail.com","~Contact.Email~", "","","Text","Test Subject","","This is the body");

	$send=$app->sendTemplate(array($id), 5205);
	echo $send;

	
   //     $dateObj = date(' d-m-Y');
   //	$oDate = $app->infuDate("$dateObj");
  //	$invoiceId = $app->blankOrder( $contactId,"COD Order Details", $oDate, 0, 0);
   	
   	
   	
   //	 $result = $app->addOrderItem($invoiceId, 7, 4, 2500.00, 1, "COD Order Details", "Order Details ka principle hu main");
   	
  //	$currentDate = date("d-m-Y");
//	$pDate = $app->infuDate($currentDate);
//	$result = $app->manualPmt($invoiceId, 2500.00, $pDate, 'Cash On Delivery', '2500.00 paid by COD', false);
   	
   //	$grp = array('ShipFirstName' => $arr['Contact.FirstName'],'ShipStreet1' => $add,
//		'ShipPhone'  => $arr['Contact.Phone1'],
//		'ShipZip'     => $arr['Contact.PostalCode'],
   //	'ShipCity' => $arr['Contact.City'],
   //	'ShipState' => $arr['Contact.State'],
   //	'ShipCountry' =>'India'
   //	);
//	$grpID = $invoiceId;
//	$grpID = $app->dsUpdate("Job", (int)$grpID, $grp);
   
   	// $result = $app->addOrderItem($invoiceId, 4, 4, 2500.00, 1, "Order Details", "Order Details ka principle hu main");
   //	echo $result;
  //	$currentDate = date("d-m-Y");
//	$pDate = $app->infuDate($currentDate);
//	$result = $app->manualPmt($invoiceId, 2500.00, $pDate, 'Credit Card', '2500.00 paid by Credit Card', false);
   
  // $dateObj = date(' d-m-Y');
   
  // $oDate = $app->infuDate("$dateObj");
  // $invoiceId = $app->blankOrder(11,"Noobde hai re tu chhedi", $oDate, 0, 0);

 //   echo $invoiceId;

   //  $result = $app->addOrderItem($invoiceId, 4, 4, 2500.00, 2, "Noobde hai tu", "Noobde ke school ka principle hu main");

   //    echo $dateObj;


header("location: thankyouonline2.php");
}

?>