<template>
  <div class="widget">
    <div v-if="activeItems && activeItems.length > 0">
      <ul>
        <li v-for="item in activeItems" :key="item.id">
          {{item.name}}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      loading: true,
      list: [{name:'John',active: true},
        {name: 'Jane', active: true},
        {name: 'Bob', active: false}
      ],
    }
  },
  computed: {
    activeItems() {
      /*
        return `this.list` as an Array of object and filter by if active is true
        Expected output
        [
          {name: 'John', active: true},
          {name: 'Jane', active: true}
        ]
      */
return this.list.filter((d)=> d.active === true)
    }
  }
}
</script>
