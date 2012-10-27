// Save this script as `options.js`

// Saves options to localStorage.
function save_options() {
  var username = window.document.form.username.value;
  window.localStorage["codebaseplusplus_username"] = username;
  var apikey = window.document.form.apikey.value;
  window.localStorage["codebaseplusplus_apikey"] = apikey;
  
  // Update status to let user know options were saved.
  alert('Updated!');
}

// Restores select box state to saved value from localStorage.
function restore_options() {
  var username = window.localStorage["codebaseplusplus_username"];
  var apikey = window.localStorage["codebaseplusplus_apikey"];
  if (!username && !apikey) {
    return;
  }
  window.document.form.username.value = username;
  window.document.form.apikey.value = apikey;
}

window.onload = function(){
	restore_options();
    document.querySelector('#save').onclick=save_options;
}