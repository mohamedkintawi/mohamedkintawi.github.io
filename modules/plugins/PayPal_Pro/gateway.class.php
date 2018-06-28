<?php
class Gateway {
	private $_module;
	private $_basket;

	private $_wpp;
	private $_result;
	private $_lang;

	public function __construct($module = false, $basket = false) {
		$this->_module	= $module;
		$this->_basket =& $GLOBALS['cart']->basket;
		
		include (CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.'PayPal_Pro'.CC_DS.'website_payments_pro.class.php');
		$this->_wpp		= new Website_Payments_Pro($this->_module);
		
		$this->_centinel_maps	= ($this->_module['gateway']) ? 'paypal.cardinalcommerce.com/maps/txns.asp' : 'centineltest.cardinalcommerce.com/maps/txns.asp';
		
		$GLOBALS['language']->loadDefinitions('paypal_pro', CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.'PayPal_Pro'.CC_DS.'language', 'module.definitions.xml');
		$this->_lang = $GLOBALS['language']->getStrings('paypal_pro');
		
	}

	##################################################

	public function transfer() {
		switch ($this->_module['wpp_mode']) {
			case 'DP':		## Direct Payments
				$transfer	= array(
					'action'	=> currentPage(),
					'method'	=> 'post',
					'submit'	=> 'form',
					'target'	=> '_self',
				);
				break;
			case 'MP':
			default:		## Marque Payments
				$this->_wpp->SetExpressCheckout();
				$transfer	= array(
					'action'	=> $this->_wpp->GetTargetUrl(),
					'method'	=> 'post',
					'submit'	=> 'automatic',
					'target'	=> '_self',
				);
				break;
			case 'HP':		## Hosted Payments
				$transfer	= array(
					'action'	=> null, // This is found later
					'method'	=> 'post',
					'submit'	=> 'iframe',
					'target'	=> '_self',
				);
				break;
		}
		return $transfer;
	}

	public function repeatVariables() {
		return false;
	}

	public function fixedVariables($hosted_iframe = false) {
		if($hosted_iframe) {
			
			$state = ($this->_basket['billing_address']['country_iso']=='US' || $this->_basket['billing_address']['country_iso']=='CA') ? $this->_basket['billing_address']['state_abbrev'] : $this->_basket['billing_address']['state'];
			
			return array(
				'subtotal' 		=> $this->_basket['total'],
				'invoice' 		=> $this->_basket['cart_order_id'],
				'paymentaction' => strtolower($this->_module['paymentAction']),
				'currency_code' => $GLOBALS['config']->get('config', 'default_currency'),
				'buyer_email' 	=> $this->_basket['billing_address']['email'],
				'first_name' 	=> $this->_basket['billing_address']['first_name'],
				'last_name' 	=> $this->_basket['billing_address']['last_name'],
				'address1' 		=> $this->_basket['billing_address']['line1'],
				'address2' 		=> $this->_basket['billing_address']['line2'],
				'city' 			=> $this->_basket['billing_address']['town'],
				'state' 		=> $state,
				'zip' 			=> $this->_basket['billing_address']['postcode'],
				'country' 		=> $this->_basket['billing_address']['country_iso'],
				
				'billing_first_name' 	=> $this->_basket['billing_address']['first_name'],
				'billing_last_name' 	=> $this->_basket['billing_address']['last_name'],
				'billing_address1' 		=> $this->_basket['billing_address']['line1'],
				'billing_address2' 		=> $this->_basket['billing_address']['line2'],
				'billing_city' 			=> $this->_basket['billing_address']['town'],
				'billing_state' 		=> $state,
				'billing_zip' 			=> $this->_basket['billing_address']['postcode'],
				'billing_country' 		=> $this->_basket['billing_address']['country_iso'],
					
				'showHostedThankyouPage' => 'false',
				'bn' 					=> 'CubeCart_Cart_HostedProUMP',
				'template' 				=> ($GLOBALS['gui']->mobile) ? 'mobile-iframe' : 'templateD',
				
				'return' 				=> $GLOBALS['storeURL'].'/index.php?_a=complete',
				'cancel_return' 		=> $GLOBALS['storeURL'].'/index.php?_a=gateway',
				'notify_url' 			=> $GLOBALS['storeURL'].'/index.php?_g=rm&type=plugins&cmd=call&module=PayPal_Pro'			
			);
			
		} else { 
			return array ('gateway'	=> 'PayPal_Pro_Direct');
		}
	}

	##################################################
	
