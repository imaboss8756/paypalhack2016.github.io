/**
 * Spec-24595 - Edit Address Phase II javascript library.
 * Used for Inlinebox for Confirm Home page
 *
 * @author Arun Prasanna
 * @requires PAYPAL
 * @requires YAHOO
 * @requires YAHOO.util.Dom
 * @requires YAHOO.util.Event
  * @param {Object} config
 */

/* Setup our namespace */
PAYPAL.namespace("gopsrisk");
  
 /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	Inline Box Module
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
PAYPAL.gopsrisk.INLINEBOX = function(config){
	this._init(config);
};

PAYPAL.gopsrisk.INLINEBOX.prototype = {
 sections : new Array(),
 actionlinks : new Array(),
 cancellinks : new Array(),
 sec : '',
 prevsec: '',
 cancellink : '',
 currentform: '',
 
 /* function to collapse the expanded sections */
 collapse : function(event){
	  YAHOO.util.Event.preventDefault(event);
	  if(currentform){
		  currentform.reset();
		}
		YAHOO.util.Dom.addClass(sec,'accessAid');
		YAHOO.util.Dom.removeClass(cancellink,'accessAid');
		if(document.getElementById('showHide')){
			YAHOO.util.Dom.removeClass(prevsec,'accessAid');
		}
	if(YAHOO.util.Dom.hasClass("confirmCC", "noCC")) {
		YAHOO.util.Dom.addClass("confirmCC", "hide");
	}
 },
 
 /* function to expand  section, following the link */
 expand : function(event){

  YAHOO.util.Event.preventDefault(event);
  YAHOO.util.Dom.addClass(sections,'accessAid');
  YAHOO.util.Dom.removeClass(actionlinks,'accessAid'); 
  sec = this.nextSibling;
  cancellink = this;
  currentform = sec.getElementsByTagName("form")[0];
  YAHOO.util.Dom.addClass(cancellink,'accessAid');
  YAHOO.util.Dom.removeClass(sec,'accessAid');
    if(document.getElementById('showHide')){
    prevsec=document.getElementById('showHide');
  YAHOO.util.Dom.addClass(prevsec,'accessAid');
  }
	YAHOO.util.Dom.removeClass("confirmCC", "hide");
 },
   /*Added by Murali for Add Street Address Page */
hideRecipient : function(e){
	YAHOO.util.Dom.removeClass('cc_details','accessAid');
	YAHOO.util.Dom.addClass('add_name_id','accessAid');
	YAHOO.util.Dom.addClass('generic_add_name_id','accessAid');
	YAHOO.util.Dom.addClass('recipient_Name','accessAid');
	YAHOO.util.Dom.addClass('recp_label','accessAid');
	//show country info tooltip
	YAHOO.util.Dom.removeClass('countryInfoId','accessAid');

},

showRecipient : function(e){
	YAHOO.util.Dom.addClass('cc_details','accessAid');
	YAHOO.util.Dom.removeClass('add_name_id','accessAid');
	YAHOO.util.Dom.removeClass('generic_add_name_id','accessAid');
	YAHOO.util.Dom.removeClass('recipient_Name','accessAid');
	YAHOO.util.Dom.removeClass('recp_label','accessAid');
	//hide country info tooltip
	YAHOO.util.Dom.addClass('countryInfoId','accessAid');

},
hideEdit : function(e){
	YAHOO.util.Dom.addClass('edit','accessAid');
},
submitEdit : function(e){
	this.form.submit();
},
  /*Till Here */
 _init : function(config) { 
  config = config || {};
  actionlinks = YAHOO.util.Dom.getElementsByClassName("actionLink", "a");
	YAHOO.util.Dom.removeClass(actionlinks,'hide');
  sections = YAHOO.util.Dom.getElementsByClassName("section", "div");
  cancellinks = YAHOO.util.Dom.getElementsByClassName("cancelLink", "a");
	YAHOO.util.Dom.removeClass(cancellinks,'hide');
    /*Added by Murali for Add Street Address Page */
  if (YAHOO.util.Dom.hasClass('page', 'addStreet')) {
   this.hideRecipient();
  }  

 if (YAHOO.util.Dom.hasClass('page', 'giftStreet')) {
   this.showRecipient();
  }  
    /*Added by Murali for Edit Credit Card Page */
  if (YAHOO.util.Dom.hasClass('page', 'editCreditCard')) {
   this.hideEdit();
  }     
   YAHOO.util.Event.addListener('editAddress', "change", this.submitEdit);
 
  /*Till here */
  YAHOO.util.Event.addListener(actionlinks, "click", this.expand);
  YAHOO.util.Event.addListener(cancellinks, "click", this.collapse);    
  YAHOO.util.Dom.removeClass(actionlinks,'accessAid');
  YAHOO.util.Dom.addClass(sections,'accessAid');  
  /*Added by Murali for Add Street Address Page */
  YAHOO.util.Event.addListener('home_work', "click", this.hideRecipient);
  YAHOO.util.Event.addListener('gift', "click", this.showRecipient);
  /* till here */
  
  return true;
 }
};

new PAYPAL.gopsrisk.INLINEBOX();

//YAHOO.util.Event.addListener(window,'load',PAYPAL.gopsrisk.INLINEBOX._init);
  
  

