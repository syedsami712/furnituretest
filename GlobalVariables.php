<?php

//default path definations.
define('DEFAULT_WEB_PATH', "http://localhost:8012/FurnitureBazaar/");
define('DEFAULT_IMAGE_PATH', 'http://localhost:8012/FurnitureBazaar/images/');


//API PAGE
define('API_PAGE', "api.php?functionName=");

//api functions 
define('RETRIEVE_PRODUCTS_DETAILS', "retrieveProductDetails");
define('RETRIEVE_PRODUCTS_DETAILS_WITH_RESPECT_TO_CATEGORY_ID', "retrieveProductsDetailsWithRespectToCategoryId");
define('RETRIEVE_USER_DETAILS', "retrieveUserDetailsforUpdate");
define('ADD_TO_CART', "addProductToCart");
define('DELETE_FROM_CART', "deleteFromCart");
define('UPDATE_CART', "updateCart");
define('RETRIEVE_ALL_USER_DETAILS',"retrieveAllUsersDetails");
define('RETREIVE_CATEGORIES',"retrievecategories");
define('RETRIEVE_SUBCATEGORY_WITH_RESPECT_TO_CATEGORY_ID',"retreiveSubCategoriesWithRespectToCategoryID");
define('RETREIVE_DATA_FOR_ORDERS',"retriveDataForOrders");
define('RETRIEVE_USER_DETAILS_WITH_RESPECT_TO_ORDERID',"retriveUserDetailsWithRespectToOrderID");
define('RETREIVE_ORDERITEMS_WITH_RESPECT_TO_ORDERID',"retreiveOrderItemsWithRespectToOrderItem");
define('RETRIEVE_PRODUCTS_DETAILS_AND_STOCK',"retreiveProductsDetailsAndStock");
define('RETRIEVE_SEARCH_RESULTSET', "retrieveSearchDetails");
define('INSERT_ORDER', "insertOrderAndOrderItem");
define('INSERT_PRODUCT', "addProductDetails");
?>