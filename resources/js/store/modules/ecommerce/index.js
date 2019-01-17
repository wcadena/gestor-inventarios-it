/**
 * Ecommerce Module
 */
import { cart, creditCard } from "./data";

const state = {
   cart,
   creditCard,
   ecommerceSidebarFilter: false
}

// getters
const getters = {
   cart: state => {
      return state.cart;
   },
   creditCard: state => {
      return state.creditCard;
   },
   ecommerceSidebarFilter: state => {
      return state.ecommerceSidebarFilter;
   }
}

// actions
const actions = {
   addProductToCart(context, payload) {
      context.commit('onAddProductToCart', payload);
   },
   onDeleteProductFromCart(context, payload) {
      context.commit("onDeleteProductFromCart", payload);
   },
   changeQuantityHandler(context, payload) {
      context.commit('onChangeQuantityHandler', payload);
   },
   onDeleteCard(context, payload) {
      context.commit('onDeleteCard', payload);
   },
   addNewCard(context, payload) {
      context.commit('addNewCard', payload);
   },
   toggleEcommerceSidebarFilter(context, payload) {
      context.commit('toggleEcommerceSidebarFilterHandler', payload);
   }
}

// mutations
const mutations = {
   onAddProductToCart(state, payload) {
      let newProduct = {
         id: payload.objectID,
         productImg: payload.image,
         name: payload.name,
         price: payload.price,
         quantity: 1,
         total: payload.price
      }
      state.cart.push(newProduct);
   },
   onDeleteProductFromCart(state, payload) {
      let index = state.cart.indexOf(payload);
      state.cart.splice(index, 1);
   },
   onChangeQuantityHandler(state, payload) {
      let quantity = payload.e.target.value,
         cartItem = payload.cartItem,
         indexOfItem = state.cart.indexOf(cartItem)
      state.cart[indexOfItem].total = cartItem.price * quantity;
      state.cart[indexOfItem].quantity = quantity;
   },
   onDeleteCard(state, payload) {
      let index = state.creditCard.indexOf(payload);
      state.creditCard.splice(index, 1);
   },
   addNewCard(state, payload) {
      let cardNumber = payload.last4Digit.substr(0, 12);
      let last4Digits = payload.last4Digit.substr(12);
      let first12digits = payload.last4Digit.replace(cardNumber, '************');
      let newCardNumber = payload.last4Digit.replace(cardNumber, '***********'); + last4Digits;
      payload.last4Digit = newCardNumber;
      state.creditCard.push(payload);
   },
   toggleEcommerceSidebarFilterHandler(state, payload) {
      state.ecommerceSidebarFilter = payload;
   }
}

export default {
   state,
   getters,
   actions,
   mutations
}
