
// Google Fonts
WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'facebook', use: true, link: 'https://www.facebook.com/YANTRAGENE2017/', extras: 'target="_blank"' },
    'instagram':   { class: 'instagram', use: true, link: 'https://www.instagram.com',icon:'instagram',extras: 'target="_blank"' },
    'google':     { class: 'gplus',    use: true, link: 'https://plus.google.com/myidongoogle',extras: 'target="_blank"'},
    'twitter':   { class: 'instagram',      use: true, link: 'http://twitter.com', icon: 'twitter', title: 'My title for the button',extras: 'target="_blank"'},
    'phone':      { class: 'phone separated',    use: true, link: '+919876543210' },
    'email':      { class: 'email',    use: true, link: 'contactus@yantragene.com' }
  }
});