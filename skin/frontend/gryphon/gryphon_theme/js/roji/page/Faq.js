goog.provide('roji.page.Faq');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')


/**
 * The Others constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.Faq = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $j.extend(this.options, roji.page.Faq.DEFAULT, options);


  // variables for update_faq_bg_width
  this.sidebar_bg = $j('#page-faq-content-section-bg .sidebar-bg');
  this.content_bg = $j('#page-faq-content-section-bg .content-bg');
  this.sidebar_width = $j('#page-faq-sidebar-width');
  this.content_width = $j('#page-faq-content-width');
  
  
  // variables for update_faq_bg_height
  this.desktop_title_section = $j('#page-faq-title-section');
  this.section_bg = $j('#page-faq-content-section-bg');
    
  this.has_sidebar = false;
  if (this.sidebar_bg.length != 0 &&
      this.content_bg.length != 0 &&
      this.sidebar_width.length != 0 &&
      this.content_width.length != 0 &&
      this.desktop_title_section.length != 0 &&
      this.section_bg.length != 0) {

    this.has_sidebar = true;
  }
  


  console.log('roji.page.Faq: init');
};
goog.inherits(roji.page.Faq, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Faq.DEFAULT = {
};

/**
 * Others Event Constant
 * @const
 * @type {string}
 */
roji.page.Faq.EVENT_01 = '';


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
roji.page.Faq.prototype.init = function() {
  roji.page.Faq.superClass_.init.call(this);

  

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.Faq.prototype.private_method_03 = function() {};
roji.page.Faq.prototype.private_method_04 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Faq.prototype.update_faq_bg_width = function() {

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




  }


};

roji.page.Faq.prototype.update_faq_bg_height = function(){

  // only for desktop
  if (manic.IS_MOBILE == false) {
    
    
    this.desktop_footer_element = $j("#desktop-footer"); // no idea why desktop_footer_element height is always null...

    var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight() - this.desktop_title_section.outerHeight();
    this.section_bg.css({
      'min-height': target_height + 'px'
    });
    
  }
};



/**
 * @param  {String} str_param
 */
roji.page.Faq.prototype.show_faq_content_item = function(str_param) {

  console.log('show_faq_content_item: ' + str_param);

  if (manic.IS_MOBILE == false) {

    // desktop version
    var target_content_item = $j('.page-faq-content-item[data-value="' + str_param + '"]');
    var target_sidebar_item = $j('#page-faq-sidebar nav ul li[data-value="' + str_param + '"]');

    if (target_content_item.length != 0) {

      if (target_content_item.hasClass('open-version')) {
        // do nothing

      } else {
        
        $j('.page-faq-content-item').removeClass('open-version');
        target_content_item.addClass('open-version');

        $j('#page-faq-sidebar nav ul li').removeClass('selected');
        target_sidebar_item.addClass('selected');

      }
      
    } else {


      this.show_faq_content_item('tea');    // recursive

    }

  }
  
  
  
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
roji.page.Faq.prototype.on_event_handler_01 = function(event) {
};


roji.page.Faq.prototype.sample_method_calls = function() {

  // sample override
  roji.page.Faq.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.page.Faq.EVENT_01));
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
roji.page.Faq.prototype.update_page_layout = function() {
  roji.page.Faq.superClass_.update_page_layout.call(this);

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
roji.page.Faq.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Faq.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  
  // scroll to 0, then open 
  this.show_faq_content_item(str_param);
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Faq.prototype.on_scroll_to_no_target = function() {
  roji.page.Faq.superClass_.on_scroll_to_no_target.call(this);

  this.show_faq_content_item('tea');
  
}

