<template>
  <div>
    <page-title-bar></page-title-bar>
    <v-container fluid pt-0>
      	<app-card 
					colClasses="xs12 sm12 md12 lg12"
					:fullScreen="true" 
					:reloadable="true" 
					:closeable="true"
					customClasses="blog-widget"
				>
					<dropzone></dropzone>
				</app-card>
    </v-container>
  </div>  
</template>

<script>
  import Dropzone from "Components/Widgets/Dropzone";
  export default {
    components: {
      Dropzone
    }
  }
</script>