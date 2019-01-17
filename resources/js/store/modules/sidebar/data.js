// Sidebar Routers
export const menus = {
	'message.general': [
		{
			action: 'zmdi-view-dashboard',
			title: 'message.dashboard',
			active: true,
			items: [
				{ title: 'message.ecommerce', path: '/default/dashboard/ecommerce', exact: true },
				{ title: 'message.webAnalytics', path: '/mini/dashboard/web-analytics', exact: true },
				{ title: 'message.magazine', path: '/horizontal/dashboard/magazine', exact: true },
				{ title: 'message.news', path: '/boxed-v2/dashboard/news', exact: true },
				{ title: 'message.agency', path: '/boxed/dashboard/agency', exact: true },
				{ title: 'message.saas', path: '/horizontal/dashboard/saas', exact: true }
			]
		},
		{
			action: 'zmdi-widgets',
			title: 'message.widgets',
			active: false,
			items: [
				{ title: 'message.user', path: '/widgets/user-widgets' },
				{ title: 'message.charts', path: '/widgets/chart-widgets' }
			]
		},
		{
			action: 'zmdi-shopping-cart',
			title: 'message.ecommerce',
			active: false,
			items: [
				{ title: 'message.shop', path: '/ecommerce/shop' },
				{ title: 'message.cart', path: '/ecommerce/cart' },
				{ title: 'message.checkout', path: '/ecommerce/checkout' },
				{ title: 'message.cards', path: '/ecommerce/cards' }
			]
		},
		{
			action: 'zmdi-file-plus',
			title: 'message.pages',
			active: false,
			items: [
				{ title: 'message.blog', path: '/pages/blog' },
				{ title: 'message.gallery', path: '/pages/gallery' },
				{ title: 'message.pricing1', path: '/pages/pricing-1' },
				{ title: 'message.pricing2', path: '/pages/pricing-2' },
				{ title: 'message.blank', path: '/pages/blank' }
			]
		},
		{
			action: 'zmdi-time',
			title: 'message.session',
			active: false,
			items: [
				{ title: 'message.signUp', path: '/session/sign-up', exact: true },
				{ title: 'message.login', path: '/session/login', exact: true },
				{ title: 'message.lockScreen', path: '/session/lock-screen', exact: true },
				{ title: 'message.forgotPassword', path: '/session/forgot-password', exact: true },
				{ title: 'message.resetPassword', path: '/session/reset-password', exact: true }
			]
		}
	],
	'message.modules': [
		{
			action: 'zmdi-email',
			title: 'message.inbox',
			active: false,
			items: null,
			path: '/inbox'
		},
		{
			action: 'zmdi-comments',
			title: 'message.chat',
			active: false,
			items: null,
			path: '/chat'
		}
	],
	'message.components': [
		{
			action: 'zmdi-wrench',
			title: 'message.uiElements',
			active: false,
			items: [
				{ title: 'message.buttons', path: '/ui-elements/buttons' },
				{ title: 'message.cards', path: '/ui-elements/cards' },
				{ title: 'message.checkbox', path: '/ui-elements/checkbox' },
				{ title: 'message.carousel', path: '/ui-elements/carousel' },
				{ title: 'message.chips', path: '/ui-elements/chips' },
				{ title: 'message.datepicker', path: '/ui-elements/datepicker' },
				{ title: 'message.dialog', path: '/ui-elements/dialog' },
				{ title: 'message.grid', path: '/ui-elements/grid' },
				{ title: 'message.hover', path: '/ui-elements/hover' },
				{ title: 'message.images', path: '/ui-elements/images' },
				{ title: 'message.input', path: '/ui-elements/input' },
				{ title: 'message.list', path: '/ui-elements/list' },
				{ title: 'message.menu', path: '/ui-elements/menu' },
				{ title: 'message.progress', path: '/ui-elements/progress' },
				{ title: 'message.ratings', path: '/ui-elements/ratings' },
				{ title: 'message.radio', path: '/ui-elements/radio' },
				{ title: 'message.select', path: '/ui-elements/select' },
				{ title: 'message.slider', path: '/ui-elements/slider' },
				{ title: 'message.snackbar', path: '/ui-elements/snackbar' },
				{ title: 'message.tabs', path: '/ui-elements/tabs' },
				{ title: 'message.toolbar', path: '/ui-elements/toolbar' },
				{ title: 'message.tooltip', path: '/ui-elements/tooltip' },
				{ title: 'message.timepicker', path: '/ui-elements/timepicker' }
			]
		},
		{
			action: 'zmdi-file-text',
			title: 'message.forms',
			active: false,
			items: [
				{ title: 'message.formValidation', path: '/forms/form-validation' },
				{ title: 'message.stepper', path: '/forms/stepper' }
			]
		},
		{
			action: 'zmdi-chart-donut',
			title: 'message.charts',
			active: false,
			items: [
				{ title: 'message.vueChartjs', path: '/charts/vue-chartjs' },
				{ title: 'message.vueEcharts', path: '/charts/vue-echarts' }
			]
		},
		{
			action: 'zmdi-flag',
			title: 'message.icons',
			active: false,
			items: [
				{ title: 'message.themify', path: '/icons/themify' },
				{ title: 'message.material', path: '/icons/material' }
			]
		},
		{
			action: 'zmdi-grid',
			title: 'message.tables',
			active: false,
			items: [
				{ title: 'message.standard', path: '/tables/standard' },
				{ title: 'message.slots', path: '/tables/slots' },
				{ title: 'message.selectable', path: '/tables/selectablerows' },
				{ title: 'message.searchRow', path: '/tables/searchwithtext' }
			]
		},
		{
			action: 'zmdi-map',
			title: 'message.maps',
			active: false,
			items: [
				{ title: 'message.googleMaps', path: '/maps/google-maps' },
				{ title: 'message.leafletMaps', path: '/maps/leaflet-maps' },
				{ title: 'message.jvectorMap', path: '/maps/jvector-map' }
			]
		}
	],
	'message.applications': [
		{
			action: 'zmdi-accounts',
			title: 'message.users',
			active: false,
			items: [
				{ title: 'message.userProfile', path: '/users/user-profile' },
				{ title: 'message.usersList', path: '/users/users-list' }
			]
		},
		{
			action: 'zmdi-calendar-note',
			title: 'message.calendar',
			active: false,
			items: null,
			path: '/calendar'
		}
	],
	'message.features': [
		{
			action: 'zmdi-edit',
			title: 'message.editor',
			active: false,
			items: [
				{ title: 'message.quillEditor', path: '/editor/quilleditor' },
				{ title: 'message.wYSIWYG', path: '/editor/wysiwyg' }
			]
		},
		{
			action: 'zmdi-mouse',
			title: 'message.dragAndDrop',
			active: false,
			items: [
				{ title: 'message.vue2Dragula', path: '/drag-drop/vue2dragula' },
				{ title: 'message.vueDraggable', path: '/drag-drop/vuedraggable' },
				{ title: 'message.draggableResizeable', path: '/drag-drop/vuedraggableresizeable' }
			]
		}
	],
	'message.extensions': [
		{
			action: 'zmdi-crop',
			title: 'message.imageCropper',
			active: false,
			items: null,
			path: '/image-cropper'
		},
		{
			action: 'zmdi-collection-video',
			title: 'message.videoPlayer',
			active: false,
			items: null,
			path: '/video-player'
		},
		{
			action: 'zmdi-dropbox',
			title: 'message.dropzone',
			active: false,
			items: null,
			path: '/dropzone'
		}
	]
}
