# all-country-codes

###  [Composer package](https://packagist.org/packages/george1meshveliani/all-country-codes)

**Instalation:** 

`composer require george1meshveliani/all-country-codes`


### **Import libraries:**

`use Meshvelius\LanguageCodes;`
`use Meshvelius\PhoneCodes;`

### **Examples**

    dump(LanguageCodes::getLanguages());
    dump(LanguageCodes::getLanguageCodeFromLanguage('Georgian')); // "ka"
    dump(LanguageCodes::getLanguageFromLanguageCode('ka'));       // "Georgian"
    dump(PhoneCodes::getPhoneCountry());
    dump(PhoneCodes::getPhoneCodeFromCountryName('Georgia'));     // "+995"
    dump(PhoneCodes::getCountryNameFromPhoneCode('+995'));        // "Georgia"
    

