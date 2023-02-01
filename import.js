const fs = require('fs/promises');
const langs = require('./country_language.json');
const languages = require('./languages.json');
const countries = require('./countries.json');

for (const lang of langs) {
    const country = countries.find((country) => country.code === lang.country_code);
    lang.country_id = country.id;
    lang.language_id = Number(lang.language_id);
    delete lang.country_code;
}

fs.writeFile('./country_language.new.json', JSON.stringify(langs, null, 2), 'utf-8');