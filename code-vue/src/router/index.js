import { createRouter, createWebHistory } from 'vue-router'
import '../../src/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css'
import'../../src/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css'
import '../../src/assets/vendor/remixicon/fonts/remixicon.css'

const childRoutes = (prop, mode) => [
  {
    path: '',
    name: prop + '.list',
    meta: { auth: true, name: 'Social App' },
    component: () => import('../views/Apps/Social/SocialApp')
  },
  {
    path: 'accountsetting',
    name: prop + '.accountsetting',
    meta: { auth: true, name: 'Account Setting' },
    component: () => import('../views/User/AccountSetting')
  },
  {
    path: 'privacysetting',
    name: prop + '.privacy-setting',
    meta: { auth: true, name: 'Privacy Setting' },
    component: () => import('../views/User/PrivacySetting')
  },
  {
    path: 'privacypolicy',
    name: prop + '.privacy',
    meta: { auth: true, name: 'Privacy Policy' },
    component: () => import('../views/Pages/PrivacyPolicy')
  },
  {
    path: 'termofservice',
    name: prop + '.termofservice',
    meta: { auth: true, name: 'Terms Of Use' },
    component: () => import('../views/Pages/TermsOfService')
  },
  {
    path: 'profile',
    name: prop + '.profilemain',
    meta: { auth: true, name: 'Profile' },
    component: () => import('../views/SocailMain/Profile/Profile')
  },
  {
    path: 'profileimage',
    name: prop + '.profileimage',
    meta: { auth: true, name: 'Profile Image' },
    component: () => import('../views/SocailMain/Profile/ProfileImage')
  },
  {
    path: 'profilevideo',
    name: prop + '.profilevideo',
    meta: { auth: true, name: 'Profile Video' },
    component: () => import('../views/SocailMain/Profile/ProfileVideo')
  },
  {
    path: 'profileevent',
    name: prop + '.profileevent',
    meta: { auth: true, name: 'Profile Event' },
    component: () => import('../views/SocailMain/Profile/ProfileEvent')
  },
  {
    path: 'event-detail',
    name: prop + '.event-detail',
    meta: { auth: true, name: 'Event-Detail' },
    component: () => import('../views/SocailMain/Profile/Event-Detail')
  },
  {
    path: 'profilebadges',
    name: prop + '.profilebadges',
    meta: { auth: true, name: 'Profile Badges' },
    component: () => import('../views/SocailMain/Profile/ProfileBadges')
  },
  {
    path: 'profileforum',
    name: prop + '.profileforum',
    meta: { auth: true, name: 'Profile Forum' },
    component: () => import('../views/SocailMain/Profile/ProfileForum')
  },
  {
    path: 'group',
    name: prop + '.group',
    meta: { auth: true, name: 'Group' },
    component: () => import('../views/SocailMain/Group/Group')
  },
  {
    path: 'group-detail',
    name: prop + '.group-detail',
    meta: { auth: true, name: 'Group detail' },
    component: () => import('../views/SocailMain/Group/Group-detail')
  },
  {
    path: 'friendlist',
    name: prop + '.friendlist',
    meta: { auth: true, name: 'Friend List' },
    component: () => import('../views/SocailMain/Friends/FriendList')
  },
  {
    path: 'friendprofile',
    name: prop + '.friendprofile',
    meta: { auth: true, name: 'Friend profile' },
    component: () => import('../views/SocailMain/Friends/FriendProfile')
  },
  {
    path: 'birthdate', // Utilisez ':id' pour indiquer que l'ID sera dynamique dans l'URL
    name: prop + '.birthday',
    meta: { auth: true, name: 'Birthday' },
    component: () => import('../views/SocailMain/Bithdate/Bithdate')
  },
  {
    path: 'notification',
    name: prop + '.notification',
    meta: { auth: true, name: 'Notification' },
    component: () => import('../views/SocailMain/Notifications/Notification')
  },
  {
    path: 'file',
    name: prop + '.file',
    meta: { auth: true, name: 'File' },
    component: () => import('../views/SocailMain/File/File')
  },
  {
    path: 'friendrequest',
    name: prop + '.friendrequest',
    meta: { auth: true, name: 'Friend Request' },
    component: () => import('../views/SocailMain/Friends/FriendRequest')
  },
  {
    path: 'weather',
    name: prop + '.weather',
    meta: { auth: true, name: 'Weather' },
    component: () => import('../views/SocailMain/Weather/Weather')
  },
  {
    path: 'music',
    name: prop + '.music',
    meta: { auth: true, name: 'Music' },
    component: () => import('../views/SocailMain/Music/Music')
  },
  {
    path: 'market1',
    name: prop + '.market1',
    meta: { auth: true, name: 'Market1' },
    component: () => import('../views/Market/market1')
  },
  {
    path: 'market2',
    name: prop + '.market2',
    meta: { auth: true, name: 'Market2' },
    component: () => import('../views/Market/market2')
  },
  {
    path: 'profile1',
    name: prop + '.profile1',
    meta: { auth: true, name: 'Profile1' },
    component: () => import('../views/Profile/profile1')
  },
  {
    path: 'profile2',
    name: prop + '.profile2',
    meta: { auth: true, name: 'Profile 2' },
    component: () => import('../views/Profile/profile2')
  },
  {
    path: 'profile3',
    name: prop + '.profile3',
    meta: { auth: true, name: 'Profile3' },
    component: () => import('../views/Profile/profile3')
  }
]
const blankchildRoutes = (prop, mode) => [
  {
    path: 'signin',
    name: prop + '.sign-in1',
    component: () => import('../views/AuthPages/Default/SignIn1')
  },
  {
    path: 'signup',
    name: prop + '.sign-up1',
    component: () => import('../views/AuthPages/Default/SignUp1')
  },
  {
    path: 'recoverpassword',
    name: prop + '.recoverpassword1',
    component: () => import('../views/AuthPages/Default/RecoverPassword1')
  },
  {
    path: 'lockscreen',
    name: prop + '.lockscreen1',
    component: () => import('../views/AuthPages/Default/LockScreen1')
  },
  {
    path: 'confirmmail',
    name: prop + '.confirmmail1',
    component: () => import('../views/AuthPages/Default/ConfirmMail1')
  }
]
const chatChildRoutes = (prop, mode) => [
  {
    path: 'chat',
    name: prop + '.chat',
    component: () => import('../views/Apps/Chat/Index')
  }
]
const pagesChildRoutes = (prop, mode = false) => [
  {
    path: 'error/:code',
    name: prop + '.error',
    component: () => import('../views/Pages/ErrorPage')
  },
  {
    path: 'error404',
    name: prop + '.error404',
    component: () => import('../views/Pages/Error404')
  },
  {
    path: 'error500',
    name: prop + '.error500',
    component: () => import('../views/Pages/Error500')
  },
  {
    path: 'coming-soon',
    name: prop + '.coming-soon',
    component: () => import('../views/Pages/ComingSoon')
  },
  {
    path: 'maintenance',
    name: prop + '.maintenance',
    component: () => import('../views/Pages/Maintenance')
  }
]
const blogchildRoutes = (prop, mode = false) => [
  {
    path: 'blog-grid',
    name: prop + '.blog-grid',
    meta: { auth: true, name: 'blog-grid' },
    component: () => import('../views/SocailMain/Blog/BlogGrid')
  },
  {
    path: 'blog-list',
    name: prop + '.blog-list',
    meta: { auth: true, name: 'blog-list' },
    component: () => import('../views/SocailMain/Blog/BlogList')
  },
  {
    path: 'blog-detail',
    name: prop + '.blog-detail',
    meta: { auth: true, name: 'blog-detail' },
    component: () => import('../views/SocailMain/Blog/BlogDetail')
  }
]
const storechildRoutes = (prop, mode = false) => [
  {
    path: 'category-grid',
    name: prop + '.category-grid',
    meta: { auth: true, name: 'Store Category' },
    component: () => import('../views/SocailMain/Store/CategoryGrid')
  },
  {
    path: 'category-list',
    name: prop + '.category-list',
    meta: { auth: true, name: 'Category List' },
    component: () => import('../views/SocailMain/Store/CategoryList')
  },
  {
    path: 'store-detail',
    name: prop + '.store-detail',
    meta: { auth: true, name: 'Store', img: require('../assets/images/page-img/profile-bg7.jpg') },
    component: () => import('../views/SocailMain/Store/Storedetail')
  },
  {
    path: 'checkout',
    name: prop + '.checkout',
    meta: { auth: true, name: 'Store Checkout', img: require('../assets/images/page-img/profile-bg7.jpg') },
    component: () => import('../views/SocailMain/Store/StoreCheckout-cart')
  },
  {
    path: 'checkout-address',
    name: prop + '.store-checkoutaddress',
    meta: { auth: true, name: 'Store Checkout', img: require('../assets/images/page-img/profile-bg7.jpg') },
    component: () => import('../views/SocailMain/Store/StoreCheckout-address')
  },
  {
    path: 'checkout-payment',
    name: prop + '.store-checkoutpayment',
    meta: { auth: true, name: 'Store Checkout', img: require('../assets/images/page-img/profile-bg7.jpg') },
    component: () => import('../views/SocailMain/Store/StoreCheckout-payment')
  }
]
const iconChildRoute = (prop, mode = false) => [
  {
    path: 'fontawesome-5',
    name: prop + '.fontawesome-5',
    meta: { auth: true, name: 'Font Awsome' },
    component: () => import('../views/Icons/IconFontawesome5')
  },
  {
    path: 'lineawesome',
    name: prop + '.lineawesome',
    meta: { auth: true, name: 'Line Awsome' },
    component: () => import('../views/Icons/IconLineAwesome')
  },
  {
    path: 'remixicon',
    name: prop + '.remixicon',
    meta: { auth: true, name: 'Remixicon' },
    component: () => import('../views/Icons/IconRemixicon')
  },
  {
    path: 'material',
    name: prop + '.material',
    meta: { auth: true, name: 'Material' },
    component: () => import('../views/Icons/IconMaterial')
  }
]
const formChildRoute = (prop, mode = false) => [
  {
    path: 'form-layout',
    name: prop + '.layout',
    meta: { auth: true, name: 'Layout' },
    component: () => import('../views/Forms/FormLayout')
  },
  {
    path: 'form-validate',
    name: prop + '.validate',
    meta: { auth: true, name: 'Validate' },
    component: () => import('../views/Forms/FormValidates')
  },
  {
    path: 'form-switches',
    name: prop + '.switch',
    meta: { auth: true, name: 'Switch' },
    component: () => import('../views/Forms/FormSwitches')
  },
  {
    path: 'form-radios',
    name: prop + '.radio',
    meta: { auth: true, name: 'Radio' },
    component: () => import('../views/Forms/FormRadios')
  },
  {
    path: 'form-checkboxes',
    name: prop + '.checkbox',
    meta: { auth: true, name: 'Checkbox' },
    component: () => import('../views/Forms/FormCheckboxes')
  }
]
const formwizardChildRoute = (prop, mode = false) => [
  {
    path: 'simple',
    name: prop + '.simple',
    meta: { auth: true, name: 'Simple' },
    component: () => import('../views/Form Wizard/Simple')
  },
  {
    path: 'validate',
    name: prop + '.validatewizard',
    meta: { auth: true, name: 'Validate' },
    component: () => import('../views/Form Wizard/Validate')
  },
  {
    path: 'vertical',
    name: prop + '.vertical',
    meta: { auth: true, name: 'Vertical' },
    component: () => import('../views/Form Wizard/Vertical')
  }
]
const appChildRoute = (prop, mode = false) => [
  {
    path: 'calendar',
    name: prop + '.calendar',
    meta: { auth: true, name: 'Calendar'}, //img:require('../assets/images/page-img/profile-bg6.jpg') },
    component: () => import('../views/Apps/Calendar/Calendar')
  },
  {
    path: '/EditEvent/:id', // Le chemin doit commencer par une barre oblique et inclure un paramètre d'ID
    name: 'EditEvent', // Le nom de la route doit être simplement 'EditEvent'
    meta: { auth: true, name: 'EditEvent' },
    component: () => import('../views/Apps/Calendar/EditEvent')
  },
  {
    path: '/Event/:id',
    name: 'Event',
    meta: { auth: true, name: 'Event' },
    component: () => import('../views/Apps/Calendar/Event')
  },
  {
    path: '/Participant/:id',
    name: 'Participant',
    meta: { auth: true, name: 'Participant' },
    component: () => import('../views/Apps/Calendar/Participant')
  },
  {
    path: 'todo',
    name: prop + '.todo',
    meta: { auth: true, name: 'Todo' },
    component: () => import('../views/Apps/Todo/TodoListing')
  },
  {
    path: 'emaillisting',
    name: prop + '.emaillisting',
    meta: { auth: true, name: 'Email Listing' },
    component: () => import('../views/Apps/Email/EmailListing')
  },
  {
    path: 'composebody-remark',
    name: prop + '.composebody',
    meta: { auth: true, name: 'ComposeBody' },
    component: () => import('../views/Apps/Email/EmailCompose')
  }
]
const defaultlayout = (prop, mode = false) => [
  {
    path: 'admin',
    name: prop + '.admin',
    meta: { auth: true, name: 'Admin' },
    component: () => import('../views/Pages/Admin')
  },
  {
    path: 'timelines',
    name: prop + '.timelines',
    meta: { auth: true, name: 'Timelines' },
    component: () => import('../views/Pages/TimeLines')
  },
  {
    path: 'invoice',
    name: prop + '.invoice',
    meta: { auth: true, name: 'Invoice' },
    component: () => import('../views/Pages/Invoice')
  },
  {
    path: 'blank-page',
    name: prop + '.blank-page',
    meta: { auth: true, name: 'Blank Page' },
    component: () => import('../views/Pages/BlankPage')
  },
  {
    path: 'pricing-1',
    name: prop + '.pricing-1',
    meta: { auth: true, name: 'Pricing 1' },
    component: () => import('../views/Pages/Pricing')
  },
  {
    path: 'pricing-2',
    name: prop + '.pricing-2',
    meta: { auth: true, name: 'Pricing 2' },
    component: () => import('../views/Pages/Pricing1')
  },
  {
    path: 'faq',
    name: prop + '.faq',
    meta: { auth: true, name: 'Faq' },
    component: () => import('../views/Pages/FAQ')
  }
]
const coreChildRoute = (prop, mode) => [
  {
    path: 'ui-colors',
    name: prop + '.color',
    meta: { auth: true, name: 'Colors' },
    component: () => import('../views/core/UiColors')
  },
  {
    path: 'ui-typography',
    name: prop + '.typography',
    meta: { auth: true, name: 'Typography' },
    component: () => import('../views/core/UiTypography')
  },
  {
    path: 'ui-alerts',
    name: prop + '.alert',
    meta: { auth: true, name: 'Alert' },
    component: () => import('../views/core/UiAlerts')
  },
  {
    path: 'ui-buttons',
    name: prop + '.button',
    meta: { auth: true, name: 'Button' },
    component: () => import('../views/core/UiButtons')
  },
  {
    path: 'ui-breadcrumb',
    name: prop + '.breadcrumb',
    meta: { auth: true, name: 'Breadcrumb' },
    component: () => import('../views/core/UiBreadcrumb')
  },
  {
    path: 'ui-badges',
    name: prop + '.badges',
    meta: { auth: true, name: 'Badges' },
    component: () => import('../views/core/UiBadges')
  },
  {
    path: 'ui-cards',
    name: prop + '.cards',
    meta: { auth: true, name: 'Card' },
    component: () => import('../views/core/UiCards')
  },
  {
    path: 'ui-carousel',
    name: prop + '.carousel',
    meta: { auth: true, name: 'Carousel' },
    component: () => import('../views/core/UiCarousel')
  },
  {
    path: 'ui-grid',
    name: prop + '.grid',
    meta: { auth: true, name: 'Grid' },
    component: () => import('../views/core/UiGrid')
  },
  {
    path: 'ui-embed-video',
    name: prop + '.embed-video',
    meta: { auth: true, name: 'Embed Video' },
    component: () => import('../views/core/UiEmbedVideo')
  },
  {
    path: 'ui-modal',
    name: prop + '.modal',
    meta: { auth: true, name: 'Model' },
    component: () => import('../views/core/UiModal')
  },
  {
    path: 'ui-listgroup',
    name: prop + '.listgroup',
    meta: { auth: true, name: 'List Group' },
    component: () => import('../views/core/UiListGroup')
  },
  {
    path: 'ui-images',
    name: prop + '.images',
    meta: { auth: true, name: 'Image' },
    component: () => import('../views/core/UiImages')
  },
  {
    path: 'ui-pagination',
    name: prop + '.pagination',
    meta: { auth: true, name: 'Paginations' },
    component: () => import('../views/core/UiPagination')
  },
  {
    path: 'ui-progressbars',
    name: prop + '.progressbars',
    meta: { auth: true, name: 'Progressbar' },
    component: () => import('../views/core/UiProgressBars')
  },
  {
    path: 'ui-tooltips',
    name: prop + '.tooltips',
    meta: { auth: true, name: 'Tooltip' },
    component: () => import('../views/core/UiTooltips')
  },
  {
    path: 'ui-popovers',
    name: prop + '.popovers',
    meta: { auth: true, name: 'Popover' },
    component: () => import('../views/core/UiPopovers')
  },
  {
    path: 'ui-notifications',
    name: prop + '.notifications',
    meta: { auth: true, name: 'Notification' },
    component: () => import('../views/core/UiNotifications')
  },
  {
    path: 'ui-tabs',
    name: prop + '.tabs',
    meta: { auth: true, name: 'Tabs' },
    component: () => import('../views/core/UiTabs')
  },
  {
    path: 'ui-offcanvas',
    name: prop + '.offcanvas',
    meta: { auth: true, name: 'Tabs' },
    component: () => import('../views/core/UiOffcanvas')
  }
]
const tableChildRoute = (prop, mode = false) => [
  {
    path: 'tables-basic',
    name: prop + '.basic',
    meta: { auth: true, name: 'Basic' },
    component: () => import('../views/Tables/TablesBasic')
  },
  {
    path: 'editable',
    name: prop + '.editable',
    meta: { auth: true, name: 'Editable' },
    component: () => import('../views/Tables/EditableTable')
  },

  {
    path: '/edit-event/:id', // Définissez le chemin avec un paramètre dynamique ":id"
    name: prop+ '.editevent', // Nommez la route (optionnel)
    meta: { auth: true, name: 'EditEvent' },
    component: () => import('../views/Apps/Calendar/EditEvent'), // Composant à afficher pour la modification d'événement
  },
  {
    path: 'datatable',
    name: prop + '.datatable',
    meta: { auth: true, name: 'datatable' },
    component: () => import('../views/Tables/DataTable')
  }
]
const userChildRoute = (prop, mode = false) => [
  {
    path: 'profile-edit',
    name: prop + '.profile-edit',
    meta: { auth: true, name: 'Edit Profile' },
    component: () => import('../views/User/ProfileEdit')
  },
  {
    path: 'accountsetting',
    name: prop + '.accountsetting',
    meta: { auth: true, name: 'Account Setting' },
    component: () => import('../views/User/AccountSetting')
  },
  {
    path: 'privacysetting',
    name: prop + '.privacy-setting',
    meta: { auth: true, name: 'Privacy Setting' },
    component: () => import('../views/User/PrivacySetting')
  }
]


