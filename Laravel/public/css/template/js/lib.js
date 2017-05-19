(function ($) {
    var PopupManager = {
        popup_window: null,
        interval: null,
        interval_time: 80,
        waitForPopupClose: function () {
            if (PopupManager.isPopupClosed()) {
                PopupManager.destroyPopup();
                //window.location.reload();
            }
        },
        destroyPopup: function () {
            this.popup_window = null;
            window.clearInterval(this.interval);
            this.interval = null;
        },
        isPopupClosed: function () {
            return (!this.popup_window || this.popup_window.closed);
        },
        open: function (url, width, height) {
            this.popup_window = window.open(url, "", this.getWindowParams(width, height));
            this.interval = window.setInterval(this.waitForPopupClose, this.interval_time);

            return this.popup_window;
        },
        getWindowParams: function (width, height) {
            var center = this.getCenterCoords(width, height);
            return "width=" + width + ",height=" + height + ",status=1,location=1,resizable=yes,left=" + center.x + ",top=" + center.y;
        },
        getCenterCoords: function (width, height) {
            var parentPos = this.getParentCoords();
            var parentSize = this.getWindowInnerSize();

            var xPos = parentPos.width + Math.max(0, Math.floor((parentSize.width - width) / 2));
            var yPos = parentPos.height + Math.max(0, Math.floor((parentSize.height - height) / 2));

            return {x: xPos, y: yPos};
        },
        getWindowInnerSize: function () {
            var w = 0;
            var h = 0;

            if ('innerWidth' in window) {
                // For non-IE
                w = window.innerWidth;
                h = window.innerHeight;
            } else {
                // For IE
                var elem = null;
                if (('BackCompat' === window.document.compatMode) && ('body' in window.document)) {
                    elem = window.document.body;
                } else if ('documentElement' in window.document) {
                    elem = window.document.documentElement;
                }
                if (elem !== null) {
                    w = elem.offsetWidth;
                    h = elem.offsetHeight;
                }
            }
            return {width: w, height: h};
        },
        getParentCoords: function () {
            var w = 0;
            var h = 0;

            if ('screenLeft' in window) {
                // IE-compatible variants
                w = window.screenLeft;
                h = window.screenTop;
            } else if ('screenX' in window) {
                // Firefox-compatible
                w = window.screenX;
                h = window.screenY;
            }
            return {width: w, height: h};
        }
    };

    var GoogleOath2Client = {
        auth2: undefined,
        callback: function () {
        },

        signInCallback: function (authResult) {
            if (authResult['code']) {
                // Send the code to the server
                $.ajax({
                    type: 'POST',
                    data: {code: authResult.code},
                    url: '/loginv2/social-login/google.php',
                    dataType: 'JSON',
                    beforeSend:function() {
                        showLoading('Google');
                    },
                    success: function (response) {
                        GoogleOath2Client.callback(response);
                        hideLoading(response);
                    },
                    error: function(response){
                        window.location.reload();
                    }
                });
            } else {

            }
        },

        start: function () {
            gapi.load('auth2', function () {
                GoogleOath2Client.auth2 = gapi.auth2.init({
                    client_id: HMClient.google.clientId,
                    // Scopes to request in addition to 'profile' and 'email'
                    scope: HMClient.google.scope
                });
                GoogleOath2Client.auth2.then(function () {
                    $(window).trigger('oauth2ClientInit', [GoogleOath2Client.auth2]);
                });

            });
        },

        init: function (target, callback) {

            if (typeof callback == "function") {
                this.callback = callback;
            }

            GoogleOath2Client.initLib();

            target.click(function (e) {
                // signInCallback defined in step 6.
                e.preventDefault();
                GoogleOath2Client.auth2.grantOfflineAccess({'redirect_uri': 'postmessage'}).then(GoogleOath2Client.signInCallback);
            });
        },

        initLib: function () {
            if (typeof gapi == 'undefined') {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.async = true;
                script.defer = true;
                if (script.readyState) {
                    script.onreadystatechange = function () {
                        if (script.readyState == "loaded" || script.readyState == "complete") {
                            script.onreadystatechange = null;
                            GoogleOath2Client.start();
                        }
                    };
                } else {
                    script.onload = function () {
                        GoogleOath2Client.start();
                    };
                }
                script.src = 'https://apis.google.com/js/client:platform.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            }

        }
    };

    var FacebookOath2Client = {
        callback: function () {
        },

        init: function (target, callback) {
            if (typeof callback == "function") {
                this.callback = callback;
            }

            var js, fjs = document.getElementsByTagName('script')[0];
            if (!document.getElementById('facebook-jssdk')) {
                js = document.createElement('script');
                js.id = 'facebook-jssdk';
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }

            window.fbAsyncInit = function () {
                FB.init({
                    appId: HMClient.facebook.appId,
                    cookie: true,  // enable cookies to allow the server to access
                                   // the session
                    xfbml: true,  // parse social plugins on this page
                    version: 'v2.5' // use graph api version 2.5
                });
            };

            target.click(function (e) {
                e.preventDefault();
                if (FB !== 'undefined') {
                    FB.login(function (response) {
                        // Handle the response object, like in statusChangeCallback() in our demo
                        // code.
                        $.ajax({
                            url: '/loginv2/social-login/facebook.php',
                            type: 'POST',
                            data: response.authResponse,
                            dataType: 'JSON',
                            beforeSend:function() {
                                showLoading('Facebook');
                            },
                            success: function (response) {
                                FacebookOath2Client.callback(response);
                                hideLoading(response);
                            },
                            error: function (e) {
                                alert('error');
                                hideLoading(response);
                            }
                        });
                    }, {scope: HMClient.facebook.scope});
                }

            });
        }
    };

    var YahooOath2Client = {
        callback: function () {
        },

        init: function (target, callback) {

            if (typeof callback == "function") {
                window.handlerLogin = callback;
            }

            target.click(function (e) {
                e.preventDefault();
                var url = '/loginv2/social-login/hooya.php';
                showLoading('Yahoo');
                PopupManager.open(url, 600, 435);
            });
        }
    };

    $.fn.Oath2Client = function(type, callback) {
        switch (type) {
            case 'facebook':
                FacebookOath2Client.init($(this), callback);
                break;
            case 'google':
                GoogleOath2Client.init($(this), callback);
                break;
            case 'yahoo':
                YahooOath2Client.init($(this), callback);
                break;
        }
    };

    function showLoading(type) {
        $('#loginModal').modal('hide');
        $('#loginSocialModal').find('.loaderv2-text').html('<p class="text-center">Bạn đang đăng nhập bằng ' + type + '. Vui lA�ng chờ trong giA�y lA�t.</p>');
        $('#loginSocialModal').modal('show');
    }

    function hideLoading(response) {
        switch (response.status) {
            case 'fail':
                $('#loginSocialModal').find('.loaderv2-text').html('<p class="text-center">' + response.message + '</p>');
                break;
            case 'success':
                $('#loginSocialModal').modal('hide');
                break;
        }
    }

}(jQuery));