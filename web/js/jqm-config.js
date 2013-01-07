var theme = "b";
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
    $.mobile.linkBindingEnabled = false;
    $.mobile.hashListeningEnabled = false;
    $.mobile.pushStateEnabled = false;
	$.mobile.allowCrossDomainPages = true;
	$.support.cors = true;
	$.mobile.page.prototype.options.backBtnTheme    = theme;
	// Page
	$.mobile.page.prototype.options.headerTheme = theme;  // Page header only
	$.mobile.page.prototype.options.footerTheme = "c";
	$.mobile.defaultPageTransition = "fade";
	// Listviews
	$.mobile.listview.prototype.options.headerTheme = 'b';  // Header for nested lists
	$.mobile.listview.prototype.options.theme           = theme;  // List items / content
	$.mobile.listview.prototype.options.dividerTheme    = 'b';  // List divider

	$.mobile.listview.prototype.options.splitTheme   = theme;
	$.mobile.listview.prototype.options.countTheme   = theme;
	$.mobile.listview.prototype.options.filterTheme = theme;
	$.mobile.listview.prototype.options.loadingMessage = "Cargando";
	$.mobile.listview.prototype.options.pageLoadErrorMessage = "Error Cargando la pagina";
    // Remove page from DOM when it's being replaced
    //$('div[data-role="page"]').live('pagehide', function (event, ui) {
    //    $(event.currentTarget).remove();
    //});
});
