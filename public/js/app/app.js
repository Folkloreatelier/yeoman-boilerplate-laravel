define(
[
	'jquery','underscore','backbone',

	'app/router'

],

function(

	$,_,Backbone,

	Router

) {

	'use strict';

	var App = {

		'router' : null,

		'init' : function() {

			App.initRouter();

			App.initEvents();

			App.initLayout();

			if (!Modernizr.history) {
			    Backbone.history.start({
					pushState: true,
					hashChange: false
			    });
			} else {
			    Backbone.history.start({
					pushState: true
			    });
			}

		},

		'initRouter' : function() {

			var router = App.router = new Router();

		},

		'initEvents' : function() {

			$(window).resize(function() {
				App.trigger('resize');
			});

			if(Modernizr.touch) {

				$(document).on('touchmove',function(e) {
					e.pageX = e.originalEvent.touches[0].pageX;
					e.pageY = e.originalEvent.touches[0].pageY;
					App.trigger('mousemove',e);
				});

			} else {

				$(document).on('mousemove',function(e) {
					App.trigger('mousemove',e);
				});

				$(document).on('mousedown',function(e) {
					App.trigger('mousedown',e);
				});

				$(document).on('mouseup',function(e) {
					App.trigger('mouseup',e);
				});

			}

		},

		initLayout: function() {



		}

	};
	_.extend(App, Backbone.Events);
	window.App = App;

	return App;

});
