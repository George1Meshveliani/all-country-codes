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
    public static function getPhoneCountries() {
        return CountryCodesCollection::allPhones();
    }

    /**
     * Get country name from calling code.
     *
     * @param string $phoneCode → calling code, e.g. '+995'
     *
     * @return string|false → country name e.g 'Georgia'
     */
    public static function getCountryNameFromPhoneCode($phoneCode) {
        return CountryCodesCollection::getPhoneCountries($phoneCode) ?: false;
    }

    /**
     * Get phone code from country name.
     *
     * @param string $countryName → country name, e.g. 'Georgia'
     *
     * @return string|false → phone code, e.g '+995'
     */
    public static function getPhoneCodeFromCountryName($countryName) {
        return array_search($countryName, CountryCodesCollection::allPhones(),true);
    }
}