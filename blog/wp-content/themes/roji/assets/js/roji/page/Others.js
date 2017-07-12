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


  this.is_terms_of_use_page = false;

  if (this.body.hasClass('page-terms-of-use') == true) {
    this.is_terms_of_use_page = true;
  }



  // variables for update_others_bg_width
  this.sidebar_bg = $('#page-others-main-content-section-bg .sidebar-bg');
  this.content_bg = $('#page-others-main-content-section-bg .content-bg');
  this.sidebar_width = $('#page-others-main-sidebar-width');
  this.content_width = $('#page-others-main-content-width');

  this.content2_bg = $('#page-others-main-content-section-bg .content2-bg');    // optional
  this.content2_bg_target = $('.content2-bg-target');
  
  // variables for update_others_bg_height
  this.desktop_title_section = $('#page-others-title-section');
  this.section_bg = $('#page-others-main-content-section-bg');
    
  this.has_sidebar = false;
  if (this.sidebar_bg.length != 0 &&
      this.content_bg.length != 0 &&
      this.sidebar_width.length != 0 &&
      this.content_width.length != 0 &&
      this.desktop_title_section.length != 0 &&
      this.section_bg.length != 0) {

    this.has_sidebar = true;
  }

  console.log('this.has_sidebar: ' + this.has_sidebar);
  


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

  

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.Others.prototype.private_method_03 = function() {};
roji.page.Others.prototype.private_method_04 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Others.prototype.update_others_bg_width = function() {

  // only for desktop
  if (manic.IS_MOBILE == false) {

    var container_width = this.window_width >= 1380 ? 1380 : this.window_width;
    var container_margin = (this.window_width - container_width) / 2;
    var midpoint = Math.round(container_margin + this.sidebar_width.width() + 10 + 60);                      // 20/2 = gutter space, 60 = padding left
    var midpoint_percent = Math.round( midpoint / this.window_width * 10000 ) / 100;

    console.log('this.window_width: ' + this.window_width);
    console.log('midpoint: ' + midpoint);
    this.sidebar_bg.css({
      'width': midpoint_percent + '%'
    });

    this.content_bg.css({
      'left': midpoint_percent + '%',
      'width': (100 - midpoint_percent) + '%'
    });


    if (this.is_terms_of_use_page && this.content2_bg.length != 0){
        
      var target_hh = this.content2_bg_target.outerHeight();

      this.content2_bg.css({
        'left': midpoint_percent + '%',
        'width': (100 - midpoint_percent) + '%',
        'height': target_hh + 'px'
      });
    }
    
  } else {







    var container_width = this.window_width >= 1380 ? 1380 : this.window_width;
    var container_margin = (this.window_width - container_width) / 2;
    var midpoint = Math.round(container_margin + this.sidebar_width.width() + 10 + 20);                      // 20/2 = gutter space, 20 = padding left
    var midpoint_percent = Math.round( midpoint / this.window_width * 10000 ) / 100;

    console.log('this.window_width: ' + this.window_width);
    console.log('midpoint: ' + midpoint);
    this.sidebar_bg.css({
      'width': midpoint_percent + '%'
    });

    this.content_bg.css({
      'left': midpoint_percent + '%',
      'width': (100 - midpoint_percent) + '%'
    });


    if (this.is_terms_of_use_page && this.content2_bg.length != 0){
        
      var target_hh = this.content2_bg_target.outerHeight();

      this.content2_bg.css({
        'left': midpoint_percent + '%',
        'width': (100 - midpoint_percent) + '%',
        'height': target_hh + 'px'
      });
    }



  }


};

roji.page.Others.prototype.update_others_bg_height = function(){

  // only for desktop
  // if (manic.IS_MOBILE == false) {
    
    


    var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight() - this.desktop_title_section.outerHeight();
    this.section_bg.css({
      'min-height': target_height + 'px'
    });
    
  // }
};






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

  if (this.has_sidebar == true) {
    this.update_others_bg_width();
    this.update_others_bg_height();
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

