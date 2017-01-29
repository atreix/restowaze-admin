var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// Gentelella vendors path : vendor/bower_components/gentelella/vendors

elixir(function(mix) {

    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/css/custom.min.css', 'public/admin/css/gentelella.min.css');

    // Smart Wizard
    mix.copy('vendor/bower_components/gentelella/vendors/jQuery-Smart-Wizard/styles/smart_wizard.css', 'public/admin/css/smart_wizard.css');

    // Dropzone
    mix.copy('vendor/bower_components/gentelella/vendors/dropzone/dist/min/dropzone.min.css', 'public/admin/css/dropzone.min.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('vendor/bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/js/custom.min.js', 'public/admin/js/gentelella.min.js');

    // Smart Wizard
    mix.copy('vendor/bower_components/gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js', 'public/admin/js/jquery.smartWizard.js');

    // Validator
    mix.copy('vendor/bower_components/gentelella/vendors/validator/validator.js', 'public/admin/js/validator.js');

    // dropzone
    mix.copy('vendor/bower_components/gentelella/vendors/dropzone/dist/min/dropzone.min.js', 'public/admin/js/dropzone.min.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
