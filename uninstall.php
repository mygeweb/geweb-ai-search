<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

delete_option('geweb_aisearch_encryption_key');
delete_option('geweb_aisearch_api_key_encrypted');

delete_option('geweb_aisearch_model');
delete_option('geweb_aisearch_post_types');

delete_option('geweb_aisearch_gemini_store');

delete_post_meta_by_key('geweb_aisearch_document_name');