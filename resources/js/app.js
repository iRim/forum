
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.$ = window.jQuery = $ = require('jquery');
require('./bootstrap');
require('./jsvalidation.min');

feather = require('feather-icons');
feather.replace();

$(document).on('click','.btn.btn-danger',function(){
    if(confirm('Delete this item?')){
        $(this).children('form').submit();
    }
    return false;
})