const routes = [

  {
    path: '/',
    name: 'social',
    component: () => import('../layouts/Default'),
    children: childRoutes('social')
  },
  {
    path: '/without-leftside',
    name: 'without-leftside',
    component: () => import('../layouts/WithoutLeftside'),
    children: childRoutes('leftside')
  },
  {
    path: '/without-rightside',
    name: 'without-rightside',
    component: () => import('../layouts/WithoutRightside'),
    children: childRoutes('rightside')
  },
  {
    path: '/auth',
    name: 'auth',
    component: () => import('../layouts/Empty'),
    children: blankchildRoutes('auth1')
  },
  {
    path: '/chat',
    name: 'chat',
    component: () => import('../layouts/Empty.vue'),
    children: chatChildRoutes('chat')
  },
  {
    path: '/pages',
    name: 'pages',
    component: () => import('../layouts/Empty'),
    children: pagesChildRoutes('default')
  },
  {
    path: '/blog',
    name: 'blog',
    component: () => import('../layouts/Default'),
    children: blogchildRoutes('blog')
  },
  {
    path: '/store',
    name: 'store',
    component: () => import('../layouts/Default'),
    children: storechildRoutes('store')
  },
  {
    path: '/icon',
    name: 'icon',
    component: () => import('../layouts/Default'),
    children: iconChildRoute('icon')
  },
  {
    path: '/form',
    name: 'form',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: formChildRoute('form')
  },
  {
    path: '/form-wizard',
    name: 'form-wizard',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: formwizardChildRoute('form-wizard')
  },
  {
    path: '/app',
    name: 'app',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: appChildRoute('app')
  },
  {
    path: '/extra-pages',
    name: 'extra-pages',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: defaultlayout('extra-pages')
  },
  {
    path: '/core',
    name: 'core',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: coreChildRoute('core')
  },
  {
    path: '/table',
    name: 'table',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: tableChildRoute('table')
  },
  {
    path: '/user',
    name: 'user',
    component: () => import('../layouts/Default'),
    meta: { auth: true },
    children: userChildRoute('user')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  base: process.env.BASE_URL,
  routes
})

export default router
