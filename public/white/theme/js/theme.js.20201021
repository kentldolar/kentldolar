(function($) {
  "use strict";

  //Run function When Document Ready
  $(document).ready(function() {
    initTooltip();
    initGetHWindow();
    initParallax();
    initNavbarSrcoll();
    initClickedEvents();
    initEasyChart();
    initLightBox();
    initTyped();
    initBtnFile();
    initMap();
    initHold();
    // initCaptcha();
    initAjaxContactForm();
    initAjaxUploader();
  });

  //Run function When PACE (page loader) hide
  Pace.on('hide', function() {
    $('.wrapper').css('visibility', 'visible').animate({opacity: 1.0}, 2000, function() {
      initCheckNav();
    });
    //check if url contain hash(#)
    if (window.location.hash) {
      $('.link-inpage[href="' + window.location.hash + '"]').first().trigger('click');
    }
  });

  //Run function When WIndow Resize
  $(window).resize(function() {
    initParallax();
  });

  // ajax contact form
  function initAjaxContactForm() {
    if ($('#contactForm').length > 0) {

      $('#contactForm').validate();
      $('#contactForm').submit(function() {
        var el = $(this);
        if (el.valid()) {
          var fulname = $(this).find('#ful1').val();
          var email = $(this).find('#eml1').val();
          var mess = $(this).find('#mes1').val();
          var recaptcha = $(this).find('.g-recaptcha-response').val();
          
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            statusCode: {
              500: function(xhr) {
                if(window.console) console.log(xhr.responseText);
              }
            },
            type: 'POST',
            data: {
              fullname: fulname,
              email: email,
              message: mess,
              recaptcha: recaptcha
            },
            url: "sendmail",
            beforeSend: function() {
              el.find('.preload-submit').removeClass('hidden');
              el.find('.message-submit').addClass('hidden');
            },
            success: function(res) {

              res = JSON.stringify(res);
              res = jQuery.parseJSON(res);
              setTimeout(function() {
                el.find('.preload-submit').addClass('hidden');
                
                if (res.msg) {
                  grecaptcha.reset(widgetId1);
                  el.trigger('reset');
                  el.find('.message-submit').html(res.msg).removeClass('hidden');
                } else {
                  el.find('.message-submit').html(res.error).removeClass('hidden');
                }
              }, 1000)
            }
          });
        }
        return false;
      });
    }
  }

  // ajax Uploader file
  // function initAjaxUploader() {
  //   if ($('#hireForm').length > 0) {
  //     $('#hireForm').validate();
  //     $('#hireForm').submit(function() {
  //       var el = $(this);
  //       if (el.valid()) {
  //         var formData = new FormData($(this)[0]);
  //         formData.append('fulname',  $(this).find('#ful1').val());
  //         formData.append('email', $(this).find('#eml1').val());
  //         formData.append('mess', $(this).find('#mes1').val());
  //         formData.append('recaptcha', $(this).find('.g-recaptcha-response').val());
  //         formData.append('fileatt', $('#filat')[0].files[0]); 
  //         formData.append('fileattsize', $('#filat')[0].files[0].size); 
  //         $.ajaxSetup({
  //           headers: {
  //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //           }
  //         });
  //         $.ajax({
  //           statusCode: {
  //             500: function(xhr) {
  //               if(window.console) console.log(xhr.responseText);
  //             }
  //           },
  //           processData: false,
  //           contentType: false,
  //           cache : false,
  //           dataType : 'json',
  //           type: 'POST',
  //           data: formData,
  //           url: "upload",
  //           beforeSend: function() {
  //             el.find('.preload-submit').removeClass('hidden');
  //             el.find('.message-submit').addClass('hidden');
  //           },
  //           success: function(upl) {
  //           upl = JSON.stringify(upl);
  //           upl = jQuery.parseJSON(upl);
  //             setTimeout(function() {
  //               el.find('.preload-submit').addClass('hidden');
                
  //               if (upl.msg) {
  //                 grecaptcha.reset(widgetId2);
  //                 el.trigger('reset');
  //                 el.find('.message-submit').html(upl.msg).removeClass('hidden');
  //               } else {
  //                 el.find('.message-submit').html(upl.error).removeClass('hidden');
  //               }
  //             }, 1000)
  //           }
  //         });
  //       }
  //       return false;
  //     });
  //   }
  // }

  //Typed Animation
  function initTyped() {
    $("#typed").typed({
      strings: ["A Dreamer", "A Developer", "A Thinker"],
      // typing speed
      typeSpeed: 300,
      // time before typing starts
      startDelay: 100,
      // backspacing speed
      backSpeed: 50,
      // time before backspacing
      backDelay: 3000,
      // loop
      loop: true,
      // false = infinite
      loopCount: false,
      // show cursor
      showCursor: true,
      // character for cursor
      cursorChar: ".",
      // attribute to type (null == text)
      attr: null,
      // either html or text
      contentType: 'html',
      // call when done callback function
      callback: function() {
      },
      // starting callback function before each string
      preStringTyped: function() {
      },
      //callback for every typed string
      onStringTyped: function() {
      },
      // callback for reset
      resetCallback: function() {
      }
    });
  }

  //Lightbox (popup)
  function initLightBox() {
    $('.list-work').magnificPopup({
      delegate: 'a.galery-item',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title');
        }
      }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  }

  //Chart
  function initEasyChart() {
    $('.chart').easyPieChart({
      animate: ({ duration: 5000, enabled: true }),
      easing: 'easeOutCirc',
      barColor: '#000',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });

    // Skills Progress Bar
      // number
      $('.bar_progress').each(function() {
        var bar_value = $(this).attr('aria-valuenow') + '%';
        var test =     $(this).attr('aria-valuenow');            
        $(this).stop().css("width", 0).animate({ width: bar_value }, { duration: 5000, easing: 'easeOutCirc', 
          progress: function(promise, progress, ms) {

          }
        });
      });

      // line-bar
      $('small').each(function() {
        var bar_value = $(this).attr('aria-valuenow') + '%';
        var test =     $(this).attr('aria-valuenow');            
        $(this).stop().css('visibility', 'visible').animate({opacity: 1.0}, { duration: 5000, easing: 'easeOutCirc', 
          progress: function(promise, progress, ms) {
            $(this).text(Math.round(progress * test) + '%');
          }
        });
      });


  }

  //Click Envents
  function initClickedEvents() {
    $('#hireme-tab').click(function() {
      $('#myTab a[href="#tab1"]').tab('show');
    });

    $('#contact-tab').click(function() {
      $('#myTab a[href="#tab0"]').tab('show');
    });

    $('.map-area').click(function() {
      $(this).addClass('show');
    });

    $('.back-to-top').click(function() {
      $('html, body').stop().animate({
        'scrollTop': 0
      }, 1500, 'easeInOutExpo', function() {
      });
      return false;
    });

    $('.link-inpage').click(function(e) {
      var target = this.hash, $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top - ($('.menu-area').outerHeight() - 1)
      }, 1500, 'easeInOutExpo', function() {
        //window.location.hash = target;
      });
      return false;
    });
  }

  //Navbar Scroll
  function initNavbarSrcoll() {
    if ($('.main-header').length > 0) {
      var mainbottom = $('.main-header').offset().top + $('.main-header').height();
      $(window).on('scroll', function() {
        var stopWindow = Math.round($(window).scrollTop()) + $('.menu-area').outerHeight();
        conditionNavbar(stopWindow, mainbottom);
      });
    }
  }

  //Check Navar Show
  function initCheckNav() {
    if ($('.main-header').length > 0) {
      var mainbottom = $('.main-header').offset().top + $('.main-header').height();
      var stopWindow = Math.round($(window).scrollTop()) + $('.menu-area').outerHeight();
      conditionNavbar(stopWindow, mainbottom);
    }
  }

  //Condition Navbar
  function conditionNavbar(stopWindow, mainbottom) {
    if (stopWindow > mainbottom) {
      $('.menu-area').addClass('nav-fixed');
    } else {
      $('.menu-area').removeClass('nav-fixed nav-white-bg');
    }
    if ((stopWindow) > $('.menu-area').outerHeight()) {
      $('.menu-area').addClass('nav-white-bg');
    }
  }

  //Bg Parallax
  function initParallax() {
    $('.parallax-bg').each(function() {
      $(this).parallax("50%", 0.3);
    });
  }

  //Set header to window
  function initGetHWindow() {
    var wHeight = $(window).height();
    if (wHeight > 600 && !$('.main-header').hasClass('no-window')) {
      $('.main-header, .header-content-fixed').height(wHeight);
    }
  }

  //Map
  function initMap() {
    $('#map-contact').gmap({
      'center': '35.715745, 139.655168',
      'zoom': 15,
      scrollwheel: false,
      'disableDefaultUI': false,
      'callback': function() {
        var self = this;
        self.addMarker({
          'position': this.get('map').getCenter(),
          icon: '../../../images/marker.png'
        }).click(function() {
          self.openInfoWindow({
            'content': $('.map-contact-body').html()
          }, this);
        });
      }
    });
  }

  function initHold() {
    $('[data-holdwidth]').each(function(index, el) {
      var width = $(el).data('holdwidth');
      $(el).css('width', width);
    });
    $('[data-holdbg]').each(function(index, el) {
      var bg = $(el).data('holdbg');
      $(el).css('background-image', 'url(' + bg + ')');
    });
  }

  //Tooltip Bootrapt
  function initTooltip() {
    $('[data-toggle="tooltip"]').tooltip();
  }

  //Tigger Custom Btn FIle
  function initBtnFile() {
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });

    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
      var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;
      if (input.length) {
        input.val(log);
      } else {
        if (log) {
          console.log(log);
        }
      }
    });
  }

  // function initCaptcha() {
  //   $('#mycaptcha').simpleCaptcha({
  //     allowRefresh: false,
  //     scriptPath: "assets/plugins/simpleCaptcha/simpleCaptcha.php"
  //   });

  //   $('#mycaptcha').bind('ready.simpleCaptcha', function(hashSelected) {
  //     $('#captcha1,#captcha2').html($('#mycaptcha-wrap').html()).find('.mycaptcha1').removeAttr('id');
  //     $('#captcha1,#captcha2').find('.captchaImages img.captchaImage').click(function() {
  //       $('#captcha1,#captcha2').find('.captchaImages img.captchaImage').removeClass('simpleCaptchaSelected');
  //       $(this).addClass('simpleCaptchaSelected');
  //       $('.simpleCaptchaInput').val($(this).data('hash'));
  //     });
  //   });
  // }

})(jQuery);
