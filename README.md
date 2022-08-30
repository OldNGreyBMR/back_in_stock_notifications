# Zen Cart - back in stock notifications
back in stock notifications zc157d PHP 8.0 Version: 3.2.2
# Zen Cart - Back in Stock Notifications
If a product is out of stock, customers can subscribe/request to receive a notification when that product becomes available again.

This is based the original CEON version, not the ajax version. Neither are supported anymore, but the functionality is well worthwhile and I use it, so am encouraging use and development here.

I've been modifying it for years, so here is where I'll add in those modifications when the mood takes me and in the process make the code more Zen-ish to maybe get it into the core one day.

You may report bugs here (for the CEON version only). This code is tested with the current Zen Cart 1.5.7 and is compatible with php7.3 upwards.
Note that the original documention in the docs folder will NOT be updated.
## Differences to date from the version 12 in Zen Cart Plugins

Bugfix: duplicate subscription links displayed.
Fixes for warnings in strict mode/php8 compatibility.
Removal of some unnecessary files.
Multiple minor code-tightening not affecting functionality.

## Changelog
16/02/22:
Bugfix for duplicated subscription links when no login required.
Removed: /modules/ceon_form_bis as functionality duplicated in observer class
Modified: observers made auto-loading
Removed: unnecessary observer loaders 
Bugfix for missing product_model in account BISN listing
Bugfix for missing image in account BISN listing, Update button
Modified: language defines
Removed: modified core file functions_general
Removed: empty language folders
Shopfront: miscellaneous IDE recommandations, strict comparisons, short-array syntax

2022-08-25: BMH
updated version number to 3.2.2
reincluded /modules/ceon_form_bis 
included products_model in admin displays with link to product
included product_model in emails
removed redundant fields in email that were never referenced
declared arrays and variables to comply with PHP8.0
corrected full date displayed to be "Y:m:d H:i:s"
