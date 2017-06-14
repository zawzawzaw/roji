goog.provide('roji.page.Checkout');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')


/**
 * The Others constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.Checkout = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $j.extend(this.options, roji.page.Checkout.DEFAULT, options);


  // variables for update_checkout_bg_width
  this.sidebar_bg = $j('#page-checkout-content-section-bg .sidebar-bg');
  this.content_bg = $j('#page-checkout-content-section-bg .content-bg');
  this.sidebar_width = $j('#page-checkout-sidebar-width');
  this.content_width = $j('#page-checkout-content-width');
  
  
  // variables for update_checkout_bg_height
  this.desktop_title_section = $j('#page-checkout-title-section');
  this.section_bg = $j('#page-checkout-content-section-bg');
  
  this.has_sidebar = false;
  if (this.sidebar_bg.length != 0 &&
      this.content_bg.length != 0 &&
      this.sidebar_width.length != 0 &&
      this.content_width.length != 0 &&
      this.desktop_title_section.length != 0 &&
      this.section_bg.length != 0) {

    this.has_sidebar = true;
  }

  $j('#page-checkout-cart').find('.form-quantity-plus-btn').click(this.on_qty_plus_btn_click.bind(this));
  $j('#page-checkout-cart').find('.form-quantity-minus-btn').click(this.on_qty_minus_btn_click.bind(this));

  this.giftvoucher_input();  

  console.log('roji.page.Checkout: init');
};
goog.inherits(roji.page.Checkout, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Checkout.DEFAULT = {
};

/**
 * Others Event Constant
 * @const
 * @type {string}
 */
roji.page.Checkout.EVENT_01 = '';


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
roji.page.Checkout.prototype.init = function() {
  roji.page.Checkout.superClass_.init.call(this);

  

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.Checkout.prototype.private_method_03 = function() {};
roji.page.Checkout.prototype.giftvoucher_input = function() {
  // cart gift voucher 
  $j('input[name=giftvoucher]').attr('checked', true).triggerHandler('click'); 
  $j('input[name=giftvoucher_credit]').attr('checked', true).triggerHandler('click'); 

  $j('.apply_giftcard').on('click', function(e){
      $j('#giftcard_shoppingcart_apply').find('button').trigger('click');    
  });        

  $j('.cancel_giftcard').on('click', function(e){            
      window.location=$j('#remove_card').attr('href');
  });        
};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Checkout.prototype.update_checkout_bg_width = function() {

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

roji.page.Checkout.prototype.update_checkout_bg_height = function(){

  // only for desktop
  if (manic.IS_MOBILE == false) {
    
    


    var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight() - this.desktop_title_section.outerHeight();
    this.section_bg.css({
      'min-height': target_height + 'px'
    });
    
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
roji.page.Checkout.prototype.on_qty_plus_btn_click = function(event) {

  event.preventDefault();
  var $qty=$j(event.currentTarget).parent().find('.qty');
  var currentVal = parseInt($qty.val());
  if (!isNaN(currentVal)) {
      $qty.val(currentVal + 1);
  }

};

/**
 * @param {object} event
 */
roji.page.Checkout.prototype.on_qty_minus_btn_click = function(event) {

  event.preventDefault();
  var $qty=$j(event.currentTarget).parent().find('.qty');
  var currentVal = parseInt($qty.val());
  if (!isNaN(currentVal) && currentVal > 1) {
      $qty.val(currentVal - 1);
  }

};


roji.page.Checkout.prototype.sample_method_calls = function() {

  // sample override
  roji.page.Checkout.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.page.Checkout.EVENT_01));
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
roji.page.Checkout.prototype.update_page_layout = function() {
  roji.page.Checkout.superClass_.update_page_layout.call(this);

  if (this.has_sidebar == true) {
    this.update_checkout_bg_width();
    this.update_checkout_bg_height();
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
roji.page.Checkout.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Checkout.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Checkout.prototype.on_scroll_to_no_target = function() {
  roji.page.Checkout.superClass_.on_scroll_to_no_target.call(this);
}

