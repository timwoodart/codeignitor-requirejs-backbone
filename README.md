# CodeIgniter with RequireJS and Backbone

If you need a web app with a strong front-end interaction with access to back-end processing, such as querying an API for JSON data or building an admin dashboard to manage your assets, you can use this repo as a good starting point to hit the ground running.

There are several ways to get a RequireJS/Backbone App up and running, but I needed to be able support mulitple users, manage content and uploads, and be able to serve data through an API, so I have choosen to integrate everything together with the CodeIgniter framework since many of these extras are built in and well documented.

## Whats Included?
### Frameworks, libraries and some standard html/css templates
* [CodeIgniter Version 3.0.3](ellislab.com/codeigniter)
* [HTML5 Boilerplate](html5boilerplate.com/)
* [Normalize](http://necolas.github.com/normalize.css/)
* [Modernizr](modernizr.com/)
* [RequireJS](http://requirejs.org/)
* [jQuery](http://jquery.com/)
* [jQueryUI](jqueryui.com/)
* [Backbone](http://documentcloud.github.com/backbone)
* [Underscore](underscorejs.org/)
* [Hogan](twitter.github.com/hogan.js/)

### RequireJS configured to load our libraries from a CDN with a fallback to local copies of the libs.
@see `js/main.js` for this is configured. Note that the CDN is commented out for development. Uncomment when you go live.

### Sample Ajax API Controller
@see `application/controllers/api/ajax` and `application/config/routes/` for how this is wired up.
The gist is I created a simple API controller  to handle your Ajax calls. Configure for your calls

### Example of everything running together.
I created a super simple example to show a landing page which will load our header and footer templates, pass any CI data to the view from controller, RequireJS to load up our libraries when needed and make a call to a API Controller which return JSON data.

## Requirements
You need a LAMP stack, access to database, and a machine/server configured for running PHP version 5.1.6 or newer. Also see [CodeIgniter Server Requirements](http://ellislab.com/codeigniter/user-guide/general/requirements.html) for more CI info.

## Setup
### CodeIgniter
If you are not already aware of the CodeIgniter basic setup, you will need to edit the config files in your application. Navigate to `application/config` folder and see the [CI Database Configuration](http://ellislab.com/codeigniter/user-guide/database/configuration.html) and [CI Encryption Class](http://ellislab.com/codeigniter/user-guide/libraries/encryption.html) for starters, and then do some research to customize anything else you would need.

### Require and Backbone
Require and Backbone are up and running with very basic settings. There are a quite a few tutorials on the web for taking Backbone to the next level. I found this article to be quite informative - [JavaScript Architecture: RequireJS Dependency Management](http://aaronhardy.com/javascript/javascript-architecture-requirejs-dependency-management/). I used the basic logic in setting up the structure to this client-side app. Refer to the `js` folder and implement your functionality there.

## Digging In
You can look through the commits to see how we ended up to this state, but just to note a few of the highlights and

### CI Enable Hooks to load custom layouts
Very helpful for being able to have multiple layouts for pages, widgets, popups, ect...
@see: http://www.syahzul.com/codeigniter/codeigniter-layout-without-using-additional-library/

### MY_Model and MY_Controller Overrides
Add some extra basic functionality proves to be helpful.
@see `application/core/MY_Model.php` and `application/core/MY_Controller.php`

### Ajax API
This was the main reason I set this all up. I wanted to be able to touch my database and get records from the client-side through an API until I get up and running fully with NoSQL and Node. So using CI to process data and output JSON data with this API Controller makes this possible to get data to the client-side in a pretty secure fashion.

NOTE: that moving forward you must use best practices to guard yourself against XSS attacks.
@see [OWASP](https://www.owasp.org/) for more info about security, and this is a good read about [Testing for AJAX Vulnerabilities](https://www.owasp.org/index.php/Testing_for_AJAX_Vulnerabilities_%28OWASP-AJ-001%29)

Also, @see [CI Input class](http://ellislab.com/codeigniter/user-guide/libraries/input.html) and [CI Security Class](http://ellislab.com/codeigniter/user-guide/libraries/security.html) for built in Global XSS Filtering and Security options.


## Thats it for now - Happy Coding!

