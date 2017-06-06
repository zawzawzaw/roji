goog.provide('roji.page.OurTeas');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')

goog.require('roji.component.OurTeasMap');


/**
 * The Others constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.OurTeas = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $.extend(this.options, roji.page.OurTeas.DEFAULT, options);



  /**
   * @type {roji.component.OurTeasMap}
   */
  this.map = null;



  console.log('roji.page.OurTeas: init');
};
goog.inherits(roji.page.OurTeas, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.OurTeas.DEFAULT = {
};

/**
 * Others Event Constant
 * @const
 * @type {string}
 */
roji.page.OurTeas.EVENT_01 = '';


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
roji.page.OurTeas.prototype.init = function() {
  roji.page.OurTeas.superClass_.init.call(this);

  this.create_slider();
  this.create_map();
  
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.OurTeas.prototype.create_slider = function() {

  $('#page-our-teas-slider').slick({
    'speed': 900,       // 350
    'dots': true,
    'arrows': true,
    'infinite': false,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': true,
    'autoplaySpeed': 7000
  });

};
roji.page.OurTeas.prototype.create_map = function() {



  if ($('#page-our-teas-map-section').length != 0) {
    this.map = new roji.component.OurTeasMap({}, $('#page-our-teas-map-section'));
  }
  
  
};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//




//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.page.OurTeas.prototype.on_event_handler_01 = function(event) {
};


roji.page.OurTeas.prototype.sample_method_calls = function() {

  // sample override
  roji.page.OurTeas.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.page.OurTeas.EVENT_01));
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
roji.page.OurTeas.prototype.update_page_layout = function() {
  roji.page.OurTeas.superClass_.update_page_layout.call(this);

  if (this.has_sidebar == true) {
    this.update_faq_bg_width();
    this.update_faq_bg_height();
  }
  
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
roji.page.OurTeas.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.OurTeas.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  
  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.OurTeas.prototype.on_scroll_to_no_target = function() {
  roji.page.OurTeas.superClass_.on_scroll_to_no_target.call(this);

  
  
}

