goog.provide('roji.component.VideoComponent');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.ui.ImageContainer');
goog.require('manic.ui.VideoContainer');


/**
 * The VideoComponent constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
roji.component.VideoComponent = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $.extend({}, roji.component.VideoComponent.DEFAULT, options);
  this.element = element;

  

  


  console.log('roji.component.VideoComponent: init');
};
goog.inherits(roji.component.VideoComponent, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
roji.component.VideoComponent.DEFAULT = {
  'option_01': '',
  'option_02': ''
};

/**
 * VideoComponent Event Constant
 * @const
 * @type {string}
 */
roji.component.VideoComponent.EVENT_01 = '';

/**
 * VideoComponent Event Constant
 * @const
 * @type {string}
 */
roji.component.VideoComponent.EVENT_02 = '';


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.component.VideoComponent.prototype.private_method_01 = function() {};
roji.component.VideoComponent.prototype.private_method_02 = function() {};
roji.component.VideoComponent.prototype.private_method_03 = function() {};
roji.component.VideoComponent.prototype.private_method_04 = function() {};
roji.component.VideoComponent.prototype.private_method_05 = function() {};
roji.component.VideoComponent.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.component.VideoComponent.prototype.public_method_01 = function() {};
roji.component.VideoComponent.prototype.public_method_02 = function() {};
roji.component.VideoComponent.prototype.public_method_03 = function() {};
roji.component.VideoComponent.prototype.public_method_04 = function() {};
roji.component.VideoComponent.prototype.public_method_05 = function() {};
roji.component.VideoComponent.prototype.public_method_06 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.component.VideoComponent.prototype.on_event_handler_01 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.VideoComponent.prototype.on_event_handler_02 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.VideoComponent.prototype.on_event_handler_03 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.VideoComponent.prototype.on_event_handler_04 = function(event) {
};






roji.component.VideoComponent.prototype.sample_method_calls = function() {

  // sample override
  roji.component.VideoComponent.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.component.VideoComponent.EVENT_01));
};