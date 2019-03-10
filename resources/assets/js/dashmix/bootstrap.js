/*
 *  Document   : bootstrap.js
 *  Author     : pixelcave
 *  Description: Import global dependencies
 *
 */

// Import all vital core JS files..
import jQuery from 'jquery';
import SimpleBar from 'simplebar';
import Cookies from 'js-cookie';
import 'bootstrap';
import 'popper.js';
import 'jquery.appear';
import 'jquery-scroll-lock';

// ..and assign to window the ones that need it
window.$ = window.jQuery  = jQuery;
window.SimpleBar          = SimpleBar;
window.Cookies            = Cookies;
