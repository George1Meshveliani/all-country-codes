<?php
/**
 * List of 217 language codes: ISO 639-1.
 *
 * @author    George Meshveliani <giorgi.meshveliani@gmail.com>
 * @copyright 2022 (c) George Meshveliani - all-country-codes
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/George1Meshveliani/all-country-codes
 */
namespace Meshvelius;

/**
 * Language code handler.
 */
class LanguageCodes {
    /**
     * Get all language codes as array.
     *
     * @return array → language codes and language names
     */
    public static function getLanguages() {
        return CountryCodesCollection::allLanguages();
    }

    /**
     * Get language name from language code.
     *
     * @param string $languageCode → language code, e.g. 'ka'
     *
     * @return string|false → country name
     */
    public static function getLanguageFromLanguageCode($languageCode) {
        return CountryCodesCollection::getLanguages($languageCode) ?: false;
    }

    /**
     * Get language code from language name.
     *
     * @param string $languageName → language name, e.g. 'Georgian'
     *
     * @return string|false → language code
     */
    public static function getLanguageCodeFromLanguage($languageName) {
        return array_search($languageName, CountryCodesCollection::allLanguages(),true);
    }
}