	public function iframeURL() {
		return $this->_wpp->GetHostedUrl($this->fixedVariables(true));
	}
	
	public function iframeForm(){
		return false;
	}
	
	public function call() {
		 /* Sample return Data
		   [mc_gross] => 3.00
		   [invoice] => 110204-140118-8837
		   [protection_eligibility] => Eligible
		   [address_status] => confirmed
		   [item_number1] => 
		   [payer_id] => LAJ4A4YCNQCEL
		   [tax] => 0.00
		   [address_street] => 1 Main St
		   [payment_date] => 06:01:59 Feb 04, 2011 PST
		   [payment_status] => Completed
		   [charset] => windows-1252
		   [address_zip] => 95131
		   [mc_shipping] => 0.00
		   [mc_handling] => 0.00
		   [first_name] => Test
		   [mc_fee] => 0.39
		   [address_country_code] => US
		   [address_name] => Test User
		   [notify_version] => 3.0
		   [custom] => 
		   [payer_status] => verified
		   [business] => abrook_1296826860_biz@gmail.com
		   [address_country] => United States
		   [num_cart_items] => 1
		   [mc_handling1] => 0.00
		   [address_city] => San Jose
		   [verify_sign] => An5ns1Kso7MWUdW4ErQKJJJ4qi4-AXkkzDu540jNUQYPfPnj9xlCfWdp
		   [payer_email] => abrook_1219149812_per@gmail.com
		   [mc_shipping1] => 0.00
		   [txn_id] => 1FC10329AU620380S
		   [payment_type] => instant
		   [last_name] => User
		   [address_state] => CA
		   [item_name1] => A Product
		   [receiver_email] => abrook_1296826860_biz@gmail.com
		   [payment_fee] => 0.39
		   [quantity1] => 1
		   [receiver_id] => WT2L5CAWC6JKA
		   [txn_type] => cart
		   [mc_gross_1] => 3.00
		   [mc_currency] => USD
		   [residence_country] => US
		   [test_ipn] => 1
		   [transaction_subject] => Shopping Cart
		   [payment_gross] => 3.00
		*/
	
		$params['cmd']	= '_notify-validate';
		foreach ($_POST as $key => $value) {
			$params[$key]	= stripslashes($value);
		}
		## Set the request URL
		$url			= ($this->_module['testMode']) ? 'www.sandbox.paypal.com' : 'www.paypal.com';
		## Start a request object
		$request		= new Request($url, '/cgi-bin/webscr');
		$request->setSSL();
		$request->setHTTPVersion('1.1');
		$request->setData($params);
		## Send the request
		$data			= $request->send();
		
		## Get the Order ID
		$cart_order_id	= $_POST['invoice'];
		if (!empty($cart_order_id) && !empty($data)) {
			$order				= Order::getInstance();
			$order_summary		= $order->getSummary($cart_order_id);
			$transData['notes']	= array();
			switch ($data) {
				case 'INVALID':
					## If this is the response, then something is wrong with the callback
					$transData['notes'][]	= "Unspecified Error.";
					break;
				case 'VERIFIED':
					switch ($_POST['payment_status']) {
						case 'Completed':
							$transData['notes'][]	= "Payment successful. <br />Address: ".$_POST['address_status']."<br />Payer Status: ".$_POST['payer_status'];
							$order->paymentStatus(Order::PAYMENT_SUCCESS, $cart_order_id);
							$order->orderStatus(Order::ORDER_PROCESS, $cart_order_id);
							break;
						case 'Canceled_Reversal':
							$transData['notes'][]	= "This means a reversal has been canceled; for example, you, the merchant, won a dispute with the customer and the funds for the transaction that was reversed have been returned to you.";
							$order->paymentStatus(Order::PAYMENT_CANCEL, $cart_order_id);
							$order->orderStatus(Order::ORDER_CANCELLED, $cart_order_id);
							break;
						case 'Denied':
							$transData['notes'][]	= "You, the merchant, denied the payment. This will only happen if the payment was previously pending due to one of the following pending reasons.";
							$order->paymentStatus(Order::PAYMENT_DECLINE, $cart_order_id);
							$order->orderStatus(Order::ORDER_CANCELLED, $cart_order_id);
							break;
						case 'Failed':
							$transData['notes'][]	= "The payment has failed. This will only happen if the payment was attempted from your customer's bank account.";
							$order->paymentStatus(Order::PAYMENT_DECLINE, $cart_order_id);
							$order->orderStatus(Order::ORDER_DECLINED, $cart_order_id);
							break;
						case 'Pending':
							$transData['notes'][]	= "The payment is pending; see the pending_reason variable for more information. Please note, you will receive another Instant Payment Notification when the status of the payment changes to 'Completed', 'Failed', or 'Denied'.";
							$order->paymentStatus(Order::PAYMENT_PENDING, $cart_order_id);
							$order->orderStatus(Order::ORDER_PROCESS, $cart_order_id);
							break;
						case 'Refunded':
							$transData['notes'][]	= "You, the merchant, refunded the payment.";
							
							if(isset($_POST['payment_gross']) && !empty($_POST['payment_gross'])) { // Support for legacy PayPal code for USD
								$_POST['mc_gross'] = $_POST['payment_gross'];
							}
							
							if((string)$_POST['mc_gross']==(string)'-'.$order_summary['total']) { // Change status to refunded if it is a full refund
								$order->paymentStatus(Order::PAYMENT_CANCEL, $cart_order_id);
								$order->orderStatus(Order::ORDER_CANCELLED, $cart_order_id);
							}
							break;
						case 'Reversed':
							$transData['notes'][]	= "This means that a payment was reversed due to a chargeback or other type of reversal. The funds have been debited from your account balance and returned to the customer. The reason for the reversal is given by the reason_code variable.";
							$order->paymentStatus(Order::PAYMENT_CANCEL, $cart_order_id);
							$order->orderStatus(Order::ORDER_CANCELLED, $cart_order_id);
							break;
						default:
							$transData['notes'][]	= "Unspecified Error.";
							$order->paymentStatus(Order::PAYMENT_DECLINE, $cart_order_id);
							$order->orderStatus(Order::ORDER_DECLINED, $cart_order_id);
							break;
					}
					break;
			}

			## Has the PayPal transaction id already been processed?
			if (isset($_POST['txn_id']) && !empty($_POST['txn_id'])) {
				$trans_id	= $GLOBALS['db']->select('CubeCart_transactions', array('id'), array('trans_id' => $_POST['txn_id']));
				if ($trans_id) {
					$transData['notes'][]	= 'This Transaction ID has been processed before.';
				}
			}
			## Does the reciever email match the email in the module configuration?
			if (isset($_POST['receiver_email']) && trim($_POST['receiver_email']) !== trim($this->_module['email'])) {
				$transData['notes'][]	= "Recipient account didn't match specified PayPal account.";
			}
			## Build the transaction log data
			$transData['gateway']		= $_GET['module'];
			$transData['order_id']		= $cart_order_id;
			$transData['trans_id']		= $_POST['txn_id'];
			$transData['amount']		= $_POST['mc_gross'];
			$transData['status']		= $_POST['payment_status'];
			$transData['customer_id']	= $order_summary['customer_id'];
			$transData['extra']			= $_POST['pending_reason'];
			$order->logTransaction($transData);
		}
		return false;
	}

