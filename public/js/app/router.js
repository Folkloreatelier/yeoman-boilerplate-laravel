define(
[
	'jquery','underscore','backbone'
],

function(

	$,_,Backbone

) {

	'use strict';

	var Router = Backbone.Router.extend({

        routes: {
            '*path' : 'all'
        },


        all: function(path) {

            

        }

    });


    return Router;

});