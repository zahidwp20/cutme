<?php 

// Custom List Table Class
if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class CTA_List_Table extends WP_List_Table {
    
    function get_data(){
        global $wpdb;

       return $wpdb->get_results( "SELECT * FROM mobile_number",ARRAY_A );
    }

    function column_default($item, $column_name) {
        return isset($item[$column_name]) ? $item[$column_name] : '';
    }

    function column_name($item) {
        return '<strong>' . $item['name'] . '</strong>';
    }

    function get_columns() {
        $columns = [
            'id' => 'ID',
            'mobile' => 'Phone',
        ];
        return $columns;
    }

    function prepare_items() {
        
        $this->_column_headers = array($this->get_columns(), [], []);
        $this->items = $this->get_data();
    }
}
?>