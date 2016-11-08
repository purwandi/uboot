<template>
  <div class="board-content project-full-screen">
    <div class="clearfix">
      <div class="position-relative">
        <div class="project-columns clearfix">
          <div class="project-columns-container">
            <board-column v-for="board in boards" :title="board"></board-column>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data () {
      return{
        boards: [
          'Backlog',
          'Development',
          'Testing',
          'Done'
        ]
      }
    }
  }
</script>
