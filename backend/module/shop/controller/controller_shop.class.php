<?php
    class controller_shop {

        function list() {
            // echo json_encode(common::load_model('shop_model', 'get_list', [$_POST['orderby'], $_POST['total_prod'], $_POST['items_page']]));
            echo json_encode(common::load_model('shop_model', 'get_list'));
        }
        
        function details_carousel() {
            echo json_encode(common::load_model('shop_model', 'get_details_carousel', $_POST['id']));
        }
        
        function filters() {
            echo json_encode(common::load_model('shop_model', 'get_filters'));
        }
        
        function filters_search() {
            // echo json_encode(common::load_model('shop_model', 'get_filters_search', [$_POST['orderby'], $_POST['total_prod'],$_POST['items_page'], $_POST['filters']]));
            echo json_encode(common::load_model('shop_model', 'get_filters_search', [$_POST['orderby'], $_POST['filters']]));
        }

        function most_visit() {
            echo json_encode(common::load_model('shop_model', 'get_most_visit', $_POST['id']));
        }

        function count() {
            echo json_encode(common::load_model('shop_model', 'get_count'));
        }

        function count_filters() {
            echo json_encode(common::load_model('shop_model', 'get_count_filters', $_POST['filters']));
        }

        function cars() {
            echo json_encode(common::load_model('shop_model', 'get_cars', [$_POST['category'], $_POST['type'], $_POST['id']]));
        }

        function load_likes() {
            // echo json_encode($_POST['token']);
            echo json_encode(common::load_model('shop_model', 'get_load_likes', $_POST['token']));
        }

        function control_likes() {
            echo json_encode(common::load_model('shop_model', 'get_control_likes', [$_POST['id'], $_POST['token']]));
        }

    }
?>
