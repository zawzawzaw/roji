goog.provide('roji.page.Home');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')

goog.require('roji.component.HomeMasonry');
goog.require('roji.component.HomeInstagramSlider');


/**
 * The Home constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.Home = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $.extend(this.options, roji.page.Home.DEFAULT, options);

  /**
   * @type {roji.component.HomeMasonry}
   */
  this.home_masonry = null;
  
  /**
   * @type {roji.component.HomeInstagramSlider}
   */
  this.home_instagram_slider = null;
  

  console.log('roji.page.Home: init');
};
goog.inherits(roji.page.Home, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Home.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
roji.page.Home.EVENT_01 = '';


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
roji.page.Home.prototype.init = function() {
  roji.page.Home.superClass_.init.call(this);

  this.create_home_masonry();
  this.create_home_instagram_slider();

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//

roji.page.Home.prototype.create_home_masonry = function() {

  if ($('#page-home-masonry-section').length != 0) {

    this.home_masonry = new roji.component.HomeMasonry({
    }, $('#page-home-masonry-section'));

    goog.events.listen(this.home_masonry, roji.component.HomeMasonry.MASONRY_UPDATE, function(event){
      this.update_page_layout();
    }.bind(this));
    
  }
};
roji.page.Home.prototype.create_home_instagram_slider = function() {

  // only for desktop
  
  // if (manic.IS_MOBILE == false) {
  
    if ($('#page-home-instagram-slider').length != 0) {

      this.home_instagram_slider = new roji.component.HomeInstagramSlider({
      }, $('#page-home-instagram-slider'));

    }
    
  // }
  

};
roji.page.Home.prototype.private_method_04 = function() {};
roji.page.Home.prototype.private_method_05 = function() {};
roji.page.Home.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Home.prototype.public_method_01 = function() {};
roji.page.Home.prototype.public_method_02 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.page.Home.prototype.on_event_handler_01 = function(event) {
};

/**
 * @param {object} event
 */
roji.page.Home.prototype.on_event_handler_02 = function(event) {
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
roji.page.Home.prototype.update_page_layout = function() {
  roji.page.Home.superClass_.update_page_layout.call(this);



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
roji.page.Home.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Home.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Home.prototype.on_scroll_to_no_target = function() {
  roji.page.Home.superClass_.on_scroll_to_no_target.call(this);

  
}

