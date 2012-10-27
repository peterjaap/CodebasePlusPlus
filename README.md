# Codebase++ #
## About ##
Codebase++ is a small Chrome extension that adds features to Codebase that we wanted but the awesome Codebase team didn't have the time to build. Or they decided it was a stupid idea. But we built it anyway.

## Features ##
Right now, the extension does two things; it adds an extra overview to /tickets that shows the open tickets with deadlines and when those deadlines are. It also fixes the behavior of the 'Tickets' link in the breadcrumb after opening a ticket from /tickets; it used to go back to /tickets while you'd expect it to go to the ticket listing of the current project.

## Installation ##
Place the contents of the serverside directory somewhere on a publicly accessible though obscure URL. Then place the URL in codebase.js and load the Chrome extension (see step 4 on https://developer.chrome.com/extensions/getstarted.html).  
If you're using an alias for Codebase on your own domain, be sure to add it to the 'matches' list in the Chrome extension's manifest.json.  
After installing the Chrome extension, go to the Extension page (under Tools) and click options. Fill out your API credentials (you can find these at the bottom of the My Profile page in Codebase).

## Contact ##
GitHub: https://github.com/peterjaap/mate  
Twitter: https://twitter.com/PeterJaap  
Email: peterjaap@elgentos.nl  
