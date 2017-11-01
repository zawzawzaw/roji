goog.provide('roji.page.Default');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.page.Page');

goog.require('roji.component.DesktopHeader');
goog.require('roji.component.MobileHeader');
goog.require('roji.component.MailingList');

/**
 * The Default Page constructor
 * @inheritDoc
 * @constructor
 * @extends {manic.page.Page}
 */
roji.page.Default = function(options, element) {

  manic.page.Page.call(this, options);
  this.options = $j.extend(this.options, roji.page.Default.DEFAULT, options);


  /*
  if ($j('body').hasClass('chinese-version')) {
    manic.SITE_LANGUAGE = 'cn';
  }
  if ($j('body').hasClass('bahasa-version')) {
    manic.SITE_LANGUAGE = 'in';
  }
  */
  

 
  //   __     ___    ____
  //   \ \   / / \  |  _ \
  //    \ \ / / _ \ | |_) |
  //     \ V / ___ \|  _ <
  //      \_/_/   \_\_| \_\
  //

  /**
   * @type {roji.component.DesktopHeader}
   */
  this.desktop_header = null;

  /**
   * @type {roji.component.MobileHeader}
   */
  this.mobile_header = null;

  /**
   * @type {roji.component.MailingList}
   */
  this.mailing_list = null;




  this.page_wrapper = $j('#page-wrapper');
  this.page_wrapper_content = $j('#page-wrapper-content');

  


  // min height variables
  // 
  this.is_page_min_height = false;
  if( this.body.hasClass('min-height-version') == true ){
    this.is_page_min_height = true;
  }

  this.is_page_min_height_mobile = false;
  if( this.body.hasClass('min-height-mobile-version') == true ){
    this.is_page_min_height_mobile = true;
  }

  this.desktop_header_element = $j('#desktop-header');
  this.mobile_header_element = $j('#mobile-header');
  this.desktop_footer_element = $j("#desktop-footer");
  this.mobile_footer_element = $j('#mobile-footer');  

  this.mobile_header_expanded_element = $j('#mobile-header-expanded');

  $j(".add-to-cart-links").click(this.on_add_to_cart_link_click.bind(this));
  $j("#desktop-header-cart-expand-container").on("click", '.remove-item', this.on_remove_header_cart_item.bind(this));

  $j("#mobile-header-push-noti-close-btn").click(this.on_mobile_header_push_noti_close_btn_click.bind(this));

  if($j('.page-default-content-section-bg').length > 0) {
    this.section_bg = $j('.page-default-content-section-bg');
    this.update_default_bg_height();
  }

  console.log('roji.page.Default: init');
};
goog.inherits(roji.page.Default, manic.page.Page);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Default.DEFAULT = {
};

/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
roji.page.Default.EVENT_01 = '';

//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


