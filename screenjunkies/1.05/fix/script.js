defineClass('BKPPhoneRootViewController',{
	sidebarExpandTapped:function(sender){
		self.ORIGsidebarExpandTapped(sender);

		var  alert = require('UIAlertView').alloc().initWithTitle_message_delegate_cancelButtonTitle_otherButtonTitles("Alert", "hahahaha", self, "OK", null);
		alert.show();
	}
})