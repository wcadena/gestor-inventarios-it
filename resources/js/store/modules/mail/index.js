/**
 * Mail Module
 */
import { emails, mailboxes } from './data';

const state = {
	allEmails: emails,
	emails: null,
	loadingEmails: false,
	selectedEmail: null,
	mailboxes
}

const getters = {
	emails: state => {
		return state.emails;
	},
	loadingEmails: state => {
		return state.loadingEmails;
	},
	selectedEmail: state => {
		return state.selectedEmail;
	},
	mailboxes: state => {
		return state.mailboxes;
	}
}

const actions = {
	getEmails(context) {
		context.commit('showLoadingEmailsIndicator');
		setTimeout(() => {
			context.commit('getEmails');
		}, 500)
	},
	onSelectEmail(context, payload) {
		context.commit('onSelectEmailHandler', payload);
	},
	markAsStarEmail(context, payload) {
		context.commit('markAsStarEmailHandler', payload);
	},
	onViewEmail(context, payload) {
		context.commit('showLoadingEmailsIndicator');
		setTimeout(() => {
			context.commit('onViewEmailHandler', payload);
		}, 500)
	},
	filterEmails(context, payload) {
		context.commit('showLoadingEmailsIndicator');
		setTimeout(() => {
			context.commit('filterEmailsHandler', payload);
		}, 500)
	},
	backToEmails(context, payload) {
		context.commit('backToEmailsHandler');
	},
	onDeleteEmail(context) {
		context.commit('onDeleteEmailHandler');
	},
	onSearchEmail(context, payload) {
		context.commit('onSearchEmailHandler', payload);
	}
}

const mutations = {
	showLoadingEmailsIndicator(state) {
		state.loadingEmails = true;
	},
	getEmails(state) {
		state.emails = state.allEmails.filter(email => email.inbox);
		state.loadingEmails = false;
	},
	onSelectEmailHandler(state, email) {
		let indexOfEmail = state.emails.indexOf(email);
		state.emails[indexOfEmail].value = !email.value;
	},
	markAsStarEmailHandler(state, email) {
		let indexOfEmail = state.emails.indexOf(email);
		state.emails[indexOfEmail].starred = !email.starred;
	},
	onViewEmailHandler(state, email) {
		state.selectedEmail = email;
		state.loadingEmails = false;
	},
	onDeleteEmailHandler(state) {
		for (let i = 0; i < state.emails.length; i++) {
			const element = state.allEmails[i];
			if (element.id === state.selectedEmail.id) {
				state.emails[i].trash = true
				state.emails[i].inbox = false
				state.selectedEmail = null
			}
		}
	},
	filterEmailsHandler(state, filter) {
		switch (filter.id) {
			case 1:
				state.emails = state.allEmails.filter((email) => email.inbox)
				break;
			case 2:
				state.emails = state.allEmails.filter((email) => email.draft)
				break;
			case 3:
				state.emails = state.allEmails.filter((email) => email.starred)
				break;
			case 4:
				state.emails = state.allEmails.filter((email) => email.sent)
				break;
			case 5:
				state.emails = state.allEmails.filter((email) => email.spam)
				break;
			case 6:
				state.emails = state.allEmails.filter((email) => email.trash)
				break;
			default:
				state.emails = state.allEmails.filter((email) => email.inbox)
				break;
		}
		state.loadingEmails = false;
		state.selectedEmail = null;
	},
	backToEmailsHandler(state) {
		state.selectedEmail = null;
	},
	onSearchEmailHandler(state, text) {
		if (text === '') {
			state.emails = state.allEmails.filter((email) => email.inbox)
		}
		state.emails = state.allEmails.filter((email) => email.text.toLowerCase().indexOf(text.toLowerCase()) > -1);
	}
}

export default {
	state,
	getters,
	actions,
	mutations
}