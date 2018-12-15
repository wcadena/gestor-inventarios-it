<template>
 <form method="post" @submit.prevent="submit" @keydown="clearErrors($event.target.name)">
  <div class="alert alert-success" v-show="form.succeeded" v-text="result"></div>
  <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('email') }">
   <input type="email" class="form-control" :placeholder="trans('adminlte_lang_message.email')" name="email" v-model="form.email" autofocus/>
   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
   <transition name="fade">
    <span class="help-block" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
   </transition>
  </div>

  <div class="row">
   <div class="col-xs-2">
   </div><!-- /.col -->
   <div class="col-xs-8">
    <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()"><i v-if="form.submitting" class="fa fa-refresh fa-spin"></i> {{ trans('adminlte_lang_message.sendpassword') }}</button>
   </div><!-- /.col -->
   <div class="col-xs-2">
   </div><!-- /.col -->
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

export default {
  data: function () {
    return {
      form: new Form({ email: ''}),
      result: '',
      errores:[]
    }
  },
  methods: {
    submit () {
      this.form.post('/password/email')
       .then(response => {
         this.result = response.data.status;
       })
       .catch(error => {
         console.log(this.trans('adminlte_lang_message.sendpassword') + ':' + error)
         this.errores =  error.response.data;
       })
    },
    clearErrors (name) {
     console.log(111);
      this.form.errors.clear(name)
      this.form.succeeded = false
      this.result = ''
      errores:[]
    }
  },
  mounted () {
    this.form.clearOnSubmit = true
  }
}

</script>
