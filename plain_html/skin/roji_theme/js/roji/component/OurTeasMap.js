goog.provide('roji.component.OurTeasMap');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The OurTeasMap constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
roji.component.OurTeasMap = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $.extend({}, roji.component.OurTeasMap.DEFAULT, options);
  this.element = element;

  
  this.current_item = 'none';

  

  this.sidebar_item_elements = this.element.find('#page-our-teas-map-sidebar-item-container .page-our-teas-map-sidebar-item');
  this.icon_elements = this.element.find('#page-our-teas-map-content-icon-container .map-content-icon');
  this.line_elements = this.element.find('#page-our-teas-map-content-line-container .map-content-line');
  this.button_elements = this.element.find('#page-our-teas-map-content-button-container .map-content-btn');

  this.sidebar_item_dictionary = [];
  this.icon_dictionary = [];
  this.line_dictionary = [];
  this.button_dictionary = [];

  this.create_sidebar_items();
  this.create_icons();
  this.create_lines();
  this.create_buttons();




  this.sidebar_container = this.element.find('#page-our-teas-map-sidebar-item-container');
  this.button_container = this.element.find('#page-our-teas-map-content-button-container');

  // clickout
  this.element.click(function(event){

    if (this.current_item != 'none') {

      var target = $(event.target);

      if ($.contains(this.sidebar_container[0], target[0]) == false && 
          $.contains(this.button_container[0], target[0]) == false) {

        this.select_none();

      }
      
    }

    // get document click functionality from another class

  }.bind(this));


  console.log('roji.component.OurTeasMap: init');
};
goog.inherits(roji.component.OurTeasMap, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
roji.component.OurTeasMap.DEFAULT = {
  'option_01': '',
  'option_02': ''
};

/**
 * OurTeasMap Event Constant
 * @const
 * @type {string}
 */
roji.component.OurTeasMap.EVENT_01 = '';

/**
 * OurTeasMap Event Constant
 * @const
 * @type {string}
 */
roji.component.OurTeasMap.EVENT_02 = '';


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.component.OurTeasMap.prototype.create_sidebar_items = function() {

  var arr = this.sidebar_item_elements;
  var item = null;
  var value = '';

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    value = '';

    if (goog.isDefAndNotNull(item.attr('data-value')) == true) {
      value = item.attr('data-value')
    }

    if (value != ''){
      this.sidebar_item_dictionary[value] = item;
    }

    item.click(function(event){

      var target = $(event.currentTarget);
      var value = target.attr('data-value');

      if (goog.isDefAndNotNull(value) == true && value != '') {
        this.select_item(value);
      }

    }.bind(this));
    

  }

};
roji.component.OurTeasMap.prototype.create_icons = function() {

  var arr = this.icon_elements;
  var item = null;
  var value = '';

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    value = '';

    if (goog.isDefAndNotNull(item.attr('data-value')) == true) {
      value = item.attr('data-value')
    }

    if (value != '') {
      this.icon_dictionary[value] = item;
    }

  }

};
roji.component.OurTeasMap.prototype.create_lines = function() {

  var arr = this.line_elements;
  var item = null;
  var value = '';

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    value = '';

    if (goog.isDefAndNotNull(item.attr('data-value')) == true) {
      value = item.attr('data-value')
    }

    if (value != '') {
      this.line_dictionary[value] = item;
    }

  }
};
roji.component.OurTeasMap.prototype.create_buttons = function() {

  var arr = this.button_elements;
  var item = null;
  var value = '';

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    value = '';

    if (goog.isDefAndNotNull(item.attr('data-value')) == true) {
      value = item.attr('data-value')
    }

    if (value != '') {
      this.button_dictionary[value] = item;
    }

    item.click(function(event){

      var target = $(event.currentTarget);
      var value = target.attr('data-value');

      if (goog.isDefAndNotNull(value) == true && value != '') {
        this.select_item(value);
      }

    }.bind(this));

  }

};

roji.component.OurTeasMap.prototype.private_method_05 = function() {};
roji.component.OurTeasMap.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


/**
 * @param  {String} str_param
 */
roji.component.OurTeasMap.prototype.select_item = function(str_param) {

  if (goog.isDefAndNotNull(str_param) == true && 
      str_param != '' && 
      this.sidebar_item_dictionary[str_param] != null) {

    
    this.current_item = str_param;

    var current_sidebar_item = this.sidebar_item_dictionary[this.current_item];
    var current_icon = this.icon_dictionary[this.current_item];
    var current_line = this.line_dictionary[this.current_item];

    this.sidebar_item_elements.removeClass('selected');
    current_sidebar_item.addClass('selected')

    this.icon_elements.removeClass('selected');
    current_icon.addClass('selected');

    this.line_elements.removeClass('selected');
    current_line.addClass('selected');
    
  }
};
roji.component.OurTeasMap.prototype.select_none = function() {


  this.current_item = 'none';

  this.sidebar_item_elements.removeClass('selected');
  this.icon_elements.removeClass('selected');
  this.line_elements.removeClass('selected');
};
roji.component.OurTeasMap.prototype.public_method_03 = function() {};
roji.component.OurTeasMap.prototype.public_method_04 = function() {};
roji.component.OurTeasMap.prototype.public_method_05 = function() {};
roji.component.OurTeasMap.prototype.public_method_06 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.component.OurTeasMap.prototype.on_event_handler_01 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.OurTeasMap.prototype.on_event_handler_02 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.OurTeasMap.prototype.on_event_handler_03 = function(event) {
};

/**
 * @param {object} event
 */
roji.component.OurTeasMap.prototype.on_event_handler_04 = function(event) {
};






roji.component.OurTeasMap.prototype.sample_method_calls = function() {

  // sample override
  roji.component.OurTeasMap.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.component.OurTeasMap.EVENT_01));
};