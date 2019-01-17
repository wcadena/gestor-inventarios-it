/**
 * App Config File
 */
export default {
	appLogo: '/static/img/site-logo.png',                                   // App Logo,
	darkLogo: '/static/img/site-dark-logo.png',							    // dark logo
	appLogo2: '/static/img/session.png',                                    // App Logo 2 For Login & Signup Page
	brand: 'Ecuatask',                                        			        // Brand Name
	copyrightText: 'Ecuatask © 2019 All Rights Reserved.',                     // Copyright Text
	enableUserTour: process.env.NODE_ENV === 'production' ? true : false,   // Enable User Tour
	weatherApiId: 'b1b15e88fa797225412429c1c50c122a1',						// weather API Id
	weatherApiKey: '69b72ed255ce5efad910bd946685883a'						// weather APi key
}
