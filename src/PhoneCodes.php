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
 */
class PhoneCodes {
    /**
     * Get all language codes as array.
     *
     * @return array → language codes and language names
     */
    public static function getPhoneCountry() {
        return CountryCodesCollection::allPhones();
    }

    /**
     * Get language name from language code.
     *
     * @param string $languageCode → language code, e.g. 'es'
     *
     * @return string|false → country name
     */
    public static function getCountryNameFromPhoneCode($phoneCode) {
        return CountryCodesCollection::getPhoneCountry($phoneCode) ?: false;
    }

    /**
     * Get phone code from country name.
     *
     * @param string $countryName → country name, e.g. 'Georgia'
     *
     * @return string|false → phone code
     */
    public static function getPhoceCodeFromCountryName($countryName) {
        return array_search($countryName, CountryCodesCollection::allPhones(),true);
    }
}