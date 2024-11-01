<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Wp_Currency_Rate 
 * @author    dotcomdotbd
 * @license   GPL-2.0+
 * @link      http://systway.com
 * @copyright 2014 Team Systway
 */
?>
<div class="wrap">

	<?php   if ( isset($_REQUEST['settings-updated'] ) && ($_REQUEST['settings-updated'] == true) && ($_REQUEST['page'] == "wpcr") ) { ?>

	 	<div id="message" class="updated fade"><p><strong>settings saved.</strong></p></div>
	 <?php }?>

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<form method="post" action="options.php" onsubmit="return connect_aws_api();" >
    	<?php settings_fields( 'manage_options' ); ?>
    	<?php do_settings_sections( 'manage_options' ); ?>

    	<!--Tab-->
    	<div id="horizontalTab">
	    		<ul>
		            <li><a href="#currency-setting">Currency Settings</a></li>
		            <li><a href="#plugin-setting">Plugin Setting</a></li>
		            
	        	</ul>


	        <div id="currency-setting">
	        	<div class="">
					<p><label>Base Currency: </label>
					<select style="width: 300px;" id="wpcr_base_country_code" name="wpcr_base_country_code">
						<option value="AFN"<?php if ( get_option('wpcr_base_country_code') == "AFN" ) echo 'selected="selected"'; ?>> Afghan Afghani</option>
						<option value="ALL"<?php if ( get_option('wpcr_base_country_code') == "ALL" ) echo 'selected="selected"'; ?>> Albanian Lek</option>
						<option value="DZD"<?php if ( get_option('wpcr_base_country_code') == "DZD" ) echo 'selected="selected"'; ?>> Algerian Dinar</option>
						<option value="EUR"<?php if ( get_option('wpcr_base_country_code') == "EUR" ) echo 'selected="selected"'; ?>> European Euro</option>
						<option value="AOA"<?php if ( get_option('wpcr_base_country_code') == "AOA" ) echo 'selected="selected"'; ?>>Angolan Kwanza</option>
						<option value="XCD"<?php if ( get_option('wpcr_base_country_code') == "XCD" ) echo 'selected="selected"'; ?>>East Caribbean Dollar</option>
						<option value="ARS"<?php if ( get_option('wpcr_base_country_code') == "ARS" ) echo 'selected="selected"'; ?>>Argentine Peso</option>
						<option value="AMD"<?php if ( get_option('wpcr_base_country_code') == "AMD" ) echo 'selected="selected"'; ?>>Armenian Dram</option>
						<option value="AWG"<?php if ( get_option('wpcr_base_country_code') == "AWG" ) echo 'selected="selected"'; ?>>Aruban Florin</option>
						<option value="AUD"<?php if ( get_option('wpcr_base_country_code') == "AUD" ) echo 'selected="selected"'; ?>>Australian Dollar</option>
						<option value="AZN"<?php if ( get_option('wpcr_base_country_code') == "AZN" ) echo 'selected="selected"'; ?>>Azerbaijani Manat</option>
						<option value="BSD"<?php if ( get_option('wpcr_base_country_code') == "BSD" ) echo 'selected="selected"'; ?>>Bahamian Dollar</option>
						<option value="BHD"<?php if ( get_option('wpcr_base_country_code') == "BHD" ) echo 'selected="selected"'; ?>>Bahraini Dinar</option>
						<option value="BDT"<?php if ( get_option('wpcr_base_country_code') == "BDT" ) echo 'selected="selected"'; ?>>Bangladeshi Taka</option>
						<option value="BBD"<?php if ( get_option('wpcr_base_country_code') == "BBD" ) echo 'selected="selected"'; ?>>Barbadian Dollar</option>
						<option value="BYR"<?php if ( get_option('wpcr_base_country_code') == "BYR" ) echo 'selected="selected"'; ?>>Belarusian Ruble</option>
						<option value="BZD"<?php if ( get_option('wpcr_base_country_code') == "BZD" ) echo 'selected="selected"'; ?>>Belize Dollar</option>
						<option value="XOF"<?php if ( get_option('wpcr_base_country_code') == "XOF" ) echo 'selected="selected"'; ?>>West African CFA Franc</option>
						<option value="BTN"<?php if ( get_option('wpcr_base_country_code') == "BTN" ) echo 'selected="selected"'; ?>>Bhutanese Ngultrum</option>
						<option value="BOB"<?php if ( get_option('wpcr_base_country_code') == "BOB" ) echo 'selected="selected"'; ?>>Bolivian Boliviano</option>
						<option value="BAM"<?php if ( get_option('wpcr_base_country_code') == "BAM" ) echo 'selected="selected"'; ?>>Bosnia and Herzegovina Konvertibilna Marka</option>
						<option value="BWPs"<?php if ( get_option('wpcr_base_country_code') == "BWP" ) echo 'selected="selected"'; ?>>Botswana Pula</option>
						<option value="BRL"<?php if ( get_option('wpcr_base_country_code') == "BRL" ) echo 'selected="selected"'; ?>>Brazilian Real</option>
						<option value="BND"<?php if ( get_option('wpcr_base_country_code') == "BND" ) echo 'selected="selected"'; ?>>Brunei Dollar</option>
						<option value="BGN"<?php if ( get_option('wpcr_base_country_code') == "BGN" ) echo 'selected="selected"'; ?>>Bulgarian Lev</option>
						<option value="BIF"<?php if ( get_option('wpcr_base_country_code') == "BIF" ) echo 'selected="selected"'; ?>>Burundi Franc</option>
						<option value="KHR"<?php if ( get_option('wpcr_base_country_code') == "KHR" ) echo 'selected="selected"'; ?>>Cambodian Riel</option>
						<option value="XAF"<?php if ( get_option('wpcr_base_country_code') == "XAF" ) echo 'selected="selected"'; ?>>Central African CFA Franc</option>
						<option value="CAD"<?php if ( get_option('wpcr_base_country_code') == "CAD" ) echo 'selected="selected"'; ?>>Canadian Dollar</option>
						<option value="CVE"<?php if ( get_option('wpcr_base_country_code') == "CVE" ) echo 'selected="selected"'; ?>>Cape Verdean Escudo</option>
						<option value="KYD"<?php if ( get_option('wpcr_base_country_code') == "KYD" ) echo 'selected="selected"'; ?>>Cayman Islands Dollar</option>
						<option value="CLP"<?php if ( get_option('wpcr_base_country_code') == "CLP" ) echo 'selected="selected"'; ?>>Chilean Peso</option>
						<option value="CNY"<?php if ( get_option('wpcr_base_country_code') == "CNY" ) echo 'selected="selected"'; ?>>Chinese Renminbi</option>
						<option value="COP"<?php if ( get_option('wpcr_base_country_code') == "COP" ) echo 'selected="selected"'; ?>>Colombian Peso</option>
						<option value="KMF"<?php if ( get_option('wpcr_base_country_code') == "KMF" ) echo 'selected="selected"'; ?>>Comorian Franc</option>
						<option value="CDF"<?php if ( get_option('wpcr_base_country_code') == "CDF" ) echo 'selected="selected"'; ?>>Congolese Franc</option>
						<option value="CRC"<?php if ( get_option('wpcr_base_country_code') == "CRC" ) echo 'selected="selected"'; ?>>Costa Rican Colon</option>
						<option value="HRK"<?php if ( get_option('wpcr_base_country_code') == "HRK" ) echo 'selected="selected"'; ?>>Croatian Kuna</option>
						<option value="CUC"<?php if ( get_option('wpcr_base_country_code') == "CUC" ) echo 'selected="selected"'; ?>>Cuban Peso</option>
						<option value="CZK"<?php if ( get_option('wpcr_base_country_code') == "CZK" ) echo 'selected="selected"'; ?>>Czech Koruna</option>
						<option value="DKK"<?php if ( get_option('wpcr_base_country_code') == "DKK" ) echo 'selected="selected"'; ?>>Danish Krone</option>
						<option value="DJF"<?php if ( get_option('wpcr_base_country_code') == "DJF" ) echo 'selected="selected"'; ?>>Djiboutian Franc</option>
						<option value="DOP"<?php if ( get_option('wpcr_base_country_code') == "DOP" ) echo 'selected="selected"'; ?>>Dominican Peso</option>
						<option value="EGP"<?php if ( get_option('wpcr_base_country_code') == "EGP" ) echo 'selected="selected"'; ?>>Egyptian Pound</option>
						<option value="GQE"<?php if ( get_option('wpcr_base_country_code') == "GQE" ) echo 'selected="selected"'; ?>>Central African CFA Franc</option>
						<option value="ERN"<?php if ( get_option('wpcr_base_country_code') == "ERN" ) echo 'selected="selected"'; ?>>Eritrean Nakfa</option>
						<option value="EEK"<?php if ( get_option('wpcr_base_country_code') == "EEK" ) echo 'selected="selected"'; ?>>Estonian Kroon</option>
						<option value="ETB"<?php if ( get_option('wpcr_base_country_code') == "ETB" ) echo 'selected="selected"'; ?>>Ethiopian Birr</option>
						<option value="FKP"<?php if ( get_option('wpcr_base_country_code') == "FKP" ) echo 'selected="selected"'; ?>>Falkland Islands Pound</option>
						<option value="FJD"<?php if ( get_option('wpcr_base_country_code') == "FJD" ) echo 'selected="selected"'; ?>>Fijian Dollar</option>
						<option value="XPF"<?php if ( get_option('wpcr_base_country_code') == "XPF" ) echo 'selected="selected"'; ?>>CFP Franc</option>
						<option value="GMD"<?php if ( get_option('wpcr_base_country_code') == "GMD" ) echo 'selected="selected"'; ?>>Gambian Dalasi</option>
						<option value="GEL"<?php if ( get_option('wpcr_base_country_code') == "GEL" ) echo 'selected="selected"'; ?>>Georgian Lari</option>
						<option value="GHS"<?php if ( get_option('wpcr_base_country_code') == "GHS" ) echo 'selected="selected"'; ?>>Ghanaian Cedi</option>
						<option value="GIP"<?php if ( get_option('wpcr_base_country_code') == "GIP" ) echo 'selected="selected"'; ?>>Gibraltar Pound</option>
						<option value="GTQ"<?php if ( get_option('wpcr_base_country_code') == "GTQ" ) echo 'selected="selected"'; ?>>Guatemalan Quetzal</option>
						<option value="GNF"<?php if ( get_option('wpcr_base_country_code') == "GNF" ) echo 'selected="selected"'; ?>>Guinean Franc</option>
						<option value="GYD"<?php if ( get_option('wpcr_base_country_code') == "GYD" ) echo 'selected="selected"'; ?>>Guyanese Dollar</option>
						<option value="HTG"<?php if ( get_option('wpcr_base_country_code') == "HTG" ) echo 'selected="selected"'; ?>>Haitian Gourde</option>
						<option value="HNL"<?php if ( get_option('wpcr_base_country_code') == "HNL" ) echo 'selected="selected"'; ?>>Honduran Lempira</option>
						<option value="HKD"<?php if ( get_option('wpcr_base_country_code') == "HKD" ) echo 'selected="selected"'; ?>>Hong Kong Dollar</option>
						<option value="HUF"<?php if ( get_option('wpcr_base_country_code') == "HUF" ) echo 'selected="selected"'; ?>>Hungarian Forint</option>
						<option value="ISK"<?php if ( get_option('wpcr_base_country_code') == "ISK" ) echo 'selected="selected"'; ?>>Icelandic Króna</option>
						<option value="INR"<?php if ( get_option('wpcr_base_country_code') == "INR" ) echo 'selected="selected"'; ?>>Indian Rupee</option>
						<option value="IDR"<?php if ( get_option('wpcr_base_country_code') == "IDR" ) echo 'selected="selected"'; ?>>Indonesian Rupiah</option>
						<option value="XDR"<?php if ( get_option('wpcr_base_country_code') == "XDR" ) echo 'selected="selected"'; ?>>Special Drawing Rights</option>
						<option value="IRR"<?php if ( get_option('wpcr_base_country_code') == "IRR" ) echo 'selected="selected"'; ?>>Iranian Rial</option>
						<option value="IQD"<?php if ( get_option('wpcr_base_country_code') == "IQD" ) echo 'selected="selected"'; ?>>Iraqi Dinar</option>
						<option value="ILS"<?php if ( get_option('wpcr_base_country_code') == "ILS" ) echo 'selected="selected"'; ?>>Israeli new Sheqel</option>
						<option value="JMD"<?php if ( get_option('wpcr_base_country_code') == "JMD" ) echo 'selected="selected"'; ?>>Jamaican Dollar</option>
						<option value="JPY"<?php if ( get_option('wpcr_base_country_code') == "JPY" ) echo 'selected="selected"'; ?>>Japanese Yen</option>
						<option value="JOD"<?php if ( get_option('wpcr_base_country_code') == "JOD" ) echo 'selected="selected"'; ?>>Jordanian Dinar</option>
						<option value="KZT"<?php if ( get_option('wpcr_base_country_code') == "KZT" ) echo 'selected="selected"'; ?>>Kazakhstani Tenge</option>
						<option value="KES"<?php if ( get_option('wpcr_base_country_code') == "KES" ) echo 'selected="selected"'; ?>>Kenyan Shilling</option>
						<option value="KPW"<?php if ( get_option('wpcr_base_country_code') == "KPW" ) echo 'selected="selected"'; ?>>North Korean Won</option>
						<option value="KRW"<?php if ( get_option('wpcr_base_country_code') == "KRW" ) echo 'selected="selected"'; ?>>South Korean Won</option>
						<option value="KWD"<?php if ( get_option('wpcr_base_country_code') == "KWD" ) echo 'selected="selected"'; ?>>Kuwaiti Dinar</option>
						<option value="KGS"<?php if ( get_option('wpcr_base_country_code') == "KGS" ) echo 'selected="selected"'; ?>>Kyrgyzstani Som</option>
						<option value="LAK"<?php if ( get_option('wpcr_base_country_code') == "LAK" ) echo 'selected="selected"'; ?>>Lao Kip</option>
						<option value="LBP"<?php if ( get_option('wpcr_base_country_code') == "LBP" ) echo 'selected="selected"'; ?>>Lebanese Lira</option>
						<option value="LRD"<?php if ( get_option('wpcr_base_country_code') == "LRD" ) echo 'selected="selected"'; ?>>Liberian Dollar</option>
						<option value="LYD"<?php if ( get_option('wpcr_base_country_code') == "LYD" ) echo 'selected="selected"'; ?>>Libyan Dinar</option>
						<option value="CHF"<?php if ( get_option('wpcr_base_country_code') == "CHF" ) echo 'selected="selected"'; ?>>Uses the Swiss Franc</option>
						<option value="LTL"<?php if ( get_option('wpcr_base_country_code') == "LTL" ) echo 'selected="selected"'; ?>>Lithuanian Litas</option>
						<option value="MOP"<?php if ( get_option('wpcr_base_country_code') == "MOP" ) echo 'selected="selected"'; ?>>Macanese Pataca</option>
						<option value="MKD"<?php if ( get_option('wpcr_base_country_code') == "MKD" ) echo 'selected="selected"'; ?>Macedonian Denar</option>
						<option value="MGA"<?php if ( get_option('wpcr_base_country_code') == "MGA" ) echo 'selected="selected"'; ?>>Malagasy Ariary</option>
						<option value="MWK"<?php if ( get_option('wpcr_base_country_code') == "MWK" ) echo 'selected="selected"'; ?>>Malawian Kwacha</option>
						<option value="MYR"<?php if ( get_option('wpcr_base_country_code') == "MYR" ) echo 'selected="selected"'; ?>>Malaysian Ringgit</option>
						<option value="MVR"<?php if ( get_option('wpcr_base_country_code') == "MVR" ) echo 'selected="selected"'; ?>>Maldivian Rufiyaa</option>
						<option value="MRO"<?php if ( get_option('wpcr_base_country_code') == "MRO" ) echo 'selected="selected"'; ?>>Mauritanian Ouguiya</option>
						<option value="MUR"<?php if ( get_option('wpcr_base_country_code') == "MUR" ) echo 'selected="selected"'; ?>>Mauritian Rupee</option>
						<option value="MXN"<?php if ( get_option('wpcr_base_country_code') == "MXN" ) echo 'selected="selected"'; ?>>Mexican Peso</option>
						<option value="MDL"<?php if ( get_option('wpcr_base_country_code') == "MDL" ) echo 'selected="selected"'; ?>>Moldovan Leu</option>
						<option value="MNT"<?php if ( get_option('wpcr_base_country_code') == "MNT" ) echo 'selected="selected"'; ?>>Mongolian Tugrik</option>
						<option value="MAD"<?php if ( get_option('wpcr_base_country_code') == "MAD" ) echo 'selected="selected"'; ?>>Moroccan Dirham</option>
						<option value="MZM"<?php if ( get_option('wpcr_base_country_code') == "MZM" ) echo 'selected="selected"'; ?>>Mozambican Metical</option>
						<option value="MMK"<?php if ( get_option('wpcr_base_country_code') == "MMK" ) echo 'selected="selected"'; ?>>Myanma Kyat</option>
						<option value="NAD"<?php if ( get_option('wpcr_base_country_code') == "NAD" ) echo 'selected="selected"'; ?>>Namibian Dollar</option>
						<option value="NPR"<?php if ( get_option('wpcr_base_country_code') == "NPR" ) echo 'selected="selected"'; ?>>Nepalese Rupee</option>
						<option value="ANG"<?php if ( get_option('wpcr_base_country_code') == "ANG" ) echo 'selected="selected"'; ?>>Netherlands Antillean Gulden</option>
						<option value="NZD"<?php if ( get_option('wpcr_base_country_code') == "NZD" ) echo 'selected="selected"'; ?>>New Zealand Dollar</option>
						<option value="NIO"<?php if ( get_option('wpcr_base_country_code') == "NIO" ) echo 'selected="selected"'; ?>>Nicaraguan Cordoba</option>
						<option value="NGN"<?php if ( get_option('wpcr_base_country_code') == "NGN" ) echo 'selected="selected"'; ?>>Nigerian Naira</option>
						<option value="NOK"<?php if ( get_option('wpcr_base_country_code') == "NOK" ) echo 'selected="selected"'; ?>>Norwegian Krone</option>
						<option value="OMR"<?php if ( get_option('wpcr_base_country_code') == "OMR" ) echo 'selected="selected"'; ?>>Omani Rial</option>
						<option value="PKR"<?php if ( get_option('wpcr_base_country_code') == "PKR" ) echo 'selected="selected"'; ?>>Pakistani Rupee</option>
						<option value="PAB"<?php if ( get_option('wpcr_base_country_code') == "PAB" ) echo 'selected="selected"'; ?>>Panamanian Balboa</option>
						<option value="PGK"<?php if ( get_option('wpcr_base_country_code') == "PGK" ) echo 'selected="selected"'; ?>>Papua New Guinean Kina</option>
						<option value="PYG"<?php if ( get_option('wpcr_base_country_code') == "PYG" ) echo 'selected="selected"'; ?>>Paraguayan Guarani</option>
						<option value="PEN"<?php if ( get_option('wpcr_base_country_code') == "PEN" ) echo 'selected="selected"'; ?>>Peruvian Nuevo sol</option>
						<option value="PHP"<?php if ( get_option('wpcr_base_country_code') == "PHP" ) echo 'selected="selected"'; ?>>Philippine Peso</option>
						<option value="PLN"<?php if ( get_option('wpcr_base_country_code') == "PLN" ) echo 'selected="selected"'; ?>>Polish Zloty</option>
						<option value="QAR"<?php if ( get_option('wpcr_base_country_code') == "QAR" ) echo 'selected="selected"'; ?>>Qatari Riyal</option>
						<option value="RON"<?php if ( get_option('wpcr_base_country_code') == "RON" ) echo 'selected="selected"'; ?>>Romanian Leu</option>
						<option value="RUB"<?php if ( get_option('wpcr_base_country_code') == "RUB" ) echo 'selected="selected"'; ?>>Russian Ruble</option>
						<option value="RWF"<?php if ( get_option('wpcr_base_country_code') == "RWF" ) echo 'selected="selected"'; ?>>Rwandan Franc</option>
						<option value="SHP"<?php if ( get_option('wpcr_base_country_code') == "SHP" ) echo 'selected="selected"'; ?>>Saint Helena Pound</option>
						<option value="WST"<?php if ( get_option('wpcr_base_country_code') == "WST" ) echo 'selected="selected"'; ?>>Samoan Tala</option>
						<option value="STD"<?php if ( get_option('wpcr_base_country_code') == "STD" ) echo 'selected="selected"'; ?>>Sao Tome and Principe Dobra</option>
						<option value="SAR"<?php if ( get_option('wpcr_base_country_code') == "SAR" ) echo 'selected="selected"'; ?>>Saudi Riyal</option>
						<option value="RSD"<?php if ( get_option('wpcr_base_country_code') == "RSD" ) echo 'selected="selected"'; ?>>Serbian Dinar</option>
						<option value="SCR"<?php if ( get_option('wpcr_base_country_code') == "SCR" ) echo 'selected="selected"'; ?>>Seychellois Rupee</option>
						<option value="SLL"<?php if ( get_option('wpcr_base_country_code') == "SLL" ) echo 'selected="selected"'; ?>>Sierra Leonean Leone</option>
						<option value="SGD"<?php if ( get_option('wpcr_base_country_code') == "SGD" ) echo 'selected="selected"'; ?>>Singapore Dollar</option>
						<option value="SKK"<?php if ( get_option('wpcr_base_country_code') == "SKK" ) echo 'selected="selected"'; ?>>Slovak Koruna</option>
						<option value="SBD"<?php if ( get_option('wpcr_base_country_code') == "SBD" ) echo 'selected="selected"'; ?>>Solomon Islands Dollar</option>
						<option value="SOS"<?php if ( get_option('wpcr_base_country_code') == "SOS" ) echo 'selected="selected"'; ?>>Somali Shilling</option>
						<option value="ZAR"<?php if ( get_option('wpcr_base_country_code') == "ZAR" ) echo 'selected="selected"'; ?>>South African Rand</option>
						<option value="SDG"<?php if ( get_option('wpcr_base_country_code') == "SDG" ) echo 'selected="selected"'; ?>>Sudanese Pound</option>
						<option value="LKR"<?php if ( get_option('wpcr_base_country_code') == "LKR" ) echo 'selected="selected"'; ?>>Sri Lankan rupee</option>
						<option value="SRD"<?php if ( get_option('wpcr_base_country_code') == "SRD" ) echo 'selected="selected"'; ?>>Surinamese Dollar</option>
						<option value="SZL"<?php if ( get_option('wpcr_base_country_code') == "SZL" ) echo 'selected="selected"'; ?>>Swazi Lilangeni</option>
						<option value="SEK"<?php if ( get_option('wpcr_base_country_code') == "SEK" ) echo 'selected="selected"'; ?>>Swedish Krona</option>
						<option value="SYP"<?php if ( get_option('wpcr_base_country_code') == "SYP" ) echo 'selected="selected"'; ?>>Syrian Pound</option>
						<option value="TWD"<?php if ( get_option('wpcr_base_country_code') == "TWD" ) echo 'selected="selected"'; ?>>New Taiwan Dollar</option>
						<option value="TJS"<?php if ( get_option('wpcr_base_country_code') == "TJS" ) echo 'selected="selected"'; ?>>Tajikistani Somoni</option>
						<option value="TZS"<?php if ( get_option('wpcr_base_country_code') == "TZS" ) echo 'selected="selected"'; ?>>Tanzanian Shilling</option>
						<option value="THB"<?php if ( get_option('wpcr_base_country_code') == "THB" ) echo 'selected="selected"'; ?>>Thai Baht</option>
						<option value="TOP"<?php if ( get_option('wpcr_base_country_code') == "TOP" ) echo 'selected="selected"'; ?>>Paanga</option>
						<option value="TTD"<?php if ( get_option('wpcr_base_country_code') == "TTD" ) echo 'selected="selected"'; ?>>Trinidad and Tobago Dollar</option>
						<option value="TND"<?php if ( get_option('wpcr_base_country_code') == "TND" ) echo 'selected="selected"'; ?>>Tunisian Dinar</option>
						<option value="TRY"<?php if ( get_option('wpcr_base_country_code') == "TRY" ) echo 'selected="selected"'; ?>>Turkish New Lira</option>
						<option value="TMM"<?php if ( get_option('wpcr_base_country_code') == "TMM" ) echo 'selected="selected"'; ?>>Turkmen Manat</option>
						<option value="UGX"<?php if ( get_option('wpcr_base_country_code') == "UGX" ) echo 'selected="selected"'; ?>>Ugandan Shilling</option>
						<option value="UAH"<?php if ( get_option('wpcr_base_country_code') == "UAH" ) echo 'selected="selected"'; ?>>Ukrainian Hryvnia</option>
						<option value="AED"<?php if ( get_option('wpcr_base_country_code') == "AED" ) echo 'selected="selected"'; ?>>UAE Dirham</option>
						<option value="GBP"<?php if ( get_option('wpcr_base_country_code') == "GBP" ) echo 'selected="selected"'; ?>>British Pound</option>
						<option value="USD"<?php if ( get_option('wpcr_base_country_code') == "USD" ) echo 'selected="selected"'; ?>>United States Dollar</option>
						<option value="UYU"<?php if ( get_option('wpcr_base_country_code') == "UYU" ) echo 'selected="selected"'; ?>>Uruguayan Peso</option>
						<option value="UZS"<?php if ( get_option('wpcr_base_country_code') == "UZS" ) echo 'selected="selected"'; ?>>Uzbekistani Som</option>
						<option value="VUV"<?php if ( get_option('wpcr_base_country_code') == "VUV" ) echo 'selected="selected"'; ?>>Vanuatu Vatu</option>
						<option value="VEB"<?php if ( get_option('wpcr_base_country_code') == "VEB" ) echo 'selected="selected"'; ?>>Venezuelan Bolivar</option>
						<option value="VND"<?php if ( get_option('wpcr_base_country_code') == "VND" ) echo 'selected="selected"'; ?>>Vietnamese Dong</option>
						<option value="YER"<?php if ( get_option('wpcr_base_country_code') == "YER" ) echo 'selected="selected"'; ?>>Yemeni Rial</option>
						<option value="ZMK"<?php if ( get_option('wpcr_base_country_code') == "ZMK" ) echo 'selected="selected"'; ?>>Zambian Kwacha</option>
						<option value="ZWD"<?php if ( get_option('wpcr_base_country_code') == "ZWD" ) echo 'selected="selected"'; ?>>Zimbabwean Dollar</option>

					</select></p> 	
				</div>
		<!--currency chekbox-->
				<div class="currency-country">
					<label><h4>Select Country Currency : </h4></label>
					<?php $country_code=get_option('wpcr_country_code'); ?>
					<table>
						<tbody>
							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option1]" value="AFN" <?php if(isset($country_code['option1'])) checked( $country_code['option1'], "AFN"); ?>>Afghan Afghani</td>

								<td><input type="checkbox" name="wpcr_country_code[option2]" value="ALL" <?php if(isset($country_code['option2'])) checked( $country_code['option2'], "ALL"); ?>>Albanian Lek</td>

								<td><input type="checkbox" name="wpcr_country_code[option3]" value="DZD" <?php if(isset($country_code['option3'])) checked( $country_code['option3'], "DZD"); ?>>Algerian Dinar</td>
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option4]" value="EUR" <?php if(isset($country_code['option4'])) checked( $country_code['option4'], "EUR"); ?>>European euro</td>
								<td><input type="checkbox" name="wpcr_country_code[option5]" value="AOA" <?php if(isset($country_code['option5'])) checked( $country_code['option5'], "AOA"); ?>>Angolan Kwanza</td>
								<td><input type="checkbox" name="wpcr_country_code[option6]" value="XCD" <?php if(isset($country_code['option6'])) checked( $country_code['option6'], "XCD"); ?>>East Caribbean Dollar</td>
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option10]" value="ARS" <?php if(isset($country_code['option10'])) checked( $country_code['option10'], "ARS"); ?>> Argentine Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option11]" value="AMD" <?php if(isset($country_code['option11'])) checked( $country_code['option11'], "AMD"); ?>>Armenian Dram</td>
								<td><input type="checkbox" name="wpcr_country_code[option12]" value="AWG" <?php if(isset($country_code['option12'])) checked( $country_code['option12'], "AWG"); ?>>Aruban Florin</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option13]" value="AUD" <?php if(isset($country_code['option13'])) checked( $country_code['option13'], "AUD"); ?>>Australian Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option14]" value="AZN" <?php if(isset($country_code['option14'])) checked( $country_code['option14'], "AZN"); ?>>Azerbaijani Manat</td>
								<td><input type="checkbox" name="wpcr_country_code[option15]" value="BSD" <?php if(isset($country_code['option15'])) checked( $country_code['option15'], "BSD"); ?>>Bahamian Dollar</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option16]" value="BHD" <?php if(isset($country_code['option16'])) checked( $country_code['option16'], "BHD"); ?>>Bahraini Dinar</td>
								<td><input type="checkbox" name="wpcr_country_code[option17]" value="BDT" <?php if(isset($country_code['option17'])) checked( $country_code['option17'], "BDT"); ?>> 	Bangladeshi Taka</td>
								<td><input type="checkbox" name="wpcr_country_code[option18]" value="BBD" <?php if(isset($country_code['option18'])) checked( $country_code['option18'], "BBD"); ?>>Barbadian Dollar</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option19]" value="BYR" <?php if(isset($country_code['option19'])) checked( $country_code['option19'], "BYR"); ?>>Belarusian Ruble</td>
								<td><input type="checkbox" name="wpcr_country_code[option20]" value="BZD" <?php if(isset($country_code['option20'])) checked( $country_code['option20'], "BZD"); ?>>Belize Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option21]" value="XOF" <?php if(isset($country_code['option21'])) checked( $country_code['option21'], "XOF"); ?>>West African CFA Franc</td>

							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option22]" value="BTN" <?php if(isset($country_code['option22'])) checked( $country_code['option22'], "BTN"); ?>>Bhutanese Ngultrum</td>
								<td><input type="checkbox" name="wpcr_country_code[option23]" value="BOB" <?php if(isset($country_code['option23'])) checked( $country_code['option23'], "BOB"); ?>>Bolivian Boliviano</td>
								<td><input type="checkbox" name="wpcr_country_code[option24]" value="BAM" <?php if(isset($country_code['option24'])) checked( $country_code['option24'], "BAM"); ?>>Bosnia and Herzegovina konvertibilna Marka</td>
							</tr>

							<tr>

								<td><input type="checkbox" name="wpcr_country_code[option25]" value="BWP" <?php if(isset($country_code['option25'])) checked( $country_code['option25'], "BWP"); ?>>Botswana Pula</td>
								<td><input type="checkbox" name="wpcr_country_code[option26]" value="BRL" <?php if(isset($country_code['option26'])) checked( $country_code['option26'], "BRL"); ?>>Brazilian Real</td>
								<td><input type="checkbox" name="wpcr_country_code[option27]" value="BND" <?php if(isset($country_code['option27'])) checked( $country_code['option27'], "BND"); ?>>Brunei Dollar</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option28]" value="BGN" <?php if(isset($country_code['option28'])) checked( $country_code['option28'], "BGN"); ?>>Bulgarian Lev</td>
								<td><input type="checkbox" name="wpcr_country_code[option29]" value="XOF" <?php if(isset($country_code['option29'])) checked( $country_code['option29'], "XOF"); ?>>African CFA Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option30]" value="BIF" <?php if(isset($country_code['option30'])) checked( $country_code['option30'], "BIF"); ?>>Burundi Franc</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option31]" value="KHR" <?php if(isset($country_code['option31'])) checked( $country_code['option31'], "KHR"); ?>>Cambodian Riel</td>
								<td><input type="checkbox" name="wpcr_country_code[option32]" value="XAF" <?php if(isset($country_code['option32'])) checked( $country_code['option32'], "XAF"); ?>>Central African CFA Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option33]" value="CAD" <?php if(isset($country_code['option33'])) checked( $country_code['option33'], "CAD"); ?>>Canadian Dollar</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option34]" value="CVE" <?php if(isset($country_code['option34'])) checked( $country_code['option34'], "CVE"); ?>>Cape Verdean Escudo</td>
								<td><input type="checkbox" name="wpcr_country_code[option35]" value="KYD" <?php if(isset($country_code['option35'])) checked( $country_code['option35'], "KYD"); ?>>Cayman Islands Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option36]" value="CLP" <?php if(isset($country_code['option36'])) checked( $country_code['option36'], "CLP"); ?>>Chilean Peso</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option37]" value="CNY" <?php if(isset($country_code['option37'])) checked( $country_code['option37'], "CNY"); ?>>Chinese Renminbi</td>
								<td><input type="checkbox" name="wpcr_country_code[option38]" value="COP" <?php if(isset($country_code['option38'])) checked( $country_code['option38'], "COP"); ?>>Colombian Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option39]" value="KMF" <?php if(isset($country_code['option39'])) checked( $country_code['option39'], "KMF"); ?>>Comorian Franc</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option40]" value="CDF" <?php if(isset($country_code['option40'])) checked( $country_code['option40'], "CDF"); ?>>Congolese Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option41]" value="CRC" <?php if(isset($country_code['option41'])) checked( $country_code['option41'], "CRC"); ?>>Costa Rican Colon</td>
								<td><input type="checkbox" name="wpcr_country_code[option42]" value="HRK" <?php if(isset($country_code['option42'])) checked( $country_code['option42'], "HRK"); ?>> Croatian Kuna</td>

							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option43]" value="CUC" <?php if(isset($country_code['option43'])) checked( $country_code['option43'], "CUC"); ?>> Cuban Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option44]" value="CZK" <?php if(isset($country_code['option44'])) checked( $country_code['option44'], "CZK"); ?>>Czech Koruna</td>
								<td><input type="checkbox" name="wpcr_country_code[option45]" value="DKK" <?php if(isset($country_code['option45'])) checked( $country_code['option45'], "DKK"); ?>>Danish Krone</td>

							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option46]" value="DJF" <?php if(isset($country_code['option46'])) checked( $country_code['option46'], "DJF"); ?>>Djiboutian Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option47]" value="DOP" <?php if(isset($country_code['option47'])) checked( $country_code['option47'], "DOP"); ?>>Dominican Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option48]" value="EGP" <?php if(isset($country_code['option48'])) checked( $country_code['option48'], "EGP"); ?>>Egyptian Pound</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option49]" value="GQE" <?php if(isset($country_code['option49'])) checked( $country_code['option49'], "GQE"); ?>>Central African CFA franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option50]" value="ERN" <?php if(isset($country_code['option50'])) checked( $country_code['option50'], "ERN"); ?>> Eritrean Nakfa</td>
								<td><input type="checkbox" name="wpcr_country_code[option51]" value="EEK" <?php if(isset($country_code['option51'])) checked( $country_code['option51'], "EEK"); ?>> Estonian Kroon</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option52]" value="ETB" <?php if(isset($country_code['option52'])) checked( $country_code['option52'], "ETB"); ?>> Ethiopian Birr</td>
								<td><input type="checkbox" name="wpcr_country_code[option53]" value="FKP" <?php if(isset($country_code['option53'])) checked( $country_code['option53'], "FKP"); ?>>Falkland Islands Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option54]" value="FJD" <?php if(isset($country_code['option54'])) checked( $country_code['option54'], "FJD"); ?>>Fijian Dollar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option55]" value="XPF" <?php if(isset($country_code['option55'])) checked( $country_code['option55'], "XPF"); ?>>CFP Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option56]" value="GMD" <?php if(isset($country_code['option56'])) checked( $country_code['option56'], "GMD"); ?>>Gambian Dalasi</td>
								<td><input type="checkbox" name="wpcr_country_code[option57]" value="GEL" <?php if(isset($country_code['option57'])) checked( $country_code['option57'], "GEL"); ?>>Georgian Lari</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option58]" value="GHS" <?php if(isset($country_code['option58'])) checked( $country_code['option58'], "GHS"); ?>>Ghanaian Cedi</td>
								<td><input type="checkbox" name="wpcr_country_code[option59]" value="GIP" <?php if(isset($country_code['option59'])) checked( $country_code['option59'], "GIP"); ?>>Gibraltar Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option60]" value="GTQ" <?php if(isset($country_code['option60'])) checked( $country_code['option60'], "GTQ"); ?>>Guatemalan Quetzal</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option61]" value="GNF" <?php if(isset($country_code['option61'])) checked( $country_code['option61'], "GNF"); ?>>Guinean Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option62]" value="GYD" <?php if(isset($country_code['option62'])) checked( $country_code['option62'], "GYD"); ?>>Guyanese Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option63]" value="HTG" <?php if(isset($country_code['option63'])) checked( $country_code['option63'], "HTG"); ?>>Haitian Gourde</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option64]" value=" 	HNL" <?php if(isset($country_code['option64'])) checked( $country_code['option64'], " 	HNL"); ?>>Honduran Lempira</td>
								<td><input type="checkbox" name="wpcr_country_code[option65]" value="HKD" <?php if(isset($country_code['option65'])) checked( $country_code['option65'], "HKD"); ?>> Hong Kong Dollar</td>

								<td><input type="checkbox" name="wpcr_country_code[option66]" value="HUF" <?php if(isset($country_code['option66'])) checked( $country_code['option66'], "HUF"); ?>>Hungarian Forint</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option67]" value="ISK" <?php if(isset($country_code['option67'])) checked( $country_code['option67'], "ISK"); ?>>Icelandic Króna</td>
								<td><input type="checkbox" name="wpcr_country_code[option68]" value="INR" <?php if(isset($country_code['option68'])) checked( $country_code['option68'], "INR"); ?>>Indian Rupee</td>
								<td><input type="checkbox" name="wpcr_country_code[option69]" value="IDR" <?php if(isset($country_code['option69'])) checked( $country_code['option69'], "IDR"); ?>>Indonesian Rupiah</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option70]" value="XDR" <?php if(isset($country_code['option70'])) checked( $country_code['option70'], "XDR"); ?>>Special Drawing Rights</td>
								<td><input type="checkbox" name="wpcr_country_code[option71]" value="IRR" <?php if(isset($country_code['option71'])) checked( $country_code['option71'], "IRR"); ?>>Iranian Rial</td>
								<td><input type="checkbox" name="wpcr_country_code[option72]" value="IQD" <?php if(isset($country_code['option72'])) checked( $country_code['option72'], "IQD"); ?>>Iraqi Dinar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option73]" value="ILS" <?php if(isset($country_code['option73'])) checked( $country_code['option73'], "ILS"); ?>>Israeli new sheqel</td>
								<td><input type="checkbox" name="wpcr_country_code[option74]" value="JMD" <?php if(isset($country_code['option74'])) checked( $country_code['option74'], "JMD"); ?>> Jamaican Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option75]" value="JPY" <?php if(isset($country_code['option75'])) checked( $country_code['option75'], "JPY"); ?>> Japanese Yen</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option76]" value="JOD" <?php if(isset($country_code['option76'])) checked( $country_code['option76'], "JOD"); ?>>Jordanian Dinar</td>
								<td><input type="checkbox" name="wpcr_country_code[option77]" value="KZT" <?php if(isset($country_code['option77'])) checked( $country_code['option77'], "KZT"); ?>> Kazakhstani Tenge</td>
								<td><input type="checkbox" name="wpcr_country_code[option78]" value="KES" <?php if(isset($country_code['option78'])) checked( $country_code['option78'], "KES"); ?>> Kenyan Shilling</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option79]" value="KPW" <?php if(isset($country_code['option79'])) checked( $country_code['option79'], "KPW"); ?>>North Korean Won</td>
								<td><input type="checkbox" name="wpcr_country_code[option80]" value="KRW" <?php if(isset($country_code['option80'])) checked( $country_code['option80'], "KRW"); ?>>South Korean Won</td>
								<td><input type="checkbox" name="wpcr_country_code[option81]" value="KWD" <?php if(isset($country_code['option81'])) checked( $country_code['option81'], "KWD"); ?>> 	Kuwaiti Dinar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option82]" value="KGS" <?php if(isset($country_code['option82'])) checked( $country_code['option82'], "KGS"); ?>> Kyrgyzstani Som</td>
								<td><input type="checkbox" name="wpcr_country_code[option83]" value="LAK" <?php if(isset($country_code['option83'])) checked( $country_code['option83'], "LAK"); ?>>Lao Kip</td>
								<td><input type="checkbox" name="wpcr_country_code[option84]" value="LBP" <?php if(isset($country_code['option84'])) checked( $country_code['option84'], "LBP"); ?>>Lebanese Lira</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option85]" value="LSL" <?php if(isset($country_code['option85'])) checked( $country_code['option85'], "LSL"); ?>>Lesotho Loti</td>
								<td><input type="checkbox" name="wpcr_country_code[option86]" value="LRD" <?php if(isset($country_code['option86'])) checked( $country_code['option86'], "LRD"); ?>>Liberian Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option87]" value="LYD" <?php if(isset($country_code['option87'])) checked( $country_code['option87'], "LYD"); ?>>Libyan Dinar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option88]" value="CHF" <?php if(isset($country_code['option88'])) checked( $country_code['option88'], "CHF"); ?>>Uses the Swiss Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option89]" value="LTL" <?php if(isset($country_code['option89'])) checked( $country_code['option89'], "LTL"); ?>>Lithuanian Litas</td>
								<td><input type="checkbox" name="wpcr_country_code[option90]" value="MOP" <?php if(isset($country_code['option90'])) checked( $country_code['option90'], "MOP"); ?>>Macanese Pataca</td>

							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option91]" value="MKD" <?php if(isset($country_code['option91'])) checked( $country_code['option91'], "MKD"); ?>>Macedonian Denar</td>
							<td><input type="checkbox" name="wpcr_country_code[option92]" value="MGA" <?php if(isset($country_code['option92'])) checked( $country_code['option92'], "MGA"); ?>>Malagasy Ariary</td>
							<td><input type="checkbox" name="wpcr_country_code[option93]" value="MWK" <?php if(isset($country_code['option93'])) checked( $country_code['option93'], "MWK"); ?>>Malawian Kwacha</td>
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option94]" value="MYR" <?php if(isset($country_code['option94'])) checked( $country_code['option94'], "MYR"); ?>>Malaysian Ringgit</td>
								<td><input type="checkbox" name="wpcr_country_code[option95]" value="MVR" <?php if(isset($country_code['option95'])) checked( $country_code['option95'], "MVR"); ?>>Maldivian Rufiyaa</td>
								<td><input type="checkbox" name="wpcr_country_code[option96]" value="MRO" <?php if(isset($country_code['option96'])) checked( $country_code['option96'], "MRO"); ?>>Mauritanian Ouguiya</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option97]" value="MUR" <?php if(isset($country_code['option97'])) checked( $country_code['option97'], "MUR"); ?>>Mauritian Rupee</td>
								<td><input type="checkbox" name="wpcr_country_code[option98]" value="MXN" <?php if(isset($country_code['option98'])) checked( $country_code['option98'], "MXN"); ?>>Mexican Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option99]" value="MDL" <?php if(isset($country_code['option99'])) checked( $country_code['option99'], "MDL"); ?>>Moldovan Leu</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option100]" value="MNT" <?php if(isset($country_code['option100'])) checked( $country_code['option100'], "MNT"); ?>>Mongolian Tugrik</td>
								<td><input type="checkbox" name="wpcr_country_code[option101]" value="MAD" <?php if(isset($country_code['option101'])) checked( $country_code['option101'], "MAD"); ?>>Moroccan Dirham</td>
								<td><input type="checkbox" name="wpcr_country_code[option102]" value="MZM" <?php if(isset($country_code['option102'])) checked( $country_code['option102'], "MZM"); ?>>	Mozambican Metical</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option103]" value="MMK" <?php if(isset($country_code['option103'])) checked( $country_code['option103'], "MMK"); ?>>Myanma Kyat</td>
								<td><input type="checkbox" name="wpcr_country_code[option104]" value="NAD" <?php if(isset($country_code['option104'])) checked( $country_code['option104'], "NAD"); ?>>Namibian Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option105]" value="NPR" <?php if(isset($country_code['option105'])) checked( $country_code['option105'], "NPR"); ?>>Nepalese Rupee</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option106]" value="ANG" <?php if(isset($country_code['option106'])) checked( $country_code['option106'], "ANG"); ?>>	Netherlands Antillean Gulden</td>
								<td><input type="checkbox" name="wpcr_country_code[option107]" value="XPF" <?php if(isset($country_code['option107'])) checked( $country_code['option107'], "XPF"); ?>>	CFP Franc</td>
								<td><input type="checkbox" name="wpcr_country_code[option108]" value="NZD" <?php if(isset($country_code['option108'])) checked( $country_code['option108'], "NZD"); ?>>New Zealand Dollar</td>	
							</tr>

							

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option109]" value="NIO" <?php if(isset($country_code['option109'])) checked( $country_code['option109'], "NIO"); ?>>Nicaraguan Cordoba</td>
								<td><input type="checkbox" name="wpcr_country_code[option110]" value=" 	NGN" <?php if(isset($country_code['option110'])) checked( $country_code['option110'], "NGN"); ?>>Nigerian Naira</td>
								<td><input type="checkbox" name="wpcr_country_code[option111]" value=" 	NOK" <?php if(isset($country_code['option111'])) checked( $country_code['option111'], "NOK"); ?>>Norwegian Krone</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option112]" value="OMR" <?php if(isset($country_code['option112'])) checked( $country_code['option112'], "OMR"); ?>>Omani Rial</td>
								<td><input type="checkbox" name="wpcr_country_code[option113]" value="PKR" <?php if(isset($country_code['option113'])) checked( $country_code['option113'], "PKR"); ?>>Pakistani Rupee</td>
								<td><input type="checkbox" name="wpcr_country_code[option114]" value="PAB" <?php if(isset($country_code['option114'])) checked( $country_code['option114'], "PAB"); ?>>Panamanian Balboa</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option115]" value="PGK" <?php if(isset($country_code['option115'])) checked( $country_code['option115'], "PGK"); ?>>Papua New Guinean Kina</td>
								<td><input type="checkbox" name="wpcr_country_code[option116]" value="PYG" <?php if(isset($country_code['option116'])) checked( $country_code['option116'], "PYG"); ?>>Paraguayan Guarani</td>
								<td><input type="checkbox" name="wpcr_country_code[option117]" value="PEN" <?php if(isset($country_code['option117'])) checked( $country_code['option117'], "PEN"); ?>> Peruvian Nuevo Sol</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option118]" value="PHP" <?php if(isset($country_code['option118'])) checked( $country_code['option118'], "PHP"); ?>>Philippine Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option119]" value="PLN" <?php if(isset($country_code['option119'])) checked( $country_code['option119'], "PLN"); ?>>Polish Zloty</td>
								<td><input type="checkbox" name="wpcr_country_code[option120]" value="QAR" <?php if(isset($country_code['option120'])) checked( $country_code['option120'], "QAR"); ?>>Qatari Riyal</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option121]" value="RON" <?php if(isset($country_code['option121'])) checked( $country_code['option121'], "RON"); ?>> Romanian Leu</td>
								<td><input type="checkbox" name="wpcr_country_code[option122]" value="RUB" <?php if(isset($country_code['option122'])) checked( $country_code['option122'], "RUB"); ?>>Russian Ruble</td>
								<td><input type="checkbox" name="wpcr_country_code[option123]" value="RWF" <?php if(isset($country_code['option123'])) checked( $country_code['option123'], "RWF"); ?>>Rwandan Franc</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option124]" value="SHP" <?php if(isset($country_code['option124'])) checked( $country_code['option124'], "SHP"); ?>>Saint Helena Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option125]" value="WST" <?php if(isset($country_code['option125'])) checked( $country_code['option125'], "WST"); ?>>Samoan Tala</td>
								<td><input type="checkbox" name="wpcr_country_code[option126]" value="STD" <?php if(isset($country_code['option126'])) checked( $country_code['option126'], "STD"); ?>>Sao Tome and Principe Dobra</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option127]" value="SAR" <?php if(isset($country_code['option127'])) checked( $country_code['option127'],"SAR"); ?>> 	Saudi Riyal</td>
								<td><input type="checkbox" name="wpcr_country_code[option128]" value="RSD" <?php if(isset($country_code['option128'])) checked( $country_code['option128'], "RSD"); ?>>Serbian Dinar</td>
								<td><input type="checkbox" name="wpcr_country_code[option129]" value="SCR" <?php if(isset($country_code['option129'])) checked( $country_code['option129'], "SCR"); ?>>Seychellois Rupee</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option130]" value="SLL" <?php if(isset($country_code['option130'])) checked( $country_code['option130'], "SLL"); ?>>Sierra Leonean Leone</td>
								<td><input type="checkbox" name="wpcr_country_code[option131]" value="SGD" <?php if(isset($country_code['option131'])) checked( $country_code['option131'], "SGD"); ?>>Singapore Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option132]" value="SKK" <?php if(isset($country_code['option132'])) checked( $country_code['option132'], "SKK"); ?>>Slovak Koruna</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option133]" value="SBD" <?php if(isset($country_code['option133'])) checked( $country_code['option133'], "SBD"); ?>>Solomon Islands Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option134]" value="SOS" <?php if(isset($country_code['option134'])) checked( $country_code['option134'], "SOS"); ?>>Somali Shilling</td>

								<td><input type="checkbox" name="wpcr_country_code[option135]" value="ZAR" <?php if(isset($country_code['option135'])) checked( $country_code['option135'], "ZAR"); ?>>South African Rand</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option136]" value="SDG" <?php if(isset($country_code['option136'])) checked( $country_code['option136'], "SDG"); ?>>Sudanese Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option137]" value="LKR" <?php if(isset($country_code['option137'])) checked( $country_code['option137'], "LKR"); ?>>Sri Lankan Rupee</td>
								<td><input type="checkbox" name="wpcr_country_code[option138]" value="SRD" <?php if(isset($country_code['option138'])) checked( $country_code['option138'], "SRD"); ?>>Surinamese Dollar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option139]" value="SZL" <?php if(isset($country_code['option139'])) checked( $country_code['option139'], "SZL"); ?>>Swazi Lilangeni</td>
								<td><input type="checkbox" name="wpcr_country_code[option140]" value="SEK" <?php if(isset($country_code['option140'])) checked( $country_code['option140'], "SEK"); ?>>Swedish Krona</td>
								<td><input type="checkbox" name="wpcr_country_code[option141]" value="CHF" <?php if(isset($country_code['option141'])) checked( $country_code['option141'], "CHF"); ?>> Swiss Franc</td>
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option142]" value=" 	SYP" <?php if(isset($country_code['option142'])) checked( $country_code['option142'],"SYP"); ?>>Syrian Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option143]" value="TWD" <?php if(isset($country_code['option143'])) checked( $country_code['option143'],"TWD"); ?>> 	New Taiwan Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option144]" value="TJS" <?php if(isset($country_code['option144'])) checked( $country_code['option144'],"TJS"); ?>>Tajikistani Somoni</td>
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option145]" value="TZS" <?php if(isset($country_code['option145'])) checked( $country_code['option145'],"TZS"); ?>>Tanzanian Shilling</td>
								<td><input type="checkbox" name="wpcr_country_code[option146]" value="THB" <?php if(isset($country_code['option146'])) checked( $country_code['option146'], "THB"); ?>>Thai Baht</td>
								<td><input type="checkbox" name="wpcr_country_code[option147]" value="TOP" <?php if(isset($country_code['option147'])) checked( $country_code['option147'], "TOP"); ?>>Paanga</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option148]" value="TTD" <?php if(isset($country_code['option148'])) checked( $country_code['option148'], "TTD"); ?>>Trinidad and Tobago Dollar</td>
								<td><input type="checkbox" name="wpcr_country_code[option149]" value="TND" <?php if(isset($country_code['option149'])) checked( $country_code['option149'], "TND"); ?>>Tunisian Dinar</td>
								<td><input type="checkbox" name="wpcr_country_code[option150]" value="TRY" <?php if(isset($country_code['option150'])) checked( $country_code['option150'], "TRY"); ?>>Turkish new Lira</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option151]" value="TMM" <?php if(isset($country_code['option151'])) checked( $country_code['option151'],"TMM"); ?>>Turkmen Manat</td>
								<td><input type="checkbox" name="wpcr_country_code[option152]" value="UGX" <?php if(isset($country_code['option152'])) checked( $country_code['option152'], "UGX"); ?>>Ugandan Shilling</td>
								<td><input type="checkbox" name="wpcr_country_code[option153]" value="UAH" <?php if(isset($country_code['option153'])) checked( $country_code['option153'], "UAH"); ?>>Ukrainian Hryvnia</td>	
							</tr>


							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option154]" value="AED" <?php if(isset($country_code['option154'])) checked( $country_code['option154'], "AED"); ?>>UAE Dirham</td>
								<td><input type="checkbox" name="wpcr_country_code[option155]" value="GBP" <?php if(isset($country_code['option155'])) checked( $country_code['option155'], "GBP"); ?>>British Pound</td>
								<td><input type="checkbox" name="wpcr_country_code[option156]" value="USD" <?php if(isset($country_code['option156'])) checked( $country_code['option156'], "USD"); ?>>United States Dollar</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option157]" value="UYU" <?php if(isset($country_code['option157'])) checked( $country_code['option157'],"UYU"); ?>>Uruguayan Peso</td>
								<td><input type="checkbox" name="wpcr_country_code[option158]" value="UZS" <?php if(isset($country_code['option158'])) checked( $country_code['option158'],"UZS"); ?>>Uzbekistani Som</td>
								<td><input type="checkbox" name="wpcr_country_code[option159]" value="VUV" <?php if(isset($country_code['option159'])) checked( $country_code['option159'],"VUV"); ?>> Vanuatu Vatu</td>	
							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option160]" value="VEB" <?php if(isset($country_code['option160'])) checked( $country_code['option160'],"VEB"); ?>>Venezuelan Bolivar</td>
								<td><input type="checkbox" name="wpcr_country_code[option161]" value="VND" <?php if(isset($country_code['option161'])) checked( $country_code['option161'],"VND"); ?>> Vietnamese Dong</td>
								<td><input type="checkbox" name="wpcr_country_code[option162]" value="XPF" <?php if(isset($country_code['option162'])) checked( $country_code['option162'], "XPF"); ?>>CFP Franc</td>

							</tr>

							<tr>
								<td><input type="checkbox" name="wpcr_country_code[option163]" value="YER" <?php if(isset($country_code['option163'])) checked( $country_code['option163'], "YER"); ?>>Yemeni Rial</td>
								<td><input type="checkbox" name="wpcr_country_code[option164]" value="ZMK" <?php if(isset($country_code['option164'])) checked( $country_code['option164'], "ZMK"); ?>>Zambian Kwacha</td>
								<td><input type="checkbox" name="wpcr_country_code[option165]" value="ZWD" <?php if(isset($country_code['option165'])) checked( $country_code['option165'], "ZWD"); ?>>Zimbabwean Dollar</td>	
							</tr>




							</tbody>
						</table>
					</div>

				        		
				</div>

				<div id="plugin-setting">
					<?php $buy_rate = get_option('wpcr_display_buy_rate'); ?>
					<?php $sale_rate = get_option('wpcr_display_sale_rate'); ?>
			    	<label><input type="checkbox" name="wpcr_display_buy_rate" value="yes" <?php if( isset($buy_rate) ) checked( $buy_rate,"yes"); ?>>Display Buy Rate</label></br>
					<label><input type="checkbox" name="wpcr_display_sale_rate" value="yes" <?php if( isset($sale_rate) ) checked( $sale_rate,"yes"); ?>>Display Sale Rate</label>
				</div>
			</div>
    	<!--end Tab-->

		
		<!--end currency chekbox-->
		<input type="hidden" id="pluign_url" value="<?php echo plugins_url();?>">
		 <?php submit_button(); ?>
	</form>

</div>
