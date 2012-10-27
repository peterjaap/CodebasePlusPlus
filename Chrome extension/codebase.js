var serverside = 'http://www.yourdomain.com/path/to/serverside/index.php';

chrome.extension.sendRequest({method: "getLocalStorage", key: "codebaseplusplus_username"}, function(response) {
	username = response.data;
	chrome.extension.sendRequest({method: "getLocalStorage", key: "codebaseplusplus_apikey"}, function(response) {
	  apikey = response.data;
		jQuery('<div id="codebaseplusplus"><img src="https://dq0ntt3ts4asf.cloudfront.net/assets/3a38fa/images/spinners/spinner.gif" alt="Hang on..." title="Hang on..." /></div>').insertBefore('p.intro');
		jQuery.get(serverside, {'username':username,'apikey':apikey}, function(data) { jQuery('#codebaseplusplus').html(data); });
	});
});
jQuery("ul.breadcrumb li a:last").attr('href','../');
