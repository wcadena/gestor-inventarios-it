<template>
 <form method="post" @submit.prevent="submit" @keydown="clearErrors($event.target.name)">
  <div class="alert alert-success text-center" v-show="form.succeeded" id="result"> {{ trans('adminlte_lang_message.registered') }} <i class="fa fa-refresh fa-spin"></i> {{ trans('adminlte_lang_message.entering') }}</div>
  <div class="form-group has-feedback " :class="{ 'has-error': form.errors.has('name') }">
   <input type="text" class="form-control" :placeholder="trans('adminlte_lang_message.fullname')" name="name" value="" v-model="form.name" autofocus/>
   <span class="glyphicon glyphicon-user form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
   </transition>
  </div>
  <!---->
  <div class="form-group has-feedback " :class="{ 'has-error': form.errors.has('first_name') }">
   <input type="text" class="form-control" :placeholder="trans('form.first_name')" name="first_name" value="" v-model="form.first_name" autofocus/>
   <span class="glyphicon glyphicon-user form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('first_name')" v-text="form.errors.get('first_name')"></span>
   </transition>
  </div>
  <div class="form-group has-feedback " :class="{ 'has-error': form.errors.has('last_name') }">
   <input type="text" class="form-control" :placeholder="trans('form.last_name')" name="last_name" value="" v-model="form.last_name" autofocus/>
   <span class="glyphicon glyphicon-user form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('last_name')" v-text="form.errors.get('last_name')"></span>
   </transition>
  </div>
  <div class="form-group has-feedback " :class="{ 'has-error': form.errors.has('username') }">
   <input type="text" class="form-control" :placeholder="trans('form.username')" name="username" value="" v-model="form.username" autofocus/>
   <span class="glyphicon glyphicon-user form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('username')" v-text="form.errors.get('username')"></span>
   </transition>
  </div>
  <!---->
  <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('email') }">
   <input type="email" class="form-control" :placeholder="trans('adminlte_lang_message.email')" name="email" value="" v-model="form.email"/>
   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
   </transition>
  </div>
  <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('password') }">
   <input type="password" class="form-control" :placeholder="trans('adminlte_lang_message.password')" name="password" v-model="form.password"/>
   <span class="glyphicon glyphicon-lock form-control-feedback"></span>
   <transition name="fade">
     <span class="help-block" v-if="form.errors.has('password')" v-text="form.errors.get('password')"></span>
   </transition>
  </div>
  <div class="form-group has-feedback">
   <input type="password" class="form-control" :placeholder="trans('adminlte_lang_message.retypepassword')" name="password_confirmation" v-model="form.password_confirmation"/>
  </div>
  <div class="row">
   <div class="col-xs-7">
    <label>
     <div class="checkbox_register icheck">
      <label data-toggle="modal" data-target="#termsModal">
       <input type="checkbox" name="terms" v-model="form.terms" class="has-error">
       <a href="#" :class="{ 'text-danger': form.errors.has('terms') }" v-text="trans('adminlte_lang_message.conditions')"></a>
      </label>
     </div>
    </label>
   </div>
   <div class="col-xs-4 col-xs-push-1">
    <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()" v-text="trans('adminlte_lang_message.register')"><i v-if="form.submitting" class="fa fa-refresh fa-spin"></i> </button>
   </div>
  </div>
  <div v-if="form.errors.has('terms')" class="form-group has-feedback" :class="{ 'has-error': form.errors.has('terms') }">
   <span class="help-block" v-if="form.errors.has('terms')" v-text="form.errors.get('terms')"></span>
  </div>
  <ul v-if="errores" class="list-group">
   <li  v-for=" error in errores" class="list-group-item list-group-item-danger " role="alert">
    {{ error  }}
    </li>
  </ul>

 </form>

</template>

<style src="./fade.css"></style>

<script>

import Form from 'acacha-forms'
import initialitzeIcheck from './InitializeIcheck'
import redirect from './redirect'

  export default {
    mixins: [initialitzeIcheck, redirect],
    data: function () {
      return {
       form: new Form({ name: '', email: '', password: '', password_confirmation: '', terms: '', first_name: '',  last_name: '' ,username : ''}),
       errores:[]
      }
    },
    watch: {
      'form.terms': function (value) {
        if (value) {
          $('input').iCheck('check')
        } else {
          $('input').iCheck('uncheck')
        }
      }
    },
    methods: {
      submit () {
        this.form.post('/register')
          .then(response => {
            var component = this;
            setTimeout(function(){
              component.redirect(response)
            }, 2500);
          })
          .catch(error => {
            console.log(this.trans('adminlte_lang_message.registererror') + ':' + error)
           this.errores =  error.response.data;
          })
      },
      clearErrors (name) {
        if (name === 'password_confirmation') {
          name = 'password'
          this.form.errors.clear('password_confirmation')
        }
        this.form.errors.clear(name)
      }
    },
    mounted () {
      this.initialitzeICheck('terms')
    }
  }

</script>
