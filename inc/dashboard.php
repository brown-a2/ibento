<?php

// Remove some of the boxes from dashboard we don't need, make things less cluttered
function ibento_remove_dashboard_metabox() {
    remove_meta_box('dashboard_primary', 'dashboard', 'side'); // WordPress News
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
}

add_action('admin_init', 'ibento_remove_dashboard_metabox');
