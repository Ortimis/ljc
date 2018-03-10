/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */
var $ = require( 'jquery' );

// Import libraries
import 'slick-carousel';

// Import custom modules
import App from'./modules/app.js';
import Navigation from './modules/navigation.js';
import Parallax from './modules/parallax.js';

//Get it running baby!
const app = new App();
const navigation = new Navigation();
const parallax = new Parallax();