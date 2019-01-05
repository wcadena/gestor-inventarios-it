<template>
  <li>
    <div
            :class="{bold: isFolder}"
            @click="toggle"
            @dblclick="changeType">
      {{ model.name }}
      <span v-if="isFolder">[{{ open ? '-' : '+' }}]</span>
    </div>
    <ul v-show="open" v-if="isFolder">
      <permiso
              class="permiso"
              v-for="(model, index) in model.children"
              :key="index"
              :model="model">
      </permiso>
      <li class="add" @click="addChild">+</li>
    </ul>
  </li>
</template>

<script>
  // define the item component
  Vue.component('permiso', {

    props: {
      model: Object
    },
    data: function () {
      return {
        open: false
      }
    },
    computed: {
      isFolder: function () {
        return this.model.children &&
                this.model.children.length
      }
    },
    methods: {
      toggle: function () {
        if (this.isFolder) {
          this.open = !this.open
        }
      },
      changeType: function () {
        if (!this.isFolder) {
          Vue.set(this.model, 'children', [])
          this.addChild()
          this.open = true
        }
      },
      addChild: function () {
        this.model.children.push({
          name: 'new stuff'
        })
      }
    }
  })


</script>

<style scoped>

</style>