	public function process() {
		## Handle the return call from cardinal
		if ($this->_module['3ds_status'] && isset($_POST['PaRes'])) {
			## Centinel - do cmpi_authenticate
			$centinel = new CentinelClient($this->_module['3ds_merchant'], $this->_module['3ds_password'],'134-01');
			$centinel->add(array(
				'MsgType'			=> 'cmpi_authenticate',
				'TransactionType'	=> 'C',
				'TransactionId'		=> $GLOBALS['session']->get('TransactionId', 'centinel'),
				'PAResPayload'		=> $_POST['PaRes'],
			));
			$request	= $centinel->sendHttp($this->_centinel_maps, 5, 10);
			if ($request['ErrorNo'] == 0) {
				$GLOBALS['session']->set('AUTHSTATUS3DS', $request['PAResStatus'], 'centinel');
				$GLOBALS['session']->set('MPIVENDOR3DS', $GLOBALS['session']->get('Enrolled', 'centinel'), 'centinel');
				$GLOBALS['session']->set('CAVV', $request['Cavv'], 'centinel');
				$GLOBALS['session']->set('ECI', $request['EciFlag'], 'centinel');
				$GLOBALS['session']->set('XID', $request['Xid'], 'centinel');
				## DoDirectPayment
				$redirect_to = ($this->payment()) ? '?_a=complete' : '?_a=gateway';
			} else {
				## Set error messages
				$redirect_to	= '?_a=gateway';
			}
			$GLOBALS['session']->delete('','centinel');
			$GLOBALS['session']->delete('','PayPal_Pro_Direct');
		
			## Redirect, breaking out of the iframe
			echo sprintf('<script type="text/javascript">self.parent.location=\'%s\'</script>', $redirect_to);
			echo sprintf('<noscript><a href="%s" target="_parent">Please click to continue</a></noscript>', $redirect_to);
			return;
		}
		return false;
	}

