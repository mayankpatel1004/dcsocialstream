<link rel="stylesheet" type="text/css" href="http://localhost/Dropbox/testing/dcsocialstream/dcsns_wall.css" media="all" />
<script type="text/javascript" src="http://localhost/Dropbox/testing/dcsocialstream/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://localhost/Dropbox/testing/dcsocialstream/jquery.plugins.js"></script>
<script type="text/javascript" src="http://localhost/Dropbox/testing/dcsocialstream/jquery.site.js"></script>
<script type="text/javascript" src="http://localhost/Dropbox/testing/dcsocialstream/jquery.social.stream.1.6.min.js"></script>
<script type="text/javascript" src="http://localhost/Dropbox/testing/dcsocialstream/jquery.social.stream.wall.1.7.js"></script>
<script type="text/javascript">
    if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
            ) {
        jQuery(document).ready(function ($) {
            $('#social-stream').dcSocialStream({
                feeds: {
                    twitter: {
                        //id: '/29825386,@legendscorner,#legendscorner ',
                        id: '/519947763,The2ndFiddle,#the2ndfiddle ',
                        url: 'http://localhost/Dropbox/testing/dcsocialstream/twitter.php'
                    },
                    facebook: {
                        id: '44038224944',
                        out: 'intro,thumb,text,user,share',
                        thumb: true,
                        url: 'http://localhost/Dropbox/testing/dcsocialstream/facebook.php'
                    },
                    pinterest: {
                            id: 'proteinpicker'
                    },
                    instagram: {
                        id: '!357422105,@the_2nd_fiddle',
                        accessToken: '357422105.1677ed0.3b476efc0ed441f598e2651839a5da99',
                        clientId: 'fbf528b2131b4db9a0e92e27e0b3fbc2',
                        comments: 1,
                        likes: 5
                    }
                },
                rotate: {
                    delay: 0
                },
                twitterId: '@The2ndFiddle',
                control: false,
                filter: false,
                wall: true,
                center: true,
                cache: false,
                max: '1',
                limit: 1,
                iconPath: 'http://localhost/Dropbox/testing/dcsocialstream/images/dcsns-dark/',
                imagePath: 'http://localhost/Dropbox/testing/dcsocialstream/images/dcsns-dark/'
            });
        });
    } else {
        jQuery(document).ready(function ($) {
            $('#social-stream').dcSocialStream({
                feeds: {
                    twitter: {
                        //id: '/3121361602,@summit_concrete,#summitconcretetn ',
                        //id: '/29825386,@legendscorner,#legendscorner ',
                        id: '/519947763,The2ndFiddle,#the2ndfiddle ',
                        url: 'http://localhost/Dropbox/testing/dcsocialstream/twitter.php'
                    },
                    facebook: {
                        id: '44038224944',
                        out: 'intro,thumb,text,user,share',
                        thumb: true,
                        url: 'http://localhost/Dropbox/testing/dcsocialstream/facebook.php'
                    },
                    pinterest: {
                            id: 'proteinpicker'
                    },
                    instagram: {
                        id: '!357422105,@the_2nd_fiddle',
                        accessToken: '357422105.1677ed0.3b476efc0ed441f598e2651839a5da99',
                        clientId: 'fbf528b2131b4db9a0e92e27e0b3fbc2',
                        comments: 10,
                        likes: 5
                    }
                },
                rotate: {
                    delay: 0
                },
                twitterId: '@The2ndFiddle',
                control: false,
                filter: false,
                wall: true,
                center: true,
                cache: false,
                max: '5',
                limit: 5,
                iconPath: 'http://localhost/Dropbox/testing/dcsocialstream/dcsns-dark/',
                imagePath: 'http://localhost/Dropbox/testing/dcsocialstream/dcsns-dark/'
            });
        });
    }

</script>
<style>
    h3 {text-align: center;}
    #wall {padding: 10px 0 0 0;}
    #wrapper, #container {width:100%; padding: 0;}
    #nav-container {margin-bottom: 20px;}
</style>
<div id="social-stream"></div>
