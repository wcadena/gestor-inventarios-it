/**
 * Auth Module
 */
import { users } from './data';

const state = {
    users: null,
    loadingChatModule: false,
    selectedUser: null,
    loadingChat: false,
    chatSidebar: false
}

// getters
const getters = {
    loadingChatModule: state => {
        return state.loadingChatModule
    },
    users: state => {
        return state.users
    },
    selectedUser: state => {
        return state.selectedUser
    },
    loadingChat: state => {
        return state.loadingChat
    },
    chatSidebar: state => {
        return state.chatSidebar
    }
}

// actions
const actions = {
    getUsers(context) {
        context.commit('getUsers');
        setTimeout(() => {
            context.commit('getUserSuccess');
        }, 2000);
    },
    openChat(context, payload) {
        context.commit('loadChat', payload);
        setTimeout(() => {
            context.commit('loadChatSuccess');
        }, 2000);
    },
    sendMessage(context, payload) {
        let message = {
            id: new Date().getTime(),
            body: payload,
            isAdmin: true,
            time:"just now"
        }
        context.commit('sendMessage', message)
    },
    toggleChatSidebar(context, payload) {
        context.commit('toggleChatSidebarHandler', payload);
    }
}

// mutations
const mutations = {
    getUsers(state) {
        state.loadingChatModule = true;
    },
    getUserSuccess(state) {
        state.users = users;
        state.loadingChatModule = false;
    },
    loadChat(state, user) {
        state.loadingChat = true
        state.selectedUser = user
        for (let i = 0; i < state.users.length; i++) {
            let selectedUser = state.users[i];
            if (selectedUser.id === user.id) {
                state.users[i].selected = true
                state.chatSidebar = false
            } else {
                state.users[i].selected = false
            }
        }
    },
    loadChatSuccess(state) {
        state.loadingChat = false
    },
    sendMessage(state, message) {
        for (let i = 0; i < state.users.length; i++) {
            let user = state.users[i];
            if (user.selected) {
                state.users[i].chats.push(message)
            }
        }
    },
    toggleChatSidebarHandler(state, val) {
        state.chatSidebar = val;
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
