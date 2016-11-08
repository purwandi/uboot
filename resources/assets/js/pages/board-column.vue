<template>
  <div class="project-column">
    <div class="project-column-header clearfix">
      <button type="button" class="btn-create-card" aria-label="Add a note to this column">
        <i class="material-icons md-18">add</i>
      </button>
      <h4 class="project-column-title">
        <span class="">{{ title }}</span>
        <span class="counter ml-2 position-relative js-column-card-count" aria-label="Contains 4 items">4</span>
      </h4>
    </div>
    <div class="project-column-inner" @dragover.prevent @drop="drop">
      <board-issue></board-issue>
      <board-issue></board-issue>
      <board-issue></board-issue>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      required: true,
      type: String
    }
  },

  data () {
    return {

    }
  },

  methods: {
    drop (e) {
      console.log(e)
    }
  }
}
</script>
