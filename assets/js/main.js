var validation = require('./components/validation'),
    inlineSubmit = require('./components/inlineSubmit');

require('./components/mapbox');

new validation(document.getElementById('mce-EMAIL'), {
    pattern: /\S+@\S+\.\S+/
});

new validation(document.getElementById('mce-NAME'), {
    pattern: /[a-z]+/i
});

new inlineSubmit(document.getElementById('mailing-list__sign-up'));
