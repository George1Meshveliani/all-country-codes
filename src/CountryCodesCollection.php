<?php

/**
 *
 * @author    George Meshveliani <giorgi.meshveliani@gmail.com>
 * @copyright 2022 (c) George Meshveliani - all-country-codes
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/George1Meshveliani/all-country-codes
 */
namespace Meshvelius;

/**
 * Language code handler.
 *
 * Compiled from https://wikipedia.org/wiki/List_of_ISO_639-1_codes
 */
class CountryCodesCollection {
    /**
     * List of language codes.
     *
     * @var array
     */
    protected static array $languageCodesData = [
        'aa' => 'Afar',
        'ab' => 'Abkhazian',
        'af' => 'Afrikaans',
        'am' => 'Amharic',
        'ar' => 'Arabic',
        'ar-ae' => 'Arabic (U.A.E.)',
        'ar-bh' => 'Arabic (Bahrain)',
        'ar-dz' => 'Arabic (Algeria)',
        'ar-eg' => 'Arabic (Egypt)',
        'ar-iq' => 'Arabic (Iraq)',
        'ar-jo' => 'Arabic (Jordan)',
        'ar-kw' => 'Arabic (Kuwait)',
        'ar-lb' => 'Arabic (Lebanon)',
        'ar-ly' => 'Arabic (libya)',
        'ar-ma' => 'Arabic (Morocco)',
        'ar-om' => 'Arabic (Oman)',
        'ar-qa' => 'Arabic (Qatar)',
        'ar-sa' => 'Arabic (Saudi Arabia)',
        'ar-sy' => 'Arabic (Syria)',
        'ar-tn' => 'Arabic (Tunisia)',
        'ar-ye' => 'Arabic (Yemen)',
        'as' => 'Assamese',
        'ay' => 'Aymara',
        'az' => 'Azeri',
        'ba' => 'Bashkir',
        'be' => 'Belarusian',
        'bg' => 'Bulgarian',
        'bh' => 'Bihari',
        'bi' => 'Bislama',
        'bn' => 'Bengali',
        'bo' => 'Tibetan',
        'br' => 'Breton',
        'ca' => 'Catalan',
        'co' => 'Corsican',
        'cs' => 'Czech',
        'cy' => 'Welsh',
        'da' => 'Danish',
        'de' => 'German',
        'de-at' => 'German (Austria)',
        'de-ch' => 'German (Switzerland)',
        'de-li' => 'German (Liechtenstein)',
        'de-lu' => 'German (Luxembourg)',
        'div' => 'Divehi',
        'dz' => 'Bhutani',
        'el' => 'Greek',
        'en' => 'English',
        'en-au' => 'English (Australia)',
        'en-bz' => 'English (Belize)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'en-ie' => 'English (Ireland)',
        'en-jm' => 'English (Jamaica)',
        'en-nz' => 'English (New Zealand)',
        'en-ph' => 'English (Philippines)',
        'en-tt' => 'English (Trinidad)',
        'en-us' => 'English (United States)',
        'en-za' => 'English (South Africa)',
        'en-zw' => 'English (Zimbabwe)',
        'eo' => 'Esperanto',
        'es' => 'Spanish',
        'es-ar' => 'Spanish (Argentina)',
        'es-bo' => 'Spanish (Bolivia)',
        'es-cl' => 'Spanish (Chile)',
        'es-co' => 'Spanish (Colombia)',
        'es-cr' => 'Spanish (Costa Rica)',
        'es-do' => 'Spanish (Dominican Republic)',
        'es-ec' => 'Spanish (Ecuador)',
        'es-es' => 'Spanish (España)',
        'es-gt' => 'Spanish (Guatemala)',
        'es-hn' => 'Spanish (Honduras)',
        'es-mx' => 'Spanish (Mexico)',
        'es-ni' => 'Spanish (Nicaragua)',
        'es-pa' => 'Spanish (Panama)',
        'es-pe' => 'Spanish (Peru)',
        'es-pr' => 'Spanish (Puerto Rico)',
        'es-py' => 'Spanish (Paraguay)',
        'es-sv' => 'Spanish (El Salvador)',
        'es-us' => 'Spanish (United States)',
        'es-uy' => 'Spanish (Uruguay)',
        'es-ve' => 'Spanish (Venezuela)',
        'et' => 'Estonian',
        'eu' => 'Basque',
        'fa' => 'Farsi',
        'fi' => 'Finnish',
        'fj' => 'Fiji',
        'fo' => 'Faeroese',
        'fr' => 'French',
        'fr-be' => 'French (Belgium)',
        'fr-ca' => 'French (Canada)',
        'fr-ch' => 'French (Switzerland)',
        'fr-lu' => 'French (Luxembourg)',
        'fr-mc' => 'French (Monaco)',
        'fy' => 'Frisian',
        'ga' => 'Irish',
        'gd' => 'Gaelic',
        'gl' => 'Galician',
        'gn' => 'Guarani',
        'gu' => 'Gujarati',
        'ha' => 'Hausa',
        'he' => 'Hebrew',
        'hi' => 'Hindi',
        'hr' => 'Croatian',
        'hu' => 'Hungarian',
        'hy' => 'Armenian',
        'ia' => 'Interlingua',
        'id' => 'Indonesian',
        'ie' => 'Interlingue',
        'ik' => 'Inupiak',
        'in' => 'Indonesian',
        'is' => 'Icelandic',
        'it' => 'Italian',
        'it-ch' => 'Italian (Switzerland)',
        'iw' => 'Hebrew',
        'ja' => 'Japanese',
        'ji' => 'Yiddish',
        'jw' => 'Javanese',
        'ka' => 'Georgian',
        'kk' => 'Kazakh',
        'kl' => 'Greenlandic',
        'km' => 'Cambodian',
        'kn' => 'Kannada',
        'ko' => 'Korean',
        'kok' => 'Konkani',
        'ks' => 'Kashmiri',
        'ku' => 'Kurdish',
        'ky' => 'Kirghiz',
        'kz' => 'Kyrgyz',
        'la' => 'Latin',
        'ln' => 'Lingala',
        'lo' => 'Laothian',
        'ls' => 'Slovenian',
        'lt' => 'Lithuanian',
        'lv' => 'Latvian',
        'mg' => 'Malagasy',
        'mi' => 'Maori',
        'mk' => 'FYRO Macedonian',
        'ml' => 'Malayalam',
        'mn' => 'Mongolian',
        'mo' => 'Moldavian',
        'mr' => 'Marathi',
        'ms' => 'Malay',
        'mt' => 'Maltese',
        'my' => 'Burmese',
        'na' => 'Nauru',
        'nb-no' => 'Norwegian (Bokmal)',
        'ne' => 'Nepali (India)',
        'nl' => 'Dutch',
        'nl-be' => 'Dutch (Belgium)',
        'nn-no' => 'Norwegian',
        'no' => 'Norwegian (Bokmal)',
        'oc' => 'Occitan',
        'om' => '(Afan)/Oromoor/Oriya',
        'or' => 'Oriya',
        'pa' => 'Punjabi',
        'pl' => 'Polish',
        'ps' => 'Pashto/Pushto',
        'pt' => 'Portuguese',
        'pt-br' => 'Portuguese (Brazil)',
        'qu' => 'Quechua',
        'rm' => 'Rhaeto-Romanic',
        'rn' => 'Kirundi',
        'ro' => 'Romanian',
        'ro-md' => 'Romanian (Moldova)',
        'ru' => 'Russian',
        'ru-md' => 'Russian (Moldova)',
        'rw' => 'Kinyarwanda',
        'sa' => 'Sanskrit',
        'sb' => 'Sorbian',
        'sd' => 'Sindhi',
        'sg' => 'Sangro',
        'sh' => 'Serbo-Croatian',
        'si' => 'Singhalese',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'sm' => 'Samoan',
        'sn' => 'Shona',
        'so' => 'Somali',
        'sq' => 'Albanian',
        'sr' => 'Serbian',
        'ss' => 'Siswati',
        'st' => 'Sesotho',
        'su' => 'Sundanese',
        'sv' => 'Swedish',
        'sv-fi' => 'Swedish (Finland)',
        'sw' => 'Swahili',
        'sx' => 'Sutu',
        'syr' => 'Syriac',
        'ta' => 'Tamil',
        'te' => 'Telugu',
        'tg' => 'Tajik',
        'th' => 'Thai',
        'ti' => 'Tigrinya',
        'tk' => 'Turkmen',
        'tl' => 'Tagalog',
        'tn' => 'Tswana',
        'to' => 'Tonga',
        'tr' => 'Turkish',
        'ts' => 'Tsonga',
        'tt' => 'Tatar',
        'tw' => 'Twi',
        'uk' => 'Ukrainian',
        'ur' => 'Urdu',
        'us' => 'English',
        'uz' => 'Uzbek',
        'vi' => 'Vietnamese',
        'vo' => 'Volapuk',
        'wo' => 'Wolof',
        'xh' => 'Xhosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'zh' => 'Chinese',
        'zh-cn' => 'Chinese (China)',
        'zh-hk' => 'Chinese (Hong Kong SAR)',
        'zh-mo' => 'Chinese (Macau SAR)',
        'zh-sg' => 'Chinese (Singapore)',
        'zh-tw' => 'Chinese (Taiwan)',
        'zu' => 'Zulu'
    ];

