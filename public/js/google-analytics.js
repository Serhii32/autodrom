document.getElementById("footer-form").addEventListener("submit", function () {
    gtag('event', 'Submit', {
	    'event_category': 'Заявка на Услуги',
	    'event_label': 'Footer',
	});
});
document.getElementById("menu-request-button").addEventListener("click", function () {
    gtag( 'event', 'Click', {
	    'event_category': 'Оставить заявку',
	    'event_label': 'Header',
	});
});
