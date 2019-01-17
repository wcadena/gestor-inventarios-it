import Full from 'Container/Full'

// dashboard components
const Ecommerce = () => import('Views/dashboard/Ecommerce');
const WebAnalytics = () => import('Views/dashboard/WebAnalytics');
const Magazine = () => import('Views/dashboard/Magazine');
const News = () => import('Views/dashboard/News');
const Agency = () => import('Views/dashboard/Agency');
const Saas = () => import('Views/dashboard/Saas');

// Widgets component
const ChartWidgets = () => import('Views/widgets/chart-widgets/ChartWidgets');
const UserWidgets = () => import('Views/widgets/user-widgets/UserWidgets');

//Ecommerce Widgets
const Shop = () => import('Views/ecommerce/Shop');
const Cart = () => import('Views/ecommerce/Cart');
const Checkout = () => import('Views/ecommerce/Checkout');
const CreditCard = () => import('Views/ecommerce/CreditCard');

// Inbox component
const Inbox = () => import('Views/inbox/Inbox');

// chat component
const Chat = () => import('Views/chat/Chat');

// calendar components
const Calendar = () => import('Views/calendar/Calendar');

// ui components
const Buttons = () => import('Views/ui-elements/Buttons');
const Cards = () => import('Views/ui-elements/Cards');
const Grid = () => import('Views/ui-elements/Grid');
const Hover = () => import('Views/ui-elements/Hover');
const Images = () => import('Views/ui-elements/Images');
const List = () => import('Views/ui-elements/List');
const Menu = () => import('Views/ui-elements/Menu');
const Ratings = () => import('Views/ui-elements/Ratings');
const Slider = () => import('Views/ui-elements/Slider');
const Snackbar = () => import('Views/ui-elements/Snackbar');
const Tooltip = () => import('Views/ui-elements/Tooltip');
const Dialog = () => import('Views/ui-elements/Dialog');
const Select = () => import('Views/ui-elements/Select');
const Input = () => import('Views/ui-elements/Input');
const Checkbox = () => import('Views/ui-elements/Checkbox');
const Radio = () => import('Views/ui-elements/Radio');
const Toolbar = () => import('Views/ui-elements/Toolbar');
const Progress = () => import('Views/ui-elements/Progress');
const Tabs = () => import('Views/ui-elements/Tabs');
const Carousel = () => import('Views/ui-elements/Carousel');
const Chips = () => import('Views/ui-elements/Chips');
const Datepicker = () => import('Views/ui-elements/Datepicker');
const Timepicker = () => import('Views/ui-elements/Timepicker');

// chart components
const VueChartjs = () => import('Views/charts/VueChartjs');
const VueEcharts = () => import('Views/charts/VueEcharts');

// maps views
const GoogleMaps = () => import('Views/maps/GoogleMaps');
const LeafletMaps = () => import('Views/maps/LeafletMaps');
const JvectorMap = () => import('Views/maps/JvectorMap');

// Pages views
const Blank = () => import('Views/pages/Blank');
const Blog = () => import('Views/pages/Blog');
const Gallery = () => import('Views/pages/Gallery');
const Pricing1 = () => import('Views/pages/Pricing-1');
const Pricing2 = () => import('Views/pages/Pricing-2');

// users views
const UserProfile = () => import('Views/users/UserProfile');
const UsersList = () => import('Views/users/UsersList');

// drag-drop components
const Vue2Dragula = () => import('Views/drag-drop/Vue2Dragula');
const VueDraggable = () => import('Views/drag-drop/Vuedraggable');
const VueDraggableResizeable = () => import('Views/drag-drop/VueDraggableResizable');

// icons components
const Themify = () => import('Views/icons/Themify');
const Material = () => import('Views/icons/Material');

// editor components
const QuillEditor = () => import('Views/editor/QuillEditor');
const WYSIWYG = () => import('Views/editor/WYSIWYG');

// form componenets
const FormValidation = () => import('Views/forms/FormValidation');
const Stepper = () => import('Views/forms/Stepper');

// Data table componenets
const Standard = () => import('Views/tables/Standard');
const Slots = () => import('Views/tables/Slots');
const SelectableRows = () => import('Views/tables/SelectableRows');
const SearchWithText = () => import('Views/tables/SearchWithText');

// Extensions components
const ImageCropper = () => import('Views/extensions/ImageCropper');
const VideoPlayer = () => import('Views/extensions/VideoPlayer');
const Dropzone = () => import('Views/extensions/Dropzone');