    protected static array $phoneCodesData = [
        "+1"     =>  "United States",
        "+90 "   =>  "Turkey",
        "+90392" =>  "Northern Cyprus",
        "+91 "   =>  "India",
        "+92 "   =>  "Pakistan",
        "+93"    =>  "Afghanistan",
        "+94"    =>  "Sri Lanka",
        "+95 "   =>  "Myanmar",
        "+960"   =>  "Maldives",
        "+961"   =>  "Lebanon",
        "+962"   =>  "Jordan",
        "+963"   =>  "Syria",
        "+964"   =>  "Iraq",
        "+965"   =>  "Kuwait",
        "+966"   =>  "Saudi Arabia",
        "+967"   =>  "Yemen",
        "+968"   =>  "Oman",
        "+970"   =>  "Palestine",
        "+971"   =>  "United Arab Emirates",
        "+972"   =>  "Israel",
        "+973"   =>  "Bahrain",
        "+974"   =>  "Qatar",
        "+975"   =>  "Bhutan",
        "+976"   =>  "Mongolia",
        "+977"   =>  "Nepal",
        "+98 "   =>  "Iran",
        "+992"   =>  "Tajikistan",
        "+993"   =>  "Turkmenistan",
        "+994"   =>  "Azerbaijan",
        "+995"   =>  "Georgia",
        "+996"   =>  "Kyrgyzstan",
        "+998"   =>  "Uzbekistan",
    ];

    /**
     * Returns all language codes.
     *
     * @return array
     */
    public static function allLanguages() {
        return static::$languageCodesData;
    }

    /**
     * Returns all phone codes.
     *
     * @return array
     */
    public static function allPhones() {
        return static::$phoneCodesData;
    }

    /**
     * Return language name from language code.
     *
     * @param string $key
     *
     * @return string|null → language code or null
     */
    public static function getLanguages($key) {
        if (isset(static::$languageCodesData[$key])) {
            return static::$languageCodesData[$key];
        }
        return null;
    }

    /**
     * Return Country name from phone code.
     *
     * @param string $key
     *
     * @return string|null → phone code or null
     */
    public static function getPhoneCountry($key) {
        if (isset(static::$phoneCodesData[$key])) {
            return static::$phoneCodesData[$key];
        }
        return null;
    }
}