	public function form() {
		
		## Form for direct payments
		$process_payment	= false;

		if (isset($_POST['direct']) && !empty($_POST['direct'])) {
			## Validation
			## Format card number - strip out anything that isn't a number
			$_POST['direct']['card_number']	= preg_replace('#[\D]+#', '', $_POST['direct']['card_number']);
			
			foreach ($_POST['direct'] as $key => $value) {
				$_POST['direct'][$key] = trim($value);
			}
			
			$GLOBALS['session']->set('form_data', $_POST['direct'], 'PayPal_Pro_Direct');

			if ($this->_module['3ds_status']) {
				## Centinel - do cmpi_lookup
				if ($currency = $GLOBALS['db']->select('CubeCart_currency', 'iso', array('code' => $GLOBALS['config']->get('config','default_currency')))) {
					$currency_code	= $currency[0]['iso'];
				}
				$centinel = new CentinelClient($this->_module['3ds_merchant'], $this->_module['3ds_password'], '134-01');
								
				$centinel->add(array(
					'MsgType'			=> 'cmpi_lookup',
					'TransactionType'	=> 'C',
					'RawAmount'			=> (int)($this->_basket['total']*100),
					'PurchaseCurrency'	=> $currency_code,
					'CardNumber'		=> $_POST['direct']['card_number'],
					'CardExpMonth'		=> $_POST['direct']['exp_month'],
					'CardExpYear'		=> $_POST['direct']['exp_year'],
					'OrderNumber'		=> $this->_basket['cart_order_id'],
					'PAN'				=> 'PAYPAL',
					'UserAgent'			=> $_SERVER["HTTP_USER_AGENT"],
					'BrowserHeader'		=> $_SERVER["HTTP_ACCEPT"],
					
				));
				
				$response	= $centinel->sendHttp($this->_centinel_maps, 5, 10);
				if ($response['Enrolled'] == 'Y' && $response['ErrorDesc'] == 0) {
					## Enrolled, get data, and display iframe content
					$GLOBALS['session']->set('ACSUrl', $response['ACSUrl'], 'centinel');
					$GLOBALS['session']->set('AuthenticationPath', $response['AuthenticationPath'], 'centinel');
					$GLOBALS['session']->set('ECI', $response['EciFlag'], 'centinel');
					$GLOBALS['session']->set('Enrolled', $response['Enrolled'], 'centinel');
					$GLOBALS['session']->set('ErrorNo', $response['ErrorNo'], 'centinel');
					$GLOBALS['session']->set('ErrorDesc', $response['ErrorDesc'], 'centinel');
					$GLOBALS['session']->set('OrderId', $response['OrderId'], 'centinel');
					$GLOBALS['session']->set('Payload', $response['Payload'], 'centinel');
					$GLOBALS['session']->set('TermUrl', $GLOBALS['storeURL'].'/index.php?_g=rm&type=gateway&cmd=process&module=PayPal_Pro', 'centinel');
					$GLOBALS['session']->set('TransactionId', $response['TransactionId'], 'centinel');

					$display_3dsecure = true;
				} else {
					## Just DoDirectPayment, they're not enrolled for 3DS
					$GLOBALS['session']->set('AUTHSTATUS3DS', '', 'centinel');
					$GLOBALS['session']->set('CAVV', '', 'centinel');
					$GLOBALS['session']->set('ECI', $response['EciFlag'], 'centinel');
					$GLOBALS['session']->set('MPIVENDOR3DS', $response['Enrolled'], 'centinel');
					$GLOBALS['session']->set('XID', '', 'centinel');
					$process_payment	= true;
				}
			} else {
				$process_payment = true;
			}

			if ($process_payment) {
				## Handle form submission
				if ($this->payment()) {
					httpredir('?_a=complete');
				}
			}
			$details	= $_POST['direct'];
		} else {
			$details	= $this->_basket['billing_address'];
		}

		if ($display_3dsecure) {
			## Display 3D-Secure screen
			$GLOBALS['smarty']->assign('DISPLAY_3DS', true);
			## Check for custom template for module in skin folder
			$file_name = 'form.tpl';
			$form_file = $GLOBALS['gui']->getCustomModuleSkin('gateway', dirname(__FILE__), $file_name);
			$GLOBALS['gui']->changeTemplateDir($form_file);
			$ret = $GLOBALS['smarty']->fetch($file_name);
			$GLOBALS['gui']->changeTemplateDir();
			return $ret;
		} else {
			
			$country_id	= $details['country_id'];
			$GLOBALS['smarty']->assign('CUSTOMER', $details);

			$cards	= array(
				'Visa'			=> 'Visa',
				'MasterCard'	=> 'MasterCard',
			);

			if ($GLOBALS['config']->get('config','default_currency') == 'USD') {
				$cards['Discover'] = 'Discover'; 
				if(!isset($this->_module['amex']) || $this->_module['amex']) {
					$cards['Amex'] = 'American Express';
				}
			} elseif($GLOBALS['config']->get('config','default_currency') == 'GBP') {
				$cards['Solo'] = 'Solo';
				$cards['Maestro'] = 'Maestro';
				$cards['Discover'] = 'Discover';
			}
			
			foreach ($cards as $type => $name) {
				$selected	= (isset($details['card_type']) && $details['card_type'] == $type) ? ' selected="selected"' : '';
				$smarty_data['card']['types'][] = array (
					'name' => $name, 
					'type' => $type, 
					'selected' => $selected
				);
			}
						
			## Show Expire Months
			$selectedMonth	= (isset($_POST['direct']['exp_month'])) ? $_POST['direct']['exp_month'] : date('m');
			for($i = 1; $i <= 12; ++$i) {
				$value = sprintf('%02d',$i);
				$smarty_data['card']['expire']['months'][]	= array(
					'selected'	=> ($value == $selectedMonth) ? ' selected="selected"' : '',
					'value'		=> $value,
					'display'	=> $this->formatMonth($value),
				);
			}
	
			## Show Expire Years
			$thisYear = date("Y");
			$maxYear = $thisYear + 10;
			$selectedYear = isset($_POST['direct']['exp_year']) ? $_POST['direct']['exp_year'] : ($thisYear+2);
			for($i = $thisYear; $i <= $maxYear; ++$i) {
				$smarty_data['card']['expire']['years'][]	= array(
					'selected'	=> ($i == $selectedYear) ? ' selected="selected"' : '',
					'value'		=> $i,
				);
			}

			if ($GLOBALS['config']->get('config','default_currency') == 'GBP') {
				$smarty_data['card']['display_issue'] = true;
				## Show Start Months
				$selectedMonth	= (isset($_POST['direct']['issue_month'])) ? $_POST['direct']['issue_month'] : '';
				$smarty_data['card']['issue']['months'][]	= array(
					'selected'	=> '',
					'value'		=> '',
					'display'	=> '',
				);
				for($i=1;$i<=12;$i++) {
					$val = sprintf('%02d',$i);
					$smarty_data['card']['issue']['months'][]	= array(
						'selected'	=> ($val == $selectedMonth) ? ' selected="selected"' : '',
						'value'		=> $val,
						'display'	=> $this->formatMonth($val),
					);
				}
		
				## Show Start Years
				$thisYear 	= date("Y");
				$maxYear 	= $thisYear-5;
				$selectedYear = isset($_POST['direct']['issue_year']) ? $_POST['direct']['issue_year'] : ($thisYear+2);
				$smarty_data['card']['issue']['years'][]	= array(
					'selected'	=> '',
					'value'		=> '',
				);
				for($i=$thisYear;$i>=$maxYear;$i--) {
					$smarty_data['card']['issue']['years'][]	= array(
						'selected'	=> ($i == $selectedYear) ? ' selected="selected"' : '',
						'value'		=> str_pad($i, 2, '0', STR_PAD_LEFT),
					);
				}
			}
			$GLOBALS['smarty']->assign('CARD', $smarty_data['card']);
			## Country List
			if ($countries	= $GLOBALS['db']->select('CubeCart_geo_country', false, false, array('name' => 'ASC'))) {
				foreach ($countries as $country) {
					$country['selected']	= ($country['numcode'] == $country_id) ? ' selected="selected"' : '';
					$smarty_data['countries'][] = $country;
				}
				$GLOBALS['smarty']->assign('COUNTRIES', $smarty_data['countries']);
			}
			
			## Counties
			$GLOBALS['smarty']->assign('VAL_JSON_STATE', state_json());
		}
		
		## Check for custom template for module in skin folder
		$file_name = 'form.tpl';
		$form_file = $GLOBALS['gui']->getCustomModuleSkin('gateway', dirname(__FILE__), $file_name);
		$GLOBALS['gui']->changeTemplateDir($form_file);
		$ret = $GLOBALS['smarty']->fetch($file_name);
		$GLOBALS['gui']->changeTemplateDir();
		return $ret;
	}
	
