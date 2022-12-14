<?php

/**
 * Ceon Back In Stock Notifications Admin Language Definitions.
 *
 * @package     ceon_back_in_stock_notifications
 * @author      Conor Kerr <zen-cart.back-in-stock-notifications@dev.ceon.net>
 * @author      Tony Niemann <tony@loosechicken.com>
 * @copyright   Copyright 2004-2012 Ceon
 * @copyright   Portions Copyright 2003-2006 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @link        http://dev.ceon.net/web/zen-cart/back-in-stock-notifications
 * @license     http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 * @version     $Id: back_in_stock_notifications.php 2022-10-14 BMH $
 */
// BMH 2022-10-14

$define = [
    'BACK_IN_STOCK_NOTIFICATIONS_HEADING_TITLE' => 'Ceon Back In Stock Notifications', 
    'TEXT_ACTION_TO_PERFORM' => 'Action to Perform:', 
    
    'TEXT_LIST_ALL_SUBSCRIBED_PRODUCTS' => 'List all products with subscriptions', 
    'TEXT_LIST_ALL_SUBSCRIPTIONS' => 'List all subscriptions', 
    'TEXT_PREVIEW_NOTIFICATION_EMAILS' => 'Perform a test run of notification e-mails to be sent', 
    'TEXT_SEND_NOTIFICATION_EMAILS' => 'SEND NOTIFICATION E-MAILS for all subscribed products which are back in stock', 
    'TEXT_REMOVE_DELETED_PRODUCTS' => 'Remove subscriptions for deleted products from database', 
    
    'TEXT_PRODUCTS_WITH_SUBSCRIPTIONS' => 'Products with subscriptions', 
    'TEXT_ALL_SUBSCRIPTIONS' => 'All subscriptions', 
    
    'TABLE_HEADING_PRODUCT_ID' => 'ID', 
    'TABLE_HEADING_PRODUCT_NAME' => 'Product Name', 
    'TABLE_HEADING_PRODUCT_CATEGORY' => 'Category', 
    'TABLE_HEADING_NUM_SUBSCRIBERS' => 'Num Subscribers', 
    'TABLE_HEADING_CURRENT_STOCK' => 'Current Stock', 
    'TABLE_HEADING_DATE_SUBSCRIBED' => 'Date Subscribed', 
    'TABLE_HEADING_CUSTOMER_NAME' => 'Customer\'s Name', 
    'TABLE_HEADING_CUSTOMER_EMAIL' => 'Customer\'s E-mail Address', 
    
    'TEXT_SORT_BY_PRODUCT_NAME' => 'Sort by Product Name', 
    'TEXT_SORT_BY_PRODUCT_CATEGORY' => 'Sort by Category', 
    'TEXT_SORT_BY_NUM_SUBSCRIBERS' => 'Sort by Number of Subscribers', 
    'TEXT_SORT_BY_CURRENT_STOCK' => 'Sort by Current Stock Level', 
    'TEXT_SORT_BY_DATE_SUBSCRIBED' => 'Sort by Date Subscribed', 
    'TEXT_SORT_BY_CUSTOMER_NAME' => 'Sort by Customer\'s Name', 
    'TEXT_SORT_BY_CUSTOMER_EMAIL' => 'Sort by Customer\'s E-mail Address', 
    
    'TEXT_DISPLAY_NUMBER_OF_BACK_IN_STOCK_NOTIFICATIONS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> subscriptions) ', 
    'TEXT_SHOW_ALL' => 'Show All', 
    'TEXT_DISPLAY_BY_PAGE' => 'Display by Page', 
    
    'TEXT_SEND_OUTPUT_TITLE' => 'Send Output', 
    'TEXT_PREVIEW_OR_SEND_OUTPUT_TITLE_NONE' => 'There are no notifications to be sent at this time.', 
    'TEXT_PREVIEW_OUTPUT_TITLE_SINGULAR' => 'Only one notification would have been sent at this time. An example of this notification has been sent to the store owner\'s e-mail address.', 
    'TEXT_PREVIEW_OUTPUT_TITLE_PLURAL' => '%s notifications would have been sent at this time. An example of the first notification has been sent to the store owner\'s e-mail address.', 
    'TEXT_SEND_OUTPUT_TITLE_SINGULAR' => 'Only one notification was sent. Its details are as follows...', 
    'TEXT_SEND_OUTPUT_TITLE_PLURAL' => '%s notifications were sent. Their details are as follows...', 
    
    'TEXT_DELETED_PRODUCTS_SUBSCRIPTIONS_REMOVED' => '%s subscription(s) for deleted products removed.', 
    
    'EMAIL_BACK_IN_STOCK_NOTIFICATIONS_SUBJECT' => STORE_NAME . ' Back In Stock Notification', 
    
    'EMAIL_GREETING' => 'Dear %s,', 
    'EMAIL_INTRO_SINGULAR1' => 'We have restocked a product you asked to be notified about.', 
    'EMAIL_INTRO_SINGULAR2' => 'Please check it out before it goes out of stock again!', 
    'EMAIL_INTRO_PLURAL1' => 'We have restocked several products you asked to be notified about.', 
    'EMAIL_INTRO_PLURAL2' => 'Please check them out before they go out of stock again!', 
    'PRODUCTS_DETAIL_TITLE_SINGULAR' => 'Product Back In Stock', 
    'PRODUCTS_DETAIL_TITLE_PLURAL' => 'Products Back In Stock', 
    'EMAIL_CONTACT' => 'For help with your testimonial submission, please contact us: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n", 
    'EMAIL_GV_CLOSURE' => 'Sincerely,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n", 
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'This restock request(s) was submitted to us by you or by one of our users. If you did not submit a request(s), or feel that you have received this email in error, please send an email to %s ', 
    
    'TEXT_PLEASE_WAIT' => 'Please wait .. sending emails ..<br /><br />Please do not interrupt this process!', 
    'TEXT_FINISHED_SENDING_EMAILS' => 'Finished sending e-mails!', 
    
    'TEXT_AFTER_EMAIL_INSTRUCTIONS' => '<p>%s emails sent!</p><p>The email addresses which were subscribed to be notified when this product was back in stock <strong>have now been deleted</strong> from the Back In Stock Notification List for this product!</p>', 
    
    'EMAIL_LINK' => 'Link: ', 
    ];
return $define;

?>
