<?php
// Errors
$lang['StripePayments.!error.auth'] = 'The gateway could not authenticate.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Please enter a Publishable Key.';
$lang['StripePayments.!error.secret_key.empty'] = 'Please enter a Secret Key.';
$lang['StripePayments.!error.secret_key.valid'] = 'Unable to connect to the Stripe API using the given Secret Key.';

$lang['StripePayments.!error.bank_account_unverified'] = 'You need to verify your bank account before you can use it to make a payment.';

$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.description'] = 'Uses Stripe Elements and the Payment Request API to automatically handle 3D Secure and SCA to send credit cards directly through Stripe';

// Form
$lang['StripePayments.ach_form.field_type'] = 'Account Type';
$lang['StripePayments.ach_form.field_holder_type'] = 'Holder Type';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Company';
$lang['StripePayments.ach_form.field_account_number'] = 'Account Number';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routing Number';
$lang['StripePayments.ach_form.field_notice'] = 'You will need to verify this account before you can use it to make a payment.';

$lang['StripePayments.ach_form.verification_notice'] = 'We sent two small deposits to this bank account. To verify this account, please confirm the amounts of these deposits.';
$lang['StripePayments.ach_form.field_first_deposit'] = 'First Deposit';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Second Deposit';

// Settings
$lang['StripePayments.publishable_key'] = 'API Publishable Key';
$lang['StripePayments.secret_key'] = 'API Secret Key';
$lang['StripePayments.tooltip_publishable_key'] = 'Your API Publishable Key is specific to either live or test mode. Be sure you are using the correct key.';
$lang['StripePayments.tooltip_secret_key'] = 'Your API Secret Key is specific to either live or test mode. Be sure you are using the correct key.';

$lang['StripePayments.heading_migrate_accounts'] = 'Migrate Old Payment Accounts';
$lang['StripePayments.text_accounts_remaining'] = 'Accounts Remaining: %1$s'; // Where %1$s is the number of accounts yet to be migrated
$lang['StripePayments.text_migrate_accounts'] = 'You can automatically migrate payment accounts stored offsite by the old Stripe gateway over to this Stripe Payments gateway. Accounts that are not stored offsite must be migrated by manually creating new payment accounts. In order to prevent timeouts migrations will be done in batches of %1$s. Run this as many times as needed to migrate all payment accounts.'; // Where %1$s is the batch size
$lang['StripePayments.warning_migrate_accounts'] = 'Do not uninstall the old Stripe gateway until you finish using this migration tool. Doing so will make the tool inaccessible.';
$lang['StripePayments.migrate_accounts'] = 'Migrate Accounts';

// Charge description
$lang['StripePayments.charge_description_default'] = 'Charge for specified amount';
$lang['StripePayments.charge_description'] = 'Charge for %1$s'; // Where %1$s is a comma seperated list of invoice ID display codes