	private function formatMonth($val) {
		return $val." - ".strftime("%b", mktime(0,0,0,$val,1 ,2009));
	}

	private function payment() {
		if ($response = $this->_wpp->DoDirectPayment($GLOBALS['session']->get('form_data', 'PayPal_Pro_Direct'))) {
			switch ((string)$response['AVSCODE']) {
				case 'A':	## Address only (No Zip)
				case 'B':	## International 'A'
					$notes[]	= 'AVS matched on address only.';
					break;
				case 'N':	## No (Transaction declined)
				case 'C':	## International 'N'
				case '1':	## No Match (Maestro/Solo)
					$notes[]	= 'No match for AVS data. Transaction has been declined.';
					break;
				case 'X':	## Exact Match
				case 'D':	## International 'X'
				case 'F':	## UK-specific 'X'
					$notes[]	= 'Exact match for AVS data.';
					break;
				case 'E':	## Not allowed for MOTO transactions (Declined)
					## This shouldn't happen
					break;
				case 'U':	## Unavailable
				case 'G':	## Global Unavailable
				case 'I':	## International Unavailable
					break;
				case 'Z':	## Zip
				case 'P':	## Postal (International 'Z')
					$notes[]	= 'AVS matched ZIP/Postal code.';
					break;
				case 'R':	## Retry
					break;
				case 'S':	## Service not supported
					break;
				case 'U':	## Unavailable
					break;
				case 'W':	## Exact Match
					$notes[]	= 'AVS matched whole ZIP+4 code.';
					break;
				case 'Y':	## Yes
					break;
				default:	## Error
				#	$notes[]	= 'There was an error processing AVS data.';
			}
			switch ((string)$response['CVV2MATCH']) {
				case 'M':
				case '0':	## Matched
					$notes[]	= 'CVV2 correctly matched.';
					break;
				case 'N':
				case '1':	## No Match
					$notes[]	= 'CVV2 did not match.';
					break;
				case 'P':	## Not Processed
					$notes[]	= 'CVV2 was not processed.';
					break;
				case 'S':
				case '2':	## Service not supported
					break;
				case 'U':
				case '4':	## Service not available
					break;
				case 'X':	## No response
					break;
				default:	## Error
			}
			##
			$order	= Order::getInstance();
			## Log transaction
			if (!empty($response['TRANSACTIONID'])) {
				$log	= array(
					'gateway'	=> 'PayPal Card Payment',
					'status'	=> $response['ACK'],
					'trans_id'	=> $response['TRANSACTIONID'],
					'amount'	=> $response['AMT'],
					'notes'		=> (isset($notes)) ? implode(' ', $notes) : null,
				);
				$order->logTransaction($log);
			}
			
			## Improved FMF logic by Havenswift Hosting & Ron at offshoremarineparts.com
			if($response['L_ERRORCODE0'] == '11610') {
				$GLOBALS['gui']->setNotify($this->_lang['payment_review']);
				$order->orderStatus(Order::ORDER_PENDING, $this->_basket['cart_order_id']);
				return true;	
			} 
			
			switch ($response['ACK']) {
				case 'SuccessWithWarning':
				case 'Success':
					$order->orderStatus(Order::ORDER_PROCESS, $this->_basket['cart_order_id']);
					return true;
					break;
				case 'FailureWithWarning':
				case 'Failure':
					## Why? - Display an error message (hopefully they won't be too cryptic...)
					## Improved FMF logic by Havenswift Hosting & Ron at offshoremarineparts.com
					foreach ($response as $key => $value) {
						if($response['L_ERRORCODE0'] == '11611') {
 							$GLOBALS['gui']->setNotify($this->_lang['payment_decline']);
 						} elseif($response['L_ERRORCODE0'] == '15005') {
 							$GLOBALS['gui']->setNotify($this->_lang['bank_declined']);
 						} elseif($response['L_ERRORCODE0'] == '15007') {
 							$GLOBALS['gui']->setNotify($this->_lang['card_expired']);
 						} elseif (preg_match('#^L_LONGMESSAGE(\d+)$#', $key, $match)) {
							$GLOBALS['gui']->setError($value);
						}
					}
					break;
			}
		}
		return false;
	}
}