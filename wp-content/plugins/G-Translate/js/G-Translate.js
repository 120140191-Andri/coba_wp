var s = document.createElement('script');
s.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
document.head.appendChild(s);

function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'ind'}, 'google_translate_element');
}