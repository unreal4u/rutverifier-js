[![Build Status](https://travis-ci.org/unreal4u/rutverifier-js.png?branch=master)](https://travis-ci.org/unreal4u/rutverifier-js)

rutverifier-js
======

Credits
--------

This class is made by unreal4u (Camilo Sperberg). [http://unreal4u.com/](unreal4u.com).

About this class
--------

* Can be used to verify chilean RUT (Rol único tributario) or RUN (Rol único nacional). (<a href="http://www.registrocivil.cl/PortalOI/html/faq/Cod_Area_4/Cod_Tema_30/pregunta_155.html">Difference</a> [spanish])
* Is a pure JavaScript implementation. Will return true or false depending on whether the given RUT is valid or not.
* @TODO Will also format the RUT/RUN into the correct format.

Basic usage
----------

<pre>&lt;script type="text/javascript" src="dist/rutverifier.min.js"&gt;
if (rutVerification('30.686.957-4')) {
    console.log('RUT is valid');
} else {
    console.log('RUT is not valid');
}
&lt;/script&gt;
</pre>
* Congratulations! That's all you've had to do.

Developing
----------

In order to develop, you'll better off installing [http://nodejs.org/](Node.js) in order to run the automated tests and other stuff as well.

Then execute the following at the root of the project:
<pre>
npm install
</pre>

In order to do the JavaScript testing and validation, execute the following at
the project's root dir:
<pre>
grunt
</pre>

Recommended is to install grunt as a global dependency:
<pre>
npm install -g grunt-cli
</pre>

Pending
---------
* Improvements on formatting RUT
* PHP class that can read out the minified version of this class
* Submit to packagist in order to add it as an dependency of unreal4u/rutverifier

Version History
----------

* 1.0 :
    * Initial version

Contact the author
-------

* Twitter: [@unreal4u](http://twitter.com/unreal4u)
* Website: [http://unreal4u.com/](http://unreal4u.com/)
* Github:  [http://www.github.com/unreal4u](http://www.github.com/unreal4u)
