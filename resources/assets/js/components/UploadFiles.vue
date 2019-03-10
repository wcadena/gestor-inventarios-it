<template>
    <div class="container">
        <div class="large-12 medium-12 small-12 filezone">
            <input type="file" id="files" ref="files" multiple v-on:change="handleFiles()"/>
            <p>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Suelta tus archivos aquí <br>o click para buscar.
            </p>
        </div>
        <div v-for="(file, key) in files" class="file-listing">
            <img class="preview" v-bind:ref="'preview'+parseInt(key)"/>
            {{ file.name }}
            <div class="success-container" v-if="file.id > 0">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Listo
                <input type="hidden" :name="input_name" :value="file.id"/>
            </div>
            <div class="remove-container" v-else>
                <a class="remove" v-on:click="removeFile(key)">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Quitar
                </a>
            </div>
        </div>
        <a class="btn btn-default btn-lg"  v-on:click="submitFiles()" v-show="files.length > 0" v-bind:class="[subiendo_datos ? 'disabled' : '']" >
            <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> {{ subiendo_datos ? 'Enviando' : 'Enviar' }}</a>
    </div>
</template>

<style scoped>
    input[type="file"]{
        opacity: 0;
        width: 100%;
        height: 200px;
        position: absolute;
        cursor: pointer;
    }
    .filezone {
        outline: 2px dashed grey;
        outline-offset: -10px;
        background: #ccc;
        color: dimgray;
        padding: 10px 10px;
        min-height: 200px;
        position: relative;
        cursor: pointer;
    }
    .filezone:hover {
        background: #c0c0c0;
    }

    .filezone p {
        font-size: 1.2em;
        text-align: center;
        padding: 50px 50px 50px 50px;
    }
    div.file-listing img{
        max-width: 90%;
    }

    div.file-listing{
        margin: auto;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    div.file-listing img{
        height: 100px;
    }
    div.success-container{
        text-align: center;
        color: green;
    }

    div.remove-container{
        text-align: center;
    }

    div.remove-container a{
        color: red;
        cursor: pointer;
    }
</style>
<script>
  export default {
    props: ['input_name', 'post_url','imageable_type','imageable_id','vinculo_padre'],
    data() {
      return {
        files: [],
        subiendo_datos: false
      }
    },
    methods: {
      // your methods here
      handleFiles() {
        let uploadedFiles = this.$refs.files.files;

        for(var i = 0; i < uploadedFiles.length; i++) {
          this.files.push(uploadedFiles[i]);
        }
        this.getImagePreviews();
      },
      getImagePreviews(){
        for( let i = 0; i < this.files.length; i++ ){
          if ( /\.(jpe?g|png|gif)$/i.test( this.files[i].name ) ) {
            let reader = new FileReader();
            reader.addEventListener("load", function(){
              this.$refs['preview'+parseInt(i)][0].src = reader.result;
            }.bind(this), false);
            reader.readAsDataURL( this.files[i] );
          }else{
            this.$nextTick(function(){
              this.$refs['preview'+parseInt(i)][0].src = '/img/generic.png';
            });
          }
        }
      },
      removeFile( key ){
        this.files.splice( key, 1 );
        this.getImagePreviews();
      },
      submitFiles() {
        this.subiendo_datos = true;
        for( let i = 0; i < this.files.length; i++ ){
          if(this.files[i].id) {
            continue;
          }
          let formData = new FormData();
          formData.append('file', this.files[i]);
          formData.append('imageable_type', this.imageable_type);
          formData.append('imageable_id', this.imageable_id);
          formData.append('vinculo_padre', this.vinculo_padre);
          axios.post('/' + this.post_url,
            formData,
            {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }
          ).then(function(data) {
            this.files[i].id = data['data']['id'];
            this.files.splice(i, 1, this.files[i]);
            console.log('success');
            this.subiendo_datos = false;
          }.bind(this)).catch(function(data) {
            console.log('error');
            this.subiendo_datos = false;
          });
        }
      }
    }
  }
</script>
