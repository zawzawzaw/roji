// REQUIRES INSTAFEED & SLICK


goog.provide('roji.component.HomeInstagramSlider');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The HomeInstagramSlider constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
roji.component.HomeInstagramSlider = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $j.extend({}, roji.component.HomeInstagramSlider.DEFAULT, options);
  this.element = element;


  this.instagram_feed = null;

  this.item_container = this.element.find('#page-home-instagram-item-container');

  this.item_template = [
    '<a href="{{link}}" title="{{caption}}" target="_blank" class="page-home-instagram-item">',
      '<div class="page-home-instagram-item-image">',
        '<img src="{{image}}">',
      '</div>',
    '</a>'
  ].join('');


  this.data_access_token = '';
  this.data_user_id = '';

  

  if (goog.isDefAndNotNull(this.element.attr('data-access-token')) && this.element.attr('data-access-token') != '' &&
      goog.isDefAndNotNull(this.element.attr('data-user-id')) && this.element.attr('data-user-id') != '') {

    this.data_access_token = this.element.attr('data-access-token');
    this.data_user_id = this.element.attr('data-user-id');

    this.create_feed();

  } else {
    console.log('ERROR: roji.component.HomeInstagramSlider: data attributes not set')
  }

  
  


  console.log('roji.component.HomeInstagramSlider: init');
};
goog.inherits(roji.component.HomeInstagramSlider, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
roji.component.HomeInstagramSlider.DEFAULT = {
};

/**
 * HomeInstagramSlider Event Constant
 * @const
 * @type {string}
 */
roji.component.HomeInstagramSlider.ON_INSTAGRAM_FEED_GENERATED = 'on_instagram_feed_generated';


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.component.HomeInstagramSlider.prototype.create_feed = function() {


  this.instagram_feed = new Instafeed({
    // 'target': 'home-instagram-feed-container',    // go strait to the item container
    'target': 'page-home-instagram-item-container',
    'get': 'user',

    'userId': this.data_user_id,
    'accessToken': this.data_access_token,

    'template': this.item_template,
    'after': this.on_after_instafeed_create_html.bind(this),
    'limit': 24,            // this number can be smaller
    
    // 'resolution': 'standard_resolution'
    'resolution': 'low_resolution'
    // 'resolution': 'thumbnail'
  });
  this.instagram_feed.run();

};

roji.component.HomeInstagramSlider.prototype.create_slider = function() {


  if (this.item_container.length != 0) {
    
    this.item_container.slick({
      'speed': 350,
      'dots': false,
      'arrows': false,
      'infinite': false,
      'slidesToShow': 1,
      'slidesToScroll': 1,
      'pauseOnHover': false,
      'autoplay': true,
      // 'autoplaySpeed': 1000,
      'autoplaySpeed': 4000
    });

  }

};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//

roji.component.HomeInstagramSlider.prototype.public_method_02 = function() {};
roji.component.HomeInstagramSlider.prototype.public_method_03 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.component.HomeInstagramSlider.prototype.on_after_instafeed_create_html = function(event) {

  this.create_slider();
  
  this.dispatchEvent(new goog.events.Event(roji.component.HomeInstagramSlider.ON_INSTAGRAM_FEED_GENERATED));

};
