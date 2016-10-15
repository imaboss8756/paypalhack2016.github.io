if (typeof YAHOO != "undefined") {
        PAYPAL.namespace("CreditCardInput");

		var cupJsonIndexLength = 0;
		var jsonResponseLength = 0; 
		var cupCard = [];
		PAYPAL.CreditCardInput = {

		/* Returns an array provided a comma-separated string as argument */
		createArray : function(myVal) {
			var a = new Array();
			// if it's not array create one so we can loop over it
			if (myVal.constructor.toString().indexOf("Array") == -1) {
				a = myVal.split(",");
			} else {
				a = myVal;
			}
			// Remove the leading or trailing spaces in each array elements
			for (i=0; i<a.length; i++) {
				a[i] = a[i].replace(/^\s+|\s+$/g, '') ;
			}
			return a;
		},

		/* Description: Disables or enables the input fields inside the given field container */
		// Parameter : fieldBlock -> Elements inside which field container should be disabled or enabled
		// Parameter : action -> 'disable' or 'enable'

		toggleDisabledAttribute : function (fieldBlock, action) {
			var a = new Array();
			a = PAYPAL.CreditCardInput.createArray(fieldBlock);
			
			for (var i=0; i<a.length; i++) {
				if (document.getElementById(a[i])) {
					var fields = document.getElementById(a[i]).getElementsByTagName('*');	
					for (var j=0; j<fields.length; j++) {
						if (action == 'disable') fields[j].setAttribute('disabled','true');
						else fields[j].removeAttribute('disabled');
					}				
				}
			}			
		},

		/* Description: Show or Hide a field. */
		// Parameter: field : Field Container to be shown or hide
		// Parameter: action : Acceptible - 'show' or 'hide'
		// Parameter: disabled (Optional) :  'disable' or 'enablle' -> If this argument is not passed, then the function will automatically disable or enable the input controls.

		fieldHideShow : function(field, action, disableAction) {
			var a = new Array();
			a = PAYPAL.CreditCardInput.createArray(field);

			for (i=0; i<a.length; i++) {
				if (document.getElementById(a[i])) {
					if (action == "show") {
						YAHOO.util.Dom.removeClass(a[i], "hide");
					} else {
						YAHOO.util.Dom.addClass(a[i], "hide");
					}
				}
			}
			// Action: To disable or enable the fields inside the field container
			if (disableAction) {	// disaleAction parameter is available
				PAYPAL.CreditCardInput.toggleDisabledAttribute(field, disableAction);
			} else {
				PAYPAL.CreditCardInput.toggleDisabledAttribute(field, ((action == 'show') ? 'enable' : 'disable'));
			}
		},

		fadeIcons : function(cc_type) {
			var ccLogos = YUD.getElementsByClassName('ccLogo', 'img', 'fieldrowCCType');
						for (i=0; i<ccLogos.length; i++) {
							if (YUD.hasClass(ccLogos[i], cc_type) || cc_type == "") {
								ccLogos[i].style.opacity = "1";
								ccLogos[i].style.filter = "alpha(opacity=100)";
							} else {
								ccLogos[i].style.opacity = "0.13";
								ccLogos[i].style.filter = "alpha(opacity=20)";
							}
						}
		},

		resetPrimary : function() {
			if(YUD.get('set_primary_card')) {
				YUD.get('set_primary_card').value = "0";
			}
		},

		showRelatedFields : function(cc_type) {
			var CCI = PAYPAL.CreditCardInput;

			switch (cc_type) {
				case "V": case "D": case "M": case "C": case "A": case "m": case "J": case "T":
					CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,cardIssueInformation,fieldrowCCDOB,bankInfoCUP,fieldrowCSCOptional,fieldrowSetPrimary','hide');
					CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCExpDate,fieldrowCSC,sectionBillingAddress','show');
					CCI.resetPrimary();
					if (cc_type == 'T') {
						CCI.fieldHideShow ('fieldrowCSCOptional,fieldrowSetPrimary','show');
						if(YUD.get('set_primary_card')) {
							YUD.get('set_primary_card').removeAttribute('disabled');
							if (YUD.get('set_primary_card').checked) {
								YUD.get('set_primary_card').value = "1";
							}
						}
						if (YUD.get('is_cvv_optional') && YUD.get('is_cvv_optional').checked) {
							YUD.get('cvv2_number').setAttribute('disabled','true');
						}
					}
					break;
				case "O": case "S":
						CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCExpDate,fieldrowCSC,cardIssueInformation,sectionBillingAddress', 'show');
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,bankInfoCUP,fieldrowSetPrimary,fieldrowCSCOptional', 'hide');
						CCI.resetPrimary();
						break;
				case "N":
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,cardIssueInformation,fieldrowCSC,bankInfoCUP,fieldrowSetPrimary', 'hide');
						CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCExpDate,fieldrowCCDOB,sectionBillingAddress', 'show');
						if (document.getElementById('cc_country_code')) {
								var cc_country_code = document.getElementById('cc_country_code').value;
								if (cc_country_code == 'IT' || cc_country_code == 'ES')
										CCI.fieldHideShow ('fieldrowCSC', 'show');
										CCI.fieldHideShow ('fieldrowCSCOptional', 'hide');
						}
						CCI.resetPrimary();
						break;
				case "Q":
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,cardIssueInformation,fieldrowCSC,bankInfoCUP,fieldrowSetPrimary', 'hide');
						CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCExpDate,fieldrowCCDOB,sectionBillingAddress', 'show');
						CCI.resetPrimary();
						break;
				case "L":
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,cardIssueInformation,fieldrowCSC,fieldrowCCExpDate,bankInfoCUP,fieldrowSetPrimary', 'hide');
						CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCDOB,sectionBillingAddress', 'show');
						CCI.resetPrimary();
						break;
				case "c":
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms,cardIssueInformation,fieldrowCSC,fieldrowCCExpDate,fieldrowCCDOB,sectionBillingAddress,fieldrowSetPrimary', 'hide');
						CCI.fieldHideShow ('fieldrowCCNumber, bankInfoCUP','show');
						CCI.resetPrimary();
						break;
				default:
					CCI.fieldHideShow ('fieldrowCCNumber,fieldrowCCExpDate,cardIssueInformation,fieldrowCSC,fieldrowCCDOB,bankInfoCUP,fieldrowSetPrimary', 'hide');
					CCI.fieldHideShow ('sectionBillingAddress','show');
					if(YUD.get('set_primary_card')) {
						YUD.get('set_primary_card').setAttribute('disabled','true');
						CCI.resetPrimary();
					}
					if (cc_type == "") 	
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms', 'hide');
					else 			
						CCI.fieldHideShow ('bank-fields,field-dob,dob-terms', 'show');

					if (document.getElementById('cc_number_update_mode'))
						CCI.fieldHideShow ('fieldrowCCNumber', 'show');
			}
		},
		
		getCCType : function (cc_number) {
			var cc_type;
			if (document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2")
			{
				cc_number = cc_number.replace(/^\s+/,"");
				cc_number = cc_number.replace(/\s+$/,"");
				if (cc_number.length <= cupJsonIndexLength){
					var diff = cupJsonIndexLength - cc_number.length;
					for (j=0; j<diff ; j++ )
					{
						cc_number = cc_number +'0';
					}
				} else {
					cc_number = cc_number.substring(0, cupJsonIndexLength);
				}

				if (cc_number >= cupCard.matches[0].index && cc_number <= cupCard.matches[jsonResponseLength-1].index )
				{
					for ( var i = 0; i < cupCard.matches.length; i++ ) {
						if ( cc_number >= cupCard.matches[i].index ) {
							cc_type = cupCard.matches[i].type; 
						} else break; /*to exit from the for loop once when the first larger index than the keyed in cc number is found*/
					}
				}

			} else {
				var prefixElectron = PAYPAL.CreditCardInput.createArray ('4917,4913,4508,4844,417500');

				var regexElectron	= /^(4917|4913|4508|4844|417500)/;
				var regexVisa		= /^4/;
				var regexMC		= /^5/;
				var regexJCB		= /^35/;
				var regexAmex		= /^3/;
				var regexDiscover	= /^(36|6)/;
				
				
				if (cc_number.match(regexVisa)) {
					cc_type = 'visa';
					if (cc_number.match(regexElectron) && document.getElementById('pm-electron')) 
						cc_type = 'visa,electron';				
				} else if (cc_number.match(regexMC)) {
					cc_type = 'mastercard';	
				} else if (cc_number.match(regexJCB)) {
					cc_type = 'jcb';
				} else if (cc_number.match(regexAmex)) {
					cc_type = 'amex';
				} else if (cc_number.match(regexDiscover)) {
					cc_type = 'discover';
				}
				
			}
			return cc_type; 
		},

		autoSelectCardType : function (sourceObj, blnHighlightLogo) {
			var arrSupportedCCTypes = PAYPAL.CreditCardInput.createArray('visa, electron, mastercard, amex, jcb, discover');
			var cc_type;
			if (sourceObj) {
				var selCCType = PAYPAL.CreditCardInput.getCCType(sourceObj.value);
				if (selCCType) {
					if(document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2"){
						PAYPAL.CreditCardInput.fadeIcons(selCCType);		
						PAYPAL.CreditCardInput.showRelatedFields(selCCType);
						PAYPAL.CreditCardInput.toggleButton(selCCType);
						if (document.getElementById('credit_card_type'))
						{
							document.getElementById('credit_card_type').value = selCCType;
						}
					}
					else {
						var arrSelCCType = PAYPAL.CreditCardInput.createArray(selCCType);
						for (var i=0; i < arrSupportedCCTypes.length; i++) {  // Loop thro' our supported CC Types
							if (document.getElementById('pm-' + arrSupportedCCTypes[i])) { // Check if logo is available
								for (var j=0; j < arrSelCCType.length; j++) { 
									var objLogoLabel = document.getElementById('pm-' + arrSupportedCCTypes[i]);
									if (arrSelCCType[j] == arrSupportedCCTypes[i]) {
										// Make the radio button checked
										document.getElementById(arrSelCCType[j]).checked = true;
										if (blnHighlightLogo) {
											objLogoLabel.style.filter="alpha(opacity=100)";
											objLogoLabel.style.opacity = "1";
										}
									} else {
										if (blnHighlightLogo) {
											objLogoLabel.style.opacity = "0.13";
											objLogoLabel.style.filter="alpha(opacity=20)";
										}
									}
								}  

							}
						}
					}
				} else {
					if(document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2"){
						var ccLogos = YUD.getElementsByClassName('ccLogo', 'img', 'fieldrowCCType');
						for (var i=0; i<ccLogos.length; i++) {
							ccLogos[i].style.opacity = "1";
							ccLogos[i].style.filter = "alpha(opacity=100)";
						}
							PAYPAL.CreditCardInput.fieldHideShow ('fieldrowCCExpDate,cardIssueInformation,fieldrowCSC,fieldrowCCDOB,bankInfoCUP', 'hide');
							PAYPAL.CreditCardInput.fieldHideShow ('sectionBillingAddress','show');
							PAYPAL.CreditCardInput.toggleButton(selCCType);
							if (document.getElementById('serviceNotEnabled'))
							{
								document.getElementById('serviceNotEnabled').checked = "true";
							}
						
					}
					else {
						for (var i=0; i<arrSupportedCCTypes.length; i++) {
							if (document.getElementById('pm-' + arrSupportedCCTypes[i])) {
								document.getElementById('pm-' + arrSupportedCCTypes[i]).style.opacity = "1";
								document.getElementById('pm-' + arrSupportedCCTypes[i]).style.filter="alpha(opacity=100)";
							}
						}	
					}
				}
			}
		},
		
		
		toggleButton : function(card_type) {
			if (card_type == 'c' || this.id == 'serviceNotEnabled') {
				YUD.get("add").setAttribute("disabled", "disabled");
			} else {
				YUD.get("add").removeAttribute("disabled");
			}
		},
		
		buildCardArray : function(data, request, exception) {
			var jsonResponse = eval("("+request.responseText+")");
			cupJsonIndexLength = jsonResponse.maxLength;
			jsonResponseLength = jsonResponse.matches.length;
			cupCard.matches = jsonResponse.matches;
		},

		init : function() {
			// If the drop-down design is used...
			if (document.getElementById('credit_card_type') && document.getElementById('credit_card_type').nodeName == "SELECT" && !(document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2")) {
				PAYPAL.CreditCardInput.showRelatedFields (document.getElementById('credit_card_type').value);
				YAHOO.util.Event.addListener ('credit_card_type', 'change', function() {
					PAYPAL.CreditCardInput.showRelatedFields (this.value);
					var cc_type = document.getElementById('credit_card_type').value.replace(/\s/,"");
					if (document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2") {
						PAYPAL.CreditCardInput.fadeIcons(cc_type);		
					}
				});
			} else if (YAHOO.util.Dom.hasClass ('cctype', 'radio')) { 	// Radio Design
				if (YAHOO.util.Dom.hasClass('cctype', 'noLabel')) {
					YAHOO.util.Event.addListener('cc_number', 'keyup', function() {
						PAYPAL.CreditCardInput.autoSelectCardType(this, false);
					});
				} else {
					var objCCType = document.getElementById('cctype').getElementsByTagName('input');
					for (var i=0; i<objCCType.length; i++) {
						if (objCCType[i].checked) 
							PAYPAL.CreditCardInput.showRelatedFields (objCCType[i].value);
						YAHOO.util.Event.addListener (objCCType[i], 'click', function() {
							if (this.checked) PAYPAL.CreditCardInput.showRelatedFields (this.value);
						});
					}
				}
			} else {  // Auto Selection 
					YAHOO.util.Event.addListener ('cc_number', 'keyup', function() {
					PAYPAL.CreditCardInput.autoSelectCardType(this, true);
					var cc_type = YUD.get('credit_card_type').value;
					if (cc_type == "c"){
						YUD.get('serviceNotEnabled').checked = true;
					}
				});
			}
			if (document.getElementById('cc_country_code') && document.getElementById('cc_country_code').value == "C2"){
				YUE.addListener ('serviceEnabled', 'click', PAYPAL.CreditCardInput.toggleButton);
				YUE.addListener ('serviceNotEnabled', 'click', PAYPAL.CreditCardInput.toggleButton);
				YUD.get('credit_card_type').style.display = "none";
				var url = "webscr?cmd=_get-cc-bin-numbers";
				PAYPAL.CreditCardInput.fieldHideShow('bank-fields, bankInfoCUP,field-dob,dob-terms,cardIssueInformation,fieldrowCSC,fieldrowCCExpDate,fieldrowCCDOB', 'hide');
				PAYPAL.CreditCardInput.fieldHideShow('fieldrowCCNumber', 'show');
				PAYPAL.util.Connect.send(url, {callback: PAYPAL.CreditCardInput.buildCardArray});
				
			}

			/* BEGIN - Profie - CCAdd Functions */
			YAHOO.util.Event.addListener ('existing_address_indicator', 'click', function() {
				YAHOO.util.Dom.addClass('AddressFields', 'hide');
				YAHOO.util.Dom.removeClass('AddressFields', 'opened');
			});
			YAHOO.util.Event.addListener ('new_address_indicator','click', function() {
				YAHOO.util.Dom.addClass('AddressFields', 'opened');
				YAHOO.util.Dom.removeClass('AddressFields','hide');
			});
			if (!document.getElementById('new_address_indicator').checked) {
				YAHOO.util.Dom.addClass('AddressFields', 'hide');
				YAHOO.util.Dom.removeClass('AddressFields', 'opened');
			}
			if (YUD.get('is_cvv_optional') && YUD.get('is_cvv_optional').checked) {
				YUD.get('cvv2_number').setAttribute('disabled','true');
			}
			YUE.addListener('is_cvv_optional', 'click', function() {
				PAYPAL.CreditCardInput.toggleDisabledAttribute("fieldRowCSCInput", this.checked?'disable':'enable');
				if(this.checked) {
					YUD.get("cvv2_number").value = '';
				}
			});
			YUE.addListener('set_primary_card', 'click', function() {
				YUD.get('set_primary_card').value = (YUD.get('set_primary_card').checked)?"1":"0";
			});
			/* END - Profile - CCAdd Functions */
		}
	}
}
YAHOO.util.Event.addListener (window, 'load', PAYPAL.CreditCardInput.init);
