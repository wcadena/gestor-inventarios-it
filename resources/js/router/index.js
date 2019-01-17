import Vue from 'vue'
import Router from 'vue-router'

//routes
import defaultRoutes from './default';
import horizontalRoutes from './horizontal';
import boxedRoutes from './boxed';
import mini from './mini';
import boxedV2 from './boxed-v2';

// session components
const SignUpOne = () => import('Views/session/SignUpOne');
const LoginOne = () => import('Views/session/LoginOne');
const LockScreen = () => import('Views/session/LockScreen');
const ForgotPassword = () => import('Views/session/ForgotPassword');
const ResetPassword = () => import('Views/session/ResetPassword');

const Auth0CallBack = () => import('Components/Auth0Callback/Auth0Callback');

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		defaultRoutes,
		horizontalRoutes,
		boxedRoutes,
		mini,
		boxedV2,
		{
			path: '/callback',
			component: Auth0CallBack
		},
		{
			path: '/session/sign-up',
			component: SignUpOne,
			meta: {
				title: 'message.signUp',
				breadcrumb: 'Session / Sign Up'
			}
		},
		{
			path: '/session/login',
			component: LoginOne,
			meta: {
				title: 'message.login',
				breadcrumb: 'Session / Login'
			}
		},
		{
			path: '/session/lock-screen',
			component: LockScreen,
			meta: {
				title: 'Lock Screen',
				breadcrumb: 'Session / Lock Screen'
			}
		},
		{
			path: '/session/forgot-password',
			component: ForgotPassword,
			meta: {
				title: 'message.forgotPassword',
				breadcrumb: 'Session / Forgot Password'
			}
		},
		{
			path: '/session/reset-password',
			component: ResetPassword,
			meta: {
				title: 'message.resetPassword',
				breadcrumb: 'Session / Reset Password'
			}
		}
	]
})
