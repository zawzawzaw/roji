// copied from kindred

// requires cache


goog.provide('roji.component.MailingList');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('goog.net.cookies');   // notice the lowercaps


/**
 * The CLASSNAME constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
roji.component.MailingList = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $j.extend({}, roji.component.MailingList.DEFAULT, options);
  this.element = element;


  this.black_bg = this.element.find('.black-bg');
  this.close_btn = this.element.find('#mailing-list-close-btn');
  this.send_btn = this.element.find('#mailing-list-popup-send-btn');

  this.is_open = false;

  this.cookies = goog.net.cookies;


  // init

  this.black_bg.click(function(event){
    this.close_popup();
  }.bind(this));

  this.close_btn.click(function(event){
    this.close_popup();
  }.bind(this));

  this.send_btn.click(this.on_send_btn_click.bind(this));

  var cookie_value = this.cookies.get('rojimailinglist');

  // if no cookie is available

  // console.log(cookie_value);
  // console.log(goog.isDefAndNotNull(cookie_value));
  // console.log($j("body").hasClass("category-shop"));
  // console.log('testingggg');

  
  if (goog.isDefAndNotNull(cookie_value) == false && $j("body").hasClass("category-shop")) {  
  // if (goog.isDefAndNotNull(cookie_value) == false || true) {      // for testing

    var max_seconds = 60 * 60 * 10;   // 10 hr expiry

    this.cookies.set('rojimailinglist', 'hascookie', max_seconds);

    TweenMax.delayedCall(5, this.open_popup, [], this);
    
    console.log('doesnt have cookie, will open in 5 secs');
  } else {
    console.log('already has cookiee');
  }
  


  console.log('roji.component.MailingList: init');
};
goog.inherits(roji.component.MailingList, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
roji.component.MailingList.DEFAULT = {
  
};




//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.component.MailingList.prototype.open_popup = function() {
  if (this.is_open == false) {
    this.is_open = true;

    this.element.addClass('open-version');
    TweenMax.killTweensOf(this.element);
    TweenMax.to(this.element, 0.5, {autoAlpha: 1});

  }
};
roji.component.MailingList.prototype.close_popup = function() {
  if (this.is_open == true) {

    this.is_open = false;

    TweenMax.killTweensOf(this.element);
    TweenMax.to(this.element, 0.5, {autoAlpha: 0, onComplete: function(){

      this.element.removeClass('open-version');

    }.bind(this)});

  }
};

roji.component.MailingList.prototype.on_send_btn_click = function(event) {
  event.preventDefault();
  var subscribe_email = this.element.find('#mailing-list-popup-email-input').val();

  if(subscribe_email!=="" && subscribe_email!=="Enter your email address") {
    var request = $j.ajax({
        url: "/discovertea/index/subscribe",
        method: "POST",
        data: { subscribe_email : subscribe_email },
        dataType: "html"
    });
     
    request.done(function( msg ) {
        var message = JSON.parse(msg);
        if(message.error_messages)
            this.element.find('span.ajax_msg').html('<p>'+message.error_messages+'</p>').show().delay(5000).fadeOut();
        else
            this.element.find('span.ajax_msg').html('<p>Successfully subscribed to mailing list</p>').show().delay(5000).fadeOut();
    }.bind(this));
  }
}