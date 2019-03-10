<template>
    <div>
        <p>(You can double click on an item to turn it into a folder.)</p>

        <!-- the demo root element -->
        {{treeData}}
    </div>
</template>

<script>

  // demo data
  var dataxs = {
    name: 'My Tree',
    children: [
      { name: 'hello' },
      { name: 'wat' },
      {
        name: 'child folder',
        children: [
          {
            name: 'child folder',
            children: [
              { name: 'hello' },
              { name: 'wat' }
            ]
          },
          { name: 'hello' },
          { name: 'wat' },
          {
            name: 'child folder',
            children: [
              { name: 'hello' },
              { name: 'wat' }
            ]
          }
        ]
      }
    ]
  }
  // boot up the demo
  Vue.component('rol', {

    props: {
      model: Object
    },
    data: function() {
      return {
        treeData: dataxs
      }
    }
  })


</script>

<style scoped>

</style>