roji.page.Default.prototype.init = function() {
  roji.page.Default.superClass_.init.call(this);



  if ($j('#desktop-header').length != 0) {
    this.desktop_header = new roji.component.DesktopHeader({}, $j('#desktop-header'));
  }

  if ($j('#mobile-header').length != 0 && $j('#mobile-header-expanded').length != 0){
    this.mobile_header = new roji.component.MobileHeader({}, $j('#mobile-header'));
  }
  
  if ($j('#mailing-list-popup-container').length != 0) {
    this.mailing_list = new roji.component.MailingList({}, $j('#mailing-list-popup-container'));
  }

  console.log('roji.page.Default: init');

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
roji.page.Default.prototype.update_page_layout = function(){
  roji.page.Default.superClass_.update_page_layout.call(this);

  console.log('update_page_layout_default')


  if (this.is_page_min_height == true && manic.IS_MOBILE == false) {
    var target_height = this.window_height - this.desktop_header_element.outerHeight() - $j("#desktop-footer").outerHeight();

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }


  if (this.is_page_min_height_mobile == true && manic.IS_MOBILE == true) {
    var target_height = this.window_height - $j("#mobile-footer").outerHeight();

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }



  // update mobile header menu height
  if (manic.IS_MOBILE == true) {
    var target_height = this.window_height - this.mobile_footer_element.outerHeight();

    this.mobile_header_expanded_element.css({
      'min-height': target_height + 'px'
    });
  }

};




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
roji.page.Default.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Default.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Default.prototype.on_scroll_to_no_target = function() {
  roji.page.Default.superClass_.on_scroll_to_no_target.call(this);

  
}

roji.page.Default.prototype.update_header_cart = function() {

  $j("#desktop-header-cart-menu").find(".cart-btn-value").removeClass('animated fadeIn').addClass('animated flipOutX');

  $j.ajax({
      url: '/discovertea/index/cartpreview',
      dataType: 'json',
      type : 'get',
      success: function(data){


          if(manic.IS_MOBILE == true) {
            $j("#mobile-header-push-noti").stop(0).slideDown(500);
            $j("#mobile-header-push-noti").stop(0).delay(5000).slideUp(500);  
          }
        
          // update product count in cart          
          $j("#mobile-header-cart-btn").find(".cart-btn-value").text(data.cart_qty);
          $j("#desktop-header-cart-menu").find(".cart-btn-value").text(data.cart_qty);
          // $j("#mobile-header-cart-btn-container").find(".count").text(data.cart_qty);

          $j("#desktop-header-cart-menu").find(".cart-btn-value").removeClass('animated flipOutX').addClass('animated fadeIn');

          $j('.desktop-header-cart-expand').html('');

          if(data.cart_qty > 0) {

              $j.each(data.cart_items, function(key,value){

                  $j('.desktop-header-cart-expand').append('<ul class="desktop-header-cart-expand-content"><li><div class="manic-image-container"><img src="'+value.image+'" alt=""></div></li><li><p>'+value.qty+' x</p><p>'+value.name+'</p><p>'+value.name_in_color+'</p><p>'+value.row_price+'</p></li><li><a href="#" title="Remove item" data-item-id="'+value.id+'" class="close-btn remove-item"></a></li></ul>');

              });                    

          } else {

              $j('.desktop-header-cart-expand').append('<ul class="desktop-header-cart-expand-content"><li class="empty-cart"><p>Your cart is empty.</p></li></ul>');

          }       

          $j('.desktop-header-cart-expand-summary').find('.sub-total-amount').html(data.cart_total);

          $j('#desktop-header-cart-expand-container').stop(0).slideDown(300);
          window.header_cart_is_open = true;
          // $j('#desktop-header-cart-expand-container').stop(0).delay(5000).slideUp(300);

          setTimeout(function() {
            window.header_cart_is_open = false;
          }, 5000);

          // var mobile_header = $j("#main-mobile-header").data('gryphon_mobile_header');
          // mobile_header.public_open_cart();
          //$j('#mobile-cart-expand-container').show();
          

          // $j('.mobile-cart-button').find('span').html(data.cart_qty);
          // $j('.cart-summary-data').find('.price').html(data.cart_total);
          // $j('.cart-summary-data').find('.count').html(data.cart_qty);
          // $j('.cart-summary-data span').html('<span class="price">'+data.cart_total+'</span> (<span class="count">'+data.cart_qty+'</span>)');                            
      }
  });                     
}


roji.page.Default.prototype.on_add_to_cart_link_click = function(event){
    event.preventDefault();

    var add_to_cart_url = $j(event.currentTarget).attr("href");

    $j.get( add_to_cart_url, function( data ) {
       this.update_header_cart();
    }.bind(this));         
    
}


roji.page.Default.prototype.on_remove_header_cart_item = function(event){
    event.preventDefault();
    var item_id = $j(event.currentTarget).data("item-id");

    var request = $j.ajax({
        url: "/discovertea/index/deletecartitem",
        method: "POST",
        data: { item_id : item_id },
        dataType: "html"
    });

    request.done(function() {
        this.update_header_cart();
    }.bind(this));
    
}

roji.page.Default.prototype.on_mobile_header_push_noti_close_btn_click = function(event) {
    event.preventDefault();
    console.log("mobile-header-push-noti-close-click");
    // console.log("on_mobile_header_push_noti_close_btn_click");
    $j("#mobile-header-push-noti").hide();
}


roji.page.Default.prototype.update_default_bg_height = function(){
  console.log('update_default_bg_height');
  // only for desktop
  if (manic.IS_MOBILE == false) {
    
    console.log('update_default_bg_height_2');
    
    this.desktop_title_section = $j(".page-default-title-section");
    this.desktop_footer_element = $j("#desktop-footer"); // no idea why desktop_footer_element height is always null...
    var footer_height = this.desktop_footer_element.outerHeight();

    if(footer_height==null) {
      footer_height = 60;
    }

    var target_height = this.window_height - this.desktop_header_element.outerHeight() - footer_height - this.desktop_title_section.outerHeight();

    console.log($j("#desktop-footer"));
    console.log($j("#desktop-footer"));

    this.section_bg.css({
      'min-height': target_height + 'px'
    });
    
  }
};