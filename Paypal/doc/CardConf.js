
if (typeof YAHOO != "undefined") {
	PAYPAL.namespace("CardConfirmation");
	PAYPAL.CardConfirmation = {
		objLightBox: null,

		initLightBox : function (param) {
			objLightBox	= null;
			if (document.getElementById('CardConfLB')) {
				document.getElementById('CardConfLB').parentNode.removeChild(document.getElementById('CardConfLB')); 
			}
			imgLoading	= "<center><img height='42' src='/en_US/i/icon/icon_animated_prog_42wx42h.gif' height='42'></center>";
			objLightBox	= new PAYPAL.util.Lightbox("CardConfLB", {body: imgLoading, close: false });
			objLightBox.show();
			if (document.getElementById('reviewForm')) {
				PAYPAL.util.Connect.submitForm (document.getElementById('reviewForm'), {submitter: document.getElementById('cc-confirmation-flow'),'callback':PAYPAL.CardConfirmation.refreshContent});
			} 
			else if (YUD.get('ismForm') && YUD.get('initiateCCFlow').value == 0) {
				YUD.get('initiateCCFlow').value=0;
				YUD.get('ShowCardConfirmationOnLoad').name='cc-confirmation-flow';
				PAYPAL.util.Connect.submitForm (YUD.get('ismForm'), {submitter: YUD.get('cc-confirmation-flow'),'callback':PAYPAL.CardConfirmation.refreshContent});
				YUD.get('ShowCardConfirmationOnLoad').name='show-card-confirmation-onload';
			} else {
				var cmdURL;
				cmdURL = (document.getElementById('CardConfirmationCmdURL')) ? document.getElementById('CardConfirmationCmdURL').value : null;
				if (document.getElementById('CONTEXT_CGI_VAR')) {
					param += "&CONTEXT=" + document.getElementById('CONTEXT_CGI_VAR').value;
				}
				PAYPAL.util.Connect.send (cmdURL, {'method': 'POST','query':param,'type': 'minipage', 'callback': PAYPAL.CardConfirmation.refreshContent});
			}
		},

		refreshContent : function(data) {
			if (data) {
				objLightBox.setBody (data.html);

				YUE.addListener ('cc_id', 'change', function() {
					document.getElementById('refresh').value = 1;
					PAYPAL.util.Connect.submitForm(this.form, {'submitter': this, 'method' : 'POST', 'callback': PAYPAL.CardConfirmation.refreshContent});
					PAYPAL.CardConfirmation.setProgressState();
				});

				YUE.addListener(YUD.getElementsByClassName('ajaxSubmit', 'input'), 'click', function(e) {
					YUE.preventDefault(e);
					PAYPAL.util.Connect.submitForm(this.form, {submitter: this, 'method' : 'POST', 'callback': PAYPAL.CardConfirmation.refreshContent});
					PAYPAL.CardConfirmation.setProgressState();
				});
				YUE.addListener(YUD.getElementsByClassName('returnToMerchant', 'input'), 'click', function(e) {
					YUE.preventDefault(e);
					var objReturn = document.createElement('input');
					objReturn.setAttribute('type', 'hidden');
					objReturn.setAttribute('name', 'cancel_return');
					objReturn.setAttribute('value', '1');
					document.getElementById('reviewForm').appendChild(objReturn);
					document.getElementById('reviewForm').submit();
				});
				YUE.addListener(YUD.getElementsByClassName('submitParent', 'input'), 'click', function(e) {
					YUE.preventDefault(e);
					document.getElementById('reviewForm').submit();
				});
				YUE.addListener(YUD.getElementsByClassName('closeBox', 'input'), 'click', function(e) {
					YUE.preventDefault(e);
					objLightBox.close();
				});
				YUE.addListener (document, "keypress", PAYPAL.CardConfirmation.keyInputHanlder);
			}
			YUD.get('CardConfLB').style.cursor = "default";
		},
		setProgressState: function() {
			var arrInputs = YUD.get('CardConfLB').getElementsByTagName('input');
			YUD.get('CardConfLB').style.cursor = "wait";
			for (i=0; i < arrInputs.length; i++) {
				arrInputs[i].disabled = true;
				YUD.addClass(arrInputs[i], 'disabled');
			}
		},

		attachOnLimitSelection: function() {
			YUE.addListener(YUD.getElementsByClassName('confirmCCOnLimitsCheck', 'input'), 'click', function(e) {
				var arrLimitChkBxs = YUD.getElementsByClassName('setConfirmCC', 'input');
				for (i=0; i<arrLimitChkBxs.length; i++) {
					if (arrLimitChkBxs[i].checked) {
						YUE.preventDefault(e);
						PAYPAL.CardConfirmation.initLightBox('');
						break;
					};
				}
			});
		},

		keyInputHanlder : function(e) {
			var keyPressed = e.charCode || e.keyCode;
			var isMasked = YUD.getElementsByClassName('masked', 'body').length;
			if (keyPressed == 13 && isMasked == 1) {
				var tarElement = e.target || e.srcElement;
				if (tarElement.tagName.toLowerCase() == "input") {
					YUE.preventDefault(e);
					var btnDefault = YUD.getElementsByClassName("primary", "input", document.getElementById('CardConfirmation'));
					btnDefault[0].click();
				}
			}
			if (keyPressed == 27) {
				YUE.preventDefault(e);
				YUE.stopPropagation(e);
				return false;
			}
		}
	}
}



YUE.onDOMReady(function() {
	YUE.addListener(YUD.getElementsByClassName('confirmCC', 'input'), 'click', function(e) {
		YUE.preventDefault(e);
		var params = "";
		if (document.getElementById('FromProfileCC')) {
			params = "complete_expanded_use";
		}
		var target = YUE.getTarget(e);		
		if(target.form.elements.cc_id.value){
			params = params + "&cc_id=" + target.form.elements.cc_id.value;
		}
		PAYPAL.CardConfirmation.initLightBox (params);
	});
	YUE.addListener(YUD.getElementsByClassName('confirmCC', 'a'), 'click', function(e) {
		YUE.preventDefault(e);
		var params = "";
		if(YUD.get('ismForm') && YUD.get('initiateCCFlow')) {
			YUD.get('initiateCCFlow').value=1;
		} else {
		params += "card_confirmation_info=1";
		params += document.getElementById('cc_id') ? "&cc_id=" + document.getElementById('cc_id').value : '';
		}
		PAYPAL.CardConfirmation.initLightBox (params);
	});
	if (document.getElementById('ShowCardConfirmationOnLoad')) {
		params = document.getElementById('CardConfirmationOnLoadParams') ? document.getElementById('CardConfirmationOnLoadParams').value : '';
		PAYPAL.CardConfirmation.initLightBox (params);
	}

	var elems = YUD.getElementsByClassName('confirmCC','input');
	if(elems){
		for(var i=0; i<elems.length; i++){
			elems[i].disabled = false;
			YUD.removeClass(elems[i], 'disable');
			if (YUD.hasClass(elems[i].parentNode, 'buttonAsLink')) {
				YUD.removeClass(elems[i].parentNode, 'disable');
			}
		}
	}
});
