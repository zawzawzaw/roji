goog.provide('roji.page.Others');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')


/**
 * The Others constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.Others = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $.extend(this.options, roji.page.Others.DEFAULT, options);

  
  


  console.log('roji.page.Others: init');
};
goog.inherits(roji.page.Others, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Others.DEFAULT = {
};

/**
 * Others Event Constant
 * @const
 * @type {string}
 */
roji.page.Others.EVENT_01 = '';


//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


/**
 * @override
 * @inheritDoc
 */
roji.page.Others.prototype.init = function() {
  roji.page.Others.superClass_.init.call(this);

  this.create_home_masonry();

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//

roji.page.Others.prototype.create_home_masonry = function() {
  
};
roji.page.Others.prototype.private_method_03 = function() {};
roji.page.Others.prototype.private_method_04 = function() {};
roji.page.Others.prototype.private_method_05 = function() {};
roji.page.Others.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Others.prototype.public_method_01 = function() {};
roji.page.Others.prototype.public_method_02 = function() {};
roji.page.Others.prototype.public_method_03 = function() {};
roji.page.Others.prototype.public_method_04 = function() {};
roji.page.Others.prototype.public_method_05 = function() {};
roji.page.Others.prototype.public_method_06 = function() {};





//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.page.Others.prototype.on_event_handler_01 = function(event) {
};

/**
 * @param {object} event
 */
roji.page.Others.prototype.on_event_handler_02 = function(event) {
};

/**
 * @param {object} event
 */
roji.page.Others.prototype.on_event_handler_03 = function(event) {
};

/**
 * @param {object} event
 */
roji.page.Others.prototype.on_event_handler_04 = function(event) {
};




roji.page.Others.prototype.sample_method_calls = function() {

  // sample override
  roji.page.Others.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.page.Others.EVENT_01));
};



//    _        _ __   _____  _   _ _____
//   | |      / \\ \ / / _ \| | | |_   _|
//   | |     / _ \\ V / | | | | | | | |
//   | |___ / ___ \| || |_| | |_| | | |
//   |_____/_/   \_\_| \___/ \___/  |_|
//

/**
 * @override
 * @inheritDoc
 */
roji.page.Others.prototype.update_page_layout = function() {
  roji.page.Others.superClass_.update_page_layout.call(this);



}




//    _   _    _    ____  _   _ _____  _    ____ ____
//   | | | |  / \  / ___|| | | |_   _|/ \  / ___/ ___|
//   | |_| | / _ \ \___ \| |_| | | | / _ \| |  _\___ \
//   |  _  |/ ___ \ ___) |  _  | | |/ ___ \ |_| |___) |
//   |_| |_/_/   \_\____/|_| |_| |_/_/   \_\____|____/
//


/**
 * @override
 * @inheritDoc
 */
roji.page.Others.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Others.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Others.prototype.on_scroll_to_no_target = function() {
  roji.page.Others.superClass_.on_scroll_to_no_target.call(this);

  
}

