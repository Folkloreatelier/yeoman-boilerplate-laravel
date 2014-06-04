require.config({

    paths: {
        'jquery': 'components/jquery/jquery',
        'text': 'components/requirejs-text/text',
        'underscore': 'components/underscore/underscore',
        'backbone': 'components/backbone/backbone',

        'controllers' : 'app/controllers',
        'views' : 'app/views',
        'models' : 'app/models',
        'collections' : 'app/collections',
        'templates' : 'app/templates'

    },
    shim: {

        'underscore': {exports: '_'},
        'backbone': {exports: 'Backbone',deps: ['jquery','underscore']}

    }
});

require(
[
	'jquery','underscore','backbone',

    'app/app'

], function ($,_,Backbone,App) {

    'use strict';

    $(function() {
        App.init();
    });
});
