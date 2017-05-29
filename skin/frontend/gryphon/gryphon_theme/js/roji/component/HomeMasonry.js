goog.provide('roji.component.HomeMasonry');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The HomeMasonry constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
roji.component.HomeMasonry = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $j.extend({}, roji.component.HomeMasonry.DEFAULT, options);
  this.element = element;
  
  this.isotope = null;

  
  this.create_isotope();
  
  console.log('roji.component.HomeMasonry: init');
};
goog.inherits(roji.component.HomeMasonry, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
roji.component.HomeMasonry.DEFAULT = {
};

/**
 * HomeMasonry Event Constant
 * @const
 * @type {string}
 */
roji.component.HomeMasonry.MASONRY_UPDATE = 'masonry_update';

/**
 * HomeMasonry Event Constant
 * @const
 * @type {string}
 */
roji.component.HomeMasonry.EVENT_02 = '';


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.component.HomeMasonry.prototype.create_isotope = function() {
  this.isotope = new Isotope('#page-home-masonry', {
    itemSelector: '.page-home-masonry-tile',

    layoutMode: 'packery',
    packery: {
    }
  });


  // update page layout on window size change

  this.isotope.on('layoutComplete', function(){
    this.dispatchEvent(new goog.events.Event(roji.component.HomeMasonry.MASONRY_UPDATE));
  }.bind(this));

  this.isotope.on('arrangeComplete', function(){
    this.dispatchEvent(new goog.events.Event(roji.component.HomeMasonry.MASONRY_UPDATE));
  }.bind(this));
};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.component.HomeMasonry.prototype.public_method_01 = function() {};
roji.component.HomeMasonry.prototype.public_method_02 = function() {};
