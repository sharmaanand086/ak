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
   //echo 'getconnected'; 
   
   $id=$_SESSION['contactId'];
  //$conDat = array('ShipStreet1' => 'John',
//		'ShipPhone'  => '9322307912',
//		'ShipZip'     => '421503');
	//  $conID = $app->dsAdd("Job", $conDat);
	//echo $grpID;
	
	$returnFields = array('Contact.FirstName','Contact.Email','Contact.Phone1','Contact.StreetAddress1','Contact.PostalCode','Contact.State','Contact.City');
    $query = array('ContactID' => $id);
    $contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
    
    $arr = $contactgroupassign[0];
	  
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
   
   
	 $productDetail = "";
   	 if ( isset($_SESSION['products']) ) 
	 {
			$productDetail .= '<table width="100%" >';
		 	for ($i=0; $i < count($_SESSION['products']) ; $i++) 
			 {
			 	 $product = $_SESSION['products'][$i];
				
				 $productDetail .= '
				 	<tr>
		              	<td width="20%" >'.$product["qty"].'</td>
		              	<td width="50%" >'.$product["name"].' - '.$product["cat"].'</td>
		              	<td width="12%" >Rs. '.$product["price"].'</td>
		              	<td width="12%" >Rs. '.( intVal($product["qty"]) * intVal($product["price"]) ).'</td>
		             <tr>';
			 }
			 
			 $productDetail .= '<tr>
			 						<th colspan="3" align="left" >Total Purchases</th>
			 						<th align="right" valign="center" >Rs. '.$_SESSION["total"].'</th>
			 					</tr>';
			 
			 $productDetail .= '</table>';
			 
	 }
   
   
   	$dateObj = date(' d-m-Y');
   	$oDate = $app->infuDate("$dateObj");
  	$invoiceId = $app->blankOrder($id,"Online Product Order On Arfeenkhan.com", $oDate, 0, 0);
  	//echo $invoiceId;
   	
   	if ( isset($_SESSION['products']) ) 
				 {
					for ($i=0; $i < count($_SESSION['products']) ; $i++) 
					{
						$product 		= $_SESSION['products'][$i];
						$addOrderItem[] = $app->addOrderItem($invoiceId, $product['infu_product_id'], 4, doubleval( $product['price']), intVal($product['qty']),' Short Description : '.$product['name'].' - '.$product["cat"], 'Description : '.$product['name'].' - '.$product["cat"] );	
					}
				 }		 	
			  	 
				 
  	// $result = $app->addOrderItem($invoiceId, 17, 4, 800.00, 1, "Online Order Details5", "Order Details ka principle hu main");
   	//echo $result;
   	
   	$currentDate 	= date("d-m-Y");
	$pDate		 	= $app->infuDate($currentDate);
	$result 		= $app->manualPmt( $invoiceId , doubleval( $_SESSION["total"] ) , $pDate, $_SESSION['cardtype'] , $_SESSION["total"].' paid by '.$_SESSION['cardtype'], false);
			   	
   	
 	//$result = $app->manualPmt($invoiceId,8780.00, $pDate, 'Credit Card', '8780.00 paid by Credit Card', false);
   	
 	  	
   	
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
	
	
	 
	/* for ($i=0; $i < count($_SESSION['products']) ; $i++) 
	 {
	 	 $product = $_SESSION['products'][$i];
		 var_dump($product['name']);
		$productDetail .= '
		 
		 <tr>
              <td colspan="4" style="font-family: Tahoma, Arial, Verdana,
                              sans-serif;font-size: 12px;color: #000000;padding-left:
                              3px;">                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product["qty"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product["name"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product["price"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.( intVal($product["qty"]) * intVal($product["price"]) ).' <br /> <b>Total Purchases</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.( intVal($product["qty"]) * intVal($product["price"]) ).'</td>
                            </tr>';
     }
	 * */
	 
	 



	
	 
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
                514 Crystal Paradise,<br/>
                Off. Veera Desai Road,<br/> 
				Andheri (West), <br/>
				Mumbai 400053 
				<br />
                Phone: (+91) 91676 30896
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
                      Order No
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
                            <tr>
                            <td colspan="4" >
                            '. $productDetail.'
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
                            <h2 class="type-header" style="background-color: #000000;color:
                            #FFFFFF;margin-bottom: 2px;font-size: 15px;padding: 5px;">
                              Payments Made
                            </h2>
                            <table width="100%" >
                            	<tr>
                            		<td width="30%" > '.$currentDate.' </td>
                            		<td width="50%" > '.$_SESSION['cardtype'].' - PAID </td>
                            		<td width="20%" >Rs. '.$_SESSION["total"].'</td>
                            	</tr>
                            	<tr>
                            		<th colspan="2" align="left" > Total Payment & Adjustments </th>
                            		<th width="20%" align="right" >Rs. '.$_SESSION["total"].'</th>
                            	</tr>
                            </table>
                            </td>
                          </tr>
                            <tr>
                              <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                              sans-serif;font-size: 12px;color: #000000;height: 15px;">
                              </td>
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
 $mail=$app->updateEmailTemplate(5205, $arr['Contact.FirstName'], 'Broadcasts', 'Arfeen Khan<arfeenkhan@arfeenkhan.com>',"~Contact.Email~", 'ajay@arfeenkhan.com,salman@arfeenkhan.com,harsh@arfeenkhan.com' , '', 'New Order On Arfeenkhan.com-Invoice', '', $content, 'HTML','Contact');
 $send=$app->sendTemplate(array($id), 5205);
	
	/*$mail=$app->updateEmailTemplate(5205, $arr['Contact.FirstName'], 'Broadcasts',  'Arfeen Khan<arfeenkhan@arfeenkhan.com>',  "~Contact.Email~", 'harsh@arfeenkhan.com',"ajay@arfeenkhan.com, mobin.t3office@gmail.com" , 'New Order On Arfeenkhan.com-Invoice', '', $content, 'HTML', 'Contact');
	$send=$app->sendTemplate(array($id), 5205);	
	*/
	
	
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

header("location: ThankYou.php");
}

?>