export default {
   path: '/',
   component: Full,
   redirect: '/default/dashboard/ecommerce',
   children: [
      {
         path: '/default/dashboard/ecommerce',
         component: Ecommerce,
         meta: {
            requiresAuth: true,
            title: 'message.ecommerce',
            breadcrumb: 'Dashboard / Ecommerce'
         }
      },
      {
         path: '/default/dashboard/web-analytics',
         component: WebAnalytics,
         meta: {
            requiresAuth: true,
            title: 'message.webAnalytics',
            breadcrumb: 'Dashboard / Web Analytics '
         }
      },
      {
         path: '/default/dashboard/magazine',
         component: Magazine,
         meta: {
            requiresAuth: true,
            title: 'message.magazine',
            breadcrumb: 'Dashboard / Magazine '
         }
      },
      {
         path: '/default/dashboard/news',
         component: News,
         meta: {
            requiresAuth: true,
            title: 'message.news',
            breadcrumb: 'Dashboard / News '
         }
      },
      {
         path: '/default/dashboard/agency',
         component: Agency,
         meta: {
            requiresAuth: true,
            title: 'message.agency',
            breadcrumb: 'Dashboard / Agency'
         }
      },
      {
         component: Saas,
         path: '/default/dashboard/saas',
         meta: {
            requiresAuth: true,
            title: 'message.saas',
            breadcrumb: 'Dashboard / SAAS'
         }
      },
      {
         path: '/default/widgets/user-widgets',
         component: UserWidgets,
         meta: {
            requiresAuth: true,
            title: 'message.user',
            breadcrumb: 'Widgets / User'
         }
      },
      {
         path: '/default/widgets/chart-widgets',
         component: ChartWidgets,
         meta: {
            requiresAuth: true,
            title: 'message.charts',
            breadcrumb: 'Widgets / Charts'
         }
      },
      {
         path: '/default/ecommerce/shop',
         component: Shop,
         meta: {
            requiresAuth: true,
            title: 'message.shop',
            breadcrumb: 'Ecommerce / Shop'
         }
      },
      {
         path: '/default/ecommerce/cart',
         component: Cart,
         meta: {
            requiresAuth: true,
            title: 'message.cart',
            breadcrumb: 'Ecommerce / Cart'
         }
      },
      {
         path: '/default/ecommerce/checkout',
         component: Checkout,
         meta: {
            requiresAuth: true,
            title: 'message.checkout',
            breadcrumb: 'Ecommerce / Checkout'
         }
      },
      {
         path: '/default/ecommerce/cards',
         component: CreditCard,
         meta: {
            requiresAuth: true,
            title: 'message.cards',
            breadcrumb: 'Ecommerce / Cards'
         }
      },
      {
         path: '/default/inbox',
         component: Inbox,
         meta: {
            requiresAuth: true,
            title: 'message.inbox',
            breadcrumb: 'Inbox'
         }
      },
      {
         path: '/default/chat',
         component: Chat,
         meta: {
            requiresAuth: true,
            title: 'message.chat',
            breadcrumb: 'Chat'
         }
      },
      {
         path: '/default/calendar',
         component: Calendar,
         meta: {
            requiresAuth: true,
            title: 'message.calendar',
            breadcrumb: 'Calendar'
         }
      },
      {
         path: '/default/ui-elements/buttons',
         component: Buttons,
         meta: {
            requiresAuth: true,
            title: 'message.buttons',
            breadcrumb: 'UI Elements / Buttons'
         }
      },
      {
         path: '/default/ui-elements/cards',
         component: Cards,
         meta: {
            requiresAuth: true,
            title: 'message.cards',
            breadcrumb: 'UI Elements / Cards'
         }
      },
      {
         path: '/default/ui-elements/grid',
         component: Grid,
         meta: {
            requiresAuth: true,
            title: 'message.grid',
            breadcrumb: 'UI Elements / Grid'
         }
      },
      {
         path: '/default/ui-elements/hover',
         component: Hover,
         meta: {
            requiresAuth: true,
            title: 'message.hover',
            breadcrumb: 'UI Elements / Hover'
         }
      },
      {
         path: '/default/ui-elements/images',
         component: Images,
         meta: {
            requiresAuth: true,
            title: 'message.images',
            breadcrumb: 'UI Elements / Images'
         }
      },
      {
         path: '/default/ui-elements/list',
         component: List,
         meta: {
            requiresAuth: true,
            title: 'message.list',
            breadcrumb: 'UI Elements / List'
         }
      },
      {
         path: '/default/ui-elements/menu',
         component: Menu,
         meta: {
            requiresAuth: true,
            title: 'message.menu',
            breadcrumb: 'UI Elements / Menu'
         }
      },
      {
         path: '/default/ui-elements/ratings',
         component: Ratings,
         meta: {
            requiresAuth: true,
            title: 'message.ratings',
            breadcrumb: 'UI Elements / Ratings'
         }
      },
      {
         path: '/default/ui-elements/slider',
         component: Slider,
         meta: {
            requiresAuth: true,
            title: 'message.slider',
            breadcrumb: 'UI Elements / Slider'
         }
      },
      {
         path: '/default/ui-elements/snackbar',
         component: Snackbar,
         meta: {
            requiresAuth: true,
            title: 'message.snackbar',
            breadcrumb: 'UI Elements / Snackbar'
         }
      },
      {
         path: '/default/ui-elements/tooltip',
         component: Tooltip,
         meta: {
            requiresAuth: true,
            title: 'message.tooltip',
            breadcrumb: 'UI Elements / Tooltip'
         }
      },
      {
         path: '/default/ui-elements/dialog',
         component: Dialog,
         meta: {
            requiresAuth: true,
            title: 'message.dialog',
            breadcrumb: 'UI Elements / Dialog'
         }
      },
      {
         path: '/default/ui-elements/select',
         component: Select,
         meta: {
            requiresAuth: true,
            title: 'message.select',
            breadcrumb: 'UI Elements / Select'
         }
      },
      {
         path: '/default/ui-elements/input',
         component: Input,
         meta: {
            requiresAuth: true,
            title: 'message.input',
            breadcrumb: 'UI Elements / Input'
         }
      },
      {
         path: '/default/ui-elements/checkbox',
         component: Checkbox,
         meta: {
            requiresAuth: true,
            title: 'message.checkbox',
            breadcrumb: 'UI Elements / Checkbox'
         }
      },
      {
         path: '/default/ui-elements/radio',
         component: Radio,
         meta: {
            requiresAuth: true,
            title: 'message.radio',
            breadcrumb: 'UI Elements / Radio'
         }
      },
      {
         path: '/default/ui-elements/toolbar',
         component: Toolbar,
         meta: {
            requiresAuth: true,
            title: 'message.toolbar',
            breadcrumb: 'UI Elements / Toolbar'
         }
      },
      {
         path: '/default/ui-elements/progress',
         component: Progress,
         meta: {
            requiresAuth: true,
            title: 'message.progress',
            breadcrumb: 'UI Elements / Progress'
         }
      },
      {
         path: '/default/ui-elements/tabs',
         component: Tabs,
         meta: {
            requiresAuth: true,
            title: 'message.tabs',
            breadcrumb: 'UI Elements / Tabs'
         }
      },
      {
         path: '/default/ui-elements/carousel',
         component: Carousel,
         meta: {
            requiresAuth: true,
            title: 'message.carousel',
            breadcrumb: 'UI Elements / Carousel'
         }
      },
      {
         path: '/default/ui-elements/chips',
         component: Chips,
         meta: {
            requiresAuth: true,
            title: 'message.chips',
            breadcrumb: 'UI Elements / Chips'
         }
      },
      {
         path: '/default/ui-elements/datepicker',
         component: Datepicker,
         meta: {
            requiresAuth: true,
            title: 'message.datepicker',
            breadcrumb: 'UI Elements / Datepicker'
         }
      },
      {
         path: '/default/ui-elements/timepicker',
         component: Timepicker,
         meta: {
            requiresAuth: true,
            title: 'message.timepicker',
            breadcrumb: 'UI-Elements / Timepicker'
         }
      },
      // chart views
      {
         path: '/default/charts/vue-chartjs',
         component: VueChartjs,
         meta: {
            requiresAuth: true,
            title: 'message.vueChartjs',
            breadcrumb: 'Charts / Vue Chartjs'
         }
      },
      {
         path: '/default/charts/vue-echarts',
         component: VueEcharts,
         meta: {
            requiresAuth: true,
            title: 'message.vueEcharts',
            breadcrumb: 'Charts / Vue Echarts'
         }
      },
      // google maps
      {
         path: '/default/maps/google-maps',
         component: GoogleMaps,
         meta: {
            requiresAuth: true,
            title: 'message.googleMaps',
            breadcrumb: 'Maps / Google Maps'
         }
      },
      {
         path: '/default/maps/leaflet-maps',
         component: LeafletMaps,
         meta: {
            requiresAuth: true,
            title: 'message.leafletMaps',
            breadcrumb: 'Maps / Leaflet Maps'
         }
      },
      {
         path: '/default/maps/jvector-map',
         component: JvectorMap,
         meta: {
            requiresAuth: true,
            title: 'message.jvectorMap',
            breadcrumb: 'Maps / Jvector Map'
         }
      },
      // pages
      {
         path: '/default/pages/gallery',
         component: Gallery,
         meta: {
            requiresAuth: true,
            title: 'message.gallery',
            breadcrumb: 'Pages / Gallery'
         }
      },
      {
         path: '/default/pages/blog',
         component: Blog,
         meta: {
            requiresAuth: true,
            title: 'message.blog',
            breadcrumb: 'Pages / Blog'
         }
      },
      {
         path: '/default/pages/pricing-1',
         component: Pricing1,
         meta: {
            requiresAuth: true,
            title: 'message.pricing1',
            breadcrumb: 'Pages / Pricing-1'
         }
      },
      {
         path: '/default/pages/pricing-2',
         component: Pricing2,
         meta: {
            requiresAuth: true,
            title: 'message.pricing2',
            breadcrumb: 'Pages / Pricing-2'
         }
      },
      {
         path: '/default/pages/blank',
         component: Blank,
         meta: {
            requiresAuth: true,
            title: 'message.blank',
            breadcrumb: 'Pages / Blank'
         }
      },
      // users
      {
         path: '/default/users/user-profile',
         component: UserProfile,
         meta: {
            requiresAuth: true,
            title: 'message.userProfile',
            breadcrumb: 'Users / User Profile'
         }
      },
      {
         path: '/default/users/users-list',
         component: UsersList,
         meta: {
            requiresAuth: true,
            title: 'message.usersList',
            breadcrumb: 'Users / Users List'
         }
      },
      // drag and drop
      {
         path: '/default/drag-drop/vue2dragula',
         component: Vue2Dragula,
         meta: {
            requiresAuth: true,
            title: 'message.vue2Dragula',
            breadcrumb: 'Drag And Drop / Vue2 Dragula'
         }
      },
      {
         path: '/default/drag-drop/vuedraggable',
         component: VueDraggable,
         meta: {
            requiresAuth: true,
            title: 'message.vueDraggable',
            breadcrumb: 'Drag And Drop / Vue Draggable'
         }
      },
      {
         path: '/default/drag-drop/vuedraggableresizeable',
         component: VueDraggableResizeable,
         meta: {
            requiresAuth: true,
            title: 'message.draggableResizeable',
            breadcrumb: 'Drag And Drop / Draggable Resizeable'
         }
      },
      // icons
      {
         path: '/default/icons/themify',
         component: Themify,
         meta: {
            requiresAuth: true,
            title: 'message.themify',
            breadcrumb: 'Icons / Themify'
         }
      },
      {
         path: '/default/icons/material',
         component: Material,
         meta: {
            requiresAuth: true,
            title: 'message.material',
            breadcrumb: 'Icons / Material'
         }
      },
      // editor components
      {
         path: '/default/editor/quilleditor',
         component: QuillEditor,
         meta: {
            requiresAuth: true,
            title: 'message.quillEditor',
            breadcrumb: 'Editor / Quill Editor'
         }
      },
      {
         path: '/default/editor/wysiwyg',
         component: WYSIWYG,
         meta: {
            requiresAuth: true,
            title: 'message.wYSIWYG',
            breadcrumb: 'Editor / WYSIWYG'
         }
      },
      // forms components
      {
         path: '/default/forms/form-validation',
         component: FormValidation,
         meta: {
            requiresAuth: true,
            title: 'message.formValidation',
            breadcrumb: 'Forms / FormValidation'
         }
      },
      // forms components
      {
         path: '/default/forms/stepper',
         component: Stepper,
         meta: {
            requiresAuth: true,
            title: 'message.stepper',
            breadcrumb: 'Forms / Stepper'
         }
      },
      // Data tables component
      {
         path: '/default/tables/standard',
         component: Standard,
         meta: {
            requiresAuth: true,
            title: 'message.standard',
            breadcrumb: 'Tables / Standard'
         }
      },
      {
         path: '/default/tables/slots',
         component: Slots,
         meta: {
            requiresAuth: true,
            title: 'message.slots',
            breadcrumb: 'Tables / Slots'
         }
      },
      {
         path: '/default/tables/selectablerows',
         component: SelectableRows,
         meta: {
            requiresAuth: true,
            title: 'message.selectable',
            breadcrumb: 'Tables / Selectable Rows'
         }
      },
      {
         path: '/default/tables/searchwithtext',
         component: SearchWithText,
         meta: {
            requiresAuth: true,
            title: 'message.searchRow',
            breadcrumb: 'Tables / Search Row'
         }
      },
      {
         path: '/default/image-cropper',
         component: ImageCropper,
         meta: {
            requiresAuth: true,
            title: 'message.imageCropper',
            breadcrumb: 'Extensions / Image Cropper'
         }
      },
      {
         path: '/default/video-player',
         component: VideoPlayer,
         meta: {
            requiresAuth: true,
            title: 'message.videoPlayer',
            breadcrumb: 'Extensions / Video Player'
         }
      },
      {
         path: '/default/dropzone',
         component: Dropzone,
         meta: {
            requiresAuth: true,
            title: 'message.dropzone',
            breadcrumb: 'Extensions / Dropzone'
         }
      }
   ]
}
